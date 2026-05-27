<?php include 'header.php'; ?>

<main class="oms-main">
  <section class="oms-promo" aria-labelledby="oms-promo-title">
    <div class="oms-promo__container">
      
      <div class="oms-promo__content">
        <h1 class="oms-promo__title" id="oms-promo-title">Лечение по ОМС</h1>
        <p class="oms-promo__description">
          В Клинике доктора Парамонова в г. Саратове можно получить лечение по ОМС по разным направлениям
        </p>

        <h2 class="oms-promo__steps-heading">Чтобы получить лечение по ОМС:</h2>

        <ol class="oms-promo__steps">
          <li class="oms-promo__step">

            <div class="oms-promo__step-number">1</div>

            <div class="oms-promo__step-icon-wrapper">
                <svg width="41" height="41"></svg>
            </div>

            <h3 class="oms-promo__step-title">
                Выберите регион
            </h3>

            <p class="oms-promo__step-text">
                Саратов или другие регионы
            </p>

          </li>

          <li class="oms-promo__step">
            <div class="oms-promo__step-header">
              <span class="oms-promo__step-number" aria-hidden="true">2</span>
              <div class="oms-promo__step-icon-wrapper" aria-hidden="true">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z" fill="currentColor"/>
                </svg>
              </div>
            </div>
            <div class="oms-promo__step-body">
              <h3 class="oms-promo__step-title">Найдите услугу</h3>
              <p class="oms-promo__step-text">В списке направлений по ОМС</p>
            </div>
          </li>

          <li class="oms-promo__step">
            <div class="oms-promo__step-header">
              <span class="oms-promo__step-number" aria-hidden="true">3</span>
              <div class="oms-promo__step-icon-wrapper" aria-hidden="true">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z" fill="currentColor"/>
                </svg>
              </div>
            </div>
            <div class="oms-promo__step-body">
              <h3 class="oms-promo__step-title">Подайте заявку</h3>
              <p class="oms-promo__step-text">На странице услуги</p>
            </div>
          </li>
        </ol>
      </div>

      <div class="oms-promo__image-wrapper">
        <img 
          src="./assets/img/delete.png" 
          alt="Руки хирурга в медицинских перчатках, сложенные в форме сердца под светом бестеневой операционной лампы" 
          class="oms-promo__image"
        >
      </div>

    </div>
  </section>

  <section class="oms-directions" aria-labelledby="oms-directions-title">
    <div class="oms-directions__container">
      <h2 class="oms-directions__title" id="oms-directions-title">Направления по ОМС</h2>
      <div class="oms-directions__tablist" role="tablist" aria-label="Выбор региона проживания пациентов">
        <button 
          class="oms-directions__tab" 
          role="tab" 
          aria-selected="false" 
          aria-controls="panel-regions" 
          id="tab-regions"
          tabindex="-1">
          Для жителей регионов
        </button>
        <button 
          class="oms-directions__tab oms-directions__tab--active" 
          role="tab" 
          aria-selected="true" 
          aria-controls="panel-saratov" 
          id="tab-saratov"
          tabindex="0">
          Для жителей Саратова
        </button>
      </div>

      <div 
        class="oms-directions__panel" 
        id="panel-regions" 
        role="tabpanel" 
        aria-labelledby="tab-regions"
        hidden>
        
        <ul class="oms-directions__grid">
          <li class="oms-directions__item">
            <a href="#" class="oms-directions__card">
              <span class="oms-directions__card-title">Урология (оперативная)</span>
              <span class="oms-directions__card-icon" aria-hidden="true">
                <!-- SVG иконка почек -->
              </span>
            </a>
          </li>
          <li class="oms-directions__item">
            <a href="#" class="oms-directions__card">
              <span class="oms-directions__card-title">Гинекология (оперативная)</span>
              <span class="oms-directions__card-icon" aria-hidden="true">
                <!-- SVG иконка цветка лотоса -->
              </span>
            </a>
          </li>
          <li class="oms-directions__item">
            <a href="#" class="oms-directions__card">
              <span class="oms-directions__card-title">Офтальмология (оперативная)</span>
              <span class="oms-directions__card-icon" aria-hidden="true">
                <!-- SVG иконка глаза -->
              </span>
            </a>
          </li>
          <li class="oms-directions__item">
            <a href="#" class="oms-directions__card">
              <span class="oms-directions__card-title">Абдоминальная хирургия</span>
              <span class="oms-directions__card-icon" aria-hidden="true">
                <!-- SVG иконка хирургических инструментов -->
              </span>
            </a>
          </li>
          <li class="oms-directions__item">
            <a href="#" class="oms-directions__card">
              <span class="oms-directions__card-title">Лечение бесплодия методом ЭКО</span>
              <span class="oms-directions__card-icon" aria-hidden="true">
                <!-- SVG иконка младенца -->
              </span>
            </a>
          </li>
        </ul>
      </div>

      <!-- Контентная область для жителей Саратова (активна в текущем состоянии) -->
      <div 
        class="oms-directions__panel" 
        id="panel-saratov" 
        role="tabpanel" 
        aria-labelledby="tab-saratov">
        
        <ul class="oms-directions__grid">
          
          <li class="oms-directions__item">
            <a href="#" class="oms-directions__card">
              <span class="oms-directions__card-title">Компьютерная томография</span>
              <span class="oms-directions__card-icon" aria-hidden="true">
                <!-- SVG иконка КТ / рентген-снимка с рукой -->
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-1 16H6c-.55 0-1-.45-1-1V6c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v12c0 .55-.45 1-1 1z" fill="currentColor"/>
                  <path d="M12 7h-1v4h1V7zm3 2h-1v2h1V9zm-6 1H8v1h1v-1zm3 3h-1v4h1v-4zm3-1h-1v3h1v-3z" fill="currentColor"/>
                </svg>
              </span>
            </a>
          </li>

          <li class="oms-directions__item">
            <a href="#" class="oms-directions__card">
              <span class="oms-directions__card-title">Лечение бесплодия методом ЭКО</span>
              <span class="oms-directions__card-icon" aria-hidden="true">
                <!-- SVG иконка младенца -->
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z" fill="currentColor"/>
                  <circle cx="9" cy="11" r="1.5" fill="currentColor"/>
                  <circle cx="15" cy="11" r="1.5" fill="currentColor"/>
                  <path d="M12 16c-1.48 0-2.75-.81-3.45-2h6.9c-.7 1.19-1.97 2-3.45 2z" fill="currentColor"/>
                </svg>
              </span>
            </a>
          </li>

        </ul>
      </div>

    </div>
  </section>

</main>

<?php include 'footer.php'; ?>