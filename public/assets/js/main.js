ScrollReveal({
  distance: '100px',
  duration: 1000,
  delay: 200,
})

// List Services
ScrollReveal().reveal('.service-block .list-service .col-12:nth-child(1)', { delay: 200, origin: 'bottom' })
ScrollReveal().reveal('.service-block .list-service .col-12:nth-child(2)', { delay: 300, origin: 'bottom' })
ScrollReveal().reveal('.service-block .list-service .col-12:nth-child(3)', { delay: 400, origin: 'bottom' })
ScrollReveal().reveal('.service-block .list-service .col-12:nth-child(4)', { delay: 500, origin: 'bottom' })
ScrollReveal().reveal('.service-block .list-service .col-12:nth-child(5)', { delay: 600, origin: 'bottom' })
ScrollReveal().reveal('.service-block .list-service .col-12:nth-child(6)', { delay: 700, origin: 'bottom' })
ScrollReveal().reveal('.service-block .list-service .col-12:nth-child(7)', { delay: 500, origin: 'bottom' })
ScrollReveal().reveal('.service-block .list-service .col-12:nth-child(8)', { delay: 900, origin: 'bottom' })

// List Blog
ScrollReveal().reveal('.blog-list.style-one .row >div:nth-child(1)', { delay: 200, origin: 'bottom' })
ScrollReveal().reveal('.blog-list.style-one .row >div:nth-child(2)', { delay: 300, origin: 'bottom' })
ScrollReveal().reveal('.blog-list.style-one .row >div:nth-child(3)', { delay: 400, origin: 'bottom' })
ScrollReveal().reveal('.blog-list.style-one .row >div:nth-child(4)', { delay: 500, origin: 'bottom' })

// Home1 - List benefit section Case Studies
ScrollReveal().reveal('.benefit-block .list-benefit .row >div:first-child', { delay: 200, origin: 'bottom' })
ScrollReveal().reveal('.benefit-block .list-benefit .row >div:nth-child(2)', { delay: 300, origin: 'bottom' })
ScrollReveal().reveal('.benefit-block .list-benefit .row >div:nth-child(3)', { delay: 400, origin: 'bottom' })
ScrollReveal().reveal('.benefit-block .list-benefit .row >div:last-child', { delay: 500, origin: 'bottom' })

// Home4 - List Pricing
ScrollReveal().reveal('.pricing-main .list-pricing .row .col-12:nth-child(1)', { delay: 200, origin: 'bottom' })
ScrollReveal().reveal('.pricing-main .list-pricing .row .col-12:nth-child(2)', { delay: 400, origin: 'bottom' })
ScrollReveal().reveal('.pricing-main .list-pricing .row .col-12:nth-child(3)', { delay: 600, origin: 'bottom' })

// Home5 - Section Project
ScrollReveal().reveal('.project-five .project-above .row .col-12:nth-child(1)', { delay: 200, origin: 'left' })
ScrollReveal().reveal('.project-five .project-below .row .col-12:nth-child(2)', { delay: 200, origin: 'right' })


// slider
$(".slider-block .slider-main").slick({
  dots: true,
  arrows: true,
  prevArrow: '.prev-arrow',
  nextArrow: '.next-arrow',
  slidesToShow: 1,
  slidesToScroll: 1,
  touchThreshold: 100,
  infinite: false,
  swipe: true,
  swipeToSlide: true,
  autoplay: false,
  autoplaySpeed: 3000,
  speed: 800,
  pauseOnFocus: false,
  pauseOnHover: false,
  pauseOnDotsHover: false,
  responsive: [
    {
      breakpoint: 576,
      settings: {
        arrows: false,
      }
    },
  ]
});


const bars = document.querySelectorAll('.slider-block .slider-main .slick-dots li')

if (bars) {
  bars.forEach(bar => {
    bar.onclick = function (event) {
      let images = document.querySelectorAll('.slider-item .bg-img img');
      let heading = document.querySelectorAll('.text-content .heading2');
      let subHeading = document.querySelectorAll('.text-content .body2');
      let button = document.querySelectorAll('.text-content .button-block');
      let attributes = event.target.querySelector('button').getAttribute("aria-controls");

      images.forEach(img => {
        img.classList.remove("animate__animated", "animate__fadeIn", "animate__delay-0-2s");
      })
      heading.forEach(p => {
        p.classList.remove("animate__animated", "animate__fadeInUp", "animate__delay-0-2s");
      })
      subHeading.forEach(a => {
        a.classList.remove("animate__animated", "animate__fadeInUp", "animate__delay-0-5s");
      })
      button.forEach(h3 => {
        h3.classList.remove("animate__animated", "animate__fadeInUp", "animate__delay-0-8s");
      })

      let img = document.querySelector('#' + attributes + ' .bg-img img');
      let p = document.querySelector('#' + attributes + ' .text-content .heading2');
      let a = document.querySelector('#' + attributes + ' .text-content .body2');
      let h3 = document.querySelector('#' + attributes + ' .text-content .button-block')
      img.classList.add("animate__animated", "animate__fadeIn", "animate__delay-0-2s");
      p.classList.add("animate__animated", "animate__fadeInUp", "animate__delay-0-2s");
      a.classList.add("animate__animated", "animate__fadeInUp", "animate__delay-0-5s");
      h3.classList.add("animate__animated", "animate__fadeInUp", "animate__delay-0-8s");
    }
  })
}

const prevArrow = document.querySelector('.slider-block .prev-arrow')
const nextArrow = document.querySelector('.slider-block .next-arrow')

if (prevArrow) {
  prevArrow.addEventListener('click', () => {
    let sliderActive = document.querySelector('.slider-block .slider-main .slick-list .slick-active')
    let img = sliderActive.querySelector('.bg-img img')
    let heading = sliderActive.querySelector('.text-content .heading2')
    let subHeading = sliderActive.querySelector('.text-content .body2')
    let button = sliderActive.querySelector('.text-content .button-block')

    let images = document.querySelectorAll('.slider-item .bg-img img');
    let headings = document.querySelectorAll('.text-content .heading2');
    let subHeadings = document.querySelectorAll('.text-content .body2');
    let buttons = document.querySelectorAll('.text-content .button-block');

    images.forEach(img => {
      img.classList.remove("animate__animated", "animate__fadeIn", "animate__delay-0-2s");
    })
    headings.forEach(p => {
      p.classList.remove("animate__animated", "animate__fadeInUp", "animate__delay-0-2s");
    })
    subHeadings.forEach(a => {
      a.classList.remove("animate__animated", "animate__fadeInUp", "animate__delay-0-5s");
    })
    buttons.forEach(btn => {
      btn.classList.remove("animate__animated", "animate__fadeInUp", "animate__delay-0-8s");
    })

    img.classList.add("animate__animated", "animate__fadeIn", "animate__delay-0-2s")
    heading.classList.add("animate__animated", "animate__fadeInUp", "animate__delay-0-2s")
    subHeading.classList.add("animate__animated", "animate__fadeInUp", "animate__delay-0-5s")
    button.classList.add("animate__animated", "animate__fadeInUp", "animate__delay-0-8s")
  })
}

if (nextArrow) {
  nextArrow.addEventListener('click', () => {
    let sliderActive = document.querySelector('.slider-block .slider-main .slick-list .slick-active')
    let img = sliderActive.querySelector('.bg-img img')
    let heading = sliderActive.querySelector('.text-content .heading2')
    let subHeading = sliderActive.querySelector('.text-content .body2')
    let button = sliderActive.querySelector('.text-content .button-block')

    let images = document.querySelectorAll('.slider-item .bg-img img');
    let headings = document.querySelectorAll('.text-content .heading2');
    let subHeadings = document.querySelectorAll('.text-content .body2');
    let buttons = document.querySelectorAll('.text-content .button-block');

    images.forEach(img => {
      img.classList.remove("animate__animated", "animate__fadeIn", "animate__delay-0-2s");
    })
    headings.forEach(p => {
      p.classList.remove("animate__animated", "animate__fadeInUp", "animate__delay-0-2s");
    })
    subHeadings.forEach(a => {
      a.classList.remove("animate__animated", "animate__fadeInUp", "animate__delay-0-5s");
    })
    buttons.forEach(btn => {
      btn.classList.remove("animate__animated", "animate__fadeInUp", "animate__delay-0-8s");
    })

    img.classList.add("animate__animated", "animate__fadeIn", "animate__delay-0-2s")
    heading.classList.add("animate__animated", "animate__fadeInUp", "animate__delay-0-2s")
    subHeading.classList.add("animate__animated", "animate__fadeInUp", "animate__delay-0-5s")
    button.classList.add("animate__animated", "animate__fadeInUp", "animate__delay-0-8s")
  })
}



// remove active homepage 1
function removeActiveHome() {
  document.querySelector('.header-menu .sub-nav .active').classList.remove('active')
  document.querySelector('.header-menu .sub-nav-mobile .active').classList.remove('active')
}

// get subpage, remove active in homepage 1
if (document.querySelector('.style-subpage')) {
  removeActiveHome()
}


// our project home2
$(".our-project-block .list-project .row").slick({
  dots: true,
  arrows: false,
  slidesToShow: 4,
  slidesToScroll: 1,
  touchThreshold: 100,
  swipe: true,
  swipeToSlide: true,
  autoplay: true,
  autoplaySpeed: 3000,
  speed: 500,
  pauseOnFocus: false,
  pauseOnHover: false,
  pauseOnDotsHover: false,
  responsive: [
    {
      breakpoint: 1170,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    },
  ]
});

// testimonials home2
$(".testimonials-block .container .list-comment").slick({
  dots: true,
  arrows: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  touchThreshold: 100,
  swipe: true,
  swipeToSlide: true,
  autoplay: false,
  pauseOnFocus: false,
  pauseOnHover: false,
  pauseOnDotsHover: false,
});


// case studies home3
$(".case-studies-block.style-two.style-three .container .row").slick({
  dots: false,
  arrows: false,
  slidesToShow: 3,
  slidesToScroll: 1,
  touchThreshold: 100,
  swipe: true,
  swipeToSlide: true,
  autoplay: false,
  infinite: false,
  responsive: [
    {
      breakpoint: 1170,
      settings: {
        slidesToShow: 2.5,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2.5,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1.5,
        slidesToScroll: 1,
      }
    },
  ]
});

// testimonials home3
$(".testimonials-three .container .list-comment").slick({
  dots: true,
  arrows: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  touchThreshold: 100,
  mobileFirst: true,
  swipe: true,
  swipeToSlide: true,
  autoplay: false,
  pauseOnFocus: false,
  pauseOnHover: false,
  pauseOnDotsHover: false,
  infinite: true,
  responsive: [
    {
      breakpoint: 1170,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 0,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    },
  ]
});

// testimonials home4
$(".testimonials-four .container .row").slick({
  dots: true,
  arrows: false,
  slidesToShow: 2,
  slidesToScroll: 2,
  touchThreshold: 100,
  swipe: true,
  swipeToSlide: true,
  autoplay: false,
  pauseOnFocus: false,
  pauseOnHover: false,
  pauseOnDotsHover: false,
  infinite: true,
  responsive: [
    {
      breakpoint: 1170,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    },
  ]
});

// our team home4
$(".our-team-block .list-member").slick({
  dots: false,
  arrows: false,
  slidesToShow: 4,
  slidesToScroll: 3,
  touchThreshold: 100,
  swipe: true,
  swipeToSlide: true,
  autoplay: false,
  pauseOnFocus: false,
  pauseOnHover: false,
  pauseOnDotsHover: false,
  infinite: true,
  responsive: [
    {
      breakpoint: 1170,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    },
  ]
});

// testimonials home6
$(".testimonials-six .container>.row").slick({
  dots: true,
  arrows: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  touchThreshold: 100,
  infinite: true,
  centerMode: true,
  autoplay: true,
  autoplaySpeed: 3000,
  speed: 1000,
  pauseOnFocus: false,
  pauseOnHover: false,
  pauseOnDotsHover: false,
  responsive: [
    {
      breakpoint: 1170,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: false,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        centerMode: false,
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: false,
      }
    },
  ]
});


// change active nav 
const listNav = document.querySelectorAll('.list-nav')
const filterItem = document.querySelectorAll('.item-filter')

if (listNav) {
  listNav.forEach(listNavItem => {
    listNavItem.onclick = function (selectedItem) {
      if (selectedItem.target.classList.contains("nav-item")) {
        // add active class
        listNavItem.querySelector('.active').classList.remove('active')
        selectedItem.target.classList.add('active')

        //get data-name value
        let filterName = selectedItem.target.getAttribute('data-name')

        filterItem.forEach((item) => {
          if (filterName === item.getAttribute('data-name')) {
            item.classList.add('show')
            item.classList.remove('hide')
          } else {
            item.classList.remove('show')
            item.classList.add('hide')
          }
        })
      }
    }
  })
}


// scroll to top
const scrollTopBtn = document.querySelector('.scroll-to-top-btn')

window.addEventListener('scroll', () => {
  if (window.pageYOffset > 200) {
    scrollTopBtn.classList.add('active')
  } else {
    scrollTopBtn.classList.remove('active')
  }
})

// count number
if (document.querySelector('.count-block .counter')) {
  $('.count-block .counter').counterUp({
    delay: 6,
    time: 500,
  });
}


// change active features home3 
const listNavItems = document.querySelector('.list-nav-item')
const navItemFeature = document.querySelectorAll('.content-filter')

if (listNavItems) {
  listNavItems.onclick = function (selectedItem) {
    if (selectedItem.target.classList.contains("nav-item")) {
      // add active class
      listNavItems.querySelector('.active').classList.remove('active')
      selectedItem.target.classList.add('active')

      //get data-name value
      let filterName = selectedItem.target.getAttribute('data-name')

      navItemFeature.forEach((item) => {
        if (filterName === item.getAttribute('data-name')) {
          item.classList.add('show')
          item.classList.remove('hide')
        } else {
          item.classList.remove('show')
          item.classList.add('hide')
        }
      })
    }
  }
}


// open answer faqs
const questionItem = document.querySelectorAll('.question-item')

if (questionItem) {
  questionItem.forEach((item, index) => {
    let titleItem = item.querySelector('.question-item-main')
    let icon = item.querySelector('i')

    titleItem.addEventListener('click', () => {
      item.classList.toggle('open')

      if (item.classList.contains('open')) {
        setTimeout(() => {
          icon.classList.replace('ph-plus', 'ph-minus')
        }, 200)
      } else {
        setTimeout(() => {
          icon.classList.replace('ph-minus', 'ph-plus')
        }, 200)
      }

      removeOpen(index)
    })

    if (item.classList.contains('open')) {
      icon.classList.replace('ph-plus', 'ph-minus')
    } else {
      icon.classList.replace('ph-minus', 'ph-plus')
    }
  })
}

function removeOpen(index1) {
  questionItem.forEach((item2, index2) => {
    if (index1 != index2) {
      item2.classList.remove('open')
      item2.querySelector('i').classList.replace('ph-minus', 'ph-plus')
    }
  })
}


// change switch btn pricing
const switchBtn = document.querySelector('.switch')
const listPricingMonth = document.querySelector('.list-pricing')
const listPricingYear = document.querySelector('.list-pricing-year')

if (switchBtn) {
  switchBtn.addEventListener('click', () => {
    switchBtn.classList.toggle('enable')

    let text = switchBtn.parentElement.querySelectorAll('.body3')

    text.forEach(item => {
      if (item.classList.contains('text-placehover')) {
        item.classList.remove('text-placehover')
      }
      else {
        item.classList.add('text-placehover')
      }
    })

    if (switchBtn.classList.contains('enable')) {
      console.log(switchBtn);
      listPricingMonth.classList.remove('show')
      listPricingMonth.classList.add('hide')
      listPricingYear.classList.remove('hide')
      listPricingYear.classList.add('show')
    } else {
      if (listPricingYear.classList.contains('show')) {
        listPricingYear.classList.remove('show')
      }
      listPricingYear.classList.add('hide')

      if (listPricingMonth.classList.contains('hide')) {
        listPricingMonth.classList.remove('hide')
      }
      listPricingMonth.classList.add('show')
    }
  })
}


// mobile menu
const mobileMenuBtn = document.querySelector('.menu-humburger')
const menuMobile = document.querySelector('#menu-mobile-block')
const menuMobileMain = document.querySelector('#menu-mobile-block .menu-mobile-main')
const closeMobileBtn = document.querySelector('#menu-mobile-block .close-block')

if (mobileMenuBtn) {
  mobileMenuBtn.addEventListener('click', () => {
    menuMobile.classList.toggle('open')
  })
}

const itemLinks = document.querySelectorAll('#menu-mobile-block .nav-item-mobile')

itemLinks.forEach(item => {
  item.addEventListener('click', () => {
    item.querySelector('.sub-nav-mobile').classList.toggle('open')
  })
})

if (closeMobileBtn) {
  closeMobileBtn.addEventListener('click', () => {
    menuMobile.classList.remove('open')
  })
}

if (menuMobile) {
  menuMobile.addEventListener('click', () => {
    menuMobile.classList.remove('open')
  })
}

if (menuMobileMain) {
  menuMobileMain.addEventListener('click', function (event) {
    event.stopPropagation()
  })
}


// Video modal
const playBtn = document.querySelector('.ph-play')
const videoModal = document.querySelector('.js-video-modal')
const videoModalContainer = document.querySelector('.js-video-modal-container')
const closeVideo = document.querySelector('.js-modal-close')
const playBtnHome4 = document.querySelector('.video-block .container .video i')

//Show modal video
function showVideo() {
  if (videoModal) {
    videoModal.classList.add('open')
  }
}

//Close modal video
function removeVideoModal() {
  if (videoModal) {
    videoModal.classList.remove('open')
  }
}

//Listen click
if (playBtn) {
  playBtn.addEventListener('click', showVideo)
}

if (playBtnHome4) {
  playBtnHome4.addEventListener('click', () => {
    videoModal.classList.add('open')
  })
}

//Listen click and close modal video
if (closeVideo) {
  closeVideo.addEventListener('click', removeVideoModal)
}

//Listen click outside modal-container and close modal video
if (videoModal) {
  videoModal.addEventListener('click', removeVideoModal)
}

if (videoModalContainer) {
  videoModalContainer.addEventListener('click', function (event) {
    event.stopPropagation()
  })
}
