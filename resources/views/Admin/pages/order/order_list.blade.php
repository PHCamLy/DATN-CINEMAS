@extends('Admin.layouts.layout')

@section('title', 'Danh sách ' . $label)

{{-- impoort thư viện css --}}
@section('style-libraries')

@stop
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="contaimer-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Quản trị
                            <?php echo $label; ?>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <form>
                                <div class="row hidden-xs filters-list-form">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-6 mb-3">
                                                <input class="form-control btn-search" type="search" id="search_key"
                                                    name="s" value="" placeholder="Từ khóa cần tìm...">
                                            </div>
                                            <?php	 /* 	 ?>
                                            <div class="col-sm-6 mb-3">
                                                <select id="treeview" name="cid" class="form-control select2">
                                                    <option value="">Loại Media...</option>
                                                    <?php	 foreach($branch_types as $k=>$v) {  	 ?>
                                                    <option value="<?php echo $k; ?>">
                                                        <?php	 echo $v; 	 ?>
                                                    </option>
                                                    <?php	 } 	 ?>
                                                </select>
                                            </div> */ ?>
                                        </div>
                                    </div>

                                </div>
                            </form>
                            <div class="table-rep-plugin">
                                <div class="table-responsive">
                                    <table id="table-data" class="table table-data table-striped table-hover">
                                        <thead class="table-light">
                                            <tr>
                                                <th width="50">Stt</th>
                                                <th class="text-center" width="80">
                                                    Mã vé
                                                </th>
                                                <th class="text-center" width="300">
                                                    Khách hàng
                                                </th>
                                                <th>Bộ film</th>
                                                <th width="150">Thông tin</th>
                                                <th>Đính kèm</th>
                                                <th width="150">Thời gian</th>
                                                <th class="text-center" width="150">
                                                    Ngày đặt
                                                </th>
                                                <th class="text-center" width="150">
                                                    Trạng thái
                                                </th>
                                                <th class="text-center" width="100">
                                                    Xóa
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php	 if(isset($data) && count($data) > 0) {
                                                $stt = 0;
                                                foreach($data as $v) { 	$stt++;
                                                ?>
                                            <tr>
                                                <td class="text-center">
                                                    <?php	 echo $stt; 	 ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php	 echo $v['code'];	 ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php	 echo $v['fullname']; 	 ?><br>
                                                    <?php	 echo $v['phone']; 	 ?><br>
                                                    <?php	 echo $v['email']; 	 ?>
                                                </td>
                                                <td>
                                                    <?php echo $v['node']['title']?>
                                                </td>
                                                <td>
                                                    <p>Rạp chiếu :
                                                        <b>
                                                            <?php echo $branch_list[$v['branch_id']]?>
                                                        </b>
                                                    </p>
                                                    <p>Phòng chiếu :
                                                        <b>
                                                            <?php echo $room_list[$v['showtime']['room_id']]?>
                                                        </b>
                                                    </p>
                                                    <p>Số vé: <b>
                                                            <?php echo $v['quantity']; ?>
                                                        </b>
                                                    </p>
                                                    <p>Giá tiền:
                                                        <b>
                                                            <?php echo number_format($v['cart_sum']); ?>
                                                        </b>
                                                    </p>
                                                </td>
                                                <td>
                                                    <?php	
                                                        if($v['extra'] != '') {
                                                            
                                                            $extra = json_decode($v['extra'],true);
                                                           
                                                            foreach($extra  as $e) {
                                                                echo $v['options'][$e['id']] .' <b> X '. $e['quantity'] .'</b><br>';
                                                            }

                                                        } 
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php echo date('d-m-Y H:i',$v['datetime']); ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php	 echo date('d-m-Y H:i',$v['created']);;	 ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php	 if($v['status'] == 0){ 	 ?>
                                                    <a class="btn  btn-sm" href="javascript:;"
                                                        onclick="update_field('<?php echo $DOMAIN . $link_update . $v['id']. '/status/' . 1;?>');">
                                                        <span class="icon-status newest-11">
                                                            <?php	 if($v['status'] == 1) { 	 ?>
                                                            <i class="fas fa-play"></i>
                                                            <?php	 }else {	 ?>
                                                            <i class="fas fa-pause"></i>
                                                            <?php	 } 	 ?>
                                                        </span>
                                                    </a>
                                                    <?php	 } else {	 ?>
                                                    <a class="text-success" href="javascript:;">
                                                        <i class="fas fa-play"></i>
                                                    </a>
                                                    <?php	 } 	 ?>
                                                </td>
                                                <td class="text-center">
                                                    <a class="btn  btn-sm" href="javascript:;"
                                                        onclick="remove_item('<?php echo $DOMAIN . $link_delete . $v['id'];?>');">
                                                        <span class="icon-status node-delete-53">
                                                            <i class="fas fa-trash"></i>
                                                        </span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php	 } 	 ?>
                                            <?php	 } 	 ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

{{-- impoort thư viện js--}}
@section('scripts')
<script>
    $('.select2').select2();
</script>
@stop