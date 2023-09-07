<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\City $city
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit City'), ['action' => 'edit', $city->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete City'), ['action' => 'delete', $city->id], ['confirm' => __('Are you sure you want to delete # {0}?', $city->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cities'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New City'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cities view content">
            <h3><?= h($city->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($city->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Postalcodestandard') ?></th>
                    <td><?= h($city->postalcodestandard) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telephonecode') ?></th>
                    <td><?= h($city->telephonecode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Unitsfederation') ?></th>
                    <td><?= $city->has('unitsfederation') ? $this->Html->link($city->unitsfederation->description, ['controller' => 'Unitsfederations', 'action' => 'view', $city->unitsfederation->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($city->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Originid') ?></th>
                    <td><?= $this->Number->format($city->originid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Seq') ?></th>
                    <td><?= $this->Number->format($city->seq) ?></td>
                </tr>
                <tr>
                    <th><?= __('Officialcode') ?></th>
                    <td><?= $this->Number->format($city->officialcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($city->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($city->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
