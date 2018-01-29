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
            Blog
        </h1><!-- /.title--page -->
    </div><!-- /.banner__content -->
    <div class="tri--left"></div><!-- /.tri--left -->
    <div class="tri--right"></div><!-- /.tri--right -->
</div><!-- /.banner -->
<div class="categories">
    <div class="select-dummy">
        <select name="categories" id="categories" onchange="window.location.href=this.value">
            <option data-name="Noticias" value="http://google.com">Noticias</option>
            <option data-name="Artículos" value="http://google.com">Artículos</option>
            <option data-name="Columnas" value="http://google.com">Columnas</option>
            <option data-name="Testimonios" value="http://google.com">Testimonios</option>
            <option data-name="Todas" value="http://google.com">Todas</option>
        </select>
        <p>Todos</p>
        <svg version="1.1" x="0px" y="0px" width="14.5px" height="7.2px" viewBox="0 0 14.5 7.2" enable-background="new 0 0 14.5 7.2" xml:space="preserve">
            <polygon fill="#FFFFFF" points="14.5,0 7.2,7.2 0,0 "/>
        </svg>
    </div><!-- /.select-dummy -->
    <div class="cat-box">
        <a href="#" title="Noticias" class="active">Noticias</a>
        <a href="#" title="Artículos">Artículos</a>
        <a href="#" title="Columnas">Columnas</a>
        <a href="#" title="Testimonios">Testimonios</a>
        <a href="#" title="Todas">Todas</a>
    </div><!-- /.cat-box -->
</div><!-- /.categories -->
<div class="wrap">
    <div class="page-blog">
        <div class="columna__item">
            <div class="columna--top"><!-- columna__top va solo si es columna -->
                <div class="columna__autor team__figure">
                    <img src="https://unsplash.it/40/45" alt="Titulo">
                </div><!-- /.columna__autor team__figure -->
                <h3 class="columna__title">José Miguel Jiménez K.</h3><!-- /.columna__title -->
            </div><!-- /.columna--top -->
            <div class="columna__content content">
                <h2>Lorem ipsum dolor sit amet, praesent accumsan donec elementum facilisis.</h2>
                <p class="category"><a href="#" title="Categoría">Categoría</a> | Fecha</p><!-- /.category -->
                <p>
                    Lorem ipsum dolor sit amet, praesent accumsan donec elementum facilisis. Eu consequat enim dignissim pharetra, sed facilisi nisl lorem fusce. Nunc ante. Proin molestie faucibus ac dictum urna, est dui.
                </p>
                <a href="single-blog.php" class="btn btn--big" title="Leer más">Leer más</a>
            </div><!-- /.columna__content content -->
        </div><!-- /.columna__item -->
        <div class="columna__item">
            <div class="columna__content content">
                <h2>Lorem ipsum dolor sit amet, praesent accumsan donec elementum facilisis.</h2>
                <p class="category"><a href="#" title="Categoría">Categoría</a> | Fecha</p><!-- /.category -->
                <p>
                    Lorem ipsum dolor sit amet, praesent accumsan donec elementum facilisis. Eu consequat enim dignissim pharetra, sed facilisi nisl lorem fusce. Nunc ante. Proin molestie faucibus ac dictum urna, est dui.
                </p>
                <a href="single-blog.php" class="btn btn--big" title="Leer más">Leer más</a>
            </div><!-- /.columna__content content -->
        </div><!-- /.columna__item -->
        <div class="columna__item">
            <div class="columna__content content">
                <h2>Lorem ipsum dolor sit amet, praesent accumsan donec elementum facilisis.</h2>
                <p class="category"><a href="#" title="Categoría">Categoría</a> | Fecha</p><!-- /.category -->
                <p>
                    Lorem ipsum dolor sit amet, praesent accumsan donec elementum facilisis. Eu consequat enim dignissim pharetra, sed facilisi nisl lorem fusce. Nunc ante. Proin molestie faucibus ac dictum urna, est dui.
                </p>
                <a href="single-blog.php" class="btn btn--big" title="Leer más">Leer más</a>
            </div><!-- /.columna__content content -->
        </div><!-- /.columna__item -->
        <div class="columna__item">
            <div class="columna__content content">
                <h2>Lorem ipsum dolor sit amet, praesent accumsan donec elementum facilisis.</h2>
                <p class="category"><a href="#" title="Categoría">Categoría</a> | Fecha</p><!-- /.category -->
                <p>
                    Lorem ipsum dolor sit amet, praesent accumsan donec elementum facilisis. Eu consequat enim dignissim pharetra, sed facilisi nisl lorem fusce. Nunc ante. Proin molestie faucibus ac dictum urna, est dui.
                </p>
                <a href="single-blog.php" class="btn btn--big" title="Leer más">Leer más</a>
            </div><!-- /.columna__content content -->
        </div><!-- /.columna__item -->
        <div class="columna__item">
            <div class="columna__content content">
                <h2>Lorem ipsum dolor sit amet, praesent accumsan donec elementum facilisis. donec elementum facilisis.</h2>
                <p class="category"><a href="#" title="Categoría">Categoría</a> | Fecha</p><!-- /.category -->
                <p>
                    Lorem ipsum dolor sit amet, praesent accumsan donec elementum facilisis. Eu consequat enim dignissim pharetra, sed facilisi nisl lorem fusce. Nunc ante. Proin molestie faucibus ac dictum urna, est dui.
                </p>
                <a href="single-blog.php" class="btn btn--big" title="Leer más">Leer más</a>
            </div><!-- /.columna__content content -->
        </div><!-- /.columna__item -->
        <div class="columna__item">
            <div class="columna__content content">
                <h2>Lorem ipsum dolor sit amet, praesent accumsan donec elementum facilisis.</h2>
                <p class="category"><a href="#" title="Categoría">Categoría</a> | Fecha</p><!-- /.category -->
                <p>
                    Lorem ipsum dolor sit amet, praesent accumsan donec elementum facilisis. Eu consequat enim dignissim pharetra, sed facilisi nisl lorem fusce. Nunc ante. Proin molestie faucibus ac dictum urna, est dui.
                </p>
                <a href="single-blog.php" class="btn btn--big" title="Leer más">Leer más</a>
            </div><!-- /.columna__content content -->
        </div><!-- /.columna__item -->
        <div class="columna__item">
            <div class="columna__content content">
                <h2>Lorem ipsum dolor sit amet, praesent accumsan donec elementum facilisis.</h2>
                <p class="category"><a href="#" title="Categoría">Categoría</a> | Fecha</p><!-- /.category -->
                <p>
                    Lorem ipsum dolor sit amet, praesent accumsan donec elementum facilisis. Eu consequat enim dignissim pharetra, sed facilisi nisl lorem fusce. Nunc ante. Proin molestie faucibus ac dictum urna, est dui.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil unde maxime facere soluta quia quasi consequatur quod, quibusdam asperiores sapiente.
                </p>
                <a href="single-blog.php" class="btn btn--big" title="Leer más">Leer más</a>
            </div><!-- /.columna__content content -->
        </div><!-- /.columna__item -->
        <div class="columna__item">
            <div class="columna__content content">
                <h2>Lorem ipsum dolor sit amet, praesent accumsan donec elementum facilisis.</h2>
                <p class="category"><a href="#" title="Categoría">Categoría</a> | Fecha</p><!-- /.category -->
                <p>
                    Lorem ipsum dolor sit amet, praesent accumsan donec elementum facilisis. Eu consequat enim dignissim pharetra, sed facilisi nisl lorem fusce. Nunc ante. Proin molestie faucibus ac dictum urna, est dui.
                </p>
                <a href="single-blog.php" class="btn btn--big" title="Leer más">Leer más</a>
            </div><!-- /.columna__content content -->
        </div><!-- /.columna__item -->
    </div><!-- /.blog -->
    <ul class="paginador">
        <li class="arrow-prev">
            <a href="#" title="Anterior" class="disable">
                <svg version="1.1" x="0px" y="0px" width="7.4px" height="13.6px" viewBox="0 0 7.4 13.6" enable-background="new 0 0 7.4 13.6" xml:space="preserve">
                    <polyline id="XMLID_1_" fill="none" stroke="#166EB6" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="6.9,13.1 0.5,6.7 6.7,0.5 "/>
                </svg>
            </a>
        </li>
        <li>
            <a href="#" title="1" class="current">1</a>
        </li>
        <li>
            <a href="#" title="2">2</a>
        </li>
        <li>
            <a href="#" title="3">3</a>
        </li>
        <li>
            <a href="#" title="4">4</a>
        </li>
        <li>
            ...
        </li>
        <li class="arrow-next">
            <a href="#" title="Siguiente">
                <svg version="1.1" x="0px" y="0px" width="7.4px" height="13.6px" viewBox="0 0 7.4 13.6" enable-background="new 0 0 7.4 13.6" xml:space="preserve">
                    <polyline id="XMLID_1_" fill="none" stroke="#166EB6" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="0.5,0.5 6.9,6.9 0.7,13.1 "/>
                </svg>
            </a>
        </li>
    </ul><!-- /.paginador -->
</div><!-- /.wrap -->
<?php include 'footer.php'; ?>