<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Finentryinvoicesdetail $finentryinvoicesdetail
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Finentryinvoicesdetail'), ['action' => 'edit', $finentryinvoicesdetail->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Finentryinvoicesdetail'), ['action' => 'delete', $finentryinvoicesdetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $finentryinvoicesdetail->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Finentryinvoicesdetails'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Finentryinvoicesdetail'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="finentryinvoicesdetails view content">
            <h3><?= h($finentryinvoicesdetail->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Finentryinvoice') ?></th>
                    <td><?= $finentryinvoicesdetail->has('finentryinvoice') ? $this->Html->link($finentryinvoicesdetail->finentryinvoice->shortdescription, ['controller' => 'Finentryinvoices', 'action' => 'view', $finentryinvoicesdetail->finentryinvoice->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Partnumber') ?></th>
                    <td><?= h($finentryinvoicesdetail->partnumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vendorcode') ?></th>
                    <td><?= h($finentryinvoicesdetail->vendorcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($finentryinvoicesdetail->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ordernumber') ?></th>
                    <td><?= h($finentryinvoicesdetail->ordernumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($finentryinvoicesdetail->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Order') ?></th>
                    <td><?= $this->Number->format($finentryinvoicesdetail->order) ?></td>
                </tr>
                <tr>
                    <th><?= __('Item Id') ?></th>
                    <td><?= $this->Number->format($finentryinvoicesdetail->item_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $this->Number->format($finentryinvoicesdetail->quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Unitvalue') ?></th>
                    <td><?= $this->Number->format($finentryinvoicesdetail->unitvalue) ?></td>
                </tr>
                <tr>
                    <th><?= __('Discount') ?></th>
                    <td><?= $this->Number->format($finentryinvoicesdetail->discount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Interest') ?></th>
                    <td><?= $this->Number->format($finentryinvoicesdetail->interest) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subtotal') ?></th>
                    <td><?= $this->Number->format($finentryinvoicesdetail->subtotal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Orderitem') ?></th>
                    <td><?= $this->Number->format($finentryinvoicesdetail->orderitem) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($finentryinvoicesdetail->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($finentryinvoicesdetail->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
