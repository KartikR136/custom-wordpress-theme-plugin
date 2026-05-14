<?php
$settings = lmp_get_settings();
?>

<div class="wrap">
	<h1>Lead Manager Settings</h1>

	<form method="post">
		<table class="form-table">
			<tr>
				<th>Email Notifications</th>
				<td>
					<input type="checkbox" checked />
				</td>
			</tr>

			<tr>
				<th>Admin Email</th>
				<td>
					<input
						type="email"
						value="kr5665@gmail.com"
						class="regular-text"
					/>
				</td>
			</tr>
		</table>

		<?php submit_button( 'Save Settings' ); ?>
	</form>
</div>