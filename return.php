<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $domainTitle ?> — Инновации на пальцах
    </title>
    <link rel="icon" type="image/svg+xml"
        href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' rx='8' fill='%233B82F6'/%3E%3Cpath d='M16 8L23 12V20L16 24L9 20V12L16 8Z' fill='none' stroke='white' stroke-width='2.5' stroke-linejoin='round'/%3E%3Ccircle cx='16' cy='16' r='2' fill='white'/%3E%3C/svg%3E">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Outfit:wght@600;700&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#home" class="logo">
                <span class="logo__icon"><i data-lucide="layers"></i></span>
                <span class="logo__text">
                    <?= $domainTitle ?>
                </span>
            </a>

            <nav class="nav" id="nav-menu">
                <ul class="nav__list">
                    <li><a href="./#home" class="nav__link">Главная</a></li>
                    <li><a href="./#courses" class="nav__link">Программы</a></li>
                    <li><a href="./#tech" class="nav__link">Технологии</a></li>
                    <li><a href="./#about" class="nav__link">О нас</a></li>
                    <li><a href="./#faq" class="nav__link">FAQ</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--primary header__btn">
                <span>Связаться</span>
                <i data-lucide="arrow-up-right"></i>
            </a>

            <button class="burger" id="burger-btn" aria-label="Menu">
                <span></span>
            </button>
        </div>
    </header>
<main>
    <section class="pages">
        <div class="container">
            <h1>Политика возврата средств</h1>
            
            <h2>Условиях для оформления возврата</h2>
            <p>
                Вы можете претендовать на полный или частичный возврат средств за обучение на платформе 
                <strong><?= $domainTitle ?></strong> в следующих ситуациях:
            </p>
            <ul>
                <li>
                    <strong>Несоответствие образовательной программы описанию:</strong> Если содержание
                    предоставленных учебных модулей или методических материалов существенно отличается от программы,
                    заявленной на сайте <strong><?= $fullDomain ?></strong> на момент покупки.
                </li>
                <li>
                    <strong>Технические неисправности с нашей стороны:</strong> При
                    возникновении критических технических проблем на платформе, которые делают доступ 
                    к образовательному контенту невозможным и не были устранены нашей командой в течение 48 часов.
                </li>
                <li>
                    <strong>Отказ в течение «периода охлаждения»:</strong> Согласно законодательству ЕС, вы
                    имеете право отказаться от услуги в течение 14 (четырнадцати) календарных
                    дней с момента оплаты, при условии, что вы еще не приступили к изучению материалов (см. раздел «Исключения»).
                </li>
            </ul>

            <h2>Процедура запроса на возврат</h2>
            <p>
                Чтобы инициировать процедуру возврата в <strong><?= $domainTitle ?></strong>, пожалуйста, выполните
                следующие шаги:
            </p>
            <ol class="custom-list">
                <li>
                    Отправьте официальный запрос на наш email:
                    <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>.
                </li>
                <li>
                    В теме письма укажите: «Запрос на возврат средств — [Ваше Имя]».
                </li>
                <li>
                    В тексте письма укажите данные, использованные при регистрации, дату платежа и точное название учебного курса.
                </li>
                <li>
                    Подробно опишите причину запроса. Это поможет нам улучшить качество нашей образовательной платформы.
                </li>
                <li>
                    Ваша заявка будет рассмотрена службой поддержки в течение 3 рабочих дней.
                </li>
            </ol>

            <h2>Сроки и способ возврата</h2>
            <p>
                После одобрения возврата денежные средства будут перечислены в течение 7–14 рабочих дней. 
                Возврат осуществляется строго на те же реквизиты, с которых производилась оплата. 
                Обратите внимание, что сроки зачисления зависят от вашего банка во **Франции** или другой стране ЕС.
            </p>

            <h2>Исключения и ограничения</h2>
            <p>Возврат средств не осуществляется в следующих случаях:</p>
            <ul>
                <li>
                    Запрос подан позднее 14 календарных дней после совершения транзакции.
                </li>
                <li>
                    Пользователь изучил, просмотрел или скачал более 50% материалов программы (или завершил более 2-х учебных модулей).
                </li>
                <li>
                    Причиной невозможности прохождения обучения являются проблемы с оборудованием или интернет-соединением на стороне пользователя.
                </li>
                <li>
                    Аккаунт пользователя был заблокирован за нарушение правил сообщества или условий использования платформы <strong><?= $domainTitle ?></strong>.
                </li>
            </ul>

            <h2>Изменения в политике</h2>
            <p>
                <strong><?= $domainTitle ?></strong> оставляет за собой право обновлять настоящую Политику возврата. 
                Актуальная версия документа всегда доступна по адресу <strong><?= $fullDomain ?>/return.php</strong>.
            </p>

            <h2>Свяжитесь с нами</h2>
            <p>
                По всем вопросам, связанным с возвратом средств или условиями доступа к курсам, 
                пожалуйста, обращайтесь в нашу службу поддержки:
                <br><br>
                Email: <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a><br>
                Телефон: <a href="tel:+33189480625">+33 1 89 48 06 25</a>
            </p>
        </div>
    </section>
</main>


    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#home" class="logo logo--footer">
                    <span class="logo__text">
                        <?= $domainTitle ?>
                    </span>
                </a>
                <p class="footer__description">
                    Платформа года для тех, кто ценит передовую цифровую инфраструктуру и понятное обучение.
                </p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__links">
                    <li><a href="./#home">Главная</a></li>
                    <li><a href="./#courses">Программы</a></li>
                    <li><a href="./#tech">Технологии</a></li>
                    <li><a href="./#about">О нас</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Документы</h4>
                <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contact-info">
                    <li>
                        <i data-lucide="phone"></i>
                        <a href="tel:+33189480625">+33 1 89 48 06 25</a>
                    </li>
                    <li>
                        <i data-lucide="mail"></i>
                        <a href="mailto:hello@<?= $fullDomain ?>">hello@
                            <?= $fullDomain ?>
                        </a>
                    </li>
                    <li>
                        <i data-lucide="map-pin"></i>
                        <span>15 Rue de la Pompe, 75116 Paris, France</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container footer__bottom">
            <p>&copy; 2026
                <?= $domainTitle ?>. Платформа уже доступна в Европе.
            </p>
        </div>
    </footer>
<div class="mobile-menu" id="mobile-menu-overlay">
    <div class="container">
        <nav class="mobile-nav">
            <ul class="mobile-nav__list">
                <li><a href="./#home" class="mobile-nav__link">Главная</a></li>
                <li><a href="./#courses" class="mobile-nav__link">Программы</a></li>
                <li><a href="./#tech" class="mobile-nav__link">Технологии</a></li>
                <li><a href="./#about" class="mobile-nav__link">О нас</a></li>
                <li><a href="./#faq" class="mobile-nav__link">FAQ</a></li>
                <li><a href="./#contact" class="mobile-nav__link btn btn--primary">Связаться</a></li>
            </ul>
        </nav>
    </div>
</div>

<div class="cookie-popup" id="cookie-popup">
    <div class="cookie-popup__container">
        <div class="cookie-popup__text">
            Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie
                политике</a>.
        </div>
        <button class="btn btn--primary btn--sm" id="cookie-accept">Принять</button>
    </div>
</div>
    <script src="script.js"></script>
</body>

</html>