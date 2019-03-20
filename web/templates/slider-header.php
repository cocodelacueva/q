<?php 
$sliders = array(
//slider 1
    array(
        'titulo' => '<span class="color">We</span><br> are Q',
        'imagen' => 'slider1.jpg',
        'imagenRetina' => 'slider1@2x.jpg',
        'imagenMobil' => 'slider1-mobile.jpg',
        'imagenMobilRetina' => 'slider1-mobile@2x.jpg',
        'texto' => '<p>Tu viaje de 15 con mucho más! <br>Más parques, más diversión.</p>',
        'color' => 'rosa',
        'botones' => array(
            array(
                'texto' => 'Comprá ahora',
                'link' => '#compraonline',
                'paquete' => '',
                'icon' => 'icon-plane.png',
                'icon2x' => 'icon-plane@2x.png',
                'iconSVG' => 'icon-plane.svg',
            ),
            array(
                'texto' => 'Pedí tu reunión',
                'link' => '#reunion',
                'paquete' => '',
                'icon' => 'icon-person-violeta.png',
                'icon2x' => 'icon-person-violeta@2x.png',
                'iconSVG' => 'icon-person-violeta.svg',
            ),
        ),
    ),
//slider 2
    array(
        'titulo' => 'Orlando',
        'imagen' => 'slider2.jpg',
        'imagenRetina' => 'slider2@2x.jpg',
        'imagenMobil' => 'slider2-mobile.jpg',
        'imagenMobilRetina' => 'slider2-mobile@2x.jpg',
        'texto' => '<p>Disney, Universal, SeaWorld Parks.</p>',
        'color' => 'rosa',
        'botones' => array(
            array(
                'texto' => 'Comprá ahora',
                'link' => '#compraonline',
                'paquete' => 'disney-universal',
                'icon' => 'icon-plane.png',
                'icon2x' => 'icon-plane@2x.png',
                'iconSVG' => 'icon-plane.svg',
            ),
            array(
                'texto' => 'Pedí tu reunión',
                'link' => '#reunion',
                'paquete' => 'disney-universal',
                'icon' => 'icon-person-violeta.png',
                'icon2x' => 'icon-person-violeta@2x.png',
                'iconSVG' => 'icon-person-violeta.svg',
            ),
        ),
    ),
//slider 3
    array(
        'titulo' => 'Miami',
        'imagen' => 'slider3.jpg',
        'imagenRetina' => 'slider3@2x.jpg',
        'imagenMobil' => 'slider3-mobile.jpg',
        'imagenMobilRetina' => 'slider3-mobile@2x.jpg',
        'texto' => '<p>South Beach</p>',
        'color' => 'rosa',
        'botones' => array(
            array(
                'texto' => 'Comprá ahora',
                'link' => '#compraonline',
                'paquete' => 'disney-miami',
                'icon' => 'icon-plane.png',
                'icon2x' => 'icon-plane@2x.png',
                'iconSVG' => 'icon-plane.svg',
            ),
            array(
                'texto' => 'Pedí tu reunión',
                'link' => '#reunion',
                'paquete' => 'disney-miami',
                'icon' => 'icon-person-violeta.png',
                'icon2x' => 'icon-person-violeta@2x.png',
                'iconSVG' => 'icon-person-violeta.svg',
                
            ),
        ),
    ),
);
?>


<div class="slide-progress"></div>

<div id="header-slider" class="slider-header owl-carousel">

<?php
$counter = 0;
foreach ( $sliders as $slider ) { ?>
    
    <article class="item-slider">
        
        <?php if ( $slider['imagen'] != '') : ?>
        <div class="imagen-fondo">

        <picture>

            <?php if ( $slider['imagenMobil'] != '') : ?>
                <source srcset="<?php echo UPLOADSURL . $slider['imagen']; ?> 1x, <?php echo UPLOADSURL . $slider['imagenRetina']; ?> 2x" media="(min-width: 992px)">

                <source srcset="<?php echo UPLOADSURL . $slider['imagenMobil']; ?> 1x, <?php echo UPLOADSURL . $slider['imagenMobilRetina']; ?> 2x" media="(min-width: 315px)">

            <?php else : ?>

                <source srcset="<?php echo UPLOADSURL . $slider['imagen']; ?> 1x, <?php echo UPLOADSURL . $slider['imagenRetina']; ?> 2x" media="(min-width: 315px)">

            <?php endif; ?>

            <img src="<?php echo UPLOADSURL . $slider['imagen']; ?>">
        </picture>

        </div>
        <?php endif; ?>

        <div class="contenido <?php echo $slider['color']; ?>">
            <h1>
                <?php echo $slider['titulo']; ?>
            </h1>

            <div class="texto">
                <?php echo $slider['texto']; ?>
            </div>

            <div class="wrapper-buttons"<?php if ( $counter == 0 ) {echo ' style="margin-top:40px"'; } ?>>
                
                <?php foreach (  $slider['botones'] as $boton ) { ?>

                    <a class="icon-btn-right btn-slider-header" href="<?php echo MAINSURL . '/' . $boton['link']; ?>" data-paquete="<?php echo $boton['paquete']; ?>">
                        <span><?php echo $boton['texto']; ?></span>

                        <?php if ( $boton['icon'] != '' ) : ?>

                        <picture>

                            <?php if ( $boton['iconSVG'] != '' ) : ?>

                            <source srcset="<?php echo IMAGES . $boton['iconSVG']; ?>" type="image/svg+xml">

                            <?php endif; ?>

                            <source srcset="<?php echo IMAGES . $boton['icon']; ?> 1x, <?php if (  $boton['icon2x'] != '' ) { echo IMAGES . $boton['icon2x'] . ' 2x'; } ?>" media="(min-width: 315px)">

                            <img class="icon-btn" src="<?php echo IMAGES . $boton['icon']; ?>">
                        </picture>

                        <?php endif; ?>
                    </a>

                <?php } ?>
            </div>
        </div>
    </article>

<?php 
    $counter++;
    } ?>

</div>