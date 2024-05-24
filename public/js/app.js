
$('.banner.owl-carousel').owlCarousel({
    loop: true,
    responsiveClass: true,
    items: 1,

})



function login() {
    startSending()
    var data = {
        email: 'dorashang@gmail.com',
        pass: '123',
        req_type: 'login',
    };
    // data = JSON.stringify(data);
    console.log(data);
    //@todo: push ajax
    $.ajax({
        headers: {
            'X-CSRF-Token': csrfToken
        },
        url: LOGIN_URL,
        data: data,
        type: 'post',
        dataType: 'html',
        success: function (d) {
            d = JSON.parse(d);
            console.log(d);
            if (d.res == 'done') {
                Swal.fire("Đăng nhập thành công", '', "success").then(function () {
                    window.location.reload();
                });
            } else {
                Swal.fire(d.msg, '', "warning");
            }
            endSending();
        },
        error: function (err) {
            console.log(err);
            Swal.fire("Đã xảy ra lỗi, vui lòng thử lại", '', "error");
            endSending();
        },
    })
}








