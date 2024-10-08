document.querySelector('.menu-btn').addEventListener('click', function () {
  this.classList.toggle('open');
  document.querySelector('.nav').classList.toggle('open');
  document.querySelector('body').classList.toggle('noscroll');
});
const fClose = document.querySelector('.fogel-subscription__close');
const fSub = document.querySelector('.fogel-subscription');
window.addEventListener('scroll', function() {
  if(pageYOffset > 100){
    fSub.style.transform = 'translateX(0)';
  }
});
if(fSub){
  window.addEventListener('scroll', function() {
    if(pageYOffset > 100){
      fSub.style.transform = 'translateX(0)';
    }
  });
  fClose.addEventListener('click', () => {
    fSub.style.transform = 'translateX(100%)';
    setTimeout(closeSub, 500) ;
  });
  function closeSub() {
    fSub.style.display = 'none'
  }
}



// =============== FAQ ==================

const faqItems = document.querySelectorAll('.faq__item');
faqItems.forEach(el => {
  el.firstElementChild.addEventListener('click', function () {
    faqItems.forEach(item => {
      item.classList.remove('open');
    });
    el.classList.add('open')
  });
});


// ================= SLIDERS ==============
if (document.querySelector('.result__slider')) {
  new Swiper('.result__slider', {
    slidesPerView: 3,
    spaceBetween: 30,
    navigation: {
      nextEl: '.result-next',
      prevEl: '.result-prev',
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
      },
      647: {
        slidesPerView: 2,
      },
      960: {
        slidesPerView: 3,
      }
    }
  });
}
if (document.querySelector('.reviews__slider')) {
  new Swiper('.reviews__slider', {
    navigation: {
      nextEl: '.reviews-next',
      prevEl: '.reviews-prev',
    },
  });
}
if (document.querySelector('.documents__slider-thumbs')) {
  new Swiper('.documents__slider-thumbs', {
    spaceBetween: 30,
    navigation: {
      nextEl: '.documents-next',
      prevEl: '.documents-prev',
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
      },
      415: {
        slidesPerView: 2,
      },
      647: {
        slidesPerView: 3,
      },
      960: {
        slidesPerView: 4,
      }
    }
  });
}
if (document.querySelector('.documents__slider')) {
  new Swiper('.documents__slider', {
    spaceBetween: 30,
    navigation: {
      nextEl: '.documents-next',
      prevEl: '.documents-prev',
    },
    thumbs: {
      swiper: '.documents__slider-thumbs',
    }
  });
}


const docSlider = document.querySelector('.documents__wrapper');
const docItems = document.querySelectorAll('.documents-thumbs__item');
if(docItems.length > 0){
  docItems.forEach(el => {
    el.addEventListener('click', function () {
      docSlider.classList.add('fullscreen');
      document.querySelector('body').classList.add('noscroll');
    })
  });
  document.querySelector('.documents__slider--close').addEventListener('click', function(){
    docSlider.classList.remove('fullscreen');
    document.querySelector('body').classList.remove('noscroll');
  })
}


