<style type="text/css">
#isohuntpull{list-style-type:none; list-style-position:outside;}
#isohuntpull ul{margin:0; padding:0;}
#isohuntpull .even{background:#53463a;}
#isohuntpull li{padding-left:30px;}
#isohuntpull  a{color:#fff;}
#isohuntpull a{text-decoration:none; font-size:12px;}
</style>
<?php
require_once('simplepie.inc');
$tor = urlencode($_GET['tor']);

$feed = new SimplePie();
$feed->set_feed_url('http://isohunt.com/js/rss/'.$tor.'?iht=');
$feed->init();
$feed->handle_content_type();

$number = count($feed->get_items());
echo '<ul id="isohuntpull">';
foreach ($feed->get_items() as $item):
?>

	<li class="isohunt_items <?php echo ( ($number % 2) ? 'odd' : 'even' );?>"> 
		<a href="<?php echo $item->get_link(); ?>"><?php echo $item->get_title(); ?></a>
	</li>
 
<?php 
	--$number;
endforeach; 
echo '</ul>';
?>