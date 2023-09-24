<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cashbookstransaction $cashbookstransaction
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cashbookstransaction'), ['action' => 'edit', $cashbookstransaction->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cashbookstransaction'), ['action' => 'delete', $cashbookstransaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cashbookstransaction->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cashbookstransactions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cashbookstransaction'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cashbookstransactions view content">
            <h3><?= h($cashbookstransaction->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Rolevent') ?></th>
                    <td><?= $cashbookstransaction->has('rolevent') ? $this->Html->link($cashbookstransaction->rolevent->description, ['controller' => 'Rolevents', 'action' => 'view', $cashbookstransaction->rolevent->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Bussinessunit') ?></th>
                    <td><?= $cashbookstransaction->has('bussinessunit') ? $this->Html->link($cashbookstransaction->bussinessunit->description, ['controller' => 'Bussinessunits', 'action' => 'view', $cashbookstransaction->bussinessunit->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($cashbookstransaction->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Documentreference') ?></th>
                    <td><?= h($cashbookstransaction->documentreference) ?></td>
                </tr>
                <tr>
                    <th><?= __('Transactiontype') ?></th>
                    <td><?= h($cashbookstransaction->transactiontype) ?></td>
                </tr>
                <tr>
                    <th><?= __('Transactioncode') ?></th>
                    <td><?= $cashbookstransaction->has('transactioncode') ? $this->Html->link($cashbookstransaction->transactioncode->description, ['controller' => 'Transactioncodes', 'action' => 'view', $cashbookstransaction->transactioncode->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Finoperation') ?></th>
                    <td><?= $cashbookstransaction->has('finoperation') ? $this->Html->link($cashbookstransaction->finoperation->shortdescription, ['controller' => 'Finoperations', 'action' => 'view', $cashbookstransaction->finoperation->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($cashbookstransaction->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Transactionid') ?></th>
                    <td><?= $this->Number->format($cashbookstransaction->transactionid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Originalinvoiceamount') ?></th>
                    <td><?= $this->Number->format($cashbookstransaction->originalinvoiceamount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Discount') ?></th>
                    <td><?= $this->Number->format($cashbookstransaction->discount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Amount') ?></th>
                    <td><?= $this->Number->format($cashbookstransaction->amount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Transactionreversalid') ?></th>
                    <td><?= $this->Number->format($cashbookstransaction->transactionreversalid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cashinflow') ?></th>
                    <td><?= $this->Number->format($cashbookstransaction->cashinflow) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cashoutflow') ?></th>
                    <td><?= $this->Number->format($cashbookstransaction->cashoutflow) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($cashbookstransaction->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($cashbookstransaction->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($cashbookstransaction->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reversal') ?></th>
                    <td><?= $cashbookstransaction->reversal ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
