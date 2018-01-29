<?php
include 'functions.php';
/**
 * Cabacera de la Página
 *
 * Nuestra todo el contenido hasta <body>
 *
 * @package		aicapitals
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 */
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title><?php wp_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="js/vendor/modernizr.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Bitter:400,700|Montserrat:300,400,700&amp;subset=latin-ext" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body class="<?php if ( $page == 'inversiones' ) { echo 'inversiones'; } ?><?php if ( $page == 'inmobiliaria' ) { echo 'inmobiliaria'; } ?><?php if ( $page == 'contacto' ) { echo 'contacto'; } ?><?php if ( $page == 'page-error' ) { echo 'body-error'; } ?><?php if ( $type == 'single' ) { echo 'single'; } ?>">
        <?php include 'svg-defs.svg'; ?>
        <div class="page-wrap">
            <header class="header">
                <div class="menu__top">
                    <p>¿Eres miembro?</p>
                    <a href="#" title="Registro/acceso">Registro / Acceso</a>
                </div><!-- /.menu__top -->
                <div class="header__top">
                    <a href="index.php" title="AI Capitals" class="logo">
                        <svg version="1.1"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                             x="0px" y="0px" width="205px" height="40px" viewBox="0 0 205 40" enable-background="new 0 0 205 40" xml:space="preserve">
                            <defs>
                            </defs>
                            <g id="XMLID_1_">
                                <g>
                                    <g id="XMLID_105_">
                                        <g id="XMLID_106_">
                                            <path id="XMLID_107_" fill="#006DB6" d="M17,38.3c-0.6,0-1.2-0.1-1.7-0.4L1.7,29.9C0.7,29.4,0,28.1,0,27V11.2
                                                                                    c0-1.1,0.7-2.4,1.7-2.9l13.7-7.9c1-0.6,2.4-0.6,3.4,0l13.7,7.9c1,0.6,1.7,1.8,1.7,2.9V27c0,1.1-0.7,2.4-1.7,2.9l-13.7,7.9
                                                                                    C18.3,38.1,17.7,38.3,17,38.3z M17,1.7c-0.3,0-0.6,0.1-0.8,0.2L2.6,9.8c-0.4,0.2-0.8,0.9-0.8,1.4V27c0,0.5,0.4,1.2,0.8,1.4
                                                                                    l13.7,7.9c0.4,0.2,1.2,0.2,1.6,0l13.7-7.9c0.4-0.2,0.8-0.9,0.8-1.4V11.2c0-0.5-0.4-1.2-0.8-1.4L17.9,1.9
                                                                                    C17.7,1.8,17.4,1.7,17,1.7z"/>
                                        </g>
                                    </g>
                                    <g id="XMLID_103_">
                                        <path id="XMLID_104_" fill="#006DB6" d="M28.2,11.8l-9.7-5.6c-0.7-0.4-1.8-0.4-2.5,0l-9.9,5.6c-0.7,0.4-1.4,1.4-1.4,2.2v11.2
                                                                                C4.7,26,5.3,27,6,27.4l2.5,1.5V21H12v9.9l3.2,1.8V13.4h3.5v19.3l3.2-1.8V17.2h3.5v11.7l2.7-1.5c0.7-0.4,1.4-1.4,1.4-2.2V14
                                                                                C29.4,13.2,28.9,12.2,28.2,11.8z"/>
                                    </g>
                                </g>
                                <g id="XMLID_100_">
                                    <rect id="XMLID_102_" x="43" y="4.7" fill="#006DB6" width="0.3" height="28.9"/>
                                </g>
                                <g id="XMLID_72_">
                                    <path id="XMLID_96_" fill="#006DB6" d="M50.6,27.8v-1.7l2.3-0.5l6.3-16.9l2.7-0.1l6.1,17l2.3,0.5v1.7h-8v-1.7l2.6-0.5l-1-3h-7.1
                                                                           l-1.1,3l2.6,0.5v1.7H50.6z M60.3,12.1l-2.9,8.3H63L60.3,12.1z"/>
                                    <path id="XMLID_94_" fill="#006DB6" d="M80.4,26.2v1.6h-7.5v-1.6l2.3-0.5V10.8l-2.3-0.5V8.7l7.5-0.1v1.6l-2.3,0.5v14.8L80.4,26.2z
                                                                           "/>
                                    <path id="XMLID_92_" fill="#2A2A2A" d="M96.1,12c-0.9-0.3-1.9-0.4-3.1-0.4c-3,0-4.5,2.2-4.5,6.7c0,4.2,1.6,6.3,4.7,6.3
                                                                           c0.8,0,1.6-0.2,2.5-0.5c0.9-0.3,1.5-0.6,2-1l0.7-0.5l1.5,2.5c-0.1,0.1-0.2,0.2-0.3,0.3c-0.1,0.1-0.5,0.4-0.9,0.7
                                                                           c-0.5,0.3-1,0.6-1.5,0.9c-0.5,0.3-1.2,0.5-2,0.7c-0.8,0.2-1.6,0.3-2.4,0.3c-2.8,0-5-0.8-6.5-2.5C84.7,24,84,21.6,84,18.4
                                                                           c0-3.2,0.8-5.7,2.5-7.5c1.7-1.8,3.9-2.7,6.8-2.7c1,0,2,0.1,3.1,0.3c1.1,0.2,1.9,0.4,2.4,0.6l0.9,0.3l-0.1,5.2h-2.7L96.1,12z"/>
                                    <path id="XMLID_88_" fill="#2A2A2A" d="M117.8,27.6l-5.4,0.2l-0.5-1.8c-0.2,0.1-0.4,0.3-0.7,0.6c-0.3,0.2-0.8,0.5-1.6,0.9
                                                                           c-0.8,0.4-1.5,0.6-2.2,0.6c-1.3,0-2.4-0.4-3.1-1.1c-0.8-0.8-1.1-1.8-1.1-3.2c0-3,2.2-4.5,6.6-4.5h1.9v-1.5c0-1.4-0.7-2.1-2.1-2.1
                                                                           c-0.4,0-0.8,0-1.2,0.1c-0.4,0.1-0.7,0.1-0.9,0.2l-0.3,0.1l-0.4,1.8h-2.5l-0.2-4.1c2.2-0.7,4.2-1.1,6-1.1c2.1,0,3.6,0.4,4.4,1.2
                                                                           c0.9,0.8,1.3,2.2,1.3,4.2v6.8l2.1,0.5V27.6z M107.1,23.4c0,1.1,0.5,1.6,1.6,1.6c0.4,0,0.9-0.1,1.4-0.4c0.5-0.3,0.9-0.5,1.1-0.8
                                                                           l0.4-0.4v-1.8h-1.6c-1.1,0-1.8,0.1-2.3,0.4C107.3,22.3,107.1,22.7,107.1,23.4z"/>
                                    <path id="XMLID_85_" fill="#2A2A2A" d="M122.5,15.9l-2.2-0.5v-2.2l5.8-0.2l0.2,1.5c0.1-0.1,0.3-0.3,0.6-0.5
                                                                           c0.2-0.2,0.7-0.5,1.4-0.8c0.7-0.3,1.4-0.5,2-0.5c1.9,0,3.3,0.6,4.3,1.9c1,1.3,1.5,3.1,1.5,5.3c0,2.6-0.6,4.6-1.9,6
                                                                           c-1.3,1.4-3.1,2.1-5.6,2.1c-0.6,0-1.3-0.1-2.1-0.3v3.5l2.6,0.6v2.2h-8.8v-2.2l2.1-0.6V15.9z M126.5,17.5v7.3
                                                                           c0.5,0.3,1.2,0.4,2.1,0.4c1.1,0,1.9-0.4,2.4-1.2c0.5-0.8,0.7-2,0.7-3.6c0-3-0.9-4.5-2.7-4.5c-0.5,0-1,0.1-1.4,0.4
                                                                           c-0.4,0.3-0.7,0.5-0.9,0.8L126.5,17.5z"/>
                                    <path id="XMLID_82_" fill="#2A2A2A" d="M139.4,13.2l6.2-0.2v11.9l1.9,0.7v2.2h-8.2v-2.2l2.2-0.7v-9l-2.2-0.5V13.2z M141,8.4
                                                                           c0-0.8,0.2-1.3,0.7-1.8c0.5-0.4,1-0.7,1.7-0.7c1.5,0,2.3,0.8,2.3,2.5c0,0.8-0.2,1.4-0.7,1.8c-0.5,0.4-1,0.7-1.6,0.7
                                                                           c-0.8,0-1.3-0.2-1.7-0.6C141.3,9.9,141,9.3,141,8.4z"/>
                                    <path id="XMLID_80_" fill="#2A2A2A" d="M156.6,28.1c-1.5,0-2.6-0.5-3.1-1.5c-0.6-1-0.9-2.7-0.9-5.1v-5.1h-2.6v-2.6l2.6-0.4V9.6
                                                                           l4-0.7v4.5h3.8v3h-3.8v6.2c0,0.9,0.1,1.6,0.3,1.9c0.2,0.4,0.6,0.5,1.2,0.5c0.7,0,1.4-0.2,2.2-0.6l1,2
                                                                           C159.7,27.5,158.1,28.1,156.6,28.1z"/>
                                    <path id="XMLID_77_" fill="#2A2A2A" d="M178.6,27.6l-5.4,0.2l-0.5-1.8c-0.2,0.1-0.4,0.3-0.7,0.6c-0.3,0.2-0.8,0.5-1.6,0.9
                                                                           c-0.8,0.4-1.5,0.6-2.2,0.6c-1.3,0-2.4-0.4-3.1-1.1c-0.8-0.8-1.1-1.8-1.1-3.2c0-3,2.2-4.5,6.6-4.5h1.9v-1.5c0-1.4-0.7-2.1-2.1-2.1
                                                                           c-0.4,0-0.8,0-1.2,0.1c-0.4,0.1-0.7,0.1-0.9,0.2l-0.3,0.1l-0.4,1.8h-2.5l-0.2-4.1c2.2-0.7,4.2-1.1,6-1.1c2.1,0,3.6,0.4,4.4,1.2
                                                                           c0.9,0.8,1.3,2.2,1.3,4.2v6.8l2.1,0.5V27.6z M168,23.4c0,1.1,0.5,1.6,1.6,1.6c0.4,0,0.9-0.1,1.4-0.4c0.5-0.3,0.9-0.5,1.1-0.8
                                                                           l0.4-0.4v-1.8h-1.6c-1.1,0-1.8,0.1-2.3,0.4C168.2,22.3,168,22.7,168,23.4z"/>
                                    <path id="XMLID_75_" fill="#2A2A2A" d="M181.3,6.7l6.3-0.2v18.4l2.6,0.7v2.2h-8.9v-2.2l2.2-0.7V9.5l-2.2-0.5V6.7z"/>
                                    <path id="XMLID_73_" fill="#2A2A2A" d="M195.5,23l0.2,1.9c0.6,0.2,1.4,0.3,2.3,0.3c1.4,0,2.2-0.5,2.2-1.5c0-0.4-0.2-0.8-0.7-1.1
                                                                           c-0.5-0.3-1.1-0.6-1.8-0.8c-0.7-0.2-1.4-0.5-2.1-0.8c-0.7-0.3-1.3-0.8-1.8-1.4c-0.5-0.6-0.7-1.4-0.7-2.3c0-1.6,0.5-2.8,1.6-3.6
                                                                           c1.1-0.8,2.4-1.1,4-1.1c0.7,0,1.5,0.1,2.4,0.2c0.9,0.1,1.5,0.3,2,0.4l0.7,0.2c0,0.9-0.1,2.3-0.1,4.1h-2.4l-0.4-1.8
                                                                           c-0.5-0.2-1.1-0.3-1.8-0.3c-0.6,0-1,0.1-1.3,0.4c-0.3,0.2-0.5,0.6-0.5,1c0,0.4,0.3,0.8,0.8,1.1c0.5,0.3,1.1,0.5,1.8,0.8
                                                                           c0.7,0.2,1.4,0.5,2.1,0.8c0.7,0.3,1.3,0.7,1.8,1.3c0.5,0.6,0.8,1.3,0.8,2.2c0,1.6-0.6,2.8-1.7,3.6c-1.1,0.9-2.7,1.3-4.6,1.3
                                                                           c-0.8,0-1.6-0.1-2.4-0.2c-0.8-0.1-1.5-0.2-1.9-0.3l-0.7-0.2V23H195.5z"/>
                                </g>
                                <g id="XMLID_2_">
                                    <path id="XMLID_70_" fill="#0F2A3D" d="M149.8,40v-6.8h1.1V40H149.8z"/>
                                    <path id="XMLID_68_" fill="#0F2A3D" d="M157.8,36.7V40h-1.1v-2.9c0-0.8-0.5-1.3-1.2-1.3c-0.9,0-1.4,0.6-1.5,1.4V40h-1.1v-5.2h1.1
                                                                           v1c0.4-0.7,1-1,1.9-1C157.1,34.8,157.8,35.5,157.8,36.7z"/>
                                    <path id="XMLID_63_" fill="#0F2A3D" d="M160.5,40l-2-5.2h1.2l1.4,4.1l1.4-4.1h1.1l-2,5.2H160.5z"/>
                                    <path id="XMLID_16_" fill="#0F2A3D" d="M169,37.8h-3.9c0.2,0.8,0.8,1.3,1.6,1.3c0.6,0,1.1-0.2,1.5-0.6l0.6,0.6
                                                                           c-0.5,0.6-1.2,0.9-2.1,0.9c-1.6,0-2.6-1.1-2.6-2.6c0-1.6,1.1-2.6,2.6-2.6C168.4,34.8,169.1,35.9,169,37.8z M168,37
                                                                           c0-0.8-0.6-1.3-1.4-1.3c-0.8,0-1.4,0.5-1.5,1.3H168z"/>
                                    <path id="XMLID_14_" fill="#0F2A3D" d="M173.7,35.3l-0.4,0.8c-0.5-0.3-1-0.5-1.5-0.5c-0.4,0-0.8,0.1-0.8,0.5c0,1,2.7,0.4,2.7,2.3
                                                                           c0,1.1-0.9,1.5-2,1.5c-0.8,0-1.6-0.3-2.1-0.7l0.4-0.8c0.4,0.4,1.2,0.6,1.7,0.6c0.5,0,0.8-0.2,0.8-0.6c0-1.1-2.7-0.5-2.7-2.3
                                                                           c0-1,0.9-1.5,1.9-1.5C172.5,34.7,173.2,34.9,173.7,35.3z"/>
                                    <path id="XMLID_12_" fill="#0F2A3D" d="M178,39.6c-0.4,0.2-0.8,0.4-1.3,0.4c-0.8,0-1.4-0.4-1.4-1.5v-2.7h-0.7V35h0.7v-1.4h1.1V35
                                                                           h1.5v0.8h-1.5v2.5c0,0.5,0.2,0.7,0.6,0.7c0.2,0,0.5-0.1,0.8-0.2L178,39.6z"/>
                                    <path id="XMLID_10_" fill="#0F2A3D" d="M187.8,36.7V40h-1.1v-2.9c0-0.8-0.5-1.3-1.2-1.3c-0.9,0-1.4,0.7-1.4,1.6V40H183v-2.9
                                                                           c0-0.8-0.5-1.3-1.2-1.3c-0.9,0-1.4,0.7-1.4,1.6V40h-1.1v-5.2h1.1v1c0.4-0.7,1-1,1.9-1c0.9,0,1.6,0.5,1.8,1.2c0.3-0.9,1-1.2,2-1.2
                                                                           C187.1,34.8,187.8,35.5,187.8,36.7z"/>
                                    <path id="XMLID_7_" fill="#0F2A3D" d="M194.1,37.8h-3.9c0.2,0.8,0.8,1.3,1.6,1.3c0.6,0,1.1-0.2,1.5-0.6l0.6,0.6
                                                                          c-0.5,0.6-1.2,0.9-2.1,0.9c-1.6,0-2.6-1.1-2.6-2.6c0-1.6,1.1-2.6,2.6-2.6C193.5,34.8,194.2,35.9,194.1,37.8z M193.1,37
                                                                          c0-0.8-0.6-1.3-1.4-1.3c-0.8,0-1.4,0.5-1.5,1.3H193.1z"/>
                                    <path id="XMLID_5_" fill="#0F2A3D" d="M200.4,36.7V40h-1.1v-2.9c0-0.8-0.5-1.3-1.2-1.3c-0.9,0-1.4,0.6-1.5,1.4V40h-1.1v-5.2h1.1v1
                                                                          c0.4-0.7,1-1,1.9-1C199.7,34.8,200.4,35.5,200.4,36.7z"/>
                                    <path id="XMLID_3_" fill="#0F2A3D" d="M205,39.6c-0.4,0.2-0.8,0.4-1.3,0.4c-0.8,0-1.4-0.4-1.4-1.5v-2.7h-0.7V35h0.7v-1.4h1.1V35
                                                                          h1.5v0.8h-1.5v2.5c0,0.5,0.2,0.7,0.6,0.7c0.2,0,0.5-0.1,0.8-0.2L205,39.6z"/>
                                </g>
                            </g>
                        </svg>
                    </a>
                    <div class="header__icon">
                        <div class="header__icon--box">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- /.header__icon--box -->
                    </div><!-- /.header__icon -->
                </div><!-- /.header__top -->
                <div class="header__menu">
                    <ul class="menu">
                        <li class="menu-item">
                            <a href="page-nosotros.php" title="Nosotros">Nosotros</a>
                        </li><!-- /.menu-item -->
                        <li class="menu-item">
                            <a href="page-blog.php" title="Blog">Blog</a>
                        </li><!-- /.menu-item -->
                        <li class="menu-item">
                            <a href="page-contacto.php" title="Contacto">Contacto</a>
                        </li><!-- /.menu-item -->
                        <li class="menu-item menu-item-has-children <?php if ( $page == 'inversiones' ) { echo 'current-menu-item current_page_ancestor'; } ?>">
                            <a href="page-que-hacemos.php" title="Inversiones">Inversiones</a>
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="page-que-hacemos.php" title="Qué Hacemos" class="<?php if ( $subpage == 'que-hacemos' ) { echo 'current-menu-item'; } ?>">Qué Hacemos</a>
                                </li><!-- /.menu-item -->
                                <li class="menu-item">
                                    <a href="page-productos.php" title="Productos" class="<?php if ( $subpage == 'productos' ) { echo 'current-menu-item'; } ?>">Productos</a>
                                </li><!-- /.menu-item -->
                            </ul>
                        </li><!-- /.menu-item -->
                        <li class="menu-item">
                            <a href="#" title="Inmobiliaria">Inmobiliaria</a>
                        </li><!-- /.menu-item -->
                    </ul><!-- /.menu -->
                    <form action="page-result.php" class="header__search">
                        <p>Buscador</p>
                        <div class="search__close">
                            <svg version="1.1" x="0px" y="0px" width="14.7px" height="14.7px" viewBox="0 0 14.7 14.7" enable-background="new 0 0 14.7 14.7" xml:space="preserve">
                                <g><line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" x1="0.7" y1="0.7" x2="14" y2="14"/><line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" x1="0.7" y1="14" x2="14" y2="0.7"/></g>
                            </svg>
                        </div><!-- /.search__close -->
                        <div class="input-group">
                            <input type="text" id="header-search">
                        </div><!-- /.input-group -->
                        <div class="search-group">
                            <input type="submit" value=" ">
                            <svg version="1.1" x="0px" y="0px" width="15.4px" height="15.4px" viewBox="0 0 15.4 15.4" enable-background="new 0 0 15.4 15.4" xml:space="preserve">
                                <path id="XMLID_1_" d="M15,13.3l-3.9-3.9c0.6-0.9,1-2.1,1-3.3c0-3.3-2.7-6-6-6S0,2.7,0,6s2.7,6,6,6 c1.2,0,2.3-0.4,3.3-1l3.9,3.9c0.2,0.2,0.6,0.4,0.9,0.4c0.3,0,0.6-0.1,0.9-0.4C15.5,14.5,15.5,13.7,15,13.3z M1.5,6 c0-2.5,2-4.5,4.5-4.5s4.5,2,4.5,4.5s-2,4.5-4.5,4.5S1.5,8.5,1.5,6z"/>
                            </svg>
                        </div><!-- /.search-group -->
                    </form><!-- /.header__search -->
                </div><!-- /.header__menu -->
            </header><!-- /.header -->