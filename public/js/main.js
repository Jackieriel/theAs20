// Select DOM Items
const menuBtn = document.querySelector('.menu-btn');
const menu = document.querySelector('.menu');
const menuNav = document.querySelector('.menu-nav');
const menuBranding = document.querySelector('.menu-branding');
const navItems = document.querySelectorAll('.nav-item');

// Set Initial State Of Menu
let showMenu = false;

menuBtn.addEventListener('click', toggleMenu);

function toggleMenu() {
  if (!showMenu) {
    menuBtn.classList.add('close');
    menu.classList.add('show');
    menuNav.classList.add('show');
    menuBranding.classList.add('show');
    navItems.forEach(item => item.classList.add('show'));

    // Set Menu State
    showMenu = true;
  } else {
    menuBtn.classList.remove('close');
    menu.classList.remove('show');
    menuNav.classList.remove('show');
    menuBranding.classList.remove('show');
    navItems.forEach(item => item.classList.remove('show'));

    // Set Menu State
    showMenu = false;
  }
}


  var d = new Date();
  var n = d.getFullYear();
  document.getElementById("getYear").innerHTML = n;

  // Map

  // Initialize and add the map
// function initMap() {
  // The location of 42 Liverpool Road
  // var st_gregory = {lat: 4.645070, lng: 7.921230};
  // The map, centered at 42 Liverpool Road
  // var map = new google.maps.Map(
      // document.getElementById('map'), {zoom: 4, center: st_gregory});
  // The marker, positioned at st_gregory
  // var marker = new google.maps.Marker({position: st_gregory, map: map});
}
