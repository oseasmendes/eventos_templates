<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Finoperation $finoperation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Finoperations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="finoperations form content">
            <?= $this->Form->create($finoperation) ?>
            <fieldset>
                <legend><?= __('Add Finoperation') ?></legend>
                <?php
                    echo $this->Form->control('operationcode');
                    echo $this->Form->control('description');
                    echo $this->Form->control('shortdescription');
                    echo $this->Form->control('entryout');
                    echo $this->Form->control('accountcode');
                    echo $this->Form->control('module');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
