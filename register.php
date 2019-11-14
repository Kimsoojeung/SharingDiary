<?
	include "config/config.php";

	if($_POST["password"] == $_POST["password_check"]){
		$hobbies = implode(",",$_POST['hobbies']);
		$query = "INSERT INTO stevn81.member SET email = '{$_POST[email]}', password = '{$_POST[password]}', name = '{$_POST[name]}', phone = '{$_POST[phone]}', gender = '{$_POST[gender]}', hobbise = '{$hobbies}'";
		$result = mysqli_query($conn, $query);

		if($result){
			echo "<script>alert('회원가입에 성공하였습니다.');location.href='/';</script>";
		}else{
			echo "<script>alert('회원가입에 실패하였습니다.');history.back();</script>";
		}
	}else{
		echo "<script>alert('비밀번호가 일치하지 않습니다.');history.back();</script>";
	}
?>