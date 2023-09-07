<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscriptionsconf $subscriptionsconf
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Subscriptionsconf'), ['action' => 'edit', $subscriptionsconf->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Subscriptionsconf'), ['action' => 'delete', $subscriptionsconf->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subscriptionsconf->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Subscriptionsconfs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Subscriptionsconf'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="subscriptionsconfs view content">
            <h3><?= h($subscriptionsconf->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Subscription') ?></th>
                    <td><?= $subscriptionsconf->has('subscription') ? $this->Html->link($subscriptionsconf->subscription->id, ['controller' => 'Subscriptions', 'action' => 'view', $subscriptionsconf->subscription->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Confirmationby') ?></th>
                    <td><?= h($subscriptionsconf->confirmationby) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $subscriptionsconf->has('user') ? $this->Html->link($subscriptionsconf->user->name, ['controller' => 'Users', 'action' => 'view', $subscriptionsconf->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Statusflag') ?></th>
                    <td><?= h($subscriptionsconf->statusflag) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($subscriptionsconf->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Number') ?></th>
                    <td><?= $this->Number->format($subscriptionsconf->number) ?></td>
                </tr>
                <tr>
                    <th><?= __('People Id') ?></th>
                    <td><?= $this->Number->format($subscriptionsconf->people_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($subscriptionsconf->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($subscriptionsconf->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($subscriptionsconf->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Activeflag') ?></th>
                    <td><?= $subscriptionsconf->activeflag ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
