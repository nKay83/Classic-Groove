const login = () => {
  if (!checkInputLogin()) return;
  let username = document.querySelector("#username-field").value;
  let password = document.querySelector("#password-field").value;
  $.ajax({
    url: "util/user.php",
    type: "POST",
    data: { user: username, pass: password, action: "checkLogin" },
    success: function (res) {
      if (res == "cus") {
        window.location.reload();
      } else if (res == "emp") window.location.href = "admin.php";
      else {
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
const logout = () => {
  $.ajax({
    url: "util/logout.php",
    type: "GET",
    success: function () {
      window.location.href = "index.php";
    },
  });
};

const register = async () => {
  if (!(await checkInputRegister())) return;
  let name = document.querySelector("#login .register .name").value;
  let phone = document.querySelector("#login .register .phonenumber").value;
  let username = document.querySelector("#login .register .username").value;
  let password = document.querySelector("#login .register .password").value;
  $.ajax({
    url: "util/user.php",
    type: "POST",
    data: {
      name: name,
      phone: phone,
      user: username,
      pass: password,
      action: "register",
    },
    success: function (res) {
      if (res == "Success") {
        alert("Tạo tài khoản thành công!");
        loadLoginByAjax("logIn");
        document.querySelector("#username-field").value = username;
        document.querySelector("#password-field").value = password;
      } else alert("Tạo tài khoản thất bại!");
    },
  });
};

const checkInputRegister = async () => {
  let name = document.querySelector("#login .register .name");
  let phone = document.querySelector("#login .register .phonenumber");
  let username = document.querySelector("#login .register .username");
  let password = document.querySelector("#login .register .password");
  let confirmPassword = document.querySelector(
    "#login .register .confirmPassword"
  );
  if (name.value == "") {
    alert("Chưa nhập name!");
    name.focus();
    return false;
  }
  if (phone.value == "") {
    alert("Chưa nhập phone number!");
    phone.focus();
    return false;
  }
  if (!isVietnamesePhoneNumberValid(phone.value)) {
    alert("Số điện thoại không hợp lệ!");
    phone.focus();
    return false;
  }
  if (username.value == "") {
    alert("Chưa nhập username!");
    username.focus();
    return false;
  }
  if (await isUsernameExist(username.value)) {
    alert("Username đã tồn tại!");
    username.focus();
    return false;
  }
  if (password.value == "") {
    alert("Chưa nhập password!");
    password.focus();
    return false;
  }
  if (!isPasswordValid(password.value)) {
    alert(
      "Một mật khẩu có chứa ít nhất tám ký tự, trong đó có ít nhất một số và bao gồm cả chữ thường và chữ hoa và ký tự đặc biệt, ví dụ #, ?, !."
    );
    password.focus();
    return false;
  }

  if (confirmPassword.value == "") {
    alert("Chưa nhập confirm password!");
    confirmPassword.focus();
    return false;
  }
  if (confirmPassword.value != password.value) {
    alert("Mật khẩu không khớp!");
    confirmPassword.focus();
    return false;
  }
  return true;
};

function isVietnamesePhoneNumberValid(number) {
  return /(((\+|)84)|0)(3|5|7|8|9)+([0-9]{8})\b/.test(number);
}
function isPasswordValid(password) {
  return /^(?=.*?[A-Z])(?=(.*[a-z]){1,})(?=(.*[\d]){1,})(?=(.*[\W]){1,})(?!.*\s).{8,}$/.test(
    password
  );
}

const isUsernameExist = (username) => {
  return $.ajax({
    url: "util/user.php",
    type: "POST",
    data: { user: username, action: "checkUsernameExist" },
  });
};
const isLogin = () => {
  return $.ajax({
    url: "util/user.php?action=isLogin",
    type: "GET",
  });
};
