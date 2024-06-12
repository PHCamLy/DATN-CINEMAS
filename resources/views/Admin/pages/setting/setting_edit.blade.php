@extends('Admin.layouts.layout')

@section('title', 'Chỉnh sửa media')

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
                            <h4 class="mb-sm-0 font-size-18">Chỉnh sửa
                                <?php echo $label; ?>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-4">
                                    <label class="col-form-label col-lg-2">Giá vé chênh lệch theo ngày (%)</label>
                                    <div class="col-lg-10">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <label class="col-form-label mb-2">Chủ nhật</label>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <div class="col-sm-2">
                                                                        <label class="col-form-label p-0 mb-2">
                                                                            Ban ngày
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="input-group mb-2">
                                                                            <input class="form-control" type="number"
                                                                                name="data[<?php echo $alias; ?>][showtime][0][ngay]"
                                                                                value="<?php echo $data['showtime'][0]['ngay'] ?>">
                                                                            <span class="input-group-text">
                                                                                %
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <div class="col-sm-2">
                                                                        <label class="col-form-label p-0 mb-2">
                                                                            Ban đêm
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="input-group">
                                                                            <input class="form-control" type="number"
                                                                                name="data[<?php echo $alias; ?>][showtime][0][dem]"
                                                                                value="<?php echo $data['showtime'][0]['dem'] ?>">
                                                                            <span class="input-group-text">
                                                                                %
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="col-form-label mb-2">Thứ 2</label>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <div class="col-sm-2">
                                                                        <label class="col-form-label p-0 mb-2">
                                                                            Ban ngày
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="input-group mb-2">
                                                                            <input class="form-control" type="number"
                                                                                name="data[<?php echo $alias; ?>][showtime][1][ngay]"
                                                                                value="<?php echo $data['showtime'][1]['ngay'] ?>">
                                                                            <span class="input-group-text">
                                                                                %
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <div class="col-sm-2">
                                                                        <label class="col-form-label p-0 mb-2">
                                                                            Ban đêm
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="input-group">
                                                                            <input class="form-control" type="number"
                                                                                name="data[<?php echo $alias; ?>][showtime][1][dem]"
                                                                                value="<?php echo $data['showtime'][1]['dem'] ?>">
                                                                            <span class="input-group-text">
                                                                                %
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="col-form-label mb-2">Thứ 3</label>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <div class="col-sm-2">
                                                                        <label class="col-form-label p-0 mb-2">
                                                                            Ban ngày
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="input-group mb-2">
                                                                            <input class="form-control" type="number"
                                                                                name="data[<?php echo $alias; ?>][showtime][2][ngay]"
                                                                                value="<?php echo $data['showtime'][2]['ngay'] ?>">
                                                                            <span class="input-group-text">
                                                                                %
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <div class="col-sm-2">
                                                                        <label class="col-form-label p-0 mb-2">
                                                                            Ban đêm
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="input-group">
                                                                            <input class="form-control" type="number"
                                                                                name="data[<?php echo $alias; ?>][showtime][2][dem]"
                                                                                value="<?php echo $data['showtime'][2]['dem'] ?>">
                                                                            <span class="input-group-text">
                                                                                %
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="col-form-label mb-2">Thứ 4</label>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <div class="col-sm-2">
                                                                        <label class="col-form-label p-0 mb-2">
                                                                            Ban ngày
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="input-group mb-2">
                                                                            <input class="form-control" type="number"
                                                                                name="data[<?php echo $alias; ?>][showtime][3][ngay]"
                                                                                value="<?php echo $data['showtime'][3]['ngay'] ?>">
                                                                            <span class="input-group-text">
                                                                                %
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <div class="col-sm-2">
                                                                        <label class="col-form-label p-0 mb-2">
                                                                            Ban đêm
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="input-group">
                                                                            <input class="form-control" type="number"
                                                                                name="data[<?php echo $alias; ?>][showtime][3][dem]"
                                                                                value="<?php echo $data['showtime'][3]['dem'] ?>">
                                                                            <span class="input-group-text">
                                                                                %
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="col-form-label mb-2">Thứ 5</label>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <div class="col-sm-2">
                                                                        <label class="col-form-label p-0 mb-2">
                                                                            Ban ngày
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="input-group mb-2">
                                                                            <input class="form-control" type="number"
                                                                                name="data[<?php echo $alias; ?>][showtime][4][ngay]"
                                                                                value="<?php echo $data['showtime'][4]['ngay'] ?>">
                                                                            <span class="input-group-text">
                                                                                %
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <div class="col-sm-2">
                                                                        <label class="col-form-label p-0 mb-2">
                                                                            Ban đêm
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="input-group">
                                                                            <input class="form-control" type="number"
                                                                                name="data[<?php echo $alias; ?>][showtime][4][dem]"
                                                                                value="<?php echo $data['showtime'][4]['dem'] ?>">
                                                                            <span class="input-group-text">
                                                                                %
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="col-form-label mb-2">Thứ 6</label>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <div class="col-sm-2">
                                                                        <label class="col-form-label p-0 mb-2">
                                                                            Ban ngày
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="input-group mb-2">
                                                                            <input class="form-control" type="number"
                                                                                name="data[<?php echo $alias; ?>][showtime][5][ngay]"
                                                                                value="<?php echo $data['showtime'][5]['ngay'] ?>">
                                                                            <span class="input-group-text">
                                                                                %
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <div class="col-sm-2">
                                                                        <label class="col-form-label p-0 mb-2">
                                                                            Ban đêm
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="input-group">
                                                                            <input class="form-control" type="number"
                                                                                name="data[<?php echo $alias; ?>][showtime][5][dem]"
                                                                                value="<?php echo $data['showtime'][5]['dem'] ?>">
                                                                            <span class="input-group-text">
                                                                                %
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="col-form-label mb-2">Thứ 7</label>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <div class="col-sm-2">
                                                                        <label class="col-form-label p-0 mb-2">
                                                                            Ban ngày
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="input-group mb-2">
                                                                            <input class="form-control" type="number"
                                                                                name="data[<?php echo $alias; ?>][showtime][6][ngay]"
                                                                                value="<?php echo $data['showtime'][6]['ngay'] ?>">
                                                                            <span class="input-group-text">
                                                                                %
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <div class="col-sm-2">
                                                                        <label class="col-form-label p-0 mb-2">
                                                                            Ban đêm
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="input-group">
                                                                            <input class="form-control" type="number"
                                                                                name="data[<?php echo $alias; ?>][showtime][6][dem]"
                                                                                value="<?php echo $data['showtime'][6]['dem'] ?>">
                                                                            <span class="input-group-text">
                                                                                %
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
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
    $('#price-option').change(function () {
        var val = $(this).val();
        if (val == 1) {
            $('.price').val(0);
            $('.price').addClass('d-none');
            $('.percent').removeClass('d-none');
        } else {
            $('.percent').val(0);
            $('.percent').addClass('d-none');
            $('.price').removeClass('d-none');
        }
    })
</script>
@stop