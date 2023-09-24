<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cashbookstransaction[]|\Cake\Collection\CollectionInterface $cashbookstransactions
 */
?>



    <div class="cashbookstransactions index content">
        <?= $this->Html->link(__('New Cashbookstransaction'), ['action' => 'add'], ['class' => 'button float-right']) ?>
        <h3><?= __('Transações') ?></h3>
        <table class="table">
                <thead>
                    <tr>
                        <th>Total de Entradas</th>
                        <th>Total de Saídas</th>
                        <th>Saldo Atual</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <?= $this->Number->precision($sumcashin, 2); ?>
                        </td>                    
                        <td>
                            <?= $this->Number->precision($sumcashout, 2); ?>
                        </td>
                        <td>
                            <?= $this->Number->precision($sumcashin + $sumcashout, 2); ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        <div class="table table-striped">
            <table class="table">
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('rolevent_id','Evento') ?></th>
                        <th><?= $this->Paginator->sort('bussinessunit_id','Congr.') ?></th>
                        <th><?= $this->Paginator->sort('date','Data') ?></th>
                        <th><?= $this->Paginator->sort('description','Histórico') ?></th>
                        <th><?= $this->Paginator->sort('documentreference','Nr.DOC') ?></th>                                        
                        <th><?= $this->Paginator->sort('transactionid','TrId') ?></th>
                        <th><?= $this->Paginator->sort('cashinflow','Entrada') ?></th>
                        <th><?= $this->Paginator->sort('cashoutflow','Saída') ?></th>
                        <th><?= $this->Paginator->sort('created','Lancto') ?></th>                        
                        <th><?= $this->Paginator->sort('finoperation_id','Opera') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cashbookstransactions as $cashbookstransaction): ?>
                    <tr>
                        <td><?= $this->Number->format($cashbookstransaction->id) ?></td>
                        <td><?= $cashbookstransaction->has('rolevent') ? $this->Html->link($cashbookstransaction->rolevent->id, ['controller' => 'Rolevents', 'action' => 'view', $cashbookstransaction->rolevent->id]) : '' ?></td>
                        <td><?= $cashbookstransaction->has('bussinessunit') ? $this->Html->link($cashbookstransaction->bussinessunit->id, ['controller' => 'Bussinessunits', 'action' => 'view', $cashbookstransaction->bussinessunit->id]) : '' ?></td>
                        <td><?= h($cashbookstransaction->date) ?></td>
                        <td><?= h($cashbookstransaction->description) ?></td>
                        <td><?= h($cashbookstransaction->documentreference) ?></td>                                                                
                        <td><?= h($cashbookstransaction->transactionid) ?></td>                                                                
                        <td><?= $this->Number->format($cashbookstransaction->cashinflow) ?></td>
                        <td><?= $this->Number->format($cashbookstransaction->cashoutflow) ?></td>
                        <td><?= h($cashbookstransaction->created) ?></td>                       
                        <td><?= $cashbookstransaction->has('finoperation') ? $this->Html->link($cashbookstransaction->finoperation->id, ['controller' => 'Finoperations', 'action' => 'view', $cashbookstransaction->finoperation->id]) : '' ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $cashbookstransaction->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cashbookstransaction->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cashbookstransaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cashbookstransaction->id)]) ?>
                        </td>
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

