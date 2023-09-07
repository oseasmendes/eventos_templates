<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscription[]|\Cake\Collection\CollectionInterface $subscriptions
 */
?>
<div class="subscriptions index content">
    <?= $this->Html->link(__('New Subscription'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Inscrições Online') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('created','Lancto') ?></th>
                    <th><?= $this->Paginator->sort('rolevent_id','Evento') ?></th>
                    <th><?= $this->Paginator->sort('user_id','Usuário') ?></th>
                    <th><?= $this->Paginator->sort('activeflag','Ativo') ?></th>
                    <th><?= $this->Paginator->sort('statusflag','Status') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($subscriptions as $subscription): ?>
                <tr>
                    <td><?= $this->Number->format($subscription->id) ?></td>
                    <td><?= h($subscription->created) ?></td>
                    <td><?= $subscription->has('rolevent') ? $this->Html->link($subscription->rolevent->description, ['controller' => 'Rolevents', 'action' => 'view', $subscription->rolevent->id]) : '' ?></td>
                    <td><?= $subscription->has('user') ? $this->Html->link($subscription->user->name, ['controller' => 'Users', 'action' => 'view', $subscription->user->id]) : '' ?></td>
                    <td><?= h($subscription->activeflag) ?></td>
                    <td><?= h($subscription->statusflag) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $subscription->id]) ?>
                        
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
