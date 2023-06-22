let slidercontainer = document.getElementById('slidercontainer');
let slider = document.getElementById('slider');
let cards = slider.getElementsByTagName('li');

let elementToShow = 4;
let slidercontainerwidth = slidercontainer.clientWidth;
let cardwidth = slidercontainerwidth / elementToShow;

slider.style.width = cards.length * cardwidth + 'px';

for (let index = 0; index < cards.length; index++) {
  const element = cards[index];
  element.style.width = cardwidth + 'px';
}

function prev() {
  let currentMarginLeft = parseInt(slider.style.marginLeft) || 0;
  let newMarginLeft = currentMarginLeft + cardwidth;
  slider.style.marginLeft = newMarginLeft + 'px';
}

function next() {
  let currentMarginLeft = parseInt(slider.style.marginLeft) || 0;
  let newMarginLeft = currentMarginLeft - cardwidth;
  slider.style.marginLeft = newMarginLeft + 'px';
}
