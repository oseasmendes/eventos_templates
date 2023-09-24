<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Finreceivablesdetail[]|\Cake\Collection\CollectionInterface $finreceivablesdetails
 */
?>
<div class="finreceivablesdetails index content">
    <?= $this->Html->link(__('New Finreceivablesdetail'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Finreceivablesdetails') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('finreceivable_id') ?></th>
                    <th><?= $this->Paginator->sort('order') ?></th>
                    <th><?= $this->Paginator->sort('item_id') ?></th>
                    <th><?= $this->Paginator->sort('partnumber') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('quantity') ?></th>
                    <th><?= $this->Paginator->sort('unitvalue') ?></th>
                    <th><?= $this->Paginator->sort('discount') ?></th>
                    <th><?= $this->Paginator->sort('subtotal') ?></th>
                    <th><?= $this->Paginator->sort('ordernumber') ?></th>
                    <th><?= $this->Paginator->sort('orderitem') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($finreceivablesdetails as $finreceivablesdetail): ?>
                <tr>
                    <td><?= $this->Number->format($finreceivablesdetail->id) ?></td>
                    <td><?= $finreceivablesdetail->has('finreceivable') ? $this->Html->link($finreceivablesdetail->finreceivable->shortdescription, ['controller' => 'Finreceivables', 'action' => 'view', $finreceivablesdetail->finreceivable->id]) : '' ?></td>
                    <td><?= $this->Number->format($finreceivablesdetail->order) ?></td>
                    <td><?= $finreceivablesdetail->has('item') ? $this->Html->link($finreceivablesdetail->item->description, ['controller' => 'Items', 'action' => 'view', $finreceivablesdetail->item->id]) : '' ?></td>
                    <td><?= h($finreceivablesdetail->partnumber) ?></td>
                    <td><?= h($finreceivablesdetail->description) ?></td>
                    <td><?= $this->Number->format($finreceivablesdetail->quantity) ?></td>
                    <td><?= $this->Number->format($finreceivablesdetail->unitvalue) ?></td>
                    <td><?= $this->Number->format($finreceivablesdetail->discount) ?></td>
                    <td><?= $this->Number->format($finreceivablesdetail->subtotal) ?></td>
                    <td><?= h($finreceivablesdetail->ordernumber) ?></td>
                    <td><?= $this->Number->format($finreceivablesdetail->orderitem) ?></td>
                    <td><?= h($finreceivablesdetail->created) ?></td>
                    <td><?= h($finreceivablesdetail->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $finreceivablesdetail->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $finreceivablesdetail->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $finreceivablesdetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $finreceivablesdetail->id)]) ?>
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
