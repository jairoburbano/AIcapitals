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
            Contacto
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
        <form action="" class="contact__form">
            <div class="input-group group">
                <label for="username">Nombre*</label>
                <input type="text" name="username" id="username">
            </div><!-- /.input-group -->
            <div class="input-group group">
                <label for="userlastname">Apellido*</label>
                <input type="text" name="userlastname" id="userlastname">
            </div><!-- /.input-group -->
            <div class="input-group group">
                <label for="usermail">Email*</label>
                <input type="email" name="usermail" id="usermail">
            </div><!-- /.input-group -->
            <div class="input-group group">
                <label for="userphone">Fono*</label>
                <input type="tel" name="userphone" id="userphone">
            </div><!-- /.input-group -->
            <div class="select-group group">
                <svg version="1.1" x="0px" y="0px" width="25.3px" height="13.7px" viewBox="0 0 25.3 13.7" enable-background="new 0 0 25.3 13.7" xml:space="preserve">
                    <polyline fill="none" stroke="#006DB6" stroke-width="1.504" stroke-miterlimit="10" points="24.8,0.5 12.7,12.6 0.5,0.5 "/>
                </svg>
                <label for="subject">Asunto</label>
                <select name="subject" id="subject">
                    <option value="Asunto">Asunto</option>
                    <option value="Contacto" data-slug="contacto-de-prueba">Contacto</option>
                    <option value="Bla" data-slug="otro-slug">Bla</option>
                </select>
                <p class="text-dummy"></p><!-- /.text-dummy -->
            </div><!-- /.select-group group -->
            <div class="input-group group group--big">
                <label for="mensaje">Mensaje*</label>
                <textarea name="mensaje" id="mensaje"></textarea>
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
</div><!-- /.contact__box -->
<div class="map__box">
    <div id="map"></div><!-- /#map -->
    <div class="contact__info content">
        <h2>Lorem ipsum dolor sit amet, praesent accumsan donec...</h2>
        <div class="contacto__datos">
            <a href="#" target="_blank">
                <svg version="1.1" x="0px" y="0px" width="9.2px" height="14.7px" viewBox="0 0 9.2 14.7" enable-background="new 0 0 9.2 14.7" xml:space="preserve">
                    <path d="M4.6,0C2.1,0,0,2.1,0,4.6C0,9,4.6,14.7,4.6,14.7S9.2,9,9.2,4.6C9.2,2.1,7.1,0,4.6,0z M4.6,7.1 C3.2,7.1,2.1,6,2.1,4.6s1.1-2.5,2.5-2.5c1.4,0,2.5,1.1,2.5,2.5S6,7.1,4.6,7.1z"></path>
                </svg>
                Av. Apoquindo 5583. Of. 51, Las Condes, Santiago de Chile
            </a>
            <a href="tel:+2229519272" target="_blank">
                <svg version="1.1" x="0px" y="0px" width="7.8px" height="13.4px" viewBox="0 0 7.8 13.4" enable-background="new 0 0 7.8 13.4" xml:space="preserve">
                    <path d="M2.9,7.1c0.6,1.5,1.3,3,2,2.7c1-0.4,1.6-0.8,2.6,1.1C8.4,12.7,6.9,13,6,13.4C4.9,13.8,2.5,11.8,1,7.9 c-1.5-3.9-1-7,0.1-7.4C2,0.1,3.2-0.7,3.8,1.3c0.5,2-0.2,2.1-1.2,2.5C1.9,4.1,2.4,5.7,2.9,7.1z"></path>
                </svg>
                +2229519272
            </a>
            <a href="mailto:contacto@aicapitals.com" target="_blank">
                <svg version="1.1" x="0px" y="0px" width="10.8px" height="7.2px" viewBox="0 0 10.8 7.2" enable-background="new 0 0 10.8 7.2" xml:space="preserve">
                    <path d="M0.3,0.8c0.3,0.2,4.4,2.3,4.5,2.4C5,3.3,5.2,3.3,5.4,3.3s0.4,0,0.5-0.1c0.2-0.1,4.2-2.3,4.5-2.4 c0.3-0.2,0.6-0.8,0-0.8H0.3C-0.2,0,0.1,0.6,0.3,0.8z M10.6,2.1C10.3,2.3,6.2,4.4,6,4.5C5.8,4.6,5.6,4.6,5.4,4.6s-0.3,0-0.5-0.1 C4.7,4.4,0.6,2.3,0.2,2.1C0,2,0,2.1,0,2.2s0,4.4,0,4.4c0,0.3,0.3,0.6,0.6,0.6h9.6c0.3,0,0.6-0.3,0.6-0.6c0,0,0-4.3,0-4.4 S10.9,2,10.6,2.1z"></path>
                </svg>
                contacto@aicapitals.com
            </a>
        </div><!-- /.contacto__datos -->
    </div><!-- /.contact__info -->
</div><!-- /.map__box -->
<?php include 'footer.php'; ?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4cjkGTTSOMb350qjww7gpKhKpkBijhZ8"></script>
<script>
    function initialize() {
        $('.accordeon__title').click(function(e){
            setPin(e, $(this).data('lat'), $(this).data('lng'));
        });

        var mapCenter = new google.maps.LatLng(-33.412679, -70.579803);
        var zoomLevel = 16;
        var mapOptions = {
            center: mapCenter,
            zoom: zoomLevel,
            maxZoom:zoomLevel,
            minZoom:zoomLevel,
            disableDefaultUI: true,
            scrollwheel: false,
            disableDoubleClickZoom: true,
            keyboardShortcuts: false,
            zoomControl: false,
            streetViewControl: true,
            styles: [{"featureType":"all","stylers":[{"saturation":0},{"hue":"#e7ecf0"}]},{"featureType":"road","stylers":[{"saturation":-70}]},{"featureType":"transit","stylers":[{"visibility":"off"}]},{"featureType":"poi","stylers":[{"visibility":"off"}]},{"featureType":"water","stylers":[{"visibility":"simplified"},{"saturation":-60}]}]
        };
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
        if($(window).width() < 740) {
            console.log('mobile');
            var icon = {
                url: '{{ theme.path ~ "/img/marker.png" }}', // url
                size: new google.maps.Size(40, 54), // size
                origin: new google.maps.Point(0,0), // origin
                anchor: new google.maps.Point(0, 54) // anchor 
            };
        }
        if($(window).width() > 740 && $(window).width() < 1025) {
            console.log('tablet');
            var icon = {
                url: '{{ theme.path ~ "/img/marker-tablet.png" }}', // url
                size: new google.maps.Size(65, 89), // size
                origin: new google.maps.Point(0,0), // origin
                anchor: new google.maps.Point(0, 89) // anchor 
            };
        }
        if($(window).width() > 1025) {
            console.log('desktop');
            var icon = {
                url: '{{ theme.path ~ "/img/marker-desktop.png" }}', // url
                size: new google.maps.Size(82, 112), // size
                origin: new google.maps.Point(0,0), // origin
                anchor: new google.maps.Point(0, 112) // anchor 
            };
        }
        function setPin(e, lat, lng){
            e.preventDefault();
            markerPosition = new google.maps.LatLng(lat, lng);
            marker.setMap(null);
            map.panTo(markerPosition);
            marker = new google.maps.Marker({
                position: markerPosition,
                map: map,
                animation: google.maps.Animation.DROP,
                icon: 'img/marker.png',
                clickable: false
            });
            return false;
        }
        google.maps.event.addListener(map, 'dragend', function(){
            $c = map.getCenter();
            $ll = new google.maps.LatLng($c.d, $c.e);
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>