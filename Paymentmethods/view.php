<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paymentmethod $paymentmethod
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Paymentmethod'), ['action' => 'edit', $paymentmethod->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Paymentmethod'), ['action' => 'delete', $paymentmethod->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paymentmethod->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Paymentmethods'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Paymentmethod'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="paymentmethods view content">
            <h3><?= h($paymentmethod->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($paymentmethod->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($paymentmethod->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($paymentmethod->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($paymentmethod->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Finentryinvoices') ?></h4>
                <?php if (!empty($paymentmethod->finentryinvoices)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Paymentmethod Id') ?></th>
                            <th><?= __('Bussinessunit Id') ?></th>
                            <th><?= __('Finoperation Id') ?></th>
                            <th><?= __('Docstatu Id') ?></th>
                            <th><?= __('Supplier Id') ?></th>
                            <th><?= __('Shortdescription') ?></th>
                            <th><?= __('Number') ?></th>
                            <th><?= __('Issuedate') ?></th>
                            <th><?= __('Duedate') ?></th>
                            <th><?= __('Suppliername') ?></th>
                            <th><?= __('Totalamount') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Observation') ?></th>
                            <th><?= __('Createdby') ?></th>
                            <th><?= __('Updatedby') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($paymentmethod->finentryinvoices as $finentryinvoices) : ?>
                        <tr>
                            <td><?= h($finentryinvoices->id) ?></td>
                            <td><?= h($finentryinvoices->paymentmethod_id) ?></td>
                            <td><?= h($finentryinvoices->bussinessunit_id) ?></td>
                            <td><?= h($finentryinvoices->finoperation_id) ?></td>
                            <td><?= h($finentryinvoices->docstatu_id) ?></td>
                            <td><?= h($finentryinvoices->supplier_id) ?></td>
                            <td><?= h($finentryinvoices->shortdescription) ?></td>
                            <td><?= h($finentryinvoices->number) ?></td>
                            <td><?= h($finentryinvoices->issuedate) ?></td>
                            <td><?= h($finentryinvoices->duedate) ?></td>
                            <td><?= h($finentryinvoices->suppliername) ?></td>
                            <td><?= h($finentryinvoices->totalamount) ?></td>
                            <td><?= h($finentryinvoices->user_id) ?></td>
                            <td><?= h($finentryinvoices->created) ?></td>
                            <td><?= h($finentryinvoices->modified) ?></td>
                            <td><?= h($finentryinvoices->observation) ?></td>
                            <td><?= h($finentryinvoices->createdby) ?></td>
                            <td><?= h($finentryinvoices->updatedby) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Finentryinvoices', 'action' => 'view', $finentryinvoices->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Finentryinvoices', 'action' => 'edit', $finentryinvoices->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Finentryinvoices', 'action' => 'delete', $finentryinvoices->id], ['confirm' => __('Are you sure you want to delete # {0}?', $finentryinvoices->id)]) ?>
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
