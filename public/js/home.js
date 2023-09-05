'use strict';

// カスタムスクリプトを使用して、Accordionの内容をクリックしたままに保つ
document.addEventListener('DOMContentLoaded', function () {
    var accordionBodies = document.querySelectorAll('.accordion-body');
    accordionBodies.forEach(function (body) {
        body.addEventListener('click', function (event) {
            event.stopPropagation();
        });
    });
});

