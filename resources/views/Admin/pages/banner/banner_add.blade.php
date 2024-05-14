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
                            <h4 class="mb-sm-0 font-size-18">Thêm mới Media</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Thêm mới</h4>
                                <div class="row mb-4">
                                    <label class="col-form-label col-lg-2">Tiêu đề</label>
                                    <div class="col-lg-10">
                                        <input name="data[<?php echo $alias; ?>][title]" type="text"
                                            class="form-control" required placeholder="Tên Media...">
                                    </div>
                                </div>
                                <div class="row mb-4 ">
                                    <label class="col-form-label col-lg-2">Liên kết</label>
                                    <div class="col-lg-10">
                                        <input name="data[<?php echo $alias; ?>][link]" type="text" class="form-control"
                                            placeholder="Nhập link đầy đủ. Ví dụ: https://DOMAIN/xyz.html">
                                    </div>
                                </div>
                                <div class="row mb-4 ">
                                    <label class="col-form-label col-lg-2">Kiểu</label>
                                    <div class="col-lg-3">
                                        <select name="data[<?php echo $alias; ?>][type]" class="form-control select2"
                                            data-placeholder="Media">
                                            <option value="#">Chọn Kiểu</option>
                                            <?php	 foreach($banner_types as $k => $v) { 	 ?>
                                            <option value="<?php echo $k; ?>">
                                                <?php	 echo $v 	 ?>
                                            </option>
                                            <?php	 } 	 ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-form-label col-lg-2">Mô tả</label>
                                    <div class="col-lg-10">
                                        <textarea name="data[<?php echo $alias; ?>][description]" class="form-control"
                                            rows="3" placeholder="Mô tả Media..."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Hình ảnh</h4>
                                <div class="col-sm-12">
                                    <div class="c" id="images-preview" data-count="0">
                                        <div class="dropzone">
                                            <div class="fallback">
                                                <span class="btn btn-info btn-sm" onclick="upload_images();">Thêm
                                                    ảnh &nbsp;
                                                    <i class="fas fa-plus-circle"></i></span>
                                            </div>
                                            <div class="dz-message needsclick hide">
                                                <div class="mb-3">
                                                    <i class="display-4 text-muted bx bxs-cloud-upload"
                                                        onclick="upload_images();"></i>
                                                </div>
                                                <h4 onclick="upload_images();">Upload hình ảnh.</h4>
                                            </div>
                                            <div class="images-preview"></div>
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