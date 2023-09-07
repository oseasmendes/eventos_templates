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
            <?= $this->Html->link(__('Edit Breakingnews'), ['action' => 'edit', $breakingnews->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Breakingnews'), ['action' => 'delete', $breakingnews->id], ['confirm' => __('Are you sure you want to delete # {0}?', $breakingnews->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Breakingnews'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Breakingnews'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="breakingnews view content">
            <h3><?= h($breakingnews->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($breakingnews->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($breakingnews->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($breakingnews->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($breakingnews->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Expirationdate') ?></th>
                    <td><?= h($breakingnews->expirationdate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Activeflag') ?></th>
                    <td><?= $breakingnews->activeflag ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Details') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($breakingnews->details)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
