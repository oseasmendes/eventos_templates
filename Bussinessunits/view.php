<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bussinessunit $bussinessunit
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Bussinessunit'), ['action' => 'edit', $bussinessunit->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Bussinessunit'), ['action' => 'delete', $bussinessunit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bussinessunit->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Bussinessunits'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Bussinessunit'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bussinessunits view content">
            <h3><?= h($bussinessunit->description) ?></h3>
            <table>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($bussinessunit->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Org') ?></th>
                    <td><?= $bussinessunit->has('org') ? $this->Html->link($bussinessunit->org->name, ['controller' => 'Orgs', 'action' => 'view', $bussinessunit->org->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($bussinessunit->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Postalcode') ?></th>
                    <td><?= h($bussinessunit->postalcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('District') ?></th>
                    <td><?= h($bussinessunit->district) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($bussinessunit->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($bussinessunit->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Responsible') ?></th>
                    <td><?= h($bussinessunit->responsible) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sector') ?></th>
                    <td><?= h($bussinessunit->sector) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($bussinessunit->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($bussinessunit->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Oringid') ?></th>
                    <td><?= $this->Number->format($bussinessunit->oringid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Seq') ?></th>
                    <td><?= $this->Number->format($bussinessunit->seq) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($bussinessunit->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($bussinessunit->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $bussinessunit->active ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('General') ?></th>
                    <td><?= $bussinessunit->general ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            

            <div class="related">
                <h4><?= __('Eventos Programados') ?></h4>
                <?php if (!empty($bussinessunit->rolevents)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Startdate') ?></th>
                            <th><?= __('Enddate') ?></th>
                            <th><?= __('Price') ?></th>
                            <th><?= __('Insc','Subscriptionrequired') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($bussinessunit->rolevents as $obj) : ?>
                        <tr>
                            <td><?= h($obj->id) ?></td>
                            <td><?= h($obj->description) ?></td>
                            <td><?= h($obj->startdate) ?></td>
                            <td><?= h($obj->enddate) ?></td>
                            <td><?= h($obj->price) ?></td>
                            <td><?= h($obj->subscriptionrequired) ?></td>
                            <td><?= h($obj->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Rolevents', 'action' => 'view', $obj->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Rolevents', 'action' => 'edit', $obj->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Rolevents', 'action' => 'delete', $obj->id], ['confirm' => __('Are you sure you want to delete # {0}?', $obj->id)]) ?>
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
