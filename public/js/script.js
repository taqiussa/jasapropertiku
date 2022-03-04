var notyf = new Notyf({
                        duration: 2000,
                        position: {
                            x:'right',
                            y:'top',
                        }
                    });
window.addEventListener('notyf:success', event => {
    notyf[event.detail.type](event.detail.message);
});
window.addEventListener('swal:notif', event => {
    swal.fire({
        title: event.detail.title,
        text: event.detail.text,
        icon: event.detail.type,
    });
});