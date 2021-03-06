<?php
$statuses = array(
	'safe-high'   => array(),
	'high'        => array(),
	'safe-medium' => array(),
	'medium'      => array(),
	'safe-low'    => array(),
	'low'         => array(),
);

$statuses = apply_filters( 'itsec_add_dashboard_status', $statuses );

echo '<div id="itsec_tabbed_dashboard_content">';
echo '<ul class="itsec-tabs">';
echo '<li><a href="#itsec_showall">' . __( 'All', 'better-wp-security' ) . '</a></li>';
echo '<li><a href="#itsec_high">' . __( 'High', 'better-wp-security' ) . '</a></li>';
echo '<li><a href="#itsec_medium">' . __( 'Medium', 'better-wp-security' ) . '</a></li>';
echo '<li><a href="#itsec_low">' . __( 'Low', 'better-wp-security' ) . '</a></li>';
echo '<li><a href="#itsec_completed">' . __( 'Completed', 'better-wp-security' ) . '</a></li>';
echo '</ul>';

// Begin High Priority Tab
echo '<div id="itsec_high">';
if ( isset ( $statuses['high'][0] ) ) {

	printf( '<h2>%s</h2>', __( 'High Priority', 'better-wp-security' ) );
	_e( 'These are items that should be secured immediately.', 'better-wp-security' );

	echo '<ul class="statuslist high-priority">';

	if ( isset ( $statuses['high'] ) ) {

		$this->status_loop( $statuses['high'], __( 'Fix it', 'better-wp-security' ), 'primary' );

	}

	echo '</ul>';

} else {
	echo '<div class="itsec-priority-items-completed">';
	printf( '<h2>%s</h2>', __( 'High Priority', 'better-wp-security' ) );
	printf( '<p>%s</p>', __( 'You have secured all High Priority items.', 'better-wp-security' ) );
	echo '</div>';
}

echo '</div>';

// Begin Medium Priority Tab
echo '<div id="itsec_medium">';

if ( isset ( $statuses['medium'][0] ) ) {

	printf( '<h2>%s</h2>', __( 'Medium Priority', 'better-wp-security' ) );
	_e( 'These are medium priority items that should be fixed if no conflicts are present, but they are not critical to the overall security of your site.', 'better-wp-security' );

	echo '<ul class="statuslist medium-priority">';

	if ( isset ( $statuses['medium'] ) ) {

		$this->status_loop( $statuses['medium'], __( 'Fix it', 'better-wp-security' ), 'primary' );

	}

	echo '</ul>';

} else {
	echo '<div class="itsec-priority-items-completed">';
	printf( '<h2>%s</h2>', __( 'Medium Priority', 'better-wp-security' ) );
	printf( '<p>%s</p>', __( 'You have secured all Medium Priority items.', 'better-wp-security' ) );
	echo '</div>';
}

echo '</div>';

// Begin Low Priority Tab
echo '<div id="itsec_low">';

if ( isset ( $statuses['low'][0] ) ) {

	printf( '<h2>%s</h2>', __( 'Low Priority', 'better-wp-security' ) );
	_e( 'These are low priority items that should be secured if, and only if, your plugins or theme do not conflict with their use.', 'better-wp-security' );

	echo '<ul class="statuslist low-priority">';

	if ( isset ( $statuses['low'] ) ) {

		$this->status_loop( $statuses['low'], __( 'Fix it', 'better-wp-security' ), 'primary' );

	}

	echo '</ul>';

} else {
	echo '<div class="itsec-priority-items-completed">';
	printf( '<h2>%s</h2>', __( 'Low Priority', 'better-wp-security' ) );
	printf( '<p>%s</p>', __( 'You have secured all Low Priority items.', 'better-wp-security' ) );
	echo '</div>';
}

echo '</div>';

// Begin Completed Tab
echo '<div id="itsec_completed">';

if ( isset ( $statuses['safe-high'] ) || isset ( $statuses['safe-medium'] ) || isset ( $statuses['safe-low'] ) ) {

	printf( '<h2>%s</h2>', __( 'Completed', 'better-wp-security' ) );
	_e( 'These are items that you have successfully secured.', 'better-wp-security' );

	echo '<ul class="statuslist completed">';

	if ( isset ( $statuses['safe-high'] ) ) {

		$this->status_loop( $statuses['safe-high'], __( 'Edit', 'better-wp-security' ), 'secondary' );

	}

	if ( isset ( $statuses['safe-medium'] ) ) {

		$this->status_loop( $statuses['safe-medium'], __( 'Edit', 'better-wp-security' ), 'secondary' );

	}

	if ( isset ( $statuses['safe-low'] ) ) {

		$this->status_loop( $statuses['safe-low'], __( 'Edit', 'better-wp-security' ), 'secondary' );

	}

	echo '</ul>';

}

echo '</div>';

// Begin Show All Tab
echo '<div id="itsec_showall">';

if ( isset ( $statuses['high'][0] ) ) {

	printf( '<h2>%s</h2>', __( 'High Priority', 'better-wp-security' ) );
	_e( 'These are items that should be secured immediately.', 'better-wp-security' );

	echo '<ul class="statuslist high-priority">';

	if ( isset ( $statuses['high'] ) ) {

		$this->status_loop( $statuses['high'], __( 'Fix it', 'better-wp-security' ), 'primary' );

	}

	echo '</ul>';

} else {
	echo '<div class="itsec-priority-items-completed">';
	printf( '<h2>%s</h2>', __( 'High Priority', 'better-wp-security' ) );
	printf( '<p>%s</p>', __( 'You have secured all High Priority items.', 'better-wp-security' ) );
	echo '</div>';
}

if ( isset ( $statuses['medium'][0] ) ) {

	printf( '<h2>%s</h2>', __( 'Medium Priority', 'better-wp-security' ) );
	_e( 'These are items that should be secured if possible however they are not critical to the overall security of your site.', 'better-wp-security' );

	echo '<ul class="statuslist medium-priority">';

	if ( isset ( $statuses['medium'] ) ) {

		$this->status_loop( $statuses['medium'], __( 'Fix it', 'better-wp-security' ), 'primary' );

	}

	echo '</ul>';

} else {
	echo '<div class="itsec-priority-items-completed">';
	printf( '<h2>%s</h2>', __( 'Medium Priority', 'better-wp-security' ) );
	printf( '<p>%s</p>', __( 'You have secured all Medium Priority items.', 'better-wp-security' ) );
	echo '</div>';
}

if ( isset ( $statuses['low'][0] ) ) {

	printf( '<h2>%s</h2>', __( 'Low Priority', 'better-wp-security' ) );
	_e( 'These are items that should be secured if, and only if, your plugins or theme do not conflict with their use.', 'better-wp-security' );

	echo '<ul class="statuslist low-priority">';

	if ( isset ( $statuses['low'] ) ) {

		$this->status_loop( $statuses['low'], __( 'Fix it', 'better-wp-security' ), 'primary' );

	}

	echo '</ul>';

} else {
	echo '<div class="itsec-priority-items-completed">';
	printf( '<h2>%s</h2>', __( 'Low Priority', 'better-wp-security' ) );
	printf( '<p>%s</p>', __( 'You have secured all Low Priority items.', 'better-wp-security' ) );
	echo '</div>';
}

if ( isset ( $statuses['safe-high'] ) || isset ( $statuses['safe-medium'] ) || isset ( $statuses['safe-low'] ) ) {

	printf( '<h2>%s</h2>', __( 'Completed', 'better-wp-security' ) );
	_e( 'These are items that you have successfuly secured.', 'better-wp-security' );

	echo '<ul class="statuslist completed">';

	if ( isset ( $statuses['safe-high'] ) ) {

		$this->status_loop( $statuses['safe-high'], __( 'Edit', 'better-wp-security' ), 'secondary' );

	}

	if ( isset ( $statuses['safe-medium'] ) ) {

		$this->status_loop( $statuses['safe-medium'], __( 'Edit', 'better-wp-security' ), 'secondary' );

	}

	if ( isset ( $statuses['safe-low'] ) ) {

		$this->status_loop( $statuses['safe-low'], __( 'Edit', 'better-wp-security' ), 'secondary' );

	}

	echo '</ul>';

}

echo '</div>';
echo '</div>';