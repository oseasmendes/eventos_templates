<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscription $subscription
 * @var \Cake\Collection\CollectionInterface|string[] $rolevents
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Subscriptions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="subscriptions form content">
            <?= $this->Form->create($subscription) ?>
            <fieldset>
                <legend><?= __('Add Subscription') ?></legend>
                <?php
                    echo $this->Form->control('dateissue', ['empty' => true]);
                    echo $this->Form->control('rolevent_id', ['options' => $rolevents, 'empty' => true]);
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('subscriptiontype_id', ['options' => $subscriptionstypes, 'empty' => true]);
                    echo $this->Form->control('activeflag');
                    echo $this->Form->control('statusflag');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
