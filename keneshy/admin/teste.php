 <?php
if (session_start()==PHP_SESSION_NONE) {
	echo 'on avance...';
}
else{
	session_start();
	echo "on vient de demarrer la session";
}

