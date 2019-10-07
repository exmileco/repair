var button = document.querySelector('#button');
var modal = document.querySelector('#modal');
var close = document.querySelector('#close');
var closeModalTimeout = 5000;
var closeTimeoutId;

button.addEventListener('click', function() {
  modal.classList.add('modal_active');
  closeTimeoutId = window.setTimeout(function () {
    modal.classList.remove('modal_active');
  }, closeModalTimeout);
  window.addEventListener('input', function () {
    window.clearTimeout(closeTimeoutId);
  }, true);
});
close.addEventListener('click', function(){
  modal.classList.remove('modal_active');
});
