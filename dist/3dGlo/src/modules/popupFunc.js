const popupFunc = () => {
  const popup = document.querySelector('.popup'),
      popupBtn = document.querySelectorAll('.popup-btn');

  const animatePopup = () => {
    let intervalId,
        counter = 0;

    intervalId = setInterval(() => {
      popup.style.opacity = counter;
      counter += 0.1;
      if (counter > 1 || screen.width < 768) {
        clearInterval(intervalId);
        popup.style.opacity = 1;
      }
    }, 20);
    
    popup.style.display = 'block';
  };
  
  popupBtn.forEach( (item) => {
    item.addEventListener('click', () => {
      popup.style.opacity = 0;
      animatePopup();
    });
  });

  popup.addEventListener('click', (e) => {
    let target = e.target;
    
    if( target.classList.contains('popup-close')) {
      popup.style.display = 'none'; 
    } else {
      target = target.closest('.popup-content');
  
      if(!target) {
        popup.style.display = 'none'; 
      }
    }
  });
};

export default popupFunc;