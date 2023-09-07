<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var \Cake\Collection\CollectionInterface|string[] $profiles
 * @var \Cake\Collection\CollectionInterface|string[] $roles
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Notícias') ?></h4>
            
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Novo Usuário') ?></legend>
                <?php
                    echo $this->Form->control('name',['label' => 'Nome']);      
                    echo $this->Form->control('mobile',['label' => 'Celular']);
                    echo $this->Form->control('docnumber',['label' => 'CPF']);                               
                    echo $this->Form->control('email',['label' => 'E-mail']);
                    echo $this->Form->control('password',['label' => 'Senha']);
                    echo $this->Form->control('confirm_password',['type'=>'password','label' => 'Repita Senha']);        
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
