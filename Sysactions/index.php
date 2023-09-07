<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sysaction[]|\Cake\Collection\CollectionInterface $sysactions
 */
?>
<div class="sysactions index content">
    <?= $this->Html->link(__('New Sysaction'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Sysactions') ?></h3>
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
                <?php foreach ($sysactions as $sysaction): ?>
                <tr>
                    <td><?= $this->Number->format($sysaction->id) ?></td>
                    <td><?= h($sysaction->description) ?></td>
                    <td><?= h($sysaction->created) ?></td>
                    <td><?= h($sysaction->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $sysaction->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sysaction->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sysaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sysaction->id)]) ?>
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
