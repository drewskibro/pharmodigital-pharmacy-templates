// ============================================
// WEIGHT LOSS PAGE JAVASCRIPT
// ============================================

// ============================================
// BMI CALCULATOR
// ============================================
(function () {
  var submitBtn = document.getElementById('wl-calculator-submit');
  if (!submitBtn) return;

  var unitBtns = document.querySelectorAll('.wl-calculator-unit-btn');
  var metricFields = document.querySelector('.wl-calculator-metric');
  var imperialFields = document.querySelector('.wl-calculator-imperial');
  var currentUnit = 'metric';

  // Unit toggle
  unitBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      currentUnit = btn.getAttribute('data-unit');
      unitBtns.forEach(function (b) { b.classList.remove('active'); });
      btn.classList.add('active');

      if (currentUnit === 'metric') {
        metricFields.classList.add('active');
        imperialFields.classList.remove('active');
      } else {
        metricFields.classList.remove('active');
        imperialFields.classList.add('active');
      }
    });
  });

  // Get weight in kg
  function getWeightKg() {
    if (currentUnit === 'metric') {
      return parseFloat(document.getElementById('wl-weight-kg').value) || 0;
    }
    var stone = parseFloat(document.getElementById('wl-weight-stone').value) || 0;
    var lbs = parseFloat(document.getElementById('wl-weight-lbs').value) || 0;
    return (stone * 14 + lbs) * 0.453592;
  }

  // Get height in cm
  function getHeightCm() {
    if (currentUnit === 'metric') {
      return parseFloat(document.getElementById('wl-height-cm').value) || 0;
    }
    var feet = parseFloat(document.getElementById('wl-height-feet').value) || 0;
    var inches = parseFloat(document.getElementById('wl-height-inches').value) || 0;
    return (feet * 12 + inches) * 2.54;
  }

  // BMI category
  function bmiCategory(bmi) {
    if (bmi < 18.5) return 'Underweight';
    if (bmi < 25) return 'Normal weight';
    if (bmi < 30) return 'Overweight';
    return 'Obese';
  }

  // Format weight for display
  function formatWeight(kg) {
    if (currentUnit === 'metric') {
      return kg.toFixed(1) + ' kg';
    }
    var totalLbs = Math.round(kg / 0.453592);
    var st = Math.floor(totalLbs / 14);
    var remainLbs = totalLbs % 14;
    return st + 'st ' + remainLbs + 'lbs';
  }

  function calculate() {
    var weightKg = getWeightKg();
    var heightCm = getHeightCm();

    if (weightKg < 40 || heightCm < 100) return;

    var heightM = heightCm / 100;
    var bmi = weightKg / (heightM * heightM);

    // Display BMI
    var bmiNumberEl = document.getElementById('wl-bmi-number');
    var bmiCategoryEl = document.getElementById('wl-bmi-category');
    bmiNumberEl.textContent = bmi.toFixed(1);
    bmiCategoryEl.textContent = bmiCategory(bmi);

    // Projected weight loss (10-15% range over 12 months)
    var lossLow = weightKg * 0.10;
    var lossHigh = weightKg * 0.15;
    var projectionEl = document.getElementById('wl-projection-range');
    projectionEl.textContent = formatWeight(lossLow) + ' – ' + formatWeight(lossHigh);

    var detailEl = document.getElementById('wl-projection-detail');
    detailEl.textContent = 'You could go from ' + formatWeight(weightKg) + ' to ' + formatWeight(weightKg - lossLow) + ' – ' + formatWeight(weightKg - lossHigh);

    // Show results and scroll
    var results = document.getElementById('calculatorResults');
    results.classList.add('visible');
    results.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
  }

  submitBtn.addEventListener('click', calculate);

  // Calculate on Enter key
  document.querySelectorAll('.wl-calculator-form input').forEach(function (input) {
    input.addEventListener('keydown', function (e) {
      if (e.key === 'Enter') {
        e.preventDefault();
        calculate();
      }
    });
  });
})();

// ============================================
// FAQ ACCORDION
// ============================================
function toggleFAQ(button) {
  var item = button.closest('.wl-faq-item');
  var isActive = item.classList.contains('wl-faq-active');

  // Close all FAQs
  document.querySelectorAll('.wl-faq-item').forEach(function (faq) {
    faq.classList.remove('wl-faq-active');
  });

  // Open clicked FAQ if it wasn't active
  if (!isActive) {
    item.classList.add('wl-faq-active');
  }
}
