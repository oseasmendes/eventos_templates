<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Finentryinvoicesdetail $finentryinvoicesdetail
 * @var string[]|\Cake\Collection\CollectionInterface $finentryinvoices
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $finentryinvoicesdetail->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $finentryinvoicesdetail->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Finentryinvoicesdetails'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="finentryinvoicesdetails form content">
            <?= $this->Form->create($finentryinvoicesdetail) ?>
            <fieldset>
                <legend><?= __('Edit Finentryinvoicesdetail') ?></legend>
                <?php
                    echo $this->Form->control('finentryinvoice_id', ['options' => $finentryinvoices, 'empty' => true]);
                    echo $this->Form->control('order');
                    echo $this->Form->control('item_id');
                    echo $this->Form->control('partnumber');
                    echo $this->Form->control('vendorcode');
                    echo $this->Form->control('description');
                    echo $this->Form->control('quantity');
                    echo $this->Form->control('unitvalue');
                    echo $this->Form->control('discount');
                    echo $this->Form->control('interest');
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
