import './bootstrap';

const THEME_KEY = 'am_theme';

function getPreferredTheme() {
    const saved = window.localStorage.getItem(THEME_KEY);
    if (saved === 'light' || saved === 'dark') return saved;
    return window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
}

function setTheme(theme) {
    document.documentElement.dataset.theme = theme;
    window.localStorage.setItem(THEME_KEY, theme);
}

setTheme(getPreferredTheme());

window.addEventListener('DOMContentLoaded', () => {
    const siteHeader = document.querySelector('[data-site-header]');
    const hero = document.querySelector('.hero-bg');

    const setHeaderState = () => {
        if (!siteHeader) return;
        if (!hero) {
            const atTop = window.scrollY <= 2;
            siteHeader.classList.toggle('is-top', atTop);
            siteHeader.classList.toggle('is-scrolled', !atTop);
            return;
        }

        const headerH = siteHeader.getBoundingClientRect().height || 0;
        const heroRect = hero.getBoundingClientRect();
        const heroStillBehindHeader = heroRect.bottom > headerH + 8;

        siteHeader.classList.toggle('is-top', heroStillBehindHeader);
        siteHeader.classList.toggle('is-scrolled', !heroStillBehindHeader);
    };

    setHeaderState();
    window.addEventListener('scroll', setHeaderState, { passive: true });
    window.addEventListener('resize', setHeaderState);

    const themeToggle = document.querySelector('[data-theme-toggle]');
    if (themeToggle) {
        themeToggle.addEventListener('click', () => {
            const current = document.documentElement.dataset.theme === 'dark' ? 'dark' : 'light';
            setTheme(current === 'dark' ? 'light' : 'dark');
        });
    }

    const mobileToggle = document.querySelector('[data-mobile-nav-toggle]');
    const mobileNav = document.querySelector('[data-mobile-nav]');

    if (mobileToggle && mobileNav) {
        mobileToggle.addEventListener('click', () => {
            mobileNav.toggleAttribute('hidden');
        });

        mobileNav.querySelectorAll('a[href^="#"]').forEach((a) => {
            a.addEventListener('click', () => {
                mobileNav.setAttribute('hidden', 'hidden');
            });
        });
    }
});
