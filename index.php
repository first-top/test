 <!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="styles/style.css">
  <title>Document</title>
</head>
<body>
<div class="wrapper php-test">
  <div class="content">
    <header class="header">
    </header>
    <main class="main" style="padding-top: 20px;">
      <div class="container">
        <div class="slides k1-form-slides">
          <form action="">
<!--            <div class="slides__box flex-body">-->
              <div class="slides__item slides__item--intro slide-check">
<!--                <div class="slide-item__row" data-type="email">-->
<!--                  <div class="slide-item__title k1-required">-->
<!--                    Электронная почта-->
<!--                  </div>-->
<!--                  <div class="slide-item__input-text">-->
<!--                    <label for="user-email">-->
<!--                      <input type="email" id="user-email" name="email">-->
<!--                    </label>-->
<!--                  </div>-->
<!--                  <div class="slide-item__error-field">-->
<!--                    Это обязательный вопрос.-->
<!--                  </div>-->
<!--                </div>-->
                <div class="slide-item__row" data-type="phone">
                  <div class="slide-item__title">
                    Номер телефона
                  </div>
                  <div class="slide-item__input-text">
                    <label for="user-phone">
                      <input type="text" id="user-phone" name="phone">
                    </label>
                  </div>
                </div>
                <div class="slide-item__row" data-type="telegram-nickname">
                  <div class="slide-item__title k1-required">
                    Ваш ник в Telegram (можно найти в профиле, начинается с символа @)
                  </div>
                  <div class="slide-item__input-text">
                    <label for="user-telegram-nickname">
                      <input type="text" id="user-telegram-nickname" name="telegram-nickname">
                    </label>
                  </div>
                  <div class="slide-item__error-field">
                    Это обязательное поле.
                  </div>
                </div>
                <h3> Выберите категорию</h3>
                <div class="slide-check__choose">
                  <div class="slide-check-item" data-value="vk">
                    <label for="vk">
                      <input type="checkbox" id="vk" name="chose-social">
                      <span></span>
                      VK
                    </label>
                  </div>
                  <div class="slide-check-item" data-value="fb">
                    <label for="fb">
                      <input type="checkbox" id="fb" name="chose-social">
                      <span></span>
                      FB
                    </label>
                  </div>
                  <div class="slide-item__error-field">
                    Выберите хотя бы 1 соц.сеть
                  </div>
                </div>
                
              </div>
              <div class="slides__item social-item social-item--vk slides__item--vk slide-item">
<!--                <h1 style="color: blue">Вопросы для ВК</h1>-->
                <h3>Тестовое задание для таргетологов ВКонтакте</h3>
                <h5>В вопросах может быть как один ответ, так и несколько (будьте внимательны).</h5>
                <h5><span style="color: red;">*</span> Обязательно</h5>
                
                <div class="slide-item__row" data-type="pay-models">
                  <div class="slide-item__title k1-required">
                    Какие модели оплаты применяются в ВКонтакте при настройке рекламных объявлений?
                  </div>
                  <div class="slide-item__checkboxes">
                    <div class="slide-item__checkboxes-row">
                      <label for="pay-models-clicks">
                        <input type="checkbox" id="pay-models-clicks" name="pay-models">
                        <span></span>
                        Оплата за клики
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="pay-models-shows">
                        <input type="checkbox" id="pay-models-shows" name="pay-models">
                        <span></span>
                        Оплата за количество показов
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="pay-models-time">
                        <input type="checkbox" id="pay-models-time" name="pay-models">
                        <span></span>
                        Оплата за время показа
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="pay-models-auto">
                        <input type="checkbox" id="pay-models-auto" name="pay-models">
                        <span></span>
                        Автоматическое управление ценой
                      </label>
                    </div>
                  </div>
                  <div class="slide-item__error-field">Это обязательный вопрос.</div>
                </div>
                <div class="slide-item__row" data-type="minimal-volume">
                  <div class="slide-item__title k1-required">
                    Минимальный объем целевой аудитории для запуска рекламного объявления?
                  </div>
                  <div class="slide-item__radios">
                    <div class="slide-item__checkboxes-row">
                      <label for="minimal-volume-10">
                        <input type="radio" id="minimal-volume-10" name="minimal-volume">
                        <span></span>
                        10
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="minimal-volume-100">
                        <input type="radio" id="minimal-volume-100" name="minimal-volume">
                        <span></span>
                        100
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="minimal-volume-500">
                        <input type="radio" id="minimal-volume-500" name="minimal-volume">
                        <span></span>
                        500
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="minimal-volume-1000">
                        <input type="radio" id="minimal-volume-1000" name="minimal-volume">
                        <span></span>
                        1000
                      </label>
                    </div>
                  </div>
                  <div class="slide-item__error-field">Это обязательный вопрос.</div>
                </div>
                <div class="slide-item__row" data-type="minimal-distance">
                  <div class="slide-item__title k1-required">
                    Какое минимальное расстояние в настройках геолокации (при настройке местоположения по карте) вы
                    можете выбрать при создании таргетированной рекламы?
                  </div>
                  <div class="slide-item__radios">
                    <div class="slide-item__checkboxes-row">
                      <label for="minimal-distance-500">
                        <input type="radio" id="minimal-distance-500" name="minimal-distance">
                        <span></span>
                        500 м
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="minimal-distance-1">
                        <input type="radio" id="minimal-distance-1" name="minimal-distance">
                        <span></span>
                        1 км
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="minimal-distance-5">
                        <input type="radio" id="minimal-distance-5" name="minimal-distance">
                        <span></span>
                        5 км
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="minimal-distance-10">
                        <input type="radio" id="minimal-distance-10" name="minimal-distance">
                        <span></span>
                        10 км
                      </label>
                    </div>
                  </div>
                  <div class="slide-item__error-field">Это обязательный вопрос.</div>
                </div>
                <div class="slide-item__row" data-type="settings-save">
                  <div class="slide-item__title k1-required">
                    Какие модели оплаты применяются в ВКонтакте при настройке рекламных объявлений?
                  </div>
                  <div class="slide-item__checkboxes">
                    <div class="slide-item__checkboxes-row">
                      <label for="settings-save-forward">
                        <input type="checkbox" id="settings-save-forward" name="settings-save">
                        <span></span>
                        Перешли по ссылке
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="settings-save-hide-post">
                        <input type="checkbox" id="settings-save-hide-post" name="settings-save">
                        <span></span>
                        Скрыли запись из новостей
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="settings-save-25">
                        <input type="checkbox" id="settings-save-25" name="settings-save">
                        <span></span>
                        Посмотрели 25% видео
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="settings-save-write-message">
                        <input type="checkbox" id="settings-save-write-message" name="settings-save">
                        <span></span>
                        Написали сообщение в сообщество
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="settings-save-share">
                        <input type="checkbox" id="settings-save-share" name="settings-save">
                        <span></span>
                        Поделились записью
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="settings-save-all">
                        <input type="checkbox" id="settings-save-all" name="settings-save">
                        <span></span>
                        Все действия выше можно сохранить
                      </label>
                    </div>
                  </div>
                  <div class="slide-item__error-field">Это обязательный вопрос.</div>
                </div>
                <div class="slide-item__row" data-type="max-peoples">
                  <div class="slide-item__title k1-required">
                    Минимальный объем целевой аудитории для запуска рекламного объявления?
                  </div>
                  <div class="slide-item__radios">
                    <div class="slide-item__checkboxes-row">
                      <label for="max-peoples-before-10">
                        <input type="radio" id="max-peoples-before-10" name="max-peoples">
                        <span></span>
                        До 10 000 пользователей
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="max-peoples-before-50">
                        <input type="radio" id="max-peoples-before-50" name="max-peoples">
                        <span></span>
                        До 50 000 пользователей
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="max-peoples-before-100">
                        <input type="radio" id="max-peoples-before-100" name="max-peoples">
                        <span></span>
                        До 100 000 пользователей
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="max-peoples-before-200">
                        <input type="radio" id="max-peoples-before-200" name="max-peoples">
                        <span></span>
                        До 200 000 пользователей
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="max-peoples-over-200">
                        <input type="radio" id="max-peoples-over-200" name="max-peoples">
                        <span></span>
                        Более 200 000 пользователей
                      </label>
                    </div>
                  </div>
                  <div class="slide-item__error-field">Это обязательный вопрос.</div>
                </div>
                <div class="slide-item__row" data-type="emoji">
                  <div class="slide-item__title k1-required">
                    Сколько эмодзи можно использовать в тексте рекламного объявления (формат: универсальная запись)?
                  </div>
                  <div class="slide-item__radios">
                    <div class="slide-item__checkboxes-row">
                      <label for="emoji-6">
                        <input type="radio" id="emoji-6" name="emoji">
                        <span></span>
                        6
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="emoji-8">
                        <input type="radio" id="emoji-8" name="emoji">
                        <span></span>
                        8
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="emoji-10">
                        <input type="radio" id="emoji-10" name="emoji">
                        <span></span>
                        10
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="emoji-12">
                        <input type="radio" id="emoji-12" name="emoji">
                        <span></span>
                        12
                      </label>
                    </div>
                  </div>
                  <div class="slide-item__error-field">Это обязательный вопрос.</div>
                </div>
                <div class="slide-item__row" data-type="minimal-cost">
                  <div class="slide-item__title k1-required">
                    Минимальная стоимость за 1000 показов для формата универсальная запись?
                  </div>
                  <div class="slide-item__radios">
                    <div class="slide-item__checkboxes-row">
                      <label for="minimal-cost-1">
                        <input type="radio" id="minimal-cost-1" name="minimal-cost">
                        <span></span>
                        1,20 руб
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="minimal-cost-30">
                        <input type="radio" id="minimal-cost-30" name="minimal-cost">
                        <span></span>
                        30 руб
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="minimal-cost-50">
                        <input type="radio" id="minimal-cost-50" name="minimal-cost">
                        <span></span>
                        50 руб
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="minimal-cost-70">
                        <input type="radio" id="minimal-cost-70" name="minimal-cost">
                        <span></span>
                        70 руб
                      </label>
                    </div>
                  </div>
                  <div class="slide-item__error-field">Это обязательный вопрос.</div>
                </div>
                <div class="slide-item__row" data-type="settings-budget">
                  <div class="slide-item__title k1-required">
                    Сколько эмодзи можно использовать в тексте рекламного объявления (формат: универсальная запись)?
                  </div>
                  <div class="slide-item__radios">
                    <div class="slide-item__checkboxes-row">
                      <label for="settings-budget-clicks">
                        <input type="radio" id="settings-budget-clicks" name="settings-budget">
                        <span></span>
                        Регулирование ставок за показы/клики
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="settings-budget-shows">
                        <input type="radio" id="settings-budget-shows" name="settings-budget">
                        <span></span>
                        Установка лимита объявления
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="settings-budget-day">
                        <input type="radio" id="settings-budget-day" name="settings-budget">
                        <span></span>
                        Установка дневного лимита
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="settings-budget-clicks-shows">
                        <input type="radio" id="settings-budget-clicks-shows" name="settings-budget">
                        <span></span>
                        Регулирование ставок за показы/клики, установка лимита объявления
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="settings-budget-clicks-day">
                        <input type="radio" id="settings-budget-clicks-day" name="settings-budget">
                        <span></span>
                        Регулирование ставок за показы/клики, установка дневного лимита
                      </label>
                    </div>
                  </div>
                  <div class="slide-item__error-field">Это обязательный вопрос.</div>
                </div>
                <div class="slide-item__row" data-type="universal">
                  <div class="slide-item__title k1-required">
                    Какие параметры влияют на объем показов универсальной записи при модели оплаты CPC?
                  </div>
                  <div class="slide-item__checkboxes">
                    <div class="slide-item__checkboxes-row">
                      <label for="universal-auction">
                        <input type="checkbox" id="universal-auction" name="universal">
                        <span></span>
                        Конкуренция на аукционе
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="universal-click">
                        <input type="checkbox" id="universal-click" name="universal">
                        <span></span>
                        Установленная цена за клик
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="universal-limit">
                        <input type="checkbox" id="universal-limit" name="universal">
                        <span></span>
                        Лимит объявления
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="universal-ctr">
                        <input type="checkbox" id="universal-ctr" name="universal">
                        <span></span>
                        CTR объявления
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="universal-all">
                        <input type="checkbox" id="universal-all" name="universal">
                        <span></span>
                        Все выше перечисленные
                      </label>
                    </div>
                  </div>
                  <div class="slide-item__error-field">Это обязательный вопрос.</div>
                </div>
<!--                <div class="slide-item__row" data-type="quest">-->
<!--                  <div class="slide-item__title k1-required">-->
<!--                    Практическое задание по ссылке-->
<!--                    <a href="https://docs.google.com/document/d/1qd4_ggJr-XXvBXBXves0nQz3DtZSukvVm0XRuGl3gQw/edit">-->
<!--                      https://docs.google.com/document/d/1qd4_ggJr-XXvBXBXves0nQz3DtZSukvVm0XRuGl3gQw/edit</a> В ответе-->
<!--                    прислать ссылку на документ (Google) или ссылку на скриншот промопоста-->
<!--                  </div>-->
<!--                  <div class="slide-item__input-text">-->
<!--                    <label for="user-quest">-->
<!--                      <input type="text" id="user-quest" name="quest">-->
<!--                    </label>-->
<!--                  </div>-->
<!--                </div>-->
<!--                <div class="slide-item__row">-->
<!--                  <div class="slide-item__next">-->
<!--                    Далее-->
<!--                  </div>-->
<!--                  <div class="slide-item__clear-form">-->
<!--                    Очистить-->
<!--                  </div>-->
<!--                </div>-->
              </div>
              <div class="slides__item social-item social-item--fb slides__item--fb slide-item">
                <h3>Тестовое задание для таргетологов Facebook</h3>
                <h5>В вопросах может быть как один ответ, так и несколько (будьте внимательны).</h5>
                <h5><span style="color: red;">*</span> Обязательно</h5>
                
                <div class="slide-item__row" data-type="ad-format">
                  <div class="slide-item__title k1-required">
                    Где нужно выбирать формат рекламы? Формат — значит, тип рекламы (например, изображение или видео) и то, как
                    она будет отображаться.
                  </div>
                  <div class="slide-item__radios">
                    <div class="slide-item__checkboxes-row">
                      <label for="ad-format-company">
                        <input type="radio" id="ad-format-company" name="ad-format">
                        <span></span>
                        На уровне кампании
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="ad-format-group">
                        <input type="radio" id="ad-format-group" name="ad-format">
                        <span></span>
                        При настройке групп объявлений
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="ad-format-individual">
                        <input type="radio" id="ad-format-individual" name="ad-format">
                        <span></span>
                        На уровне отдельных объявлений
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="ad-format-no-one">
                        <input type="radio" id="ad-format-no-one" name="ad-format">
                        <span></span>
                        Здесь нет верных вариантов
                      </label>
                    </div>
                  </div>
                  <div class="slide-item__error-field">Это обязательный вопрос.</div>
                </div>
                <div class="slide-item__row" data-type="what-target">
                  <div class="slide-item__title k1-required">
                    Какую цель нужно использовать, если вы хотите, чтобы вашу рекламу увидело как можно больше людей? Выберите
                    один вариант?
                  </div>
                  <div class="slide-item__radios">
                    <div class="slide-item__checkboxes-row">
                      <label for="what-target-scope">
                        <input type="radio" id="what-target-scope" name="what-target">
                        <span></span>
                        Охват
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="what-target-brand">
                        <input type="radio" id="what-target-brand" name="what-target">
                        <span></span>
                        Узнаваемость бренда
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="what-target-visited">
                        <input type="radio" id="what-target-visited" name="what-target">
                        <span></span>
                        Посещение точек
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="what-target-no-one">
                        <input type="radio" id="what-target-no-one" name="what-target">
                        <span></span>
                        Здесь нет нужного варианта ответа
                      </label>
                    </div>
      
                  </div>
                  <div class="slide-item__error-field">Это обязательный вопрос.</div>
                </div>
                <div class="slide-item__row" data-type="media-plan">
                  <div class="slide-item__title k1-required">
                    Как вы будете составлять медиаплан на рекламу?
                  </div>
                  <div class="slide-item__radios">
                    <div class="slide-item__checkboxes-row">
                      <label for="media-plan-max-cost">
                        <input type="radio" id="media-plan-max-cost" name="media-plan">
                        <span></span>
                        Определю максимальную сумму, которую могу выделить на рекламу, равномерно распределю её между всеми
                        кампаниями
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="media-plan-cost">
                        <input type="radio" id="media-plan-cost" name="media-plan">
                        <span></span>
                        Определю сумму на месяц и распределю её между кампаниями в зависимости от их эффективности
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="media-plan-by-result">
                        <input type="radio" id="media-plan-by-result" name="media-plan">
                        <span></span>
                        Буду отталкиваться, от того, сколько результатов мне нужно получить: возьму среднюю цену клика, прикину,
                        сколько кликов необходимо, чтобы окупить рекламу, и перемножу
                      </label>
                    </div>
                  </div>
                  <div class="slide-item__error-field">Это обязательный вопрос.</div>
                </div>
                <div class="slide-item__row" data-type="ad-rus">
                  <div class="slide-item__title k1-required">
                    Вы запускаете рекламу в России. Как будете таргетироваться по людям с доходом выше среднего? Выберите
                    несколько вариантов.
                  </div>
                  <div class="slide-item__checkboxes">
                    <div class="slide-item__checkboxes-row">
                      <label for="ad-rus-pay">
                        <input type="checkbox" id="ad-rus-pay" name="ad-rus">
                        <span></span>
                        Выберу таргетинг по платежам
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="ad-rus-apple">
                        <input type="checkbox" id="ad-rus-apple" name="ad-rus">
                        <span></span>
                        Буду таргетироваться на всех владельцев техники Apple
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="ad-rus-top">
                        <input type="checkbox" id="ad-rus-top" name="ad-rus">
                        <span></span>
                        Буду таргетироваться на пользователей топовых смартфонов этого и прошлого года
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="ad-rus-moscow">
                        <input type="checkbox" id="ad-rus-moscow" name="ad-rus">
                        <span></span>
                        По тем, кто живёт в богатых районах Москвы и Подмосковья
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="ad-rus-travel">
                        <input type="checkbox" id="ad-rus-travel" name="ad-rus">
                        <span></span>
                        По тем, кто часто путешествует
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="ad-rus-finance">
                        <input type="checkbox" id="ad-rus-finance" name="ad-rus">
                        <span></span>
                        По тем, кто интересуется деньгами, финансами, богатством
                      </label>
                    </div>
                  </div>
                  <div class="slide-item__error-field">Это обязательный вопрос.</div>
                </div>
                <div class="slide-item__row" data-type="pay-for-show">
                  <div class="slide-item__title k1-required">
                    Вы запускаете группу с оплатой за показы. Сколько объявлений вы создадите?
                  </div>
                  <div class="slide-item__radios">
                    <div class="slide-item__checkboxes-row">
                      <label for="pay-for-show-10-more">
                        <input type="radio" id="pay-for-show-10-more" name="pay-for-show">
                        <span></span>
                        Не меньше 10: чем больше, тем лучше — важно протестировать максимум вариантов
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="pay-for-show-2">
                        <input type="radio" id="pay-for-show-2" name="pay-for-show">
                        <span></span>
                        Будет достаточно 1−2 объявлений на группу, чтобы не распыляться
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="pay-for-show-5-more">
                        <input type="radio" id="pay-for-show-5-more" name="pay-for-show">
                        <span></span>
                        Минимум 5 — по одному объявлению каждого формата
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="pay-for-show-5">
                        <input type="radio" id="pay-for-show-5" name="pay-for-show">
                        <span></span>
                        3−5 объявлений будет достаточно, чтобы протестировать разные варианты и не израсходовать лишний бюджет
                      </label>
                    </div>
                  </div>
                  <div class="slide-item__error-field">Это обязательный вопрос.</div>
                </div>
                <div class="slide-item__row" data-type="min-budget">
                  <div class="slide-item__title k1-required">
                    Какой минимальный бюджет на тесте нужно выделить на одну группу объявлений, чтобы понять, насколько для вас
                    эффективна эта аудитория и плейсмент?
                  </div>
                  <div class="slide-item__radios">
                    <div class="slide-item__checkboxes-row">
                      <label for="min-budget-1000">
                        <input type="radio" id="min-budget-1000" name="min-budget">
                        <span></span>
                        Минимум 1000 рублей
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="min-budget-500">
                        <input type="radio" id="min-budget-500" name="min-budget">
                        <span></span>
                        400-500 руб
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="min-budget-100">
                        <input type="radio" id="min-budget-100" name="min-budget">
                        <span></span>
                        Чтобы оценить эффективность группы объявлений, не нужно выделять много денег — это можно понять уже на
                        небольшом бюджете до 100 руб.
                      </label>
                    </div>
                  </div>
                  <div class="slide-item__error-field">Это обязательный вопрос.</div>
                </div>
                <div class="slide-item__row" data-type="max-interest">
                  <div class="slide-item__title k1-required">
                    Какое максимальное количество интересов в детальном таргетинге можно указывать в одной группе объявлений для
                    эффективной работы?
                  </div>
                  <div class="slide-item__radios">
                    <div class="slide-item__checkboxes-row">
                      <label for="max-interest-1">
                        <input type="radio" id="max-interest-1" name="max-interest">
                        <span></span>
                        1
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="max-interest-5">
                        <input type="radio" id="max-interest-5" name="max-interest">
                        <span></span>
                        До 5
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="max-interest-10">
                        <input type="radio" id="max-interest-10" name="max-interest">
                        <span></span>
                        До 10
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="max-interest-nothing">
                        <input type="radio" id="max-interest-nothing" name="max-interest">
                        <span></span>
                        Не имеет значения
                      </label>
                    </div>
                  </div>
                  <div class="slide-item__error-field">Это обязательный вопрос.</div>
                </div>
                <div class="slide-item__row" data-type="min-distance">
                  <div class="slide-item__title k1-required">
                    Вы открываете кафе и хотите настроить рекламу на тех, кто живет недалеко. Какое минимальное расстояние в
                    настройках геолокации вы можете выбрать при создании таргетированной рекламы с целью охвата?
                  </div>
                  <div class="slide-item__radios">
                    <div class="slide-item__checkboxes-row">
                      <label for="min-distance-1">
                        <input type="radio" id="min-distance-1" name="min-distance">
                        <span></span>
                        1 км
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="min-distance-5">
                        <input type="radio" id="min-distance-5" name="min-distance">
                        <span></span>
                        5 км
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="min-distance-10">
                        <input type="radio" id="min-distance-10" name="min-distance">
                        <span></span>
                        10 км
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="min-distance-17">
                        <input type="radio" id="min-distance-17" name="min-distance">
                        <span></span>
                        17 км
                      </label>
                    </div>
                  </div>
                  <div class="slide-item__error-field">Это обязательный вопрос.</div>
                </div>
                <div class="slide-item__row" data-type="training">
                  <div class="slide-item__title k1-required">
                    Вы организуете бизнес-тренинг. Через две недели у вас первое мероприятие, но участников нет — надо срочно
                    набирать. Делать отдельный сайт времени нет. Ваши действия?
                  </div>
                  <div class="slide-item__radios">
                    <div class="slide-item__checkboxes-row">
                      <label for="training-picture">
                        <input type="radio" id="training-picture" name="training">
                        <span></span>
                        Сделаю холст с рассказом о тренинге и сразу в нём продавать билеты
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="training-move">
                        <input type="radio" id="training-move" name="training">
                        <span></span>
                        Перенесу тренинг и сделать полноценный сайт
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="training-lid">
                        <input type="radio" id="training-lid" name="training">
                        <span></span>
                        Запущу сбор регистраций на мероприятие через лид-форму
                      </label>
                    </div>
                  </div>
                  <div class="slide-item__error-field">Это обязательный вопрос.</div>
                </div>
                <div class="slide-item__row" data-type="facebook">
                  <div class="slide-item__title k1-required">
                    Насколько можно повышать бюджет за раз, чтобы не сбивать оптимизацию и обучение Фейсбука?
                  </div>
                  <div class="slide-item__radios">
                    <div class="slide-item__checkboxes-row">
                      <label for="facebook-nothing">
                        <input type="radio" id="facebook-nothing" name="facebook">
                        <span></span>
                        Не имеет значения: можно увеличивать хоть в десять раз, это не влияет на оптимизацию
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="facebook-2">
                        <input type="radio" id="facebook-2" name="facebook">
                        <span></span>
                        Максимум в два раза
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="facebook-5%">
                        <input type="radio" id="facebook-5%" name="facebook">
                        <span></span>
                        Не более 5% за раз
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="facebook-20%">
                        <input type="radio" id="facebook-20%" name="facebook">
                        <span></span>
                        До 20%
                      </label>
                    </div>
                  </div>
                  <div class="slide-item__error-field">Это обязательный вопрос.</div>
                </div>
<!--                string-->
<!--                string-->
<!--                string-->
                <div class="slide-item__row" data-type="success-projects">
                  <div class="slide-item__title k1-required">
                    У вас было более 10 успешных проектов?
                  </div>
                  <div class="slide-item__radios">
                    <div class="slide-item__checkboxes-row">
                      <label for="success-projects-yes">
                        <input type="radio" id="success-projects-yes" name="success-projects">
                        <span></span>
                        Да
                      </label>
                    </div>
                    <div class="slide-item__checkboxes-row">
                      <label for="success-projects-no">
                        <input type="radio" id="success-projects-no" name="success-projects">
                        <span></span>
                        Нет
                      </label>
                    </div>
                  </div>
                  <div class="slide-item__error-field">Это обязательный вопрос.</div>
                </div>
<!--                <div class="slide-item__row" data-type="telegram-nickname">-->
<!--                  <div class="slide-item__title k1-required">-->
<!--                    Ваш ник в Telegram (можно найти в профиле, начинается с символа @)-->
<!--                  </div>-->
<!--                  <div class="slide-item__input-text">-->
<!--                    <label for="user-telegram-nickname">-->
<!--                      <input type="text" id="user-telegram-nickname" name="telegram-nickname">-->
<!--                    </label>-->
<!--                  </div>-->
<!--                  <div class="slide-item__error-field">-->
<!--                    Это обязательный вопрос.-->
<!--                  </div>-->
<!--                </div>-->
<!--                <div class="slide-item__row">-->
<!--                  <div class="slide-item__next">-->
<!--                    Далее-->
<!--                  </div>-->
<!--                  <div class="slide-item__clear-form">-->
<!--                    Очистить-->
<!--                  </div>-->
<!--                </div>-->
              </div>
              <div class="slides__item slides__item--skills slide-item">
<!--                <div class="slide-item__row" data-type="email">-->
<!--                  <div class="slide-item__title k1-required">-->
<!--                    Электронная почта-->
<!--                  </div>-->
<!--                  <div class="slide-item__input-text">-->
<!--                    <label for="user-email">-->
<!--                      <input type="email" id="user-email" name="email">-->
<!--                    </label>-->
<!--                  </div>-->
<!--                  <div class="slide-item__error-field">-->
<!--                    Это обязательный вопрос.-->
<!--                  </div>-->
<!--                </div>-->
                <div class="slides-table">
                  <div class="slides-table__head">
                    <div class="slides-table__placeholder"></div>
                    <div class="slides-table__column" data-skill="low">
                      Не знаю от слова "совсем"
                    </div>
                    <div class="slides-table__column" data-skill="lower">
                      Минимальные знания (надо гуглить)
                    </div>
                    <div class="slides-table__column" data-skill="higher">
                      Уверенные знания (были задачи)
                    </div>
                    <div class="slides-table__column" data-skill="high">
                      Идеально (могу преподавать сам)
                    </div>
                  </div>
                  <div class="slides-table__row" data-type="data-studio">
                    <div class="slides-table__name">
                      Data Studio от Google или аналог скв. аналитики
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="low"  name="data-studio">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="lower"  name="data-studio">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="higher"  name="data-studio">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="high"  name="data-studio">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="slides-table__row" data-type="google-analytics">
                    <div class="slides-table__name">
                      Google Analytics
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="low"  name="google-analytics">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="lower" name="google-analytics">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="higher" name="google-analytics">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="high"  name="google-analytics">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="slides-table__row" data-type="yandex-metrica">
                    <div class="slides-table__name">
                      Yandex Metrica
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="low"  name="yandex-metrica">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="lower"  name="yandex-metrica">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="higher"  name="yandex-metrica">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="high"  name="yandex-metrica">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="slides-table__row" data-type="mailing">
                    <div class="slides-table__name">
                      Рассылки в мессенджерах
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="low" name="mailing">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="lower" name="mailing">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="higher"  name="mailing">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="high"  name="mailing">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="slides-table__row" data-type="pixels">
                    <div class="slides-table__name">
                      Пиксели Facebook и Vk
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="low" name="pixels">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="lower" name="pixels">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="higher" name="pixels">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="high" name="pixels">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="slides-table__row" data-type="bothelp">
                    <div class="slides-table__name">
                      Bothelp или аналог
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="low" name="bothelp">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="lower" name="bothelp">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="higher" name="bothelp">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="high" name="bothelp">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="slides-table__row" data-type="crm">
                    <div class="slides-table__name">
                      CRM (любой продукт)
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="low" name="crm">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="lower" name="crm">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="higher" name="crm">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="high" name="crm">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="slides-table__row" data-type="photoshop">
                    <div class="slides-table__name">
                      Photoshop, Canva или аналоги
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="low" name="photoshop">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="lower" name="photoshop">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="higher" name="photoshop">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="high" name="photoshop">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="slides-table__row" data-type="google-sheets">
                    <div class="slides-table__name">
                      Google таблицы
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="low" name="google-sheets">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="lower" name="google-sheets">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="higher" name="google-sheets">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="high" name="google-sheets">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="slides-table__row" data-type="targethunter">
                    <div class="slides-table__name">
                      Targethunter.ru
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="low" name="targethunter">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="lower" name="targethunter">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="higher" name="targethunter">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="high" name="targethunter">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="slides-table__row" data-type="cerebro">
                    <div class="slides-table__name">
                      Церебро.рф
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="low" name="cerebro">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="lower" name="cerebro">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="higher" name="cerebro">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="high" name="cerebro">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="slides-table__row" data-type="pepper">
                    <div class="slides-table__name">
                      Pepper.ninja
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="low" name="pepper">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="lower" name="pepper">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="higher" name="pepper">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="high" name="pepper">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="slides-table__row" data-type="undetect">
                    <div class="slides-table__name">
                      Антидетект браузер (любой)
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="low" name="undetect">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="lower" name="undetect">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="higher" name="undetect">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="high" name="undetect">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="slides-table__row" data-type="supa">
                    <div class="slides-table__name">
                      Supa.ru
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="low" name="supa">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="lower" name="supa">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="higher" name="supa">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="high" name="supa">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="slides-table__row" data-type="publer">
                    <div class="slides-table__name">
                      Publer.pro или аналог
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="low" name="publer">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="lower" name="publer">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="higher" name="publer">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="high" name="publer">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="slides-table__row" data-type="albato">
                    <div class="slides-table__name">
                      Albato или аналог
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="low" name="albato">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="lower" name="albato">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="higher" name="albato">
                        <span></span>
                      </label>
                    </div>
                    <div class="slides-table__column">
                      <label >
                        <input type="radio" value="high" name="albato">
                        <span></span>
                      </label>
                    </div>
                  </div>
                  <div class="slides-table__row">
                    <div class="form-send-final">
                      отправить
                    </div>
                  </div>
                </div>
              </div>
<!--            </div>-->
          </form>
        </div>
      </div>
    </main>
  </div>

  <footer class="footer"></footer>
<!--  <div class="k1-modal">-->
<!--    <div class="k1-modal__body">-->
<!--       Спасибо-->
<!--    </div>-->
<!--  </div>-->
  <script src="js/script.js"></script>
</div>

</body>
</html>
