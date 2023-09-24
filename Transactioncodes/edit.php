<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Transactioncode $transactioncode
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $transactioncode->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $transactioncode->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Transactioncodes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="transactioncodes form content">
            <?= $this->Form->create($transactioncode) ?>
            <fieldset>
                <legend><?= __('Edit Transactioncode') ?></legend>
                <?php
                    echo $this->Form->control('description');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
