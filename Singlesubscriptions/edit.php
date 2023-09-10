<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Singlesubscription $singlesubscription
 * @var string[]|\Cake\Collection\CollectionInterface $rolevents
 * @var string[]|\Cake\Collection\CollectionInterface $bussinessunits
 * @var string[]|\Cake\Collection\CollectionInterface $subscriptions
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $singlesubscription->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $singlesubscription->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Singlesubscriptions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="singlesubscriptions form content">
            <?= $this->Form->create($singlesubscription) ?>
            <fieldset>
                <legend><?= __('Edit Singlesubscription') ?></legend>
                <?php
                    echo $this->Form->control('rolevent_id', ['options' => $rolevents, 'empty' => true]);
                    echo $this->Form->control('fullname');
                    echo $this->Form->control('email');
                    echo $this->Form->control('bussinessunit_id', ['options' => $bussinessunits, 'empty' => true]);
                    echo $this->Form->control('organizationname');
                    echo $this->Form->control('position');
                    echo $this->Form->control('mobil');
                    echo $this->Form->control('salesperson');
                    echo $this->Form->control('address');
                    echo $this->Form->control('district');
                    echo $this->Form->control('city');
                    echo $this->Form->control('reference');
                    echo $this->Form->control('statusflag');
                    echo $this->Form->control('documentnumber');
                    echo $this->Form->control('subscription_id', ['options' => $subscriptions, 'empty' => true]);
                    echo $this->Form->control('people_id');
                    echo $this->Form->control('comments');
                    echo $this->Form->control('lgpd_ok');
                    echo $this->Form->control('copyrigth_ok');
                    echo $this->Form->control('alteradopor');
                    echo $this->Form->control('processadopor');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
