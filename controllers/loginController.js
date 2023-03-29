const login = () => {
  let username = document.querySelector("#username-field").value;
  let password = document.querySelector("#password-field").value;
  console.log(username,password)
  $.ajax({
    url: "controllers/user.php",
    type: "POST",
    data: { user: username, pass: password, work: "checkLogin" },
    success: function (data) {
      // console.log(data)
      alert(data)
    },
  });
};
