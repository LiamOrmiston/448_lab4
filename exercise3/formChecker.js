function check(form) {
  var m_username = form.username.value;
	var m_password = form.password.value;
	var m_shipping = form.shipping.value;

  var m_monitor = form.monitor.value;
  var m_mouse = form.mouse.value;
  var m_keyboard = form.keyboard.value;

  var m_error = false;
  var m_feedback = "";
  var warning = document.getElementById('warning');

  function reset() {
  	location.reload
  }

  if (m_username.length == 0) {
  m_error = true;
  m_feedback += "<p>Username cannot be blank</p>"
  }
  if (!validateEmail(m_username)) {
  m_error = true;
  m_feedback += "<p>Username must be a valid email</p>"
}
  if (m_password.length == 0) {
  m_error = true;
  m_feedback += "<p>Password cannot be blank</p>"
  }
  if (!m_shipping) {
  m_error = true;
  m_feedback += "<p>Please pick a shipping option</p>"
  }

  if (m_monitor < 0) {
  m_error = true;
  m_feedback += "<p>Monitor quantity cannot be negative</p>"
  }
  if (m_mouse < 0) {
  m_error = true;
  m_feedback += "<p>Mouse quantity cannot be negative</p>"
  }
  if (m_keyboard < 0) {
  m_error = true;
  m_feedback += "<p>Keyboard quantity cannot be negative</p>"
  }

  warning.innerHTML = "";
  if(m_error){
    warning.innerHTML += "<div class=\"warning\">" + m_feedback + "</div>"
  }

  return (!m_error);
}

// https://stackoverflow.com/questions/46155/how-to-validate-email-address-in-javascript
function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
