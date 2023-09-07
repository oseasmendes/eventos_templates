<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Roleventfile $roleventfile
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Roleventfile'), ['action' => 'edit', $roleventfile->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Roleventfile'), ['action' => 'delete', $roleventfile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roleventfile->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Roleventfiles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Roleventfile'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="roleventfiles view content">
            <h3><?= h($roleventfile->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Filename') ?></th>
                    <td><?= h($roleventfile->filename) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rolevent') ?></th>
                    <td><?= $roleventfile->has('rolevent') ? $this->Html->link($roleventfile->rolevent->id, ['controller' => 'Rolevents', 'action' => 'view', $roleventfile->rolevent->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Path') ?></th>
                    <td><?= h($roleventfile->path) ?></td>
                </tr>
                <tr>
                    <th><?= __('Originalfilename') ?></th>
                    <td><?= h($roleventfile->originalfilename) ?></td>
                </tr>
                <tr>
                    <th><?= __('Midiatype') ?></th>
                    <td><?= h($roleventfile->midiatype) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($roleventfile->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($roleventfile->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($roleventfile->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Activeflag') ?></th>
                    <td><?= $roleventfile->activeflag ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
