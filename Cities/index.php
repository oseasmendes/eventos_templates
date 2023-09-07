<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\City[]|\Cake\Collection\CollectionInterface $cities
 */
?>
<div class="cities index content">
    <?= $this->Html->link(__('New City'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cities') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('originid') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('seq') ?></th>
                    <th><?= $this->Paginator->sort('postalcodestandard') ?></th>
                    <th><?= $this->Paginator->sort('telephonecode') ?></th>
                    <th><?= $this->Paginator->sort('unitsfederation_id') ?></th>
                    <th><?= $this->Paginator->sort('officialcode') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cities as $city): ?>
                <tr>
                    <td><?= $this->Number->format($city->id) ?></td>
                    <td><?= $this->Number->format($city->originid) ?></td>
                    <td><?= h($city->description) ?></td>
                    <td><?= h($city->created) ?></td>
                    <td><?= h($city->modified) ?></td>
                    <td><?= $this->Number->format($city->seq) ?></td>
                    <td><?= h($city->postalcodestandard) ?></td>
                    <td><?= h($city->telephonecode) ?></td>
                    <td><?= $city->has('unitsfederation') ? $this->Html->link($city->unitsfederation->description, ['controller' => 'Unitsfederations', 'action' => 'view', $city->unitsfederation->id]) : '' ?></td>
                    <td><?= $this->Number->format($city->officialcode) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $city->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $city->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $city->id], ['confirm' => __('Are you sure you want to delete # {0}?', $city->id)]) ?>
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
