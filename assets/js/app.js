import jQuery from "jquery";
import Reviews from "./Reviews";
import Cart from "./Cart";
import React from "react";
import ReactDom from "react-dom";

window.$ = jQuery;

$(document).on('click', '.catalog-menu-expand', function (event) {
    $(this).parent().toggleClass('active');
});

$(document).ready(() => {
    let reviewsBlock = document.getElementById('reviews');
    if (reviewsBlock) {
        ReactDom.render(<Reviews/>, reviewsBlock);
    }
    let miniCartBlock = document.getElementById('mini-cart');
    if (miniCartBlock) {
        ReactDom.render(<Cart/>, miniCartBlock);
    }
});
