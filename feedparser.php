<?php 

// inclusion de la classe magpierss 

require_once("magpierss/rss_fetch.inc");

function FeedParser($url_feed, $nb_items_affiches=10) { 

// lecture du fichier distant (flux XML)
$rss = fetch_rss($url_feed);

if (is_array($rss->items))
  {
  $items = array_slice($rss->items, 0, $nb_items_affiches);
   $html = "<br />\n";
	$cpt=0;
	$html .= "<div id=\"LigneSujet\">\n";
	foreach ($items as $item) { 
		if ($cpt++ % 2 == 0) {
			$html .= "</div>\n<div id=\"LigneSujet\">\n";
		}
		if ($cpt==7) {break;}
		$link = $item['link'];
		preg_match("/<img([\w\W]+?)\/>/", $item['summary'], $output_array);
		$image = $output_array[0];
		$texte = preg_replace("/<(.+?)[\s]*\/?[\s]*>/", "", $item['summary']);           
		$html .= "<div id=\"sujet\">\n";
		$html .= "<div id=\"logo\">".$image."</div>\n";
		$html .= "<div id=\"titre\"><a href=\"".$item['link']."\">".$item['title']."</a></div>\n"; 
		$html .= "<div id=\"texte\">".$texte."</div>\n";
		#$html .=  preg_replace(array('/<img/','/\/>/'), array('<div id="logo"><img','/></div>'),strip_tags($item['summary'],'<img>'))."\n";
		
		
		$html .= "</div>\n";
	}
  }
	$html .= "</div>\n";
return $html;
}
?>


