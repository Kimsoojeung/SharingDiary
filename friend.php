<!DOCTYPE html>
<html>
<style>
body{
   background-color:#ACBEA9;
}
.wrap1 {
  height: 100%;
  display: flex;
  margin-top : 150px;
  margin-left:50px;
  align-items: left;
  justify-content: left;
}

.button1 {
  width: 120px;
  height: 45px;
  font-family: 'Roboto', sans-serif;
  font-size: 11px;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #000;
  background-color: #fff;
  border: none;
  border-radius: 45px;
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease 0s;

  outline: none;
  }
  
input.underline{
  margin-left:10px;
  border:0;
  border-bottom:1;
  solid:#ff1234;
  }
  
  .wrap {
  height: 100px;
  display: flex;
  bottom: 100px;
  align-items: center;
  justify-content: center;
}

.more {
  width: 120px;
  height: 45px;
  font-family: 'Roboto', sans-serif;
  font-size: 11px;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #000;
  background-color: #fff;
  border: none;
  border-radius: 45px;
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
  }

.more:hover {
 
  box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.1);

  transform: translateY(-4px);
}

}
</style>
<head>
    <meta charset="utf-8">
    <title>More Friends!</title>
</head>
<body>

<form action="/module/findEmail.php" method="POST">
	<div class="wrap1">
		<button class="button1">Friend ID</button>
		<input class="underline" id="email" name="email" type="text" >
	</div><br><br>
	<div class="wrap">
		<input type="submit" class="more" value="MORE!!" style="text-align:center;">
	</div>
</form>
</body>
</html>