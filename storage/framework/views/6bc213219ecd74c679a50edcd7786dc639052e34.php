<!-- Sign Up Section Begin -->
    <div class="signup-section">
        <div class="signup-close"><i class="fa fa-close"></i></div>
        <div class="signup-text">
            <div class="container">
                <div class="signup-title">
                    <h2>Cadastrar-se</h2>
                    <p>Preencha o form abaixo e entre para a diversão</p>
                </div>
                <form action="/user/cad" method="POST" class="signup-form">
                    <div class="sf-input-list">
                    <?php echo csrf_field(); ?>
                        <input type="text" class="input-value" placeholder="Nome de Usuário*" name="name">
                        <input type="password" class="input-value" placeholder="Senha" name="passwd">
                        <input type="password" class="input-value" placeholder="Confirmar senha" name="re-passwd">
                        <input type="text" class="input-value" placeholder="E-mail" name="email">
                        <input type="text" class="input-value" placeholder="Nome Completo" name="fullname">
                    </div>
                    <div class="radio-check">
                        <label for="rc-agree">Aceito os termos e condições
                            <input type="checkbox" id="rc-agree">
                            <span class="checkbox"></span>
                        </label>
                    </div>
                    <button type="submit"><span>Registrar agora!</span></button>
                </form>
            </div>
        </div>
    </div>
<!-- Sign Up Section End --><?php /**PATH C:\Baraquiel\resources\views/amin/front-form-cad.blade.php ENDPATH**/ ?>