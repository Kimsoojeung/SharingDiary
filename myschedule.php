<!DOCTYPE html>
<href="https://fonts.googleapis.com/css?family=Arvo|Righteous&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nanum+Myeongjo&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<html>
<head>
   <meta charset="UTF-8"/>
   <title> My Schedule </title>
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
.slick-slide {
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}


 .white_content {
  display: none;
  position: absolute;
  width:800px;
  height:500px;
  margin-left:100px;
  padding:30px;
  background-color: #FFFFFF;
  z-index: 5;
  overflow: auto;}
  
.timetable {
width:100%;
height:100%;
}

nav { width:100%; height:40px; position:relative; z-index:3; top:5px; margin-top:10px; left:0; background-color:#FFFFFF;}

/*2*/

.name{
  font-size : 25px;
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
<nav>
<div class = "name">
</div>
<div class = "timetable">
	 <iframe width="1280" height="760"  src="./examples/example00-basic.html"></iframe>
</div>
  </nav>
<div class = "schedule">

</div>    
</body>

</html>