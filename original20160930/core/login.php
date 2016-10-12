<?php
//データベース接続
$moviedb = mysqli_connect('localhost', 'root', 'root', 'iw32movie') or die(mysqli_connect_error());
mysqli_set_charset($moviedb, 'utf8');


if(!isset($_POST['save'])){
	$_POST['save'] = 'off';
}
$error['login'] = "";
if (isset($_COOKIE['email']) && !isset($_POST['btn'])) {
	$_POST['email'] = $_COOKIE['email'];
	$_POST['password'] = $_COOKIE['password'];
	$_POST['save'] = 'on';
}
if(isset($_POST['btn'])){
	if (!empty($_POST)) {
		// ログインの処理
		if ($_POST['email'] != '' && $_POST['password'] != '') {
			$sql = sprintf('SELECT * FROM users WHERE mail_add="%s" AND pass="%s"',
				mysqli_real_escape_string($moviedb, $_POST['email']),
				mysqli_real_escape_string($moviedb, sha1($_POST['password']))
			);
		$record = mysqli_query($moviedb, $sql) or die(mysqli_error($moviedb));
			if ($table = mysqli_fetch_assoc($record)) {
				// ログイン成功
				$_SESSION['id'] = $table['user_id'];
				$_SESSION['time'] = time();
				// ログイン情報を記録する
				if ($_POST['save'] == 'on') {
					setcookie('email', $_POST['email'], time()+60*60*24*14);
					setcookie('password', $_POST['password'],
					time()+60*60*24*14);
				}
				header('Location: index.php');
				exit();
			}
			else {
				$error['login'] = 'failed';
				//header('Location: ../login/');
			}
		} else {
			$error['login'] = 'blank';
			//header('Location: ../login/');
		}
	}
}
?>
