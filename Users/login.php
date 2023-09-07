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
            <h4 class="heading"><?= __('Noticias') ?></h4>
        <!--    <?=  $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?> -->
            <?php echo "Espaço Reservado para Notícias"  ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create() ?>
            <fieldset>                
                <?= $this->Form->control('email', ['required' => true]) ?>
                <?= $this->Form->control('password', ['required' => true]) ?>
            </fieldset>
            <?= $this->Form->button(__('Login')) ?>
            <?= $this->Form->end() ?>
            <?= $this->Html->link("Novo Acesso", ['action' => 'add']) ?>
            <?= $this->Html->link("Recuperar Senha", ['action' => 'emailconfirmation']) ?>
        </div>
    </div>
</div>
