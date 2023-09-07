<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Position $position
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Positions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="positions form content">
            <?= $this->Form->create($position) ?>
            <fieldset>
                <legend><?= __('Add Position') ?></legend>
                <?php
                    echo $this->Form->control('description');
                    echo $this->Form->control('originid');
                    echo $this->Form->control('seq');
                    echo $this->Form->control('groupid');
                    echo $this->Form->control('prefixposition');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
