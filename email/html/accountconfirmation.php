<h1>Account Confirmation</h1>

<div>
    <p>
        Olá <?php echo $nome; ?>!
    </p>
    <p>
        Seja muito bem vindo(a) ao portal da IGREJA EVANGELICA ASSEMBLÉIA DE DEUS - MINISTÉRIO BELEM - SJC.
        a partir de agora você terá acesso aos serviços de informação de nossa comunidade.
        Para continuar, basta apenas confirmar sua conta através do link indicado abaixo:
        
    </br>
                <?php                
                $link = 'http://www.adbelem.sjc.br/eventos/users/accountconfirmation?h='.$hash.'&email='.$email.'&id='.$id;

                //$link = 'http://localhost:8765/users/accountconfirmation?h='.$hash.'&email='.$email.'&id='.$id;
    


               
                echo $this->Html->link('Clique no link para confirmar sua conta:', $link);
                ?>
    </p>



    
