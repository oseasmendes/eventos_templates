<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Finreceivable $finreceivable
 * @var string[]|\Cake\Collection\CollectionInterface $bussinessunits
 * @var string[]|\Cake\Collection\CollectionInterface $rolevents
 * @var string[]|\Cake\Collection\CollectionInterface $finoperations
 * @var string[]|\Cake\Collection\CollectionInterface $paymentmethods
 * @var string[]|\Cake\Collection\CollectionInterface $docstatus
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $finreceivable->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $finreceivable->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Finreceivables'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="finreceivables form content">
            <?= $this->Form->create($finreceivable) ?>
            <fieldset>
                <legend><?= __('Edit Finreceivable') ?></legend>
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
