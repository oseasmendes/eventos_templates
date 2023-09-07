<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscriptionstype $subscriptionstype
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $subscriptionstype->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $subscriptionstype->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Subscriptionstypes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="subscriptionstypes form content">
            <?= $this->Form->create($subscriptionstype) ?>
            <fieldset>
                <legend><?= __('Edit Subscriptionstype') ?></legend>
                <?php
                    echo $this->Form->control('description');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
