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
        array( 'titulo' => 'Duración', 'lista' => array( '11 Días totales' ) ),
        array( 'titulo' => 'Destinos', 'lista' => array( 'Orlando') ),
        array( 'titulo' => 'Noches de alojamiento', 'lista' => array( '9 Noches totales', ) ),
        array( 'titulo' => 'Estadía', 'lista' => array( '09 Noches en Disney Resorts' ) ),
        array( 'titulo' => 'Parques temáticos', 'lista' => array( '04 Disney Parks' ) ),

    ),
    'pdf' => 'q1-itinerario.pdf',
    'pdf_size' => '50MB',
    'extra' => array(
        array('titulo' => 'Parques temáticos', 
            'icon' => array('svg' => 'parques-icon.svg', '1X' => 'parques-icon.png', '2X' => 'parques-icon@2x.png'),
            'data' => array('Disney Parks')
        ),
        array('titulo' => 'Tour de compras',
            'icon' => array('svg' => 'compras-icon.svg', '1X' => 'compras-icon.png', '2X' => 'compras-icon@2x.png'),
            'data' => array('Walmart', 'Disney Spring', 'Outlets','Tecno Shopping y perfumerías')
        ),
        array('titulo' => 'Cenas y fiestas exclusivas', 'icon' => array('svg' => 'cenas-icon.svg', '1X' => 'cenas-icon.png', '2X' => 'cenas-icon@2x.png'),
         'data' => array('Rainforest Café', 'Camila´s Restaurant', 'T Rex o Planet Hollywood', 'IDrive'),
        ),
        array('titulo' => 'Extras incluidos',
            'icon' => array('svg' => 'extras-icon.svg', '1X' => 'extras-icon.png', '2X' => 'extras-icon@2x.png'),
            'data' => array('Exclusive Card', 'Club Q', 'Kit de viaje exclusivo', 'Jornada de integración', 'Gestión Visa grupal')
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
        array( 'titulo' => 'Duración', 'lista' => array( '11 Días totales' ) ),
        array( 'titulo' => 'Destinos', 'lista' => array( 'Orlando') ),
        array( 'titulo' => 'Noches de alojamiento', 'lista' => array( '09 Noches totales', ) ),
        array( 'titulo' => 'Estadía', 'lista' => array( '09 Noches en Disney Resorts' ) ),
        array( 'titulo' => 'Parques temáticos', 'lista' => array( '09 totales', '04 Disney Parks', '07 Universal Parks' ) ),

    ),
    'pdf' => 'q2-itinerario.pdf',
    'pdf_size' => '50MB',
    'extra' => array(
        array('titulo' => 'Parques temáticos', 
            'icon' => array('svg' => 'parques-icon.svg', '1X' => 'parques-icon.png', '2X' => 'parques-icon@2x.png'),
            'data' => array('04 Disney Parks', '03 Universal Parks', '02 SeaWorld Parks')
        ),
        array('titulo' => 'Tour de compras',
            'icon' => array('svg' => 'compras-icon.svg', '1X' => 'compras-icon.png', '2X' => 'compras-icon@2x.png'),
            'data' => array('Walmart', 'Disney Spring', 'Outlets','Tecno Shopping y perfumerías')
        ),
        array('titulo' => 'Cenas y fiestas exclusivas', 'icon' => array('svg' => 'cenas-icon.svg', '1X' => 'cenas-icon.png', '2X' => 'cenas-icon@2x.png'),
         'data' => array('Rainforest Café', 'Camila´s Restaurant', 'T Rex o Planet Hollywood', 'IDrive' ),
        ),
        array('titulo' => 'Extras incluidos',
            'icon' => array('svg' => 'extras-icon.svg', '1X' => 'extras-icon.png', '2X' => 'extras-icon@2x.png'),
            'data' => array('Exclusive Card', 'Club Q', 'Kit de viaje exclusivo', 'Gestión de Visa Grupal', 'Jornada de integración')
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
        array( 'titulo' => 'Duración', 'lista' => array( '13 Días totales' ) ),
        array( 'titulo' => 'Destinos', 'lista' => array( 'Orlando') ),
        array( 'titulo' => 'Noches de alojamiento', 'lista' => array( '11 Noches totales', ) ),
        array( 'titulo' => 'Estadía', 'lista' => array( '09 Noches en Disney Resorts' ) ),
        array( 'titulo' => 'Parques temáticos', 'lista' => array( '09 totales', '04 Disney Parks', '03 Universal Parks', '02 SeaWorld Parks' ) ),

    ),
    'pdf' => 'q3-itinerario.pdf',
    'pdf_size' => '50MB',
    'extra' => array(
        array('titulo' => 'Parques temáticos', 
            'icon' => array('svg' => 'parques-icon.svg', '1X' => 'parques-icon.png', '2X' => 'parques-icon@2x.png'),
            'data' => array('Disney Parks', 'Universal Parks', 'SeaWorld Parks')
        ),
        array('titulo' => 'Tour de compras',
            'icon' => array('svg' => 'compras-icon.svg', '1X' => 'compras-icon.png', '2X' => 'compras-icon@2x.png'),
            'data' => array('Walmart', 'Disney Spring', 'Outlets','Tecno Shopping y perfumerías')
        ),
        array('titulo' => 'Cenas y fiestas exclusivas', 'icon' => array('svg' => 'cenas-icon.svg', '1X' => 'cenas-icon.png', '2X' => 'cenas-icon@2x.png'),
         'data' => array('Rainforest Café', 'Camila´s Restaurant', 'T Rex o Planet Hollywood', 'IDrive' ),
        ),
        array('titulo' => 'Extras incluidos',
            'icon' => array('svg' => 'extras-icon.svg', '1X' => 'extras-icon.png', '2X' => 'extras-icon@2x.png'),
            'data' => array('Exclusive Card', 'Club Q', 'Kit de viaje exclusivo', 'Jornada de integración', 'Gestión Visa grupal')
        ), 
    ),
);

$q4 = array(
    'header' => array(
        'letras' => 'q4-header',
        'link' => '#compra-online',
        'paquete' => 'q4',
        'menu' => '',
        'imagen' => array(
            'imagen' => 'q4-header.jpg',
            'imagenRetina' => 'q4-header@2x.jpg',
            'imagenMobil' => 'q4-header-mobile.jpg',
            'imagenMobilRetina' => 'q4-header-mobile@2x.jpg',
        ),
    ),
    'color' => 'rosa',
    'titulo' => 'Disney y Miami',
    'noches' => '14 Noches',
    'icon' => array('svg' => 'q4-header.svg', '1X' => 'q4-header.png', '2X' => 'q4-header@2x.png'),
    'resumen' => '<p>Es el más completo de todas las opciones y tiene la particularidad de que durante tu estadía en Orlando, además de alojarte dentro del mundo de Disney, también te alojás dentro del mundo Universal, obteniendo una hora extra en todos los parques para disfrutar más y sin largas colas, de las principales atracciones, como por ejemplo la de Harry Potter o Toy Story Land.</p>',
    'dataDestino' => array(
        array( 'titulo' => 'Duración', 'lista' => array( '13 Días totales' ) ),
        array( 'titulo' => 'Destinos', 'lista' => array( 'Orlando', 'Miami') ),
        array( 'titulo' => 'Noches de alojamiento', 'lista' => array( '11 Noches totales', ) ),
        array( 'titulo' => 'Estadía', 'lista' => array( '09 Noches en Disney Resorts', '02 noches en Miami Beach' ) ),
        array( 'titulo' => 'Parques temáticos', 'lista' => array( '07 totales', '04 Disney Parks', '03 Universal Parks' ) ),

    ),
    'pdf' => 'q4-itinerario.pdf',
    'pdf_size' => '50MB',
    'extra' => array(
        array('titulo' => 'Parques temáticos', 
            'icon' => array('svg' => 'parques-icon.svg', '1X' => 'parques-icon.png', '2X' => 'parques-icon@2x.png'),
            'data' => array('Disney Parks', 'Universal Parks')
        ),
        array('titulo' => 'Tour de compras',
            'icon' => array('svg' => 'compras-icon.svg', '1X' => 'compras-icon.png', '2X' => 'compras-icon@2x.png'),
            'data' => array('Walmart', 'Disney Spring', 'Outlets','Tecno Shopping y perfumerías')
        ),
        array('titulo' => 'Cenas y fiestas exclusivas', 'icon' => array('svg' => 'cenas-icon.svg', '1X' => 'cenas-icon.png', '2X' => 'cenas-icon@2x.png'),
         'data' => array('Rainforest Café', 'Camila´s Restaurant', 'T Rex o Planet Hollywood', 'IDrive' ),
        ),
        array('titulo' => 'Extras incluidos',
            'icon' => array('svg' => 'extras-icon.svg', '1X' => 'extras-icon.png', '2X' => 'extras-icon@2x.png'),
            'data' => array('Exclusive Card', 'Club Q', 'Kit de viaje exclusivo', 'Jornada de integración', 'Gestión Visa grupal')
        ), 
    ),
);

$q5 = array(
    'header' => array(
        'letras' => 'q5-header',
        'link' => '#compra-online',
        'paquete' => 'disney-universal',
        'menu' => '',
        'imagen' => array(
            'imagen' => 'q5-header.jpg',
            'imagenRetina' => 'q5-header@2x.jpg',
            'imagenMobil' => 'q5-header-mobile.jpg',
            'imagenMobilRetina' => 'q5-header-mobile@2x.jpg',
        ),
    ),
    'color' => 'rosa',
    'titulo' => 'Disney y Miami',
    'noches' => '14 Noches',
    'icon' => array('svg' => 'q5-header.svg', '1X' => 'q5-header.png', '2X' => 'q5-header@2x.png'),
    'resumen' => '<p>Es el más completo de todas las opciones y tiene la particularidad de que durante tu estadía en Orlando, además de alojarte dentro del mundo de Disney, también te alojás dentro del mundo Universal, obteniendo una hora extra en todos los parques para disfrutar más y sin largas colas, de las principales atracciones, como por ejemplo la de Harry Potter o Toy Story Land.</p>',
    'dataDestino' => array(
        array( 'titulo' => 'Duración', 'lista' => array( '13 Días totales' ) ),
        array( 'titulo' => 'Destinos', 'lista' => array( 'Orlando') ),
        array( 'titulo' => 'Noches de alojamiento', 'lista' => array( '11 Noches totales', ) ),
        array( 'titulo' => 'Estadía', 'lista' => array( '09 Noches en Disney Resorts' ) ),
        array( 'titulo' => 'Parques temáticos', 'lista' => array( '09 totales', '04 Disney Parks', '03 Universal Parks', '02 SeaWorld Parks' ) ),

    ),
    'pdf' => 'q5-itinerario.pdf',
    'pdf_size' => '50MB',
    'extra' => array(
        array('titulo' => 'Parques temáticos', 
            'icon' => array('svg' => 'parques-icon.svg', '1X' => 'parques-icon.png', '2X' => 'parques-icon@2x.png'),
            'data' => array('Disney Parks', 'Universal Parks', 'SeaWorld Parks')
        ),
        array('titulo' => 'Tour de compras',
            'icon' => array('svg' => 'compras-icon.svg', '1X' => 'compras-icon.png', '2X' => 'compras-icon@2x.png'),
            'data' => array('Walmart', 'Disney Spring', 'Outlets','Tecno Shopping y perfumerías')
        ),
        array('titulo' => 'Cenas y fiestas exclusivas', 'icon' => array('svg' => 'cenas-icon.svg', '1X' => 'cenas-icon.png', '2X' => 'cenas-icon@2x.png'),
         'data' => array('Rainforest Café', 'Camila´s Restaurant', 'T Rex o Planet Hollywood', 'IDrive' ),
        ),
        array('titulo' => 'Extras incluidos',
            'icon' => array('svg' => 'extras-icon.svg', '1X' => 'extras-icon.png', '2X' => 'extras-icon@2x.png'),
            'data' => array('Exclusive Card', 'Club Q', 'Kit de viaje exclusivo', 'Jornada de integración', 'Gestión Visa grupal')
        ), 
    ),
);

$q5plus = array(
    'header' => array(
        'letras' => 'q5p-header',
        'link' => '#compra-online',
        'paquete' => 'disney-universal',
        'menu' => '',
        'imagen' => array(
            'imagen' => 'q5p-header.jpg',
            'imagenRetina' => 'q5p-header@2x.jpg',
            'imagenMobil' => 'q5p-header-mobile.jpg',
            'imagenMobilRetina' => 'q5p-header-mobile@2x.jpg',
        ),
    ),
    'color' => 'rosa',
    'titulo' => 'Disney y Miami',
    'noches' => '14 Noches',
    'icon' => array('svg' => 'q5p-header.svg', '1X' => 'q5p-header.png', '2X' => 'q5p-header@2x.png'),
    'resumen' => '<p>Es el más completo de todas las opciones y tiene la particularidad de que durante tu estadía en Orlando, además de alojarte dentro del mundo de Disney, también te alojás dentro del mundo Universal, obteniendo una hora extra en todos los parques para disfrutar más y sin largas colas, de las principales atracciones, como por ejemplo la de Harry Potter o Toy Story Land.</p>',
    'dataDestino' => array(
        array( 'titulo' => 'Duración', 'lista' => array( '13 Días totales' ) ),
        array( 'titulo' => 'Destinos', 'lista' => array( 'Orlando') ),
        array( 'titulo' => 'Noches de alojamiento', 'lista' => array( '11 Noches totales', ) ),
        array( 'titulo' => 'Estadía', 'lista' => array( '09 Noches en Disney Resorts' ) ),
        array( 'titulo' => 'Parques temáticos', 'lista' => array( '09 totales', '04 Disney Parks', '03 Universal Parks', '02 SeaWorld Parks' ) ),

    ),
    'pdf' => 'q5plus-itinerario.pdf',
    'pdf_size' => '50MB',
    'extra' => array(
        array('titulo' => 'Parques temáticos', 
            'icon' => array('svg' => 'parques-icon.svg', '1X' => 'parques-icon.png', '2X' => 'parques-icon@2x.png'),
            'data' => array('Disney Parks', 'Universal Parks', 'SeaWorld Parks')
        ),
        array('titulo' => 'Tour de compras',
            'icon' => array('svg' => 'compras-icon.svg', '1X' => 'compras-icon.png', '2X' => 'compras-icon@2x.png'),
            'data' => array('Walmart', 'Disney Spring', 'Outlets','Tecno Shopping y perfumerías')
        ),
        array('titulo' => 'Cenas y fiestas exclusivas', 'icon' => array('svg' => 'cenas-icon.svg', '1X' => 'cenas-icon.png', '2X' => 'cenas-icon@2x.png'),
         'data' => array('Rainforest Café', 'Camila´s Restaurant', 'T Rex o Planet Hollywood', 'IDrive' ),
        ),
        array('titulo' => 'Extras incluidos',
            'icon' => array('svg' => 'extras-icon.svg', '1X' => 'extras-icon.png', '2X' => 'extras-icon@2x.png'),
            'data' => array('Exclusive Card', 'Club Q', 'Kit de viaje exclusivo', 'Jornada de integración', 'Gestión Visa grupal')
        ), 
    ),
);

$q6 = array(
    'header' => array(
        'letras' => 'q6-header',
        'link' => '#compra-online',
        'paquete' => 'disney-universal',
        'menu' => '',
        'imagen' => array(
            'imagen' => 'q6-header.jpg',
            'imagenRetina' => 'q6-header@2x.jpg',
            'imagenMobil' => 'q6-header-mobile.jpg',
            'imagenMobilRetina' => 'q6-header-mobile@2x.jpg',
        ),
    ),
    'color' => 'rosa',
    'titulo' => 'Disney y Miami',
    'noches' => '14 Noches',
    'icon' => array('svg' => 'q6-header.svg', '1X' => 'q6-header.png', '2X' => 'q6-header@2x.png'),
    'resumen' => '<p>Es el más completo de todas las opciones y tiene la particularidad de que durante tu estadía en Orlando, además de alojarte dentro del mundo de Disney, también te alojás dentro del mundo Universal, obteniendo una hora extra en todos los parques para disfrutar más y sin largas colas, de las principales atracciones, como por ejemplo la de Harry Potter o Toy Story Land.</p>',
    'dataDestino' => array(
        array( 'titulo' => 'Duración', 'lista' => array( '13 Días totales' ) ),
        array( 'titulo' => 'Destinos', 'lista' => array( 'Orlando') ),
        array( 'titulo' => 'Noches de alojamiento', 'lista' => array( '11 Noches totales', ) ),
        array( 'titulo' => 'Estadía', 'lista' => array( '09 Noches en Disney Resorts' ) ),
        array( 'titulo' => 'Parques temáticos', 'lista' => array( '09 totales', '04 Disney Parks', '03 Universal Parks', '02 SeaWorld Parks' ) ),

    ),
    'pdf' => 'q6-itinerario.pdf',
    'pdf_size' => '50MB',
    'extra' => array(
        array('titulo' => 'Parques temáticos', 
            'icon' => array('svg' => 'parques-icon.svg', '1X' => 'parques-icon.png', '2X' => 'parques-icon@2x.png'),
            'data' => array('Disney Parks', 'Universal Parks', 'SeaWorld Parks')
        ),
        array('titulo' => 'Tour de compras',
            'icon' => array('svg' => 'compras-icon.svg', '1X' => 'compras-icon.png', '2X' => 'compras-icon@2x.png'),
            'data' => array('Walmart', 'Disney Spring', 'Outlets','Tecno Shopping y perfumerías')
        ),
        array('titulo' => 'Cenas y fiestas exclusivas', 'icon' => array('svg' => 'cenas-icon.svg', '1X' => 'cenas-icon.png', '2X' => 'cenas-icon@2x.png'),
         'data' => array('Rainforest Café', 'Camila´s Restaurant', 'T Rex o Planet Hollywood', 'IDrive' ),
        ),
        array('titulo' => 'Extras incluidos',
            'icon' => array('svg' => 'extras-icon.svg', '1X' => 'extras-icon.png', '2X' => 'extras-icon@2x.png'),
            'data' => array('Exclusive Card', 'Club Q', 'Kit de viaje exclusivo', 'Jornada de integración', 'Gestión Visa grupal')
        ), 
    ),
);

$q6plus = array(
    'header' => array(
        'letras' => 'q6p-header',
        'link' => '#compra-online',
        'paquete' => 'disney-universal',
        'menu' => '',
        'imagen' => array(
            'imagen' => 'q6p-header.jpg',
            'imagenRetina' => 'q6p-header@2x.jpg',
            'imagenMobil' => 'q6p-header-mobile.jpg',
            'imagenMobilRetina' => 'q6p-header-mobile@2x.jpg',
        ),
    ),
    'color' => 'rosa',
    'titulo' => 'Disney y Miami',
    'noches' => '14 Noches',
    'icon' => array('svg' => 'q6p-header.svg', '1X' => 'q6p-header.png', '2X' => 'q6p-header@2x.png'),
    'resumen' => '<p>Es el más completo de todas las opciones y tiene la particularidad de que durante tu estadía en Orlando, además de alojarte dentro del mundo de Disney, también te alojás dentro del mundo Universal, obteniendo una hora extra en todos los parques para disfrutar más y sin largas colas, de las principales atracciones, como por ejemplo la de Harry Potter o Toy Story Land.</p>',
    'dataDestino' => array(
        array( 'titulo' => 'Duración', 'lista' => array( '13 Días totales' ) ),
        array( 'titulo' => 'Destinos', 'lista' => array( 'Orlando') ),
        array( 'titulo' => 'Noches de alojamiento', 'lista' => array( '11 Noches totales', ) ),
        array( 'titulo' => 'Estadía', 'lista' => array( '09 Noches en Disney Resorts' ) ),
        array( 'titulo' => 'Parques temáticos', 'lista' => array( '09 totales', '04 Disney Parks', '03 Universal Parks', '02 SeaWorld Parks' ) ),

    ),
    'pdf' => 'q6plus-itinerario.pdf',
    'pdf_size' => '50MB',
    'extra' => array(
        array('titulo' => 'Parques temáticos', 
            'icon' => array('svg' => 'parques-icon.svg', '1X' => 'parques-icon.png', '2X' => 'parques-icon@2x.png'),
            'data' => array('Disney Parks', 'Universal Parks', 'SeaWorld Parks')
        ),
        array('titulo' => 'Tour de compras',
            'icon' => array('svg' => 'compras-icon.svg', '1X' => 'compras-icon.png', '2X' => 'compras-icon@2x.png'),
            'data' => array('Walmart', 'Disney Spring', 'Outlets','Tecno Shopping y perfumerías')
        ),
        array('titulo' => 'Cenas y fiestas exclusivas', 'icon' => array('svg' => 'cenas-icon.svg', '1X' => 'cenas-icon.png', '2X' => 'cenas-icon@2x.png'),
         'data' => array('Rainforest Café', 'Camila´s Restaurant', 'T Rex o Planet Hollywood', 'IDrive' ),
        ),
        array('titulo' => 'Extras incluidos',
            'icon' => array('svg' => 'extras-icon.svg', '1X' => 'extras-icon.png', '2X' => 'extras-icon@2x.png'),
            'data' => array('Exclusive Card', 'Club Q', 'Kit de viaje exclusivo', 'Jornada de integración', 'Gestión Visa grupal')
        ), 
    ),
);


switch (PAGEACTUAL) {
    case 'disney':
        $pageData = array($disney,$disneyUniversal,$disneyMiami,$q4,$q5,$q5plus,$q6,$q6plus);
    break;

    case 'disney-universal':
        $pageData = array($disneyUniversal,$disney,$disneyMiami,$q4,$q5,$q5plus,$q6,$q6plus);
    break;

    case 'disney-miami':
        $pageData = array($disneyMiami,$disney,$disneyUniversal,$q4,$q5,$q5plus,$q6,$q6plus);
    break;

    default :
        $pageData = array($disney,$disneyUniversal,$disneyMiami,$q4,$q5,$q5plus,$q6,$q6plus);
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