<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item $item
 * @var \Cake\Collection\CollectionInterface|string[] $itemtypes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Items'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="items form content">
            <?= $this->Form->create($item) ?>
            <fieldset>
                <legend><?= __('Add Item') ?></legend>
                <?php
                    echo $this->Form->control('partnumber');
                    echo $this->Form->control('description');
                    echo $this->Form->control('unit');
                    echo $this->Form->control('itemtype_id', ['options' => $itemtypes, 'empty' => true]);
                    echo $this->Form->control('stockcontrol');
                    echo $this->Form->control('minvalue');
                    echo $this->Form->control('maxvalue');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
