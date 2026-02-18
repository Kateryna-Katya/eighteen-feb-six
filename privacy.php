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
            <h1>Политика конфиденциальности</h1>

            <p>
                Политика конфиденциальности распространяется на персональные данные,
                предоставляемые пользователями <strong><?= $domainTitle ?></strong>, как для получения 
                образовательных услуг и доступа к материалам платформы, так и для других взаимодействий в электронном
                формате, а также при участии клиентов в обучающих программах и акциях, оказании
                технической поддержки и информационного сопровождения.
            </p>

            <p>
                <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения и дополнения
                в действующие положения Политики конфиденциальности. Эти изменения будут иметь приоритет над текущими
                положениями. Обратите внимание, что наши образовательные ресурсы могут содержать ссылки на ресурсы третьих лиц, которые имеют свои
                собственные положения. В таких случаях <strong><?= $domainTitle ?></strong> не несет ответственности за содержание и соблюдение
                конфиденциальности любой сторонней компании. Предоставляя свои данные, вы даете полное согласие
                на их обработку способами, предусмотренными настоящей Политикой.
            </p>

            <h2>Порядок сбора, хранения и уничтожения персональных данных</h2>
            <p>
                <strong><?= $domainTitle ?></strong> собирает персональные данные только с согласия
                пользователя и исключительно для предоставления качественных услуг: доступа к личному кабинету,
                участия в интерактивных уроках, получения учебных материалов и внедрения инноваций в ваш процесс обучения. Для
                предотвращения утечки данных мы используем полный комплекс мер информационной безопасности, включая современные протоколы шифрования и требования GDPR.
            </p>

            <p>
                Максимальный срок хранения персональных данных составляет 75
                лет с даты получения информации. В остальных случаях компания хранит данные клиента до
                завершения своей деятельности или до момента официального отзыва согласия пользователем.
            </p>

            <p>
                Уничтожение, обезличивание или блокирование данных осуществляется для исключения возможности
                их дальнейшей обработки, если цель сбора (обучение и поддержка) была достигнута или по запросу клиента.
            </p>

            <p>
                <strong><?= $domainTitle ?></strong> собирает данные в следующих категориях:
            </p>

            <h2>Техническая информация:</h2>
            <ul>
                <li>время доступа и IP-адрес;</li>
                <li>источники обращения на интернет-ресурс <strong><?= $fullDomain ?></strong>;</li>
                <li>интернет-страницы и разделы курсов, посещаемые пользователем;</li>
                <li>просмотры информационных и учебных блоков;</li>
                <li>иная техническая информация, предоставляемая браузером;</li>
                <li>номер телефона (в случае звонка по контактам, указанным на сайте).</li>
            </ul>

            <p>
                При регистрации или заполнении форм обратной связи мы собираем информацию, 
                необходимую для аутентификации и персонализации вашего обучения:
            </p>
            <ul>
                <li>имя пользователя;</li>
                <li>e-mail и номер телефона для оперативной связи и уведомлений о прогрессе;</li>
            </ul>

            <h2>Информация о действиях пользователя:</h2>
            <ul>
                <li>информация о соглашениях на предоставление образовательных услуг между клиентом и <strong><?= $domainTitle ?></strong>;</li>
                <li>данные о запросах, отправленных через формы на сайте;</li>
                <li>сведения о пройденных модулях, тестах и полученных результатах;</li>
                <li>произведенные платежи и иная финансовая информация, предусмотренная действующим законодательством Франции и ЕС.</li>
            </ul>

            <h2>Цели обработки персональных данных клиентов:</h2>
            <ul>
                <li>предоставление доступа к образовательному контенту и цифровой инфраструктуре;</li>
                <li>учет пожеланий пользователей при разработке новых курсов и AI-инструментов;</li>
                <li>информирование об акциях, скидках на обучение и новых статьях через e-mail;</li>
                <li>обеспечение качественной экспертной поддержки на всех этапах обучения.</li>
            </ul>

            <h2>
                <strong><?= $domainTitle ?></strong> не предоставляет данные клиентов третьим лицам, за исключением:
            </h2>
            <ul>
                <li>получения прямого согласия пользователя на такую передачу;</li>
                <li>по требованию компетентных органов Франции в соответствии с европейским законодательством;</li>
                <li>случаев стратегического слияния или поглощения компании.</li>
            </ul>

            <h2>Использование файлов cookie и точечных маркеров</h2>
            <p>
                Файлы cookie позволяют нам анализировать трафик и сохранять ваши предпочтения (например, настройки региона Франция), 
                чтобы сделать использование платформы <strong><?= $fullDomain ?></strong> максимально эффективным для обучения. Точечные маркеры 
                используются для статистического анализа посещений. Вы можете в любое время отключить Cookies в настройках своего браузера.
            </p>

            <h2>Права пользователя в отношении персональных данных</h2>
            <p>
                Если вы хотите отредактировать свои данные или полностью прекратить их обработку в соответствии с нормами GDPR, 
                пожалуйста, свяжитесь с командой поддержки <strong><?= $domainTitle ?></strong> по адресу: 
                <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>.
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