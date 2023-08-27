const NAVBAR_CLASS = 're-navbar';
const NAVBAR_CLASS_SM = 're-navbar-sm';
const LOGO_CLASS = 're-navbar-logo';
const LOGO_SM_CLASS = 're-navbar-logo-sm';

const navbar = $('.re-navbar');
const logo = $('.re-navbar-logo');
let isPageOnTop = true;

const initNavbarClass = (event) => {
    const shouldChangeClass = isPageOnTop !== (window.scrollY === 0);

    if (!shouldChangeClass) {
        return;
    }

    navbar.toggleClass(NAVBAR_CLASS_SM);
    logo.toggleClass(LOGO_SM_CLASS);

    isPageOnTop = !isPageOnTop;
}

initNavbarClass();
$(document).on('scroll', initNavbarClass);
