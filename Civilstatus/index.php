<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Civilstatus[]|\Cake\Collection\CollectionInterface $civilstatus
 */
?>
<div class="civilstatus index content">
    <?= $this->Html->link(__('New Civilstatus'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Civilstatus') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('originid') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('seq') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($civilstatus as $civilstatus): ?>
                <tr>
                    <td><?= $this->Number->format($civilstatus->id) ?></td>
                    <td><?= $this->Number->format($civilstatus->originid) ?></td>
                    <td><?= h($civilstatus->description) ?></td>
                    <td><?= h($civilstatus->created) ?></td>
                    <td><?= h($civilstatus->modified) ?></td>
                    <td><?= $this->Number->format($civilstatus->seq) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $civilstatus->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $civilstatus->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $civilstatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $civilstatus->id)]) ?>
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
