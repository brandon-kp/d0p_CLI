<style type="text/css">
#lastfmpull{list-style-type:none; list-style-position:outside;}
#lastfmpull ul{margin:0; padding:0;}
#lastfmpull .even{background:#53463a;}
#lastfmpull li{padding-left:30px;}
#lastfmpull  a{color:#fff;}
#lastfmpull a{text-decoration:none; font-size:12px;}
</style>
<?php
require_once('simplepie.inc');

$feed = new SimplePie();
$feed->set_feed_url('http://ws.audioscrobbler.com/1.0/user/brandon-kp/recenttracks.rss');
$feed->init();
$feed->handle_content_type();

$number = count($feed->get_items());
foreach ($feed->get_items() as $item):
?>

	<li class="lastfm_items <?php echo ( ($number % 2) ? 'odd' : 'even' );?>"> 
		<a href="<?php echo $item->get_link(); ?>"><?php echo $item->get_title(); ?></a>
	</li>
 
<?php 
	--$number;
endforeach; 
?>