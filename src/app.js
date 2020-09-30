var $ = require("jquery");

$(document).ready(function() {

    $('.top').click(function() {

        $('html').animate({ scrollTop: 0 }, "slow");

    });

});