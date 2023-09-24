<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Finreceivable $finreceivable
 * @var \Cake\Collection\CollectionInterface|string[] $bussinessunits
 * @var \Cake\Collection\CollectionInterface|string[] $rolevents
 * @var \Cake\Collection\CollectionInterface|string[] $finoperations
 * @var \Cake\Collection\CollectionInterface|string[] $paymentmethods
 * @var \Cake\Collection\CollectionInterface|string[] $docstatus
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Finreceivables'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="finreceivables form content">
            <?= $this->Form->create($finreceivable) ?>
            <fieldset>
                <legend><?= __('Add Finreceivable') ?></legend>
                <?php
                    echo $this->Form->control('receivabledate', ['empty' => true]);
                    echo $this->Form->control('bussinessunit_id', ['options' => $bussinessunits, 'empty' => true]);
                    echo $this->Form->control('rolevent_id', ['options' => $rolevents, 'empty' => true]);
                    echo $this->Form->control('finoperation_id', ['options' => $finoperations, 'empty' => true]);
                    echo $this->Form->control('paymentmethod_id', ['options' => $paymentmethods, 'empty' => true]);
                    echo $this->Form->control('docstatu_id', ['options' => $docstatus, 'empty' => true]);
                    echo $this->Form->control('reference');
                    echo $this->Form->control('shortdescription');
                    echo $this->Form->control('people_id');
                    echo $this->Form->control('responsible');
                    echo $this->Form->control('discount');
                    echo $this->Form->control('amount');
                    echo $this->Form->control('totalamount');
                    echo $this->Form->control('observation');
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('createdby');
                    echo $this->Form->control('modifiedby');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
