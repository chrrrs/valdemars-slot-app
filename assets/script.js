// get email and turn into id, store id in localStorage
var user = document.querySelector('#signUser');

function store() {
  localStorage.setItem('user', user.value);
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


// get JSON data
var request = new XMLHttpRequest();
   request.open("GET", "../users.json", false);
   request.send(null)
   var my_JSON_object = JSON.parse(request.responseText);
