<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Finreceivable[]|\Cake\Collection\CollectionInterface $finreceivables
 */
?>
<div class="finreceivables index content">
    <?= $this->Html->link(__('New Finreceivable'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Entradas') ?></h3>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('receivabledate','Data') ?></th>
                    <th><?= $this->Paginator->sort('bussinessunit_id','Congr.') ?></th>
                    <th><?= $this->Paginator->sort('rolevent_id','Evento') ?></th>
                    <th><?= $this->Paginator->sort('finoperation_id','Oper.') ?></th>
                    <th><?= $this->Paginator->sort('paymentmethod_id','Metodo') ?></th>
                    <th><?= $this->Paginator->sort('docstatu_id','Status') ?></th>
                    <th><?= $this->Paginator->sort('reference','Doc') ?></th>
                    <th><?= $this->Paginator->sort('shortdescription','Histórico') ?></th>                    
                    <th><?= $this->Paginator->sort('responsible','Portador') ?></th>
                    <th><?= $this->Paginator->sort('discount','Desconto') ?></th>
                    <th><?= $this->Paginator->sort('amount','Valor Líquido') ?></th>
                    <th><?= $this->Paginator->sort('totalamount','Valor Total') ?></th>                    
                    <th><?= $this->Paginator->sort('created','Lancto') ?></th>                    
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($finreceivables as $finreceivable): ?>
                <tr>
                    <td><?= $this->Number->format($finreceivable->id) ?></td>
                    <td><?= h($finreceivable->receivabledate) ?></td>
                    <td><?= $finreceivable->has('bussinessunit') ? $this->Html->link($finreceivable->bussinessunit->description, ['controller' => 'Bussinessunits', 'action' => 'view', $finreceivable->bussinessunit->id]) : '' ?></td>
                    <td><?= $finreceivable->has('rolevent') ? $this->Html->link($finreceivable->rolevent->id, ['controller' => 'Rolevents', 'action' => 'view', $finreceivable->rolevent->id]) : '' ?></td>
                    <td><?= $finreceivable->has('finoperation') ? $this->Html->link($finreceivable->finoperation->shortdescription, ['controller' => 'Finoperations', 'action' => 'view', $finreceivable->finoperation->id]) : '' ?></td>
                    <td><?= $finreceivable->has('paymentmethod') ? $this->Html->link($finreceivable->paymentmethod->description, ['controller' => 'Paymentmethods', 'action' => 'view', $finreceivable->paymentmethod->id]) : '' ?></td>
                    <td><?= $finreceivable->has('docstatus') ? $this->Html->link($finreceivable->docstatus->description, ['controller' => 'Docstatus', 'action' => 'view', $finreceivable->docstatus->id]) : '' ?></td>
                    <td><?= h($finreceivable->reference) ?></td>
                    <td><?= h($finreceivable->shortdescription) ?></td>                    
                    <td><?= h($finreceivable->responsible) ?></td>
                    <td><?= $this->Number->format($finreceivable->discount) ?></td>
                    <td><?= $this->Number->format($finreceivable->amount) ?></td>
                    <td><?= $this->Number->format($finreceivable->totalamount) ?></td>
                    <td><?= $finreceivable->has('user') ? $this->Html->link($finreceivable->user->name, ['controller' => 'Users', 'action' => 'view', $finreceivable->user->id]) : '' ?></td>
                    <td><?= h($finreceivable->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $finreceivable->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $finreceivable->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $finreceivable->id], ['confirm' => __('Are you sure you want to delete # {0}?', $finreceivable->id)]) ?>
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
