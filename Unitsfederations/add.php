<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Unitsfederation $unitsfederation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Unitsfederations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="unitsfederations form content">
            <?= $this->Form->create($unitsfederation) ?>
            <fieldset>
                <legend><?= __('Add Unitsfederation') ?></legend>
                <?php
                    echo $this->Form->control('description');
                    echo $this->Form->control('initials');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
