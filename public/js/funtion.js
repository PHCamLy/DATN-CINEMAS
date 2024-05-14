function startSending() {
    is_sending = true;
    $('body').css('cursor', 'not-allowed');
}

function endSending() {
    is_sending = false;
    $('body').css('cursor', 'auto');
}

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