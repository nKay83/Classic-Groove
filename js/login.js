// let password = document.getElementById("password-field");
// let eyeicon = document.getElementById("eyeicon");

// eyeicon.onclick = function () {
//   if (password.type == "password") {
//     password.type = "text";
//     eyeicon.className = "fa-thin fa-eye";
//   } else {
//     password.type = "password";
//     eyeicon.className = "fa-thin fa-eye-slash";
//   }
// };

async function signUp() {
  const login = document.querySelector("#login");
  if (login == null) {
    await loadPageByAjax("login");
  } else {
    const poster = document.querySelector("#login .poster");
    poster.style.transform = "translateX(-100%)";
    poster.style.backgroundPosition = "left";
    const left = document.querySelector("#login .left");
    left.style.transform = "translateX(50%)";
    left.style.opacity = "0";
    const right = document.querySelector("#login .right");
    right.style.transform = "translateX(0)";
    right.style.opacity = "1";
  }
}

const test = () => {
  const poster = document.querySelector("#login .poster");
  poster.style.transform = "translateX(-100%)";
  poster.style.backgroundPosition = "left";
  const left = document.querySelector("#login .left");
  left.style.transform = "translateX(50%)";
  left.style.opacity = "0";
  const right = document.querySelector("#login .right");
  right.style.transform = "translateX(0)";
  right.style.opacity = "1";
};
