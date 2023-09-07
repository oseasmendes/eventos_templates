<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agenda[]|\Cake\Collection\CollectionInterface $agendas
 */
?>
 <div class="container">
<div class="agendas index content">    
    <h3><?= __('Acompanhe nossa agenda de atividades e PARTICIPE') ?></h3>
    <div class="table table-striped">
        <table>
            <thead>
                <tr>
                   
                    <th><?= $this->Paginator->sort('dateevent','Data') ?></th>
                    <th><?= $this->Paginator->sort('timestart','Início') ?></th>
                    <th><?= $this->Paginator->sort('timeend','Fim') ?></th>
                    <th><?= $this->Paginator->sort('dayname','Dia') ?></th>   
                    <th><?= $this->Paginator->sort('eventdescription','Evento') ?></th>  
                    <th><?= $this->Paginator->sort('placeofevent','Local') ?></th>                                                 
                    <th><?= $this->Paginator->sort('sectorname','Setor') ?></th> 
                    <th><?= $this->Paginator->sort('obs','Obs') ?></th>
                                     
                </tr>
            </thead>
            <tbody>
                <?php foreach ($agendas as $agenda): ?>
                <tr>
                    <td><?= h($agenda->dateevent) ?></td>
                    <td><?= h($agenda->timestart) ?></td>
                    <td><?= h($agenda->timeend) ?></td>
                    <td><?= h($agenda->dayname) ?></td>    
                    <td><?= h($agenda->eventdescription) ?></td>  
                    <td><?= h($agenda->placeofevent) ?></td>                                                                                             
                    <td><?= h($agenda->sectorname) ?></td>
                    <td><?= h($agenda->obs) ?></td>
                         
                   
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>

  
</div>
</div>
