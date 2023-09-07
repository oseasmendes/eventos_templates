<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Roleventsimg[]|\Cake\Collection\CollectionInterface $roleventsimgs
 */
?>
<div class="roleventsimgs index content">
    <?= $this->Html->link(__('New Roleventsimg'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Roleventsimgs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('rolevents_id') ?></th>
                    <th><?= $this->Paginator->sort('filepath') ?></th>
                    <th><?= $this->Paginator->sort('filename') ?></th>
                    <th><?= $this->Paginator->sort('filenameoriginal') ?></th>
                    <th><?= $this->Paginator->sort('activeflag') ?></th>
                    <th><?= $this->Paginator->sort('fileselection') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('docsystemtype') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($roleventsimgs as $roleventsimg): ?>
                <tr>
                    <td><?= $this->Number->format($roleventsimg->id) ?></td>
                    <td><?= h($roleventsimg->description) ?></td>
                    <td><?= $roleventsimg->has('rolevent') ? $this->Html->link($roleventsimg->rolevent->description, ['controller' => 'Rolevents', 'action' => 'view', $roleventsimg->rolevent->id]) : '' ?></td>
                    <td><?= h($roleventsimg->filepath) ?></td>
                    <td><?= h($roleventsimg->filename) ?></td>
                    <td><?= h($roleventsimg->filenameoriginal) ?></td>
                    <td><?= h($roleventsimg->activeflag) ?></td>
                    <td><?= h($roleventsimg->fileselection) ?></td>
                    <td><?= h($roleventsimg->created) ?></td>
                    <td><?= h($roleventsimg->modified) ?></td>
                    <td><?= h($roleventsimg->docsystemtype) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $roleventsimg->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $roleventsimg->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $roleventsimg->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roleventsimg->id)]) ?>
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
