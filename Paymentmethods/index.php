<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paymentmethod[]|\Cake\Collection\CollectionInterface $paymentmethods
 */
?>
<div class="paymentmethods index content">
    <?= $this->Html->link(__('New Paymentmethod'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Paymentmethods') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('entryout') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($paymentmethods as $paymentmethod): ?>
                <tr>
                    <td><?= $this->Number->format($paymentmethod->id) ?></td>
                    <td><?= h($paymentmethod->description) ?></td>
                    <td><?= h($paymentmethod->entryout) ?></td>
                    <td><?= h($paymentmethod->created) ?></td>
                    <td><?= h($paymentmethod->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $paymentmethod->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $paymentmethod->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $paymentmethod->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paymentmethod->id)]) ?>
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
