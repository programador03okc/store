@extends("themes/web/layout")

@section("content")
<section class="main-container col1-layout bar bar--md">
    <div class="main container">
        <div class="account-login">
            <div class="page-title">
                <h2>Iniciar Sesion o Crear una cuenta</h2>
            </div>
            <fieldset class="col2-set">
                <div class="col-1 new-users">
                    <strong>Nuevos Cliente</strong>
                    <div class="content">
                        <p>Al crear una cuenta en nuestra tienda, podrá realizar el proceso de pago más rápido, almacenar múltiples direcciones de envío, ver y rastrear sus pedidos en su cuenta y más.</p>
                        <ul class="form-list">
                            <li>
                                <label for="name">Nombre y Apellidos <span class="required">*</span></label>
                                <br>
                                <input type="text" title="Correo Electonico" class="input-text required-entry" id="name" name="name">
                            </li>
                            <li>
                                <label for="name">Direccion actual <span class="required">*</span></label>
                                <br>
                                <input type="text" title="Direccion Actual" class="input-text required-entry" id="address" name="address">
                            </li>
                            <li>
                                <label for="email">Correo Electonico <span class="required">*</span></label>
                                <br>
                                <input type="text" title="Correo Electonico" class="input-text required-entry" id="email" name="username">
                            </li>
                            <li>
                                <label for="pass">Contraseña <span class="required">*</span></label>
                                <br>
                                <input type="password" title="Contraseña" id="pass" class="input-text required-entry validate-password" name="password">
                            </li>
                        </ul>
                        <div class="buttons-set">
                            <button class="button create-account" type="button"><span>Crear cuenta</span></button>
                        </div>
                    </div>
                </div>
                <div class="col-2 registered-users">
                    <strong>Clientes Registrados</strong>
                    <div class="content">
                        <p>Si tiene una cuenta con nosotros, inicie sesión.</p>
                    <ul class="form-list">
                        <li>
                            <label for="email">Correo Electonico <span class="required">*</span></label>
                            <br>
                            <input type="text" title="Correo Electonico" class="input-text required-entry" id="email" name="username">
                        </li>
                        <li>
                            <label for="pass">Contraseña <span class="required">*</span></label>
                            <br>
                            <input type="password" title="Contraseña" id="pass" class="input-text required-entry validate-password" name="password">
                        </li>
                    </ul>
                    <div class="buttons-set">
                        <button id="send2" name="send" type="submit" class="button btn-lemi login"><span>INICIAR SESION</span></button>
                        <br><br>
                        <a class="forgot-word" href="#">Olvidaste tu contraseña?</a> </div>
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