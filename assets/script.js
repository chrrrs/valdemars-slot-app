// get username from form and game data from JSON and store locally
var user = document.querySelector('#signUser');

function store() {
  localStorage.setItem('user', user.value);
}

// display JSON stored code
var request = new XMLHttpRequest();
request.open("GET", "../users.json", false);
request.send(null)
var JSONobj = JSON.parse(request.responseText);

var codeDisplay = JSONobj[0]['code'];

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

// modal for login unavailabe
var modalUnavailable = document.querySelector('#unavailableModal');
var unavailableButton = document.querySelectorAll('.login-unavailable');
var spanUnavailable = document.querySelector('.close');

if(modalUnavailable) {

  for (var i = 0 ; i < unavailableButton.length; i++) {
    unavailableButton[i].addEventListener('click', function() {
      modalUnavailable.style.display = "block";
    });

    span.onclick = function() {
      modalUnavailable.style.display = "none";
    }

  }

  window.onclick = function(event) {
    if (event.target == modalUnavailable) {
      modalUnavailable.style.display = "none";
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
