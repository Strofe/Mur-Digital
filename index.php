<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
        <title>Page des 3 SONNECK de Beauvais</title>
	<style type="text/css"> 
		body {
			width : 890px;
			overflow-y: hidden; // hide vertical
			overflow-x: hidden; // hide horizontal
			justify-content: space-around;
		}
		#LigneSujet {
			display : flex;
			justify-content: space-around;
		}
		#sujet {								
			width : 48%;
			border-style: groove;
			padding: 2px;
			text-align: justify;
		}
		#logo {
			float:left;
			width:153px;
		}
		#titre {				

		}
		#texte {	

		}
	</style>
</head>
<body>
	Par Strofe
	<div align="center">
	<iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;height=600&amp;wkst=1&amp;hl=fr&amp;bgcolor=%23FFFFFF&amp;src=c.sonneck%40gmail.com&amp;color=%23691426&amp;ctz=Europe%2FParis" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
	</div>
	<div align="center" id="cont_3f09e5d9cb8890c82d5fccb61e9bcb02"><script type="text/javascript" async src="https://www.tameteo.com/wid_loader/3f09e5d9cb8890c82d5fccb61e9bcb02"></script></div>

<?php 
require_once("feedparser.php");
echo FeedParser("http://www.bfmtv.com/rss/info/flux-rss/flux-toutes-les-actualites/",9);
?>
</body>
</html>
