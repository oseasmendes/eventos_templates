<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var string[]|\Cake\Collection\CollectionInterface $profiles
 * @var string[]|\Cake\Collection\CollectionInterface $roles
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Informe seu endereço de email') ?></h4>                        
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create() ?>
            <fieldset>
                <legend><?= __('Confirmação de Email') ?></legend>
                <?php                    
                    echo $this->Form->control('email');                    
                ?>
            </fieldset>
            <?= $this->Form->button(__('Confirmar E-Mail')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
