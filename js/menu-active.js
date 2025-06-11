// menu-active.js

// vanilla js - change class


document.getElementById('menu-button').onclick = function() { 
        this.classList.toggle('active');
        document.getElementsByTagName('header')[0].classList.toggle('active');
        //document.getElementsByClassName('[class*="submenu"]')[0].classList.remove('open');
        // document.getElementsByClassName('submenu')[0].classList.remove('open');
        // document.getElementsByClassName('wp-block-navigation-submenu')[0].classList.remove('open');
        document.body.classList.toggle('no_scroll'); // Add 'no_scroll' class to body
        // set attribute class  'paused' to video element
        const video = document.getElementById('loadvideo');
        video.setAttribute('class', 'paused');
        video.pause();

        // Select all 'ul' elements and remove the 'open' class from each
        const ulElements = document.querySelectorAll('ul');
        ulElements.forEach(function(ul) {
            ul.classList.remove('open');
	});
}

// initialize the menu-items and submenu-items
const menuItems = document.querySelectorAll('.menu-item');
const submenuItems = document.querySelectorAll('.submenu-item');
const hasSubmenu = document.querySelectorAll('.menu-item .has-submenu');
const megaMenu = document.querySelector('header .mega-menu');

// Add hover event listener to each menu item
menuItems.forEach(item => {
    item.addEventListener('mouseenter', function() {
        this.classList.add('is-active');
    });
    item.addEventListener('mouseleave', function() {
        this.classList.remove('is-active');
    });
});
// if there is a submenu item, add hover event listener to each submenu item
submenuItems.forEach(item => {
    item.addEventListener('mouseenter', function() {
        this.classList.add('is-active');
    });
    item.addEventListener('mouseleave', function() {
        this.classList.remove('is-active');
    });
});

// Add click event listener to each submenu item
submenuItems.forEach(item => {
    item.addEventListener('click', function() {
        // Remove 'active' class from all submenu items
        submenuItems.forEach(i => i.classList.remove('active'));
        // Add 'active' class to the clicked submenu item
        this.classList.add('active');
    });
});

// if a submenu item is hovered over, add 'is-active' class to the mega-menu
hasSubmenu.forEach(item => {
    item.addEventListener('mouseenter', function() {
        megaMenu.classList.add('is-active');
        document.body.classList.add('no_scroll'); // add 'no_scroll' class to body
    });
    // item.addEventListener('mouseleave', function() {
    //     megaMenu.classList.remove('is-active');
    // });
});

// remove 'is-active' class from mega-menu when mouse scrolls over a menu-item without a submenu 
menuItems.forEach(item => {
    item.addEventListener('mouseenter', function() {
        if (!this.classList.contains('has-submenu')) {
            megaMenu.classList.remove('is-active');
        }
    });
});
// remove 'is-active' class from mega-menu when the mouse leaves the mega-menu
megaMenu.addEventListener('mouseleave', function() {
    this.classList.remove('is-active');
    document.body.classList.remove('no_scroll'); // remove 'no_scroll' class to body

});
// remove 'is-active' class from mega-menu when the mouse enters logo-wrapper
const logoWrapper = document.querySelector('.logo-wrapper');
logoWrapper.addEventListener('mouseenter', function() {
    megaMenu.classList.remove('is-active');
    document.body.classList.remove('no_scroll'); // remove 'no_scroll' class to body
});


