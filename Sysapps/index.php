<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sysapp[]|\Cake\Collection\CollectionInterface $sysapps
 */
?>
<div class="sysapps index content">
    <?= $this->Html->link(__('New Sysapp'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Sysapps') ?></h3>
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
                <?php foreach ($sysapps as $sysapp): ?>
                <tr>
                    <td><?= $this->Number->format($sysapp->id) ?></td>
                    <td><?= h($sysapp->description) ?></td>
                    <td><?= h($sysapp->created) ?></td>
                    <td><?= h($sysapp->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $sysapp->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sysapp->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sysapp->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sysapp->id)]) ?>
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
