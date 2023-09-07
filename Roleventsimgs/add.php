<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Roleventsimg $roleventsimg
 * @var \Cake\Collection\CollectionInterface|string[] $rolevents
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Roleventsimgs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="roleventsimgs form content">
            <?= $this->Form->create($roleventsimg) ?>
            <fieldset>
                <legend><?= __('Add Roleventsimg') ?></legend>
                <?php
                    echo $this->Form->control('description');
                    echo $this->Form->control('rolevents_id', ['options' => $rolevents, 'empty' => true]);
                    echo $this->Form->control('filepath');
                    echo $this->Form->control('filename');
                    echo $this->Form->control('filenameoriginal');
                    echo $this->Form->control('activeflag');
                    echo $this->Form->control('fileselection');
                    echo $this->Form->control('docsystemtype');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
