// window.addEventListener('load', () => {
//   const preloader = document.getElementById('preloader');
//   preloader.className = 'hidden';
// });

document.addEventListener('DOMContentLoaded', () => {
  'use_strict';

  const header = document.querySelector('.header'),
        headerButton = document.querySelector('.header-burger__btn'),
        cardWrap = document.querySelector('.wrap'),
        burgerMenu = document.querySelector('.burger-menu'),
        burgerAllBtn = burgerMenu.querySelector('.burger-menu__item_all'),
        addButton = document.querySelector('.add-button'),
        preloader = document.getElementById('preloader');


  const addBlocks = (data) => {
    let heroCard = '',
        unfilteredMovies = [];

    const goObj = (obj) => {
      for (let key in obj) {
        let value = obj[key]; 

        if(key === 'movies') {
          value.forEach(item => {
            unfilteredMovies.push(item);
          });
        }

        if (typeof (value) === "object") {
          goObj(value);
        }
      }
    };
    goObj(data);

    const fillBurgerMenu = (arr) => {
      let filteredMovies = [],
          burgerContent = '';
    
      for (let str of arr) {
        if (!filteredMovies.includes(str)) {
          filteredMovies.push(str);
          burgerContent += `
            <li class="burger-menu__item">${str}</li>
          `;
        }
      }
      
      burgerAllBtn.insertAdjacentHTML('afterend', burgerContent);
    };
    fillBurgerMenu(unfilteredMovies);

    const expandMovies = () => {
      cardWrap.addEventListener('click', (e) => {
        const target = e.target;

        if(target.matches('.card-info-list__btn-more')) {
          target.previousElementSibling.remove();
          target.nextElementSibling.classList.remove('block-hidden');
          target.remove();
        }
      });
    };
    expandMovies();

    for(let key in data) {
      if(!!data[key].movies && data[key].movies.join(' ').length > 27 ) {
        const slicedText = data[key].movies.join(' ').slice(0, 27) + '...';
        
        data[key].movies = `
          <span class="card-info-list__movies_sliced">
            ${slicedText}
          </span>
          <div class="card-info-list__btn-more"> show more...</div>
          <span class="card-info-list__movies_full block-hidden">
            ${data[key].movies}
          </span>
        `;
      }

      heroCard += `
        <div class="card">
        <div class="card-img">
          <img src="${data[key].photo}" alt="Супергерой" class="card-img__img">

          <h2 class="card-img__title">
            ${data[key].name !== undefined ? data[key].name : '???'}
          </h2>
          <!-- /.card-img__title -->

          <div class="card-img__info">
            <div class="card-img__species">
              ${data[key].species !== undefined ? data[key].species : '???'}, 
              ${data[key].genger !== undefined ? data[key].genger : '???'}
            </div>
            <!-- /.card-img__species -->
            <div class="card-img__date">
              (${data[key].birthDay !== undefined ? data[key].birthDay : '???'} - 
              ${data[key].deathDay !== undefined ? data[key].deathDay : '???'})
            </div>
            <!-- /.card-img__date -->
            </div>
          <!-- /.card-img__info -->
        </div>
        <!-- /.card-img -->

        <div class="card-info">
          <div class="card-info-list">
            <div class="card-info-list__title">Name:</div>
            <!-- /.card-info-list__title -->
            <div class="card-info-list__text">
              ${data[key].realName !== undefined ? data[key].realName : '???'}
            </div>
            <!-- /.card-info-list__text -->
          </div>
          <!-- /.card-info-list -->

          <div class="card-info-list">
            <div class="card-info-list__title">Status:</div>
            <!-- /.card-info-list__title -->
            <div class="card-info-list__text">
              ${data[key].status !== undefined ? data[key].status : '???'}</div>
            <!-- /.card-info-list__text -->
          </div>
          <!-- /.card-info-list -->

          <div class="card-info-list">
            <div class="card-info-list__title">Actor:</div>
            <!-- /.card-info-list__title -->
            <div class="card-info-list__text">
              ${data[key].actors !== data[key].actors ? data[key].actors : '???'}
            </div>
            <!-- /.card-info-list__text -->
          </div>
          <!-- /.card-info-list -->

          <div class="card-info-list">
            <div class="card-info-list__title">Citizenship:</div>
            <!-- /.card-info-list__title -->
            <div class="card-info-list__text">
            ${data[key].citizenship !== undefined ? data[key].citizenship : '???'}</div>
            <!-- /.card-info-list__text -->
          </div>
          <!-- /.card-info-list -->

          <div class="card-info-list">
            <div class="card-info-list__title">Movies:</div>
            <!-- /.card-info-list__title -->
            <div class="card-info-list__text card-info__movie">
              ${data[key].movies !== undefined ? data[key].movies : '???'}
            </div>
            <!-- /.card-info-list__text -->
          </div>
          <!-- /.card-info-list -->
        </div>
        <!-- /.card-info -->
      </div>
      <!-- /.card -->
    `;
    }

    cardWrap.innerHTML = heroCard;
    preloader.className = 'hidden';
  };

  const getData = () => {
    return fetch('dbHeroes.json', {
      headers: {
        'Content-Type': 'application/json'
      }
    });
  };

  getData()
    .then((response) => {
      if(response.status !== 200) {
        throw new Error('error, network status isn`t 200');
      }

      return response.json();
    })
    .then((response) => {
      addBlocks(response);
    })
    .catch((error) => {
      addButton.classList.add('hidden');
      console.error(error);
    });

  const toggleMenu = () => {
    header.addEventListener('click', (e) => {
      const allBlocks = document.querySelectorAll('.card');
        const target = e.target;

        allBlocks.forEach(item => {
          const moviesBlock = item.querySelector('.card-info__movie');
          if(!target.closest('.header-burger__btn, .burger-menu__close')) {
            item.classList.remove('block-hidden');
          }
          if(target.matches('.burger-menu__item') && !moviesBlock.textContent.includes(target.textContent)) {
            item.classList.add('block-hidden');
          } else if(!target.matches('.header-burger__btn, .burger-menu__close') && target.matches('.burger-menu__item_all')) {
            item.classList.remove('block-hidden');
          }
        });

        if(target.matches('.burger-menu__close, .burger-menu__item, .burger-menu__item_all')) {
          burgerMenu.classList.remove('show');
          headerButton.classList.remove('active');
        } else if( target.closest('.header-burger__btn') ) {
          burgerMenu.classList.add('show');
          headerButton.classList.add('active');
        }
      });
  };
  toggleMenu();
});