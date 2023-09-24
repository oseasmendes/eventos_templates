<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Itemtype[]|\Cake\Collection\CollectionInterface $itemtypes
 */
?>
<div class="itemtypes index content">
    <?= $this->Html->link(__('New Itemtype'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Itemtypes') ?></h3>
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
                <?php foreach ($itemtypes as $itemtype): ?>
                <tr>
                    <td><?= $this->Number->format($itemtype->id) ?></td>
                    <td><?= h($itemtype->description) ?></td>
                    <td><?= h($itemtype->created) ?></td>
                    <td><?= h($itemtype->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $itemtype->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $itemtype->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $itemtype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemtype->id)]) ?>
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
