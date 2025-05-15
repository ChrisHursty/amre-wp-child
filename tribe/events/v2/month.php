<?php
/**
 * View: Month View
 *
 * Override at:
 * [your-theme]/tribe/events/v2/month.php
 *
 * @version 6.2.0
 * @since   6.1.4
 */

$header_classes = [ 'tribe-events-header' ];
if ( empty( $disable_event_search ) ) {
    $header_classes[] = 'tribe-events-header--has-event-search';
}
?>
<div
    <?php tribe_classes( $container_classes ); ?>
    data-js="tribe-events-view"
    data-view-rest-url="<?php echo esc_url( $rest_url ); ?>"
    data-view-rest-method="<?php echo esc_attr( $rest_method ); ?>"
    data-view-manage-url="<?php echo esc_attr( $should_manage_url ); ?>"
    <?php foreach ( $container_data as $key => $value ) : ?>
        data-view-<?php echo esc_attr( $key ) ?>="<?php echo esc_attr( $value ) ?>"
    <?php endforeach; ?>
    <?php if ( ! empty( $breakpoint_pointer ) ) : ?>
        data-view-breakpoint-pointer="<?php echo esc_attr( $breakpoint_pointer ); ?>"
    <?php endif; ?>
>
    <section class="tribe-common-l-container tribe-events-l-container">

        <?php $this->template( 'components/loader', [ 'text' => __( 'Loading...', 'the-events-calendar' ) ] ); ?>
        <?php $this->template( 'components/json-ld-data' ); ?>
        <?php $this->template( 'components/data' ); ?>
        <?php $this->template( 'components/before' ); ?>

        <?php
        // THIS IS THE LINE THAT LOADS YOUR CUSTOM HEADER
        $this->template( 'month/calendar-header' );
        ?>

        <?php $this->template( 'components/filter-bar' ); ?>

        <?php
        // THIS IS THE LINE THAT LOADS YOUR CUSTOM BODY
        $this->template( 'month/calendar-body' );
        ?>

        <?php $this->template( 'components/messages', [ 'classes' => [ 'tribe-events-header__messages--mobile' ] ] ); ?>
        <?php $this->template( 'month/mobile-events' ); ?>
        <?php $this->template( 'components/ical-link' ); ?>
        <?php $this->template( 'components/after' ); ?>

    </section>
</div>

<?php $this->template( 'components/breakpoints' ); ?>
