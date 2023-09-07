<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Appupdate $appupdate
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Appupdate'), ['action' => 'edit', $appupdate->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Appupdate'), ['action' => 'delete', $appupdate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appupdate->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Appupdates'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Appupdate'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="appupdates view content">
            <h3><?= h($appupdate->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Doc') ?></th>
                    <td><?= h($appupdate->doc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Module') ?></th>
                    <td><?= h($appupdate->module) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($appupdate->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($appupdate->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor') ?></th>
                    <td><?= h($appupdate->valor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Changetype') ?></th>
                    <td><?= h($appupdate->changetype) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($appupdate->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ordem') ?></th>
                    <td><?= $this->Number->format($appupdate->Ordem) ?></td>
                </tr>
                <tr>
                    <th><?= __('Linereference') ?></th>
                    <td><?= $this->Number->format($appupdate->linereference) ?></td>
                </tr>
                <tr>
                    <th><?= __('Linereferenceuntil') ?></th>
                    <td><?= $this->Number->format($appupdate->linereferenceuntil) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prddate') ?></th>
                    <td><?= h($appupdate->prddate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tstdate') ?></th>
                    <td><?= h($appupdate->tstdate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Devdate') ?></th>
                    <td><?= h($appupdate->devdate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($appupdate->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($appupdate->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prd') ?></th>
                    <td><?= $appupdate->prd ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Tst') ?></th>
                    <td><?= $appupdate->tst ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Dev') ?></th>
                    <td><?= $appupdate->dev ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Technicaldescription') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($appupdate->technicaldescription)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
