
const modal_datve = $('#order-film');
$('.banner.owl-carousel').owlCarousel({
    loop: true,
    responsiveClass: true,
    items: 1,

})
$('#register form').submit(function () {
    var fullname = $('#txtName').val();
    var email = $('#txtEmail').val();
    var pass = $('#txtMatKhau').val();
    var c_pass = $('#txtXacNhanMatKhau').val();
    var phone = $('#txtDienThoai').val();
    var sex = $('#cboSex').val();
    if (fullname == '' || fullname == undefined) {
        Swal.fire("Vui lòng nhập họ tên", '', "warning");
        return false;
    }

    if (email == '' || email == undefined) {
        Swal.fire("Vui lòng nhập email", '', "warning");
        return false;
    }
    if (pass == '' || pass == undefined) {
        Swal.fire("Vui lòng nhập mật khẩu", '', "warning");
        return false;
    }
    if (c_pass == '' || c_pass !== pass) {
        Swal.fire("Mật khẩu không khớp, vui lòng nhập lại", '', "warning");
        return false;
    }

    if (phone == '' || phone == undefined) {
        Swal.fire("Vui lòng nhập số điện thoại", '', "warning");
        return false;
    }

});


$('#login form').submit(function () {
    var email = $('#txtLoginName').val();
    var pass = $('#txtLoginPassword').val();
    if (email == '' || email == undefined) {
        Swal.fire("Vui lòng nhập email", '', "warning");
        return false;
    }
    if (pass == '' || pass == undefined) {
        Swal.fire("Vui lòng nhập mật khẩu", '', "warning");
        return false;
    }

});

function login() {
    startSending()
    var email = '';
    var pass = '';
    if (email == '' || email == undefined) {
        Swal.fire("Vui lòng nhập email", '', "warning");
        return false;
    }
    if (pass == '' || pass == undefined) {
        Swal.fire("Vui lòng nhập mật khẩu", '', "warning");
        return false;
    }
    var data = {
        email: email,
        pass: pass,
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

function show_modal_order(id = undefined) {
    if (is_login == false) {
        window.location.href = DOMAIN + 'login';
        return false;
    }
    // if()

    $('#order-film').modal('show');
    modal_datve.find('.current-id').val(id);
    modal_datve.find('.day-filter.active').trigger('click');
}

function change_day_fill(self, day) {
    $('.day-filter').removeClass('active');
    $(self).addClass('active');
    var day = $(self).attr('data-date');
    modal_datve.find('.current-time').html(day);

    var node_id = modal_datve.find('.current-id').val();

    // call showtime;   
    startSending()
    var data = {
        date: day,
        node_id: node_id,
    };

    // data = JSON.stringify(data);
    console.log(data);

    //@todo: push ajax
    $.ajax({
        headers: {
            'X-CSRF-Token': csrfToken
        },
        url: GET_SHOWTIME,
        data: data,
        type: 'post',
        dataType: 'json',
        success: function (d) {
            // d = JSON.parse(d);
            modal_datve.find('.showtime-list').each(function () {
                $(this).html('')
            })
            console.log(d);
            if (d.res == 'done') {
                for (const [key, value] of Object.entries(d.data)) {
                    var html = '';
                    value.forEach(e => {
                        html += `<div class="showtime-item">
                                    <a href="${DOMAIN}order/add/${e.id}">
                                    ${e.hour}
                                    </a>
                                    </div>`;
                    });
                    modal_datve.find('#list-' + key).html(html);
                }
            } else {

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

function select_ghe(self) {
    $(self).toggleClass('active');
    var price = $('#price').val();
    var sl = $('.danhsachghe .item.active').length;
    var total_price = price * sl;

    $('#total_price').val(total_price);

    var total_option = $('#total_option').val();
    total_option = Number(total_option);

    var total_coupon = $('#total_coupon').val();
    total_coupon = Number(total_coupon);

    total_price += (total_option - total_coupon);

    $('.order-box .sl').html(sl)
    $('.order-box .gia').html($.number(total_price))
}


function datve_submit() {
    startSending()
    var showtime_id = $('#showtime_id').val();
    var total_price = $('#total_price').val();

    var content = $('.order-note').val();
    var total_option = $('#total_option').val();
    var total_coupon = $('#total_coupon').val();
    var order_code = $('#order_code').val();
    var coupon_id = $('#coupon_id').val();

    var quantity = $('.danhsachghe .item.active').length;
    var options = [];
    var key_ghe = [];
    $('.danhsachghe .item.active').each(function () {
        key_ghe.push($(this).attr('data-key'));
    })

    $('.option-list .item').each(function () {
        var id = $(this).find('.option-id').val();
        var quantity = $(this).find('.quantity').val();

        options.push({
            id: id,
            quantity: quantity,
        });
    })

    var showtime_id = $('#showtime_id').val();

    if (showtime_id == '' || showtime_id == undefined) {
        Swal.fire('Có lôi xảy ra', '', "error");
    }
    if (quantity == 0) {
        Swal.fire('Vui lòng chọn ghế', '', "warning");
    }
    total_price = Number(total_price) + Number(total_option) - Number(total_coupon);
    var data = {
        key_ghe: key_ghe,
        total_price: total_price,
        content: content,
        quantity: quantity,
        showtime_id: showtime_id,
        options: options,
        coupon_discount: total_coupon,
        code: order_code,
        coupon_id: coupon_id,
    };
    // data = JSON.stringify(data);
    console.log(data);
    $('#modal-thanhtoan').modal('hide');
    // return false;
    //@todo: push ajax
    $.ajax({
        headers: {
            'X-CSRF-Token': csrfToken
        },
        url: DAT_VE,
        data: data,
        type: 'post',
        dataType: 'json',
        success: function (d) {
            // d = JSON.parse(d);
            console.log(d);
            if (d.res == 'done') {
                Swal.fire("Đã đặt vé thành công, Quản trị sẽ liên lạc sớm lại cho bạn", '', "success").then(function () {
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

function add_option(self) {

    var total_price = $('#total_price').val();
    if (Number(total_price) == 0) {
        alert('Vui lòng chọn ghế trước!')
        return false;
    }

    var id = $(self).attr('data-id');
    if ($('.option-list').find(`.item-${id}`).length !== 0) {
        return false;
    }

    var parent = $(self).closest('.order-option-item');
    var img = parent.find('.img').html();
    var title = parent.find('h4').html();
    var price_txt = parent.find('.price').html();
    var price = $(self).attr('data-price');

    var html = `<div class="item item-${id}">
                    ${img}
                    <div class="content">
                        <h4>${title}</h4>
                        <div class="price">
                            ${price_txt}
                        </div>
                        <div class="d-flex">
                            <input type="number" data-price="${price}" onchange="option_change(this)" class="quantity"
                                value="1" min="1">
                            <input type="hidden" class="option-id" value="${id}">
                            <span class="delete" onclick="delete_option(this)">Xóa</span>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>`;

    $('.option-list').append(html)
    option_change();
}

function delete_option(self) {

    var parent = $(self).closest('.item').remove();
    option_change();

}
function option_change(self = undefined) {

    var total_option = 0;
    $('.option-list .item').each(function (e) {
        var self = $(this).find('.quantity');
        var val = $(self).val();
        var price = $(self).attr('data-price');
        var total = val * price;
        total_option += total;
    })

    console.log(total_option);

    $('#total_option').val(total_option);
    var total_price = $('#total_price').val();
    var total_coupon = $('#total_coupon').val();

    total_price = Number(total_price) + total_option - Number(total_coupon);

    $('.order-box .gia').html($.number(total_price))

}

function show_modal_thanhtoan() {
    // check neu chua dat ve 

    var quantity = $('.danhsachghe .item.active').length;
    if (quantity == 0) {
        Swal.fire('Vui lòng chọn ghế', '', "warning");
        return false;
    }
    $('#modal-thanhtoan').modal('show');
}


function sent_commnet() {
    var node_id = $('.form-comment').find('.node_id').val();
    var email = $('.form-comment').find('.email').val();
    var fullname = $('.form-comment').find('.fullname').val();
    var content = $('.form-comment').find('.content').val();
    var phone = $('.form-comment').find('.phone').val();
    if (fullname == '' || fullname == undefined) {
        Swal.fire("Vui lòng nhập tên của bạn", '', "warning");
        return false;
    }
    if (email == '' || email == undefined) {
        Swal.fire("Vui lòng nhập email", '', "warning");
        return false;
    }
    if (phone == '' || phone == undefined) {
        Swal.fire("Vui lòng nhập số điện thoại", '', "warning");
        return false;
    }
    if (content == '' || content == undefined) {
        Swal.fire("Vui lòng nhập nội dung", '', "warning");
        return false;
    }
    var data = {
        email: email,
        phone: phone,
        fullname: fullname,
        content: content,
        node_id: node_id
    };
    // data = JSON.stringify(data);
    console.log(data);
    console.log(AJAX + 'ajax_comment');
    //@todo: push ajax
    startSending()
    $.ajax({
        headers: {
            'X-CSRF-Token': csrfToken
        },
        url: AJAX + 'ajax_comment',
        data: data,
        type: 'post',
        dataType: 'html',
        success: function (d) {
            d = JSON.parse(d);
            console.log(d);
            if (d.res == 'done') {
                Swal.fire(d.msg, '', "success").then(function () {
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

function addFeedback() {
    var email = $('#form-contact').find('.email').val();
    var fullname = $('#form-contact').find('.fullname').val();
    var content = $('#form-contact').find('.content').val();
    var phone = $('#form-contact').find('.phone').val();
    if (fullname == '' || fullname == undefined) {
        Swal.fire("Vui lòng nhập tên của bạn", '', "warning");
        return false;
    }
    if (email == '' || email == undefined) {
        Swal.fire("Vui lòng nhập email", '', "warning");
        return false;
    }
    if (phone == '' || phone == undefined) {
        Swal.fire("Vui lòng nhập số điện thoại", '', "warning");
        return false;
    }
    if (content == '' || content == undefined) {
        Swal.fire("Vui lòng nhập nội dung", '', "warning");
        return false;
    }

    var data = {
        email: email,
        phone: phone,
        fullname: fullname,
        content: content,
    };

    // data = JSON.stringify(data);
    console.log(data);
    console.log(AJAX + 'ajax_contact');
    //@todo: push ajax
    startSending()
    $.ajax({
        headers: {
            'X-CSRF-Token': csrfToken
        },
        url: AJAX + 'ajax_contact',
        data: data,
        type: 'post',
        dataType: 'html',
        success: function (d) {
            d = JSON.parse(d);
            console.log(d);
            if (d.res == 'done') {
                Swal.fire(d.msg, '', "success").then(function () {
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


$('.show-modal-coupon').click(function () {
    var quantity = $('.danhsachghe .item.active').length;
    if (quantity == 0) {
        Swal.fire('Vui lòng chọn ghế', '', "warning");
        return false;
    }
    $('#modal-coupon').modal('show');

})

function add_coupon(self) {

    $('.coupon-wrap').removeClass('hide');
    var total_price = $('#total_price').val();
    var total_option = $('#total_option').val();

    total_price = Number(total_price);
    total_option = Number(total_option);

    var price_discout = $(self).attr('data-price');

    if (Number(price_discout) == 0) {
        price_discout = $(self).attr('data-percent');
        price_discout = (price_discout / 100) * (total_price + total_option);
    }
    $('#total_coupon').val(price_discout);
    $('.coupon-discout').html($.number(price_discout));
    $('.order-box .gia').html($.number((total_price + total_option) - Number(price_discout)));

    var title = $(self).attr('data-title');
    var id = $(self).attr('data-id');
    $('.coupon-remove').removeClass('hide');
    $('.coupon-name').html(title);
    $('#coupon_id').val(id);
    $('#modal-coupon').modal('hide');
}
$('.coupon-remove').click(function () {
    $('.coupon-name').addClass('hide');
    $('.coupon-name').html('');
    $('#total_coupon').val(0);
    $('#coupon_id').val(0);
    total_price = Number(total_price);
    total_option = Number(total_option);
    $('.order-box .gia').html($.number((total_price + total_option)));
})