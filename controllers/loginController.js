const login = () => {
  localStorage.clear();
  if (!checkInputLogin()) return;
  let username = document.querySelector("#username-field").value;
  let password = document.querySelector("#password-field").value;
  $.ajax({
    url: "controllers/user.php",
    type: "POST",
    data: { user: username, pass: password, work: "checkLogin" },
    success: function (res) {
      if (res == "cus") {
        window.location.reload();
      }else if(res == "emp")
        window.location.href="admin.php";
      else{
        alert(res);
      }
    },
  });
};

const checkInputLogin = () => {
  let username = document.querySelector("#username-field").value;
  if (username == "") {
    alert("Chưa nhập username!");
    document.querySelector("#username-field").focus();
    return false;
  }
  let password = document.querySelector("#password-field").value;
  if (password == "") {
    alert("Chưa nhập password!");
    document.querySelector("#password-field").focus();
    return false;
  }
  return true;
};
