/**
 * Contact Page — Form validation, AJAX submission, FAQ accordion
 * Bowland Pharmacy
 */

/* ============================================
   FAQ ACCORDION
   ============================================ */
function toggleContactFAQ(button) {
    var item = button.closest('.contact-faq-item');
    var isActive = item.classList.contains('contact-faq-active');

    // Close all
    document.querySelectorAll('.contact-faq-item').forEach(function(faq) {
        faq.classList.remove('contact-faq-active');
        faq.querySelector('.contact-faq-question').setAttribute('aria-expanded', 'false');
    });

    // Open clicked if was closed
    if (!isActive) {
        item.classList.add('contact-faq-active');
        button.setAttribute('aria-expanded', 'true');
    }
}

/* ============================================
   CONTACT FORM
   ============================================ */
document.addEventListener('DOMContentLoaded', function() {
    var form = document.getElementById('dp-contact-form');
    if (!form) return;

    var submitBtn = document.getElementById('contact-submit');
    var submitText = submitBtn.querySelector('.contact-submit-text');
    var submitLoading = submitBtn.querySelector('.contact-submit-loading');
    var statusEl = document.getElementById('contact-form-status');

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        // Clear previous errors
        form.querySelectorAll('.contact-error').forEach(function(el) {
            el.classList.remove('contact-error');
        });
        statusEl.className = 'contact-form-status';
        statusEl.textContent = '';

        // Validate required fields
        var name = form.querySelector('#contact-name');
        var email = form.querySelector('#contact-email');
        var subject = form.querySelector('#contact-subject');
        var message = form.querySelector('#contact-message');
        var errors = [];

        if (!name.value.trim()) {
            name.classList.add('contact-error');
            errors.push('name');
        }

        if (!email.value.trim() || !isValidEmail(email.value)) {
            email.classList.add('contact-error');
            errors.push('email');
        }

        if (!subject.value) {
            subject.classList.add('contact-error');
            errors.push('subject');
        }

        if (!message.value.trim()) {
            message.classList.add('contact-error');
            errors.push('message');
        }

        if (errors.length > 0) {
            statusEl.className = 'contact-form-status contact-status-error';
            statusEl.textContent = 'Please fill in all required fields.';
            form.querySelector('#contact-' + errors[0]).focus();
            return;
        }

        // Show loading state
        submitBtn.disabled = true;
        submitText.style.display = 'none';
        submitLoading.style.display = 'inline-flex';

        // Build form data
        var formData = new FormData(form);
        formData.append('action', 'bp_contact_form');

        // Send AJAX request
        var xhr = new XMLHttpRequest();
        xhr.open('POST', bpContactAjax.ajaxurl, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState !== 4) return;

            submitBtn.disabled = false;
            submitText.style.display = 'inline-flex';
            submitLoading.style.display = 'none';

            if (xhr.status === 200) {
                try {
                    var response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        statusEl.className = 'contact-form-status contact-status-success';
                        statusEl.textContent = response.data.message || 'Thank you! Your message has been sent. We\'ll be in touch soon.';
                        form.reset();
                    } else {
                        statusEl.className = 'contact-form-status contact-status-error';
                        statusEl.textContent = response.data.message || 'Something went wrong. Please try again or call us directly.';
                    }
                } catch (err) {
                    statusEl.className = 'contact-form-status contact-status-error';
                    statusEl.textContent = 'Something went wrong. Please try again or call us directly.';
                }
            } else {
                statusEl.className = 'contact-form-status contact-status-error';
                statusEl.textContent = 'Something went wrong. Please try again or call us directly.';
            }
        };
        xhr.send(formData);
    });

    function isValidEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }
});
