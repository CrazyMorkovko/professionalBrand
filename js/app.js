const jQuery = require('jquery');
window.$ = jQuery;

$(document).on('click', '.catalog-menu-expand', function (event) {
    $(this).parent().toggleClass('active');
});