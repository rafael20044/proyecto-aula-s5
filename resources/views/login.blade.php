@component('components.layout2', ['titulo' => 'iniciar session']) 

<body style="background-image: url('{{ asset('img/login1.avif') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed; height: 100vh; margin: 0;">

    <div class="box">
        <div class="wrapper">
        <div class="container">
            <h2>LOGIN</h2>

            <div class="input-field">
                <input type="text" class="input" placeholder="Usuario" required>
            </div><br>

            <div class="input-field">
                <input type="password" class="input" placeholder="Contraseña" required>
              
            </div><br>

            <div class="input-field">
                <input type="submit" class="submit" value="Inicio">
            </div><br>

            <div class="bottom">
                <div class="left">
                    <input type="checkbox" id="check">
                    <label for="check">Recordarme</label>
            </div><br>

            <div class="right">
                <label><a href="#">¿Olvidaste la contraseña?</a></label>
            </div><br>
        </div>
    </div>
</div>
 </div>
</body>
@endcomponent