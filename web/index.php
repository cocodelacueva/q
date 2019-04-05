<?php
/*
 * @LaCueva.tv
 * INDEX: ROUTEADOR
 *
*/
//functions incluye config, por lo tanto no es necesario llamarlo
require_once 'inc/functions.php';

//define la pageactual que se usa en toda la navegación
define('PAGEACTUAL', pageActual( cleanUri() ) );

switch ( PAGEACTUAL ) {    
    case 'q1' :
    case 'q2' :
    case 'q3' :
    case 'q4' :
    case 'q5' :
    case 'q6' :
    case 'q5plus' :
    case 'q6plus' :
        getPage( 'destino' );
    break;

    default:
        getPage( PAGEACTUAL );
    break;
}