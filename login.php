<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
body{
  margin:0;
  padding:0;
  font-family:roboto;
  background:url(https://galeri13.uludagsozluk.com/640/dubai_1051864.jpg) no-repeat;
  background-size:100%;
}

.login-box{
  witdh:280px;
  position:absolute;
  top:50%;
  left:50%;
  transform:translate()-50%,-50%;
  color:white;
}

.login-box h1{
  float:left;
  font-size:40px;
  border-bottom:6px solid #4caf50;
  margin-bottom:50px;
  padding:13px 0;
}

.textbox{
  width:100%;
  overflow:hidden;
  font-size:20px;
  padding:8px 0;
  margin:8px 0;
  border-bottom: 1px solid #4caf50;
}

.textbox i {
  width:26px;
  float:left;
  text-align:center;
}

.textbox input{
  border:none;
  outline:none;
  background:none;
  color:white;
  font-size:16px;
  width:80px;
  float:left;
  margin:0 10px;
}

.btn{
  width:100%;
  background:none;
  border:2px solid #4caf50;
  color:white;
  padding:5px;
  font-size:18px;
  cursor:pointer;
  margin:12px 0;
  
}
    </style>
</head>
<body>
    <form action="insert.php" method = "post" enctype="multipart/form-data" >
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">


<div class="login-box" style="background-color: rgba(0, 0, 0, 0.5);">
  <h1>Register Form</h1>
  <div class="textbox">
    <i class="fa fa-user" aria-hidden="true"></i>
  <input type="text" name="username" value="" placeholder=" Username">
  </div>
  <div class="textbox">
      <i class="fa fa-lock" aria-hidden="true"></i>
  <input type="password" name="password" value="" placeholder="Password">
  </div>
  
  <div class="textbox">
      <i class="fa fa-envelope" aria-hidden="true"></i>
  <input type="text" name="email" value="" placeholder="E-Mail">
  </div>
   
  <div class= "textbox">
<input type="file" name="image" placeholder="image">
  </div>

<button type='submit' >register</button>
  </div>
  </div>
</div>





</form>
</body>
</html>