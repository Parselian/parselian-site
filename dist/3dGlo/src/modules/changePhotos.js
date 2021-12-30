const changePhotos = () => {
  const commandWrap = document.querySelector('#command');

  const changeDataImg = (target, def) => {
    if(target.attributes.src.value !== target.dataset.img) {
      target.src = target.dataset.img;
      target.dataset.img = def;
    } 

    if (target.attributes.src.value === target.dataset.img) {
      target.setAttribute('src', def);
    }
  };

  commandWrap.addEventListener('mouseover', (e) => {
    let target = e.target;

    if(target.matches('img')) {
      let targetDefaultImg = target.attributes.src.value;
      changeDataImg(target, targetDefaultImg);
    }
  });

  commandWrap.addEventListener('mouseout', (e) => {
    let target = e.target;
    
    if(target.matches('img')) {
      let targetDefaultImg = target.attributes.src.value;
      changeDataImg(target, targetDefaultImg);
    }
  });
};

export default changePhotos;