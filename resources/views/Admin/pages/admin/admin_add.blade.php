@extends('Admin.layouts.layout')

@section('title', 'Chỉnh sửa media')

{{-- impoort thư viện css --}}
@section('style-libraries')

@stop
<?php	 
    
$lst = array();

foreach ($sidebar as $tabName => $tabData) {
	$is_allowed = 0;

	foreach ($tabData as $moduleName => $moduleData) {
		if (isset($moduleData['child'])) {
			$link = $moduleData['link'];

			$t = explode('/', $link);
			$pluginName_parent = $t[0];
			$pluginName_parent = str_replace('-','',$pluginName_parent);
			$action_first_parent = explode('_',$t[1]);
			
			$lst[$tabName][$moduleName]['has_child'] = 1;
			$lst[$tabName][$moduleName]['plugin'] = $pluginName_parent;
			$lst[$tabName][$moduleName]['action'] = end($action_first_parent);
			foreach ($moduleData['child'] as $child_menu_name => $child_menu_data) {
				
				$link = $child_menu_data['link'];

				$t = explode('/', $link);
				$pluginName = $t[0];
				$pluginName = str_replace('-','',$pluginName);
				$action_first = explode('_',$t[1]);

				$lst[$tabName][$moduleName][$child_menu_name] = array(
					'plugin' => $pluginName,
					'action' => end($action_first),
				);
				// }
			}
		} else {
			$link = $moduleData['link'];

			$t = explode('/', $link);
			$pluginName = $t[0];
			$pluginName = str_replace('-','',$pluginName);
			$action_first = explode('_',$t[1]);

			// if ($this->App->is_allowed($pluginName, $modules, $admin)) {
			$lst[$tabName][$moduleName] = array(
				'plugin' => $pluginName,
				'action' => end($action_first),
			);
			// }
		}
	}
}
?>
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
                    <div class="col-sm-8 col-md-4">
                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#home1" role="tab">
                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                    <span class="d-none d-sm-block">Thông tin cơ bản</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#profile1" role="tab">
                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                    <span class="d-none d-sm-block">Phân quyền</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="home1" role="tabpanel">
                        <div class="">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-4">Chỉnh sửa</h4>
                                            <div class="row mb-4">
                                                <label class="col-form-label col-lg-2">Tên</label>
                                                <div class="col-lg-10">
                                                    <input name="data[<?php echo $alias; ?>][fullname]" type="text"
                                                        class="form-control" value="" required
                                                        placeholder="Tên <?php echo $label; ?>...">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-form-label col-lg-2">Số điện thoại</label>
                                                <div class="col-lg-10">
                                                    <input name="data[<?php echo $alias; ?>][phone]"
                                                        class="form-control " value="" required placeholder="">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-form-label col-lg-2">Email</label>
                                                <div class="col-lg-10">
                                                    <input type="email" name="data[<?php echo $alias; ?>][email]"
                                                        class="form-control " value="" required placeholder="">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-form-label col-lg-2">Tên đăng nhập</label>
                                                <div class="col-lg-10">
                                                    <input name="data[<?php echo $alias; ?>][username]" min="0"
                                                        class="form-control " value="" required placeholder="">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-form-label col-lg-2">Mật khẩu</label>
                                                <div class="col-lg-10">
                                                    <input type="password" name="data[<?php echo $alias; ?>][password]"
                                                        min="0" class="form-control " value="" required placeholder="">
                                                </div>
                                            </div>
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
                                                            <span class="btn btn-info btn-sm"
                                                                onclick="upload_images();">Thêm
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
                                                        <div class="images-preview">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="profile1" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-rep-plugin">
                                    <div class="table-responsive mb-0" data-pattern="priority-columns">
                                        <table id="table-data" class="table table-data table-striped table-hover">
                                            <thead>
                                                <tr class="">
                                                    <th width='70'>STT</th>
                                                    <th>Tên module</th>
                                                    <th class="text-center" width='150'>Được xem</th>
                                                    <th class="text-center" width='150'>Thêm mới</th>
                                                    <th class="text-center" width='150'>Sửa</th>
                                                    <th class="text-center" width='150'>Xóa</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php	 foreach($lst as $k => $modul) {    
                                                    $i = 0;	 ?>
                                                <tr>
                                                    <td colspan="6"><b>
                                                            <?php echo $k?>
                                                        </b></td>
                                                </tr>
                                                <?php	 foreach($modul as $name => $v) {
                                                
                                                    $i++; 	 ?>
                                                <tr>
                                                    <td>
                                                        <?php	 echo $i; 	 ?>
                                                    </td>
                                                    <td>
                                                        <?php	 echo $name; 	 ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox"
                                                            name="data[<?php echo $alias; ?>][roles][]"
                                                            value="<?php echo $v['plugin'] . '_' . $v['action']; ?>"
                                                            class="isread roles">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox"
                                                            name="data[<?php echo $alias; ?>][roles][]"
                                                            value="<?php echo $v['plugin'] . '_add'; ?>"
                                                            class="isread roles">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox"
                                                            name="data[<?php echo $alias; ?>][roles][]"
                                                            value="<?php echo $v['plugin'] . '_edit'; ?>"
                                                            class="isread roles">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox"
                                                            name="data[<?php echo $alias; ?>][roles][]"
                                                            value="<?php echo $v['plugin'] . '_delete'; ?>"
                                                            class="isread roles">
                                                    </td>
                                                </tr>
                                                <?php 	 } 	 ?>
                                                <?php	 } 	 ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-wrap gap-2">
                                        <button type="submit"
                                            class="btn btn-primary waves-effect waves-light btn-submit">
                                            Xác nhận
                                        </button>
                                    </div>
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