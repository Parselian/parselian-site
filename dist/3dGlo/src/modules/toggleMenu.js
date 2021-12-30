const toggleMenu = () => {
  const menu = document.querySelector('menu');

  window.addEventListener('click', (e) => {
    let target = e.target;
        target = target.closest('.menu');

    if(target) {
      if( !menu.style.transform || menu.style.transform === 'translateX(-100%)' ) {
        menu.style.transform = `translateX(0)`;
      } else {
        menu.style.transform = `translateX(-100%)`;
      }
    } if(!target) {
      target = e.target;

      if(target.classList.contains('close-btn') && !target.matches('menu')) {
        menu.style.transform = `translateX(-100%)`;
      } else if(target.matches('a') && !target.matches('menu')) {
        menu.style.transform = `translateX(-100%)`;
      }
      else {
        target = target.closest('menu');

        if(!target) {
          menu.style.transform = `translateX(-100%)`;
        } 
      }
    }
  });
};

export default toggleMenu;