<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Docstatus[]|\Cake\Collection\CollectionInterface $docstatus
 */
?>
<div class="docstatus index content">
    <?= $this->Html->link(__('New Docstatus'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Docstatus') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($docstatus as $docstatus): ?>
                <tr>
                    <td><?= $this->Number->format($docstatus->id) ?></td>
                    <td><?= h($docstatus->description) ?></td>
                    <td><?= h($docstatus->created) ?></td>
                    <td><?= h($docstatus->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $docstatus->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $docstatus->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $docstatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $docstatus->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
