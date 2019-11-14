<!DOCTYPE html>
<href="https://fonts.googleapis.com/css?family=Arvo|Righteous&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nanum+Myeongjo&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<html>
  <script language="javascript">
    function showPopup() {window.open("friend.php","t","width=400, height=300,left=100, top=50");}
  </script>
<head>
   <meta charset="UTF-8"/>
   <title> group management </title>
</head>
<style>
*{margin:0; padding:0;}
body{ background-image:url(https://images.unsplash.com/photo-1494537449588-7f07cede2556?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1934&q=80); }
ol,ul{list-style:none;}
a{outline:0; text-decoration:none; color:#555; }

.w3-top{
    letter-spacing: 1px;
    top:0;
    width:100%;
    z-index:1
}
.w3-bar-block .w3-dropdown-hover,.w3-bar-block .w3-dropdown-click{width:100%}
.w3-bar-block .w3-dropdown-hover .w3-dropdown-content,.w3-bar-block .w3-dropdown-click .w3-dropdown-content{min-width:100%}
.w3-bar-block .w3-dropdown-hover .w3-button,.w3-bar-block .w3-dropdown-click .w3-button{width:100%;text-align:left;padding:8px 16px}
.w3-main,#main{transition:margin-left .4s}
.w3-modal{z-index:3;display:none;padding-top:100px;position:fixed;left:0;top:0;width:100%;height:100%;overflow:auto;background-color:rgb(0,0,0);background-color:rgba(0,0,0,0.4)}
.w3-modal-content{margin:auto;background-color:#fff;position:relative;padding:0;outline:0;width:600px}
.w3-bar
{width:100%;overflow:hidden}
.w3-center .w3-bar
{display:inline-block;width:auto}
.w3-bar .w3-bar-item
{padding:8px 16px;float:left;width:auto;border:none;display:block;outline:0}
.w3-bar .w3-dropdown-hover,.w3-bar .w3-dropdown-click
{position:static;float:left}
.w3-bar .w3-button
{white-space:normal}
.w3-bar-block .w3-bar-item
{width:100%;display:block;padding:8px 16px;text-align:left;border:none;white-space:normal;float:none;outline:0}
.w3-bar-block.w3-center .w3-bar-item
{text-align:center}.w3-block{display:block;width:100%}
.w3-responsive{display:block;overflow-x:auto}

.separator-type, .title-type, .intro-type, .content-type .intro-type p {
    position: relative;
}
.intro-type .container {
    padding: 107px 0px 102px 0px !important;
}
#product-header-section, .intro-type .container {
    padding: 68px 15px 72px !important;
}
@media (min-width: 1630px)
.container {
    width: 1630px;
}
.parallax {
  background-image:url(https://images.unsplash.com/photo-1556373030-c6e3ac740d1b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80);
    background-attachment: inherit !important;
}
.parallax {
 font-family: 'Song Myung', sans-serif;
    background-attachment: inherit !important;
    background-repeat: repeat;
    background-size: cover;
    position: absolute;
    top: 0px;
    bottom: 0px;
    width: 100%;
    z-index: -10;
}
.company-heading h1 {
    margin-bottom: 40px;
    line-height: 80px;
    color: #022C04;
    font-weight: 700 !important;
    text-align: center;
}
.seo-header, .product-header, .intro-type .container h1.white, .company-heading h1 {
    font-family: 'Song Myung', sans-serif;
    font-weight: 100 !important;
    text-transform: capitalize;
    font-size: 65px;
    margin-bottom: 20px;
}
.company-sections h2, .careers-sections h2, .perks-section h2 {
    font-weight: 800;
    font-size: 30px;
     color: #022C04;
}
.company-sections h2, .company-sections h3, .careers-sections h2, .perks-section h2 {
    font-family: 'Song Myung', sans-serif;
}
.company-sections h3 {
    font-size: 25px;
    font-weight: 700;
    margin: 14px 0;
    font-family: 'Song Myung', sans-serif;
    text-transform: capitalize;
}
.red-border {
    width: 50%;
    border-bottom: 1px solid #d2282e;
    margin: 0 auto;
    height: 16px;
    
}
.company-sections p {
    margin-top: 20px;

}
.ct-u-size22 {
 font-family: 'Song Myung', sans-serif;
    font-size: 20px;
      margin-left:auto;
    margin-right:auto
}
.ct-u-fontWeight300 {
    font-weight: 300;
}
.marginTop40 {
    margin-top: 40px !important;
}
.ct-u-paddingBoth100 {
    padding: 100px 15px;
}
.culture-section {
    background: linear-gradient(rgba(0, 0, 0, 0.45),rgba(0, 0, 0, 0.45)) top no-repeat;
    /* background-color: #095c87; */
    /* color: #fff; */
}
.company-sections, .careers-sections, .left-headquarter-section-img, .right-headquarter-section-img {
    text-align: center;
}
.ct-u-paddingBoth100 {
    padding: 100px 15px;
}
.company-sections h2, .careers-sections h2, .perks-section h2 {
    font-weight: 800;
    font-size: 50px;
}
.company-sections h2, .company-sections h3, .careers-sections h2, .perks-section h2 {
    font-family: 'Song Myung', sans-serif;
}
.slider .item {
    overflow: hidden;
}
.slick-slide {
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}

button{ background:#ACBEA9;
  color:#fff;
  border:none;
  position:relative;
  left:1100px;
  bottom:-600px;
  height:60px;
  width:180px;
  font-size:1.6em;
  padding:10px;
  cursor:pointer;
  transition:800ms ease all;
  outline:none;
 font-family: 'Nanum Myeongjo', sans-serif;
 
}
button:hover{
  background:#fff;
  color:#ACBEA9;
}
button:before,button:after{
  content:'';
  position:absolute;
  top:0;
  right:0;
  height:2px;
  width:0;
  background: #ACBEA9;
  transition:400ms ease all;
}
button:after{
  right:inherit;
  top:inherit;
  left:0;
  bottom:0;
}
button:hover:before,button:hover:after{
  width:100%;
  transition:800ms ease all;
}


 .white_content {
  display: none;
  position: absolute;
  width:1000px;
  height:7t00px;
  margin-left:100px;
  padding:10px;
  background-color: #FFFFFF;
  z-index: 5;
  overflow: auto;}
  
nav { width:100%; height:50px; position:relative; z-index:3; top:5px; margin-top:10px; left:0; background-color:#FFFFFF;}
nav>ul{ width : 1200px; margin:0 auto; }
nav>ul>li{width:250px; float:left; text-align:center; margin-top:20px;  opacity:0.5; position:relative; perspective:700px;   }
nav>ul>li>a{ font-family: "Arvo", sans-serif; display:block; width:200px; height:1px; transition: all 0.4s; font-size:20px;   }
nav>ul>li:hover >a{ transform:translateY(-20px); opacity:0;}


/*2*/
nav>ul>li>div {      
background-color:#FFFFFF; box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14); position:absolute; left:0px; top:-50px; opacity:0; width:10; height:250px;transition:all 0.5s;  box-sizing :border-box; padding-top:10px; z-index: 2; }
nav>ul>li:hover div { opacity:1; top:-80px; }
nav>ul>li>div>h2{ font-family: "Arvo", sans-serif; text-align:center;}
  nav>ul>li>div>ul{  margin-top:10px; bottom:0px;   font-size:20px;   left:0px;}                     /*  상단 여백 10px  */ 
  nav>ul>li>div>ul>li{    padding-top:20px;   }
  nav>ul>li>div>ul>a{  display:block;  text-align:center;  transition:all 0.4s;} 
   
.my-box{
 margin-left: 30px;
 display:inline;
 float:left;
 width:200px; padding:10px;
 }

</style>

<body>
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="./index.php"><i class="fa fa-bars"></i></a>
	<a href="./aboutus.php" class="w3-bar-item w3-button">ABOUT US</a>
    <a href="./myschedule.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i>MY SCHEDULE</a>
    <a href="./group.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> GRUOP SCHEDULE</a>
     </div>
     </div>
  <button onclick="showPopup();">친구 추가</button>
<div class ="groupsection">
<div class="white_content" id="light"><a href="javascript:void(0)" onclick="document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">Close</a> <iframe width="1000" height="600"src="./examples/example02-weekly.html"></iframe>  </div>
	<nav>
		<ul>
			<? 
			include "config/config.php";

			$query = "SELECT group_name FROM stevn81.group_list GROUP BY group_name";
			$result = mysqli_query($conn, $query);
			while($row = mysqli_fetch_assoc($result)) {
			?>
			<li>
				<a href="#"><?=$row["group_name"]?></a>
				<div class="my-box">
				<h2><?=$row["group_name"]?></h2>
					<ul>
						<? 
						$query2 = "SELECT name FROM stevn81.group_list WHERE group_name = '{$row[group_name]}' ORDER BY name"; 
						$result2 = mysqli_query($conn, $query2);
						while($row2 = mysqli_fetch_assoc($result2)) {
						?>
						<li><a href="javascript:void(0)" onclick="document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'"><?=$row2["name"]?></a></li>
						<? } ?>
					</ul>
				</div>
			</li>
			<? } ?>
		</ul>
	</nav>
</div>
  
</body>

</html>