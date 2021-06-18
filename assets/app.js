/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import 'open-iconic/font/css/open-iconic-bootstrap.min.css';
import 'animate.css';
import 'owl.carousel/dist/assets/owl.carousel.min.css';
import 'owl.carousel/dist/assets/owl.theme.default.min.css';
import 'magnific-popup/dist/magnific-popup.css';
import 'aos/dist/aos.css'
import 'ionicons/dist/css/ionicons.min.css'
//import 'flaticon';
import 'icomoon/style.css';
import './styles/app.css';


// start the Stimulus application
import $ from 'jquery';
//import 'jquery/dist/jquery.min';
import 'jquery-migrate';
import 'popper.js';
import 'bootstrap';
import 'jquery.easing';
import 'waypoints/lib/jquery.waypoints.min';
import 'jquery.stellar/jquery.stellar';
import 'owl.carousel';
import 'magnific-popup';
import AOS from 'aos';

import 'jquery.animate-number';
import 'scrollax';
import { Loader } from "@googlemaps/js-api-loader"
const loader = new Loader({
    apiKey: "AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s",
    version: "weekly",
    sensor: false,
});
import './main';

