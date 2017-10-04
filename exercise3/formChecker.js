function check(form) {
  var m_username = form.username.value;
	var m_password = form.password.value;
	var m_shipping = form.shipping.value;

  var m_error = false;
  var m_feedback = "";

  if (m_username.length == 0) {
  m_error = true;
  m_feedback += "<p>Username cannot be blank</p>"
  }
  if (m_password.length == 0) {
  m_error = true;
  m_feedback += "<p>Password cannot be blank</p>"
  }
  if (!m_shipping) {
  m_error = true;
  m_feedback += "<p>Please pick a shipping option</p>"
  }
}
