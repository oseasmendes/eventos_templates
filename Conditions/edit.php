<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Condition $condition
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $condition->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $condition->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Conditions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conditions form content">
            <?= $this->Form->create($condition) ?>
            <fieldset>
                <legend><?= __('Edit Condition') ?></legend>
                <?php
                    echo $this->Form->control('originid');
                    echo $this->Form->control('description');
                    echo $this->Form->control('seq');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
