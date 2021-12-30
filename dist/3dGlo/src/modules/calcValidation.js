const calcValidation = () => { 
  const calcBlock = document.querySelector('.calc-block');

  calcBlock.addEventListener('input', (e) => {
    let target = e.target;

    if( target.matches('input') ) {
      target.value = target.value.replace(/\D/g, '');
    }
  });
};

export default calcValidation;