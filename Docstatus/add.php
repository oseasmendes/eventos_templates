<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Docstatus $docstatus
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Docstatus'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="docstatus form content">
            <?= $this->Form->create($docstatus) ?>
            <fieldset>
                <legend><?= __('Add Docstatus') ?></legend>
                <?php
                    echo $this->Form->control('description');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
