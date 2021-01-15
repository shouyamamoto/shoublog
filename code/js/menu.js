'use strict';

window.addEventListener('DOMContentLoaded', () => {
  document.querySelector('.nav__list').classList.add('hidden');
});

const nav = document.querySelector('.nav');
const navBtn = document.querySelector('.nav__btn');
const navMenu = document.querySelector('.nav__list');
const body = document.querySelector('.body');
const navItem = document.querySelectorAll('.nav__item');
const windowHeight = window.innerHeight;

nav.style.height = windowHeight + 'px';

function noScroll(event) {
  event.preventDefault();
}

navBtn.addEventListener('click', () => {
  navMenu.classList.toggle('hidden');
  navBtn.classList.toggle('close');
  if(!navMenu.classList.contains('hidden')) {
    body.addEventListener('touchmove', noScroll, {passive: false});
    body.addEventListener('mousewheel', noScroll, {passive: false});
  } else {
    body.removeEventListener('touchmove', noScroll, {passive: false});
    body.removeEventListener('mousewheel', noScroll, {passive: false});
  }
});

for(let i = 0; i < navItem.length; i++) {
  navItem[i].addEventListener('click', () => {
    navMenu.classList.remove('hidden');
  });
}

