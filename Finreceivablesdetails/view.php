<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Finreceivablesdetail $finreceivablesdetail
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Finreceivablesdetail'), ['action' => 'edit', $finreceivablesdetail->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Finreceivablesdetail'), ['action' => 'delete', $finreceivablesdetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $finreceivablesdetail->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Finreceivablesdetails'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Finreceivablesdetail'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="finreceivablesdetails view content">
            <h3><?= h($finreceivablesdetail->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Finreceivable') ?></th>
                    <td><?= $finreceivablesdetail->has('finreceivable') ? $this->Html->link($finreceivablesdetail->finreceivable->shortdescription, ['controller' => 'Finreceivables', 'action' => 'view', $finreceivablesdetail->finreceivable->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Item') ?></th>
                    <td><?= $finreceivablesdetail->has('item') ? $this->Html->link($finreceivablesdetail->item->description, ['controller' => 'Items', 'action' => 'view', $finreceivablesdetail->item->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Partnumber') ?></th>
                    <td><?= h($finreceivablesdetail->partnumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($finreceivablesdetail->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ordernumber') ?></th>
                    <td><?= h($finreceivablesdetail->ordernumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($finreceivablesdetail->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Order') ?></th>
                    <td><?= $this->Number->format($finreceivablesdetail->order) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $this->Number->format($finreceivablesdetail->quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Unitvalue') ?></th>
                    <td><?= $this->Number->format($finreceivablesdetail->unitvalue) ?></td>
                </tr>
                <tr>
                    <th><?= __('Discount') ?></th>
                    <td><?= $this->Number->format($finreceivablesdetail->discount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subtotal') ?></th>
                    <td><?= $this->Number->format($finreceivablesdetail->subtotal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Orderitem') ?></th>
                    <td><?= $this->Number->format($finreceivablesdetail->orderitem) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($finreceivablesdetail->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($finreceivablesdetail->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
