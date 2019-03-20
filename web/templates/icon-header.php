<div class="left-icons-header animate-slide-up">
<?php if ($data != 'inicio' ) : ?>
    <picture>
        <source srcset="<?php echo IMAGES; ?>icon-raton.svg" type="image/svg+xml">
        <source srcset="<?php echo IMAGES; ?>icon-raton.png 1x, <?php echo IMAGES; ?>icon-raton@2x.png 2x" media="(min-width: 315px)">
        <img class="raton" src="<?php echo IMAGES; ?>icon-raton.png">
    </picture>
<?php else : ?>
    <picture>
        <source srcset="<?php echo IMAGES; ?>icon-raton-violeta.svg" type="image/svg+xml">
        <source srcset="<?php echo IMAGES; ?>icon-raton-violeta.png 1x, <?php echo IMAGES; ?>icon-raton-violeta@2x.png 2x" media="(min-width: 315px)">
        <img class="raton" src="<?php echo IMAGES; ?>icon-raton-violeta.png">
    </picture>
<?php endif; ?>
    
    <p>Scroll down</p>
</div>

<div class="right-icons-header">
    <ul class="animate-slide-left">
        <li>
            <a class="btn-icon-left-notransition" href="<?php echo WHATSAPPLINK; ?>" target="_blank">
                <picture>
                    <source srcset="<?php echo IMAGES; ?>wa-icon.svg" type="image/svg+xml">
                    <source srcset="<?php echo IMAGES; ?>wa-icon.png 1x, <?php echo IMAGES; ?>wa-icon@2x.png 2x" media="(min-width: 315px)">
                    <img class="rotate-img" src="<?php echo IMAGES; ?>wa-icon.png" alt="Icon Whatsapp">
                </picture>
                <?php echo WHATSAPP; ?>
            </a>
        </li>
        <li>
            <a class="btn-icon-left-notransition" href="<?php echo LINK_INSTAGRAM; ?>" target="_blank">
                <picture>
                    <source srcset="<?php echo IMAGES; ?>instagram-icon.svg" type="image/svg+xml">
                    <source srcset="<?php echo IMAGES; ?>instagram-icon.png 1x, <?php echo IMAGES; ?>instagram-icon@2x.png 2x" media="(min-width: 315px)">
                    <img src="<?php echo IMAGES; ?>instagram-icon.png" alt="Icon Instagram">
                </picture>
                <?php echo '@'.INSTAGRAM; ?>
            </a>
        </li>
        <li>
            <a class="btn-icon-left-notransition" href="mailto:<?php echo EMAIL; ?>" target="_blank">
                <picture>
                    <source srcset="<?php echo IMAGES; ?>email-icon.svg" type="image/svg+xml">
                    <source srcset="<?php echo IMAGES; ?>email-icon.png 1x, <?php echo IMAGES; ?>email-icon@2x.png 2x" media="(min-width: 315px)">
                    <img class="rotate-img" src="<?php echo IMAGES; ?>email-icon.png" alt="Icon Email">
                </picture>
                <?php echo EMAIL; ?>
            </a>
        </li>
    </ul>
</div>