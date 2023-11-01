document.getElementById("loginForm").addEventListener("submit", function (e) {
    e.preventDefault();

    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    fetch("login.php", {
        method: "POST",
        body: JSON.stringify({ username, password }),
        headers: {
            "Content-Type": "application/json",
        },
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                window.location.href = "profile.php";
            } else {
                document.getElementById("loginMessage").textContent = "Thông tin đăng nhập không hợp lệ.";
            }
        })
        .catch(error => {
            console.error(error);
        });
});
