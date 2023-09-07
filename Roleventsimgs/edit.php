<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Roleventsimg $roleventsimg
 * @var string[]|\Cake\Collection\CollectionInterface $rolevents
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $roleventsimg->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $roleventsimg->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Roleventsimgs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="roleventsimgs form content">
            <?= $this->Form->create($roleventsimg) ?>
            <fieldset>
                <legend><?= __('Edit Roleventsimg') ?></legend>
                <?php
                    echo $this->Form->control('description');
                    echo $this->Form->control('rolevents_id', array('disabled' => 'disabled'));
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
