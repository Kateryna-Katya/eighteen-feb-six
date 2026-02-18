document.addEventListener('DOMContentLoaded', () => {
    // 1. Инициализация иконок Lucide
    lucide.createIcons();

    // 2. Мобильное меню
    const burgerBtn = document.getElementById('burger-btn');
    const mobileMenu = document.getElementById('mobile-menu-overlay');
    const mobileLinks = document.querySelectorAll('.mobile-nav__link');

    const toggleMenu = () => {
        burgerBtn.classList.toggle('active');
        mobileMenu.classList.toggle('active');
        document.body.classList.toggle('no-scroll');
    };

    burgerBtn.addEventListener('click', toggleMenu);
    
    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            if(mobileMenu.classList.contains('active')) toggleMenu();
        });
    });

    // 3. Анимация Canvas в Hero
    const initHeroCanvas = () => {
        const canvas = document.getElementById('hero-canvas');
        if (!canvas) return;
        const ctx = canvas.getContext('2d');
        let particles = [];
        let mouse = { x: null, y: null, radius: 150 };

        window.addEventListener('mousemove', (e) => { mouse.x = e.x; mouse.y = e.y; });
        const resize = () => { canvas.width = window.innerWidth; canvas.height = window.innerHeight; init(); };
        window.addEventListener('resize', resize);
        resize();

        function Particle(x, y) {
            this.x = Math.random() * canvas.width;
            this.y = Math.random() * canvas.height;
            this.size = Math.random() * 2 + 1;
            this.baseX = this.x; this.baseY = this.y;
            this.density = (Math.random() * 30) + 1;
            this.draw = function() {
                ctx.fillStyle = 'rgba(59, 130, 246, 0.2)';
                ctx.beginPath(); ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2); ctx.fill();
            }
            this.update = function() {
                let dx = mouse.x - this.x; let dy = mouse.y - this.y;
                let distance = Math.sqrt(dx*dx + dy*dy);
                if (distance < mouse.radius) {
                    let force = (mouse.radius - distance) / mouse.radius;
                    this.x -= (dx/distance) * force * this.density;
                    this.y -= (dy/distance) * force * this.density;
                } else {
                    if (this.x !== this.baseX) this.x -= (this.x - this.baseX) / 10;
                    if (this.y !== this.baseY) this.y -= (this.y - this.baseY) / 10;
                }
            }
        }

        function init() {
            particles = [];
            for (let i = 0; i < (canvas.width * canvas.height) / 10000; i++) particles.push(new Particle());
        }

        function animate() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            particles.forEach(p => { p.draw(); p.update(); });
            requestAnimationFrame(animate);
        }
        init(); animate();
    };
    initHeroCanvas();

    // 4. Reveal Animation (Intersection Observer)
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) entry.target.classList.add('visible');
        });
    }, { threshold: 0.1 });
    document.querySelectorAll('.fade-up, .fade-in, .fade-in-right').forEach(el => observer.observe(el));

    // 5. Параллакс фона в "Программах"
    const progBg = document.querySelector('.programs__bg');
    window.addEventListener('scroll', () => {
        if (!progBg) return;
        let offset = window.pageYOffset;
        progBg.style.transform = `translateY(${offset * 0.15}px)`;
    });

    // 6. FAQ Аккордеон
    document.querySelectorAll('.faq-item__trigger').forEach(trigger => {
        trigger.addEventListener('click', () => {
            const parent = trigger.parentElement;
            const wasActive = parent.classList.contains('faq-item--active');
            document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('faq-item--active'));
            if (!wasActive) parent.classList.add('faq-item--active');
        });
    });

    // 7. Валидация формы и Капча
    const mainForm = document.getElementById('main-form');
    if (mainForm) {
        const phoneInput = document.getElementById('phone-input');
        const captchaLabel = document.getElementById('captcha-label');
        const n1 = Math.floor(Math.random() * 10), n2 = Math.floor(Math.random() * 10);
        captchaLabel.innerText = `Сколько будет ${n1} + ${n2}?`;
        
        phoneInput.addEventListener('input', (e) => e.target.value = e.target.value.replace(/[^\d+]/g, ''));

        mainForm.addEventListener('submit', (e) => {
            e.preventDefault();
            if (parseInt(document.getElementById('captcha-input').value) !== (n1 + n2)) return alert('Ошибка капчи');
            
            const btn = mainForm.querySelector('button');
            btn.innerText = 'Отправка...'; btn.disabled = true;
            setTimeout(() => {
                mainForm.reset(); btn.style.display = 'none';
                document.getElementById('form-success').style.display = 'flex';
                lucide.createIcons();
            }, 1500);
        });
    }

    // 8. Cookie Popup logic
    const cookiePop = document.getElementById('cookie-popup');
    const cookieBtn = document.getElementById('cookie-accept');
    if (!localStorage.getItem('cookies_accepted')) {
        setTimeout(() => cookiePop.classList.add('active'), 2000);
    }
    cookieBtn.addEventListener('click', () => {
        localStorage.setItem('cookies_accepted', 'true');
        cookiePop.classList.remove('active');
    });
});