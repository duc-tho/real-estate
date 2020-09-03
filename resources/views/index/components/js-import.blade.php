<script>
     window.trans = {
          "Price": "Price",
          "Number of rooms": "Number of rooms",
          "Number of rest rooms": "Number of rest rooms",
          "Square": "Square",
          "No property found": "No property found",
          "million": "million",
          "billion": "billion",
          "m2": "m2",
     }
     window.themeUrl = 'https://flex-home.botble.com/themes/flex-home'
</script>

<script>
     'use strict';
     window.botbleCookieConsent = (function () {
          const COOKIE_VALUE = 1;
          const COOKIE_DOMAIN = 'flex-home.botble.com';
          function consentWithCookies() {
               setCookie('botble_cookie_consent', COOKIE_VALUE, 7300);
               hideCookieDialog();
          }
          function cookieExists(name) {
               return document.cookie.split('; ').indexOf(name + '=' + COOKIE_VALUE) !== -1;
          }
          function hideCookieDialog() {
               const dialogs = document.getElementsByClassName('js-cookie-consent');
               for (let i = 0; i < dialogs.length;) {
                    dialogs[i].style.display = 'none';
               }
          }
          function setCookie(name, value, expirationInDays) {
               const date = new Date();
               date.setTime(date.getTime() + (expirationInDays * 24 * 60 * 60 * 1000));
               document.cookie = name + '=' + value
                    + ';expires=' + date.toUTCString()
                    + ';domain=' + COOKIE_DOMAIN
                    + ';path=/';
          }
          if (cookieExists('botble_cookie_consent')) {
               hideCookieDialog();
          }
          const buttons = document.getElementsByClassName('js-cookie-consent-agree');
          for (let i = 0; i < buttons.length;) {
               buttons[i].addEventListener('click', consentWithCookies);
          }
          return {
               consentWithCookies: consentWithCookies,
               hideCookieDialog: hideCookieDialog
          };
     })();
</script>

<script src="{{ asset('dist/js/index/popper.min.js') }}"></script>
<script src="{{ asset('dist/js/index/bootstrap.min.js') }}"></script>
<script src="{{ asset('dist/js/index/owl.carousel.min.js') }}"></script>
<script src="{{ asset('dist/js/index/app.js') }}"></script>
<script src="{{ asset('dist/js/index/components.js') }}"></script>

<script>
     $("#project-city-slides").owlCarousel(
          { margin: 20,
          dots: !1,
          nav: !0,
          navText: [$(".am-prev"), $(".am-next")],
          loop: 0,
          responsive: {
               0: { items: 1 },
               400: { items: 2 },
               800: { items: 3 },
               1e3: { items: 4 },
               1300: { items: 5 }
          }
     })
</script>
