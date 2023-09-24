<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Itemtype $itemtype
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $itemtype->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $itemtype->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Itemtypes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="itemtypes form content">
            <?= $this->Form->create($itemtype) ?>
            <fieldset>
                <legend><?= __('Edit Itemtype') ?></legend>
                <?php
                    echo $this->Form->control('description');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
