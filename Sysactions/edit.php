<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sysaction $sysaction
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sysaction->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sysaction->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Sysactions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sysactions form content">
            <?= $this->Form->create($sysaction) ?>
            <fieldset>
                <legend><?= __('Edit Sysaction') ?></legend>
                <?php
                    echo $this->Form->control('description');
                    echo $this->Form->control('standard');
                    echo $this->Form->control('valuestandard');
                    echo $this->Form->control('active');                   

                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
