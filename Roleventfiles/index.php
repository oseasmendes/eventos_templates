<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Roleventfile[]|\Cake\Collection\CollectionInterface $roleventfiles
 */
?>
<div class="roleventfiles index content">
    <?= $this->Html->link(__('New Roleventfile'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Roleventfiles') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('filename') ?></th>
                    <th><?= $this->Paginator->sort('rolevent_id') ?></th>
                    <th><?= $this->Paginator->sort('path') ?></th>
                    <th><?= $this->Paginator->sort('originalfilename') ?></th>
                    <th><?= $this->Paginator->sort('midiatype') ?></th>
                    <th><?= $this->Paginator->sort('activeflag') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($roleventfiles as $roleventfile): ?>
                <tr>
                    <td><?= $this->Number->format($roleventfile->id) ?></td>
                    <td><?= h($roleventfile->filename) ?></td>
                    <td><?= $roleventfile->has('rolevent') ? $this->Html->link($roleventfile->rolevent->id, ['controller' => 'Rolevents', 'action' => 'view', $roleventfile->rolevent->id]) : '' ?></td>
                    <td><?= h($roleventfile->path) ?></td>
                    <td><?= h($roleventfile->originalfilename) ?></td>
                    <td><?= h($roleventfile->midiatype) ?></td>
                    <td><?= h($roleventfile->activeflag) ?></td>
                    <td><?= h($roleventfile->created) ?></td>
                    <td><?= h($roleventfile->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $roleventfile->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $roleventfile->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $roleventfile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roleventfile->id)]) ?>
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
