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
            <?= $this->Html->link(__('Edit Docstatus'), ['action' => 'edit', $docstatus->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Docstatus'), ['action' => 'delete', $docstatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $docstatus->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Docstatus'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Docstatus'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="docstatus view content">
            <h3><?= h($docstatus->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($docstatus->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($docstatus->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($docstatus->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($docstatus->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
