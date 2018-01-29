<?php
/**
 *
 *
 * @package		aicapitals
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 *
 */
$page = 'privado';
$subpage = '';
$type = 'single';
$title = 'Contenido privado';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="wrap wrap--privado">
    <h2 class="title--icon">
        Contenido Privado
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
    <div class="content bajada">
        <p>
            Debes iniciar sesión para tener acceso a este contenido.
        </p>
    </div><!-- /.content bajada -->
    <form action="" class="contact__privado">
        <div class="input-group group">
            <label for="pagepass">Ingresar contraseña*</label>
            <input type="password" name="pagepass" id="pagepass">
        </div><!-- /.input-group -->
        <div class="send-group">
            <div class="btn btn--small btn--center">
                <input type="submit" value="Enviar">
                <svg version="1.1" x="0px" y="0px" width="17.3px" height="17.3px" viewBox="0 0 17.3 17.3" enable-background="new 0 0 17.3 17.3" xml:space="preserve">
                    <path fill="#FFFFFF" d="M7.5,6.4l2.1,2.3l-2.1,2.3c-0.2,0.2-0.2,0.5,0,0.6c0.2,0.2,0.5,0.2,0.6,0L10.7,9c0.2-0.2,0.2-0.5,0-0.6 L8.1,5.8C8,5.6,7.7,5.6,7.5,5.8C7.3,5.9,7.3,6.2,7.5,6.4z M0,8.7c0,4.8,3.9,8.7,8.7,8.7c4.8,0,8.7-3.9,8.7-8.7S13.4,0,8.7,0 C3.9,0,0,3.9,0,8.7z M16.2,8.7c0,4.2-3.4,7.5-7.5,7.5s-7.5-3.4-7.5-7.5c0-4.2,3.4-7.5,7.5-7.5S16.2,4.5,16.2,8.7z"/>
                </svg>
            </div><!-- /.btn btn--big -->
        </div><!-- /.send-group -->
    </form><!-- /.contact__form -->
</div><!-- /.wrap -->
<?php include 'footer.php'; ?>