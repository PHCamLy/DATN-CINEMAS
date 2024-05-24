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
                                    <label class="col-form-label col-lg-2">Tiêu đề</label>
                                    <div class="col-lg-10">
                                        <input name="data[<?php echo $alias; ?>][title]" type="text"
                                            class="form-control" required placeholder="Tên <?php echo $label; ?>...">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-form-label col-lg-2">Danh mục</label>
                                    <div class="col-lg-10">
                                        <div>
                                            <select id="price-option" name="data[<?php echo $alias; ?>][categories][]"
                                                class="form-control select2" multiple required
                                                aria-placeholder="Chọn danh mục">
                                                <?php	 foreach($category_list as $k => $v) { 	 ?>
                                                <option value="<?php echo $k; ?>">
                                                    <?php	 echo $v; 	 ?>
                                                </option>
                                                <?php	 } 	 ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-form-label col-lg-2">Trạng thái</label>
                                    <div class="col-lg-10">
                                        <select id="price-option" name="data[<?php echo $alias; ?>][status]"
                                            class="form-select">
                                            <option value="1" selected>Kích hoạt</option>
                                            <option value="0">không kích hoạt</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-4">
                                    <label class="col-form-label col-lg-2">Mô tả</label>
                                    <div class="col-lg-10">
                                        <textarea name="data[<?php echo $alias; ?>][description]" class="form-control"
                                            rows="3" placeholder="Mô tả <?php echo $label; ?>..."></textarea>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-form-label col-lg-2">Nội dung</label>
                                    <div class="col-lg-10">
                                        <textarea name="data[<?php echo $alias; ?>][content]" class="form-control"
                                            rows="3" placeholder="Mô tả <?php echo $label; ?>..."></textarea>
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