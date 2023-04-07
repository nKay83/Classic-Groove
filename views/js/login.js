

function eyePassword() {
  let password = document.getElementById("password-field");
  if (password.type == "password") {
    password.type = "text";
    eyeicon.className = "fa-thin fa-eye";
  } else {
    password.type = "password";
    eyeicon.className = "fa-thin fa-eye-slash";
  }
};
