const validationForm = () => {
  const allInputs = document.querySelectorAll('input');
  
  allInputs.forEach((item) => {
    item.addEventListener('input', () => {
      if( item.classList.contains('calc-item') || item.type === 'button' ) {
        return;
      } else {
        if( item.classList.contains('form-phone') ) {
          item.value = item.value.replace(/[^\d|\+]/, '');
        }

        if( item.name === 'user_name' || item.name === 'user_message') {
          item.value = item.value.replace(/[^а-я|А-Я| ]/, '');
        }
      }
    });
  });
};

export default validationForm;