<div class="shoe">
<?php	//if ($_SESSION['login'] != '') { ?>
	<div id="container">
		<form id="chatpost">
			<label for="chatmessage">Chat Message:</label><br/>
			<textarea name="chatmessage" id="chatmessage-fantasy" placeholder="Login To Chat"></textarea><br/>
			<input type="submit" name="submit" id="send-fantasy" value="Send">
		</form>	
 	</div>
<?php //} ?>
	<div id="chatwindow">
  	<div id="messages-fantasy"></div>
	</div>
</div>