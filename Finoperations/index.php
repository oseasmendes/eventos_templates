<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Finoperation[]|\Cake\Collection\CollectionInterface $finoperations
 */
?>
<div class="finoperations index content">
    <?= $this->Html->link(__('New Finoperation'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Finoperations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('operationcode') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('shortdescription') ?></th>
                    <th><?= $this->Paginator->sort('entryout') ?></th>
                    <th><?= $this->Paginator->sort('accountcode') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('module') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($finoperations as $finoperation): ?>
                <tr>
                    <td><?= $this->Number->format($finoperation->id) ?></td>
                    <td><?= h($finoperation->operationcode) ?></td>
                    <td><?= h($finoperation->description) ?></td>
                    <td><?= h($finoperation->shortdescription) ?></td>
                    <td><?= h($finoperation->entryout) ?></td>
                    <td><?= h($finoperation->accountcode) ?></td>
                    <td><?= h($finoperation->created) ?></td>
                    <td><?= h($finoperation->modified) ?></td>
                    <td><?= $this->Number->format($finoperation->module) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $finoperation->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $finoperation->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $finoperation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $finoperation->id)]) ?>
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
