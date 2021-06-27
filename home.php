<?php session_start();
$user=$_SESSION['uid'];
?>



<html>
<title>SHB</title>



<style>


body {
  margin: 0;
}
.t
{

float: left;
 overflow: hidden;
  background-color: #116466;
  text-align: right;
  color:white;
  font-size: 50px;
  top: 0;
  left: 0;
  width: 100%;
  padding: 20px 0px 20px 0px;
   font-variant: small-caps;
  font-weight: bold;
  font-family: sans-serif, arial, arial black;

  
}

h2{
float: left;
font-size: 20px;
top: 0;
  left: 0;
  width: 100%;
}

.topnav {
float: left;
  overflow: hidden;
  background-color: #17252a;
  width: 100%;
  top: 0;
  left: 0;
  margin:0;
  font-family: arial, arial black;
  color:white;
  font-weight:bold;
}

.button {
  background-color: #17252a;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  font-weight: bold;
  margin: 4px 2px;
  cursor: pointer;
  font-family: arial, arial black;
  
}

.button:hover {
  background-color: #474b4f;
  color: white;
  }


table {
  border-collapse: collapse;
  width: 100%;
  font-family: sans-serif, arial, arial black;
}

th, td {
  text-align: left;
  padding: 8px;
  color:white;
  
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #d9b08c;
  color: white;
}

td {
  color: black;
}


</style>

<body>
<form name="home">
<div class="t">
<h> BOOK STORE&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h>
<h2>Repeating Pleasures...&nbsp&nbsp&nbsp&nbsp&nbsp</h2></div>

<div class="topnav">
<?php /*&nbsp&nbsp&nbspWelcome&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp*/?>
<button class="button">Home</button>
<input type='button' class='button' value='Upload' onclick=add()>


<input type='button' class='button' value='Your Books' onclick=edit()>
<input type='button' class='button' value='View' onclick='detail()'>
<input type='button' class='button' value='Logout' onclick='logout()'></div>


<table border="1" cellpadding="6" cellspacing="1">
<tr>
<th></th>
<th><i>Category</th>
<th><i>Book Name</th>
<th><i>Language</th>
<th><i>Author</th>
<th><i>Price</th>
<th><i>Year</th>
</tr>
<?php
include "dbconnect.php";
$q="select * from book order by category,name";
$r=$link->query($q);

while($row=mysqli_fetch_array($r))
{
echo "<tr>";
	echo "<td>";
	echo "<input type='radio' name='sel' value='$row[0]'>";
	echo "</td>";
	echo "<td>";
	echo $row[1];
	echo "</td>";
	echo "<td>";
	echo $row[2];
	echo "</td>";
	echo "<td>";
	echo $row[3];
	echo "</td>";
	echo "<td>";
	echo $row[4];
	echo "</td>";
	echo "<td>";
	echo $row[6];
	echo "</td>";
	echo "<td>";
	echo $row[7];
	echo "</td>";
	echo "</tr>";
}
?>
</td></tr></table>
</body>
<script> 
function add()
{
document.home.action="add.php";
document.home.submit();
}
function edit()
{
document.home.action="edit.php";
document.home.submit();
}
function detail()
{
var i,f=0;
	var rdboxs=document.getElementsByName('sel');
	for(i=0;i<rdboxs.length;i++)
	{
		if(rdboxs[i].checked)
		{ 
		f=1;
		break;
		}
	}
	if(f==0)
	{
		alert("Please select atleast one option");
		return false;
	} 
	
	
	
document.home.action='detail.php';
document.home.method="post";
document.home.submit();
}
function logout()
{
 var c=confirm('Are you sure?');
 if(c){
document.home.action='logout.php';
document.home.method="post";
document.home.submit();
}
}

</script>








</form>


</html>