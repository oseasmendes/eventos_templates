<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agenda $agenda
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Agenda'), ['action' => 'edit', $agenda->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Agenda'), ['action' => 'delete', $agenda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agenda->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Agendas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Agenda'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="agendas view content">
            <h3><?= h($agenda->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Timestart') ?></th>
                    <td><?= h($agenda->timestart) ?></td>
                </tr>
                <tr>
                    <th><?= __('Timeend') ?></th>
                    <td><?= h($agenda->timeend) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dayname') ?></th>
                    <td><?= h($agenda->dayname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Monthnumber') ?></th>
                    <td><?= h($agenda->monthnumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('Monthname') ?></th>
                    <td><?= h($agenda->monthname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Agendatype') ?></th>
                    <td><?= h($agenda->agendatype) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sectorname') ?></th>
                    <td><?= h($agenda->sectorname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Unityorganization') ?></th>
                    <td><?= h($agenda->unityorganization) ?></td>
                </tr>
                <tr>
                    <th><?= __('Eventdescription') ?></th>
                    <td><?= h($agenda->eventdescription) ?></td>
                </tr>
                <tr>
                    <th><?= __('Placeofevent') ?></th>
                    <td><?= h($agenda->placeofevent) ?></td>
                </tr>
                <tr>
                    <th><?= __('Departmentname') ?></th>
                    <td><?= h($agenda->departmentname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dayreference') ?></th>
                    <td><?= h($agenda->dayreference) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rolevent') ?></th>
                    <td><?= $agenda->has('rolevent') ? $this->Html->link($agenda->rolevent->description, ['controller' => 'Rolevents', 'action' => 'view', $agenda->rolevent->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Obs') ?></th>
                    <td><?= h($agenda->obs) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($agenda->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Originagendaid') ?></th>
                    <td><?= $this->Number->format($agenda->originagendaid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dailyid') ?></th>
                    <td><?= $this->Number->format($agenda->dailyid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Daynumber') ?></th>
                    <td><?= $this->Number->format($agenda->daynumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('Weeknumber') ?></th>
                    <td><?= $this->Number->format($agenda->weeknumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('Year') ?></th>
                    <td><?= $this->Number->format($agenda->year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dateevent') ?></th>
                    <td><?= h($agenda->dateevent) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($agenda->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($agenda->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
