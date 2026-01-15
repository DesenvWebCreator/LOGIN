 <html>

 <head>
     <title>Login</title>
     <meta charset="UTF-8">
     <link rel="stylesheet"
         href="https://www.w3schools.com/w3css/4/w3.css">
 </head>

 <body>

     <?php
        if (isset($_POST['usr']) and isset($_POST['pwd'])) {
            $usr = $_POST['usr'];
            $pwd = $_POST['pwd'];
            if ($usr == 'admin' && $pwd == '123') {
                echo "<h1 class='w3-panel w3-green w3-center'>Login realizado com sucesso!</h1>";
            } else {
                echo "<h1 class='w3-panel w3-red w3-center'>Login não realizado!</h1>";
            }
        }
        ?>

     <header class="w3-container w3-center w3-light-grey">
         <h1>Formulário de Acesso</h1>
     </header>

     <form class="w3-container" action="" method="post">
         <section class="w3-container w3-section">
             <label><b>Usuário</b></label>
             <input class="w3-input w3-border w3-margin-bottom" type="text" name="usr">
             <label><b>Senha</b></label>
             <input class="w3-input w3-border" type="password" name="pwd">
             <button class="w3-button w3-green w3-section w3-block" type="submit">Entrar</button>
             <input class="w3-check" type="checkbox" name="rm">Lembrar de mim.
         </section>
     </form>

     <footer class="w3-container w3-border-top w3-padding-16 w3-grey">
         <button type="button" class="w3-button w3-red">Cancelar</button>
         <span class="w3-right w3-padding w3-hide-small">Esqueceu a <a href="#">senha?</a></span>
     </footer>

 </body>

 </html>