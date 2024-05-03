function init() {
    var user = localStorage.getItem('user');
    if (user != null || user != undefined) {
        user = JSON.parse(user);
        $('.user-hello .user-fullname').html('Hi, ' + user.fullname);
        $('.user-hello').removeClass('hide');
        $('.user-uri').addClass('hide');
    }
}
init();
function login() {
    var form = $('#form-login');
    var email = form.find('#txtLoginName').val();
    var pass = form.find('#txtLoginPassword').val();
    console.log(email);
    console.log(validateEmail(email));
    if (!validateEmail(email)) {
        Swal.fire('Email không hợp lệ', '', "warning");
        return false;
    }
    var data = {
        email: email,
        pass: pass,
        is_ajax: '1',
    };
    // data = JSON.stringify(data);
    console.log(data);

    startSending()
    //@todo: push ajax
    $.ajax({
        headers: {
            'X-CSRF-Token': csrfToken
        },
        url: LOGIN_URL,
        data: data,
        type: 'get',
        dataType: 'html',
        success: function (d) {
            d = JSON.parse(d);
            console.log(d);
            if (d.res == 'done') {
                localStorage.setItem('user', JSON.stringify(d.data));
                Swal.fire("Đăng nhập thành công", '', "success").then(function () {
                    window.location.href = DOMAIN;
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

function register() {
    var form = $('#form-login');
    var email = form.find('#txtLoginName').val();
    var pass = form.find('#txtLoginPassword').val();
    console.log(email);
    console.log(validateEmail(email));
    if (!validateEmail(email)) {
        Swal.fire('Email không hợp lệ', '', "warning");
        return false;
    }
    var data = {
        email: email,
        pass: pass,
        is_ajax: '1',
    };
    // data = JSON.stringify(data);
    console.log(data);

    startSending()
    //@todo: push ajax
    $.ajax({
        headers: {
            'X-CSRF-Token': csrfToken
        },
        url: LOGIN_URL,
        data: data,
        type: 'get',
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