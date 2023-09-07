<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Org[]|\Cake\Collection\CollectionInterface $orgs
 */
?>
<div class="orgs index content">
    <?= $this->Html->link(__('New Org'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Orgs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('district') ?></th>
                    <th><?= $this->Paginator->sort('zipcode') ?></th>
                    <th><?= $this->Paginator->sort('city') ?></th>
                    <th><?= $this->Paginator->sort('contactfone') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifed') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orgs as $org): ?>
                <tr>
                    <td><?= $this->Number->format($org->id) ?></td>
                    <td><?= h($org->name) ?></td>
                    <td><?= h($org->address) ?></td>
                    <td><?= h($org->district) ?></td>
                    <td><?= h($org->zipcode) ?></td>
                    <td><?= h($org->city) ?></td>
                    <td><?= h($org->contactfone) ?></td>
                    <td><?= h($org->email) ?></td>
                    <td><?= h($org->created) ?></td>
                    <td><?= h($org->modifed) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $org->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $org->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $org->id], ['confirm' => __('Are you sure you want to delete # {0}?', $org->id)]) ?>
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
