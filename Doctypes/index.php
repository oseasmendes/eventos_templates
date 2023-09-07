<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Doctype[]|\Cake\Collection\CollectionInterface $doctypes
 */
?>
<div class="doctypes index content">
    <?= $this->Html->link(__('New Doctype'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Doctypes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('activeflag') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($doctypes as $doctype): ?>
                <tr>
                    <td><?= $this->Number->format($doctype->id) ?></td>
                    <td><?= h($doctype->description) ?></td>
                    <td><?= h($doctype->created) ?></td>
                    <td><?= h($doctype->modified) ?></td>
                    <td><?= h($doctype->activeflag) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $doctype->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $doctype->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $doctype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $doctype->id)]) ?>
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
