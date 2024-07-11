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
                                <h4 class="card-title mb-4">Chỉnh sửa</h4>
                                <div class="row mb-4">
                                    <label class="col-form-label col-lg-2">Tiêu đề</label>
                                    <div class="col-lg-10">
                                        <input name="data[<?php echo $alias; ?>][title]" type="text"
                                            class="form-control" required placeholder="Tên <?php echo $label; ?>..."
                                            value="<?php echo $data['title']; ?>">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-form-label col-lg-2">Giờ bắt đầu</label>
                                    <div class="col-lg-10">
                                        <div class="input-group" id="timepicker-input-group" style="max-width: 200px;">
                                            <input id="timepicker" name="data[<?php echo $alias; ?>][time_start]"
                                                type="text" class="form-control" data-provide="timepicker"
                                                value="<?php echo $data['time_start']; ?>">
                                            <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-form-label col-lg-2">Giờ kết thúc</label>
                                    <div class="col-lg-10">
                                        <div class="input-group" id="timepicker-input-group2" style="max-width: 200px;">
                                            <input id="timepicker2" name="data[<?php echo $alias; ?>][time_end]"
                                                type="text" class="form-control" data-provide="timepicker"
                                                value="<?php echo $data['time_end']; ?>">
                                            <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
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

@stop