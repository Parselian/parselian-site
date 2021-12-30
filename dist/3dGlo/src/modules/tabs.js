const tabs = () => {

  const serviceHeader = document.querySelector('.service-header'),
        serviceTab = serviceHeader.querySelectorAll('.service-header-tab'),
        tab = document.querySelectorAll('.service-tab');

  const toggleTabContent = (index) => {
    for(let i = 0; i < tab.length; i++) {
      if(index === i) {
        serviceTab[i].classList.add('active');
        tab[i].classList.remove('d-none');
      } else {
        serviceTab[i].classList.remove('active');
        tab[i].classList.add('d-none');
      }
    }
  };

  serviceHeader.addEventListener('click', (e) => {

    let target = e.target;
    target = target.closest('.service-header-tab');

    if(target) {
      serviceTab.forEach( (item, i) => {
        if(item === target) {
          toggleTabContent(i);
        }
      });
    }
  });
};

export default tabs;