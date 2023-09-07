<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var string[]|\Cake\Collection\CollectionInterface $profiles
 * @var string[]|\Cake\Collection\CollectionInterface $roles
 */
?>
<div class="row">    
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create() ?>
                <?php $key = $this->request->getQueryParams(); ?>                
                

            <fieldset>
                <legend><?= __('Reset Password') ?></legend>
                <?php                    
                    echo $this->Form->control('id',array('type'=>'hidden','value' => $key['id']));
                    echo $this->Form->control('email',array('type'=>'hidden','value' => $key['email']));
                    echo $this->Form->control('password');
                    echo $this->Form->control('confirm_password',['type'=>'password']);                    
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
