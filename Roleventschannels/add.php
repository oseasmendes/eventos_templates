<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Roleventschannel $roleventschannel
 * @var \Cake\Collection\CollectionInterface|string[] $rolevents
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Roleventschannels'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="roleventschannels form content">
            <?= $this->Form->create($roleventschannel) ?>
            <fieldset>
                <legend><?= __('Add Roleventschannel') ?></legend>
                <?php
                    echo $this->Form->control('rolevent_id', ['options' => $rolevents, 'empty' => true]);
                    echo $this->Form->control('description');
                    echo $this->Form->control('details');
                    echo $this->Form->control('activestatus');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
