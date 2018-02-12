<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lab 4</title>
	<link href="https://fonts.googleapis.com/css?family=Pridi" rel="stylesheet">
	<style type="text/css">
		body{
			background-image: url("bg1.jpg");
			background-attachment: fixed;
		}
		body, form {
			font-family: Pridi;
		}
		.all {
			background-color: white;
			width: 70%;
			margin: 0 auto;
			display: block;
			overflow: auto;
			border-radius: 30px;
			border: 2px solid #c0c5ce;
		}
		input {
			height: 30px;
			font-size: 18px;
		}
		.btn-sub, .btn-sub1, .btn-sub2, .btn-sub3 {
			font-family: Pridi;
			font-size: 20px;
			background-color: #f44747;
			border: none;
		    color: white;
		    height: 50px;
		    width: 100px;
		    text-align: center;
		    text-decoration: none;
		    cursor: pointer;
		    margin: 20px;
		}
		.choise-ui {
			height: 50px;
		}
		.header {
			font-size: 50px;
			text-align: center;
			margin: 50px;
			color: #0e68ce;
			text-shadow: 3px 2px #bae1ff;
		}
		.bd {
			width: 80%;
			display: block;
			margin: 0 auto;
			padding: 30px;
			font-size: 25px;
		}
		.title-name {
			text-align: center;
			font-size: 30px;
		}
		.choise-ui {
			font-size: 20px;
			text-align: center;
		}
		.hight, .weight, .age, .activities, .ldl, .hdl, .tri{
			display: inline-block;
			margin: 20px 20px;
		}
		.activity {
			height: 30px;
			font-size: 18px;
		}
	</style>
</head>
<body>
	<div class="all">
	<div class="header">การคำนวณค่าทางสุขภาพ</div>
	<div class="bd">
		<form method="post" action="cal.php">
			<div class="choise-ui">
				<select class="choise-ui" name="choise" id="down1">
					<option selected="select" value="em" disabled="disabled">กรุณาเลือก...</option>
				  	<option value="bmi" id="bmi">คำนวณหาค่าดัชนีมวลกาย (BMI)</option>
				  	<option value="bmr" id="bmr">คำนวณการเผาผลาญพลังงาน (BMR)</option>
				  	<option value="col" id="col">คำนวณค่าคอเลสเตอรอลรวม</option>
				</select>
			</div>
			<div class="bmi-ui" action="cal.php">
				<h4 class="title-name">โปรแกรมคำนวณดัชนีมวลกาย Body Mass Index (BMI)</h4>
				<center>
					<p class="hight">ส่วนสูง/เซนติเมตร</p>
					<input type="number" class="hight" name="hight-1" value="">
					<br>
					<p class="weight">น้ำหนัก/กิโลกรัม&#160;&#160;</p>
					<input type="number" class="weight" name="weight-1" value="">
					<br>
					<input class="btn-sub1" type="submit" value="คำนวณ">
				</center>
			</div>
			<div class="bmr-ui">
				<h4 class="title-name">คำนวณการเผาผลาญพลังงาน Basal Metabolic Rate (BMR)</h4>
				<center>
					<input type="radio" name="gender-2" value="male" checked> Male<br>
			  		<input type="radio" name="gender-2" value="female"> Female<br>
			  		<p class="hight">ส่วนสูง/เซนติเมตร</p>
			  		<input type="number" class="hight" name="hight-2" value="">
			  		<br>
			  		<p class="weight">น้ำหนัก/กิโลกรัม&#160;&#160;</p>
					<input type="number" class="weight" name="weight-2" value="">
					<br>
					<p  class="age">อายุ/ปี&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;</p>
					<input type="number" class="age" name="age-2" value="">
					<br>
					<p class="activities">กิจกรรม</p>
					<div class="activities">
					    <select id="activity"  class="activity"   name="activity-2">
						<option selected="selected" value="0">ไม่ออกกำลังกายหรือออกกำลังกายน้อยมาก</option>
						<option value="1">ออกกำลังกายน้อยเล่นกีฬา 1-3 วัน/สัปดาห์</option>
						<option value="2">ออกกำลังกายปานกลางเล่นกีฬา 3-5 วัน/สัปดาห์</option>
						<option value="3">ออกกำลังกายหนักเล่นกีฬา 6-7 วัน/สัปดาห์</option>
						<option value="4">ออกกำลังกายหนักมากเป็นนักกีฬา</option>
						</select>    
					</div>
					<br>
					<input class="btn-sub2" type="submit" value="คำนวณ">
				</center>
			</div>
			<center>
				<div class="col-ui">
					<h4 class="title-name">คำนวณคอเลสเตอรอล</h4>
					<p class="ldl">ไขมันแอลดีแอล</p>
			  		<input type="number" class="ldl" name="ldl-3" value="">
			  		<br>
			  		<p class="hdl">ไขมันเอชดีแอล&#160;</p>
			  		<input type="number" class="hdl" name="hdl-3" value="">
			  		<br>
			  		<p class="tri">ไตรกลีเซอไรด์&#160;&#160;</p>
			  		<input type="number" class="tri" name="tri-3" value="">
			  		<br>
			  		<input class="btn-sub3" type="submit" value="คำนวณ">
				</div>
			</center>
		</form>
	</div></div>

	<script src="jquery-3.3.1.min.js" charset="utf-8"></script>
	
	<script type="text/javascript">
		function start() {
			$(".bmi-ui").hide();
			$(".bmr-ui").hide();
			$(".col-ui").hide();
		}
		start();
		$(function() {
			$(".choise-ui").change(function() {
				if($(this).val() == "bmi"){
					$(".bmi-ui").show();
					$(".bmr-ui").hide();
					$(".col-ui").hide();
				} else if ($(this).val() == "bmr"){
					$(".bmi-ui").hide();
					$(".bmr-ui").show();
					$(".col-ui").hide();
				} else if ($(this).val() == "col"){
					$(".bmi-ui").hide();
					$(".bmr-ui").hide();
					$(".col-ui").show();
				} else if ($(this).val() == "em"){
					$(".bmi-ui").hide();
					$(".bmr-ui").hide();
					$(".col-ui").hide();
				}
			});
		})


		
	</script>

</body>
</html>