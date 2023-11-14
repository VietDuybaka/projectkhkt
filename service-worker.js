self.addEventListener("push", event => {
    const options = {
        body: event.data.text(),
        icon: "img/icon.png"
    };

    event.waitUntil(
        self.registration.showNotification("Thông báo từ trang web", options)
    );
});
