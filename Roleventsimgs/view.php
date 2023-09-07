<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Roleventsimg $roleventsimg
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Roleventsimg'), ['action' => 'edit', $roleventsimg->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Roleventsimg'), ['action' => 'delete', $roleventsimg->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roleventsimg->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Roleventsimgs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Roleventsimg'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="roleventsimgs view content">
            <h3><?= h($roleventsimg->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($roleventsimg->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rolevent') ?></th>
                    <td><?= $roleventsimg->has('rolevent') ? $this->Html->link($roleventsimg->rolevent->description, ['controller' => 'Rolevents', 'action' => 'view', $roleventsimg->rolevent->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Filepath') ?></th>
                    <td><?= h($roleventsimg->filepath) ?></td>
                </tr>
                <tr>
                    <th><?= __('Filename') ?></th>
                    <td><?= h($roleventsimg->filename) ?></td>
                </tr>
                <tr>
                    <th><?= __('Filenameoriginal') ?></th>
                    <td><?= h($roleventsimg->filenameoriginal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Docsystemtype') ?></th>
                    <td><?= h($roleventsimg->docsystemtype) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($roleventsimg->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($roleventsimg->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($roleventsimg->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Activeflag') ?></th>
                    <td><?= $roleventsimg->activeflag ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Fileselection') ?></th>
                    <td><?= $roleventsimg->fileselection ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
