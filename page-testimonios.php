<?php
/**
 *
 *
 * @package		aicapitals
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 *
 */
$page = 'blog';
$subpage = '';
$type = 'page';
$title = 'Blog';
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
            Testimonios
        </h1><!-- /.title--page -->
    </div><!-- /.banner__content -->
    <div class="tri--left"></div><!-- /.tri--left -->
    <div class="tri--right"></div><!-- /.tri--right -->
</div><!-- /.banner -->
<div class="wrap">
    <div class="page--testimonios">
        <div class="team__item testimonios__item">
            <div class="team__media team__figure">
                <img src="https://unsplash.it/206/230" alt="Titulo">
            </div><!-- /.team__media team__figure -->
            <div class="team__test__content">
                <div class="icon__test">
                    <img src="img/icon-quotes.svg" alt="Quotes">
                </div><!-- /.icon__test -->
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris maximus posuere turpis eu faucibus. Aenean ullamcorper, magna sit amet ullamcorper rhoncus, neque nisi mattis justo, a condimentum turpis leo in lorem. Integer efficitur quis leo ut tempor. Nullam a pharetra tortor, ut viverra lorem. Proin cursus fermentum posuere.
                </p>
                <div class="team__name">José Miguel Jiménez K.</div><!-- /.team__name -->
                <div class="team__cargo">
                    Socio y Director de Finanzas Corporativas
                </div><!-- /.team__cargo -->
            </div><!-- /.team__test__content -->
        </div>
        <div class="team__item testimonios__item">
            <div class="team__media team__figure testimonio--video" data-type="youtube" data-id="UqyT8IEBkvY">
                <img src="https://unsplash.it/206/230" alt="Titulo">
                <img src="img/icon-video.svg" alt="Play" class="icon--video">
            </div><!-- /.team__media team__figure -->
            <div class="team__test__content">
                <div class="icon__test">
                    <img src="img/icon-quotes.svg" alt="Quotes">
                </div><!-- /.icon__test -->
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris maximus posuere turpis eu faucibus. Aenean ullamcorper, magna sit amet ullamcorper rhoncus, neque nisi mattis justo, a condimentum turpis leo in lorem. Integer efficitur quis leo ut tempor. Nullam a pharetra tortor, ut viverra lorem. Proin cursus fermentum posuere.
                </p>
                <div class="team__name">José Miguel Jiménez K.</div><!-- /.team__name -->
                <div class="team__cargo">
                    Socio y Director de Finanzas Corporativas
                </div><!-- /.team__cargo -->
            </div><!-- /.team__test__content -->
        </div>
        <div class="team__item testimonios__item">
            <div class="team__media team__figure">
                <img src="https://unsplash.it/206/230" alt="Titulo">
            </div><!-- /.team__media team__figure -->
            <div class="team__test__content">
                <div class="icon__test">
                    <img src="img/icon-quotes.svg" alt="Quotes">
                </div><!-- /.icon__test -->
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris maximus posuere turpis eu faucibus. Aenean ullamcorper, magna sit amet ullamcorper rhoncus, neque nisi mattis justo, a condimentum turpis leo in lorem. Integer efficitur quis leo ut tempor. Nullam a pharetra tortor, ut viverra lorem. Proin cursus fermentum posuere.
                </p>
                <div class="team__name">José Miguel Jiménez K.</div><!-- /.team__name -->
                <div class="team__cargo">
                    Socio y Director de Finanzas Corporativas
                </div><!-- /.team__cargo -->
            </div><!-- /.team__test__content -->
        </div>
    </div><!-- /.page--testimonios -->
</div><!-- /.wrap -->
<div class="light--test">
    <div class="light__container">
        <div class="light__content">
            <div class="light__close">
                <!-- Generator: Adobe Illustrator 19.1.0, SVG Export Plug-In  -->
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="36.4px" height="36.4px" viewBox="0 0 36.4 36.4" enable-background="new 0 0 36.4 36.4" xml:space="preserve">
                    <g>
                        <line fill="none" stroke="#FFFFFF" stroke-width="2.5978" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="11.8" y1="11.8" x2="24.7" y2="24.7"/>
                        <line fill="none" stroke="#FFFFFF" stroke-width="2.5978" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="11.8" y1="24.7" x2="24.7" y2="11.8"/>
                    </g>
                    <circle fill="none" stroke="#FFFFFF" stroke-width="2.5978" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="18.2" cy="18.2" r="16.9"/>
                </svg>
            </div><!-- /.light__close -->
            <iframe src="" frameborder="0" allowfullscreen></iframe>
        </div><!-- /.light__content -->
    </div><!-- /.light__container -->
</div><!-- /.light--test -->
<?php include 'footer.php'; ?>