function startSending() {
    is_sending = true;
    $('body').css('cursor', 'not-allowed');
}

function endSending() {
    is_sending = false;
    $('body').css('cursor', 'auto');
}

function validateEmail(email) {
    const emailRegex = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
    return emailRegex.test(email);
}