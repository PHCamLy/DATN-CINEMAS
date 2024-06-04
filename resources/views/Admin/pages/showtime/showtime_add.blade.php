@extends('Admin.layouts.layout')

@section('title', 'Thêm mới media')

{{-- impoort thư viện css --}}
@section('style-libraries')

@stop


@section('content')
<div class="main-content">
    <form class="form-data" method="post">
        @csrf
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Thêm mới
                                <?php echo $label; ?>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Thêm mới</h4>
                                <div class="row mb-4">
                                    <label class="col-form-label col-lg-2">Rạp chiếu</label>
                                    <div class="col-lg-10">
                                        <select class="form-select" name="data[<?php echo $alias; ?>][branch_id]"
                                            id="branchs" required>
                                            <option value="">---- Chọn rạp chiếu ---- </option>
                                            <?php	 if(isset($branch_list)) { 	 ?>
                                            <?php	 foreach($branch_list as $k => $v) { 	 ?>
                                            <option value="<?php echo $k; ?>">
                                                <?php echo $v;?>
                                            </option>
                                            <?php	 } 	 ?>
                                            <?php	 } 	 ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-form-label col-lg-2">Phòng chiếu</label>
                                    <div class="col-lg-10">
                                        <select class="form-select" name="data[<?php echo $alias; ?>][room_id]"
                                            id="rooms" required>
                                            <option value="">---- Chọn phòng chiếu ---- </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-form-label col-lg-2">Film</label>
                                    <div class="col-lg-10">
                                        <select class="select2 form-control" name="data[<?php echo $alias; ?>][node_id]"
                                            id="" required>
                                            <option value="0">---- Chọn film ---- </option>
                                            <?php foreach($film_list as $k => $v){ ?>
                                            <option value="<?php echo $k ?>">
                                                <?php	 echo $v; 	 ?>
                                            </option>
                                            <?php	 } 	 ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-form-label col-lg-2">Giá vé</label>
                                    <div class="col-lg-10">
                                        <input name="data[<?php echo $alias; ?>][price]" class="form-control number"
                                            value="" required placeholder="Giá vé ...">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-form-label col-lg-2">Ngày chiếu & giờ chiếu</label>
                                    <div class="col-lg-10">
                                        <input name="data[<?php echo $alias; ?>][time]" class="form-control datedtime"
                                            value="" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-wrap gap-2">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light btn-submit">
                                        Xác nhận
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@stop

{{-- impoort thư viện js--}}
@section('scripts')
<script>
    const get_room = DOMAIN + 'admin/showtime/get_room';
    $('#branchs').change(function () {
        // data = JSON.stringify(data);
        val = $(this).val();
        if (!Number(val)) {
            return false;
        }
        var data = {}
        console.log(data);
        //@todo: push ajax
        $.ajax({
            headers: {
                'X-CSRF-Token': csrfToken
            },
            url: get_room + '/' + val,
            data: data,
            type: 'post',
            dataType: 'html',
            success: function (d) {
                d = JSON.parse(d);
                console.log(d);
                if (d.res == 'done') {
                    var html = '<option value="0">---- Chọn phòng chiếu ---- </option>';
                    d.data.forEach(element => {
                        html += `<option value="${element.id}">${element.title}</option>`;
                    });
                    $('#rooms').html(html);
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
    })



</script>
@stop