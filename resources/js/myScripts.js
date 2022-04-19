

const navbar = document.querySelector('.navbar-presto');
const button = document.querySelector('.compari');


document.addEventListener('scroll' , () => {
    let windowHeight = window.innerHeight;
    let scroll = window.pageYOffset

    if(scroll > 10){
        navbar.classList.add('bg-dark')
        
        navbar.classList.add('px-5')
    } else {
        navbar.classList.remove('bg-dark')
        
        navbar.classList.remove('px-5')
    }
})  
// let swiper = new Swiper(".mySwiper", {
//     effect: "coverflow",
//     grabCursor: true,
//     centeredSlides: true,
//     slidesPerView: "auto",
//     coverflowEffect: {
//       rotate: 50,
//       stretch: 0,
//       depth: 100,
//       modifier: 1,
//       slideShadows: true,
//     },
//     pagination: {
//       el: ".swiper-pagination",
//     }
//   })