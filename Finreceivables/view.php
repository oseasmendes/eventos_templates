<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Finreceivable $finreceivable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Finreceivable'), ['action' => 'edit', $finreceivable->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Finreceivable'), ['action' => 'delete', $finreceivable->id], ['confirm' => __('Are you sure you want to delete # {0}?', $finreceivable->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Finreceivables'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Finreceivable'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="finreceivables view content">
            <h3><?= h($finreceivable->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Bussinessunit') ?></th>
                    <td><?= $finreceivable->has('bussinessunit') ? $this->Html->link($finreceivable->bussinessunit->description, ['controller' => 'Bussinessunits', 'action' => 'view', $finreceivable->bussinessunit->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Rolevent') ?></th>
                    <td><?= $finreceivable->has('rolevent') ? $this->Html->link($finreceivable->rolevent->description, ['controller' => 'Rolevents', 'action' => 'view', $finreceivable->rolevent->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Finoperation') ?></th>
                    <td><?= $finreceivable->has('finoperation') ? $this->Html->link($finreceivable->finoperation->shortdescription, ['controller' => 'Finoperations', 'action' => 'view', $finreceivable->finoperation->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Paymentmethod') ?></th>
                    <td><?= $finreceivable->has('paymentmethod') ? $this->Html->link($finreceivable->paymentmethod->description, ['controller' => 'Paymentmethods', 'action' => 'view', $finreceivable->paymentmethod->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Docstatus') ?></th>
                    <td><?= $finreceivable->has('docstatus') ? $this->Html->link($finreceivable->docstatus->description, ['controller' => 'Docstatus', 'action' => 'view', $finreceivable->docstatus->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Reference') ?></th>
                    <td><?= h($finreceivable->reference) ?></td>
                </tr>
                <tr>
                    <th><?= __('Shortdescription') ?></th>
                    <td><?= h($finreceivable->shortdescription) ?></td>
                </tr>
                <tr>
                    <th><?= __('Responsible') ?></th>
                    <td><?= h($finreceivable->responsible) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $finreceivable->has('user') ? $this->Html->link($finreceivable->user->name, ['controller' => 'Users', 'action' => 'view', $finreceivable->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($finreceivable->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('People Id') ?></th>
                    <td><?= $this->Number->format($finreceivable->people_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Discount') ?></th>
                    <td><?= $this->Number->format($finreceivable->discount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Amount') ?></th>
                    <td><?= $this->Number->format($finreceivable->amount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Totalamount') ?></th>
                    <td><?= $this->Number->format($finreceivable->totalamount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Createdby') ?></th>
                    <td><?= $this->Number->format($finreceivable->createdby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifiedby') ?></th>
                    <td><?= $this->Number->format($finreceivable->modifiedby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Receivabledate') ?></th>
                    <td><?= h($finreceivable->receivabledate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($finreceivable->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($finreceivable->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Observation') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($finreceivable->observation)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Finreceivablesdetails') ?></h4>
                <?php if (!empty($finreceivable->finreceivablesdetails)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Finreceivable Id') ?></th>
                            <th><?= __('Order') ?></th>
                            <th><?= __('Item Id') ?></th>
                            <th><?= __('Partnumber') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Quantity') ?></th>
                            <th><?= __('Unitvalue') ?></th>
                            <th><?= __('Discount') ?></th>
                            <th><?= __('Subtotal') ?></th>
                            <th><?= __('Ordernumber') ?></th>
                            <th><?= __('Orderitem') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($finreceivable->finreceivablesdetails as $finreceivablesdetails) : ?>
                        <tr>
                            <td><?= h($finreceivablesdetails->id) ?></td>
                            <td><?= h($finreceivablesdetails->finreceivable_id) ?></td>
                            <td><?= h($finreceivablesdetails->order) ?></td>
                            <td><?= h($finreceivablesdetails->item_id) ?></td>
                            <td><?= h($finreceivablesdetails->partnumber) ?></td>
                            <td><?= h($finreceivablesdetails->description) ?></td>
                            <td><?= h($finreceivablesdetails->quantity) ?></td>
                            <td><?= h($finreceivablesdetails->unitvalue) ?></td>
                            <td><?= h($finreceivablesdetails->discount) ?></td>
                            <td><?= h($finreceivablesdetails->subtotal) ?></td>
                            <td><?= h($finreceivablesdetails->ordernumber) ?></td>
                            <td><?= h($finreceivablesdetails->orderitem) ?></td>
                            <td><?= h($finreceivablesdetails->created) ?></td>
                            <td><?= h($finreceivablesdetails->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Finreceivablesdetails', 'action' => 'view', $finreceivablesdetails->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Finreceivablesdetails', 'action' => 'edit', $finreceivablesdetails->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Finreceivablesdetails', 'action' => 'delete', $finreceivablesdetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $finreceivablesdetails->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
