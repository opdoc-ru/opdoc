require('popper.js');
require('jquery');
require('bootstrap');
const Navigo = require('navigo');

let router = new Navigo(null, false, '#');

router.on('articles', function () {
        require('./pages/articles');
    })
    .resolve();