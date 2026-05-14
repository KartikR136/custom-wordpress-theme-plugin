<?php
global $wpdb;

$table = $wpdb->prefix . 'lead_manager';

$leads = $wpdb->get_results(
	"SELECT * FROM {$table} ORDER BY created_at DESC"
);
?>

<div class="wrap">
	<h1>Lead Manager Dashboard</h1>

	<div class="lmp-dashboard-grid">

		<?php if ( ! empty( $leads ) ) : ?>
			<?php foreach ( $leads as $lead ) : ?>

				<div class="lmp-card">
					<h3><?php echo esc_html( $lead->name ); ?></h3>
					<p><?php echo esc_html( $lead->email ); ?></p>
					<p><?php echo esc_html( $lead->message ); ?></p>
					<small><?php echo esc_html( lmp_format_datetime( $lead->created_at ) ); ?></small>
				</div>

			<?php endforeach; ?>
		<?php else : ?>

			<p>No leads captured yet.</p>

		<?php endif; ?>

	</div>
</div>