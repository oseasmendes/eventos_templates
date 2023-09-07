<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Doctype $doctype
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Doctype'), ['action' => 'edit', $doctype->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Doctype'), ['action' => 'delete', $doctype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $doctype->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Doctypes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Doctype'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="doctypes view content">
            <h3><?= h($doctype->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($doctype->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($doctype->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($doctype->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($doctype->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Activeflag') ?></th>
                    <td><?= $doctype->activeflag ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Subscriptionsdocs') ?></h4>
                <?php if (!empty($doctype->subscriptionsdocs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Subscription Id') ?></th>
                            <th><?= __('Doctype Id') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Filename') ?></th>
                            <th><?= __('Path') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Statusflag') ?></th>
                            <th><?= __('Activeflag') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($doctype->subscriptionsdocs as $subscriptionsdocs) : ?>
                        <tr>
                            <td><?= h($subscriptionsdocs->id) ?></td>
                            <td><?= h($subscriptionsdocs->subscription_id) ?></td>
                            <td><?= h($subscriptionsdocs->doctype_id) ?></td>
                            <td><?= h($subscriptionsdocs->description) ?></td>
                            <td><?= h($subscriptionsdocs->filename) ?></td>
                            <td><?= h($subscriptionsdocs->path) ?></td>
                            <td><?= h($subscriptionsdocs->created) ?></td>
                            <td><?= h($subscriptionsdocs->modified) ?></td>
                            <td><?= h($subscriptionsdocs->statusflag) ?></td>
                            <td><?= h($subscriptionsdocs->activeflag) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Subscriptionsdocs', 'action' => 'view', $subscriptionsdocs->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Subscriptionsdocs', 'action' => 'edit', $subscriptionsdocs->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Subscriptionsdocs', 'action' => 'delete', $subscriptionsdocs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subscriptionsdocs->id)]) ?>
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
