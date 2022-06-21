const box = document.querySelector('.box');
box.addEventListener('click', (e)=>{
  e.target.classList.toggle('pause');
})