<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
	<title>커피 원두량, 사용량 계산기</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="../assets/css/main.css" />
	<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	
</head>
<body>
	<div id="page-wrapper">

		<!-- Header -->
		<header id="header">
			<h1 id="logo"><a href="../korea.html">The Loasting - 고대점</a></h1>
			<nav id="nav">
				<ul>
					<li><a href="../index.html">정릉점</a></li>
					<li><a href="../korea.html">고대점</a></li>
					<li><a href="../recipe.html">레시피</a></li>
					<!--<li><a href="#" class="button special">Sign Up</a></li>-->
				</ul>
			</nav>
		</header>

		<!-- Main -->
		<div id="main" class="wrapper style1">
			<div class="container">
				

				<section>

					<?php

					if ($_POST["ps"] == 'jps') {
						$db_host = "localhost"; 
						$db_user = "amethyst"; 
						$db_passwd = "12qw12qw";
						$db_name = "amethyst";
						$conn = mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

						if (mysqli_connect_errno($conn)) {
							echo "DataBase Connection Fail: " . mysqli_connect_error();
						} else {
							echo "DataBase Connection Success". "<br>";
						}
	// 문자셋 설정, utf8.
						mysqli_set_charset($conn,"utf8");

	// 테이블에 Data 삽입
						$sql = "INSERT INTO tr_k (TR_name, TR_weight) VALUES ('$_POST[bn]', '$_POST[bw]')";
						if (mysqli_query($conn, $sql)) {
					      echo "등록이 완료되었습니다.";
						} else {
					      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
						}

						mysqli_close($conn);
						} else {
							echo "비밀번호가 틀렸습니다.";
						}
						echo ("<meta http-equiv='Refresh' content='0; URL=../korea.html'>");
					?>
				</section>
			</div>
		</div>

	</div>

	<!-- Scripts -->
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/jquery.scrolly.min.js"></script>
	<script src="../assets/js/jquery.dropotron.min.js"></script>
	<script src="../assets/js/jquery.scrollex.min.js"></script>
	<script src="../assets/js/skel.min.js"></script>
	<script src="../assets/js/util.js"></script>
	<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
	<script src="../assets/js/main.js"></script>

</body>
</html>
