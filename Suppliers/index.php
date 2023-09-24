<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supplier[]|\Cake\Collection\CollectionInterface $suppliers
 */
?>
<div class="suppliers index content">
    <?= $this->Html->link(__('New Supplier'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Suppliers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('shortname') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('postalcode') ?></th>
                    <th><?= $this->Paginator->sort('street') ?></th>
                    <th><?= $this->Paginator->sort('district') ?></th>
                    <th><?= $this->Paginator->sort('city') ?></th>
                    <th><?= $this->Paginator->sort('fiscalcode') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($suppliers as $supplier): ?>
                <tr>
                    <td><?= $this->Number->format($supplier->id) ?></td>
                    <td><?= h($supplier->shortname) ?></td>
                    <td><?= h($supplier->description) ?></td>
                    <td><?= h($supplier->postalcode) ?></td>
                    <td><?= h($supplier->street) ?></td>
                    <td><?= h($supplier->district) ?></td>
                    <td><?= h($supplier->city) ?></td>
                    <td><?= h($supplier->fiscalcode) ?></td>
                    <td><?= h($supplier->email) ?></td>
                    <td><?= h($supplier->created) ?></td>
                    <td><?= h($supplier->modified) ?></td>
                    <td><?= h($supplier->active) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $supplier->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $supplier->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $supplier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $supplier->id)]) ?>
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
