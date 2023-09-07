<h1>Reset Password</h1>

<div>
    <p>
        Olá <?php echo $name; ?>!
    </p>
    <p>
    Seja bem vindo(a) ao portal da IGREJA EVANGELICA ASSEMBLÉIA DE DEUS - MINISTÉRIO BELEM - SJC.
        Você acionou a rotina de confirmação de endereço de email. Será necessário alterar a senha, por favor clique no link abaixo.
    </br>
                <?php
                $link = 'http://localhost/users/redefinepassword?h='.$hash.'&email='.$email;
                //$link = 'http://www.adbelem.sjc.br/eventos/users/redefinepassword?h='.$hash.'&email='.$email.'&id='.$id;
                //echo "<p>".$name .', segue o link para redefinição de sua senha!'"</p>";
                echo $this->Html->link('Redefinir senha de Usuário:', $link);
                ?>
    </p>



    