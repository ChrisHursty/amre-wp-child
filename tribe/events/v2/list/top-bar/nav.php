<?php
/**
 * View: Top Bar - Navigation
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/v2/list/top-bar/nav.php
 *
 * See more documentation about our views templating system.
 *
 * @link http://evnt.is/1aiy
 *
 * @version 5.0.1
 *
 * @var string $prev_url The URL to the previous page, if any, or an empty string.
 * @var string $next_url The URL to the next page, if any, or an empty string.
 */
?>
<nav class="tribe-events-c-top-bar__nav tribe-common-a11y-hidden three">
	<ul class="tribe-events-c-top-bar__nav-list">
		<?php
		if ( ! empty( $prev_url ) ) {
			$this->template( 'month/top-bar/nav/prev' );
		} else {
			$this->template( 'month/top-bar/nav/prev' );
		}
		?>
		<li class="tribe-events-c-top-bar__nav-list-item">
			<?php $this->template( 'month/top-bar/datepicker' ); ?>
		</li>
		<?php
		if ( ! empty( $next_url ) ) {
			$this->template( 'month/top-bar/nav/next' );
		} else {
			$this->template( 'month/top-bar/nav/next' );
		}
		?>
	</ul>
</nav>
