$(function () {
    $('.slider__items').slick({
        appendArrows: '.slider__btn',
        nextArrow: '<button type="button" class="slick-next slick-next-img"></button>',
        prevArrow: '<button type="button" class="slick-prev slick-prev-img"</button>'
    });
    $('.slider__text').slick({
        appendArrows: '.slick-prev-img',
        vertical: true,
        speed: 1500,
        nextArrow: '<button type="button" class="slick-next slick-next-text"></button>',
        prevArrow: '<button type="button" class="slick-prev slick-prev-text"</button>'
    });
    $('.slider__title').slick({
        appendArrows: '.slick-prev-text',
        vertical: true,
        speed: 1000,
        nextArrow: '<button type="button" class="slick-next slick-next-title"></button>',
        prevArrow: '<button type="button" class="slick-prev slick-prev-title"</button>'
    });


    document.querySelector('.slick-next-img').appendChild(document.querySelector('.slick-next-text'));
    document.querySelector('.slick-next-text').appendChild(document.querySelector('.slick-prev-title'));
});

//burger
let burger = document.querySelector('.nav__btn');
let navList = document.querySelector('.nav ul');

burger.addEventListener('click', function () {
    this.classList.toggle('open');
    navList.classList.toggle('visible')
});
