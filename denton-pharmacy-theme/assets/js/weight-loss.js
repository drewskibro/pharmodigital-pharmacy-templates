// ============================================
// WEIGHT LOSS PAGE JAVASCRIPT
// ============================================

// ============================================
// SCROLL-TRIGGERED REVEAL ANIMATIONS
// ============================================
(function () {
  var reveals = document.querySelectorAll('.wl-reveal');
  if (!reveals.length) return;

  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('wl-visible');
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.15,
    rootMargin: '0px 0px -60px 0px'
  });

  reveals.forEach(function (el) {
    observer.observe(el);
  });
})();

// ============================================
// BMI CALCULATOR
// ============================================
(function () {
  var submitBtn = document.getElementById('wl-calculator-submit');
  if (!submitBtn) return;

  var weightUnit = 'kg';
  var heightUnit = 'cm';

  // Setup per-input toggle buttons
  var inputWrappers = document.querySelectorAll('.wl-calculator-input-wrapper');

  // Weight toggles (first wrapper)
  if (inputWrappers[0]) {
    inputWrappers[0].querySelectorAll('.wl-calculator-toggle-btn').forEach(function (btn) {
      btn.addEventListener('click', function () {
        weightUnit = btn.getAttribute('data-unit');
        var parent = btn.parentElement;
        parent.querySelectorAll('.wl-calculator-toggle-btn').forEach(function (b) {
          b.classList.remove('wl-calculator-toggle-active');
        });
        btn.classList.add('wl-calculator-toggle-active');
      });
    });
  }

  // Height toggles (second wrapper)
  if (inputWrappers[1]) {
    inputWrappers[1].querySelectorAll('.wl-calculator-toggle-btn').forEach(function (btn) {
      btn.addEventListener('click', function () {
        heightUnit = btn.getAttribute('data-unit');
        var parent = btn.parentElement;
        parent.querySelectorAll('.wl-calculator-toggle-btn').forEach(function (b) {
          b.classList.remove('wl-calculator-toggle-active');
        });
        btn.classList.add('wl-calculator-toggle-active');
      });
    });
  }

  // Get weight in kg
  function getWeightKg() {
    var val = parseFloat(document.getElementById('wl-weight-input').value) || 0;
    if (weightUnit === 'st') {
      return val * 6.35029; // stone to kg
    }
    return val;
  }

  // Get height in cm
  function getHeightCm() {
    var val = parseFloat(document.getElementById('wl-height-input').value) || 0;
    if (heightUnit === 'ft') {
      return val * 30.48; // feet to cm
    }
    return val;
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
    if (weightUnit === 'st') {
      var st = (kg / 6.35029).toFixed(1);
      return st + ' st';
    }
    return kg.toFixed(1) + ' kg';
  }

  function calculate() {
    var weightKg = getWeightKg();
    var heightCm = getHeightCm();

    if (weightKg < 30 || heightCm < 80) return;

    var heightM = heightCm / 100;
    var bmi = weightKg / (heightM * heightM);

    // Display BMI
    var bmiNumberEl = document.getElementById('wl-bmi-number');
    var bmiCategoryEl = document.getElementById('wl-bmi-category');
    bmiNumberEl.textContent = bmi.toFixed(1);
    bmiCategoryEl.textContent = bmiCategory(bmi);

    // Projected target weight (10-15% loss over 12 months)
    var targetHigh = weightKg - (weightKg * 0.10);
    var targetLow = weightKg - (weightKg * 0.15);
    var projectionEl = document.getElementById('wl-projection-range');
    var unit = weightUnit === 'st' ? ' st' : ' kg';
    var valHigh = weightUnit === 'st' ? (targetHigh / 6.35029).toFixed(1) : targetHigh.toFixed(1);
    var valLow = weightUnit === 'st' ? (targetLow / 6.35029).toFixed(1) : targetLow.toFixed(1);
    projectionEl.textContent = valHigh + ' – ' + valLow + unit;

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
