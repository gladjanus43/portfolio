let element
let hidden
let jumped

window.addEventListener('load', init)

function init() {

  window.addEventListener('scroll', windowScrolled)
  element = document.getElementById('look_down')
  hidden = false
  jumped = false

  lottie.loadAnimation({
    container: element, // the dom element that will contain the animation
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'images/look_down.json' // the path to the animation json
  });
}

function windowScrolled() {
  let scrolled = window.scrollY
  console.log(scrolled);
  
  if (scrolled > 0) {
    hideElement()
  } else if (scrolled == 0) {
    showElement()
  }
}

function hideElement() {
  if (hidden == false) {
    y = 0;
    hidden = true;
    let int = setInterval(() => {
      y = y + 10
      element.style.transform = "translateY(" + y + "px)"
      if (y >= 100) {
        clearInterval(int)      
      }
    }, 20)
  }
}

function showElement() {
  if(hidden == true){
    y = 100;
    hidden = false;
    let int = setInterval(() => {
      y = y - 10;
      console.log(y)
      element.style.transform = "translateY(" + y + "px)"
      if (y <= 0) {
        clearInterval(int)
        
      }
    }, 20)
  }
  }
