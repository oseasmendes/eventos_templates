<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Finreceivablesdetail $finreceivablesdetail
 * @var string[]|\Cake\Collection\CollectionInterface $finreceivables
 * @var string[]|\Cake\Collection\CollectionInterface $items
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $finreceivablesdetail->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $finreceivablesdetail->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Finreceivablesdetails'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="finreceivablesdetails form content">
            <?= $this->Form->create($finreceivablesdetail) ?>
            <fieldset>
                <legend><?= __('Edit Finreceivablesdetail') ?></legend>
                <?php
                    echo $this->Form->control('finreceivable_id', ['options' => $finreceivables, 'empty' => true]);
                    echo $this->Form->control('order');
                    echo $this->Form->control('item_id', ['options' => $items, 'empty' => true]);
                    echo $this->Form->control('partnumber');
                    echo $this->Form->control('description');
                    echo $this->Form->control('quantity');
                    echo $this->Form->control('unitvalue');
                    echo $this->Form->control('discount');
                    echo $this->Form->control('subtotal');
                    echo $this->Form->control('ordernumber');
                    echo $this->Form->control('orderitem');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
