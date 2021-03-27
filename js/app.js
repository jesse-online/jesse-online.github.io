// Animate main cat icon on hover over button
const cat = document.querySelector('.fa-cat');
const btn = document.querySelector('.btn');

btn.addEventListener('mouseover', () => {
   cat.classList.add('animate__animated', 'animate__bounce'); 
}, false);

