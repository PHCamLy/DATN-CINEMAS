$('.select2').select2();
$('.number').number(true, 0);
$('.dated').datetimepicker({
    format: 'd-m-Y',
    timepicker: false,
    scrollMonth: false
});
$('.datedtime').datetimepicker({
    format: 'd-m-Y H:i',
    timepicker: true,
    scrollMonth: false
});

$('.table-responsive').responsiveTable({
    // addDisplayAllBtn: 'btn btn-secondary',
    addDisplayAllBtn: false,
    addFocusBtn: false,
    i18n: {
        focus: 'Ă„ÂÄ‚Â¡nh dĂ¡ÂºÂ¥u',
        display: 'ChĂ¡Â»Ân cĂ¡Â»â„¢t',
        displayAll: 'Toàn bộ'
    },
});
function init_notify() {
    var d = $('#flash').val();
    console.log(d);
    if (d != '' && d != undefined) {
        d = JSON.parse(d);
        if (d.msg != '') {
            if (d.res == 'done') {
                Swal.fire(d.msg, '', "success");
            } else {
                Swal.fire(d.msg, '', "warning");
            }
        }
    }
}
init_notify()

$('#page-header-notifications-dropdown').click(function () {
    $(this).find('.badge').addClass('d-none')
})

$("#timepicker").timepicker(
    {
        showMeridian: !1, icons: { up: "mdi mdi-chevron-up", down: "mdi mdi-chevron-down" },
        appendWidgetTo: "#timepicker-input-group"
    }
)
$("#timepicker2").timepicker(
    {
        showMeridian: !1, icons: { up: "mdi mdi-chevron-up", down: "mdi mdi-chevron-down" },
        appendWidgetTo: "#timepicker-input-group2"
    }
)

setInterval(function () {
    const ajax_notify = DOMAIN + 'admin/ajax_notify';

    $.ajax({
        headers: {
            'X-CSRF-Token': csrfToken
        },
        url: ajax_notify,
        data: {},
        type: 'post',
        dataType: 'html',
        success: function (d) {
            d = JSON.parse(d);
            if (d.res == 'done') {
                var html = `<a href="${DOMAIN + d.data.link}" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="bx bxs-notification"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1" key="t-grammer">
                                            ${d.data.msg}
                                        </p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">
                                                ${d.data.created}
                                    </div>
                                </div>
                            </div>
                        </a>`;
                $('.notify-list').html(html + $('.notify-list').html());
                $(this).find('.badge').removeClass('d-none')
                Swal.fire('Thôngg báo', d.data.msg, "success");

            }
        },
        error: function (err) {
            console.log(err);
        },
    })
}, 2000)