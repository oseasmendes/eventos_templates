<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Breakingnews $breakingnews
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $breakingnews->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $breakingnews->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Breakingnews'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="breakingnews form content">
            <?= $this->Form->create($breakingnews) ?>
            <fieldset>
                <legend><?= __('Edit Breakingnews') ?></legend>
                <?php
                    echo $this->Form->control('rolevent_id', ['options' => $rolevents, 'empty' => true]);
                    echo $this->Form->control('description');
                    echo $this->Form->control('details');
                    echo $this->Form->control('activeflag');
                    echo $this->Form->control('expirationdate', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
