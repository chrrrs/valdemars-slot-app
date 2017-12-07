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
