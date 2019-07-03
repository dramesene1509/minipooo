<?php
include_once("menu.php");



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="../learn_php_oo/stylepoo.css">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/js/bootstrap.min.js">
 
</head>
<body>
<marquee><h1><i>BIENVENU DANS LE MONDE DU NUMERIQUE!!!!!!</i></h1></marquee>

</body>

</html>
<style>
     body{
  background: url(bluebackground.jpg) no-repeat center fixed ; 
  background-size: cover;
}
.menu{
  margin-right: 5%;
  margin-left: 5%;
  margin-top: 0%;
}


  * {
    box-sizing: border-box;
  }
  
  /* Add padding to containers */
  .container {
    padding: 16px;
    ;
    text-align: center;
    
  }
  
  /* Full-width input fields */
  input[type=text], input[type=date], input[type=number],input[type=submit]{
    width: 100%;
    //padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
    border-radius: 10px;
    text-align: center;
  }
  
 // input[type=text]:focus, input[type=date]:focus {
    background-color: #ddd;
    outline: none;
  }
  
  /* Overwrite default styles of hr */
  hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
  }
  
  /* Set a style for the submit button */
  .registerbtn {
    background-color: rgb(197, 70, 48);
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
    border-radius: 5px;
  }
  
  .registerbtn:hover {
    opacity: 1;
  }
  #amina{
    text-align: center;
    width: 50%;
    padding: 15px;
    margin: 5px 0 22px 0;
    
  }*
  /*Strip the ul of padding and list styling*/
ul {
	list-style-type:none;
	margin:0;
	padding:0;
	position: absolute;
}

/*Create a horizontal list with spacing*/
li {
	display:inline-block;
	float: left;
	margin-right: 1px;
}

/*Style for menu links*/
li a {
	display:block;
	min-width:140px;
	height: 50px;
	text-align: center;
	line-height: 50px;
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	color: #fff;
	background: #2f3036;
  text-decoration: none;
  margin-top: 5%;
}

/*Hover state for top level links*/
li:hover a {
	background: rgb(197, 70, 48);
}

/*Style for dropdown links*/
li:hover ul a {
	background: #dddddd;
	color: #2f3036;
	height: 40px;
  line-height: 40px;
  
}

/*Hover state for dropdown links*/
li:hover ul a:hover {
	background:  rgb(197, 70, 48);;
	color: #fff;
}

/*Hide dropdown links until they are needed*/
li ul {
	display: none;
}

/*Make dropdown links vertical*/
li ul li {
	display: block;
	float: right;
}

/*Prevent text wrapping*/
li ul li a {
	width: auto;
	min-width: 100px;
	padding: 0 20px;
}

/*Display the dropdown on hover*/
ul li a:hover + .hidden, .hidden:hover {
	display: block;
}

/*Style 'show menu' label button and hide it by default*/
.show-menu {
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	text-decoration: none;
	color: #fff;
	background: #19c589;
	text-align: center;
	padding: 10px 0;
	display: none;
}

/*Hide checkbox*/
input[type=checkbox]{
    display: none;
}

/*Show menu when invisible checkbox is checked*/
input[type=checkbox]:checked ~ #menu{
    display: block;
}


/*Responsive Styles*/

@media screen and (max-width : 760px){
	/*Make dropdown links appear inline*/
	ul {
		position: static;
		display: none;
	}
	/*Create vertical spacing*/
	li {
		margin-bottom: 1px;
	}
	/*Make all menu links full width*/
	ul li, li a {
		width: 50%;
	}
	/*Display 'show menu' link*/
	.show-menu {
		display:block;
	}