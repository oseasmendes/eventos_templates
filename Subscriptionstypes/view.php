<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscriptionstype $subscriptionstype
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Subscriptionstype'), ['action' => 'edit', $subscriptionstype->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Subscriptionstype'), ['action' => 'delete', $subscriptionstype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subscriptionstype->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Subscriptionstypes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Subscriptionstype'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="subscriptionstypes view content">
            <h3><?= h($subscriptionstype->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($subscriptionstype->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($subscriptionstype->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($subscriptionstype->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($subscriptionstype->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Subscriptions') ?></h4>
                <?php if (!empty($subscriptionstype->subscriptions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Subscriptionstype Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Rolevent Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Activeflag') ?></th>
                            <th><?= __('Statusflag') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('People Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($subscriptionstype->subscriptions as $subscriptions) : ?>
                        <tr>
                            <td><?= h($subscriptions->id) ?></td>
                            <td><?= h($subscriptions->subscriptionstype_id) ?></td>
                            <td><?= h($subscriptions->date) ?></td>
                            <td><?= h($subscriptions->rolevent_id) ?></td>
                            <td><?= h($subscriptions->user_id) ?></td>
                            <td><?= h($subscriptions->activeflag) ?></td>
                            <td><?= h($subscriptions->statusflag) ?></td>
                            <td><?= h($subscriptions->created) ?></td>
                            <td><?= h($subscriptions->modified) ?></td>
                            <td><?= h($subscriptions->people_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Subscriptions', 'action' => 'view', $subscriptions->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Subscriptions', 'action' => 'edit', $subscriptions->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Subscriptions', 'action' => 'delete', $subscriptions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subscriptions->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
