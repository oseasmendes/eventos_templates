<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Breakingnews[]|\Cake\Collection\CollectionInterface $breakingnews
 */
?>
<div class="breakingnews index content">
    <?= $this->Html->link(__('New Breakingnews'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Breakingnews') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('activeflag') ?></th>
                    <th><?= $this->Paginator->sort('expirationdate') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($breakingnews as $breakingnews): ?>
                <tr>
                    <td><?= $this->Number->format($breakingnews->id) ?></td>
                    <td><?= h($breakingnews->description) ?></td>
                    <td><?= h($breakingnews->created) ?></td>
                    <td><?= h($breakingnews->modified) ?></td>
                    <td><?= h($breakingnews->activeflag) ?></td>
                    <td><?= h($breakingnews->expirationdate) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $breakingnews->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $breakingnews->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $breakingnews->id], ['confirm' => __('Are you sure you want to delete # {0}?', $breakingnews->id)]) ?>
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
