require('./bootstrap');
window.$ = window.jQuery = require('jquery');
// AdminKit (required)
// import "./modules/bootstrap";
import "./modules/sidebar";
import "./modules/theme";
// import "./modules/feather";

// Charts
// import "./modules/chartjs";
//
// // Forms
// import "./modules/flatpickr";
//
// // Maps
// import "./modules/vector-maps";



$(document).ready(function () {
    $("#sidebar a.no-link").click(function(event){
        event.preventDefault();
    });
});