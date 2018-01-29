<?php
/**
 *
 *
 * @package		aicapitals
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 *
 */
$page = 'inversiones';
$subpage = 'productos';
$type = 'page';
$title = 'Productos';
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
            Productos
        </h1><!-- /.title--page -->
    </div><!-- /.banner__content -->
    <div class="tri--left"></div><!-- /.tri--left -->
    <div class="tri--right"></div><!-- /.tri--right -->
</div><!-- /.banner -->
<div class="wrap">
    <div class="content content--bajada">
        <p>
            ¿Quieres saber en qué invertir? <br>
            Revisa aquí el listado de proyectos de AICapitals en los que puedes participar. También puedes visitar proyectos ya terminados o pagados para estar más informado sobre los resultados de nuestro trabajo ¡Elige bien!
        </p>
    </div><!-- /.content -->
</div><!-- /.wrap -->
<div class="categories">
    <div class="select-dummy">
        <select name="categories" id="categories" onchange="window.location.href=this.value">
            <option data-name="Todas" value="http://google.com">Todas</option>
            <option data-name="Artículos Inmobiliarios" value="http://google.com">Artículos Inmobiliarios</option>
            <option data-name="Private equity" value="http://google.com">Private equity</option>
            <option data-name="Activos financieros" value="http://google.com">Activos financieros</option>
        </select>
        <p>Todos</p>
        <svg version="1.1" x="0px" y="0px" width="14.5px" height="7.2px" viewBox="0 0 14.5 7.2" enable-background="new 0 0 14.5 7.2" xml:space="preserve">
            <polygon fill="#FFFFFF" points="14.5,0 7.2,7.2 0,0 "/>
        </svg>
    </div><!-- /.select-dummy -->
    <div class="cat-box">
        <a href="#" title="Todas" class="active">Todas</a>
        <a href="#" title="Artículos Inmobiliarios">Artículos Inmobiliarios</a>
        <a href="#" title="Private equity">Private equity</a>
        <a href="#" title="Activos financieros">Activos financieros</a>
    </div><!-- /.cat-box -->
</div><!-- /.categories -->
<div class="wrap">
    <section id="inmobiliario" class="build__container">
        <h2 class="title--icon">
            Activo inmobiliario
            <svg version="1.1" x="0px" y="0px" width="46px" height="12.3px" viewBox="0 0 46 12.3" enable-background="new 0 0 46 12.3" xml:space="preserve">
                <g>
                    <g>
                        <g id="XMLID_9_">
                            <g id="XMLID_10_">
                                <path id="XMLID_11_" d="M5.5,12.3c-0.2,0-0.4,0-0.5-0.1L0.5,9.6C0.2,9.5,0,9.1,0,8.7V3.6c0-0.4,0.2-0.8,0.5-0.9l4.4-2.5C5.3,0,5.7,0,6,0.1l4.4,2.5C10.7,2.9,11,3.3,11,3.6v5.1c0,0.4-0.2,0.8-0.5,0.9L6,12.2C5.9,12.3,5.7,12.3,5.5,12.3z"/>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g id="XMLID_5_">
                            <g id="XMLID_6_">
                                <path id="XMLID_7_" d="M22.5,12.3c-0.2,0-0.4,0-0.5-0.1l-4.4-2.5C17.2,9.5,17,9.1,17,8.7V3.6 c0-0.4,0.2-0.8,0.5-0.9l4.4-2.5C22.3,0,22.7,0,23,0.1l4.4,2.5C27.7,2.9,28,3.3,28,3.6v5.1c0,0.4-0.2,0.8-0.5,0.9L23,12.2 C22.9,12.3,22.7,12.3,22.5,12.3z"/>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g id="XMLID_1_">
                            <g id="XMLID_2_">
                                <path id="XMLID_3_" d="M40.5,12.3c-0.2,0-0.4,0-0.5-0.1l-4.4-2.5C35.2,9.5,35,9.1,35,8.7V3.6 c0-0.4,0.2-0.8,0.5-0.9l4.4-2.5C40.3,0,40.7,0,41,0.1l4.4,2.5C45.7,2.9,46,3.3,46,3.6v5.1c0,0.4-0.2,0.8-0.5,0.9L41,12.2 C40.9,12.3,40.7,12.3,40.5,12.3z"/>
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
        </h2><!-- /.title--icon -->
        <a href="single-producto.php" title="titulo" class="build__item">
            <span class="build__media">
                <img src="https://unsplash.it/370/215" alt="Titulo">
                <span class="build__estado estado--fresh">En captación</span><!-- /.build__estado -->
            </span><!-- /.build__media -->
            <span class="build__title">Proyecto Interés Hipotecario II</span><!-- /.build__title -->
        </a><!-- /.build__item -->
        <a href="single-producto.php" title="titulo" class="build__item">
            <span class="build__media">
                <img src="https://unsplash.it/370/215" alt="Titulo">
                <span class="build__estado estado--normal">En ejecución</span><!-- /.build__estado -->
            </span><!-- /.build__media -->
            <span class="build__title">Proyecto Interés Hipotecario II</span><!-- /.build__title -->
        </a><!-- /.build__item -->
        <a href="single-producto.php" title="titulo" class="build__item">
            <span class="build__media">
                <img src="https://unsplash.it/370/215" alt="Titulo">
                <span class="build__estado estado--done">Pagado</span><!-- /.build__estado -->
            </span><!-- /.build__media -->
            <span class="build__title">Proyecto Interés Hipotecario II</span><!-- /.build__title -->
        </a><!-- /.build__item -->
    </section><!-- /#inmobiliario.build__container -->
    <section id="private" class="build__container">
        <h2 class="title--icon">
            Private equity
            <svg version="1.1" x="0px" y="0px" width="46px" height="12.3px" viewBox="0 0 46 12.3" enable-background="new 0 0 46 12.3" xml:space="preserve">
                <g>
                    <g>
                        <g id="XMLID_9_">
                            <g id="XMLID_10_">
                                <path id="XMLID_11_" d="M5.5,12.3c-0.2,0-0.4,0-0.5-0.1L0.5,9.6C0.2,9.5,0,9.1,0,8.7V3.6c0-0.4,0.2-0.8,0.5-0.9l4.4-2.5C5.3,0,5.7,0,6,0.1l4.4,2.5C10.7,2.9,11,3.3,11,3.6v5.1c0,0.4-0.2,0.8-0.5,0.9L6,12.2C5.9,12.3,5.7,12.3,5.5,12.3z"/>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g id="XMLID_5_">
                            <g id="XMLID_6_">
                                <path id="XMLID_7_" d="M22.5,12.3c-0.2,0-0.4,0-0.5-0.1l-4.4-2.5C17.2,9.5,17,9.1,17,8.7V3.6 c0-0.4,0.2-0.8,0.5-0.9l4.4-2.5C22.3,0,22.7,0,23,0.1l4.4,2.5C27.7,2.9,28,3.3,28,3.6v5.1c0,0.4-0.2,0.8-0.5,0.9L23,12.2 C22.9,12.3,22.7,12.3,22.5,12.3z"/>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g id="XMLID_1_">
                            <g id="XMLID_2_">
                                <path id="XMLID_3_" d="M40.5,12.3c-0.2,0-0.4,0-0.5-0.1l-4.4-2.5C35.2,9.5,35,9.1,35,8.7V3.6 c0-0.4,0.2-0.8,0.5-0.9l4.4-2.5C40.3,0,40.7,0,41,0.1l4.4,2.5C45.7,2.9,46,3.3,46,3.6v5.1c0,0.4-0.2,0.8-0.5,0.9L41,12.2 C40.9,12.3,40.7,12.3,40.5,12.3z"/>
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
        </h2><!-- /.title--icon -->
        <a href="single-producto.php" title="titulo" class="build__item">
            <span class="build__media">
                <img src="https://unsplash.it/370/215" alt="Titulo">
                <span class="build__estado estado--verde">Verde</span><!-- /.build__estado -->
            </span><!-- /.build__media -->
            <span class="build__title">Proyecto Interés Hipotecario II</span><!-- /.build__title -->
        </a><!-- /.build__item -->
        <a href="single-producto.php" title="titulo" class="build__item">
            <span class="build__media">
                <img src="https://unsplash.it/370/215" alt="Titulo">
                <span class="build__estado estado--blanco">Blanco</span><!-- /.build__estado -->
            </span><!-- /.build__media -->
            <span class="build__title">Proyecto Interés Hipotecario II</span><!-- /.build__title -->
        </a><!-- /.build__item -->
        <a href="single-producto.php" title="titulo" class="build__item">
            <span class="build__media">
                <img src="https://unsplash.it/370/215" alt="Titulo">
                <span class="build__estado estado--entrega">Entrega</span><!-- /.build__estado -->
            </span><!-- /.build__media -->
            <span class="build__title">Proyecto Interés Hipotecario II</span><!-- /.build__title -->
        </a><!-- /.build__item -->
        <a href="single-producto.php" title="titulo" class="build__item">
            <span class="build__media">
                <img src="https://unsplash.it/370/215" alt="Titulo">
                <span class="build__estado estado--done">Pagado</span><!-- /.build__estado -->
            </span><!-- /.build__media -->
            <span class="build__title">Proyecto Interés Hipotecario II</span><!-- /.build__title -->
        </a><!-- /.build__item -->
        <a href="single-producto.php" title="titulo" class="build__item">
            <span class="build__media">
                <img src="https://unsplash.it/370/215" alt="Titulo">
                <span class="build__estado estado--done">Pagado</span><!-- /.build__estado -->
            </span><!-- /.build__media -->
            <span class="build__title">Proyecto Interés Hipotecario II</span><!-- /.build__title -->
        </a><!-- /.build__item -->
    </section><!-- /#private.build__container -->
    <section id="financiero" class="build__container">
        <h2 class="title--icon">
            Activo Financiero
            <svg version="1.1" x="0px" y="0px" width="46px" height="12.3px" viewBox="0 0 46 12.3" enable-background="new 0 0 46 12.3" xml:space="preserve">
                <g>
                    <g>
                        <g id="XMLID_9_">
                            <g id="XMLID_10_">
                                <path id="XMLID_11_" d="M5.5,12.3c-0.2,0-0.4,0-0.5-0.1L0.5,9.6C0.2,9.5,0,9.1,0,8.7V3.6c0-0.4,0.2-0.8,0.5-0.9l4.4-2.5C5.3,0,5.7,0,6,0.1l4.4,2.5C10.7,2.9,11,3.3,11,3.6v5.1c0,0.4-0.2,0.8-0.5,0.9L6,12.2C5.9,12.3,5.7,12.3,5.5,12.3z"/>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g id="XMLID_5_">
                            <g id="XMLID_6_">
                                <path id="XMLID_7_" d="M22.5,12.3c-0.2,0-0.4,0-0.5-0.1l-4.4-2.5C17.2,9.5,17,9.1,17,8.7V3.6 c0-0.4,0.2-0.8,0.5-0.9l4.4-2.5C22.3,0,22.7,0,23,0.1l4.4,2.5C27.7,2.9,28,3.3,28,3.6v5.1c0,0.4-0.2,0.8-0.5,0.9L23,12.2 C22.9,12.3,22.7,12.3,22.5,12.3z"/>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g id="XMLID_1_">
                            <g id="XMLID_2_">
                                <path id="XMLID_3_" d="M40.5,12.3c-0.2,0-0.4,0-0.5-0.1l-4.4-2.5C35.2,9.5,35,9.1,35,8.7V3.6 c0-0.4,0.2-0.8,0.5-0.9l4.4-2.5C40.3,0,40.7,0,41,0.1l4.4,2.5C45.7,2.9,46,3.3,46,3.6v5.1c0,0.4-0.2,0.8-0.5,0.9L41,12.2 C40.9,12.3,40.7,12.3,40.5,12.3z"/>
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
        </h2><!-- /.title--icon -->
        <a href="single-producto.php" title="titulo" class="build__item">
            <span class="build__media">
                <img src="https://unsplash.it/370/215" alt="Titulo">
                <span class="build__estado estado--fresh">En captación</span><!-- /.build__estado -->
            </span><!-- /.build__media -->
            <span class="build__title">Proyecto Interés Hipotecario II</span><!-- /.build__title -->
        </a><!-- /.build__item -->
        <a href="single-producto.php" title="titulo" class="build__item">
            <span class="build__media">
                <img src="https://unsplash.it/370/215" alt="Titulo">
                <span class="build__estado estado--normal">En ejecución</span><!-- /.build__estado -->
            </span><!-- /.build__media -->
            <span class="build__title">Proyecto Interés Hipotecario II</span><!-- /.build__title -->
        </a><!-- /.build__item -->
        <a href="single-producto.php" title="titulo" class="build__item">
            <span class="build__media">
                <img src="https://unsplash.it/370/215" alt="Titulo">
                <span class="build__estado estado--done">Pagado</span><!-- /.build__estado -->
            </span><!-- /.build__media -->
            <span class="build__title">Proyecto Interés Hipotecario II</span><!-- /.build__title -->
        </a><!-- /.build__item -->
    </section><!-- /#financiero.build__container -->
</div><!-- /.wrap -->
<section class="feature">
    <div class="feature__content">
        <h2 class="feature__title">¿Te interesa <strong>saber más</strong>?</h2><!-- /.feature__title -->
        <p>Deja tus datos y pronto te contactaremos</p>
        <form action="" class="feature__form">
            <div class="input-group group">
                <label for="featurename">Nombre</label>
                <input type="text" id="featurename" name="featurename">
            </div><!-- /.input-group group -->
            <div class="input-group group">
                <label for="featurelastname">Apellido</label>
                <input type="text" id="featurelastname" name="featurelastname">
            </div><!-- /.input-group group -->
            <div class="input-group group">
                <label for="featurephone">Fono</label>
                <input type="tel" id="featurephone" name="featurephone">
            </div><!-- /.input-group group -->
            <div class="input-group group">
                <label for="featuremail">Mail</label>
                <input type="mail" id="featuremail" name="featuremail">
            </div><!-- /.input-group group -->
            <div class="send-group">
                <div class="btn btn--small btn--opac btn--center">
                    <input type="submit" value="Enviar">
                    <svg version="1.1" x="0px" y="0px" width="17.3px" height="17.3px" viewBox="0 0 17.3 17.3" enable-background="new 0 0 17.3 17.3" xml:space="preserve">
                        <path fill="#FFFFFF" d="M7.5,6.4l2.1,2.3l-2.1,2.3c-0.2,0.2-0.2,0.5,0,0.6c0.2,0.2,0.5,0.2,0.6,0L10.7,9c0.2-0.2,0.2-0.5,0-0.6 L8.1,5.8C8,5.6,7.7,5.6,7.5,5.8C7.3,5.9,7.3,6.2,7.5,6.4z M0,8.7c0,4.8,3.9,8.7,8.7,8.7c4.8,0,8.7-3.9,8.7-8.7S13.4,0,8.7,0 C3.9,0,0,3.9,0,8.7z M16.2,8.7c0,4.2-3.4,7.5-7.5,7.5s-7.5-3.4-7.5-7.5c0-4.2,3.4-7.5,7.5-7.5S16.2,4.5,16.2,8.7z"/>
                    </svg>
                </div><!-- /.btn btn--big -->
            </div><!-- /.send-group -->
        </form><!-- /.feature__form -->
    </div><!-- /.feature__content -->
</section><!-- /.feature -->
<?php include 'footer.php'; ?>