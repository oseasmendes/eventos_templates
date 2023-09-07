<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Org $org
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Org'), ['action' => 'edit', $org->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Org'), ['action' => 'delete', $org->id], ['confirm' => __('Are you sure you want to delete # {0}?', $org->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Orgs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Org'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orgs view content">
            <h3><?= h($org->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($org->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($org->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('District') ?></th>
                    <td><?= h($org->district) ?></td>
                </tr>
                <tr>
                    <th><?= __('Zipcode') ?></th>
                    <td><?= h($org->zipcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($org->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contactfone') ?></th>
                    <td><?= h($org->contactfone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($org->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($org->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($org->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifed') ?></th>
                    <td><?= h($org->modifed) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Bussinessunits') ?></h4>
                <?php if (!empty($org->bussinessunits)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Oringid') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Seq') ?></th>
                            <th><?= __('Org Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($org->bussinessunits as $bussinessunits) : ?>
                        <tr>
                            <td><?= h($bussinessunits->id) ?></td>
                            <td><?= h($bussinessunits->oringid) ?></td>
                            <td><?= h($bussinessunits->description) ?></td>
                            <td><?= h($bussinessunits->created) ?></td>
                            <td><?= h($bussinessunits->modified) ?></td>
                            <td><?= h($bussinessunits->seq) ?></td>
                            <td><?= h($bussinessunits->org_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Bussinessunits', 'action' => 'view', $bussinessunits->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Bussinessunits', 'action' => 'edit', $bussinessunits->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Bussinessunits', 'action' => 'delete', $bussinessunits->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bussinessunits->id)]) ?>
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
