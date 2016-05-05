<div>
	<br>
	<h2 class="contactForm_heading">Contact Me</h2>
	<div class="row">
		<div class="col-md-12">

			<form action="#" class="contactForm" id="contactForm" method="post">
				<div id="field1-container" class="field f_50">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="field1">Name:</label> <input name="name" id="field1"
						type="text">
				</div>
				<br>
				<div id="field2-container" class="field f_50">
					<label for="field2">Telephone:</label> <input name="tel"
						id="field2" type="text">
				</div>
				<br>
				<div id="field5-container" class="field f_50">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="field5">Email:</label> <input name="email" id="field5"
						type="email">
				</div>
				<br>
				<div id="field4-container" class="field f_100">
					&nbsp;&nbsp;<label for="field4">Message:</label>
					<textarea rows="5" cols="20" name="message" id="field4"></textarea>
				</div>
				<br>
				<div id="field4-container" class="field f_50">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="RegisterUser_captcha_image"> </label> <img id="captcha"
						src="./securimage/securimage_show.php" alt="CAPTCHA Image" />
				</div>
				<div id="field4-container" class="field f_50">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="captcha_code" id="captcha_code" size="10"
						maxlength="6" /> <a href="#"
						onclick="document.getElementById('captcha').src = './securimage/securimage_show.php?' + Math.random(); return false">[
						Different Image ]</a>
				</div>
				<br>
				<div id="form-submit" class="field f_100 clearfix submit">
					<input value="Submit" type="submit">
				</div>
			</form>

		</div>
	</div>
</div>