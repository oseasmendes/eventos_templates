<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscriptionsdoc[]|\Cake\Collection\CollectionInterface $subscriptionsdocs
 */
?>
<div class="subscriptionsdocs index content">
    <?= $this->Html->link(__('New Subscriptionsdoc'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Subscriptionsdocs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('subscription_id') ?></th>
                    <th><?= $this->Paginator->sort('doctype_id') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('filename') ?></th>
                    <th><?= $this->Paginator->sort('path') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('statusflag') ?></th>
                    <th><?= $this->Paginator->sort('activeflag') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($subscriptionsdocs as $subscriptionsdoc): ?>
                <tr>
                    <td><?= $this->Number->format($subscriptionsdoc->id) ?></td>
                    <td><?= $subscriptionsdoc->has('subscription') ? $this->Html->link($subscriptionsdoc->subscription->id, ['controller' => 'Subscriptions', 'action' => 'view', $subscriptionsdoc->subscription->id]) : '' ?></td>
                    <td><?= $this->Number->format($subscriptionsdoc->doctype_id) ?></td>
                    <td><?= h($subscriptionsdoc->description) ?></td>
                    <td><?= h($subscriptionsdoc->filename) ?></td>
                    <td><?= h($subscriptionsdoc->path) ?></td>
                    <td><?= h($subscriptionsdoc->created) ?></td>
                    <td><?= h($subscriptionsdoc->modified) ?></td>
                    <td><?= h($subscriptionsdoc->statusflag) ?></td>
                    <td><?= h($subscriptionsdoc->activeflag) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $subscriptionsdoc->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subscriptionsdoc->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subscriptionsdoc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subscriptionsdoc->id)]) ?>
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
