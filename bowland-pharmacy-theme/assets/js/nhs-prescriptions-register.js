(function () {
  'use strict';

  var form    = document.getElementById('npreg-form');
  if (!form) return;

  var card    = form.closest('.npreg-form-card');
  var success = document.getElementById('npreg-success');
  var errorEl = document.getElementById('npreg-error');
  var btn     = form.querySelector('.npreg-submit-btn');
  var btnText = form.querySelector('.npreg-submit-label');
  var origBtnText = btnText ? btnText.textContent : 'Register Now';

  function showError(msg) {
    if (!errorEl) return;
    errorEl.textContent = msg;
    errorEl.hidden = false;
    errorEl.scrollIntoView({ behavior: 'smooth', block: 'center' });
  }

  function showSuccess() {
    form.hidden = true;
    if (success) {
      success.hidden = false;
      if (card) {
        card.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    }
  }

  function setLoading(loading) {
    if (!btn) return;
    btn.disabled = loading;
    btn.classList.toggle('is-loading', loading);
    if (btnText) {
      btnText.textContent = loading ? 'Sending' : origBtnText;
    }
  }

  form.addEventListener('submit', function (e) {
    e.preventDefault();
    if (errorEl) errorEl.hidden = true;

    // Native required check — let browser show first invalid field
    if (!form.checkValidity()) {
      form.reportValidity();
      return;
    }

    if (typeof window.bpNpregAjax === 'undefined') {
      showError('Form configuration error. Please refresh the page and try again.');
      return;
    }

    setLoading(true);

    var data = new FormData(form);
    var xhr  = new XMLHttpRequest();
    xhr.open('POST', window.bpNpregAjax.ajaxurl, true);
    xhr.onload = function () {
      setLoading(false);
      var res;
      try { res = JSON.parse(xhr.responseText); }
      catch (err) {
        showError('Sorry, something went wrong. Please call us instead.');
        return;
      }
      if (res && res.success) {
        showSuccess();
      } else {
        var msg = (res && res.data && res.data.message) ? res.data.message : 'Sorry, your registration could not be submitted. Please try again or call us.';
        showError(msg);
      }
    };
    xhr.onerror = function () {
      setLoading(false);
      showError('Network error. Please check your connection and try again.');
    };
    xhr.send(data);
  });
})();
