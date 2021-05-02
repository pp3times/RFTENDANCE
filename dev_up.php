<?php 
session_start();
?>
<meta charset="UTF-8">
<div class="table-responsive">          
	<table class="table">
		<thead>
	      <tr>
	        <th>ผู้สอน</th>
	        <th>รายวิชา</th>
	        <th>UID</th>
	        <th>วันที่</th>
	        <th>โหมด</th>
	        <th>จัดการ</th>
	      </tr>
    	</thead>
    	<tbody>
			<?php  
		    	require'connectDB.php';
		    	$sql = "SELECT * FROM devices ORDER BY id DESC";
				$result = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($result, $sql)) {
				    echo '<p class="error">SQL Error</p>';
				} 
				else{
				    mysqli_stmt_execute($result);
				    $resultl = mysqli_stmt_get_result($result);
				    echo '<form action="" method="POST" enctype="multipart/form-data">';
					    while ($row = mysqli_fetch_assoc($resultl)){

					      	$radio1 = ($row["device_mode"] == 0) ? "checked" : "" ;
					      	$radio2 = ($row["device_mode"] == 1) ? "checked" : "" ;

					      	$de_mode = '<div class="mode_select">
					      	<input type="radio" id="'.$row["id"].'-one" name="'.$row["id"].'" class="mode_sel" data-id="'.$row["id"].'" value="0" '.$radio1.'/>
					                    <label for="'.$row["id"].'-one">ลงทะเบียนสมาชิกใหม่</label>
		                    <input type="radio" id="'.$row["id"].'-two" name="'.$row["id"].'" class="mode_sel" data-id="'.$row["id"].'" value="1" '.$radio2.'/>
					                    <label for="'.$row["id"].'-two">เช็คชื่อ</label>
					                    </div>';

					    	echo '<tr>
							        <td style="font-size: 20px; font-weight: 500; background-color: #aaa; color: black;">'.$row["device_name"].'</td>
							        <td style="font-size: 20px; font-weight: 500; background-color: #aaa; color: black;">'.$row["device_dep"].'</td>
							        <td style="font-size: 20px; font-weight: 500; background-color: #aaa; color: black;"><button type="button" class="dev_uid_up btn btn-warning" id="del_'.$row["id"].'" data-id="'.$row["id"].'" title="Update this device Token"><span class="glyphicon glyphicon-refresh"> </span></button>
							        	'.$row["device_uid"].'
							        </td>
							        <td style="font-size: 20px; font-weight: 500; background-color: #aaa; color: black;">'.$row["device_date"].'</td>
							        <td style="font-size: 20px; font-weight: 500; background-color: #aaa; color: black;">'.$de_mode.'</td>
							        <td style="font-size: 20px; font-weight: 500; background-color: #aaa; color: black;">
								    	<button type="button" class="dev_del btn btn-danger" id="del_'.$row["id"].'" data-id="'.$row["id"].'" title="Delete this device"><span class="glyphicon glyphicon-trash"></span></button>
								    </td>
							      </tr>';
					    }
				    echo '</form>';
				}
		    ?>
    	</tbody>
	</table>
</div>
<!-- <button type="button" class="dev_pro_up btn btn-info" id="del_'.$row["id"].'" data-id="'.$row["id"].'"  title="Change this device Project"><span class="glyphicon glyphicon-cog"> </span></button> -->