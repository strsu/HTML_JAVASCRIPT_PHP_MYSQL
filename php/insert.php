<?php

	$db_host = "localhost"; 
	$db_user = "amethyst"; 
	$db_passwd = "12qw12qw";
	$db_name = "amethyst"; 
	$conn = mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

	if (mysqli_connect_errno($conn)) {
		echo "데이터베이스 연결 실패: " . mysqli_connect_error();
	} else {
		echo "데이터베이스 연결 성공";
	}
	// 문자셋 설정, utf8.
	mysqli_set_charset($conn,"utf8"); 

	// Data 삽입
	echo "<br>";
	echo "<br>";
	$sql = "INSERT INTO tr_j (TR_name, TR_weight) VALUES ('블랜딩', '1572')";
	if (mysqli_query($conn, $sql)) {
      echo "등록이 완료되었습니다.";
	} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	$sql = "INSERT INTO tr_j (TR_name, TR_weight) VALUES ('케냐', '1636')";
	if (mysqli_query($conn, $sql)) {
      echo "등록이 완료되었습니다.";
	} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	$sql = "INSERT INTO tr_j (TR_name, TR_weight) VALUES ('콜롬비아', '1580')";
	if (mysqli_query($conn, $sql)) {
      echo "등록이 완료되었습니다.";
	} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	$sql = "INSERT INTO tr_j (TR_name, TR_weight) VALUES ('브라질', '1630')";
	if (mysqli_query($conn, $sql)) {
      echo "등록이 완료되었습니다.";
	} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	$sql = "INSERT INTO tr_j (TR_name, TR_weight) VALUES ('인디아', '1320')";
	if (mysqli_query($conn, $sql)) {
      echo "등록이 완료되었습니다.";
	} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	$sql = "INSERT INTO tr_j (TR_name, TR_weight) VALUES ('예가체프', '1623')";
	if (mysqli_query($conn, $sql)) {
      echo "등록이 완료되었습니다.";
	} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	$sql = "INSERT INTO tr_j (TR_name, TR_weight) VALUES ('과테말라', '1560')";
	if (mysqli_query($conn, $sql)) {
      echo "등록이 완료되었습니다.";
	} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	$sql = "INSERT INTO tr_j (TR_name, TR_weight) VALUES ('아리차', '1060')";
	if (mysqli_query($conn, $sql)) {
      echo "등록이 완료되었습니다.";
	} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	$sql = "INSERT INTO tr_j (TR_name, TR_weight) VALUES ('르완다', '1548')";
	if (mysqli_query($conn, $sql)) {
      echo "등록이 완료되었습니다.";
	} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
?>

