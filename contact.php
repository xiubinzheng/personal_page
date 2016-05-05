<!DOCTYPE html>
<html lang="en">
<head>
<title></title>

<!-- Bootstrap core CSS -->
<?php include 'imports.php'?>

  </head>

<body>

	<div class="container">

      <?php include "header.php";?>
        <?php include "sendEmail.php";?>
  <br />
		<?php
		
		if (isset ( $_POST ['contactMessage'] )) {
			try {
				$_SESSION ['contactName'] = $_POST ['contactName'];
				$_SESSION ['contactEmail'] = $_POST ['contactMessage'];
				$_SESSION ['contactMessage'] = $_POST ['contactMessage'];
				
				if(sendEmail())
				{
					include 'html/sendMailSuccess.html';
				}else{
					include 'html/sendMailFail.html';
				}
				
			} catch ( Exception $e ) {
				echo "<div valign=\"center\"><span>unable to send email please try again.</span></div>";
				include 'form/contactForm.php';
			}
		} else {
			include 'form/contactForm.php';
		}
		?>
		
		<br /> <br />



	</div>
	<!-- /container -->

 <?php include 'footer.php'; ?>

</body>
</html>





