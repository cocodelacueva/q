<?php
/*
 * PAGE DESTINO: 
 * es el html de la pagina de destino
*/

$disney = array(
    'header' => array(
        'letras' => 'q1-header',
        'link' => '#compra-online',
        'paquete' => 'disney',
        'menu' => '',
        'imagen' => array(
            'imagen' => 'q1-header.jpg',
            'imagenRetina' => 'q1-header@2x.jpg',
            'imagenMobil' => 'q1-header-mobile.jpg',
            'imagenMobilRetina' => 'q1-header-mobile@2x.jpg',
        ),
    ),
    'color' => 'rosa',
    'titulo' => 'Disney',
    'noches' => '9 Noches',
    'icon' => array('svg' => 'q1-header.svg', '1X' => 'q1-header.png', '2X' => 'q1-header@2x.png'),
    'resumen' => '<p>Es el más completo de todas las opciones y tiene la particularidad de que durante tu estadía en Orlando, además de alojarte dentro del mundo de Disney, también te alojás dentro del mundo Universal, obteniendo una hora extra en todos los parques para disfrutar más y sin largas colas, de las principales atracciones, como por ejemplo la de Harry Potter o Toy Story Land.</p>',
    'dataDestino' => array(
        array( 'titulo' => 'Duración', 'lista' => array( '09 Días totales' ) ),
        array( 'titulo' => 'Destinos', 'lista' => array( 'Orlando') ),
        array( 'titulo' => 'Noches de alojamiento', 'lista' => array( '08 Noches totales', ) ),
        array( 'titulo' => 'Estadía', 'lista' => array( '09 Noches en Disney Parks' ) ),
        array( 'titulo' => 'Parques temáticos', 'lista' => array( '09 totales', '04 Disney Parks' ) ),

    ),
    'pdf' => '#',
    'pdf_size' => '50MB',
    'extra' => array(
        array('titulo' => 'Parques temáticos', 
            'icon' => array('svg' => 'parques-icon.svg', '1X' => 'parques-icon.png', '2X' => 'parques-icon@2x.png'),
            'data' => array('Disney Parks')
        ),
        array('titulo' => 'Tour de compras',
            'icon' => array('svg' => 'compras-icon.svg', '1X' => 'compras-icon.png', '2X' => 'compras-icon@2x.png'),
            'data' => array('Premium Outlets', 'Florida mall', 'Mall At Milenia','Disney Springs')
        ),
        array('titulo' => 'Cenas y fiestas exclusivas', 'icon' => array('svg' => 'cenas-icon.svg', '1X' => 'cenas-icon.png', '2X' => 'cenas-icon@2x.png'),
         'data' => array('Rainforest Café', 'Camila´s Restaurant', 'T Rex o Planet Hollywood', 'IDrive', 'Sr. Frogs', 'Paradise Cove y/o 3 Nine' ),
        ),
        array('titulo' => 'Extras incluidos',
            'icon' => array('svg' => 'extras-icon.svg', '1X' => 'extras-icon.png', '2X' => 'extras-icon@2x.png'),
            'data' => array('Gift Card', 'Club Q', 'Kit de viaje exclusivo', 'Jornada de integración', 'Tu viaje en vivo')
        ), 
    ),
);

$disneyUniversal = array(
    'header' => array(
        'letras' => 'q2-header',
        'link' => '#compra-online',
        'paquete' => 'disney-universal',
        'menu' => '',
        'imagen' => array(
            'imagen' => 'q2-header.jpg',
            'imagenRetina' => 'q2-header@2x.jpg',
            'imagenMobil' => 'q2-header-mobile.jpg',
            'imagenMobilRetina' => 'q2-header-mobile@2x.jpg',
        ),
    ),
    'color' => 'rosa',
    'titulo' => 'Disney y Universal',
    'noches' => '11 Noches',
    'icon' => array('svg' => 'q2-header.svg', '1X' => 'q2-header.png', '2X' => 'q2-header@2x.png'),
    'resumen' => '<p>Es el más completo de todas las opciones y tiene la particularidad de que durante tu estadía en Orlando, además de alojarte dentro del mundo de Disney, también te alojás dentro del mundo Universal, obteniendo una hora extra en todos los parques para disfrutar más y sin largas colas, de las principales atracciones, como por ejemplo la de Harry Potter o Toy Story Land.</p>',
    'dataDestino' => array(
        array( 'titulo' => 'Duración', 'lista' => array( '09 Días totales' ) ),
        array( 'titulo' => 'Destinos', 'lista' => array( 'Orlando') ),
        array( 'titulo' => 'Noches de alojamiento', 'lista' => array( '08 Noches totales', ) ),
        array( 'titulo' => 'Estadía', 'lista' => array( '09 Noches en Disney Parks' ) ),
        array( 'titulo' => 'Parques temáticos', 'lista' => array( '09 totales', '04 Disney Parks' ) ),

    ),
    'pdf' => '#',
    'pdf_size' => '50MB',
    'extra' => array(
        array('titulo' => 'Parques temáticos', 
            'icon' => array('svg' => 'parques-icon.svg', '1X' => 'parques-icon.png', '2X' => 'parques-icon@2x.png'),
            'data' => array('Disney Parks')
        ),
        array('titulo' => 'Tour de compras',
            'icon' => array('svg' => 'compras-icon.svg', '1X' => 'compras-icon.png', '2X' => 'compras-icon@2x.png'),
            'data' => array('Premium Outlets', 'Florida mall', 'Mall At Milenia','Disney Springs')
        ),
        array('titulo' => 'Cenas y fiestas exclusivas', 'icon' => array('svg' => 'cenas-icon.svg', '1X' => 'cenas-icon.png', '2X' => 'cenas-icon@2x.png'),
         'data' => array('Rainforest Café', 'Camila´s Restaurant', 'T Rex o Planet Hollywood', 'IDrive', 'Sr. Frogs', 'Paradise Cove y/o 3 Nine' ),
        ),
        array('titulo' => 'Extras incluidos',
            'icon' => array('svg' => 'extras-icon.svg', '1X' => 'extras-icon.png', '2X' => 'extras-icon@2x.png'),
            'data' => array('Gift Card', 'Club Q', 'Kit de viaje exclusivo', 'Jornada de integración', 'Tu viaje en vivo')
        ), 
    ),
);

$disneyMiami = array(
    'header' => array(
        'letras' => 'q3-header',
        'link' => '#compra-online',
        'paquete' => 'disney-universal',
        'menu' => '',
        'imagen' => array(
            'imagen' => 'q3-header.jpg',
            'imagenRetina' => 'q3-header@2x.jpg',
            'imagenMobil' => 'q3-header-mobile.jpg',
            'imagenMobilRetina' => 'q3-header-mobile@2x.jpg',
        ),
    ),
    'color' => 'rosa',
    'titulo' => 'Disney y Miami',
    'noches' => '14 Noches',
    'icon' => array('svg' => 'q3-header.svg', '1X' => 'q3-header.png', '2X' => 'q3-header@2x.png'),
    'resumen' => '<p>Es el más completo de todas las opciones y tiene la particularidad de que durante tu estadía en Orlando, además de alojarte dentro del mundo de Disney, también te alojás dentro del mundo Universal, obteniendo una hora extra en todos los parques para disfrutar más y sin largas colas, de las principales atracciones, como por ejemplo la de Harry Potter o Toy Story Land.</p>',
    'dataDestino' => array(
        array( 'titulo' => 'Duración', 'lista' => array( '09 Días totales' ) ),
        array( 'titulo' => 'Destinos', 'lista' => array( 'Orlando') ),
        array( 'titulo' => 'Noches de alojamiento', 'lista' => array( '08 Noches totales', ) ),
        array( 'titulo' => 'Estadía', 'lista' => array( '09 Noches en Disney Parks' ) ),
        array( 'titulo' => 'Parques temáticos', 'lista' => array( '09 totales', '04 Disney Parks' ) ),

    ),
    'pdf' => '#',
    'pdf_size' => '50MB',
    'extra' => array(
        array('titulo' => 'Parques temáticos', 
            'icon' => array('svg' => 'parques-icon.svg', '1X' => 'parques-icon.png', '2X' => 'parques-icon@2x.png'),
            'data' => array('Disney Parks')
        ),
        array('titulo' => 'Tour de compras',
            'icon' => array('svg' => 'compras-icon.svg', '1X' => 'compras-icon.png', '2X' => 'compras-icon@2x.png'),
            'data' => array('Premium Outlets', 'Florida mall', 'Mall At Milenia','Disney Springs')
        ),
        array('titulo' => 'Cenas y fiestas exclusivas', 'icon' => array('svg' => 'cenas-icon.svg', '1X' => 'cenas-icon.png', '2X' => 'cenas-icon@2x.png'),
         'data' => array('Rainforest Café', 'Camila´s Restaurant', 'T Rex o Planet Hollywood', 'IDrive', 'Sr. Frogs', 'Paradise Cove y/o 3 Nine' ),
        ),
        array('titulo' => 'Extras incluidos',
            'icon' => array('svg' => 'extras-icon.svg', '1X' => 'extras-icon.png', '2X' => 'extras-icon@2x.png'),
            'data' => array('Gift Card', 'Club Q', 'Kit de viaje exclusivo', 'Jornada de integración', 'Tu viaje en vivo')
        ), 
    ),
);

switch (PAGEACTUAL) {
    case 'disney':
        $pageData = array($disney,$disneyUniversal);
    break;

    case 'disney-universal':
        $pageData = array($disneyUniversal,$disney,$disneyMiami);
    break;

    case 'disney-miami':
        $pageData = array($disneyMiami,$disney,$disneyUniversal);
    break;
}


getTemplate( 'header' ); ?>

<div class="inner-wrapper">

    <?php if ( ! empty($pageData) ) : ?>
    <div class="destinos-page-sliders">

        <div id="destino-slider" class="owl-carousel">
            <?php getTemplate( 'slide-page-destino', $pageData ); ?>
        </div>

    </div>

    <?php else :
        
        getTemplate( 'error' );

    endif;
    ?>

    <section id="compraonline"></section>

</div><!-- // INNVER WRAPPER -->

<?php getTemplate( 'footer' );