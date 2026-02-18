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
            <h1>Политика в отношении обработки персональных данных</h1>

            <h2>1. Общие положения</h2>
            <p>
                Настоящая политика обработки персональных данных (далее —
                «Политика») определяет порядок и условия обработки персональных
                данных, предпринимаемые образовательной платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), и
                устанавливает меры по обеспечению безопасности этих данных.
            </p>
            <p>
                1.1. Важнейшей целью и условием осуществления своей деятельности
                Оператор считает соблюдение прав и свобод человека и гражданина при
                обработке его персональных данных, в том числе защиты прав на
                неприкосновенность частной жизни, личную и семейную тайну в соответствии с нормами GDPR.
            </p>
            <p>
                1.2. Настоящая Политика применяется ко всей информации, которую
                Оператор может получить о посетителях (далее — «Пользователи»)
                веб-сайта <strong><?= $fullDomain ?></strong>.
            </p>

            <h2>2. Основные понятия, используемые в Политике</h2>
            <ul>
                <li>
                    <strong>Веб-сайт</strong> — совокупность графических и
                    информационных материалов, а также программ для ЭВМ,
                    обеспечивающих их доступность в сети интернет по адресу
                    <strong><?= $fullDomain ?></strong>.
                </li>
                <li><strong>Пользователь</strong> — любой посетитель веб-сайта.</li>
                <li>
                    <strong>Персональные данные</strong> — любая информация,
                    относящаяся прямо или косвенно к определенному Пользователю веб-сайта.
                </li>
                <li>
                    <strong>Обработка персональных данных</strong> — любое действие
                    (операция), совершаемое с использованием средств автоматизации или без них с персональными данными.
                </li>
                <li>
                    <strong>Безопасность персональных данных</strong> — защищенность
                    данных от неправомерного доступа, уничтожения, изменения или блокирования.
                </li>
            </ul>

            <h2>3. Данные, которые мы обрабатываем</h2>
            <p>Оператор может обрабатывать следующие категории данных:</p>
            <ul>
                <li>
                    <strong>Персональные данные, предоставляемые Пользователем:</strong>
                    <ul>
                        <li>Имя и фамилия;</li>
                        <li>Адрес электронной почты (Email);</li>
                        <li>Номера телефонов (валидация по стандартам Франции).</li>
                    </ul>
                </li>
                <li>
                    <strong>Данные, собираемые автоматически:</strong>
                    <ul>
                        <li>
                            Сбор обезличенных данных о посетителях (в т.ч. файлов «cookie») 
                            с помощью сервисов интернет-статистики (Google Analytics и др.). 
                            Эти данные включают IP-адрес, тип браузера и данные о поведении на платформе.
                        </li>
                    </ul>
                </li>
            </ul>
            <p>
                Вышеперечисленные данные в рамках Политики <strong><?= $domainTitle ?></strong> объединены общим
                понятием Персональные данные.
            </p>

            <h2>4. Цели обработки персональных данных</h2>
            <ul>
                <li>
                    Идентификация Пользователя для предоставления доступа к личному кабинету и учебным материалам образовательной платформы.
                </li>
                <li>
                    Установление обратной связи, включая направление уведомлений о новых курсах, запросов, касающихся использования сайта, и обработку заявок.
                </li>
                <li>
                    Исполнение обязательств в рамках предоставления образовательных услуг на территории ЕС.
                </li>
                <li>
                    Информирование Пользователя посредством электронных писем. 
                    Вы всегда можете отказаться от рассылок, направив письмо на
                    <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>
                    с пометкой «Отказ от уведомлений».
                </li>
            </ul>

            <h2>5. Правовые основания обработки данных</h2>
            <p>
                Оператор обрабатывает персональные данные Пользователя только:
            </p>
            <ul>
                <li>
                    При наличии добровольного согласия, выраженного 
                    путем заполнения форм на сайте <strong><?= $domainTitle ?></strong>.
                </li>
                <li>
                    При условии, что сохранение файлов «cookie» разрешено в настройках вашего браузера.
                </li>
            </ul>

            <h2>6. Порядок сбора и безопасности данных</h2>
            <ul>
                <li>
                    Оператор принимает необходимые организационные и технические меры для
                    защиты данных от неправомерного доступа в соответствии с Регламентом (ЕС) 2016/679 (GDPR).
                </li>
                <li>
                    Персональные данные никогда не передаются третьим лицам, 
                    за исключением случаев, когда этого требует законодательство Франции или ЕС.
                </li>
                <li>
                    Пользователь может в любой момент отозвать согласие, направив 
                    Оператору уведомление на email 
                    <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>.
                </li>
            </ul>

            <h2>7. Заключительные положения</h2>
            <ul>
                <li>
                    Пользователь может получить разъяснения по любым вопросам, обратившись к 
                    Оператору по электронной почте 
                    <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>.
                </li>
                <li>
                    Актуальная версия Политики <strong><?= $domainTitle ?></strong> всегда доступна в свободном 
                    доступе на сайте <strong><?= $fullDomain ?></strong>.
                </li>
            </ul>
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