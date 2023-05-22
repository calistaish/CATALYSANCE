window.addEventListener('load', function() {
    var container = document.querySelector('.container4');
    container.classList.add('loaded');
  
    // Stop the loader animation after the first rotation
    var preloader = document.querySelector('.container4 .preloader');
    preloader.style.animationIterationCount = '2';
  
    // Show the content
    var content = document.querySelector('.content5');
    content.style.opacity = '1';
    content.style.visibility = 'visible';
  
    // Hide the loader
    var loader = document.querySelector('.loader');
    loader.style.display = 'none';
  });
  
  // Popup
  const popup = document.querySelector(".popup");
  const closePopup = document.querySelector(".popup-close");
  
  if (popup) {
    closePopup.addEventListener("click", () => {
      popup.classList.add("hide-popup");
    });
  
    window.addEventListener("load", () => {
      setTimeout(() => {
        popup.classList.remove("hide-popup");
      }, 1000);
    });
  }
  
  const header = document.querySelector("header");
  window.addEventListener('DOMContentLoaded', () => {
    const burgerMenu = document.querySelector('.burger-menu');
    const burgerIcons = document.querySelector('.burger-icons');
    const icons = document.querySelector('.icons');
    const menu = document.querySelector('.menu');
  
    burgerMenu.addEventListener('click', () => {
      burgerMenu.classList.toggle('active');
      menu.classList.toggle('show');
    });
  
    burgerIcons.addEventListener('click', () => {
      burgerIcons.classList.toggle('active');
      icons.classList.toggle('show');
    });
  });
  
  window.addEventListener("scroll", function() {
    header.classList.toggle("sticky", window.scrollY > 0);
  });
  
  let menu = document.querySelector('#menu-icon');
  let navbar = document.querySelector('.navbar');
  
  menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open');
  };
  
  window.onscroll = () => {
    menu.classList.remove('bx-x');
    navbar.classList.remove('open');
  };
  
  const allStar = document.querySelectorAll('.rating .star')
  const ratingValue = document.querySelector('.rating input')
  
  allStar.forEach((item, idx)=> {
    item.addEventListener('click', function () {
      let click = 0
      ratingValue.value = idx + 1
  
      allStar.forEach(i=> {
        i.classList.replace('bxs-star', 'bx-star')
        i.classList.remove('active')
      })
      for(let i=0; i<allStar.length; i++) {
        if(i <= idx) {
          allStar[i].classList.replace('bx-star', 'bxs-star')
          allStar[i].classList.add('active')
        } else {
          allStar[i].style.setProperty('--i', click)
          click++
        }
      }
    })
  });
  var sortingSelect = document.getElementById('sorting-select');
      var productContainer = document.querySelector('.product-list');
  
      sortingSelect.addEventListener('change', function() {
        var sortBy = sortingSelect.value;
        sortProducts(sortBy);
      });
  
      function sortProducts(sortBy) {
        var products = Array.from(productContainer.children);
  
        products.sort(function(a, b) {
          var aValue, bValue;
  
          switch (sortBy) {
            case 'price':
              aValue = parseFloat(a.querySelector('p.price').innerText.split('$')[1]);
              bValue = parseFloat(b.querySelector('p.price').innerText.split('$')[1]);
              break;
            case 'rating':
              aValue = parseFloat(a.querySelector('p.rating').innerText.split(' ')[1]);
              bValue = parseFloat(b.querySelector('p.rating').innerText.split(' ')[1]);
              break;
            default:
              return 0;
          }
  
          return aValue - bValue;
        });
  
        products.forEach(function(product) {
          productContainer.appendChild(product);
        });
      }