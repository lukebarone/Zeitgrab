<?php
	require "header.inc";
?>
<p>Please log in below:</p>
		<table noborders borders=0" cellpadding="5">
			<form method="post" action="checklogin.php">
			<tr>
				<td><strong>Username:</strong></td>
				<td><input type="text" name="username" maxwidth=25 size="25" /></td>
			</tr>
			<tr>
				<td><strong>Password:</strong></td>
				<td><input type="password" name="password" maxwidth=25 size="25" /></td>
			</tr>
			<tr>
				<td colspan=2 align="center"><input type="submit" title="Login" name="submit" /></td>
			</tr>
			</form>
		</table>
		
<?php
	require "footer.inc";
?>