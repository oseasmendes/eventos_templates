<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Finentryinvoicesdetail[]|\Cake\Collection\CollectionInterface $finentryinvoicesdetails
 */
?>
<div class="finentryinvoicesdetails index content">
    <?= $this->Html->link(__('New Finentryinvoicesdetail'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Finentryinvoicesdetails') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('finentryinvoice_id') ?></th>
                    <th><?= $this->Paginator->sort('order') ?></th>
                    <th><?= $this->Paginator->sort('item_id') ?></th>
                    <th><?= $this->Paginator->sort('partnumber') ?></th>
                    <th><?= $this->Paginator->sort('vendorcode') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('quantity') ?></th>
                    <th><?= $this->Paginator->sort('unitvalue') ?></th>
                    <th><?= $this->Paginator->sort('discount') ?></th>
                    <th><?= $this->Paginator->sort('interest') ?></th>
                    <th><?= $this->Paginator->sort('subtotal') ?></th>
                    <th><?= $this->Paginator->sort('ordernumber') ?></th>
                    <th><?= $this->Paginator->sort('orderitem') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($finentryinvoicesdetails as $finentryinvoicesdetail): ?>
                <tr>
                    <td><?= $this->Number->format($finentryinvoicesdetail->id) ?></td>
                    <td><?= $finentryinvoicesdetail->has('finentryinvoice') ? $this->Html->link($finentryinvoicesdetail->finentryinvoice->shortdescription, ['controller' => 'Finentryinvoices', 'action' => 'view', $finentryinvoicesdetail->finentryinvoice->id]) : '' ?></td>
                    <td><?= $this->Number->format($finentryinvoicesdetail->order) ?></td>
                    <td><?= $this->Number->format($finentryinvoicesdetail->item_id) ?></td>
                    <td><?= h($finentryinvoicesdetail->partnumber) ?></td>
                    <td><?= h($finentryinvoicesdetail->vendorcode) ?></td>
                    <td><?= h($finentryinvoicesdetail->description) ?></td>
                    <td><?= $this->Number->format($finentryinvoicesdetail->quantity) ?></td>
                    <td><?= $this->Number->format($finentryinvoicesdetail->unitvalue) ?></td>
                    <td><?= $this->Number->format($finentryinvoicesdetail->discount) ?></td>
                    <td><?= $this->Number->format($finentryinvoicesdetail->interest) ?></td>
                    <td><?= $this->Number->format($finentryinvoicesdetail->subtotal) ?></td>
                    <td><?= h($finentryinvoicesdetail->ordernumber) ?></td>
                    <td><?= $this->Number->format($finentryinvoicesdetail->orderitem) ?></td>
                    <td><?= h($finentryinvoicesdetail->created) ?></td>
                    <td><?= h($finentryinvoicesdetail->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $finentryinvoicesdetail->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $finentryinvoicesdetail->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $finentryinvoicesdetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $finentryinvoicesdetail->id)]) ?>
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
