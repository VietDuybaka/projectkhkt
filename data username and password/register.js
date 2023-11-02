document.getElementById("registerForm").addEventListener("submit", function (e) {
    e.preventDefault();

    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    fetch("register.php", {
        method: "POST",
        body: JSON.stringify({ username, password }),
        headers: {
            "Content-Type": "application/json",
        },
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                window.location.href = "login.html";
            } else {
                document.getElementById("registerMessage").textContent = "Tài khoản đã tồn tại hoặc lỗi khác.";
            }
        })
        .catch(error => {
            console.error(error);
        });
});
