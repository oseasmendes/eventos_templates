<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sysapp $sysapp
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sysapp->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sysapp->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Sysapps'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sysapps form content">
            <?= $this->Form->create($sysapp) ?>
            <fieldset>
                <legend><?= __('Edit Sysapp') ?></legend>
                <?php
                    echo $this->Form->control('description');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
