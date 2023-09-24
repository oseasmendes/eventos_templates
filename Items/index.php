<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item[]|\Cake\Collection\CollectionInterface $items
 */
?>
<div class="items index content">
    <?= $this->Html->link(__('New Item'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Items') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('partnumber') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('unit') ?></th>
                    <th><?= $this->Paginator->sort('itemtype_id') ?></th>
                    <th><?= $this->Paginator->sort('stockcontrol') ?></th>
                    <th><?= $this->Paginator->sort('minvalue') ?></th>
                    <th><?= $this->Paginator->sort('maxvalue') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $item): ?>
                <tr>
                    <td><?= $this->Number->format($item->id) ?></td>
                    <td><?= h($item->partnumber) ?></td>
                    <td><?= h($item->description) ?></td>
                    <td><?= h($item->unit) ?></td>
                    <td><?= $item->has('itemtype') ? $this->Html->link($item->itemtype->description, ['controller' => 'Itemtypes', 'action' => 'view', $item->itemtype->id]) : '' ?></td>
                    <td><?= h($item->stockcontrol) ?></td>
                    <td><?= $this->Number->format($item->minvalue) ?></td>
                    <td><?= $this->Number->format($item->maxvalue) ?></td>
                    <td><?= h($item->created) ?></td>
                    <td><?= h($item->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $item->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $item->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $item->id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->id)]) ?>
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
