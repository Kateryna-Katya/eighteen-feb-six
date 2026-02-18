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
            <h1>Условия использования</h1>

            <p>
                Добро пожаловать на платформу <strong><?= $domainTitle ?></strong>! Настоящие Условия использования
                (далее — «Условия» или «Соглашение») представляют собой юридически
                обязывающий договор между вами (далее — «Пользователь») и <strong><?= $domainTitle ?></strong>
                (далее — «Компания», «мы», «нас»). Пожалуйста, внимательно
                ознакомьтесь с ними. Используя наш сайт и любые связанные с ним
                образовательные услуги, вы подтверждаете свое полное и безоговорочное согласие с
                данными Условиями. Если вы не согласны, вы должны немедленно
                прекратить использование сайта.
            </p>

            <h2>1. Предмет Соглашения</h2>
            <p>
                Компания предоставляет Пользователю доступ к использованию сайта
                <strong><?= $fullDomain ?></strong> и его функционала, включая, но не ограничиваясь: доступ к
                инновационным учебным материалам, статьям, AI-инструментам, видеоурокам и другим инструментам 
                профессионального развития (далее — «Услуги»). Настоящее Соглашение регулирует все аспекты
                взаимодействия Пользователя с платформой.
            </p>

            <h2>2. Обязанности и права Пользователя</h2>
            <p>
                Вы обязуетесь использовать сайт исключительно в законных и личных
                некоммерческих целях. При использовании платформы <strong><?= $domainTitle ?></strong>
                <strong>запрещается</strong>:
            </p>
            <ul>
                <li>
                    Публиковать, передавать или распространять любую информацию,
                    которая является незаконной, вредоносной, нарушает авторские права или 
                    противоречит законодательству Франции и ЕС.
                </li>
                <li>
                    Предпринимать любые действия, которые могут нарушить нормальную
                    работу сайта, его безопасность или привести к перегрузке
                    цифровой инфраструктуры <strong><?= $domainTitle ?></strong>.
                </li>
                <li>
                    Использовать автоматизированные скрипты (ботов) для сбора
                    информации или иного взаимодействия с сайтом без нашего
                    предварительного письменного разрешения.
                </li>
                <li>
                    Выдавать себя за другое лицо или предоставлять недостоверную
                    информацию о себе при регистрации на обучение или консультацию.
                </li>
            </ul>

            <h2>3. Интеллектуальная собственность</h2>
            <p>
                Весь контент, размещенный на сайте <strong><?= $fullDomain ?></strong>, включая тексты программ, графику,
                учебные изображения, видеокурсы, логотипы и программный код (далее — «Контент»), является объектом интеллектуальной
                собственности Компании или ее партнеров. Вам предоставляется ограниченная
                лицензия на доступ и использование Контента в личных целях для обучения и развития. 
                Любое копирование, воспроизведение или коммерческое распространение Контента без предварительного 
                письменного разрешения правообладателя строго запрещено.
            </p>

            <h2>4. Ограничение ответственности и отказ от гарантий</h2>
            <p>
                Услуги и все материалы на сайте предоставляются по принципу «как
                есть» (as is). Мы не даем никаких гарантий, что сайт будет работать бесперебойно, 
                без ошибок или что его контент является абсолютно точным в контексте динамически 
                меняющегося технологического рынка во **Франции** и странах ЕС.
            </p>
            <p>
                Компания не несет ответственности за любые прямые или косвенные
                убытки, которые могут возникнуть у Пользователя в результате использования 
                или невозможности использования платформы <strong><?= $domainTitle ?></strong>. 
                Это также относится к результатам применения полученных знаний в вашей профессиональной деятельности.
            </p>

            <h2>5. Изменения в Условиях использования</h2>
            <p>
                Мы оставляем за собой право в любое время изменять или дополнять настоящие Условия. 
                Все изменения вступают в силу с момента их публикации на этой странице. 
                Ваше дальнейшее использование сайта <strong><?= $fullDomain ?></strong> после внесения 
                изменений означает ваше автоматическое согласие с новой редакцией Условий.
            </p>

            <h2>6. Разрешение споров</h2>
            <p>
                Все споры и разногласия стороны будут стремиться разрешить путем конструктивных переговоров.
                В случае если согласие не будет достигнуто, спор подлежит рассмотрению в соответствии 
                с действующим законодательством по месту регистрации Компании (или ее представительства) во **Франции**.
            </p>

            <h2>7. Контактная информация</h2>
            <p>
                Если у вас возникли вопросы, связанные с настоящими Условиями,
                пожалуйста, свяжитесь с нашей службой поддержки:
                <br><br>
                Email: <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a><br>
                Телефон: <a href="tel:+33189480625">+33 1 89 48 06 25</a><br>
                Адрес: 15 Rue de la Pompe, 75116 Paris, France
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