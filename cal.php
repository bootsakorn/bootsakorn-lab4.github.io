<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Pridi" rel="stylesheet">
	<style type="text/css">
		body{
			background-image: url("bg.jpg");
			background-image-size: 100%; 
			font-family: Pridi;
		}
		.all {
			background-color: white;
			border-radius: 50px;
			border: 2px solid gray;
			width: 60%;
			margin: 30px auto;
			display: block;
			padding: 30px;
		}
		.p1 {
			text-align: center;
			font-size: 30px;
			font-weight: bold;
		}
		h3 {
			text-align: center;
			font-size: 50px;
			font-weight: normal;
			text-decoration: underline;
			color: #eedc31;
		}
		.p3 {
			text-indent: 70px;
			font-size: 20px;
		}
		button {
			font-size: 20px;
			margin: 30px;
			background-color: #ff6f69;
			border: none;
		    color: white;
		    padding: 15px 32px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    cursor: pointer;
		}
		.p4, .p5 {
			text-align: center;
			font-size: 30px;
		}

		.p4 {
			color: #d62d20;
		}
		.p5 {
			color: #ffa700;
		}
		.p6 {
			text-align: center;
			font-size: 30px;
			color: #f44747;
		}
		.p7 {
			text-align: center;
			font-size: 25px;
			color: #f9d62e;
		}
	</style>
</head>
<body>
	<div class="all">
	<?php
		$type = $_POST["choise"];
		if ($type == "bmi") {
			$w = $_POST["weight-1"];
			$h = $_POST["hight-1"];
			$bmi = $w/(($h/100)*($h/100));
			echo('<p class = "p1">ดัชนีมวลกายของคุณ : '.$bmi.'</p>');
			if ($bmi>40){
				echo ("<h3>โรคอ้วนขั้นสูงสุด</h3>");
			} elseif ($bmi>35) {
				echo("<h3>โรคอ้วนระดับ2</h3>");
				echo ("<p class = 'p3'>คุณเสี่ยงต่อการเกิดโรคที่มากับความอ้วน หากคุณมีเส้นรอบเอวมากกว่าเกณฑ์ปกติคุณจะเสี่ยงต่อการเกิดโรคสูง คุณต้องควบคุมอาหาร และออกกำลังกายอย่างจริงจัง</p>");
			} elseif ($bmi>28.5) {
				echo "<h3>โรคอ้วนระดับ1</h3>";
				echo "<p class = 'p3'>หากคุณมีเส้นรอบเอวมากกว่า 90 ซม.(ชาย) 80 ซม.(หญิง) คุณจะมีโอกาศเกิดโรคความดัน เบาหวานสูง จำเป็นต้องควบคุมอาหาร และออกกำลังกาย</p>";
			} elseif ($bmi>23.5) {
				echo "<h3>น้ำหนักเกิน</h3>";
				echo "<p class = 'p3'>หากคุณมีกรรมพันธ์เป็นโรคเบาหวานหรือไขมันในเลือดสูงต้องพยายามลดน้ำหนักให้ดัชนีมวลกายต่ำกว่า 23</p>";
			} elseif ($bmi>18.5) {
				echo "<h3>น้ำหนักปกติ</h3>";
				echo "<p class = 'p3'>มีปริมาณไขมันอยู่ในเกณฑ์ปกติ มักจะไม่ค่อยมีโรคร้าย อุบัติการณ์ของโรคเบาหวาน ความดันโลหิตสูงต่ำกว่าผู้ที่อ้วนกว่านี้</p>";
			} else {
				echo "<h3>น้ำหนักน้อยเกินไป</h3>";
				echo "<p class = 'p3'>อาจจะเกิดจากนักกีฬาที่ออกกำลังกายมาก และได้รับสารอาหารไม่เพียงพอ วิธีแก้ไขต้องรับประทานอาหารที่มีคุณภาพ และมีปริมาณพลังงานเพียงพอ และออกกำลังกายอย่างเหมาะสม</p>";
			}
		} else if ($type == "bmr") {
			$w = $_POST["weight-2"];
			$h = $_POST["hight-2"];
			$g = $_POST["gender-2"];
			$a = $_POST["age-2"];
			$act = $_POST["activity-2"];
			if ($g == "male") {
				$bmr = 66+(13.7*$w)+(5*$h)-(6.8*$a);
			} else {
				$bmr = 665+(9.6*$w)+(1.8*$h)-(4.7*$a);
			}
			echo ("<p class = 'p4'>BMR (Basal Metabolic Rate) พลังงานที่จำเป็นพื้นฐานในการมีชีวิต ".$bmr." กิโลแคลอรี่</p>");
			if ($act == 1) {
				$bmr = $bmr*1.2;
			} else if ($act == 2) {
				$bmr = $bmr*1.375;
			} else if ($act == 3) {
				$bmr = $bmr*1.725;
			} else if ($act == 4) {
				$bmr = $bmr*1.9;
			}
			echo "<p class = 'p5'>TDEE (Total Daily Energy Expenditure) พลังงานที่คุณใช้ในแต่ละวัน ".$bmr." กิโลแคลอรี่</p>";
		} elseif ($type == "col") {
			$ldl = $_POST["ldl-3"];
			$hdl = $_POST["hdl-3"];
			$tri = $_POST["tri-3"];
			$col = $ldl+$hdl+($tri/5);
			echo ("<p class = 'p6'>ค่าคอเลสเตอรอลรวมของคุณคือ ".$col." มิลลิกรัมต่อเดซิลิตร</p>");
			if ($col<200) {
				echo "<p class = 'p7'>ระดับคอเลสเตอรอลดีมาก ไม่สูงเกินไป</p>";
			} else if ($col<=239) {
				echo "<p class = 'p7'>คอเลสเตอรอลค่อนข้างสูง</p>";
			} else {
				echo "<p class = 'p7'>คอเลสเตอรอลสูง</p>";
			}
		}

	?>
	<center><a href="index.php"><button>ย้อนกลับ</button></a></center>
	</div>
</body>
</html>
