<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscriptionsdoc $subscriptionsdoc
 * @var \Cake\Collection\CollectionInterface|string[] $subscriptions
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Subscriptionsdocs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="subscriptionsdocs form content">
            <?= $this->Form->create($subscriptionsdoc) ?>
            <fieldset>
                <legend><?= __('Add Subscriptionsdoc') ?></legend>
                <?php
                    echo $this->Form->control('subscription_id', ['options' => $subscriptions, 'empty' => true]);
                    echo $this->Form->control('doctype_id');
                    echo $this->Form->control('description');
                    echo $this->Form->control('filename');
                    echo $this->Form->control('path');
                    echo $this->Form->control('statusflag');
                    echo $this->Form->control('activeflag');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
