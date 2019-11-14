<html>
<style>
html, body {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
}

   body {
     background-image:url(https://images.unsplash.com/photo-1494537449588-7f07cede2556?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1934&q=80);
   font-family: 'Ubuntu', sans-serif;
    }
    
    .main {
       background-color:#FFFFFF;
        width: 400px;
        height: 350px;
        margin: 7em auto;
     
        box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
    }
    
    .sign {
        padding-top: 20px;
        color: #8C55AA;
        font-family: 'Ubuntu', sans-serif;
        font-weight: bold;
        font-size: 23px;
    }
    
    .un {
    width: 76%;
    color: rgb(100, 100,1030);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    border: none;
    border-radius: 10px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 10px;
    margin-left: 46px;
    text-align: left;
    margin-bottom: 15px;
    font-family: 'Ubuntu', sans-serif;
    }
    
    form.form1 {
        padding-top: 40px;
    }
    
    .pass {
            width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    border: none;
    border-radius: 10px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 10px;
    margin-left: 46px;
    text-align: left;
    margin-bottom: 30px;
    font-family: 'Ubuntu', sans-serif;
    }
    
   
    .un:focus, .pass:focus {
        border: 2px solid rgba(0, 0, 0, 0.18) !important;
        
    }
    
    .submit {
      cursor: pointer;
        border-radius: 5em;
        color: #111;
        background:#ACBEA9;
        border:0;
        padding-left: 100px;
        padding-right: 100px;
        padding-bottom: 15px;
        padding-top: 15px;
        font-family: 'Ubuntu', sans-serif;
        margin-left: 20%;
        font-size: 15px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
    }
    
    .forgot {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: #E1BEE7;
        padding-top: 20px;
        font-size: 13px;
    }
      
    .signup {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        font-size: 13px;
    }
    
    
    a {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: #ACBEA9;
        text-decoration: none
    }
    
    .snsloginBox{
        padding-top: 20px;
        padding-left: 170px; 
     
    }
    
    @media (max-width: 600px) {
        .main {
            border-radius: 0px;
        }
        
        
</style>

<head>
  <meta charset="UTF-8"/>	
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Sign in</title>
</head>

<body>
<?
include "config/config.php";

if($_POST){
	$query = "SELECT * FROM member WHERE email = '{$_POST[email]}' AND password = '{$_POST[password]}' LIMIT 1";
	$result = mysqli_query($conn, $query);
	while($row = mysqli_fetch_assoc($result)) {
		$data = $row;
	}

	if($data){
		echo "<script>alert('로그인에 성공하였습니다.');location.href='/';</script>";
	}else{
		echo "<script>alert('EMAIL 혹은 PW를 확인해주세요.');</script>";
	}
}
?>

  <div class="main">
    <p class="sign" align="center"></p>
    <form class="form1" method="POST" action="">
    
      <input class="un " type="text" align="center" name="email" placeholder="ID/E-mail">
      <input class="pass" type="password" align="center" name="password" placeholder="Password" style="margin-bottom:10px;">
      <input class="submit" type="submit" align="center" value="로그인">
      <p class="forgot" align="center"><a href="#" > 아이디/비밀번호 찾기</a></p>
      <hr width = "50%" color=#F3EBF6 >
      <p class="signup" align="center">계정이 없으신가요?<a href="http://stevn81.cafe24.com/signup.php">가입하기</a></p>     
      </form>
            
  <!-- 간격 띄우기 -->
  </div>

</body>

</html>