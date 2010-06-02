<?php
if (!isset($main_content)) {
	$current1="current";
	$current2="";
	$current3="";
	$current4="";	
	$current5="";	
	$current6="";	
	$current7="";	
}
else {
	$currentPage = $main_content;
	$current1="";
	$current2="";
	$current3="";
	$current4="";
	$current5="";
	$current6="";
	$current7="";	
	switch ($currentPage) {
		case "accueil": {
			$current1="current";
			break;
		}
		case "archives": {	
			$current2="current";
			break;
		}
		case "asso": {
			$current3="current";
			break;
		}
		case "contact": {
			$current4="current";
			break;
		}
		case "forum": {
			$current5="current";
			break;
		}
		case "login": {
			$current6="current";
			break;
		}
		case "film": {
			$current7="current";
			break;
		}
	}
}
?>
<div>
<ul id="navlist">
	<li><a href="http://localhost/benoit.lemaitre.free.fr/ci" id=<?php echo $current1;?>> Accueil</a></li>
<!--	
	<li><a href="http://localhost/benoit.lemaitre.free.fr/ci/index.php/home/archives" id=<?php echo $current2;?>>Archives</a></li>
	<li><a href="http://localhost/benoit.lemaitre.free.fr/ci/index.php/home/asso" id=<?php echo $current3;?>>Asso</a></li>
	<li><a href="http://localhost/benoit.lemaitre.free.fr/ci/index.php/home/contact" id=<?php echo $current4;?>>Contact</a></li>
	<li><a href="http://localhost/benoit.lemaitre.free.fr/ci/index.php/home/forum" id=<?php echo $current5;?>>Forum</a></li>
	<li><a href="http://localhost/benoit.lemaitre.free.fr/ci/index.php/home/login" id=<?php echo $current6;?>>Login</a></li>
-->
	<li><a href="http://localhost/benoit.lemaitre.free.fr/ci/index.php/films/liste/" id=<?php echo $current7;?>>Film1</a></li>
	<li><a href="http://localhost/benoit.lemaitre.free.fr/ci/index.php/films" id=<?php echo $current7;?>>Film2</a></li>
	<li><a href="http://localhost/benoit.lemaitre.free.fr/ci/index.php/films/covers" id=<?php echo $current7;?>>Covers</a></li>
	<li><a href="http://localhost/benoit.lemaitre.free.fr/ci/index.php/films/add" id=<?php echo $current7;?>>Add</a></li>
	<li><a href="http://localhost/benoit.lemaitre.free.fr/ci/index.php/films/allocine" id=<?php echo $current7;?>>Allocine</a></li>
	
	<li><a href="http://localhost/benoit.lemaitre.free.fr/ci/index.php/forum/listeT" id=<?php echo $current7;?>>Thread</a></li>
	<li><a href="http://localhost/benoit.lemaitre.free.fr/ci/index.php/forum/listeTI" id=<?php echo $current7;?>>ThreadItem</a></li>
	
	
</ul>
</div>