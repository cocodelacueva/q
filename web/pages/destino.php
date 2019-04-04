<?php
/*
 * PAGE DESTINO: 
 * es el html de la pagina de destino
*/

$disney = array(
    'header' => array(
        'letras' => 'q1-header',
        'link' => '#compra-online',
        'paquete' => 'q1',
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
    'icon' => array('svg' => '', '1X' => 'q1-header.png', '2X' => 'q1-header@2x.png'),
    'resumen' => '<p>Es uno de los programas más divertidos y te incluye los mejores parques de Orlando. El programa fast pass para que no pierdas ni un segundo de diversión haciendo filas, un genial lunch con tus personajes favoritos de Disney y alojamiento dentro de los parques!</p>',
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
            'data' => array('Disney Parks, Universal Parks, SeaWorld Parks')
        ),
        array('titulo' => 'Tour de compras',
            'icon' => array('svg' => 'compras-icon.svg', '1X' => 'compras-icon.png', '2X' => 'compras-icon@2x.png'),
            'data' => array('Walmart', 'Disney Spring', 'Outlets','Tecno Shopping y perfumerías')
        ),
        array('titulo' => 'Cenas y fiestas exclusivas', 'icon' => array('svg' => 'cenas-icon.svg', '1X' => 'cenas-icon.png', '2X' => 'cenas-icon@2x.png'),
         'data' => array('Almuerzo con los personajes de Disney',' Pool Party en el hotel', 'Camila’s Restaurant', 'Rainforest Café', 'Trex o Planet Hollywood', 'IDrive', 'Fiesta de disfraces', 'Noche de gala', 'Pizza Party by Domino’s'),
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
        'paquete' => 'q2',
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
    'noches' => '9 Noches',
    'icon' => array('svg' => '', '1X' => 'q2-header.png', '2X' => 'q2-header@2x.png'),
    'resumen' => '<p>Es uno de los programas más divertidos y te incluye los mejores parques de Orlando. El programa fast pass para que no pierdas ni un segundo de diversión haciendo filas, un genial lunch con tus personajes favoritos de Disney y alojamiento dentro de los parques!</p>',
    'dataDestino' => array(
        array( 'titulo' => 'Duración', 'lista' => array( '11 Días totales' ) ),
        array( 'titulo' => 'Destinos', 'lista' => array( 'Orlando') ),
        array( 'titulo' => 'Noches de alojamiento', 'lista' => array( '09 Noches totales', ) ),
        array( 'titulo' => 'Estadía', 'lista' => array( '09 Noches en Disney Resorts' ) ),
        array( 'titulo' => 'Parques temáticos', 'lista' => array( '07 totales', '04 Disney Parks', '03 Universal Parks' ) ),

    ),
    'pdf' => 'q2-itinerario.pdf',
    'pdf_size' => '50MB',
    'extra' => array(
        array('titulo' => 'Parques temáticos', 
            'icon' => array('svg' => 'parques-icon.svg', '1X' => 'parques-icon.png', '2X' => 'parques-icon@2x.png'),
            'data' => array('04 Disney Parks', '03 Universal Parks',)
        ),
        array('titulo' => 'Tour de compras',
            'icon' => array('svg' => 'compras-icon.svg', '1X' => 'compras-icon.png', '2X' => 'compras-icon@2x.png'),
            'data' => array('Walmart', 'Disney Spring', 'Outlets','Tecno Shopping y perfumerías')
        ),
        array('titulo' => 'Cenas y fiestas exclusivas', 'icon' => array('svg' => 'cenas-icon.svg', '1X' => 'cenas-icon.png', '2X' => 'cenas-icon@2x.png'),
         'data' => array('Almuerzo con los personajes de Disney',' Pool Party en el hotel', 'Camila’s Restaurant', 'Rainforest Café', 'Trex o Planet Hollywood', 'IDrive', 'Fiesta de disfraces', 'Noche de gala', 'Pizza Party by Domino’s')
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
        'paquete' => 'q3',
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
    'noches' => '11 Noches',
    'icon' => array('svg' => '', '1X' => 'q3-header.png', '2X' => 'q3-header@2x.png'),
    'resumen' => '<p>Es uno de los programas más divertidos y te incluye los mejores parques de Orlando. El programa fast pass para que no pierdas ni un segundo de diversión haciendo filas, un genial lunch con tus personajes favoritos de Disney y alojamiento dentro de los parques! Además, no hay necesidad de correr, porque vamos a disfrutar de un parque por día, para que tengas tiempo de subir a todas las atracciones las veces que quieras.</p>',
    'dataDestino' => array(
        array( 'titulo' => 'Duración', 'lista' => array( '13 Días totales' ) ),
        array( 'titulo' => 'Destinos', 'lista' => array( 'Orlando') ),
        array( 'titulo' => 'Noches de alojamiento', 'lista' => array( '11 Noches totales', ) ),
        array( 'titulo' => 'Estadía', 'lista' => array( '11 Noches en Disney Resorts' ) ),
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
    'titulo' => 'Q4',
    'noches' => '11 Noches',
    'icon' => array('svg' => '', '1X' => 'q4-header.png', '2X' => 'q4-header@2x.png'),
    'resumen' => '<p>Es uno de los más completos, incluye los mejores parques de Orlando y también dos días en Miami para disfrutar de la playa a full y todo el confort de nuestros hoteles 4 estrellas. Este paquete ofrece uno de los planes de actividades más completos y divertidos.</p>',
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
         'data' => array('Almuerzo con los personajes de Disney',' Pool Party en el hotel', 'Camila’s Restaurant', 'Rainforest Café', 'Trex o Planet Hollywood', 'IDrive', 'Fiesta de disfraces', 'Noche de gala', 'Pizza Party by Domino’s'),
        ),
        array('titulo' => 'Plan de actividades Miami',
            'icon' => array('svg' => 'extras-icon.svg', '1X' => 'extras-icon.png', '2X' => 'extras-icon@2x.png'),
            'data' => array('City tour', 'Tour de compras', 'Crucero por la bahía de Biscayne', 'Beach Day', 'Hard Rock Café', 'Camila’s Restaurant o TGI Friday’s', 'Fiesta de despedida'),
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
        'paquete' => 'q5',
        'menu' => '',
        'imagen' => array(
            'imagen' => 'q5-header.jpg',
            'imagenRetina' => 'q5-header@2x.jpg',
            'imagenMobil' => 'q5-header-mobile.jpg',
            'imagenMobilRetina' => 'q5-header-mobile@2x.jpg',
        ),
    ),
    'color' => 'rosa',
    'titulo' => 'Q5',
    'noches' => '14 Noches',
    'icon' => array('svg' => '', '1X' => 'q5-header.png', '2X' => 'q5-header@2x.png'),
    'resumen' => '<p>Es uno de los más completos, incluye los mejores parques de Orlando y más tiempo para disfrutarlos, también dos días en Miami para vivir la playa a full y todo el confort de nuestros hoteles 4 estrellas.</p>',
    'dataDestino' => array(
        array( 'titulo' => 'Duración', 'lista' => array( '16 Días totales' ) ),
        array( 'titulo' => 'Destinos', 'lista' => array( 'Orlando', 'Miami') ),
        array( 'titulo' => 'Noches de alojamiento', 'lista' => array( '14 Noches totales', ) ),
        array( 'titulo' => 'Estadía', 'lista' => array( '12 Noches en Disney Resorts', '02 Noches en Miami Beach ' ) ),
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
         'data' => array('Almuerzo con los personajes de Disney',' Pool Party en el hotel', 'Camila’s Restaurant', 'Rainforest Café', 'Trex o Planet Hollywood', 'IDrive', 'Fiesta de disfraces', 'Noche de gala', 'Pizza Party by Domino’s'),
        ),
        array('titulo' => 'Plan de actividades Miami',
            'icon' => array('svg' => 'extras-icon.svg', '1X' => 'extras-icon.png', '2X' => 'extras-icon@2x.png'),
            'data' => array('City tour', 'Tour de compras', 'Crucero por la bahía de Biscayne', 'Beach Day', 'Hard Rock Café', 'Camila’s Restaurant o TGI Friday’s', 'Fiesta de despedida'),
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
        'paquete' => 'q5-plus',
        'menu' => '',
        'imagen' => array(
            'imagen' => 'q5p-header.jpg',
            'imagenRetina' => 'q5p-header@2x.jpg',
            'imagenMobil' => 'q5p-header-mobile.jpg',
            'imagenMobilRetina' => 'q5p-header-mobile@2x.jpg',
        ),
    ),
    'color' => 'rosa',
    'titulo' => 'Q5 Plus',
    'noches' => '14 Noches',
    'icon' => array('svg' => '', '1X' => 'q5p-header.png', '2X' => 'q5p-header@2x.png'),
    'resumen' => '<p>Es uno de los más completos, incluye todos los parques en Orlando, incluso Discovery Cove, donde podés nadar con delfines. Además, disfrutá dos días en Miami para vivir la playa a full y todo el confort de nuestros hoteles 4 estrellas.</p>',
    'dataDestino' => array(
        array( 'titulo' => 'Duración', 'lista' => array( '16 Días totales' ) ),
        array( 'titulo' => 'Destinos', 'lista' => array( 'Orlando', 'Miami') ),
        array( 'titulo' => 'Noches de alojamiento', 'lista' => array( '14 Noches totales', ) ),
        array( 'titulo' => 'Estadía', 'lista' => array( '12 Noches en Disney Resorts', '02 Noches en Miami Beach' ) ),
        array( 'titulo' => 'Parques temáticos', 'lista' => array( '10 totales', '04 Disney Parks', '03 Universal Parks', '03 SeaWorld Parks' ) ),

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
         'data' => array('Almuerzo con los personajes de Disney',' Pool Party en el hotel', 'Camila’s Restaurant', 'Rainforest Café', 'Trex o Planet Hollywood', 'IDrive', 'Fiesta de disfraces', 'Noche de gala', 'Pizza Party by Domino’s'),
        ),
        array('titulo' => 'Plan de actividades Miami',
            'icon' => array('svg' => 'extras-icon.svg', '1X' => 'extras-icon.png', '2X' => 'extras-icon@2x.png'),
            'data' => array('City tour', 'Tour de compras', 'Crucero por la bahía de Biscayne', 'Beach Day', 'Hard Rock Café', 'Camila’s Restaurant o TGI Friday’s', 'Fiesta de despedida'),
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
        'paquete' => 'q6',
        'menu' => '',
        'imagen' => array(
            'imagen' => 'q6-header.jpg',
            'imagenRetina' => 'q6-header@2x.jpg',
            'imagenMobil' => 'q6-header-mobile.jpg',
            'imagenMobilRetina' => 'q6-header-mobile@2x.jpg',
        ),
    ),
    'color' => 'rosa',
    'titulo' => 'Q6',
    'noches' => '14 Noches',
    'icon' => array('svg' => '', '1X' => 'q6-header.png', '2X' => 'q6-header@2x.png'),
    'resumen' => '<p>Es el más completo de todos y sus principales características son que : durante tu estadía en Orlando, además de alojarte en Disney, también te alojás dentro del mundo Universal. Obteniendo una hora extra en todos los parques para disfrutar más de las principales atracciones.</p>',
    'dataDestino' => array(
        array( 'titulo' => 'Duración', 'lista' => array( '16 Días totales' ) ),
        array( 'titulo' => 'Destinos', 'lista' => array( 'Orlando', 'Miami') ),
        array( 'titulo' => 'Noches de alojamiento', 'lista' => array( '14 Noches totales', ) ),
        array( 'titulo' => 'Estadía', 'lista' => array( '08 Noches en Disney Resorts', '04 Noches en Universal Resorts', '02 Noches en Miami Beach' ) ),
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
         'data' => array('Almuerzo con los personajes de Disney',' Pool Party en el hotel', 'Camila’s Restaurant', 'Rainforest Café', 'Trex o Planet Hollywood', 'IDrive', 'Fiesta de disfraces', 'Noche de gala', 'Pizza Party by Domino’s'),
        ),
        array('titulo' => 'Plan de actividades Miami',
            'icon' => array('svg' => 'extras-icon.svg', '1X' => 'extras-icon.png', '2X' => 'extras-icon@2x.png'),
            'data' => array('City tour', 'Tour de compras', 'Crucero por la bahía de Biscayne', 'Beach Day', 'Hard Rock Café', 'Camila’s Restaurant o TGI Friday’s', 'Fiesta de despedida'),
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
        'paquete' => 'q6-plus',
        'menu' => '',
        'imagen' => array(
            'imagen' => 'q6p-header.jpg',
            'imagenRetina' => 'q6p-header@2x.jpg',
            'imagenMobil' => 'q6p-header-mobile.jpg',
            'imagenMobilRetina' => 'q6p-header-mobile@2x.jpg',
        ),
    ),
    'color' => 'rosa',
    'titulo' => 'Q6 Plus',
    'noches' => '14 Noches',
    'icon' => array('svg' => '', '1X' => 'q6p-header.png', '2X' => 'q6p-header@2x.png'),
    'resumen' => '<p>Es el más completo de todos y sus principales características son que : durante tu estadía en Orlando, además de alojarte en Disney, también te alojás dentro del mundo Universal. Obteniendo una hora extra en todos los parques para disfrutar más de las principales atracciones. Además este plan incluye Discovery Cove, donde podés nadar con delfines.</p>',
    'dataDestino' => array(
        array( 'titulo' => 'Duración', 'lista' => array( '16 Días totales' ) ),
        array( 'titulo' => 'Destinos', 'lista' => array( 'Orlando', 'Miami') ),
        array( 'titulo' => 'Noches de alojamiento', 'lista' => array( '14 Noches totales', ) ),
        array( 'titulo' => 'Estadía', 'lista' => array( '08 Noches en Disney Resorts', '04 Noches en Universal Resorts', '02 Noches en Miami Beach' ) ),
        array( 'titulo' => 'Parques temáticos', 'lista' => array( '10 totales', '04 Disney Parks', '03 Universal Parks', '03 SeaWorld Parks' ) ),

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
         'data' => array('Almuerzo con los personajes de Disney',' Pool Party en el hotel', 'Camila’s Restaurant', 'Rainforest Café', 'Trex o Planet Hollywood', 'IDrive', 'Fiesta de disfraces', 'Noche de gala', 'Pizza Party by Domino’s'),
        ),
        array('titulo' => 'Plan de actividades Miami',
            'icon' => array('svg' => 'extras-icon.svg', '1X' => 'extras-icon.png', '2X' => 'extras-icon@2x.png'),
            'data' => array('City tour', 'Tour de compras', 'Crucero por la bahía de Biscayne', 'Beach Day', 'Hard Rock Café', 'Camila’s Restaurant o TGI Friday’s', 'Fiesta de despedida'),
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