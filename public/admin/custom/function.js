// tạo ra các hàm dùng chung


var current_dz_preview = '';
var current_tag = '';
var is_image_modul = false;
var modul_imag_parent = undefined;
var is_file = false;


file_image.change(function () {
    var id = $(this).attr('id');
    var filedata = $('#file')[0].files;
    var n = filedata.length;
    console.log(filedata);
    console.log(UPLOAD_API_URL + 'uploads');
    LOADING.removeClass('d-none');
    for (var i = 0; i < n; i++) {
        var fd = new FormData();
        fd.append('file', filedata[i]);
        // fd.append("token", TOKEN);

        $.ajax({
            headers: {
                'X-CSRF-Token': csrfToken
            },
            url: UPLOAD_API_URL + 'uploads',
            async: false,
            type: 'post',
            dataType: 'json',
            data: fd,
            contentType: false,
            processData: false,
            success: function (d) {
                console.log(d);
                if (d.res == 'done') {
                    var img = d.data;
                    img = DOMAIN + img;
                    if (is_image_modul == false) {
                        $(current_tag + ' #images-preview' + current_dz_preview + ' .images-preview').append(build_dz_item(img, current_tag));
                        $(current_tag + ' #images-preview' + current_dz_preview + ' .dz-message').addClass('d-none');
                    } else {
                        if (modul_imag_parent != undefined) {
                            modul_imag_parent.find('input').val(img);
                            var html = ' <a href="' + img + '" target="_blank"> <img src="' + img + '" alt="">  </a>';
                            modul_imag_parent.find('.image-wrap').html(html);
                        }
                    }
                }
            },
            error: function (err) {
                console.log(err.responseText);
                send_comment = false;
            }
        });
    }
    LOADING.addClass('d-none');
});

function build_dz_item(img, ctag = '') {
    var file_num = parseInt($(ctag + ' #images-preview' + current_dz_preview).data('count'));
    file_num = file_num + 1;
    // dz_preview.attr('data-count', file_num);
    $(ctag + ' #images-preview' + current_dz_preview).data('count', file_num);

    var ima = img.split('/');
    var name = ima[ima.length - 1];

    var push_class = 'images';
    if (current_dz_preview != '') {
        push_class = push_class + '_' + current_dz_preview;
    }

    console.log(push_class);

    var thumb_src = img;

    var str = `
        ${is_file == true ? '<div class="files-preview">' : ''}
        <div class="dz-preview dz-item-${push_class}-${file_num}">
            <div class="dz-image">
                <img src="${thumb_src}" />
            </div>
            <div class="dz-details">
                <div class="dz-size">
                    <a href="javascript:;" onclick="remove_image(\'dz-item-${push_class}-${file_num}\');">
                        <i class="fas fa-trash"></i>
                    </a>
                </div>
                <div class="dz-filename"><a href="${img}" target="_blank">${name}</a></div>
            </div>
            <input type="hidden" class="images" name="data[${push_class}][${file_num}]" value="${img}" />
        </div>
        ${is_file == true ? '</div>' : ''}

    `;
    console.log(str);
    is_file = false;
    return str;
}

function upload_images(type = '', tag = '', self = undefined, files = false) {
    current_dz_preview = type;
    if (tag !== '') {
        current_tag = '#' + tag;
    }
    if (self != undefined) {
        is_image_modul = true;
        modul_imag_parent = $(self).closest('.modul-images');
    } else {
        is_image_modul = false;
        modul_imag_parent = undefined;
    }
    if (files == true) {
        is_file = true;
    }
    // console.log(is_file);
    file_image.click();
}

function remove_image(cls, ctag = '') {
    if (ctag !== '') {
        $(`#${ctag} .${cls}`).remove();

    } else {
        $('.' + cls).remove();
    }
}


function call_ajax(url, data, success_callback, fail_callback) {
    $.ajax({
        headers: {
            'X-CSRF-Token': csrfToken
        },
        url: url,
        type: 'post',
        data: {
            token: TOKEN,
            data: data,
        },
        dataType: 'json',
        success: function (res) {
            console.log(res);
            if (res.res == 'done') success_callback
            else fail_callback;
        },
        error: function (err) {
            console.log(err);
            fail_callback;
        }
    });
}

function startSending() {
    is_sending = true;
    $('body').css('cursor', 'not-allowed');
}

function endSending() {
    is_sending = false;
    $('body').css('cursor', 'auto');
}


function initEditor(id) {
    if ($(`#${id}`).length > 0) {
        tinymce.init({
            selector: `textarea#${id}`,
            height: 300,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
            style_formats: [
                { title: 'Bold text', inline: 'b' },
                { title: 'Red text', inline: 'span', styles: { color: '#ff0000' } },
                { title: 'Red header', block: 'h1', styles: { color: '#ff0000' } },
                { title: 'Example 1', inline: 'span', classes: 'example1' },
                { title: 'Example 2', inline: 'span', classes: 'example2' },
                { title: 'Table styles' },
                { title: 'Table row 1', selector: 'tr', classes: 'tablerow1' }
            ]
        });
    }
}

function setEditorContent(id, content) {
    tinymce.get(id).setContent(content);
}

function getEditorContent(id) {
    return tinymce.get(id).getContent();
}

function calculateDoneTaskDetail(task) {
    let percent = 0;
    if (task.hasOwnProperty('wkfl_task_detail')) {
        let total = 0;
        let done = 0;
        for (item in task.wkfl_task_detail) {
            total = total + 1;
            if (task.wkfl_task_detail[item].status == 1) {
                done = done + 1;
            }
        }
        if (total !== 0) {
            percent = Math.round(done * 100 / total);
        }
    }
    setTaskProgressBar(percent);
}



function call_ajax(url, data, success_callback, fail_callback) {
    console.log(data);
    $.ajax({
        headers: {
            'X-CSRF-Token': csrfToken
        },
        url: url,
        type: 'post',
        data: { data },
        dataType: 'json',
        success: function (res) {
            console.log(res);
            if (res.res == 'done') success_callback(res)
            else fail_callback(res);
        },
        error: function (err) {
            console.log(err);
            fail_callback(res);
        }
    });
}

function buildDataSendFromForm(form, has_image = false) {
    let serialize = form.serializeArray();
    let data_send = {};
    if (has_image) {
        data_send['images'] = '';
    }
    serialize.forEach(item => {
        if (has_image && item.name.includes('data[images]') && typeof item.value === 'string') {
            data_send['images'] += item.value + ',';
        } else {
            data_send[item.name] = item.value;
        }
    });
    console.log(data_send);
    return data_send;
}

function slm_remove_item(cls, str, MODULE) {
    Swal.fire({
        title: 'Thông báo',
        text: 'Bạn có chắc muốn xóa không?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: "#34c38f",
        cancelButtonColor: "#f46a6a",
    }).then(confirmed => {
        if (confirmed.isConfirmed) {
            let url = DOMAIN + 'accounting/' + MODULE + '/' + MODULE + '_ajax';

            let data = {
                token: str,
            }

            data = JSON.stringify(data);

            let successCallback = (res) => {
                Swal.fire('Đã xóa thành công', 'success');
                $(`.${cls}`).remove();
            }

            let failCallback = (res) => {
                Swal.fire('Thông báo', res.msg ? res.msg : 'Xóa thất bại', 'error');
            }

            call_ajax(url, data, successCallback, failCallback);
        }
    })
}