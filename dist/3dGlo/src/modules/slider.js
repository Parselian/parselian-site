const slider = () => {
  const portfolioContent = document.querySelector('.portfolio-content'),
        portfolioItem = document.querySelectorAll('.portfolio-item'),
        dotsWrap = document.querySelector('.portfolio-dots');

  let currSlide = 0,
      interval,
      dot = document.createElement('li');
  
  dot.classList.add('dot');

  for( let i = 0; i < portfolioItem.length; i++ ) {
    let clonedDot = dot.cloneNode();
    if( i === 0 ) {
      clonedDot.classList.add('dot-active');
    }
    dotsWrap.appendChild(clonedDot);
  }

  dot = document.querySelectorAll('.dot');

  const prevSlide = (elem, index, strClass) => {
    elem[index].classList.remove(strClass);
  };

  const nextSlide = (elem, index, strClass) => {
    elem[index].classList.add(strClass);
  };

  const autoplaySlide = () => {
    prevSlide(portfolioItem, currSlide, 'portfolio-item-active');
    prevSlide(dot, currSlide, 'dot-active');
    currSlide++;
    if(currSlide >= portfolioItem.length) {
      currSlide = 0;
    } 
    nextSlide(portfolioItem, currSlide, 'portfolio-item-active');
    nextSlide(dot, currSlide, 'dot-active');
  };

  const startSlide = (time = 3500) => {
    interval = setInterval(autoplaySlide, time);
  };

  const stopSlide = () => {
    clearInterval(interval);
  };

  portfolioContent.addEventListener('click', (e) => {
    
    e.preventDefault();
    let target = e.target;

    if(!target.matches('.portfolio-btn, .dot')) {
      return;
    }

    prevSlide(portfolioItem, currSlide, 'portfolio-item-active');
    prevSlide(dot, currSlide, 'dot-active');

    if( target.matches('#arrow-left') ) {
      currSlide--;
    } else if( target.matches('#arrow-right') ) {
      currSlide++;
    } else if( target.matches('.dot')) {
      dot.forEach((item, i) => {
        if(target === item) {
          currSlide = i;
        }
      });
    }

    if(currSlide >= portfolioItem.length) {
      currSlide = 0;
    } else if(currSlide < 0 ) {
      currSlide = portfolioItem.length - 1;
    }

    nextSlide(portfolioItem, currSlide, 'portfolio-item-active');
    nextSlide(dot, currSlide, 'dot-active');
  });

  portfolioContent.addEventListener('mouseover', (e) => {
    if(e.target.matches('.portfolio-btn') || e.target.matches('.dot')) {
      stopSlide();
    }
  });

  portfolioContent.addEventListener('mouseout', (e) => {
    if(e.target.matches('.portfolio-btn') || e.target.matches('.dot')) {
      startSlide();
    }
  });

  startSlide(1000);
};

export default slider;