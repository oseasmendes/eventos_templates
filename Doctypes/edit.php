<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Doctype $doctype
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $doctype->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $doctype->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Doctypes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="doctypes form content">
            <?= $this->Form->create($doctype) ?>
            <fieldset>
                <legend><?= __('Edit Doctype') ?></legend>
                <?php
                    echo $this->Form->control('description');
                    echo $this->Form->control('activeflag');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
