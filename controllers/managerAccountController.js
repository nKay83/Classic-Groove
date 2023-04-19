let nameAcc = null;
let emailAcc = null;
let usernameAcc = null;
let phoneAcc = null;
let roleAcc = null;
let passwordAcc = null;
let addressAcc = null;

const setAccountInfo = () => {
  nameAcc = document.querySelector("#edit-account .nameAccount").value;
  emailAcc = document.querySelector("#edit-account .emailAccount").value;
  phoneAcc = document.querySelector("#edit-account .phoneAccount").value;
  roleAcc = parseInt(
    document.querySelector("#edit-account .roleAccount").value
  );
  passwordAcc = document.querySelector("#edit-account .passwordAccount").value;
  addressAcc = document.querySelector("#edit-account .addressAccount").value;
};
const updateAccount = () => {
  if (!checkInputUpdateAccount()) return;
};
const checkInputUpdateAccount = () => {
  let nameInput = document.querySelector("#edit-account .nameAccount");
  let emailInput = document.querySelector("#edit-account .emailAccount");
  let phoneInput = document.querySelector("#edit-account .phoneAccount");
  let passwordInput = document.querySelector("#edit-account .passwordAccount");
  if (nameInput.value == "") {
    customNotice(
      "fa-sharp fa-light fa-circle-exclamation",
      "Chưa nhập họ tên!"
    );
    nameInput.focus();
    return false;
  }
  if (emailInput.value != "" && !isEmailValid(emailInput.value)) {
    customNotice(
      "fa-sharp fa-light fa-circle-exclamation",
      "Email không hợp lệ!"
    );
    emailInput.focus();
    return false;
  }

  if (nameInput.value == "") {
    customNotice("fa-sharp fa-light fa-circle-exclamation", "Chưa nhập name!");
    nameInput.focus();
    return false;
  }
  if (phoneInput.value == "") {
    customNotice("fa-sharp fa-light fa-circle-exclamation", "Chưa nhập phone!");
    phoneInput.focus();
    return false;
  }
  if (!isVietnamesePhoneNumberValid(phoneInput.value)) {
    customNotice(
      "fa-sharp fa-light fa-circle-exclamation",
      "Số điện thoại không hợp lệ!"
    );
    phoneInput.focus();
    return false;
  }
  if (passwordInput.value == "") {
    customNotice(
      "fa-sharp fa-light fa-circle-exclamation",
      "Chưa nhập password!"
    );
    passwordInput.focus();
    return false;
  }
  if (!isPasswordValid(passwordInput.value)) {
    customNotice(
      "fa-sharp fa-light fa-circle-exclamation",
      "Một mật khẩu có chứa ít nhất tám ký tự, trong đó có ít nhất một số và bao gồm cả chữ thường và chữ hoa và ký tự đặc biệt, ví dụ #, ?, !."
    );
    passwordInput.focus();
    return false;
  }
  return true;
};
const isAccountInfoChange = () => {
  let saveBtn = document.querySelector("#edit-account .btnAccountSave");
  if (
    nameAcc == document.querySelector("#edit-account .nameAccount").value &&
    emailAcc == document.querySelector("#edit-account .emailAccount").value &&
    phoneAcc == document.querySelector("#edit-account .phoneAccount").value &&
    roleAcc ==
      parseInt(document.querySelector("#edit-account .roleAccount").value) &&
    passwordAcc ==
      document.querySelector("#edit-account .passwordAccount").value &&
    addressAcc == document.querySelector("#edit-account .addressAccount").value
  ) {
    saveBtn.style.cursor = "no-drop";
    saveBtn.style.opacity = "0.5";
    return false;
  } else {
    saveBtn.style.cursor = "pointer";
    saveBtn.style.opacity = "1";
    return true;
  }
};
const createNewAccount = async () => {
  if (!(await checkInputCreateNewAccount())) return;
  let username = document.querySelector("#new-account .username").value;
  let name = document.querySelector("#new-account .name").value;
  let email = document.querySelector("#new-account .email").value;
  let phone = document.querySelector("#new-account .phoneNumber").value;
  let role = parseInt(document.querySelector("#new-account .role").value);
  let password = document.querySelector("#new-account .password").value;
  let address = document.querySelector("#new-account .address").value;
  $.ajax({
    url: "util/user.php",
    type: "POST",
    data: {
      username: username,
      name: name,
      email: email,
      phone: phone,
      role: role,
      password: password,
      address: address,
      action: "createNewAccount",
    },
    success: function (res) {
      if (res == "Success") {
        customNotice(
          "fa-sharp fa-light fa-circle-check",
          "Tạo tài khoản thành công!"
        );
      } else {
        customNotice("fa-sharp fa-light fa-circle-exclamation", res);
      }
    },
  });
};
const checkInputCreateNewAccount = async () => {
  let usernameInput = document.querySelector("#new-account .username");
  let nameInput = document.querySelector("#new-account .name");
  let emailInput = document.querySelector("#new-account .email");
  let phoneInput = document.querySelector("#new-account .phoneNumber");
  let passwordInput = document.querySelector("#new-account .password");

  if (usernameInput.value == "") {
    customNotice(
      "fa-sharp fa-light fa-circle-exclamation",
      "Chưa nhập username!"
    );
    usernameInput.focus();
    return false;
  }
  if (await isUsernameExist(usernameInput.value)) {
    customNotice(
      "fa-sharp fa-light fa-circle-exclamation",
      "Username đã tồn tại!"
    );
    usernameInput.focus();
    return false;
  }
  if (nameInput.value == "") {
    customNotice(
      "fa-sharp fa-light fa-circle-exclamation",
      "Chưa nhập họ tên!"
    );
    nameInput.focus();
    return false;
  }
  if (emailInput.value != "" && !isEmailValid(emailInput.value)) {
    customNotice(
      "fa-sharp fa-light fa-circle-exclamation",
      "Email không hợp lệ!"
    );
    emailInput.focus();
    return false;
  }
  if (!isVietnamesePhoneNumberValid(phoneInput.value)) {
    customNotice(
      "fa-sharp fa-light fa-circle-exclamation",
      "Số điện thoại không hợp lệ!"
    );
    phoneInput.focus();
    return false;
  }
  if (nameInput.value == "") {
    customNotice("fa-sharp fa-light fa-circle-exclamation", "Chưa nhập name!");
    nameInput.focus();
    return false;
  }
  if (phoneInput.value == "") {
    customNotice("fa-sharp fa-light fa-circle-exclamation", "Chưa nhập phone!");
    phoneInput.focus();
    return false;
  }
  if (passwordInput.value == "") {
    customNotice(
      "fa-sharp fa-light fa-circle-exclamation",
      "Chưa nhập password!"
    );
    passwordInput.focus();
    return false;
  }
  if (!isPasswordValid(passwordInput.value)) {
    customNotice(
      "fa-sharp fa-light fa-circle-exclamation",
      "Một mật khẩu có chứa ít nhất tám ký tự, trong đó có ít nhất một số và bao gồm cả chữ thường và chữ hoa và ký tự đặc biệt, ví dụ #, ?, !."
    );
    passwordInput.focus();
    return false;
  }
  return true;
};
