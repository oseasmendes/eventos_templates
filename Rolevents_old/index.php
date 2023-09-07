<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rolevent[]|\Cake\Collection\CollectionInterface $rolevents
 */
?>
<div class="rolevents index content">
    <?= $this->Html->link(__('New Rolevent'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Rolevents') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('activeflag') ?></th>
                    <th><?= $this->Paginator->sort('startdate') ?></th>
                    <th><?= $this->Paginator->sort('enddate') ?></th>
                    <th><?= $this->Paginator->sort('price') ?></th>
                    <th><?= $this->Paginator->sort('subscriptionrequired') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rolevents as $rolevent): ?>
                <tr>
                    <td><?= $this->Number->format($rolevent->id) ?></td>
                    <td><?= h($rolevent->description) ?></td>
                    <td><?= h($rolevent->created) ?></td>
                    <td><?= h($rolevent->modified) ?></td>
                    <td><?= h($rolevent->activeflag) ?></td>
                    <td><?= h($rolevent->startdate) ?></td>
                    <td><?= h($rolevent->enddate) ?></td>
                    <td><?= $this->Number->format($rolevent->price) ?></td>
                    <td><?= h($rolevent->subscriptionrequired) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $rolevent->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rolevent->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rolevent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rolevent->id)]) ?>
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
