$(document).ready(function()
{"use strict";var header=$('.header');var menu=$('.menu');var burger=$('.hamburger');var menuActive=false;setHeader();$(window).on('resize',function()
{setHeader();if(window.innerWidth>1280)
{if(menuActive)
{closeMenu();}}
setTimeout(function()
{jQuery(".main_content_scroll").mCustomScrollbar("update");},375);});$(document).on('scroll',function()
{setHeader();});initMenu();function setHeader()
{if($(window).scrollTop()>91)
{header.addClass('scrolled');}
else
{header.removeClass('scrolled');}}
function initMenu()
{if($('.hamburger').length&&$('.menu').length)
{var hamb=$('.hamburger');hamb.on('click',function()
{if(!menuActive)
{openMenu();}
else
{closeMenu();}});}}
function openMenu()
{menu.addClass('active');menuActive=true;}
function closeMenu()
{menu.removeClass('active');menuActive=false;}});