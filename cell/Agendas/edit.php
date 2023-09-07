<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agenda $agenda
 * @var string[]|\Cake\Collection\CollectionInterface $rolevents
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $agenda->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $agenda->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Agendas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="agendas form content">
            <?= $this->Form->create($agenda) ?>
            <fieldset>
                <legend><?= __('Edit Agenda') ?></legend>
                <?php
                    echo $this->Form->control('originagendaid');
                    echo $this->Form->control('dailyid');
                    echo $this->Form->control('dateevent', ['empty' => true]);
                    echo $this->Form->control('timestart');
                    echo $this->Form->control('timeend');
                    echo $this->Form->control('dayname');
                    echo $this->Form->control('daynumber');
                    echo $this->Form->control('monthnumber');
                    echo $this->Form->control('monthname');
                    echo $this->Form->control('weeknumber');
                    echo $this->Form->control('year');
                    echo $this->Form->control('agendatype');
                    echo $this->Form->control('sectorname');
                    echo $this->Form->control('unityorganization');
                    echo $this->Form->control('eventdescription');
                    echo $this->Form->control('placeofevent');
                    echo $this->Form->control('departmentname');
                    echo $this->Form->control('dayreference');
                    echo $this->Form->control('rolevent_id', ['options' => $rolevents, 'empty' => true]);
                    echo $this->Form->control('obs');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
