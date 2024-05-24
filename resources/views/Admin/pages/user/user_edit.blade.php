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
                                    <label class="col-form-label col-lg-2">Tên</label>
                                    <div class="col-lg-10">
                                        <input name="data[<?php echo $alias; ?>][fullname]" type="text"
                                            class="form-control" value="<?php echo $data['fullname']?>" required
                                            placeholder="Tên <?php echo $label; ?>...">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-form-label col-lg-2">Số điện thoại</label>
                                    <div class="col-lg-10">
                                        <input name="data[<?php echo $alias; ?>][phone]" class="form-control "
                                            value="<?php echo $data['phone']; ?>" required placeholder="">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-form-label col-lg-2">Email</label>
                                    <div class="col-lg-10">
                                        <input type="email" name="data[<?php echo $alias; ?>][email]"
                                            class="form-control " value="<?php echo $data['email']?>" required
                                            placeholder="">
                                    </div>
                                </div>
                                <?php	 /* 	 ?>
                                <div class="row mb-4">
                                    <label class="col-form-label col-lg-2">Tên đăng nhập</label>
                                    <div class="col-lg-10">
                                        <input name="data[<?php echo $alias; ?>][username]" min="0"
                                            class="form-control " value="<?php echo $data['username'] ?>" required
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-form-label col-lg-2">Mật khẩu</label>
                                    <div class="col-lg-10">
                                        <input type="password" name="data[<?php echo $alias; ?>][password]" min="0"
                                            class="form-control " value="<?php echo $data['password']; ?>" required
                                            placeholder="">
                                    </div>
                                </div> */ ?>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-12">
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
                                            <?php	if($data['image'] != ''){  	 ?>
                                            <?php	 }else{ 	 ?>
                                            <div class="dz-message needsclick hide">

                                                <div class="mb-3">
                                                    <i class="display-4 text-muted bx bxs-cloud-upload"
                                                        onclick="upload_images();"></i>
                                                </div>

                                                <h4 onclick="upload_images();">Upload hình ảnh.</h4>
                                            </div>
                                            <?php	 } 	 ?>
                                            <div class="images-preview">
                                                <?php	if($data['image'] != ''){  	 ?>
                                                <div class="dz-preview dz-item-images-0">
                                                    <div class="dz-image">
                                                        <img src="<?php echo $data['image']; ?>" />
                                                    </div>
                                                    <div class="dz-details">
                                                        <div class="dz-size">
                                                            <a href="javascript:;"
                                                                onclick="remove_image('dz-item-images-0');">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
                                                        </div>
                                                        <div class="dz-filename"><a href="<?php echo $data['image']; ?>"
                                                                target="_blank"></a>
                                                            <?php echo $data['image']; ?>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" class="images" name="data[images][0]"
                                                        value="<?php echo $data['image']; ?>" />
                                                </div>
                                                <?php	 } 	 ?>
                                            </div>
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