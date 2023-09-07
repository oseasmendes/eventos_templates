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
            <?= $this->Html->link(__('Edit Civilstatus'), ['action' => 'edit', $civilstatus->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Civilstatus'), ['action' => 'delete', $civilstatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $civilstatus->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Civilstatus'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Civilstatus'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="civilstatus view content">
            <h3><?= h($civilstatus->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($civilstatus->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($civilstatus->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Originid') ?></th>
                    <td><?= $this->Number->format($civilstatus->originid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Seq') ?></th>
                    <td><?= $this->Number->format($civilstatus->seq) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($civilstatus->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($civilstatus->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
