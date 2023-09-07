<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Civilstatus $civilstatus
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Civilstatus'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="civilstatus form content">
            <?= $this->Form->create($civilstatus) ?>
            <fieldset>
                <legend><?= __('Add Civilstatus') ?></legend>
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
