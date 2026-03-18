// FAQ Accordion toggle function
function toggleB12FAQ(button) {
  var item = button.closest('.b12-faq-item');
  var isActive = item.classList.contains('b12-faq-active');

  // Close all
  document.querySelectorAll('.b12-faq-item').forEach(function (faq) {
    faq.classList.remove('b12-faq-active');
  });

  // Open clicked if wasn't active
  if (!isActive) {
    item.classList.add('b12-faq-active');
  }
}
