<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscriptionsflow $subscriptionsflow
 * @var string[]|\Cake\Collection\CollectionInterface $subscriptions
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $subscriptionsflow->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $subscriptionsflow->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Subscriptionsflows'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="subscriptionsflows form content">
            <?= $this->Form->create($subscriptionsflow) ?>
            <fieldset>
                <legend><?= __('Edit Subscriptionsflow') ?></legend>
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
