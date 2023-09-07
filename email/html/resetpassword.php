<h1>Reset Password</h1>

<div>
    <p>
        Olá <?php echo $name; ?>!
    </p>
    <p>
        Para que consiga fazer a alteração de sua senha, clique no link que se encontra logo abaixo e,
        na tela de alteração de senhas, digite sua nova senha.
    </br>
                <?php
                $link = 'http://localhost/users/redefinepassword?h='.$hash.'&email='.$email; //-- USO LOCAL
               // $link = 'http://www.adbelem.sjc.br/eventos/users/redefinepassword?h='.$hash.'&email='.$email;

                //echo "<p>".$name .', segue o link para redefinição de sua senha!'"</p>";
                echo $this->Html->link('Redefinir senha de Usuário:', $link);
                ?>
    </p>



    


