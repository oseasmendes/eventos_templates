<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">  
   <div class="card text-center">
          <div class="card-header">
            <h4>BEM VINDO</h4>
          </div>
              <div class="card-body">
                <h5>Acesso Confirmado</h5>
                <p>Parabéns, você agora faz parte da nossa comunidade digital</p>                
                <p></p>  
                  <?= $this->Html->link("Login",['controller'=>'users','action'=>'login'], ['class' => 'button', 'target' => '_blank']) ?>
              </div>
          <div class="card-footer text-muted">
            Em caso de algum problema, envie um email para nosso suporte: suporte@adbelem.sjc.br
          </div>
    </div>
</div>
