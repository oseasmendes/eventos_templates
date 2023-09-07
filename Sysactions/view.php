<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sysaction $sysaction
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Sysaction'), ['action' => 'edit', $sysaction->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Sysaction'), ['action' => 'delete', $sysaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sysaction->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Sysactions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Sysaction'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sysactions view content">
            <h3><?= h($sysaction->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($sysaction->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($sysaction->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($sysaction->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($sysaction->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Sysadmins') ?></h4>
                <?php if (!empty($sysaction->sysadmins)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('App') ?></th>
                            <th><?= __('Control') ?></th>
                            <th><?= __('Act') ?></th>
                            <th><?= __('Role Id') ?></th>
                            <th><?= __('Profile Id') ?></th>
                            <th><?= __('Value') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Reference') ?></th>
                            <th><?= __('Register') ?></th>
                            <th><?= __('Sysaction Id') ?></th>
                            <th><?= __('Syscontrol Id') ?></th>
                            <th><?= __('Sysapp Id') ?></th>
                            <th><?= __('Description') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($sysaction->sysadmins as $sysadmins) : ?>
                        <tr>
                            <td><?= h($sysadmins->id) ?></td>
                            <td><?= h($sysadmins->app) ?></td>
                            <td><?= h($sysadmins->control) ?></td>
                            <td><?= h($sysadmins->act) ?></td>
                            <td><?= h($sysadmins->role_id) ?></td>
                            <td><?= h($sysadmins->profile_id) ?></td>
                            <td><?= h($sysadmins->value) ?></td>
                            <td><?= h($sysadmins->active) ?></td>
                            <td><?= h($sysadmins->created) ?></td>
                            <td><?= h($sysadmins->modified) ?></td>
                            <td><?= h($sysadmins->reference) ?></td>
                            <td><?= h($sysadmins->register) ?></td>
                            <td><?= h($sysadmins->sysaction_id) ?></td>
                            <td><?= h($sysadmins->syscontrol_id) ?></td>
                            <td><?= h($sysadmins->sysapp_id) ?></td>
                            <td><?= h($sysadmins->description) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Sysadmins', 'action' => 'view', $sysadmins->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Sysadmins', 'action' => 'edit', $sysadmins->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sysadmins', 'action' => 'delete', $sysadmins->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sysadmins->id)]) ?>
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
