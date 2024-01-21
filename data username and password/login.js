var accounts = {
    "admin":"123"
}

var form = document.getElementById("form-login");

function handleForm(event) {
  event.preventDefault();
  let username = document.getElementById("username").value;
  let password = document.getElementById("password").value;

  if (accounts[username] == password) {
    alert("Đăng nhập thành công")
    location.replace("in4.html");
  } else {
    let msg = document.getElementById("loginMessage");
    msg.innerText = "Đăng nhập thất bại, vui lòng kiểm tra lại tên đăng nhập, mật khẩu và thử lại.";
  }

}

form.addEventListener("submit", handleForm);