// ============================================
// MOUNJARO WEIGHT LOSS CALCULATOR
// [mounjaro_calculator] shortcode — standalone JS
// Loaded on any page that uses the shortcode
// ============================================
(function () {
  var mjCalc = document.getElementById('mj-calc');
  if (!mjCalc) return;

  var mjUnitBtns = mjCalc.querySelectorAll('.mj-calc-unit');
  var mjFields = mjCalc.querySelectorAll('.mj-calc-field');
  var mjSubmit = document.getElementById('mj-calc-submit');
  var mjResults = document.getElementById('mj-calc-results');
  var currentUnit = 'kg';

  // Unit toggle
  mjUnitBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      currentUnit = btn.getAttribute('data-unit');
      mjUnitBtns.forEach(function (b) {
        b.classList.remove('active');
        b.setAttribute('aria-pressed', 'false');
      });
      btn.classList.add('active');
      btn.setAttribute('aria-pressed', 'true');

      mjFields.forEach(function (f) { f.classList.remove('active'); });
      mjCalc.querySelector('.mj-calc-field-' + currentUnit).classList.add('active');
    });
  });

  // Get weight in kg from whichever unit is active
  function getWeightKg() {
    if (currentUnit === 'kg') {
      return parseFloat(mjCalc.querySelector('.mj-calc-field-kg .mj-calc-input').value) || 0;
    }
    if (currentUnit === 'st') {
      var st = parseFloat(mjCalc.querySelector('.mj-calc-st').value) || 0;
      var stLbs = parseFloat(mjCalc.querySelector('.mj-calc-st-lbs').value) || 0;
      return (st * 14 + stLbs) * 0.453592;
    }
    if (currentUnit === 'lbs') {
      return (parseFloat(mjCalc.querySelector('.mj-calc-field-lbs .mj-calc-input').value) || 0) * 0.453592;
    }
    return 0;
  }

  // Format weight in current unit
  function formatWeight(kg) {
    if (currentUnit === 'kg') {
      return kg.toFixed(1) + ' kg';
    }
    if (currentUnit === 'lbs') {
      return Math.round(kg / 0.453592) + ' lbs';
    }
    // stone
    var totalLbs = Math.round(kg / 0.453592);
    var st = Math.floor(totalLbs / 14);
    var remainLbs = totalLbs % 14;
    return st + 'st ' + remainLbs + 'lbs';
  }

  // SURMOUNT-1 loss percentages by week (tirzepatide 15 mg, approximate curve)
  var lossByWeek = { 12: 0.075, 24: 0.135, 52: 0.195, 72: 0.209 };

  // Animated count-up for the headline number
  function animateValue(el, targetText) {
    var match = targetText.match(/([\d.]+)/);
    if (!match) { el.textContent = targetText; return; }
    var targetNum = parseFloat(match[1]);
    var suffix = targetText.replace(match[1], '');
    var duration = 800;
    var start = performance.now();

    function tick(now) {
      var progress = Math.min((now - start) / duration, 1);
      var eased = 1 - Math.pow(1 - progress, 3);
      var current = (targetNum * eased).toFixed(1);
      el.textContent = current + suffix;
      if (progress < 1) requestAnimationFrame(tick);
      else el.textContent = targetText;
    }
    requestAnimationFrame(tick);
  }

  function calculate() {
    var weightKg = getWeightKg();
    if (weightKg < 40) return;

    // Populate timeline (3 milestones: 12, 24, 72 weeks)
    document.getElementById('mj-calc-w12').textContent = formatWeight(weightKg * lossByWeek[12]);
    document.getElementById('mj-calc-w24').textContent = formatWeight(weightKg * lossByWeek[24]);
    document.getElementById('mj-calc-w72').textContent = formatWeight(weightKg * lossByWeek[72]);

    // Total headline with count-up animation
    var totalEl = document.getElementById('mj-calc-total-loss');
    animateValue(totalEl, formatWeight(weightKg * lossByWeek[72]));

    // Before → After weight row
    var fromEl = document.getElementById('mj-calc-from');
    var toEl = document.getElementById('mj-calc-to');
    if (fromEl) fromEl.textContent = formatWeight(weightKg);
    if (toEl) toEl.textContent = formatWeight(weightKg * (1 - lossByWeek[72]));

    // Show results
    mjResults.classList.add('visible');
    mjResults.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
  }

  mjSubmit.addEventListener('click', calculate);

  // Also calculate on Enter key in any input
  mjCalc.querySelectorAll('.mj-calc-input').forEach(function (input) {
    input.addEventListener('keydown', function (e) {
      if (e.key === 'Enter') {
        e.preventDefault();
        calculate();
      }
    });
  });
})();
