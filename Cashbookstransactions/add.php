<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cashbookstransaction $cashbookstransaction
 * @var \Cake\Collection\CollectionInterface|string[] $rolevents
 * @var \Cake\Collection\CollectionInterface|string[] $bussinessunits
 * @var \Cake\Collection\CollectionInterface|string[] $transactioncodes
 * @var \Cake\Collection\CollectionInterface|string[] $finoperations
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Cashbookstransactions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cashbookstransactions form content">
            <?= $this->Form->create($cashbookstransaction) ?>
            <fieldset>
                <legend><?= __('Add Cashbookstransaction') ?></legend>
                <?php
                    echo $this->Form->control('rolevent_id', ['options' => $rolevents, 'empty' => true]);
                    echo $this->Form->control('bussinessunit_id', ['options' => $bussinessunits, 'empty' => true]);
                    echo $this->Form->control('date', ['empty' => true]);
                    echo $this->Form->control('description');
                    echo $this->Form->control('documentreference');
                    echo $this->Form->control('transactionid');
                    echo $this->Form->control('originalinvoiceamount');
                    echo $this->Form->control('discount');
                    echo $this->Form->control('amount');
                    echo $this->Form->control('transactiontype');
                    echo $this->Form->control('reversal');
                    echo $this->Form->control('transactionreversalid');
                    echo $this->Form->control('transactioncode_id', ['options' => $transactioncodes, 'empty' => true]);
                    echo $this->Form->control('cashinflow');
                    echo $this->Form->control('cashoutflow');
                    echo $this->Form->control('finoperation_id', ['options' => $finoperations, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
