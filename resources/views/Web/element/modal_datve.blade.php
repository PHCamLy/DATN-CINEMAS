<?php	 
    $time = time();
    $day_of_weak = [
    '0' => 'Chủ nhật',
    '1' => 'Thứ 2',
    '2' => 'Thứ 3',
    '3' => 'Thứ 4',
    '4' => 'Thứ 5',
    '5' => 'Thứ 6',
    '6' => 'Thứ 7',
    ];
   
?>

<div id="order-film" class=" modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="order-body">
                <div class="title">
                    <h3 class="current-time">
                        <?php	 echo  date('d-m-Y',$time);	 ?>
                    </h3>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <?php	 for($i = 0; $i < 7; $i++) { 
                                    $t = strtotime ( '+'. $i .' day' , $time ) ;
                                    $date = getdate($t);    
                                ?>
                            <th data-date="<?php echo date('d-m-Y',$t); ?>"
                                class="day-filter <?php echo $i == 0 ? 'active' : ''; ?> "
                                onclick="change_day_fill(this,'<?php echo date('d-m-Y',$t); ?>')">
                                <?php	 echo $day_of_weak[$date['wday']]; 	 ?>
                            </th>
                            <?php	 } 	 ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php	 if(isset($branch_list)) {
                            foreach($branch_list as $k => $v) { 	 ?>
                        <tr>
                            <td colspan="7">
                                <h3 class="rap-title" data-toggle="collapse" data-target="#list-<?php echo $k; ?>">
                                    <?php	 echo $v; 	 ?>
                                    <span class="expan">-></span>
                                </h3>
                                <div id="list-<?php echo $k ?>" class="showtime-list collapse">
                                    <div class="showtime-item">
                                        <a href="./order/add/">
                                            8:30
                                        </a>
                                    </div>
                                    <div class="showtime-item">
                                        8:30
                                    </div>
                                    <div class="showtime-item">
                                        8:30
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php	 } 	 ?>
                        <?php	 } 	 ?>
                    </tbody>
                </table>
                <input type="hidden" class="current-id" value="0">
            </div>
        </div>
    </div>
</div>