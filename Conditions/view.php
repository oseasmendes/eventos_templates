<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Condition $condition
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Condition'), ['action' => 'edit', $condition->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Condition'), ['action' => 'delete', $condition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $condition->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Conditions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Condition'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conditions view content">
            <h3><?= h($condition->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($condition->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($condition->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Originid') ?></th>
                    <td><?= $this->Number->format($condition->originid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Seq') ?></th>
                    <td><?= $this->Number->format($condition->seq) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($condition->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($condition->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Peoples') ?></h4>
                <?php if (!empty($condition->peoples)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Originid') ?></th>
                            <th><?= __('Bussinessunit Id') ?></th>
                            <th><?= __('Bussinessunitname') ?></th>
                            <th><?= __('Position Id') ?></th>
                            <th><?= __('Positiondescription') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Gender') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Street') ?></th>
                            <th><?= __('Streetcomplement') ?></th>
                            <th><?= __('District Id') ?></th>
                            <th><?= __('Districtname') ?></th>
                            <th><?= __('Unitfederation') ?></th>
                            <th><?= __('Citie Id') ?></th>
                            <th><?= __('Citiesname') ?></th>
                            <th><?= __('Civilstatu Id') ?></th>
                            <th><?= __('Civilstatusdescrition') ?></th>
                            <th><?= __('Postalcode') ?></th>
                            <th><?= __('Mobile') ?></th>
                            <th><?= __('Phonehome') ?></th>
                            <th><?= __('Whatsapp') ?></th>
                            <th><?= __('Birthdate') ?></th>
                            <th><?= __('Photopath') ?></th>
                            <th><?= __('Photoname') ?></th>
                            <th><?= __('Origin') ?></th>
                            <th><?= __('Origindescription') ?></th>
                            <th><?= __('Condition Id') ?></th>
                            <th><?= __('Conditiondescription') ?></th>
                            <th><?= __('Integrationguid') ?></th>
                            <th><?= __('Preinput') ?></th>
                            <th><?= __('Idocnumber') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($condition->peoples as $peoples) : ?>
                        <tr>
                            <td><?= h($peoples->id) ?></td>
                            <td><?= h($peoples->originid) ?></td>
                            <td><?= h($peoples->bussinessunit_id) ?></td>
                            <td><?= h($peoples->bussinessunitname) ?></td>
                            <td><?= h($peoples->position_id) ?></td>
                            <td><?= h($peoples->positiondescription) ?></td>
                            <td><?= h($peoples->name) ?></td>
                            <td><?= h($peoples->gender) ?></td>
                            <td><?= h($peoples->email) ?></td>
                            <td><?= h($peoples->street) ?></td>
                            <td><?= h($peoples->streetcomplement) ?></td>
                            <td><?= h($peoples->district_id) ?></td>
                            <td><?= h($peoples->districtname) ?></td>
                            <td><?= h($peoples->unitfederation) ?></td>
                            <td><?= h($peoples->citie_id) ?></td>
                            <td><?= h($peoples->citiesname) ?></td>
                            <td><?= h($peoples->civilstatu_id) ?></td>
                            <td><?= h($peoples->civilstatusdescrition) ?></td>
                            <td><?= h($peoples->postalcode) ?></td>
                            <td><?= h($peoples->mobile) ?></td>
                            <td><?= h($peoples->phonehome) ?></td>
                            <td><?= h($peoples->whatsapp) ?></td>
                            <td><?= h($peoples->birthdate) ?></td>
                            <td><?= h($peoples->photopath) ?></td>
                            <td><?= h($peoples->photoname) ?></td>
                            <td><?= h($peoples->origin) ?></td>
                            <td><?= h($peoples->origindescription) ?></td>
                            <td><?= h($peoples->condition_id) ?></td>
                            <td><?= h($peoples->conditiondescription) ?></td>
                            <td><?= h($peoples->integrationguid) ?></td>
                            <td><?= h($peoples->preinput) ?></td>
                            <td><?= h($peoples->idocnumber) ?></td>
                            <td><?= h($peoples->user_id) ?></td>
                            <td><?= h($peoples->created) ?></td>
                            <td><?= h($peoples->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Peoples', 'action' => 'view', $peoples->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Peoples', 'action' => 'edit', $peoples->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Peoples', 'action' => 'delete', $peoples->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peoples->id)]) ?>
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
