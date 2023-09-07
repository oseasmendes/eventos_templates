<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Unitsfederation $unitsfederation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Unitsfederation'), ['action' => 'edit', $unitsfederation->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Unitsfederation'), ['action' => 'delete', $unitsfederation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $unitsfederation->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Unitsfederations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Unitsfederation'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="unitsfederations view content">
            <h3><?= h($unitsfederation->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($unitsfederation->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Initials') ?></th>
                    <td><?= h($unitsfederation->initials) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($unitsfederation->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($unitsfederation->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($unitsfederation->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Cities') ?></h4>
                <?php if (!empty($unitsfederation->cities)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Originid') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Seq') ?></th>
                            <th><?= __('Postalcodestandard') ?></th>
                            <th><?= __('Telephonecode') ?></th>
                            <th><?= __('Unitsfederation Id') ?></th>
                            <th><?= __('Officialcode') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($unitsfederation->cities as $cities) : ?>
                        <tr>
                            <td><?= h($cities->id) ?></td>
                            <td><?= h($cities->originid) ?></td>
                            <td><?= h($cities->description) ?></td>
                            <td><?= h($cities->created) ?></td>
                            <td><?= h($cities->modified) ?></td>
                            <td><?= h($cities->seq) ?></td>
                            <td><?= h($cities->postalcodestandard) ?></td>
                            <td><?= h($cities->telephonecode) ?></td>
                            <td><?= h($cities->unitsfederation_id) ?></td>
                            <td><?= h($cities->officialcode) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Cities', 'action' => 'view', $cities->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Cities', 'action' => 'edit', $cities->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cities', 'action' => 'delete', $cities->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cities->id)]) ?>
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
