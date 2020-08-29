<!--FOOTER-->
<footer>
    <br>
    <div class="container-fluid w90">
        <div class="row">
            <div class="col-sm-3">
                                <p>
                    <a href="https://bdsnew.eso.vn">
                        <img src="{{ asset('asset/img/logobds.png') }}" style="max-height: 38px" alt="">
                    </a>
                </p>
                                <p><i class="fas fa-map-marker-alt"></i> &nbsp;North Link Building, 10 Admiralty Street, 757695 Singapore</p>
                <p><i class="fas fa-phone-square"></i> Hotline &nbsp;<a href="tel:18006268">18006268</a></p>
                <p><i class="fas fa-envelope"></i> Email &nbsp;<a href="mailto:info@eso.vn">info@eso.vn</a>
                </p>
            </div>
            <div class="col-sm-9 padtop10">
                <div class="row">
                    <div class="col-sm-4">
    <div class="menufooter">
        <h4>About</h4>
        <ul >
            <li >
            <a href="https://bdsnew.eso.vn/about-us"  target="_self" >
                 <span>About us</span>
            </a>
                    </li>
            <li >
            <a href="https://bdsnew.eso.vn/contact"  target="_self" >
                 <span>Contact us</span>
            </a>
                    </li>
            <li >
            <a href="https://bdsnew.eso.vn/careers"  target="_self" >
                 <span>Careers</span>
            </a>
                    </li>
            <li >
            <a href="https://bdsnew.eso.vn/terms-conditions"  target="_self" >
                 <span>Terms &amp; Conditions</span>
            </a>
                    </li>
    </ul>

    </div>
</div>
<div class="col-sm-4">
    <div class="menufooter">
        <h4>More information</h4>
        <ul >
            <li >
            <a href="https://bdsnew.eso.vn/projects"  target="_self" >
                 <span>All projects</span>
            </a>
                    </li>
            <li >
            <a href="https://bdsnew.eso.vn/properties"  target="_self" >
                 <span>All properties</span>
            </a>
                    </li>
            <li >
            <a href="https://bdsnew.eso.vn/properties?type=sale"  target="_self" >
                 <span>Houses for sale</span>
            </a>
                    </li>
            <li >
            <a href="https://bdsnew.eso.vn/properties?type=rent"  target="_self" >
                 <span>Houses for rent</span>
            </a>
                    </li>
    </ul>

    </div>
</div>
<div class="col-sm-4">
    <div class="menufooter">
        <h4>News</h4>
        <ul >
            <li >
            <a href="https://bdsnew.eso.vn/news"  target="_self" >
                 <span>Latest news</span>
            </a>
                    </li>
            <li >
            <a href="https://bdsnew.eso.vn/building-materials"  target="_self" >
                 <span>Building materials</span>
            </a>
                    </li>
            <li >
            <a href="https://bdsnew.eso.vn/house-architecture"  target="_self" >
                 <span>House architecture</span>
            </a>
                    </li>
            <li >
            <a href="https://bdsnew.eso.vn/house-design"  target="_self" >
                 <span>House design</span>
            </a>
                    </li>
    </ul>

    </div>
</div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="padtop10 mb-2 language">
                            
                                                        </div>
    
            </div>
        </div>
        <div class="copyright">
            <div class="col-sm-12">
                <p class="text-center">
                    © 2020 Công ty TNHH Công Nghệ ESO
                </p>
            </div>
        </div>
    </div>
</footer>
<!--FOOTER-->

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

<!--END FOOTER-->

<div class="action_footer">
    <a href="#" class="cd-top"><i class="fas fa-arrow-up"></i></a>
    <a href="tel:18006268" style="color: white;font-size: 17px;"><i class="fas fa-phone"></i> <span>  &nbsp;18006268</span></a>
</div>
<div id="loading">
    <div class="lds-hourglass">
    </div>
</div>

    <script src="js/app.js"></script>
<script src="js/components.js"></script>



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

                for (let i = 0; i < dialogs.length; ++i) {
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

            for (let i = 0; i < buttons.length; ++i) {
                buttons[i].addEventListener('click', consentWithCookies);
            }

            return {
                consentWithCookies: consentWithCookies,
                hideCookieDialog: hideCookieDialog
            };
        })();
    </script>
</body>