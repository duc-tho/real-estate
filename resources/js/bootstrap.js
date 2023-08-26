// // This file is used to include JS dependencies into the application

import 'bootstrap';
import jQuery from 'jquery';
import select2 from 'select2/dist/js/select2';
import axios from 'axios';
import { Datepicker } from 'vanillajs-datepicker';
import vi from '../../node_modules/vanillajs-datepicker/js/i18n/locales/vi';
import { Fancybox, Carousel } from "@fancyapps/ui";
import { Thumbs } from "@fancyapps/ui/dist/carousel/carousel.thumbs.esm.js";

// init jquery
window.$ = jQuery;

// init axios
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// init date picker
window.Datepicker = Datepicker;
Object.assign(Datepicker.locales, vi);

$('.date-picker').each((index, element) => {
    const datePickerDefaultOptions = {
        autohide: true,
        format: 'dd/mm/yyyy',
        language: 'vi',
        nextArrow: '>',
        prevArrow: '<',
        todayButton: true,
        buttonClass: 'btn'
    };

    new Datepicker(element, datePickerDefaultOptions);
});


// init fancybox
Fancybox.bind("[data-fancybox]");

// init carousel
const options = {
    Thumbs: {
        type: "modern",
    },
};

$('.f-carousel').each((index, element) => {
    new Carousel(element, options, { Thumbs });
});

// init select2
select2();

$('.form-select').select2({ theme: 'bootstrap-5' });

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// import Pusher from 'pusher-js';
// window.Pusher = Pusher;

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: import.meta.env.VITE_PUSHER_APP_KEY,
//     wsHost: import.meta.env.VITE_PUSHER_HOST ?? `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
//     wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
//     wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
//     forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
//     enabledTransports: ['ws', 'wss'],
// });
