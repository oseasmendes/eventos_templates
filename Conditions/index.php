<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Condition[]|\Cake\Collection\CollectionInterface $conditions
 */
?>
<div class="conditions index content">
    <?= $this->Html->link(__('New Condition'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Conditions') ?></h3>
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
                <?php foreach ($conditions as $condition): ?>
                <tr>
                    <td><?= $this->Number->format($condition->id) ?></td>
                    <td><?= $this->Number->format($condition->originid) ?></td>
                    <td><?= h($condition->description) ?></td>
                    <td><?= h($condition->created) ?></td>
                    <td><?= h($condition->modified) ?></td>
                    <td><?= $this->Number->format($condition->seq) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $condition->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $condition->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $condition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $condition->id)]) ?>
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
