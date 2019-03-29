<?php
/*
 * PAGE TEMPLATE: PAGINA INICIO
 * es el html de la pagina de inicio
*/
getTemplate( 'header' ); ?>
<div class="inner-wrapper">
    
    <header class="home-header">

        <div class="slider-header-wrapper" data-template="slider-header">
            <?php getTemplate('slider-header'); ?>
        </div>

        <div class="legales-header">
            <p>
                Q® es un marca de productos para jóvenes de la empresa Auckland Turismo S.R.L.
            </p>
        </div>

    </header>

<!-- SECTION NOSOTROS -->
    <section class="section-wrapper nosotros-wrapper" id="nosotros">

        <div class="icon-header" data-template="icon-header">
            <?php //getTemplate('icon-header'); ?>
        </div>
        
        <div class="icon-vertical"></div>

        <div class="contenido-nosotros">
            <div class="contenido">
                <h2>
                <picture>
                    <source srcset="<?php echo UPLOADSURL; ?>quienes-somos.svg" type="image/svg+xml">
                    <source srcset="<?php echo UPLOADSURL; ?>quienes-somos.png 1x, <?php echo IMAGES; ?>quienes-somos@2x.png 2x" media="(min-width: 315px)">
                    <img src="<?php echo UPLOADSURL; ?>quienes-somos.png">
                </picture>
                </h2>
                <p>
                    <strong>Viajá, descubrí, disfrutá</strong>
                </p>
                <p>
                    La marca teen de Auckland, donde podés encontrar un mundo especialmente diseñado para vos con los viajes más exclusivos para festejar tus quince. 
                </p>
                <p>
                    Q es la nueva identidad de un equipo especializado en estos viajes que, formado por más treinta personas con diez años de experiencia, hoy trabaja exclusivamente desarrollando contenidos de vanguardia y cuidando cada detalle, para brindarte una experiencia única para tus quince. 
                </p>
                <p>
                    Servicios de nivel premium en todo, más parques y atracciones incluidas, actividades exclusivas sorprendentes, una organización más inteligente, los máximos niveles de seguridad previstos y la atención personal más cuidada.
                </p>

                <a class="btn" href="#">
                    Ver más
                </a>
            </div>

            <div class="imagen-nosotros lqva-lazy-load-images" data-prioridad="2"  srcset="<?php echo UPLOADSURL; ?>nosotros.jpg" srcset2x="<?php echo UPLOADSURL; ?>nosotros@2x.jpg"></div>
            
        </div>
    </section>

<!-- SECTION DESTINOS -->
    <section class="section-wrapper" id="destinos">
        <h2 class="sr-only">
            Destinos
        </h2>
        
        <ul class="destinos-wrapper" data-template="boxes-destinos"></ul>
    </section>

<!-- SECTION EXPERIENCIAS -->
    <section class="section-wrapper" id="experiencias">
        <div class="wrapper-slider-testimonios" data-template="slider-testimonios">
            
            <?php //getTemplate( 'slider-testimonios' ); ?>
            
        </div>
    </section>

<!-- SECTION COMPRA ONLINE -->
    <section class="section-wrapper section-compra" id="compraonline">
        <div class="texto-destacado">
            <span class="only-mobile">
                Reservá tu lugar ahora
            </span>
            <span class="only-pc">
                <em class="color-white">Comprá</em><br>tu<br> viaje acá
            </span>
        </div>
        <div class="compra-wrapper">
            <h2>
                <span class="only-mobile">
                    Reservá con un solo click.
                </span>
                <span class="only-pc">
                    Reservá con un solo click.
                </span>
            </h2>
            
            <!--<p>Hacé click en este botón y empezá a palpitar el viaje de tu vida.</p>-->

            <div class="wrapper-button">
                <a class="icon-btn-right open-form" href="#compra-online">
                    <span>Comprá online</span>
                    <picture>
                        <source srcset="<?php echo IMAGES; ?>icon-plane-violeta.svg" type="image/svg+xml">
                        <source srcset="<?php echo IMAGES; ?>icon-plane-violeta.png 1x, <?php echo IMAGES; ?>icon-plane-violeta@2x.png 2x" media="(min-width: 315px)">
                        <img src="<?php echo IMAGES; ?>icon-plane-violeta.png">
                    </picture>
                </a>
            </div>

            <p class="only-pc">Si preferís la asistencia de un asesor <a class="texto-azul-pc open-form" href="#reunion">envianos tus datos acá.</a>
        </div>
    </section>

<!-- SECTION YO VIAJO/VIAJE -->
    <section class="section-wrapper viajo-viaje-wrapper">
        <div id="viajo" class="viajo-wrapper">
            <picture>
                <source srcset="<?php echo IMAGES; ?>mickey-icon.svg" type="image/svg+xml">
                <source srcset="<?php echo IMAGES; ?>mickey-icon.png 1x, <?php echo IMAGES; ?>mickey-icon@2x.png 2x" media="(min-width: 315px)">
                <img src="<?php echo IMAGES; ?>mickey-icon.png" alt="Icon Whatsapp">
            </picture>
            <h3>
            Yo viajo
            </h3>
            <ul>
                <li>
                    <a href="http://auckland.cloudapp.net/Account/Login" target="_blank">
                        Inscripciones
                    </a>
                </li>
                <li>
                    <a href="http://auckland.cloudapp.net/Account/Login" target="_blank">
                        Cupones de Pago
                    </a>
                </li>
                <li>
                    <a href="http://auckland.cloudapp.net/Account/Login" target="_blank">
                        Ficha Médica
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        Tips de Viaje
                    </a>
                </li>
            </ul>
        </div>
        <div id="viaje" class="viaje-wrapper">
            <picture>
                <source srcset="<?php echo IMAGES; ?>camera.svg" type="image/svg+xml">
                <source srcset="<?php echo IMAGES; ?>camera.png 1x, <?php echo IMAGES; ?>camera@2x.png 2x" media="(min-width: 315px)">
                <img src="<?php echo IMAGES; ?>camera.png" alt="Icon Whatsapp">
            </picture>
            <h3>
                Yo viajé
            </h3>
            <p>
                Encontrá las mejores imágenes de tu viaje.
            </p>
        </div>
    </section>


<!-- INSTAGRAM -->
    <section class="section-wrapper instagram-wrapper" id="social">
        <a href="<?php echo LINK_INSTAGRAM; ?>" class="instagram" target="_blank">
            <picture>
                <source srcset="<?php echo IMAGES; ?>instagram-violeta.svg" type="image/svg+xml">
                <source srcset="<?php echo IMAGES; ?>instagram-violeta.png 1x, <?php echo IMAGES; ?>instagram-violeta@2x.png 2x" media="(min-width: 315px)">
                <img src="<?php echo IMAGES; ?>instagram-violeta.png" alt="Icon Instagram">
            </picture>
            <h2>
                @<?php echo INSTAGRAM; ?>
            </h2>
        </a>
        <div class="wrapper-feed">
            <p>Cargando instagram...</p>
        </div>
    </section>

</div><!-- // INNVER WRAPPER -->
<?php getTemplate( 'footer' );