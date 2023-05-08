const updateRole = async (roleID) => {
  let listPermissionInput = document.querySelectorAll(
    ".role-placeholder .checkbox-placeholder input"
  );
  let listPermission = [];
  listPermissionInput.forEach((item) => {
    if (item.checked) listPermission.push(parseInt(item.value));
  });
  let roleName = document.querySelector(".info-role input").value.trim();
  let roleDescription = document
    .querySelector(".info-role textarea")
    .value.trim();
  $.ajax({
    url: "util/role.php",
    type: "POST",
    data: {
      roleID: roleID,
      roleName: roleName,
      roleDescription: roleDescription,
      listPermission: listPermission,
      action: "updateRole",
    },
    success: function (res) {
      if (res != "Success") console.log(res);
      else
        customNotice(
          "fa-sharp fa-light fa-circle-check",
          "Update role successfully!"
        );
      loadPageByAjax("roleManager");
      loadModalBoxByAjax("roleManager", roleID);
    },
  });
};

const addNewRole = (roleID) => {
  let listPermissionInput = document.querySelectorAll(
    ".role-placeholder .checkbox-placeholder input"
  );
  let listPermission = [];
  listPermissionInput.forEach((item) => {
    if (item.checked) listPermission.push(parseInt(item.value));
  });
  let roleName = document.querySelector(".info-role input").value.trim();
  let roleDescription = document
    .querySelector(".info-role textarea")
    .value.trim();
  $.ajax({
    url: "util/role.php",
    type: "POST",
    data: {
      roleID: roleID,
      roleName: roleName,
      roleDescription: roleDescription,
      listPermission: listPermission,
      action: "addNewRole",
    },
    success: function (res) {
      if (res != "Success") console.log(res);
      else
        customNotice(
          "fa-sharp fa-light fa-circle-check",
          "Add new role successfully!"
        );
      loadPageByAjax("roleManager");
    },
  });
};
