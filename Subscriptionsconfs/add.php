<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscriptionsconf $subscriptionsconf
 * @var \Cake\Collection\CollectionInterface|string[] $subscriptions
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Subscriptionsconfs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="subscriptionsconfs form content">
            <?= $this->Form->create($subscriptionsconf) ?>
            <fieldset>
                <legend><?= __('Add Subscriptionsconf') ?></legend>
                <?php
                    echo $this->Form->control('subscription_id', ['options' => $subscriptions, 'empty' => true]);
                    echo $this->Form->control('number');
                    echo $this->Form->control('date', ['empty' => true]);
                    echo $this->Form->control('confirmationby');
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('people_id');
                    echo $this->Form->control('statusflag');
                    echo $this->Form->control('activeflag');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
