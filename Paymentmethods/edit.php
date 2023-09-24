<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paymentmethod $paymentmethod
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $paymentmethod->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $paymentmethod->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Paymentmethods'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="paymentmethods form content">
            <?= $this->Form->create($paymentmethod) ?>
            <fieldset>
                <legend><?= __('Edit Paymentmethod') ?></legend>
                <?php
                    echo $this->Form->control('description');
                    echo $this->Form->control('entryout');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
