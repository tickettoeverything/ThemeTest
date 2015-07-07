<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>


<style>

body {
    background-color: #b0c4de;
	height: 101%;
    margin: 0px;
	width: 100%;
	overflow: auto;
	
	
}
div.main{
	position: absolute;
    right: 100px;
	left: 140px;
    width: 900px;
	height: 900px;
    border: 3px solid #8AC007;

}
div.items {
	position: absolute;
	right: 50px;
    width: 400px;
	height: 500px;
    border: 3px solid #8AC007;
	
	
}
div.play {
	position: absolute;
	right: 470px;
    width: 400px;
	height: 500px;
    border: 3px solid #8AC007;
	background-color: grey;
	
	
}

table, td {
    border-collapse: separate;
    border-spacing: 15px;
}

td {
    padding: 55px;
	padding-right:20px;
	background-color: red;

	font-weight: bold;
	text-align: center;
	
}
td a{
	text-decoration: none;
	color: white;
	text-align: center;
	
}
td a:hover{
	
	color: #000000;
}
td a:visited{
	color: #00ff00;
}
tr{
	padding: 15px;
}

div.img {
    
    border: 1px solid #0000ff;
    height: auto;
    width: auto;
    text-align: center;
}	

div.desc{
	text-align: left;
	font-weight: bold;
	color: white;
	width: 350px;
	margin: 10px;
}

div.theatre{

	position: absolute;
	bottom: 240px;
	right: 66px;
	width: 810px;
	height: 350px
	border: 3px solid #8AC007;
	background-color: grey;

}

div.deal{

	position: absolute;
	bottom: 70px;
	right: 470px;
    width: 400px;
	height: 150px;
    border: 3px solid #8AC007;
	background-color: grey;

}

div.misc{
	position: absolute;
	bottom: 70px;
	right: 50px;
    width: 400px;
	height: 150px;
    border: 3px solid #8AC007;
	
	
}

#carousel {
	width: 480px;
	overflow:hidden;
}

#carousel ul {
	width: 1920px;
	padding: 0;
	margin: 0;
}

#carousel ul li {
	width:480px;
	text-align: center;
	height: 280px;
	list-style: none;
	float:	left;
}
</style>
</head>
<body>
<div>
<?php include 'header.php'; ?>
 </div>
  
 

<div class=main>

<div class=play>

	<div class=img>
	
	<img src="Images\MainPlay.png" width="380" height="360">
	
	<div class=desc>The new comedy An Act of God reveals the mysteries of the Bible while answering the existential questions that have plagued mankind since Creation in just 90 minutes. The One with the first and last word on everything is on Broadway to set the record straight�and He's not holding back!</div>
	
	</div>
	
	
</div>
 
 <div class=items>
 
 <table>
  <tr>
    <td><a target="_blank" href="http://google.com/">Tours</a></td>
    <td><a target="_blank" href="http://google.com/">Sports & Concerts</a></td>
  </tr>
  <tr>
    <td><a target="_blank" href="http://google.com/">Museums Attractions</a></td>
    <td><a target="_blank" href="http://google.com/">Airport Transportation</a></td>
  </tr>
  
  <tr>
    <td><a target="_blank" href="http://google.com/">Dance Opera Ballet</td>
    <td><a target="_blank" href="http://google.com/">Day Trips</a></td>
  </tr>
  
  </table>
 </div>
 
  <div class=theatre>
 
 <h1> Text </h1>
 <h1> Text</h1>
 
 </div>
 
 <div class=deal>
 
 <h1> Text </h1>
 <h1> Text</h1>
 
 </div>
 
 <div class=misc>
 <table width=100%>
  <tr>
    <td><a target="_blank" href="http://google.com/">About Us</a></td>
    <td><a target="_blank" href="http://google.com/">Contacts</a></td>
  </tr>
  </table>
 
 </div>
 
 
 
 </div>
 

 
 <div>
 <?php include 'footer.php'; ?>
 </div>

</body>
</html>