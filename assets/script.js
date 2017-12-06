// get email and turn into id, store id in localStorage
var user = document.querySelector('#signUser');

function store() {
  localStorage.setItem('user', user.value);
}

// display locally stored code
var codeDisplay = localStorage.getItem('user');

if(codeDisplay) {
  var codeSwitch = document.querySelector('#codeSwitch');

  if(codeSwitch) {
      codeSwitch.addEventListener('click', function() {
    if(codeSwitch.checked == true) {
      document.querySelector('#code-container p').innerHTML = codeDisplay;
    } else if (codeSwitch.checked == false) {
      document.querySelector('#code-container p').innerHTML = 'Aktiver din kode';
    }
  });
}}

// create function that clears localStorage when footer-app-container box is clicked

var logout = document.querySelector('.footer-app-container');

if(logout) {
  logout.addEventListener('click', function clearStorage(logout) {
    localStorage.clear();
  });
}
