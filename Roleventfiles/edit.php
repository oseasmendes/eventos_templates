<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Roleventfile $roleventfile
 * @var string[]|\Cake\Collection\CollectionInterface $rolevents
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $roleventfile->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $roleventfile->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Roleventfiles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="roleventfiles form content">
            <?= $this->Form->create($roleventfile) ?>
            <fieldset>
                <legend><?= __('Edit Roleventfile') ?></legend>
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
