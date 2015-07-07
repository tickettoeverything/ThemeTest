<!DOCTYPE html>

<html <?php language_attributes(); ?>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title(); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<?php wp_head(); ?>
</head>
<style type="text/css">


a:link {color: #ffdf50; text-decoration: underline; }
a:active {color: #0000ff; text-decoration: underline; }
a:visited {color: #008000; text-decoration: underline; }
a:hover {color: #ff0000; text-decoration: none; }

a.black:link {color: #000000;text-decoration: underline; }
a.black:active {color: #0000ff; text-decoration: underline; }
a.black:visited {color: #008000; text-decoration: underline; }
a.black:hover {color: #ff0000; text-decoration: none; }

.wrap {
	position:relative;
	margin:0 auto;
    width:900px;
	background-color: #95b5de;
}

#header {
	width:100%;
	float:left;
}

#headerbar {
	border: 5px solid #005baa;
	background-color: #005baa;
	padding-bottom: 5px;
	padding-top: 2px;
	margin-right: 80px;
	margin-left: 60px;
	margin-top: 2px;
	font-family: Verdana;
	color: #ffdf50;
	font-weight: bold;
}

#navbar {
	border: 5px solid #95b5de;
	background-color: ##95b5de;
	font-family: Lucida Sans Unicode;
	font-size: .8em;
	font-weight: bold;
	color: #000000;
	padding-top: 5px;
	padding-bottom: 5px;
	
}

</style>

<div id="header">
<div class="wrap">
		<div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="http://s11.postimg.org/qro3rfw3n/logo3.png"></a> <img src="http://s18.postimg.org/su5189q49/logo2.png">
        </div>
			
			<div id="headerbar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <U>SEARCH</U> &nbsp;  <input type="search" name="googlesearch"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="logon">LOG ON</a>  / <a href="logon">REGISTER</a> &nbsp;&nbsp;&nbsp;  <a href="#"><img src="http://s17.postimg.org/48g4m2nmz/cart.png"></a></div>
			<div id="navbar">
		&emsp;&emsp;&emsp;<a href="blah" class="black">HOME</a>&emsp;&emsp;<a href="blah"class="black">BROADWAY/OFF BROADWAY</a>&emsp;&emsp;<a href="blah"class="black">TOURS</a>&emsp;&emsp;<a href="blah"class="black">TRANSPORTATION</a>&emsp;&emsp;<a href="blah"class="black">HOTELS</a>&emsp;&emsp;<a href="blah"class="black">RESTAURANTS</a>&emsp;&emsp;<a href="blah"class="black">GROUP SERVICE</a>
			</div>
</div>
</div>


</html>