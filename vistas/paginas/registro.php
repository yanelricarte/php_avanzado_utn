<div>
        <form class="" method="post">
            <div>

                <label for="nombre">Nombre:</label>
                <input type="text" class="" id="nombre" name="registroNombre">

                <label for="email">Email:</label>
                <input type="email" class="" id="email" name="registroEmail">

                <label for="pwd">Contraseña:</label>
                <input type="password" class="" id="pwd" name="registroPassword">
            </div>


            <?php
            $registro = ControladorFormularios::ctrRegistro();
            if($registro =="ok"){
                
                echo '<script> 
                    if (window.history.replaceState){
                    window.history.replaceState(null,null, window.location.href);
                    }
                    </script>';
                    
                echo '<div class="alerta alerta-exito"> El usuario se ha registrado con exito </div>';
                }
                if ($registro == "error"){
                echo '<script> 
                if (window.history.replaceState){
                    window.history.replaceState(null,null, window.location.href);
                }
                </script>';
                
                echo '<div class="alerta alerta-danger"> Error, no se permiten caracteres especiales </div>';
                }
            
                ?> 
                <input type="submit" value="enviar" class="enviar">
            <!-- <button class="" name="enviar" type="submit"> Enviar </button> -->



        </form>
    </div>