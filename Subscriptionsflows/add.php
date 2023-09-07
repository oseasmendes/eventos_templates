<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscriptionsflow $subscriptionsflow
 * @var \Cake\Collection\CollectionInterface|string[] $subscriptions
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Subscriptionsflows'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="subscriptionsflows form content">
            <?= $this->Form->create($subscriptionsflow) ?>
            <fieldset>
                <legend><?= __('Add Subscriptionsflow') ?></legend>
                <?php
                    echo $this->Form->control('subscription_id', ['options' => $subscriptions, 'empty' => true]);
                    echo $this->Form->control('date', ['empty' => true]);
                    echo $this->Form->control('action');
                    echo $this->Form->control('statusflag');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
