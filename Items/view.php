<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item $item
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Item'), ['action' => 'edit', $item->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Item'), ['action' => 'delete', $item->id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Items'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Item'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="items view content">
            <h3><?= h($item->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Partnumber') ?></th>
                    <td><?= h($item->partnumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($item->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Unit') ?></th>
                    <td><?= h($item->unit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Itemtype') ?></th>
                    <td><?= $item->has('itemtype') ? $this->Html->link($item->itemtype->description, ['controller' => 'Itemtypes', 'action' => 'view', $item->itemtype->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($item->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Minvalue') ?></th>
                    <td><?= $this->Number->format($item->minvalue) ?></td>
                </tr>
                <tr>
                    <th><?= __('Maxvalue') ?></th>
                    <td><?= $this->Number->format($item->maxvalue) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($item->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($item->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Stockcontrol') ?></th>
                    <td><?= $item->stockcontrol ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Finentryinvoicesdetails') ?></h4>
                <?php if (!empty($item->finentryinvoicesdetails)) : ?>
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
                        <?php foreach ($item->finentryinvoicesdetails as $finentryinvoicesdetails) : ?>
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
            <div class="related">
                <h4><?= __('Related Finreceivablesdetails') ?></h4>
                <?php if (!empty($item->finreceivablesdetails)) : ?>
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
                        <?php foreach ($item->finreceivablesdetails as $finreceivablesdetails) : ?>
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
