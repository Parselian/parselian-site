'use-strict';
document.addEventListener('DOMContentLoaded', () => {

  /* Toggle menu sections */
  const toggleSections = (listWrap, listLinks, sections) => {
    const menuWrap = document.querySelector(listWrap),
      menuLinks = document.querySelectorAll(listLinks),
      contentBloks = document.querySelectorAll(sections);

    const showContent = (id) => {
      contentBloks.forEach(item => {
        if (!item.classList.contains('hidden')) {
          item.classList.add('hidden');
        }
      });

      contentBloks.forEach(item => {
        let attr = item.getAttribute('id');

        if (attr === id) {
          item.classList.remove('hidden');
        }
      });
    };

    menuWrap.addEventListener('click', (e) => {
      const target = e.target;

      if (target.matches(listLinks)) {
        e.preventDefault();
        target.getAttribute('href');

        menuLinks.forEach(item => {
          if (item.classList.contains('active')) {
            item.classList.remove('active');
          }
        });

        menuLinks.forEach((item, i) => {
          if (item === target) {
            item.classList.add('active');
            showContent(target.getAttribute('href').slice(1));
          }
        });
      }
    });
  };
  toggleSections('.account-menu', '.account-menu-list__link', '.account-content');

  /* Disable sending documents if anket not sent */
  const checkSentAnket = () => {
    const alert = document.getElementById('documents-alert'),
          button = document.querySelector('button[name="send_files_btn"]');

    return fetch('control/functions/user/checkStatement.php')
      .then(response => {
        if( response.status !== 200 ) {
          throw new Error('Error! network status is`nt 200');
        }

        return response.text();
      })
      .then(data => {
        if( !!data === false ) {
          alert.classList.remove('hidden');
          button.setAttribute('disabled', 'disabled');
          button.classList.add('inactive');
        } else if( !!data === true ) {
          alert.classList.add('hidden');
          button.removeAttribute('disabled');
          button.classList.remove('inactive');
        }
      })
      .catch(error => console.error(error));
  };
  checkSentAnket();

  const outputAlgorithm = () => {
    const timeline = document.querySelector('.timeline-wrap'),
          timelineBlock = document.createElement('div'),
          timelineDate = document.createElement('div'),
          timelineDay = document.createElement('span'),
          timelineMonth = document.createElement('span'),
          timelineContent = document.createElement('p');

    timelineBlock.classList.add('timeline-block');
    timelineDate.classList.add('timeline-date');
    timelineDay.classList.add('timeline__day');
    timelineMonth.classList.add('timeline__month');
    timelineContent.classList.add('timeline__content');

    timelineDate.appendChild(timelineDay);
    timelineDate.appendChild(timelineMonth);
    timelineBlock.appendChild(timelineDate);
    timelineBlock.appendChild(timelineContent);

    return fetch('control/functions/user/getAlgorithm.php')
      .then(response => {
        if( response.status !== 200 ) {
          throw new Error('Error! Network status not 200');
        }

        return response.json();
      })
      .then(data => {
        data.dates.forEach((item, i) => {
          const date = new Date(item),
                timelineCloneBlock = timelineBlock.cloneNode(true);

          timelineCloneBlock.children[0].children[0].textContent = date.getDate();
          timelineCloneBlock.children[0].children[1].textContent = date.toLocaleString('ru', {month: 'long'}).slice(0, 3);
          timelineCloneBlock.children[1].textContent = data.contents[i];

          timeline.insertAdjacentElement('beforeend', timelineCloneBlock)
        });

      })
      .catch(error => console.error(error));

    timeline.insertAdjacentElement('beforeend', timelineBlock)
    console.log(timelineBlock);
  };
  outputAlgorithm();

  /* Toggle form blocks */
  const toggleFormBlocks = () => {
    const form = document.getElementById('form'),
          attentionBlock = document.querySelector('.account-content-attention'),
          attentionText = attentionBlock.querySelector('.account-content-attention__text'),
          formBlocks = document.querySelectorAll('.account-form-block');
    let counter = 0;

    const checkFields = (block) => {
      const blockGroups = [...block.children];
      let fieldResults = [];

      blockGroups.forEach( item => {

        if ( !item.classList.contains('unnecessary') ) {
          [...item.children].forEach( (item2, i) => {
  
            if (item2.classList.contains('account-form__input')) {
              if( item2.value === '' ) {
                fieldResults.push(0);
              } else {
                fieldResults.push(1);
              }
            }
          });
        }
      });

      if ( fieldResults.indexOf(0) !== -1 ) {
        return false;
      } else {
        return true;
      }
    };

    form.addEventListener('click', (e) => {
      const target = e.target;

      if ( target.matches('.account-content-attention__close') ) {
        attentionBlock.classList.remove('visible');
      }

      if ( target.matches('.account-form__button_next') ) {
        attentionBlock.classList.remove('visible');

        if ( checkFields(formBlocks[counter]) !== false ) {
          formBlocks[counter].classList.add('hidden');
          
          if( counter < formBlocks.length - 1 ) {
            counter++;
          }
          
          formBlocks[counter].classList.remove('hidden');
        } else {
          attentionText.textContent = '?????????????????? ?????? ????????!';
          attentionBlock.classList.remove('section-content-attention_success');
          attentionBlock.classList.add('visible', 'section-content-attention_error');
        }
      } else if ( target.matches('.account-form__button_prev') ) {
        formBlocks[counter].classList.add('hidden');

        if (counter > 0) {
          counter--;
        }

        formBlocks[counter].classList.remove('hidden');
      }    
    });
  };
  toggleFormBlocks();

  /* change status popup */
  const managingInfoPopup = () => {
    const popup = document.getElementById('popup-status'),
          popupText = popup.querySelector('.section-content-attention__text');

    const getAbiturientStatus = () => {
      return fetch('control/functions/user/getAbiturientStatus.php');
    };

    getAbiturientStatus()
      .then(response => {
        if( response.status !== 200 ) {
          throw new Error('Error! network status not 200!');
        }

        return response.json();
      })
      .then(data => {
        let anketsWithoutDocs = [],
            approvedAnkets = [],
            deniedAnkets = [],
            waitingAnkets = [];

        if (data) {
          data['anketVerdicts'].forEach((item, i) => {
            if (item === 'approved') {
              approvedAnkets.push(data['anketSpecs'][i]);
            } else if (item === 'denied') {
              deniedAnkets.push(data['anketSpecs'][i]);
            } else if (item !== 'approved' && item !== 'denied' && 
            data.anketStatuses[i] === 'in-process' ||
            data.anketStatuses[i] === 'new') {
              waitingAnkets.push(data['anketSpecs'][i]);
            } else if (item === 'questionnaire-sent') {
              anketsWithoutDocs.push(data['anketVerdicts'][i]);
            } else {
              return;
            }
          });
        }

        if (data === false) {
          popupText.textContent = '?????? ?????????????? ???????????????????? ?????????????????? ????????????!';
        } else if (anketsWithoutDocs.length !== 0 && 
          data['anketVerdicts'].length === 1) {
          popupText.textContent = '????????????????????, ?????????????????? ?????????????????????? ??????????????????!';
        } else if (waitingAnkets.length !== 0 && 
          approvedAnkets.length === 0 && deniedAnkets.length === 0) {
          popupText.textContent = '???????? ???????????? ??????????????, ???????????????? ????????????.';
        } else if (approvedAnkets.length !== 0 && 
          waitingAnkets.length === 0) {
          popupText.textContent = `
            ??????????????????????! ???? ???????????? ???? ????????-??????????: ${approvedAnkets.join(', ')}. ???????? ?????? ???? ?????????? ??????????????????????. \n`;
          popup.style.backgroundColor = 'green';
        } else if (deniedAnkets.length !== 0 && 
          waitingAnkets.length === 0) {
          popupText.textContent = `
            ?? ??????????????????, ???? ???? ???????????? ?????????????? ???? ????????. ????????-????????: ${deniedAnkets.join(', ')}.`;
          popup.style.backgroundColor = '#fa7b7b';
        } else if (approvedAnkets.length !== 0 &&
          waitingAnkets.length !== 0) {
          popupText.textContent = `
            ??????????????????????! ???? ???????????? ???? ????????-??????????: ${approvedAnkets.join(', ')}. ???????? ?????? ???? ?????????? ??????????????????????. \n
            ???????????? ???? ????????-??????????:
            ${waitingAnkets.join(', ')}, ?????????????????? ???? ????????????????, ??????????`;
          popup.style.backgroundColor = 'green';
        } else if (deniedAnkets.length !== 0 &&
          waitingAnkets.length !== 0) {
          popupText.textContent = `
            ?? ??????????????????, ???? ???? ???????????? ?????????????? ???? ????????. ????????-????????: ${deniedAnkets.join(', ')}. \n
            ???????????? ???? ????????-??????????:
            ${waitingAnkets.join(', ')}, ?????????????????? ???? ????????????????, ??????????`;
          popup.style.backgroundColor = '#fa7b7b';
        }
      })
      .catch(error => console.log(error));
  };
  managingInfoPopup();

  /* Send statement */
  const sendForm = () => {
    const form = document.getElementById('form'),
          attentionBlock = document.querySelector('.account-content-attention'),
          attentionText = attentionBlock.querySelector('.account-content-attention__text');

    form.addEventListener('submit', (e) => {
      e.preventDefault();

      const formData = new FormData(form);

      let body = {};

      for (let val of formData.entries()) {
        body[val[0]] = val[1];
      }

      postData(body)
        .then((response) => {
          if( response.status !== 200 ) {
            throw new Error('????????????, ???????????? ?????????????? ???? 200!');
          }

          attentionText.textContent = '???????? ???????????? ?????????????? ????????????????????!';
          attentionBlock.classList.remove('section-content-attention_error');
          attentionBlock.classList.add('visible', 'section-content-attention_success');
          managingInfoPopup();
          checkSentAnket();
        })
        .catch(error => {
          console.error(error);

          attentionText.textContent = '????????????! ???????????????????? ??????????';
          attentionBlock.classList.remove('section-content-attention_success');
          attentionBlock.classList.add('visible', 'section-content-attention_error');
        });
    });

    const postData = (data) => {
      return fetch('control/functions/user/send-form.php', {
        method: 'POST', 
        headers: {
          'Content-Type': 'application / json'
        },
        body: JSON.stringify(data)
      });
    };
  };
  sendForm();

  /* Send files */
  const sendFiles = () => {
    const formFiles = document.getElementById('form-files');

    formFiles.addEventListener('submit', (e) => {
      e.preventDefault();

      const formData = new FormData(formFiles);

      postFiles(formData)
        .then(response => {
          if( response.status !== 200 ) {
            throw new Error('????????????, ???????????? ???????????? ?????????????? ???? 200!');
          }
          console.log('?????????????????? ?????????????? ????????????????????!');
        })
        .catch(error => console.error(error));
    });

    const postFiles = (files) => {
      return fetch('control/functions/user/update-statement.php', {
        method: 'POST', 
        body: files
      });
    };
  };
  // sendFiles();
});