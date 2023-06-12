@extends("themes/web/layout")

@section("content")
<section class="main-container col1-layout bar bar--md">
    <div class="main container">
        <div class="contact-user-message">
            <div class="page-title">
                <h2>Contactanos</h2>
            </div>
            <fieldset class="col2-set">
                <div class="col-1 contact-users">
                    <strong>Dejanos un mensaje</strong>
                    <div class="content">
                        <ul class="form-list">
                            <li>
                                <label for="name">Nombre y Apellidos <span class="required">*</span></label>
                                <br>
                                <input type="text" title="Correo Electonico" class="input-text required-entry" id="name" name="name">
                            </li>
                            <li>
                                <label for="phone">Telefono / Celular <span class="required">*</span></label>
                                <br>
                                <input type="text" title="Telefono / Celular" class="input-text required-entry" id="phone" name="phone">
                            </li>
                            <li>
                                <label for="name">Direccion actual <span class="required">*</span></label>
                                <br>
                                <input type="text" title="Direccion Actual" class="input-text required-entry" id="address" name="address">
                            </li>
                            <li>
                                <label for="email">Correo electonico <span class="required">*</span></label>
                                <br>
                                <input type="text" title="Correo Electonico" class="input-text required-entry" id="email" name="username">
                            </li>
                            <li>
                                <label for="message">Escribenos un mensaje <span class="required">*</span></label>
                                <br>
                                <textarea class="input-text required-entry" title="Mensaje" name="message" id="message" rows="4" style="resize: none;"></textarea>
                            </li>
                        </ul>
                        <div class="buttons-set">
                            <button class="button create-account btn-block btn-lemi" type="button"><span>Enviar Mensaje</span></button>
                        </div>
                    </div>
                </div>
                <div class="col-2 facebook-view">
                    <strong>Conectanos por redes sociales</strong>
                    <div class="content">
                        <strong>Vía WhatsApp</strong>
                        <br>
                        <div class="buttons-set">
                            <button class="button create-account button-wtsp" type="button"><span>Enviar mensaje</span></button>
                        </div>
                        <br><br>
                        <strong>Vía Facebook</strong>
                        <div>
                            <div class="fb-page" data-href="https://www.facebook.com/Lemimayorista" data-tabs="timeline" data-width="500" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                <blockquote cite="https://www.facebook.com/Lemimayorista" class="fb-xfbml-parse-ignore">
                                    <a href="https://www.facebook.com/Lemimayorista">LEMI Mayorista</a>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</section>
@endsection

@section("scripts")
    <script type="text/javascript">
    </script>
@endsection