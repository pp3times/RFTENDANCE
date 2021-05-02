<div class="table-responsive-sm" style="max-height: 870px;"> 
  <table class="table">
    <thead class="table-primary">
      <tr>
        <th style="color: white;">หมายเลขบัตร</th>
        <th style="color: white;">ชื่อ</th>
        <th style="color: white;">เพศ</th>
        <th style="color: white;">รหัสประจำตัว</th>
        <th style="color: white;">วันที่</th>
        <th style="color: white;">รายวิชา</th>
      </tr>
    </thead>
    <tbody class="table-secondary">
    <?php
      //Connect to database
      require'connectDB.php';

        $sql = "SELECT * FROM users ORDER BY id DESC";
        $result = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($result, $sql)) {
            echo '<p class="error">SQL Error</p>';
        }
        else{
            mysqli_stmt_execute($result);
            $resultl = mysqli_stmt_get_result($result);
          if (mysqli_num_rows($resultl) > 0){
              while ($row = mysqli_fetch_assoc($resultl)){
      ?>
                  <TR>
                  	<TD style="background-color: #eee;font-family: sans-serif!important;"><?php  
                    		if ($row['card_select'] == 1) {
                    			echo "<span><i class='fas fa-check' title='The selected UID'></i></span>";
                    		}
                        $card_uid = $row['card_uid'];
                    	?>
                    	<form>
                    		<button type="button" class="select_btn" id="<?php echo $card_uid;?>" title="select this UID"  style="color: #000!important; "><?php echo $card_uid;?></button>
                    	</form>
                    </TD>
                  <TD style=" background-color: #eee; color: #000; font-size: 18px;"><?php echo $row['username'];?></TD>
                  <TD style=" background-color: #eee; color: #000; font-size: 18px;"><?php echo $row['gender'];?></TD>
                  <TD style=" background-color: #eee; color: #000; font-size: 18px;"><?php echo $row['serialnumber'];?></TD>
                  <TD style=" background-color: #eee; color: #000; font-size: 18px;"><?php echo $row['user_date'];?></TD>
                  <TD style=" background-color: #eee; color: #000; font-size: 18px;"><?php echo ($row['device_dep'] == "0") ? "All" : $row['device_dep'];?></TD>
                  </TR>
    <?php
            }   
        }
      }
    ?>
    </tbody>
  </table>
</div>