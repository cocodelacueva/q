<?php 
$experiencias = array(
    array(
        'titulo'=> 'Viví la magia del mundo Disney',
        'nombre'=> 'Powered by Q',
        'imagen'=> '',
        'imagen2x'=> '',
        'video'=> 'https://vimeo.com/327353817/7bdb54ef0e',
    ),
);
?>

<div class="slide-progress"></div>
<ul id="experiencias-slider" class="owl-carousel">
<?php foreach ($experiencias as $slider ) { ?>
    
    <li class="experiencia<?php if ($slider['video'] != '') {echo ' item-video'; } ?>">
        <div class="experiencia-data">
            <picture>
                <source srcset="<?php echo IMAGES; ?>hapyface.svg" type="image/svg+xml">
                <source srcset="<?php echo IMAGES; ?>hapyface.png 1x, <?php echo IMAGES; ?>hapyface@2x.png 2x" media="(min-width: 315px)">
                <img class="icon-experiencias" src="<?php echo IMAGES; ?>hapyface.png" alt="Icon Whatsapp">
            </picture>
            <h2 class="title-experiencia"><?php echo $slider['titulo']; ?></h2>
            <p class="nombre-experiencia"><?php echo $slider['nombre']; ?></p>
        </div>

        <div class="experiencia-contenido">
            <?php if ($slider['video'] != '') : ?>

            <span class="owl-video" href="<?php echo $slider['video']; ?>"></span>
            
            <?php else :

                if ($slider['imagen'] != '') : ?>

                <picture>
                    <source srcset="<?php echo UPLOADSURL . $slider['imagen']; ?> 1x<?php if ( $slider['imagen2x'] != '' ) { echo ', ' . UPLOADSURL . $slider['imagen2x'] . ' 2x'; } ?>" media="(min-width: 315px)">
                    <img class="icon-experiencias" src="<?php echo UPLOADSURL . $slider['imagen']; ?>" alt="Experiencia Fleek: <?php echo $slider['nombre']; ?>">
                </picture>
                
                <?php endif; ?>

            <?php endif; ?>
        </div>
    </li>

<?php } ?>

</div>