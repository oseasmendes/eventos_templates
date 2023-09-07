<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscriptionsflow $subscriptionsflow
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Subscriptionsflow'), ['action' => 'edit', $subscriptionsflow->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Subscriptionsflow'), ['action' => 'delete', $subscriptionsflow->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subscriptionsflow->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Subscriptionsflows'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Subscriptionsflow'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="subscriptionsflows view content">
            <h3><?= h($subscriptionsflow->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Subscription') ?></th>
                    <td><?= $subscriptionsflow->has('subscription') ? $this->Html->link($subscriptionsflow->subscription->id, ['controller' => 'Subscriptions', 'action' => 'view', $subscriptionsflow->subscription->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Action') ?></th>
                    <td><?= h($subscriptionsflow->action) ?></td>
                </tr>
                <tr>
                    <th><?= __('Statusflag') ?></th>
                    <td><?= h($subscriptionsflow->statusflag) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($subscriptionsflow->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($subscriptionsflow->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($subscriptionsflow->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($subscriptionsflow->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
