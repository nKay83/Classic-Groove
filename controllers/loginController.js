const login = async () => {
  localStorage.clear();
  if (!checkInputLogin()) return;
  let username = document.querySelector("#username-field").value;
  let password = document.querySelector("#password-field").value;
  let user = await getUserByUsername(username);
  if (user == null) alert("Sai tên đăng nhập");
  else {
    user = JSON.parse(user);
    if (user.matKhau != password) {
      alert("Sai mật khẩu");
    } else {
      localStorage.setItem("user", JSON.stringify(user));
      if (user.vaiTro != 1) window.location.href = "admin.php";
      else loadPageByAjax("home");
    }
  }
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

const getUserByUsername = (username) => {
  return $.ajax({
    url: "controllers/user.php",
    type: "POST",
    data: { user: username, pass: "password", work: "checkLogin" },
  });
};
