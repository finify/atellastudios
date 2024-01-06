//Swiper section 

var swiper = new Swiper(".mySwiper", {
	grabCursor: true,
	effect: "creative",
	navigation: {
	  nextEl: '.swiper-button-next',
	  prevEl: '.swiper-button-prev',
	},
	creativeEffect: {
	  prev: {
		shadow: true,
		translate: [0, 0, -400],
	  },
	  next: {
		translate: ["100%", 0, 0],
	  },
	},
  });

// $(document).ready(function() {
// 	$('.carousel').carousel();
// });


//wipper end 

// FAQ STARTS

const faqItems = document.querySelectorAll('.faq-item');

faqItems.forEach(item => {
    const question = item.querySelector('.faq-question');
    
    question.addEventListener('click', () => {
        console.log(question);
        faqItems.forEach(otherItem => {
            if (otherItem !== item && otherItem.classList.contains('open')) {
                otherItem.classList.remove('open');
                otherItem.querySelector('.faq-answer').style.maxHeight = '0';
            }
        });

        item.classList.toggle('open');
        const answer = item.querySelector('.faq-answer');
        answer.style.maxHeight = item.classList.contains('open') ? answer.scrollHeight + 'px' : '0';
        console.log(answer.scrollHeight);
    });
});

// FAQ ENDS

// PAST WORK STARTS

const pastFaqItems = document.querySelectorAll('.past-faq-item');

pastFaqItems.forEach(item => {
	const question = item.querySelector('.past-faq-question');

	question.addEventListener('click', () => {
		pastFaqItems.forEach(otherItem => {
			if (otherItem !== item && otherItem.classList.contains('open')) {
				otherItem.classList.remove('open');
				otherItem.querySelector('.past-faq-answer').style.maxHeight = '0';
			}
		});

		item.classList.toggle('open');
		const answer = item.querySelector('.past-faq-answer');
		answer.style.maxHeight = item.classList.contains('open') ? answer.scrollHeight + 'px' : '0';
	});
});

// PAST WORK STARTS

// Innovation STARTS
var swiper = new Swiper(".myInnovationSwiper", {
    initialSlide: 1,
    centeredSlides: true,
    slidesPerView: 1.5,
    spaceBetween: 20,
    breakpoints: {
        // when window width is >= 640px
        640: {
          slidesPerView: 3,
          spaceBetween: 40
        }
      }
  });
// Innovation End

//Animate function 


//   animateCSS('.my-element', 'bounce').then((message) => {
//     // Do something after the animation
//   });

//Menu Animation
const menubutton = document.querySelector('#menu-button');
const menucontent = document.querySelector('#header-menu-mobile');
const menuclosebutton = document.querySelector('#menu-close-button');


menubutton.style.setProperty('--animate-duration', '0.5s');
menuclosebutton.style.setProperty('--animate-duration', '0.5s');
menucontent.style.setProperty('--animate-duration', '0.3s');

menubutton.addEventListener('click', () => {
    
    menubutton.classList.add('animate__rollOut');
    setTimeout(function() {
        menucontent.classList.remove('d-none');
        menucontent.classList.add('d-block');
        menucontent.classList.remove('animate__fadeOut');
        menucontent.classList.add('animate__fadeIn');
    }, 300);
    menubutton.addEventListener('animationend', () => {
        
        menubutton.classList.remove('animate__rollOut');
        
        
      });
    
})

menuclosebutton.addEventListener('click', () => {
    menuclosebutton.style.setProperty('animation-direction', 'reverse');
    menuclosebutton.classList.add('animate__rollIn');
    menuclosebutton.addEventListener('animationend', () => {
        menuclosebutton.classList.remove('animate__rollIn');
        menucontent.classList.add('animate__fadeOut');
        menucontent.classList.remove('animate__fadeIn');
        menucontent.classList.remove('d-block');
        menucontent.classList.add('d-none');
      });
})
