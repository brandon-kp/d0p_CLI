<?php
$txt = file_get_contents('http://thepiratebay.org/search/DVDrip/0/99/0');


  $re1='(<)';	# Any Single Character 1
  $re2='(a)';	# Variable Name 1
  $re3='(\\s+)';	# White Space 1
  $re4='(href)';	# Word 1
  $re5='(=)';	# Any Single Character 2
  $re6='(")';	# Any Single Character 3
  $re7='((?:\\/[\\w\\.\\-]+)+)';	# Unix Path 1
  $re8='(")';	# Any Single Character 4
  $re9='(\\s+)';	# White Space 2
  $re10='(class)';	# Word 2
  $re11='(=)';	# Any Single Character 5
  $re12='(")';	# Any Single Character 6
  $re13='(detLink)';	# Word 3
  $re14='(")';	# Any Single Character 7
  $re15='.*?';	# Non-greedy match on filler
  $re16='(>)';	# Any Single Character 8
  $re17='.*?';	# Non-greedy match on filler
  $re18='(<\\/a>)';	# Tag 1

$c=preg_match_all ("/".$re1.$re2.$re3.$re4.$re5.$re6.$re7.$re8.$re9.$re10.$re11.$re12.$re13.$re14.$re15.$re16.$re17.$re18."/is", $txt, $matches);
for($i=0; $i < $c; $i++){
	$c1=$matches[1][$i];
	$var1=$matches[2][$i];
	$ws1=$matches[3][$i];
	$word1=$matches[4][$i];
	$c2=$matches[5][$i];
	$c3=$matches[6][$i];
	$unixpath1=$matches[7][$i];
	$c4=$matches[8][$i];
	$ws2=$matches[9][$i];
	$word2=$matches[10][$i];
	$c5=$matches[11][$i];
	$c6=$matches[12][$i];
	$word3=$matches[13][$i];
	$c7=$matches[14][$i];
	$c8=$matches[15][$i];
	$tag1=$matches[16][$i];
	print $c1.$var1.$ws1.$word1.$c2.$c3.$unixpath1.$c4.$ws2.$word2.$c5.$c6.$word3.$c7.$c8.'Baba booey'.$tag1.'<br />';
}
  /*
$re1='(\\/)';	# Any Single Character 1
$re2='(torrent)';	# Word 1
$re3='(\\/)';	# Any Single Character 2
$re4='(\\d+)';	# Integer Number 1
$re5='(\\/)';	# Any Single Character 3

$re=$re1.$re2.$re3.$re4.$re5;
if ($txt =~ m/$re/is)
{
    $c1=$1;
    $word1=$2;
    $c2=$3;
    $int1=$4;
    $c3=$5;
    //print "($c1) ($word1) ($c2) ($int1) ($c3) \n";
}
*/
?>