// get username from form and game data from JSON and store locally
var user = document.querySelector('#signUser');

function store() {
  localStorage.setItem('user', user.value);
  localStorage.setItem('game', JSON.stringify(routesLocal));
}

// display JSON stored code
var request = new XMLHttpRequest();
request.open("GET", "../users.json", false);
request.send(null)
var JSONobj = JSON.parse(request.responseText);

var codeDisplay = JSONobj[0]['code']; //localStorage.getItem('user');

if(codeDisplay) {
  var codeSwitch = document.querySelector('#codeSwitch');

  if(codeSwitch) {
      codeSwitch.addEventListener('click', function() {
    if(codeSwitch.checked == true) {
      document.querySelector('#code-container p').innerHTML = codeDisplay;
      document.querySelector('#code-container').style = 'border-bottom: 2px solid #4CD964';
    } else if (codeSwitch.checked == false) {
      document.querySelector('#code-container p').innerHTML = 'Aktiver din kode';
      document.querySelector('#code-container').style = 'border-bottom: 2px solid #bdbdbd';
    }
  });
}}

// clear local storage on logout
function clearStorage() {
  localStorage.clear();
}

// open modal with localStorage name
var modal = document.querySelector('#rulesModal');
var rulesName = document.querySelector('#rulesName');
var span = document.querySelector('.close');
var userDetail = localStorage.getItem('user');

if(modal) {
  window.onload =  function() {
    modal.style.display = "block";
    rulesName.innerHTML = userDetail;
  };

  span.onclick = function() {
    modal.style.display = "none";
  }

  window.onclick = function(event) {
    if (event.target == modal) {
     modal.style.display = "none";
    }
  }
};


// map selector
var imgSlider = document.querySelector('#mapSlider');
var basement = document.querySelector('#basement');
var groundFloor = document.querySelector('#ground-floor');
var firstFloor = document.querySelector('#first-floor');
var secondFloor = document.querySelector('#second-floor');


if(imgSlider) {
  imgSlider.addEventListener('change', function() {
    if(imgSlider.value == 0) {
      basement.style = "display: block";
      groundFloor.style = "display: none";
      firstFloor.style = "display: none";
      secondFloor.style = "display: none";
    } else if (imgSlider.value == 1) {
      basement.style = "display: none";
      groundFloor.style = "display: block";
      firstFloor.style = "display: none";
      secondFloor.style = "display: none";
    } else if (imgSlider.value == 2) {
      basement.style = "display: none";
      groundFloor.style = "display: none";
      firstFloor.style = "display: block";
      secondFloor.style = "display: none";
    } else if (imgSlider.value == 3) {
      basement.style = "display: none";
      groundFloor.style = "display: none";
      firstFloor.style = "display: none";
      secondFloor.style = "display: block";
    }
  });
}

// Save game data locally
var gameRequest = new XMLHttpRequest();
gameRequest.open("GET", "../users.json", false);
gameRequest.send(null)
var JSONobj = JSON.parse(gameRequest.responseText);

var routesLocal = JSONobj[0]['routes'];
