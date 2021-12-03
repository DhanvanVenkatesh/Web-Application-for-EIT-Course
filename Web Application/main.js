//Select element function
const selectElement = function (element) {
    return document.querySelector(element);
};

let menuToggler = selectElement('.menu-toggle');
let body = selectElement('body');

menuToggler.addEventListener('click', function() {
    body.classList.toggle('open');
});

// const faders = document.querySelectorAll('.fade-in');


const appearOptions ={
  threshold: 0,
  rootMargin: "0px 0px -100px 0px"
};
const appearOnScroll = new IntersectionObserver(
  function(
    entries,
    appearOnScroll
  ) {
    entries.forEach(entry => {
      if (!entry.isIntersecting){
        return;
      } else{
        entry.target.classList.add('appear');
        appearOnScroll.unobserve(entry.target);
      }
    });
  },
appearOptions);

const sliders  = document.querySelectorAll(".slide-in");

sliders.forEach(slider =>{
  appearOnScroll.observe(slider);
});
// Initialize and add the map
function initMap() {
    // The location of Tce
    const tce = { lat: 9.91466, lng: 78.16509 };
    // The map, centered at Tce
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 10,
      center: tce,
    });
    // The marker, positioned at Tce
    const marker = new google.maps.Marker({
      position: tce,
      map: map,
    });
  }