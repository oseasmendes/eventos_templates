<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Position[]|\Cake\Collection\CollectionInterface $positions
 */
?>
<div class="positions index content">
    <?= $this->Html->link(__('New Position'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Positions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('originid') ?></th>
                    <th><?= $this->Paginator->sort('seq') ?></th>
                    <th><?= $this->Paginator->sort('groupid') ?></th>
                    <th><?= $this->Paginator->sort('prefixposition') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($positions as $position): ?>
                <tr>
                    <td><?= $this->Number->format($position->id) ?></td>
                    <td><?= h($position->description) ?></td>
                    <td><?= h($position->created) ?></td>
                    <td><?= h($position->modified) ?></td>
                    <td><?= $this->Number->format($position->originid) ?></td>
                    <td><?= $this->Number->format($position->seq) ?></td>
                    <td><?= $this->Number->format($position->groupid) ?></td>
                    <td><?= h($position->prefixposition) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $position->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $position->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $position->id], ['confirm' => __('Are you sure you want to delete # {0}?', $position->id)]) ?>
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
