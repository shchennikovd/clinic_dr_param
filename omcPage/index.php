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
            <div class="oms-promo__step-container">
              <h3 class="oms-promo__step-title">Выберите регион</h3>
              <p class="oms-promo__step-text">Саратов или другие регионы</p>
            </div>
            <div class="oms-promo__step-icon-wrapper">
              <img src="./assets/img/icons/map-pin.svg" alt="" class="oms-promo__step-icon">
            </div>
          </li>
          <li class="oms-promo__step">
            <div class="oms-promo__step-number">2</div>
            <div class="oms-promo__step-container">
              <h3 class="oms-promo__step-title">Найдите услугу</h3>
              <p class="oms-promo__step-text">В списке  направлений по ОМС</p>
            </div>
            <div class="oms-promo__step-icon-wrapper">
              <img src="./assets/img/icons/list.svg" alt="" class="oms-promo__step-icon">
            </div>
          </li>
          <li class="oms-promo__step">
            <div class="oms-promo__step-number">3</div>
            <div class="oms-promo__step-container">
              <h3 class="oms-promo__step-title">Подайте заявку</h3>
              <p class="oms-promo__step-text">На странице услуги</p>
            </div>
            <div class="oms-promo__step-icon-wrapper">
              <img src="./assets/img/icons/map-pin.svg" alt="" class="oms-promo__step-icon">
            </div>
          </li>
        </ol>
      </div>

      <div class="oms-promo__image-wrapper">
        <img 
          src="./assets/img/heart.jpg" 
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
              <p class="oms-directions__card-title">Урология (оперативная)</p>
              <img src="./assets/img/icons/kidneys.svg" alt="" class="oms-directions__card-icon" aria-hidden="true">
            </a>
          </li>
          <li class="oms-directions__item">
            <a href="#" class="oms-directions__card">
              <p class="oms-directions__card-title">Гинекология (оперативная)</p>
              <img src="./assets/img/icons/flower-lotus.svg" alt="" class="oms-directions__card-icon" aria-hidden="true">
            </a>
          </li>
          <li class="oms-directions__item">
            <a href="#" class="oms-directions__card">
              <p class="oms-directions__card-title">Офтальмология (оперативная)</p>
              <img src="./assets/img/icons/eye.svg" alt="" class="oms-directions__card-icon" aria-hidden="true">
            </a>
          </li>
          <li class="oms-directions__item">
            <a href="#" class="oms-directions__card">
              <p class="oms-directions__card-title">Абдоминальная хирургия</p>
              <img src="./assets/img/icons/surgical-sterilization-svgrepo.svg" alt="" class="oms-directions__card-icon" aria-hidden="true">
            </a>
          </li>
          <li class="oms-directions__item">
            <a href="#" class="oms-directions__card">
              <p class="oms-directions__card-title">Лечение бесплодия методом ЭКО</p>
              <img src="./assets/img/icons/baby.svg" alt="" class="oms-directions__card-icon" aria-hidden="true">
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
                <p class="oms-directions__card-title">Компьютерная томография</p>
                <img src="./assets/img/icons/x-ray.svg" alt="" class="oms-directions__card-icon" aria-hidden="true">
              </a>
          </li>
          <li class="oms-directions__item">
              <a href="#" class="oms-directions__card">
                <p class="oms-directions__card-title">Лечение бесплодия методом ЭКО</p>
                <img src="./assets/img/icons/baby.svg" alt="" class="oms-directions__card-icon" aria-hidden="true">
              </a>
          </li>
        </ul>
      </div>

    </div>
  </section>

</main>

<?php include 'footer.php'; ?>