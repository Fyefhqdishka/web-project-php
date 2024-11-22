<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <title>Global treveling</title>
    <link rel="icon" href="img/global.svg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/styles.css"/>
    <script src="scripts/scripts.js" defer></script>
  </head>
  <body>
    <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark bg-dark border-bottom border-bottom-dark animated-text fixed-top" data-bs-theme="dark" style="background-color: transparent !important; border-bottom: none !important;">
        <div class="container">
            <div class="navbar-brand" onclick="navigateTo('/')">
                <img src="img/global.png" alt="global">
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <div class="nav-link active" onclick="navigateTo('/')">Главная</div>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link" onclick="navigateTo('population-turs.php')">Популярные туры</div>
                    </li>
                    <li>
                        <div style="margin-left: 1em;" onclick="openExternalLink('https://whatsapp.com')">
                          <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi bi-whatsapp white-for-header-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                          </svg>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="white-color" onclick="makePhoneCall('+12321456789')">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone-vibrate" viewBox="0 0 16 16">
                    <path d="M10 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zM6 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2z"/>
                    <path d="M8 12a1 1 0 1 0 0-2 1 1 0 0 0 0 2M1.599 4.058a.5.5 0 0 1 .208.676A7 7 0 0 0 1 8c0 1.18.292 2.292.807 3.266a.5.5 0 0 1-.884.468A8 8 0 0 1 0 8c0-1.347.334-2.619.923-3.734a.5.5 0 0 1 .676-.208m12.802 0a.5.5 0 0 1 .676.208A8 8 0 0 1 16 8a8 8 0 0 1-.923 3.734.5.5 0 0 1-.884-.468A7 7 0 0 0 15 8c0-1.18-.292-2.292-.807-3.266a.5.5 0 0 1 .208-.676M3.057 5.534a.5.5 0 0 1 .284.648A5 5 0 0 0 3 8c0 .642.12 1.255.34 1.818a.5.5 0 1 1-.93.364A6 6 0 0 1 2 8c0-.769.145-1.505.41-2.182a.5.5 0 0 1 .647-.284m9.886 0a.5.5 0 0 1 .648.284C13.855 6.495 14 7.231 14 8s-.145 1.505-.41 2.182a.5.5 0 0 1-.93-.364C12.88 9.255 13 8.642 13 8s-.12-1.255-.34-1.818a.5.5 0 0 1 .283-.648"/>
                  </svg>
                +12321456789
            </div>
            <button class="btn-login" onclick="navigateTo('login.php')">Войти</button>
            <button class="btn-register" onclick="navigateTo('register.php')">Зарегистрироваться</button>
        </div>
    </nav>
</header>
    <noscript>Для коректной работы сайта, просим включить javascript в настройках</noscript>
    <div class="image-container">
      <img class="animated-text" src="img/5226817948050645542.jpg" alt="HotelOutside">
      <div class="text-overlay-small2 animated-text">
          <form id="bookingForm" action="bookingPage.php" method="GET" class="booking-form">
              <button type="submit" class="btn booking-form-btn-secondary">Найти билеты и гостиницы</button>
          </form>
      </div>
    </div>

    <div class="special-offers-section animated-widget from-left">
        <h2>Специальные предложения</h2>
        <div class="offers-container">
            <div class="offer-card">
                <img src="https://th.bing.com/th/id/OIP.-4GGLWYEGc4CAQATrtTeOgHaEo?rs=1&pid=ImgDetMain" class="offer-card-img" alt="Билеты со скидкой 20%">
                <div class="offer-card-body">
                    <p class="offer-card-text">Скидка 20% на авиабилеты в Европу. Путешествуйте выгодно и удобно!</p>
                </div>
            </div>
            <div class="offer-card">
                <img src="https://th.bing.com/th/id/OIP.SW1MIPFYGggf_1Jgj3CgTAHaE8?rs=1&pid=ImgDetMain" class="offer-card-img" alt="Скидка на отели">
                <div class="offer-card-body">
                    <p class="offer-card-text">Получите до 30% скидки на лучшие отели мира. Забронируйте прямо сейчас!</p>
                </div>
            </div>
            <div class="offer-card">
                <img src="https://th.bing.com/th/id/OIP.l9BdRCNQFe4WfJHd9lmqNQHaEK?rs=1&pid=ImgDetMain" class="offer-card-img" alt="Скидка на семейные туры">
                <div class="offer-card-body">
                    <p class="offer-card-text">Семейные туры с 15% скидкой. Сделайте отдых незабываемым для всей семьи.</p>
                </div>
            </div>
            <div class="offer-card">
                <img src="https://th.bing.com/th/id/OIP.-DB2VwX6RE_NnFnL-AZCcAHaE8?rs=1&pid=ImgDetMain" class="offer-card-img" alt="Раннее бронирование">
                <div class="offer-card-body">
                    <p class="offer-card-text">Скидка 25% при раннем бронировании туров на курорты Азии и Ближнего Востока.</p>
                </div>
            </div>
            <div class="offer-card">
                <img src="https://th.bing.com/th/id/OIP.JI1b_EEIyZOMvukPdyOJ8wHaEe?rs=1&pid=ImgDetMain" class="offer-card-img" alt="Путешествие по России">
                <div class="offer-card-body">
                    <p class="offer-card-text">Исследуйте Россию и получайте скидки на транспорт и проживание.</p>
                </div>
            </div>
            <div class="offer-card">
                <img src="https://th.bing.com/th/id/OIP.ogm-0PninVBgSg-vZZ01BAHaEc?rs=1&pid=ImgDetMain" class="offer-card-img" alt="Горячие туры">
                <div class="offer-card-body">
                    <p class="offer-card-text">Горячие туры с мгновенными скидками до 40%. Путешествуйте спонтанно и выгодно!</p>
                </div>
            </div>
        </div>
    </div>
    
    
    <section class="info-section animated-widget from-right">
        <div class="container">
          <div class="info-content">
            <div class="info-text">
              <h2>Как работает наш сайт</h2>
              <p>Наш сайт предлагает простую и удобную платформу для поиска и бронирования билетов и гостиниц. Вы можете легко сравнивать цены, выбирать лучшие предложения и забронировать свои поездки всего в несколько кликов.</p>
              <h3>Преимущества использования:</h3>
              <ul>
                <li>Широкий выбор предложений</li>
                <li>Удобный интерфейс</li>
                <li>Безопасные платежи</li>
                <li>Поддержка 24/7</li>
                <li>Специальные предложения и скидки</li>
                <li>Персонализированные рекомендации</li>
              </ul>
            </div>
            <div class="info-image">
              <img src="img/5226817948050645542.jpg" alt="Сервис" />
            </div>
          </div>
        </div>
    </section>
      
    
    <div style="margin-bottom: 80px;"></div>
    <footer>
      <div class="custom-container">
          <div class="row">
              <div style="margin-bottom: 45px;"></div>
              <div class="col-md-4 animated-widget from-bottom">
                  <div class="contacts">
                      <h5>Контакты:</h5>
                      <ul class="list-unstyled">
                          <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe-asia-australia" viewBox="0 0 16 16">
                              <path d="m10.495 6.92 1.278-.619a.483.483 0 0 0 .126-.782c-.252-.244-.682-.139-.932.107-.23.226-.513.373-.816.53l-.102.054c-.338.178-.264.626.1.736a.48.48 0 0 0 .346-.027ZM7.741 9.808V9.78a.413.413 0 1 1 .783.183l-.22.443a.6.6 0 0 1-.12.167l-.193.185a.36.36 0 1 1-.5-.516l.112-.108a.45.45 0 0 0 .138-.326M5.672 12.5l.482.233A.386.386 0 1 0 6.32 12h-.416a.7.7 0 0 1-.419-.139l-.277-.206a.302.302 0 1 0-.298.52z"/>
                              <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M1.612 10.867l.756-1.288a1 1 0 0 1 1.545-.225l1.074 1.005a.986.986 0 0 0 1.36-.011l.038-.037a.88.88 0 0 0 .26-.755c-.075-.548.37-1.033.92-1.099.728-.086 1.587-.324 1.728-.957.086-.386-.114-.83-.361-1.2-.207-.312 0-.8.374-.8.123 0 .24-.055.318-.15l.393-.474c.196-.237.491-.368.797-.403.554-.064 1.407-.277 1.583-.973.098-.391-.192-.634-.484-.88-.254-.212-.51-.426-.515-.741a7 7 0 0 1 3.425 7.692 1 1 0 0 0-.087-.063l-.316-.204a1 1 0 0 0-.977-.06l-.169.082a1 1 0 0 1-.741.051l-1.021-.329A1 1 0 0 0 11.205 9h-.165a1 1 0 0 0-.945.674l-.172.499a1 1 0 0 1-.404.514l-.802.518a1 1 0 0 0-.458.84v.455a1 1 0 0 0 1 1h.257a1 1 0 0 1 .542.16l.762.49a1 1 0 0 0 .283.126 7 7 0 0 1-9.49-3.409Z"/>
                            </svg>
                              main office locating at Moscow Russia
                          </li>
                          <li>
                              <div class="contact-link" onclick="makePhoneCall('+79615870514')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone-vibrate" viewBox="0 0 16 16">
                                  <path d="M10 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zM6 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2z"/>
                                  <path d="M8 12a1 1 0 1 0 0-2 1 1 0 0 0 0 2M1.599 4.058a.5.5 0 0 1 .208.676A7 7 0 0 0 1 8c0 1.18.292 2.292.807 3.266a.5.5 0 0 1-.884.468A8 8 0 0 1 0 8c0-1.347.334-2.619.923-3.734a.5.5 0 0 1 .676-.208m12.802 0a.5.5 0 0 1 .676.208A8 8 0 0 1 16 8a8 8 0 0 1-.923 3.734.5.5 0 0 1-.884-.468A7 7 0 0 0 15 8c0-1.18-.292-2.292-.807-3.266a.5.5 0 0 1 .208-.676M3.057 5.534a.5.5 0 0 1 .284.648A5 5 0 0 0 3 8c0 .642.12 1.255.34 1.818a.5.5 0 1 1-.93.364A6 6 0 0 1 2 8c0-.769.145-1.505.41-2.182a.5.5 0 0 1 .647-.284m9.886 0a.5.5 0 0 1 .648.284C13.855 6.495 14 7.231 14 8s-.145 1.505-.41 2.182a.5.5 0 0 1-.93-.364C12.88 9.255 13 8.642 13 8s-.12-1.255-.34-1.818a.5.5 0 0 1 .283-.648"/>
                                </svg>
                                  +79615870514
                              </div>
                          </li>
                          <li>
                              <div class="contact-link" onclick="openExternalLink('mailto:traveling@mail.ru')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-at" viewBox="0 0 16 16">
                                  <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914"/>
                                </svg>
                                  traveling@mail.ru
                              </div>
                          </li>
                      </ul>
                  </div>
                  <div onclick="openExternalLink('https://vk.com')" target="_blank">
                      <svg fill="#ffffff" width="44px" height="44px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M15.74365,13.5293a5.5186,5.5186,0,0,0-.97741-.83612A7.87286,7.87286,0,0,0,17.625,8.22168a1,1,0,1,0-1.9502-.44336,5.86,5.86,0,0,1-3.0205,3.90228V8.002a.95817.95817,0,0,0-.0437-.21643,1.0238,1.0238,0,0,0-.03449-.17083.991.991,0,0,0-.16681-.24891c-.01788-.02124-.02691-.04925-.04645-.0689a1.00121,1.00121,0,0,0-.24609-.16706c-.02551-.01361-.04449-.03662-.07129-.048a1.01943,1.01943,0,0,0-.23645-.04865.94528.94528,0,0,0-.15179-.03119L11.00293,7H11a.99525.99525,0,0,0-.3501,1.92865v4.89069A11.307,11.307,0,0,1,7.64014,7.835a.99988.99988,0,1,0-1.97168.334,13.33371,13.33371,0,0,0,5.3999,8.64355.986.986,0,0,0,.12781.06445.94.94,0,0,0,.10748.0542.99383.99383,0,0,0,.35065.0708.98307.98307,0,0,0,.42382-.10186c.00995-.0047.02137-.00251.03126-.00751a.99262.99262,0,0,0,.24011-.17529c.01422-.01386.02374-.03089.03717-.04554a.98836.98836,0,0,0,.15991-.23718c.01392-.02869.02661-.05609.03778-.08624a.9878.9878,0,0,0,.06995-.34638l.00049-2.126a3.55144,3.55144,0,0,1,1.61474,1.00488l1.64795,1.79687a.99979.99979,0,1,0,1.47363-1.35156ZM15.07275,1H8.9375C2.78027,1,1,2.77832,1,8.92676V15.0625C1,21.21973,2.77783,23,8.92725,23H15.0625C21.21973,23,23,21.22168,23,15.07324V8.9375C23,2.78027,21.22217,1,15.07275,1ZM21,15.07324C21,20.11328,20.1123,21,15.0625,21H8.92725C3.88623,21,3,20.1123,3,15.0625V8.92676C3,3.88672,3.8877,3,8.9375,3h6.13525C20.11377,3,21,3.8877,21,8.9375Z"></path></g>
                      </svg>
                  </div>
                  <div onclick="openExternalLink('https://whatsapp.com')" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="currentColor" class="bi bi-whatsapp white-for-footer-whatsapp" viewBox="0 0 16 16">
                      <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                    </svg>
                  </div>
              </div>
              <div class="col-md-4 animated-widget from-bottom">
                  <div class="navigation">
                      <h5>Навигация:</h5>
                      <ul class="list-unstyled">
                          <li><div class="nav-link" onclick="navigateTo('index.php')">main</div></li>
                          <li><div class="nav-link" onclick="navigateTo('places.html')">Развлечения</div></li>
                          <li><div class="nav-link" onclick="navigateTo('login.php')">Войти</div></li>
                          <li><div class="nav-link" onclick="navigateTo('register.php')">Зарегистрироваться</div></li>
                      </ul>
                  </div>
              </div>
              <div class="col-md-4 animated-widget from-bottom">
                  <div class="positions">
                      <h5>Должности:</h5>
                      <ul class="list-unstyled">
                          <li><div class="nav-link" onclick="navigateTo('vacancy.html')">Вакансии</div></li>
                      </ul>
                      <div style="margin-bottom: 45px;"></div>
                      <h5>Правовая информация:</h5>
                      <ul class="list-unstyled">
                          <li><div class="nav-link" onclick="navigateTo('PolKonf.html')">Политика обработки персональных данных</div></li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col static-line">
                  <p>&copy; 2024 traveling company "Global"</p>
              </div>
          </div>
      </div>
  </footer>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/ru.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  </body>
</html>