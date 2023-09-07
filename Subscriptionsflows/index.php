<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscriptionsflow[]|\Cake\Collection\CollectionInterface $subscriptionsflows
 */
?>
<div class="subscriptionsflows index content">
    <?= $this->Html->link(__('New Subscriptionsflow'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Subscriptionsflows') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('subscription_id') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('action') ?></th>
                    <th><?= $this->Paginator->sort('statusflag') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($subscriptionsflows as $subscriptionsflow): ?>
                <tr>
                    <td><?= $this->Number->format($subscriptionsflow->id) ?></td>
                    <td><?= $subscriptionsflow->has('subscription') ? $this->Html->link($subscriptionsflow->subscription->id, ['controller' => 'Subscriptions', 'action' => 'view', $subscriptionsflow->subscription->id]) : '' ?></td>
                    <td><?= h($subscriptionsflow->date) ?></td>
                    <td><?= h($subscriptionsflow->action) ?></td>
                    <td><?= h($subscriptionsflow->statusflag) ?></td>
                    <td><?= h($subscriptionsflow->created) ?></td>
                    <td><?= h($subscriptionsflow->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $subscriptionsflow->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subscriptionsflow->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subscriptionsflow->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subscriptionsflow->id)]) ?>
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
