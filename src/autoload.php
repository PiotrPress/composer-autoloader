<?php return spl_autoload_register( function( string $class ) {
    $map = require __DIR__ . '/classmap.php';
    if ( isset( $map[ $class ] ) ) require __DIR__ . $map[ $class ];
} );