<div class="shoe">
	<div id="container">
		<?php //if ($_SESSION['login'] != '') { ?>
		<form id="chatpost">
			<label for="chatmessage">Chat Message:</label><br/>
			<textarea name="chatmessage" id="chatmessage-picks" placeholder="Login To Chat"></textarea><br/>
			<input type="submit" name="submit" id="send-picks" value="Send">
		</form>	
	  <?php //} ?>
  </div>
  <div id="chatwindow">
  	<div id="messages-picks"></div>
	</div>
</div>