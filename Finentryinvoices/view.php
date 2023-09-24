<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Finentryinvoice $finentryinvoice
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Finentryinvoice'), ['action' => 'edit', $finentryinvoice->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Finentryinvoice'), ['action' => 'delete', $finentryinvoice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $finentryinvoice->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Finentryinvoices'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Finentryinvoice'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="finentryinvoices view content">
            <h3><?= h($finentryinvoice->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Rolevent') ?></th>
                    <td><?= $finentryinvoice->has('rolevent') ? $this->Html->link($finentryinvoice->rolevent->description, ['controller' => 'Rolevents', 'action' => 'view', $finentryinvoice->rolevent->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Paymentmethod') ?></th>
                    <td><?= $finentryinvoice->has('paymentmethod') ? $this->Html->link($finentryinvoice->paymentmethod->description, ['controller' => 'Paymentmethods', 'action' => 'view', $finentryinvoice->paymentmethod->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Bussinessunit') ?></th>
                    <td><?= $finentryinvoice->has('bussinessunit') ? $this->Html->link($finentryinvoice->bussinessunit->description, ['controller' => 'Bussinessunits', 'action' => 'view', $finentryinvoice->bussinessunit->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Finoperation') ?></th>
                    <td><?= $finentryinvoice->has('finoperation') ? $this->Html->link($finentryinvoice->finoperation->shortdescription, ['controller' => 'Finoperations', 'action' => 'view', $finentryinvoice->finoperation->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Docstatus') ?></th>
                    <td><?= $finentryinvoice->has('docstatus') ? $this->Html->link($finentryinvoice->docstatus->description, ['controller' => 'Docstatus', 'action' => 'view', $finentryinvoice->docstatus->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Supplier') ?></th>
                    <td><?= $finentryinvoice->has('supplier') ? $this->Html->link($finentryinvoice->supplier->shortname, ['controller' => 'Suppliers', 'action' => 'view', $finentryinvoice->supplier->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Shortdescription') ?></th>
                    <td><?= h($finentryinvoice->shortdescription) ?></td>
                </tr>
                <tr>
                    <th><?= __('Number') ?></th>
                    <td><?= h($finentryinvoice->number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Suppliername') ?></th>
                    <td><?= h($finentryinvoice->suppliername) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $finentryinvoice->has('user') ? $this->Html->link($finentryinvoice->user->name, ['controller' => 'Users', 'action' => 'view', $finentryinvoice->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($finentryinvoice->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Totalamount') ?></th>
                    <td><?= $this->Number->format($finentryinvoice->totalamount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Createdby') ?></th>
                    <td><?= $this->Number->format($finentryinvoice->createdby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updatedby') ?></th>
                    <td><?= $this->Number->format($finentryinvoice->updatedby) ?></td>
                </tr>
                <tr>
                    <th><?= __('Entrydate') ?></th>
                    <td><?= h($finentryinvoice->entrydate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Issuedate') ?></th>
                    <td><?= h($finentryinvoice->issuedate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Duedate') ?></th>
                    <td><?= h($finentryinvoice->duedate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($finentryinvoice->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($finentryinvoice->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Observation') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($finentryinvoice->observation)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Finentryinvoicesdetails') ?></h4>
                <?php if (!empty($finentryinvoice->finentryinvoicesdetails)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Finentryinvoice Id') ?></th>
                            <th><?= __('Order') ?></th>
                            <th><?= __('Item Id') ?></th>
                            <th><?= __('Partnumber') ?></th>
                            <th><?= __('Vendorcode') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Quantity') ?></th>
                            <th><?= __('Unitvalue') ?></th>
                            <th><?= __('Discount') ?></th>
                            <th><?= __('Interest') ?></th>
                            <th><?= __('Subtotal') ?></th>
                            <th><?= __('Ordernumber') ?></th>
                            <th><?= __('Orderitem') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($finentryinvoice->finentryinvoicesdetails as $finentryinvoicesdetails) : ?>
                        <tr>
                            <td><?= h($finentryinvoicesdetails->id) ?></td>
                            <td><?= h($finentryinvoicesdetails->finentryinvoice_id) ?></td>
                            <td><?= h($finentryinvoicesdetails->order) ?></td>
                            <td><?= h($finentryinvoicesdetails->item_id) ?></td>
                            <td><?= h($finentryinvoicesdetails->partnumber) ?></td>
                            <td><?= h($finentryinvoicesdetails->vendorcode) ?></td>
                            <td><?= h($finentryinvoicesdetails->description) ?></td>
                            <td><?= h($finentryinvoicesdetails->quantity) ?></td>
                            <td><?= h($finentryinvoicesdetails->unitvalue) ?></td>
                            <td><?= h($finentryinvoicesdetails->discount) ?></td>
                            <td><?= h($finentryinvoicesdetails->interest) ?></td>
                            <td><?= h($finentryinvoicesdetails->subtotal) ?></td>
                            <td><?= h($finentryinvoicesdetails->ordernumber) ?></td>
                            <td><?= h($finentryinvoicesdetails->orderitem) ?></td>
                            <td><?= h($finentryinvoicesdetails->created) ?></td>
                            <td><?= h($finentryinvoicesdetails->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Finentryinvoicesdetails', 'action' => 'view', $finentryinvoicesdetails->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Finentryinvoicesdetails', 'action' => 'edit', $finentryinvoicesdetails->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Finentryinvoicesdetails', 'action' => 'delete', $finentryinvoicesdetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $finentryinvoicesdetails->id)]) ?>
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
