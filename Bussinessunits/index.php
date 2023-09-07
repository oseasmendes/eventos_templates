<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bussinessunit[]|\Cake\Collection\CollectionInterface $bussinessunits
 */
?>
<div class="bussinessunits index content">
    <?= $this->Html->link(__('New Bussinessunit'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Bussinessunits') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('oringid') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('seq') ?></th>
                    <th><?= $this->Paginator->sort('org_id') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('postalcode') ?></th>
                    <th><?= $this->Paginator->sort('district') ?></th>
                    <th><?= $this->Paginator->sort('city') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('responsible') ?></th>
                    <th><?= $this->Paginator->sort('sector') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('general') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bussinessunits as $bussinessunit): ?>
                <tr>
                    <td><?= $this->Number->format($bussinessunit->id) ?></td>
                    <td><?= $this->Number->format($bussinessunit->oringid) ?></td>
                    <td><?= h($bussinessunit->description) ?></td>
                    <td><?= h($bussinessunit->created) ?></td>
                    <td><?= h($bussinessunit->modified) ?></td>
                    <td><?= $this->Number->format($bussinessunit->seq) ?></td>
                    <td><?= $bussinessunit->has('org') ? $this->Html->link($bussinessunit->org->name, ['controller' => 'Orgs', 'action' => 'view', $bussinessunit->org->id]) : '' ?></td>
                    <td><?= h($bussinessunit->address) ?></td>
                    <td><?= h($bussinessunit->postalcode) ?></td>
                    <td><?= h($bussinessunit->district) ?></td>
                    <td><?= h($bussinessunit->city) ?></td>
                    <td><?= h($bussinessunit->phone) ?></td>
                    <td><?= h($bussinessunit->responsible) ?></td>
                    <td><?= h($bussinessunit->sector) ?></td>
                    <td><?= h($bussinessunit->email) ?></td>
                    <td><?= h($bussinessunit->active) ?></td>
                    <td><?= h($bussinessunit->general) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $bussinessunit->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bussinessunit->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bussinessunit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bussinessunit->id)]) ?>
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
