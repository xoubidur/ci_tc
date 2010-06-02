<?php
	$screen_id="gen-01";
	require "../lib/session.auth.php";
	require "../lib/session.set.php";
	require "../lib/html.blocks.php";
	include "../lib/db.shared.php";
	include "../lang/language.set.php";
	$passed=0;
	$err="";
	if (isset($_POST['login'])) {
		$uid=$_POST['login'];
	}
	if (isset($_POST['pass'])) {
		$pas=$_POST['pass'];
	}
	if (isset($_POST['posted'])) {
		$pst=$_POST['posted'];
	}
	if (isset($pst)) {
		if ($pst == 1) {
			$pas=$_POST['pass'];
			if (EntryVerifySession($uid,$pas)==1) {
				$query="SELECT *
						FROM users
						Where User_Name='".$uid."';";
				$result = mysql_query($query);
				$row = mysql_fetch_array($result);
				$mysid=SessionSet($row[0],$pas,$uid,$row[3],$row[4],$row[5]);
				RedirectParent ($mysid,"../members/index.php");
				exit();
			}
			$err = "<center><font color=red>$lit_logfail</font></center>";
		}
	}
	//include "../lib/header.base.php";
	echo "<body onLoad='setfocus()' bgcolor='#F3F3F3' text='#000000'>\n";
		echo "<center>\n";
			echo "<form action='login.php' target=_self method='post'>\n";
				echo "<table border='0' cellspacing='0' cellpadding='2' class='box-table'>\n";
					if ($do==1) {
						echo "<tr>";
							echo "<td>";
								echo "Session expiree";
							echo "</td>";
						echo "</tr>";
					}
					echo "<tr>\n";
						echo "<th colspan='3'><h4><font face='Verdana, Arial, Helvetica, sans-serif'>$lit_login</font></h4></th>\n";
					echo "</tr>\n";
					echo "<tr>\n";
						echo "<th colspan='3'>$err</th>\n";
					echo "</tr>\n";
					echo "<tr>\n";
						echo "<td rowspan='3'></td>\n";
					echo "<th><font face='Verdana, Arial, Helvetica, sans-serif' size='2'>$lit_user</font></th>\n";
					echo "<td><input id='login' class='login' type='text' size='15' name='login'  value=''></td>\n";
					echo "</tr>\n";
					echo "<tr>\n";
					echo "<th><font face='Verdana, Arial, Helvetica, sans-serif' size='2'>$lit_pwd</font></th>\n";
					echo "<td><input class='login' type='password' size='15' name='pass'></td>\n";
					echo "</tr>\n";
					echo "<tr>\n";
					echo "<td>&nbsp;</td>\n";
					echo "<td><input class='login' type='submit' value='$lit_logme' name='submit'></td>\n";
					echo "</tr>\n";
				echo "</table>\n";
				echo "<input type='hidden' name='posted' value='1'>\n";
			echo "</form>\n";
		include "../lib/footer.php";
?>
