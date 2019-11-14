<html>
<head>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Song+Myung&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
</head>

<style>
*{margin:0; padding:0;}
ol,ul{list-style:none;}
a {text-decoration: none; color:#555; }
   
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

 
<div class="ct-pageWrapper" id="ct-js-wrapper">
                <section class="company-heading intro-type" id="parallax-one">
                    <div class="container">
                        <div class="row product-title-info">
                            <div class="col-md-12">
                                <h1>
                                    About Us
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="parallax" id="parallax-cta" >
                        &nbsp;
                    </div>
                </section>
                
                <section class="story-section company-sections ct-u-paddingBoth100 paddingBothHalf noTopMobilePadding" id="section">
                    <div class="container text-center" >
                        <h2>
                            Sharing Diary를 찾아주셔서 감사합니다
                        </h2>
                    
                        <div class="col-md-8 col-md-offset-2  " >
                            <div class="red-border" >
                                &nbsp;
                            </div>
                            <p class="ct-u-size22 ct-u-fontWeight300 marginTop40 ontainer text-center " style="max-width:700px" >
                               
일정관리 프로그램인 [Sharing Diary]은<br> 충북대학교 소프트웨어학과 졸업작품으로 기획 되었습니다.<br><br>
Sharing Diary은 바쁜 현대 사회 속에서 시간관리를 효율적으로 도와주며<br>
공동제작이 많은 사람들과 커뮤니티를 형성하여 일정을 공유하고<br> 개인 일정 속의 장소 서비스를 제공함으로 기존에 출시되어 사용되고 있던<br> 어플이나 웹의 실생활 접목이라는 한계를 넘어서는 편리함을 제공합니다.<br><br>
[Sharing Diary]는 이런 분들이 사용하시면 좋습니다.<br><br>
1.프로젝트 성 업무가 많은 조직<br>
2.조직생활이 회사 전반적 문화인 경우<br>
3.다양한 커뮤니티를 형성하고 싶은 사람들<br><br>

Sharing Diary에서는 추가적으로 파일(문서,사진)을 공유하는 기능을 가지고 있어<br>반영구적인 보관이 가능하며<br>
업무적인 용도 외에도 아날로그 감성을 추구하는 트랜드에 맞춘<br> 감성적 기능 또한 제공하고 있습니다. <br>

                            </p><!-- <a class="ct-u-marginTop60 btn btn-solodev-red btn-fullWidth-sm ct-u-size19" href="#">Learn More</a> -->
                        </div>
                    </div>
                </section>
                 
                </body>
</html>
                
      