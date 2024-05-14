$('.select2').select2();
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