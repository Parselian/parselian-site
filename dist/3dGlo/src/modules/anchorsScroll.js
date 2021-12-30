const anchorsScroll = () => {
  const anchors = [].slice.call(document.querySelectorAll('a[href*="#"]')),
        animationTime = 400,
        fps = 50;

  anchors.forEach((item) => {
    
    item.addEventListener('click', (e) => {
      e.preventDefault();
      let coordY;     

      if(item.matches('.close-btn, .portfolio-btn')) {
        return;
      } else {
        coordY = document.querySelector(item.getAttribute('href')).getBoundingClientRect().top + window.pageYOffset;
      }

      const scrolling = setInterval( () => {
        let scrollBy = coordY / fps;
        if (scrollBy > window.pageYOffset - coordY && window.innerHeight + window.pageYOffset < document.body.offsetHeight) {
          window.scrollBy(0, scrollBy);
        } else {
          window.scrollTo(0, coordY);
          clearInterval(scrolling);
        }
      }, animationTime / fps);
    });
  }); 
};

export default anchorsScroll;