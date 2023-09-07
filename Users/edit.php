<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var string[]|\Cake\Collection\CollectionInterface $profiles
 * @var string[]|\Cake\Collection\CollectionInterface $roles
 */
$roleid = $this->Identity->get('role_id');
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
        <?php if ($roleid == 1 ) : ?>
            <h4 class="heading"><?= __('Actions') ?></h4>
            
            <?= $this->Form->postLink(
                __('Delete'),               
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        <?php endif; ?>
        </div>

    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Alterando dados de usuário') ?></legend>
                <?php   
                    echo $this->Form->control('name',array('label'=>'Nome Completo'));                
                    echo $this->Form->control('docnumber',array('label'=>'CPF','disabled'=>'disabled'));
                    echo $this->Form->control('email',array('disabled'=>'disabled'));                   
                    echo $this->Form->control('mobile',array('label'=>'Telefone Celular'));                   
                    
                    if ($user->role_id == 1) {
                        echo $this->Form->control('username');
                        echo $this->Form->control('profile_id', ['options' => $profiles, 'empty' => true]);                    
                        echo $this->Form->control('role_id', ['options' => $roles, 'empty' => true]);
                    }
                   
                ?>
            </fieldset>
            <?= $this->Form->button(__('Salvar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
