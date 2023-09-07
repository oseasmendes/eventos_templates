<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sysadmin[]|\Cake\Collection\CollectionInterface $sysadmins
 */
?>
<div class="sysadmins index content">
    <?= $this->Html->link(__('New Sysadmin'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Sysadmins') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('app') ?></th>
                    <th><?= $this->Paginator->sort('control') ?></th>
                    <th><?= $this->Paginator->sort('act') ?></th>
                    <th><?= $this->Paginator->sort('role_id') ?></th>
                    <th><?= $this->Paginator->sort('profile_id') ?></th>
                    <th><?= $this->Paginator->sort('value') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('reference') ?></th>
                    <th><?= $this->Paginator->sort('register') ?></th>
                    <th><?= $this->Paginator->sort('sysaction_id') ?></th>
                    <th><?= $this->Paginator->sort('syscontrol_id') ?></th>
                    <th><?= $this->Paginator->sort('sysapp_id') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sysadmins as $sysadmin): ?>
                <tr>
                    <td><?= $this->Number->format($sysadmin->id) ?></td>
                    <td><?= h($sysadmin->app) ?></td>
                    <td><?= h($sysadmin->control) ?></td>
                    <td><?= h($sysadmin->act) ?></td>
                    <td><?= $sysadmin->has('role') ? $this->Html->link($sysadmin->role->role, ['controller' => 'Roles', 'action' => 'view', $sysadmin->role->id]) : '' ?></td>
                    <td><?= $sysadmin->has('profile') ? $this->Html->link($sysadmin->profile->description, ['controller' => 'Profiles', 'action' => 'view', $sysadmin->profile->id]) : '' ?></td>
                    <td><?= $this->Number->format($sysadmin->value) ?></td>
                    <td><?= h($sysadmin->active) ?></td>
                    <td><?= h($sysadmin->created) ?></td>
                    <td><?= h($sysadmin->modified) ?></td>
                    <td><?= h($sysadmin->reference) ?></td>
                    <td><?= $this->Number->format($sysadmin->register) ?></td>
                    <td><?= $sysadmin->has('sysaction') ? $this->Html->link($sysadmin->sysaction->id, ['controller' => 'Sysactions', 'action' => 'view', $sysadmin->sysaction->id]) : '' ?></td>
                    <td><?= $sysadmin->has('syscontrol') ? $this->Html->link($sysadmin->syscontrol->id, ['controller' => 'Syscontrols', 'action' => 'view', $sysadmin->syscontrol->id]) : '' ?></td>
                    <td><?= $sysadmin->has('sysapp') ? $this->Html->link($sysadmin->sysapp->id, ['controller' => 'Sysapps', 'action' => 'view', $sysadmin->sysapp->id]) : '' ?></td>
                    <td><?= h($sysadmin->description) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $sysadmin->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sysadmin->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sysadmin->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sysadmin->id)]) ?>
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
