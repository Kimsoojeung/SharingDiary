<!DOCTYPE html>
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
<style>
@import url('httpss://fonts.googleapis.com/css?family=Roboto');
body {
    background-image:url(https://images.unsplash.com/photo-1494537449588-7f07cede2556?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1934&q=80);
      }

.signup-form {
  font-family: "Roboto Slab", sans-serif;
  width:650px;
  margin:30px auto;
  background:linear-gradient(to right, #ffffff 0%, #fafafa 50%, #ffffff 99%);
  border-radius: 10px;
}
.form-header  {
  background-color: #EFF0F1;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}
.form-header h1 {
  font-size: 30px;
  text-align:center;
  color:#666;
  padding:20px 0;
  border-bottom:1px solid #cccccc;
}

.form-body {
  padding:10px 40px;
  color:#999;
}
.form-group{
  margin-bottom:20px;
}
.form-body .label-title {
  color:#999999;
  font-size: 17px;
  font-weight: bold;
}
.form-body .form-input {
    font-size: 17px;
    box-sizing: border-box;
    width: 100%;
    height: 34px;
    padding-left: 10px;
    padding-right: 10px;
    color: #333333;
    text-align: left;
    border: 1px solid #d6d6d6;
    border-radius: 4px;
    background: white;
    outline: none;
}
.horizontal-group .left{
  float:left;
  width:49%;
}
.horizontal-group .right{
  float:right;
  width:49%;
}
input[type="file"] {
 outline: none;
 cursor:pointer;
 font-size: 17px;
}
#range-label {
 width:15%;
 padding:5px;
 background-color: #1BBA93;
 color:white;
 border-radius: 5px;
 font-size: 17px;
 position: relative;
 top:-8px;
}
::-webkit-input-placeholder {
 color:#d9d9d9;
}
/*---------------------------------------*/
/* Form Footer */
/*---------------------------------------*/
.form-footer {
 clear:both;
}

.signup-form .form-footer  {
  background-color: #EFF0F1;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  padding:10px 40px;
  text-align: right;
  border-top: 1px solid #cccccc;
}
.form-footer span {
  float:left;
  margin-top: 10px;
  color:#999;  
font-family: "Roboto Slab", sans-serif;
  font-weight: thin;
}
.btn {
   display:inline-block;
   padding:10px 20px;
   background-color: #ACBEA9;
   font-size:17px;
   border:none;
   border-radius:5px;
   color:#FFFFFF;
   cursor:pointer;
   font-family: "Roboto Slab", sans-serif;
}
.btn:hover {
  background-color: #ACBE00;
  color:white;
}
</style>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register Form Start</title>
  </head>
  <body>
    <form class="signup-form" action="/register.php" method="post">

    <!-- form header -->
    <div class="form-header">
     <h1>Create Account</h1>
</div>
    <!-- form body -->
    <div class="form-body">
    <!-- Firstname and Lastname -->
    <div class="horizontal-group">
        <div class="form-group left">
            <label for="firstname" class="label-title">Name *</label>
            <input type="text" id="firstname" name="name" class="form-input" placeholder="enter your first name" required="required" />
        </div>
        <div class="form-group right">
            <label for="lastname" class="label-title">Phone number *</label>
            <input type="text" id="lastname" name="phone" class="form-input" placeholder="enter your Phone number" />
        </div>
    <div class="form-group">
  <label for="email" class="label-title">Email*</label>
  <input type="email" id="email" name="email" class="form-input" placeholder="enter your email" required="required">
</div>
<!-- Passwrod and confirm password -->
<div class="horizontal-group">
  <div class="form-group left">
    <label for="password" class="label-title">Password *</label>
    <input type="password" id="password" name="password" class="form-input" placeholder="enter your password" required="required">
  </div>
  <div class="form-group right">
    <label for="confirm-password" class="label-title">Confirm Password *</label>
    <input type="password" class="form-input" id="confirm-password" name="password_check" placeholder="enter your password again" required="required">
  </div>

    </div>
    </div>
    <div class="horizontal-group">
    <div class="form-group left">
        <label class="label-title">Gender:</label>
        <div class="input-group">
            <label for="male">
                <input type="radio" name="gender" value="male" id="male"> Male</label>
            <label for="female">
                <input type="radio" name="gender" value="female" id="female"> Female</label>
        </div>
    </div>
     
  
</div>
</div>
    <!-- form footer -->
    <div class="form-footer">
    <!--  <span>* required</span> -->
  <button type="submit" class="btn">Create</button>
    </div>
</form>
    </form>
  </body>
</html>