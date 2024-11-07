/*!  Author: Zeddy Emmanuel

    --> Java script for the Header
    --> Copyright (c) 2021 - Zeddy Emmanuel
    
    --> File: header.js
 */

const header = document.querySelector("#header");
let headerNav = document.querySelector(".header-c");
let navLinks = document.querySelector(".nav-links");
let searchBlock = document.querySelector(".search-block");

headerNav.addEventListener('click', (e) => {
    // open & close navigation bar on mobile
    if (e.target.classList.contains('menuBtn')) {
        headerNav.classList.add('is-active');
    }
    if (e.target.classList.contains('menuCloseBtn') || e.target.classList.contains('nav-overlay')) {
        headerNav.classList.remove('is-active');
    }
    // open & close search box modal
    if (e.target.classList.contains('searchBtn')) {
        searchBlock.classList.toggle('active');
        setTimeout(() => { searchBlock.querySelector('input').focus(); }, 300);
    }
    if (e.target.classList.contains('close-search') || e.target.classList.contains('search-block')) {
        if (searchBlock.classList.contains('active')) {
            searchBlock.classList.add('closing');
            setTimeout(() => { searchBlock.classList.remove('active', 'closing'); }, 300);
        }
    }

    // open & close nav submenu
    if (e.target.classList.contains('arrow')) {
        e.target.classList.toggle("active");
        let dropdownContent = e.target.nextElementSibling;
        if (dropdownContent.classList.contains('active')) {
            dropdownContent.classList.remove('active');
        } else {
            dropdownContent.classList.add('active');
        }
    }
});


let lastScrollPos = 0;
const SCROLL_THRESHOLD = 55;

window.addEventListener("load", () => {
    const currentScrollPos = window.pageYOffset || document.documentElement.scrollTop;
    const headerHeight = header.getBoundingClientRect().height;
    if (currentScrollPos > headerHeight) {
        header.classList.add('headerBg');
    }
});
window.addEventListener("scroll", () => {
    const currentScrollPos = window.pageYOffset || document.documentElement.scrollTop;
    const headerHeight = header.getBoundingClientRect().height;

    // Check if the user has scrolled far enough
    if (Math.abs(lastScrollPos - currentScrollPos) <= SCROLL_THRESHOLD) {
        return;
    }

    // Throttle the scroll event
    if (currentScrollPos > headerHeight) {
        header.classList.add('headerBg');
    } else {
        header.classList.remove('headerBg');
    }

    // Store the current scroll position
    lastScrollPos = currentScrollPos;
});