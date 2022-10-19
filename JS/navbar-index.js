/*
window.addEventListener("scroll",function(){
    const header = document.querySelector('header');
    header.classList.toggle('sticky', window.scrollY > 0);
  });

  */

  const header = document.getElementById('main-header');
/*
  const setHeaderClass = () =>{
    if(window.scrollY > 0){
      headEr.classList.toggle('sticky');
    }
  }

  */


  window.addEventListener('scroll', () =>{
      header.classList.toggle('sticky',window.scrollY > 0);
  })
  

  const menu = document.getElementById('navMenu');
  const ham = document.getElementById('toggleNav');


  const toggling = () => {
    
  }

  
  ham.addEventListener('click', ()=>{
    menu.classList.toggle('active');
    ham.classList.toggle('active');
  })