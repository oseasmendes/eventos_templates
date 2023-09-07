<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Roleventfile $roleventfile
 * @var \Cake\Collection\CollectionInterface|string[] $rolevents
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Roleventfiles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="roleventfiles form content">
            <?= $this->Form->create($roleventfile) ?>
            <fieldset>
                <legend><?= __('Add Roleventfile') ?></legend>
                <?php
                    echo $this->Form->control('filename');
                    echo $this->Form->control('rolevent_id', ['options' => $rolevents, 'empty' => true]);
                    echo $this->Form->control('path');
                    echo $this->Form->control('originalfilename');
                    echo $this->Form->control('midiatype');
                    echo $this->Form->control('activeflag');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
