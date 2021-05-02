<?php
session_start();
if (!isset($_SESSION['Admin-name'])) {
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>RFTENDANCE | MANAGE USERS</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="icon" type="image/png" href="images/favicon.png">
	<link rel="stylesheet" type="text/css" href="css/manageusers.css">

    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.js"
	        integrity="sha1256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	        crossorigin="anonymous">
	</script>
    <script type="text/javascript" src="js/bootbox.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script src="js/manage_users.js"></script>
	<script>
	  	$(window).on("load resize ", function() {
		    var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
		    $('.tbl-header').css({'padding-right':scrollWidth});
		}).resize();
	</script>
	<script>
	  $(document).ready(function(){
	  	  $.ajax({
	        url: "manage_users_up.php"
	        }).done(function(data) {
	        $('#manage_users').html(data);
	      });
	    setInterval(function(){
	      $.ajax({
	        url: "manage_users_up.php"
	        }).done(function(data) {
	        $('#manage_users').html(data);
	      });
	    },5000);
	  });
	</script>
</head>
<body>
<?php include'header.php';?>
<main>
	<h1 class="slideInDown animated" style="margin-top: 50px!important;font-family: 'Kanit',sans-serif;">เพิ่ม / ลบ / แก้ไข ข้อมูลผู้ใช้</h1>
	<div class="form-style-5 slideInDown animated">
		<form enctype="multipart/form-data">
			<div class="alert_user"></div>
			<fieldset >
				<legend style="font-family: 'Kanit',sans-serif;"><span class="number">1</span>ข้อมูลผู้ใช้</legend>
				<input type="hidden" name="user_id" id="user_id">
				<input type="text" name="name" id="name" placeholder="ชื่อผู้ใช้" style="font-family: 'Kanit',sans-serif; font-size: 20px;">
				<input type="text" name="number" id="number" placeholder="รหัสนักศึกษา" style="font-family: 'Kanit',sans-serif; font-size: 20px;">
				<input type="email" name="email" id="email" placeholder="อีเมล" style="font-family: 'Kanit',sans-serif; font-size: 20px;">
			</fieldset>
			<fieldset>
			<legend style="font-family: 'Kanit',sans-serif; font-size: 20px;"><span class="number">2</span>ข้อมูลเพิ่มเติม</legend>
			<label>
				<label for="Device" ><b style="font-family: 'Kanit',sans-serif; font-size: 20px;">เลือกรายวิชา</b></label>
                    <select class="dev_sel" name="dev_sel" id="dev_sel" style="font-family: 'Kanit',sans-serif; font-size: 20px;color: #000;">
                      <option value="0" style="font-family: 'Kanit',sans-serif; font-size: 20px;color: #000;">ทุกรายวิชา</option>
                      <?php
                        require'connectDB.php';
                        $sql = "SELECT * FROM devices ORDER BY device_name ASC";
                        $result = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($result, $sql)) {
                            echo '<p class="error">SQL Error</p>';
                        } 
                        else{
                            mysqli_stmt_execute($result);
                            $resultl = mysqli_stmt_get_result($result);
                            while ($row = mysqli_fetch_assoc($resultl)){
                      ?>
                              <option style="font-family: 'Kanit',sans-serif; font-size: 20px;color: #000;" value="<?php echo $row['device_uid'];?>"><?php echo $row['device_dep']; ?></option>
                      <?php
                            }
                        }
                      ?>
                    </select>
				<input type="radio" name="gender" class="gender" value="หญิง">หญิง
	          	<input type="radio" name="gender" class="gender" value="ชาย" checked="checked">ชาย
	      	</label >
			</fieldset>
			<button type="button" name="user_add" class="user_add" style="font-family: 'Kanit',sans-serif; font-size: 18px;">เพิ่มผู้ใช้</button>
			<button type="button" name="user_upd" class="user_upd" style="font-family: 'Kanit',sans-serif; font-size: 18px;">อัพเดทผู้ใช้</button>
			<button type="button" name="user_rmo" class="user_rmo" style="font-family: 'Kanit',sans-serif; font-size: 18px;">ลบผู้ใช้</button>
		</form>
	</div>

	<!--User table-->
	<div class="section">
		
		<div class="slideInRight animated">
			<div id="manage_users"></div>
		</div>
	</div>
</main>
</body>
</html>