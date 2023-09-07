<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Roleventschannel $roleventschannel
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Roleventschannel'), ['action' => 'edit', $roleventschannel->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Roleventschannel'), ['action' => 'delete', $roleventschannel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roleventschannel->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Roleventschannels'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Roleventschannel'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="roleventschannels view content">
            <h3><?= h($roleventschannel->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Rolevent') ?></th>
                    <td><?= $roleventschannel->has('rolevent') ? $this->Html->link($roleventschannel->rolevent->id, ['controller' => 'Rolevents', 'action' => 'view', $roleventschannel->rolevent->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($roleventschannel->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($roleventschannel->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($roleventschannel->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($roleventschannel->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Activestatus') ?></th>
                    <td><?= $roleventschannel->activestatus ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Details') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($roleventschannel->details)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
