<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sysadmin $sysadmin
 * @var \Cake\Collection\CollectionInterface|string[] $roles
 * @var \Cake\Collection\CollectionInterface|string[] $profiles
 * @var \Cake\Collection\CollectionInterface|string[] $sysactions
 * @var \Cake\Collection\CollectionInterface|string[] $syscontrols
 * @var \Cake\Collection\CollectionInterface|string[] $sysapps
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Sysadmins'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sysadmins form content">
            <?= $this->Form->create($sysadmin) ?>
            <fieldset>
                <legend><?= __('Add Sysadmin') ?></legend>
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
