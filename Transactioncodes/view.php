<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Transactioncode $transactioncode
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Transactioncode'), ['action' => 'edit', $transactioncode->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Transactioncode'), ['action' => 'delete', $transactioncode->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transactioncode->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Transactioncodes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Transactioncode'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="transactioncodes view content">
            <h3><?= h($transactioncode->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($transactioncode->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($transactioncode->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($transactioncode->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($transactioncode->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Cashbookstransactions') ?></h4>
                <?php if (!empty($transactioncode->cashbookstransactions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Rolevent Id') ?></th>
                            <th><?= __('Bussinessunit Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Documentreference') ?></th>
                            <th><?= __('Transactionid') ?></th>
                            <th><?= __('Originalinvoiceamount') ?></th>
                            <th><?= __('Discount') ?></th>
                            <th><?= __('Amount') ?></th>
                            <th><?= __('Transactiontype') ?></th>
                            <th><?= __('Reversal') ?></th>
                            <th><?= __('Transactionreversalid') ?></th>
                            <th><?= __('Transactioncode Id') ?></th>
                            <th><?= __('Cashinflow') ?></th>
                            <th><?= __('Cashoutflow') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($transactioncode->cashbookstransactions as $cashbookstransactions) : ?>
                        <tr>
                            <td><?= h($cashbookstransactions->id) ?></td>
                            <td><?= h($cashbookstransactions->rolevent_id) ?></td>
                            <td><?= h($cashbookstransactions->bussinessunit_id) ?></td>
                            <td><?= h($cashbookstransactions->date) ?></td>
                            <td><?= h($cashbookstransactions->description) ?></td>
                            <td><?= h($cashbookstransactions->documentreference) ?></td>
                            <td><?= h($cashbookstransactions->transactionid) ?></td>
                            <td><?= h($cashbookstransactions->originalinvoiceamount) ?></td>
                            <td><?= h($cashbookstransactions->discount) ?></td>
                            <td><?= h($cashbookstransactions->amount) ?></td>
                            <td><?= h($cashbookstransactions->transactiontype) ?></td>
                            <td><?= h($cashbookstransactions->reversal) ?></td>
                            <td><?= h($cashbookstransactions->transactionreversalid) ?></td>
                            <td><?= h($cashbookstransactions->transactioncode_id) ?></td>
                            <td><?= h($cashbookstransactions->cashinflow) ?></td>
                            <td><?= h($cashbookstransactions->cashoutflow) ?></td>
                            <td><?= h($cashbookstransactions->created) ?></td>
                            <td><?= h($cashbookstransactions->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Cashbookstransactions', 'action' => 'view', $cashbookstransactions->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Cashbookstransactions', 'action' => 'edit', $cashbookstransactions->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cashbookstransactions', 'action' => 'delete', $cashbookstransactions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cashbookstransactions->id)]) ?>
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
