<?php
/**
 * View: Month View – Calendar Body
 *
 * Override at:
 * [your-theme]/tribe/events/v2/month/calendar-body.php
 *
 * @version 4.9.8
 *
 * @var array $days Days data keyed by “Y-m-d”.
 */
?>
<div class="tribe-events-calendar-month__body" role="rowgroup">
    <?php foreach ( array_chunk( $days, 7, true ) as $week ) : ?>
        <div class="tribe-events-calendar-month__week" role="row" data-js="tribe-events-month-grid-row">
            <?php foreach ( $week as $day_date => $day ) : ?>
                <?php $this->template( 'month/calendar-body/day', [ 'day_date' => $day_date, 'day' => $day ] ); ?>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</div>
