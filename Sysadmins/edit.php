<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sysadmin $sysadmin
 * @var string[]|\Cake\Collection\CollectionInterface $roles
 * @var string[]|\Cake\Collection\CollectionInterface $profiles
 * @var string[]|\Cake\Collection\CollectionInterface $sysactions
 * @var string[]|\Cake\Collection\CollectionInterface $syscontrols
 * @var string[]|\Cake\Collection\CollectionInterface $sysapps
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sysadmin->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sysadmin->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Sysadmins'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sysadmins form content">
            <?= $this->Form->create($sysadmin) ?>
            <fieldset>
                <legend><?= __('Edit Sysadmin') ?></legend>
                <?php
                    echo $this->Form->control('app');
                    echo $this->Form->control('control');
                    echo $this->Form->control('act');
                    echo $this->Form->control('role_id', ['options' => $roles, 'empty' => true]);
                    echo $this->Form->control('profile_id', ['options' => $profiles, 'empty' => true]);
                    echo $this->Form->control('value');
                    echo $this->Form->control('active');
                    echo $this->Form->control('reference');
                    echo $this->Form->control('register');
                    echo $this->Form->control('sysaction_id', ['options' => $sysactions, 'empty' => true]);
                    echo $this->Form->control('syscontrol_id', ['options' => $syscontrols, 'empty' => true]);
                    echo $this->Form->control('sysapp_id', ['options' => $sysapps, 'empty' => true]);
                    echo $this->Form->control('description');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
