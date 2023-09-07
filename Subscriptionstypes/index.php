<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscriptionstype[]|\Cake\Collection\CollectionInterface $subscriptionstypes
 */
?>
<div class="subscriptionstypes index content">
    <?= $this->Html->link(__('New Subscriptionstype'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Subscriptionstypes') ?></h3>
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
                <?php foreach ($subscriptionstypes as $subscriptionstype): ?>
                <tr>
                    <td><?= $this->Number->format($subscriptionstype->id) ?></td>
                    <td><?= h($subscriptionstype->description) ?></td>
                    <td><?= h($subscriptionstype->created) ?></td>
                    <td><?= h($subscriptionstype->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $subscriptionstype->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subscriptionstype->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subscriptionstype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subscriptionstype->id)]) ?>
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
