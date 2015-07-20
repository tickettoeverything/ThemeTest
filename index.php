<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<link rel="stylesheet" type="text/css" href="indexCss.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script>

	$(document).ready(function(){
      // Run our swapImages() function every 5secs
      setInterval('swapImages()', 5000);
    });
    function swapImages(){
      var $active = $('#index-gal .active');
      var $next = ($('#index-gal .active').next().length > 0) ? $('#index-gal .active').next() : $('#index-gal img:first');
      $active.fadeOut(function(){
      $active.removeClass('active');
      $next.fadeIn().addClass('active');
      });
    }
  
 </script>

</head>
<body class=index_body>
<div>
<?php include 'header.php'; ?>
 </div>
  

<div class=index_main>

<div class=index-play>

	<div id=index-gal>
	
		<img src="Images\MainPlay.png" class="active"/>
		<img src="Images\emp.jpg"/>
		<img src="Images\statLib.jpg"/>
	
	</div>
	
</div>
 
 <div class=index_items>
 
 <table>
	<tr>
		<td class="tours"><a target="_blank" href="http://google.com/">Tours</a></td>
		<td class="sports"><a target="_blank" href="http://google.com/" style="text-align: center;">Sports<br>&<br>Concerts</a></td>
	</tr>
	<tr>
		<td class="museum"><a target="_blank" href="http://google.com/" style="text-align: center;">Museums<br>Attractions</a></td>
		<td class="airport"><a target="_blank" href="http://google.com/" style="text-align: center;">Airport<br><center>Transportation</center></a></td>
	</tr>
  
	<tr>
		<td class="dance"><a target="_blank" href="http://google.com/">Opera<br>Ballet<br>Symphony</td>
		<td class="daytrip"><a target="_blank" href="http://google.com/">Day Trips</a></td>
	</tr>

  
 </table>
 
 </div>

 <div id=index_theatre>
	<button class="prev">&laquo;</button>
		
	<ul>
		<li><img src="Images\1.png"><li>
		<li><img src="Images\2.png"></li>
		<li><img src="Images\3.png"></li>
		<li><img src="Images\4.png"></li>
		<li><img src="Images\5.png"></li>
		<li><img src="Images\6.png"></li>
		<li><img src="Images\7.png"></li>
		<li><img src="Images\8.png"></li>
		<li><img src="Images\9.png"></li>
		<li><img src="Images\10.png"></li>
		<li><img src="Images\11.png"></li>
		<li><img src="Images\12.png"></li>
		<li><img src="Images\13.png"></li>
		<li><img src="Images\14.png"></li>
		<li><img src="Images\15.png"></li>
		<li><img src="Images\16.png"></li>
		<li><img src="Images\17.png"></li>
		<li><img src="Images\18.png"></li>
		<li><img src="Images\19.png"></li>
		<li><img src="Images\20.png"></li>
		<li><img src="Images\21.png"></li>
		<li><img src="Images\22.png"></li>
		<li><img src="Images\23.png"></li>
		<li><img src="Images\24.png"></li>
		<li><img src="Images\25.png"></li>
		<li><img src="Images\26.png"></li>
		<li><img src="Images\27.png"></li>
		<li><img src="Images\28.png"></li>
		<li><img src="Images\29.png"></li>
		<li><img src="Images\30.png"></li>
	</ul>
	
	<button class="next">&rsaquo;</button>
	
 </div>

 <div class=index_deal>
 
	<a target="_blank" href="http://google.com/" width="100%">Deal of the day</a>
 
 </div>
 
 <div class=index_misc>
	<div class=index_desc>The new comedy An Act of God reveals the mysteries of the Bible while answering the existential questions that have plagued mankind since Creation in just 90 minutes. The One with the first and last word on everything is on Broadway to set the record straight and He's not holding back</div>
 
 </div>
  
 </div>
 
 <div>
	<?php include 'footer.php'; ?>
 </div>

</body>
</html>