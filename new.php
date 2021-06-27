<html>
<title>SHB</title>


<form name="loginform">

<body>

<div class="container">
<b style="color:white">Login Id:
<input type="text" id="uname" name="uname" placeholder="Enter Username"><br>
Password:</b>
<input type="Password" id="pwd" name="pwd" placeholder="Enter Password"><br>
<button type="button" class="login" onclick=validation()> Login <br>


  
  </div><br>
  
   <div class="container1" style="background-color:#f1f1f3">
    <button type="button" class="register" onclick=register()>Sign Up</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
  </body>
  <style>
  

 


body{
background-image: url('blogin.jpg'); 
background-size: 70% 100%;
background-color:#7C7570;
background-repeat:no-repeat;
}

input[type=text], input[type=password], input[type=button] {
  width: 60%;
  padding: 12px 20px;
  margin: 18px 10px;
  position: top right;
  display: inline-block;
  border: 1px solid #ccc;
  position: right;
  
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}



.register {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

button:hover {
  opacity: 0.8;
}


/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {

  padding: 0px;
  position: absolute;
    top: 20%;
    right: 10px;
}

.container1 {
  padding: 0px;
  position: absolute;
    top: 55%;
    right: 0px;
	width: 30%;
}


.books {
 height: 0px;
  width: 0%;
  padding: 0px;
  background: blue;
}


  </style>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

<script>

function validation()
{
if(document.getElementById("uname").value=="")
{
alert("Please enter User Name");
return 0;
}
if(document.getElementById("pwd").value=="")
{
alert("Please enter Password");
return 0;
}
document.loginform.action="processlogin.php";
document.loginform.method="post";
document.loginform.submit();
}

function register()
{
document.loginform.action="register.php";
document.loginform.submit();
}

</script>



</form>


</html>