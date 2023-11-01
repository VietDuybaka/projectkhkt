<?php
session_start();
if (isset($_SESSION['username'])) {
    echo "Chào mừng, " . $_SESSION['username'] . "! Đây là trang cá nhân của bạn.";
} else {
    header("Location: index.html");
}
?>