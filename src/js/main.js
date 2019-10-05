var button = document.querySelector('#button');
var modal = document.querySelector('#modal');
var close = document.querySelector('#close');
var closeModalTimeout = 5000;

button.addEventListener('click', function(){
  modal.classList.add('modal_active');
});

modal.addEventListener('click', function(){
  modal.classList.remove('modal_active');
});

setTimeout((closeModalTimeout) => {
  modal.classList.remove('modal_active');
}, closeModalTimeout);
