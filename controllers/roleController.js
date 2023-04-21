let roleID = null;
const loadPermissionOfRole = (roleID) => {};
const changeAssign = (roleID, permisionID, input) => {
  if (input.checked) removeAssignPermission(roleID, permisionID);
  else assignPermisson(roleID, permisionID);
};
const assignPermisson = (roleID, permissonID) => {
  $.ajax({
    url: "util/role.php",
    type: "POST",
    data: {
      roleID: roleID,
      permisionID: permissonID,
      action: "assignPermission",
    },
    success: function (res) {
      if (res != "Success") alert(res);
      else
        customNotice(
          "fa-sharp fa-light fa-circle-check",
          "Change successfully!"
        );
    },
  });
};
const removeAssignPermission = (roleID, permissionID) => {
  $.ajax({
    url:
      "util/role.php?roleID=" +
      roleID +
      "&permissionID=" +
      permissionID +
      "action=removeAssignPermission",
    type: "DELETE",
    success: function (res) {
      if (res != "Success") alert(res);
      else
        customNotice(
          "fa-sharp fa-light fa-circle-check",
          "Change successfully!"
        );
    },
  });
};
const newRole = () => {
  let roleName = "some role name";
  $.ajax({
    url: "util/role.php",
    type: "POST",
    data: { roleName: roleName, action: "newRole" },
    success: function (res) {
      if (res != "Success") alert(res);
      else
        customNotice(
          "fa-sharp fa-light fa-circle-check",
          "Create new role successfully!"
        );
    },
  });
};
