<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Appupdate[]|\Cake\Collection\CollectionInterface $appupdates
 */
?>
<div class="appupdates index content">
    <?= $this->Html->link(__('New Appupdate'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('AppUpdates') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('doc') ?></th>
                    <th><?= $this->Paginator->sort('module') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('prd','P') ?></th>                 
                    <th><?= $this->Paginator->sort('tst','T') ?></th>
                    <th><?= $this->Paginator->sort('dev','D') ?></th> 
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('valor') ?></th>
                    <th><?= $this->Paginator->sort('ordem') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($appupdates as $appupdate): ?>
                <tr>
                    <td><?= $this->Number->format($appupdate->id) ?></td>
                    <td><?= h($appupdate->doc) ?></td>
                    <td><?= h($appupdate->module) ?></td>
                    <td><?= h($appupdate->description) ?></td>
                    <td><?= h($appupdate->prd) ?></td>
                    <td><?= h($appupdate->tst) ?></td>                   
                    <td><?= h($appupdate->dev) ?></td>                  
                    <td><?= h($appupdate->status) ?></td>
                    <td><?= h($appupdate->valor) ?></td>
                    <td><?= h($appupdate->ordem) ?></td>
                    <td><?= h($appupdate->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $appupdate->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $appupdate->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $appupdate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appupdate->id)]) ?>
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
