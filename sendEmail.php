<?php
function sendEmail() {
	return mail ( "xiubin.zheng7@gmail.com", "new business email from you site", $_SESSION['contactMessage'] );
	session_destroy();
}

?>