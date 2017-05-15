/*
 *  refresh
 */


/*
 *  mobile nav toggle
 */

const hamburgerEl = document.querySelector('.hamburger-icon');
const mobileHeaderEl = document.querySelector('#mobile-header');
const mobileNavEl = document.querySelector('.mobile-nav');

function toggleMobileNav() {
    hamburgerEl.classList.toggle('collapsed')
    mobileNavEl.classList.toggle('visible');
    toggleMobileHeader();
}

function toggleMobileHeader() {
    mobileHeaderEl.classList.toggle('toggled');
}

/*
 *  window scroll event
 */

const mastheadEl = document.getElementById('masthead');
const pagemarkScrollEl = document.querySelector('.pagemark-scroll');
const pagemarkEl = document.querySelector('.pagemark-default');
const siteTitleEl = document.querySelector('.site-title-default');
const nagivationDefaultEl = document.querySelector('.navigation-default-page');

window.addEventListener("scroll", function (event) {
    const top = this.scrollY,
    left = this.scrollX;

    const pagemarkBreak = (nagivationDefaultEl ? nagivationDefaultEl.getBoundingClientRect() : undefined);

    if (pagemarkEl && pagemarkBreak.bottom >= 0 && pagemarkEl.classList.contains('scrolled')) {
        pagemarkEl.classList.add('top');
        pagemarkEl.classList.remove('scrolled');
        siteTitleEl.classList.add('top');
        siteTitleEl.classList.remove('scrolled');
    } else if (pagemarkEl && pagemarkBreak.bottom <= 0 && pagemarkEl.classList.contains('top')) {
        pagemarkEl.classList.add('scrolled');
        pagemarkEl.classList.remove('top');
        siteTitleEl.classList.add('scrolled');
        siteTitleEl.classList.remove('top');
    }
}, false);

/*
 *  scroll arrow behavior
 */

const arrowEl = document.querySelector('.scroll-arrow');
const headerEl = document.querySelector('#landing-hero');

function arrowOnClick() {
    arrowEl.classList.toggle('toggleClicked');
}

window.addEventListener("scroll", function (event) {
    const top = this.scrollY;
    if (headerEl && top >= headerEl.offsetHeight / 2) {
        arrowEl.classList.add('toggleClicked');
    }
}, false);


/*
 *  project item hex color
 */

const projectItem = document.querySelectorAll('.showcase-image');

for (i = 0; i < projectItem.length; i++) {
    const hexValue = projectItem[i].dataset.hex;
    projectItem[i].style.color = hexValue;
}

/*
 *  load large image
 */

function loadImage() {
    document.querySelector('.about-image')
}