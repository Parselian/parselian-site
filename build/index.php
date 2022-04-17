<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./favicon.ico" rel="icon" type="image/x-icon">
    <link href="https://unpkg.com/swiper@8/swiper-bundle.min.css" rel="stylesheet">
    <link href="./assets/css/reset.css" rel="stylesheet">
    <link href="./assets/css/main.css" rel="stylesheet">
  </head>
  <body>
    <div class="burger-menu">
      <div class="burger-menu__wrap">
        <nav class="burger-menu__links"><a href="#about_me">About me</a><a href="#portfolio">Portfolio</a><a href="#advantages">Why me</a><a href="#process">Process</a><a href="#contacts">Contacts</a>
        </nav><a class="burger-menu__button button button_transparent button_transparent-accent" href="#">Check CV</a>
      </div>
    </div>
    <header class="header">
      <div class="header__wrap container">
        <svg class="logo">
          <use xlink:href="./assets/images/svg/symbol/sprite.svg#logo"></use>
        </svg>
        <nav class="header__menu nav-menu"><a href="#about_me">About me</a><a href="#portfolio">Portfolio</a><a href="#advantages">Why me</a><a href="#process">Process</a><a href="#contacts">Contacts</a>
        </nav>
        <div class="header__col"><a class="header__link button button_transparent button_transparent-accent" href="#">Check CV</a>
          <div class="burger-btn">
            <input class="burger-btn__checkbox" type="checkbox"/>
            <div><span></span><span></span></div>
          </div>
          <!--div.header__locations-->
          <!--    a.header__location(href="#") ru-->
          <!--    span.header__locations-separator /-->
          <!--    a.header__location.header__location_active(href="#") en-->
        </div>
      </div>
    </header>
    <section class="promo">
      <div class="promo__shadow-down"></div>
      <div class="promo__wrap container">
        <picture class="promo__bg">
          <source srcset="" type="image/webp"/><img src="./assets/images/promo-bg.jpg" alt="background"/>
        </picture>
        <div class="promo__descr promo__col">
          <h1 class="promo__title"><span class="line-break">Create sites and</span> web applications</h1>
          <div class="promo__subtitle">Frontend developer. I`m create web sites <br /> and applications for 3 years</div>
          <div class="promo__buttons"><a class="promo__button button button_accent" href="#contacts">Contact Me</a>
            <button class="promo__button button button_transparent">See portfolio</button>
          </div>
          <div class="promo__blockquote blockquote">
            <svg class="blockquote__quote blockquote__quote_top">
              <use xlink:href="./assets/images/svg/symbol/sprite.svg#quotes"></use>
            </svg>
            <p class="blockquote__text">I`m convinced that every person should find his own life purpose. I found my own, it`s constant studying something new. I just can`t imagine my life without it.</p>
            <svg class="blockquote__quote blockquote__quote_bottom">
              <use xlink:href="./assets/images/svg/symbol/sprite.svg#quotes"></use>
            </svg>
          </div>
        </div>
        <div class="promo__about promo__col">
          <picture class="promo__img">
            <source srcset="./assets/images/webp/promo-img.webp" type="image/webp"/><img src="./assets/images/promo-img.png" alt="My photo"/>
          </picture>
          <div class="promo__socials"><a class="promo__social promo__social_twitter socials-link" href="https://twitter.com/holiday_slave" target="_blank">
              <svg>
                <use xlink:href="./assets/images/svg/symbol/sprite.svg#twitter"></use>
              </svg><span class="socials-link__label">twitter</span></a><a class="promo__social promo__social_github socials-link" href="https://github.com/Parselian" target="_blank">
              <svg>
                <use xlink:href="./assets/images/svg/symbol/sprite.svg#github"></use>
              </svg><span class="socials-link__label">github</span></a><a class="promo__social promo__social_telegram socials-link" href="https://t.me/Holiday_Slave" target="_blank">
              <svg>
                <use xlink:href="./assets/images/svg/symbol/sprite.svg#telegram"></use>
              </svg><span class="socials-link__label">telegram</span></a><a class="promo__social promo__social_instagram socials-link" href="https://www.instagram.com/holiday_slave/" target="_blank">
              <svg>
                <use xlink:href="./assets/images/svg/symbol/sprite.svg#instagram"></use>
              </svg><span class="socials-link__label">instagram</span></a><a class="promo__social promo__social_vk socials-link" href="https://vk.com/holiday_sl4ve" target="_blank">
              <svg>
                <use xlink:href="./assets/images/svg/symbol/sprite.svg#vk"></use>
              </svg><span class="socials-link__label">vkontakte</span></a>
          </div>
        </div>
      </div>
    </section>
    <section class="advantages" id="advantages">
      <div class="advantages__wrap container">
        <h2 class="advantages__title title"><span class="title__text-behind">Why</span><span class="title__text">am <span class="text_accent">I?</span></span></h2>
        <div class="advantages__cards">
          <div class="advantages__card card">
            <div class="card__heading"><span class="card__counter">01</span><span class="card__title"><span class="text_accent">Big</span> experience</span></div>
            <div class="card__body">
              <p class="card__text">I have a three year experience of creating web sites. Check my finished works below and
                                              take care of it.</p>
            </div>
          </div>
          <div class="advantages__card card">
            <div class="card__heading"><span class="card__counter">02</span><span class="card__title">I work <span class="text_accent">oficially</span></span></div>
            <div class="card__body">
              <p class="card__text">If you want we can make a pact of our work, so you can be sure i make my work fine and
                                              won`t vanish with your money</p>
            </div>
          </div>
          <div class="advantages__card card">
            <div class="card__heading"><span class="card__counter">03</span><span class="card__title">You`re <span class="text_accent">always aware</span></span></div>
            <div class="card__body">
              <p class="card__text">You can monitor about all my work, because i place all my project results in Trello</p>
            </div>
          </div>
          <div class="advantages__card card">
            <div class="card__heading"><span class="card__counter">04</span><span class="card__title">I <span class="text_accent">don`t </span> take prepayment</span></div>
            <div class="card__body">
              <p class="card__text">You can monitor about all my work, because i place all my project results in Trello</p>
            </div>
          </div>
          <div class="advantages__card card">
            <div class="card__heading"><span class="card__counter">05</span><span class="card__title">Follow <span class="text_accent">deadlines</span></span></div>
            <div class="card__body">
              <p class="card__text">You can monitor about all my work, because i place all my project results in Trello</p>
            </div>
          </div>
          <div class="advantages__card card">
            <div class="card__heading"><span class="card__counter">06</span><span class="card__title">Work <span class="text_accent">personally</span></span></div>
            <div class="card__body">
              <p class="card__text">You can monitor about all my work, because i place all my project results in Trello</p>
            </div>
          </div>
        </div><a class="advantages__button button button_accent" href="#contacts">Contact Me</a>
      </div>
    </section>
    <section class="steps" id="process">
      <div class="steps__wrap container">
        <h2 class="steps__title title"><span class="title__text-behind">How</span><span class="title__text">do <span class="text_accent">I work?</span></span></h2>
        <!--+filter([-->
        <!--  {-->
        <!--    isActive: false,-->
        <!--    text: 'You have design template'-->
        <!--  },-->
        <!--  {-->
        <!--    isActive: true,-->
        <!--    text: 'You have nothing'-->
        <!--  }-->
        <!--], 'steps__filter')-->
        <div class="steps__blocks">
          <div class="steps__block card">
            <div class="card__heading"><span class="card__counter">01</span><span class="card__title"><span class="text_accent">Detect</span> your <span class="text_accent">wishes</span></span></div>
            <div class="card__body">
              <p class="card__text card__text_short">I ask some questions to you to detect which type of site you need</p>
              <svg class="card__icon">
                <use xlink:href="./assets/images/svg/symbol/sprite.svg#search"></use>
              </svg>
            </div>
          </div>
          <div class="steps__block card">
            <div class="card__heading"><span class="card__counter">02</span><span class="card__title"><span class="text_accent">Choosing</span> a designer</span></div>
            <div class="card__body">
              <p class="card__text card__text_short">After first step based on your budget i choose a designer to create a template for you web-site</p>
              <svg class="card__icon">
                <use xlink:href="./assets/images/svg/symbol/sprite.svg#brush"></use>
              </svg>
            </div>
          </div>
          <div class="steps__block card">
            <div class="card__heading"><span class="card__counter">03</span><span class="card__title"><span class="text_accent">Make</span> website</span></div>
            <div class="card__body">
              <p class="card__text card__text_short">When designer complete template, i will make wokred version of your website based on template</p>
              <svg class="card__icon">
                <use xlink:href="./assets/images/svg/symbol/sprite.svg#gear"></use>
              </svg>
            </div>
          </div>
          <div class="steps__block card">
            <div class="card__heading"><span class="card__counter">04</span><span class="card__title">You <span class="text_accent">check</span> the <span class="text_accent">results</span></span></div>
            <div class="card__body">
              <p class="card__text card__text_short">You check finished site for some tiny <span class="text_accent text_bold">(you have 5 free corrections)</span></p>
              <svg class="card__icon">
                <use xlink:href="./assets/images/svg/symbol/sprite.svg#check"></use>
              </svg>
            </div>
          </div>
          <div class="steps__block card">
            <div class="card__heading"><span class="card__counter">05</span><span class="card__title"><span class="text_accent">Publish</span> your <span class="text_accent">site</span></span></div>
            <div class="card__body">
              <p class="card__text card__text_short">When i make all fixes, we choose&buy domain name with hosting, then i publish your site and give you all access data</p>
              <svg class="card__icon">
                <use xlink:href="./assets/images/svg/symbol/sprite.svg#globe"></use>
              </svg>
            </div>
          </div>
          <div class="steps__block card">
            <div class="card__heading"><span class="card__counter">06</span><span class="card__title"><span class="text_accent">Recommend</span> me :)</span></div>
            <div class="card__body">
              <p class="card__text card__text_short">If you like work with me, I will be so glad if you recommend me to your friends and leave feeedback about work with me.</p>
              <svg class="card__icon">
                <use xlink:href="./assets/images/svg/symbol/sprite.svg#heart"></use>
              </svg>
            </div>
          </div>
        </div><a class="advantages__button button button_accent" href="#contacts">Contact Me</a>
      </div>
    </section>
    <section class="experience" id="experience">
      <div class="experience__wrap container">
        <h2 class="experience__title title"><span class="title__text-behind">Explore</span><span class="title__text">my <span class="text_accent">experience</span></span></h2>
        <div class="experience__slider">
          <div class="experience__slider-dots">
            <div class="experience__slider-dot experience__slider-dot_active">
              <div class="experience__slider-dot-subtitle">October &mdash; August</div>
              <div class="experience__slider-dot-title">2018 &mdash; 2020</div>
            </div>
            <div class="experience__slider-dot">
              <div class="experience__slider-dot-subtitle">August &mdash; August</div>
              <div class="experience__slider-dot-title">2020 &mdash; 2021</div>
            </div>
            <div class="experience__slider-dot">
              <div class="experience__slider-dot-subtitle">August &mdash; Present</div>
              <div class="experience__slider-dot-title">2021 &mdash; now</div>
            </div>
          </div>
          <div class="experience__select select-box">
            <div class="experience__select-active select-box__selected">
              <div class="select-box__selected-text"><span class="select-box__selected-text-subtitle select-box__list-item-subtitle">October &mdash; August</span><span class="select-box__selected-text-title select-box__list-item-title">2018 &mdash; 2020</span></div>
              <svg class="select-box__selected-icon">
                <use xlink:href="./assets/images/svg/symbol/sprite.svg#select-arrow"></use>
              </svg>
            </div>
            <ul class="experience__select-list select-box__list">
              <li class="select-box__list-item select-box__list-item_selected"><span class="select-box__list-item-subtitle">October &mdash; August</span><span class="select-box__list-item-title">2018 &mdash; 2020</span></li>
              <li class="select-box__list-item"><span class="select-box__list-item-subtitle">August &mdash; August</span><span class="select-box__list-item-title">2020 &mdash; 2021</span></li>
              <li class="select-box__list-item"><span class="select-box__list-item-subtitle">August &mdash; Present</span><span class="select-box__list-item-title">2021 &mdash; Nowadays</span></li>
            </ul>
          </div>
          <div class="experience__slides">
            <div class="experience__slide experience__slide_active">
              <picture class="experience__slide-img">
                <source srcset="./assets/images/webp/experience-img_1.webp" type="image/webp"/><img src="./assets/images/experience-img_1.png" alt="photo"/>
              </picture>
              <div class="experience__slide-subtitle">Company name</div>
              <h3 class="experience__slide-title">Tried to earn money on freelance</h3>
              <p class="experience__slide-text">
                There was start my way as a frontend developer. After some frontend courses I decided to
                continue work as a freelancer: try to find orders, chat with clients and colleagues a lot etc.
                </br></br>
                To be honest it was only way how i could to start build my career as a developer because on
                that moment a studied at college. For that period i made not many projects (about 10-20 sites)
                because all my attention was directed to getting a middle-specialty degree.
                </br></br>
                After college i wanted to continue my study at university, but fail my exams.... So, after
                this failrue i decided to find a real job because i want to get new experience such as:
                teamwork, solve unusual tasks etc.
                </br></br>
                And the first place where i went to work was Apple Service Center.
              </p><a class="experience__slide-button button button_transparent button_transparent-accent" href="#">check my CV</a>
            </div>
            <div class="experience__slide">
              <picture class="experience__slide-img">
                <source srcset="./assets/images/webp/experience-img_1.webp" type="image/webp"/><img src="./assets/images/experience-img_1.png" alt="photo"/>
              </picture>
              <div class="experience__slide-subtitle">Company name</div>
              <h3 class="experience__slide-title"> senter</h3>
              <p class="experience__slide-text">
                I worked as a junior Frontend developer. My work included in creating new websites for
                us and our partners and also maintaince existing projects.<br/><br/>
                I worked as a junior Frontend developer. My work included in creating new websites for
                us and our partners and also maintaince existing projects.
              </p><a class="experience__slide-button button button_transparent button_transparent-accent" href="#">check my CV</a>
            </div>
            <div class="experience__slide">
              <picture class="experience__slide-img">
                <source srcset="./assets/images/webp/experience-img_1.webp" type="image/webp"/><img src="./assets/images/experience-img_1.png" alt="photo"/>
              </picture>
              <div class="experience__slide-subtitle">Company name</div>
              <h3 class="experience__slide-title">Apple</h3>
              <p class="experience__slide-text">
                I worked as a junior Frontend developer. My work included in creating new websites for
                us and our partners and also maintaince existing projects.<br/><br/>
                I worked as a junior Frontend developer. My work included in creating new websites for
                us and our partners and also maintaince existing projects.
              </p><a class="experience__slide-button button button_transparent button_transparent-accent" href="#">check my CV</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="portfolio" id="portfolio">
      <div class="porfolio__wrap container">
        <h2 class="portfolio__title title"><span class="title__text-behind">My</span><span class="title__text">finished <span class="text_accent">works</span></span></h2>
        <!--+filter([-->
        <!--  {isActive: false, text: 'Web sites'},-->
        <!--  {isActive: true, text: 'Web applications'}],-->
        <!--  'portfolio__filter'-->
        <!--)-->
        <div class="portfolio__sliders">
          <div class="swiper info-slider">
            <div class="info-slider__controls">
              <svg class="swiper-button-prev info-slider__arrow info-slider__arrow_prev">
                <use xlink:href="./assets/images/svg/symbol/sprite.svg#arrow"></use>
              </svg>
              <ul class="swiper-pagination info-slider__dots">
                <li class="info-slider__dot"></li>
                <li class="info-slider__dot info-slider__dot_active"></li>
                <li class="info-slider__dot"></li>
                <li class="info-slider__dot"></li>
                <li class="info-slider__dot"></li>
              </ul>
              <svg class="swiper-button-next info-slider__arrow info-slider__arrow_next">
                <use xlink:href="./assets/images/svg/symbol/sprite.svg#arrow"></use>
              </svg>
            </div>
            <div class="swiper-wrapper info-slider__slides">
              <div class="info-slider__slide swiper-slide">
                <h4 class="info-slider__slide-subtitle">project name</h4>
                <h3 class="info-slider__slide-title">House Forever</h3>
                <div class="info-slider__slide-block">
                  <p class="info-slider__slide-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, sit.</p>
                  <div class="info-slider__slide-grid">
                    <div class="info-slider__slide-column">
                      <div class="info-slider__slide-grid-column-item text_medium">Development time:</div>
                      <div class="info-slider__slide-grid-column-item text_medium">Price:</div>
                    </div>
                    <div class="info-slider__slide-column">
                      <div class="info-slider__slide-grid-column-item text_light">16 hours</div>
                      <div class="info-slider__slide-grid-column-item text_light">$150</div>
                    </div>
                  </div>
                  <div class="info-slider__slide-technologies">
                    <div class="info-slider__slide-technologies-title">Used technologies</div>
                    <ul class="info-slider__slide-technologies-list">
                      <li class="info-slider__slide-technologies-list-item">HTML</li>
                      <li class="info-slider__slide-technologies-list-item">CSS</li>
                      <li class="info-slider__slide-technologies-list-item">JavaScript</li>
                      <li class="info-slider__slide-technologies-list-item">Gulp</li>
                    </ul>
                  </div>
                </div><a class="info-slider__slide-button button button_transparent button_transparent-accent" href="#contacts">Contact Me</a>
              </div>
              <div class="info-slider__slide swiper-slide">
                <h4 class="info-slider__slide-subtitle">project name</h4>
                <h3 class="info-slider__slide-title">"Body" GYM</h3>
                <div class="info-slider__slide-block">
                  <p class="info-slider__slide-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, sit.</p>
                  <div class="info-slider__slide-grid">
                    <div class="info-slider__slide-column">
                      <div class="info-slider__slide-grid-column-item text_medium">Development time:</div>
                      <div class="info-slider__slide-grid-column-item text_medium">Price:</div>
                    </div>
                    <div class="info-slider__slide-column">
                      <div class="info-slider__slide-grid-column-item text_light">48 hours</div>
                      <div class="info-slider__slide-grid-column-item text_light">$270</div>
                    </div>
                  </div>
                  <div class="info-slider__slide-technologies">
                    <div class="info-slider__slide-technologies-title">Used technologies</div>
                    <ul class="info-slider__slide-technologies-list">
                      <li class="info-slider__slide-technologies-list-item">HTML</li>
                      <li class="info-slider__slide-technologies-list-item">CSS</li>
                      <li class="info-slider__slide-technologies-list-item">JavaScript</li>
                      <li class="info-slider__slide-technologies-list-item">Gulp</li>
                    </ul>
                  </div>
                </div><a class="info-slider__slide-button button button_transparent button_transparent-accent" href="#contacts">Contact Me</a>
              </div>
            </div>
          </div>
          <div class="swiper gallery__slider">
            <div class="swiper-wrapper">
              <div class="gallery__slide swiper-slide">
                <picture class="gallery__slide-img">
                  <source srcset="./assets/images/webp/project_preview.webp" type="image/webp"/><img src="./assets/images/project_preview.jpg" alt="preview"/>
                </picture>
                <div class="gallery__slide-links">
                  <div class="gallery__slide-links-title">Open a project in:</div>
                  <nav class="gallery__slide-links-list"><a class="gallery__slide-link" href="https://github.com/Parselian" target="_blank">
                      <svg class="gallery__slide-link-icon">
                        <use xlink:href="./assets/images/svg/symbol/sprite.svg#github"></use>
                      </svg></a></nav>
                </div>
              </div>
              <div class="gallery__slide swiper-slide">
                <picture class="gallery__slide-img">
                  <source srcset="./assets/images/webp/project_preview.webp" type="image/webp"/><img src="./assets/images/project_preview.jpg" alt="preview"/>
                </picture>
                <div class="gallery__slide-links">
                  <div class="gallery__slide-links-title">Open a project in:</div>
                  <nav class="gallery__slide-links-list"><a class="gallery__slide-link" href="#" target="_blank">
                      <svg class="gallery__slide-link-icon">
                        <use xlink:href="./assets/images/svg/symbol/sprite.svg#github"></use>
                      </svg></a></nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="contacts" id="contacts">
      <div class="container">
        <h2 class="contacts__title title"><span class="title__text-behind">Get</span><span class="title__text">in <span class="text_accent">touch</span></span></h2>
        <div class="contacts__wrap">
          <div class="contacts__info">
            <div class="contacts__socials contacts__block">
              <h3 class="contacts__block-title text_medium"><span class="text_accent">Find</span> me on</h3>
              <div class="contacts__socials-links"><a class="contacts__socials-link socials-link" href="https://twitter.com/holiday_slave" target="_blank">
                  <svg>
                    <use xlink:href="./assets/images/svg/symbol/sprite.svg#twitter"></use>
                  </svg><span class="socials-link__label">twitter</span></a><a class="contacts__socials-link socials-link" href="https://github.com/Parselian" target="_blank">
                  <svg>
                    <use xlink:href="./assets/images/svg/symbol/sprite.svg#github"></use>
                  </svg><span class="socials-link__label">github</span></a><a class="contacts__socials-link socials-link" href="https://t.me/Holiday_Slave" target="_blank">
                  <svg>
                    <use xlink:href="./assets/images/svg/symbol/sprite.svg#telegram"></use>
                  </svg><span class="socials-link__label">telegram</span></a><a class="contacts__socials-link socials-link" href="https://www.instagram.com/holiday_slave/" target="_blank">
                  <svg>
                    <use xlink:href="./assets/images/svg/symbol/sprite.svg#instagram"></use>
                  </svg><span class="socials-link__label">instagram</span></a><a class="contacts__socials-link socials-link" href="https://vk.com/holiday_sl4ve" target="_blank">
                  <svg>
                    <use xlink:href="./assets/images/svg/symbol/sprite.svg#vk"></use>
                  </svg><span class="socials-link__label">vkontakte</span></a>
              </div>
            </div>
            <div class="contacts__cv contacts__block">
              <h3 class="contacts__block-title text_medium"><span class="text_accent">Check</span> my CV</h3><a class="contacts__block-link button button_transparent button_transparent-accent" href="#">Check CV</a>
            </div>
          </div>
          <form class="contacts-form form" id="contacts-form" action="#" method="POST">
            <div class="contacts-form__inputs form__inputs">
              <div class="form__input-wrap">
                <label class="form__input-label form__label">Your name</label>
                <input class="contacts-form__input form__input" name="client_name"/>
              </div>
              <div class="form__input-wrap">
                <label class="form__input-label form__label">Your email<sup>*</sup></label>
                <input class="contacts-form__input form__input" name="client_email" required="required"/>
              </div>
            </div>
            <div class="form__textarea-wrap">
              <label class="form__textarea-label form__label">Your message<sup>*</sup></label>
              <textarea class="contacts-form__textarea form__textarea" name="client_message"></textarea>
            </div>
            <button class="contacts-form__button form__button button button_accent">Send</button>
          </form>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="footer__wrap container">
        <svg class="logo">
          <use xlink:href="./assets/images/svg/symbol/sprite.svg#logo"></use>
        </svg>
        <div class="footer__copyright copyright">vyacheslav.job@yandex.ru</div>
      </div>
    </footer>
    <div class="popups popups_hidden">
      <div class="popup-thanks popup popups_hidden">
        <h2 class="popup__title">Thank you!</h2>
        <div class="popup-thanks__subtitle popup__subtitle">I will contact to you as soon as possible</div>
        <button class="popup__button button button_transparent button_transparent-accent">Close</button>
        <svg class="popup-thanks__icon popup__icon">
          <use xlink:href="./assets/images/svg/symbol/sprite.svg#parselian"></use>
        </svg>
      </div>
      <div class="popup-error popup popups_hidden">
        <h2 class="popup__title">Something wrong!</h2>
        <div class="popup-thanks__subtitle popup__subtitle">Your message has not been sent. Contact me in other socials.</div>
        <button class="popup__button button button_transparent button_transparent-accent">Close</button>
        <svg class="popup-thanks__icon popup__icon">
          <use xlink:href="./assets/images/svg/symbol/sprite.svg#parselian"></use>
        </svg>
      </div>
    </div>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="./assets/scripts/js/main.js"></script>
  </body>
</html>