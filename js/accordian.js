//accordion

// open and close accordion items on click
document.addEventListener('DOMContentLoaded', function() {
    var accordionItems = document.querySelectorAll('.product-accordion-item');

    accordionItems.forEach(function(item) {
        var header = item.querySelector('.product-accordion-header');
        header.addEventListener('click', function() {
            item.classList.toggle('state-open');
            item.classList.toggle('state-closed');
        });
    });
})