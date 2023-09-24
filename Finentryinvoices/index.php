<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Finentryinvoice[]|\Cake\Collection\CollectionInterface $finentryinvoices
 */
?>
<div class="finentryinvoices index content">
    <?= $this->Html->link(__('New Finentryinvoice'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Despesas') ?></h3>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('rolevent_id','Evento') ?></th>
                    <th><?= $this->Paginator->sort('paymentmethod_id','Metodo') ?></th>
                    <th><?= $this->Paginator->sort('bussinessunit_id','Congr.') ?></th>
                    <th><?= $this->Paginator->sort('finoperation_id','Oper') ?></th>
                    <th><?= $this->Paginator->sort('docstatu_id','Status') ?></th>
                    <th><?= $this->Paginator->sort('supplier_id', 'Fornecedor') ?></th>
                    <th><?= $this->Paginator->sort('shortdescription','Histórico') ?></th>
                    <th><?= $this->Paginator->sort('number','DOC') ?></th>
                    <th><?= $this->Paginator->sort('entrydate','Dt.Entrada') ?></th>
                    <th><?= $this->Paginator->sort('issuedate','Dt.Saída') ?></th>
                    <th><?= $this->Paginator->sort('duedate') ?></th>
                    <th><?= $this->Paginator->sort('suppliername','Fornecedor') ?></th>
                    <th><?= $this->Paginator->sort('totalamount','Valor') ?></th>                    
                    <th><?= $this->Paginator->sort('created','Lancto') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($finentryinvoices as $finentryinvoice): ?>
                <tr>
                    <td><?= $this->Number->format($finentryinvoice->id) ?></td>
                    <td><?= $finentryinvoice->has('rolevent') ? $this->Html->link($finentryinvoice->rolevent->description, ['controller' => 'Rolevents', 'action' => 'view', $finentryinvoice->rolevent->id]) : '' ?></td>
                    <td><?= $finentryinvoice->has('paymentmethod') ? $this->Html->link($finentryinvoice->paymentmethod->description, ['controller' => 'Paymentmethods', 'action' => 'view', $finentryinvoice->paymentmethod->id]) : '' ?></td>
                    <td><?= $finentryinvoice->has('bussinessunit') ? $this->Html->link($finentryinvoice->bussinessunit->description, ['controller' => 'Bussinessunits', 'action' => 'view', $finentryinvoice->bussinessunit->id]) : '' ?></td>
                    <td><?= $finentryinvoice->has('finoperation') ? $this->Html->link($finentryinvoice->finoperation->shortdescription, ['controller' => 'Finoperations', 'action' => 'view', $finentryinvoice->finoperation->id]) : '' ?></td>
                    <td><?= $finentryinvoice->has('docstatus') ? $this->Html->link($finentryinvoice->docstatus->description, ['controller' => 'Docstatus', 'action' => 'view', $finentryinvoice->docstatus->id]) : '' ?></td>
                    <td><?= $finentryinvoice->has('supplier') ? $this->Html->link($finentryinvoice->supplier->shortname, ['controller' => 'Suppliers', 'action' => 'view', $finentryinvoice->supplier->id]) : '' ?></td>
                    <td><?= h($finentryinvoice->shortdescription) ?></td>
                    <td><?= h($finentryinvoice->number) ?></td>
                    <td><?= h($finentryinvoice->entrydate) ?></td>
                    <td><?= h($finentryinvoice->issuedate) ?></td>
                    <td><?= h($finentryinvoice->duedate) ?></td>
                    <td><?= h($finentryinvoice->suppliername) ?></td>
                    <td><?= $this->Number->format($finentryinvoice->totalamount) ?></td>                    
                    <td><?= h($finentryinvoice->created) ?></td>                    
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $finentryinvoice->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $finentryinvoice->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $finentryinvoice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $finentryinvoice->id)]) ?>
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
