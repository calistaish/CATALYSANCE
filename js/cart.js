
  
  window.addEventListener("DOMContentLoaded", function() {
    var preloader = document.querySelector(".preloader");
    var content = document.querySelector(".content");
  
    setTimeout(function() {
      preloader.style.opacity = 0;
      preloader.style.visibility = "hidden";
      content.style.opacity = 1;
      content.style.visibility = "visible";
    }, 3000);
  });
  
  const header = document.querySelector("header");
  window.addEventListener('DOMContentLoaded', () => {
    const burgerMenu = document.querySelector('.burger-menu');
    const burgerIcons = document.querySelector('.burger-icons');
    const icons = document.querySelector('.icons');
    const menu = document.querySelector('.menu');
  
    burgerIcons.addEventListener('click', () => {
      burgerIcons.classList.toggle('active');
      icons.classList.toggle('show');
    });
  });
  
  window.addEventListener('DOMContentLoaded', () => {
    const burgerMenu2 = document.querySelector('.burger-menu2');
    const burgerIcons2 = document.querySelector('.burger-icons2');
    const icons2 = document.querySelector('.icons2');
    const menu2 = document.querySelector('.menu2');
  
    burgerMenu2.addEventListener('click', () => {
      burgerMenu2.classList.toggle('active');
      menu2.classList.toggle('show');
    });
  
    burgerIcons2.addEventListener('click', () => {
      burgerIcons2.classList.toggle('active');
      icons2.classList.toggle('show');
    });
  });

  document.addEventListener('DOMContentLoaded', function() {
    const checkoutButton = document.querySelector('.fancy');
    const messageBox = document.querySelector('.message-box');
    const closeButton = document.querySelector('.close-btn');
  
    checkoutButton.addEventListener('click', function(e) {
      e.preventDefault();
      messageBox.classList.add('show');
    });
  
    closeButton.addEventListener('click', function() {
      messageBox.classList.remove('show');
    });
  });
  const proceedBtn = document.querySelector('.fancy');

proceedBtn.addEventListener('click', () => {
  document.body.style.backgroundColor = '#422f23c2';
});
  
