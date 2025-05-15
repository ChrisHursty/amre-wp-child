<?php

/**
 * View: Month View – Custom Calendar Header
 *
 * Override at:
 * your-theme/tribe/events/v2/month/calendar-header.php
 *
 * @version 6.x
 */

use Tribe__Date_Utils as Dates;

// ----------------------------------------
// 1) Grab the “bar date” exactly like datepicker.php does
// ----------------------------------------
$default_date        = $now; // from month.php context
$selected_date_value = $this->get(['bar', 'date'], $default_date);
if (empty($selected_date_value)) {
	$selected_date_value = $default_date;
}

// Turn into timestamp
$selected_ts = strtotime($selected_date_value);

// ----------------------------------------
// 2) Build the F Y label from that timestamp
// ----------------------------------------
$label = date_i18n('F Y', $selected_ts); // e.g. “June 2025” when viewing June

// ----------------------------------------
// 3) Weekday names for header row
// ----------------------------------------
global $wp_locale;
$days_of_week = tribe_events_get_days_of_week();

?>
<nav class="tribe-events-calendar-month__header" role="presentation">
	<div class="header-container">
		<!-- Prev arrowww -->
		<div class="tribe-events-calendar-month-nav tribe-events-calendar-month-nav--prev">
			<?php $this->template('month/top-bar/nav/prev'); ?>
		</div>

		<!-- Centered Month Label -->
		<div class="tribe-events-calendar-month-title-container">
			<span class="tribe-events-calendar-month__header-title">
				<?php echo esc_html($label); ?>
			</span>
		</div>

		<!-- Next arrow -->
		<div class="tribe-events-calendar-month-nav tribe-events-calendar-month-nav--next">
			<?php $this->template('month/top-bar/nav/next'); ?>
		</div>
	</div>
	<!-- Weekday row: 2 letters on mobile, 3 on desktop -->
	<div class="tribe-events-calendar-month__header-row" role="row">
		<?php foreach ($days_of_week as $day) :
			$abbr    = $wp_locale->get_weekday_abbrev($day);   // “Mon”
			$initial = mb_substr($abbr, 0, 2);                 // “Mo”
		?>
			<div class="tribe-events-calendar-month__header-column" role="columnheader">
				<span class="tribe-events-calendar-month__header-column-title-mobile">
					<?php echo esc_html($initial); ?>
				</span>
				<span class="tribe-events-calendar-month__header-column-title-desktop">
					<?php echo esc_html($abbr); ?>
				</span>
			</div>
		<?php endforeach; ?>
	</div>

</nav>