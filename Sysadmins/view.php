<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sysadmin $sysadmin
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Sysadmin'), ['action' => 'edit', $sysadmin->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Sysadmin'), ['action' => 'delete', $sysadmin->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sysadmin->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Sysadmins'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Sysadmin'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sysadmins view content">
            <h3><?= h($sysadmin->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('App') ?></th>
                    <td><?= h($sysadmin->app) ?></td>
                </tr>
                <tr>
                    <th><?= __('Control') ?></th>
                    <td><?= h($sysadmin->control) ?></td>
                </tr>
                <tr>
                    <th><?= __('Act') ?></th>
                    <td><?= h($sysadmin->act) ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= $sysadmin->has('role') ? $this->Html->link($sysadmin->role->role, ['controller' => 'Roles', 'action' => 'view', $sysadmin->role->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Profile') ?></th>
                    <td><?= $sysadmin->has('profile') ? $this->Html->link($sysadmin->profile->description, ['controller' => 'Profiles', 'action' => 'view', $sysadmin->profile->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Reference') ?></th>
                    <td><?= h($sysadmin->reference) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sysaction') ?></th>
                    <td><?= $sysadmin->has('sysaction') ? $this->Html->link($sysadmin->sysaction->id, ['controller' => 'Sysactions', 'action' => 'view', $sysadmin->sysaction->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Syscontrol') ?></th>
                    <td><?= $sysadmin->has('syscontrol') ? $this->Html->link($sysadmin->syscontrol->id, ['controller' => 'Syscontrols', 'action' => 'view', $sysadmin->syscontrol->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Sysapp') ?></th>
                    <td><?= $sysadmin->has('sysapp') ? $this->Html->link($sysadmin->sysapp->id, ['controller' => 'Sysapps', 'action' => 'view', $sysadmin->sysapp->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($sysadmin->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($sysadmin->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Value') ?></th>
                    <td><?= $this->Number->format($sysadmin->value) ?></td>
                </tr>
                <tr>
                    <th><?= __('Register') ?></th>
                    <td><?= $this->Number->format($sysadmin->register) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($sysadmin->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($sysadmin->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $sysadmin->active ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
