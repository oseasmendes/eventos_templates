<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Itemtype $itemtype
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Itemtype'), ['action' => 'edit', $itemtype->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Itemtype'), ['action' => 'delete', $itemtype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemtype->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Itemtypes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Itemtype'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="itemtypes view content">
            <h3><?= h($itemtype->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($itemtype->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($itemtype->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($itemtype->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($itemtype->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Items') ?></h4>
                <?php if (!empty($itemtype->items)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Partnumber') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Unit') ?></th>
                            <th><?= __('Itemtype Id') ?></th>
                            <th><?= __('Stockcontrol') ?></th>
                            <th><?= __('Minvalue') ?></th>
                            <th><?= __('Maxvalue') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($itemtype->items as $items) : ?>
                        <tr>
                            <td><?= h($items->id) ?></td>
                            <td><?= h($items->partnumber) ?></td>
                            <td><?= h($items->description) ?></td>
                            <td><?= h($items->unit) ?></td>
                            <td><?= h($items->itemtype_id) ?></td>
                            <td><?= h($items->stockcontrol) ?></td>
                            <td><?= h($items->minvalue) ?></td>
                            <td><?= h($items->maxvalue) ?></td>
                            <td><?= h($items->created) ?></td>
                            <td><?= h($items->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Items', 'action' => 'view', $items->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Items', 'action' => 'edit', $items->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Items', 'action' => 'delete', $items->id], ['confirm' => __('Are you sure you want to delete # {0}?', $items->id)]) ?>
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
