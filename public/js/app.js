
const modal_datve = $('#order-film');
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
    $('.order-box .sl').html(sl)
    $('.order-box .gia').html($.number(total_price))
    $('#total_price').val(total_price);
}


function datve_submit() {
    startSending()
    var showtime_id = $('#showtime_id').val();
    var total_price = $('#total_price').val();
    var quantity = $('.danhsachghe .item.active').length;
    var key_ghe = [];
    $('.danhsachghe .item.active').each(function () {
        key_ghe.push($(this).attr('data-key'));
    })


    var showtime_id = $('#showtime_id').val();

    if (showtime_id == '' || showtime_id == undefined) {
        Swal.fire('Có lôi xảy ra', '', "error");
    }
    if (quantity == 0) {
        Swal.fire('Vui lòng chọn ghế', '', "warning");
    }

    var data = {
        key_ghe: key_ghe,
        total_price: total_price,
        quantity: quantity,
        showtime_id: showtime_id,
    };
    // data = JSON.stringify(data);
    console.log(data);
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