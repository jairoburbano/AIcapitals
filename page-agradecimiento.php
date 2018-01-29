<?php
/**
 *
 *
 * @package		aicapitals
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 *
 */
$page = 'contacto';
$subpage = '';
$type = 'page';
$title = 'Contacto';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="banner">
    <div class="banner__media">
        <picture>
            <source srcset="https://unsplash.it/320/115" media="(max-width: 740px)">
            <source srcset="https://unsplash.it/768/160" media="(max-width: 1025px)">
            <img src="https://unsplash.it/1280/268" alt="titulo">
        </picture>
    </div><!-- /.banner__media -->
    <div class="banner__content">
        <h1 class="title--page title--space">
            Gracias
        </h1><!-- /.title--page -->
    </div><!-- /.banner__content -->
    <div class="tri--left"></div><!-- /.tri--left -->
    <div class="tri--right"></div><!-- /.tri--right -->
</div><!-- /.banner -->
<div class="contact__box">
    <div class="wrap">
        <div class="content bajada">
            <p>
                Ofrecemos oportunidades de inversión en proyectos, con la mayor transparencia y trazabilidad del mercado.
            </p>
        </div><!-- /.content bajada -->
    </div><!-- /.wrap -->
</div><!-- /.contact__box -->
<?php include 'footer.php'; ?>