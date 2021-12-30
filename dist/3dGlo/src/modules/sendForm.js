const sendForm = (selector) => {
  const errorMessage = 'Что-то пошло не так...',
        successMessage = 'Спасибо! Наш менеджер скоро с вами свяжется.',
        form = document.getElementById(selector),
        statusMessage = document.createElement('div'),
        spinner = document.createElement('div');
  let counter = 0,
      intervalId;

  statusMessage.style.cssText = `
    color: #fff;
    font-size: 2rem;
  `;

  const animateSpinner = () => {
    spinner.style.cssText = `
      margin-top: 10px;
      margin-left: auto;
      margin-right: auto;
      width: 26px;
      height: 26px;
      border: 2px dashed #fff;
      border-radius: 13px;
    `;
    form.appendChild(spinner);

    intervalId = setInterval(() => {
      counter += 5;
      if(counter >= 360) {
        counter = 0;
      }
      spinner.style.transform = `rotate(${counter}deg)`;
      intervalId;
    }, 20);
  };

  form.addEventListener('submit', (e) => {
    e.preventDefault();
    form.appendChild(statusMessage);
    animateSpinner();
    
    const formData = new FormData(form),
          body = {};

    formData.forEach((val, key) => {
      body[key] = val;
    });

    const postData = (body) => {
      return fetch('./server.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/JSON'
        },
        body: JSON.stringify(body) 
      });
    };

    postData(body).then((response) => {
      clearInterval(intervalId);
      if(response.status !== 200) {
        throw  new Error('error network status is`nt 200');
      }
      statusMessage.textContent = successMessage;
      form.removeChild(spinner);
      [...form.elements].forEach((item) => {
        if(item.tagName === 'INPUT') {
          item.value = '';
          item.classList.remove('success');
        }
      });
    }) 
    .catch((error) => {
      console.error(error);
      statusMessage.textContent = errorMessage;
      form.removeChild(spinner);
    });
  });
};

export default sendForm;