<?php
/**
 *
 *
 * @package		aicapitals
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 *
 */
$page = 'preguntas';
$subpage = '';
$type = 'page';
$title = 'Preguntas Frecuentes';
$subpage_title = ' ';
include 'header.php';  ?>
<a href="page-productos.php" title="Volver" class="btn--back">
        <svg><use xlink:href="#shape-icon-volver" /></svg>
        <span>Volver a proyectos disponibles</span>
    </a><!-- /.btn--back -->
<div class="wrap">
    <section class="preguntas">
        <div class="preguntas--box">
            <div class="preguntas__title--normal">
                <h2>¿Qué son los Fondos de Inversión?</h2>
            </div><!-- /.preguntas__title -->
            <div class="preguntas__content--normal content">
                <p>
                    Lorem ipsum Lorem ipsum dolor sit amet, praesent accumsan donec elementum facilisis. Eu consequat enim dignissim pharetra, sed facilisi nisl lorem fusce. Nunc ante. Proin molestie faucibus ac dictum urna, est dui metus magna, et magna ullamcorper ultrices sit. Sit litora a lacus ipsum, est in wisi, in mauris vestibulum proin ornare nec nulla, elit nec eleifend molestie. Sit et, volutpat tellus iaculis risus elit integer, sit elit vel ac integer. Lectus suscipit enim velit sem, eu suspendisse nulla dui ante rutrum...
                </p>
                <div class="share">
                    <p>Compartir</p>
                    <div class="share__box">
                        <a href="mailto:jairo@reactor.cl" title="Mail" target="_blank" class="popup">
                            <svg><use xlink:href="#shape-icon-mail" /></svg>
                        </a>
                        <a href="#" title="Facebook" target="_blank" class="popup">
                            <svg><use xlink:href="#shape-icon-facebook" /></svg>
                        </a>
                        <a href="#" title="Linkedin" target="_blank" class="popup">
                            <svg><use xlink:href="#shape-icon-linkedin" /></svg>
                        </a>
                        <a href="#" title="Twitter" target="_blank" class="popup">
                            <svg><use xlink:href="#shape-icon-twitter" /></svg>
                        </a>
                    </div><!-- /.share__box -->
                </div><!-- /.share -->
            </div><!-- /.preguntas__content content -->
        </div><!-- /.preguntas--box -->
    </section><!-- /.preguntas -->
</div><!-- /.wrap -->
<?php include 'footer.php'; ?>