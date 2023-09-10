<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Org $org
 */

$roleid = $this->Identity->get('role_id');
$userid = $this->Identity->get('id');

?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
        <?php if ($roleid == 1 ) : ?>
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Org'), ['action' => 'edit', $org->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Org'), ['action' => 'delete', $org->id], ['confirm' => __('Are you sure you want to delete # {0}?', $org->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Orgs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Org'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        <?php endif; ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orgs view content">
            <h3><?= "#".$this->Number->format($org->id)."-".h($org->name) ?></h3>
            <table>               
                <tr>
                    <th><?= __('Endereço Principal') ?></th>
                    <td><?= h($org->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bairro') ?></th>
                    <td><?= h($org->district) ?></td>
                </tr>
                <tr>
                    <th><?= __('CEP') ?></th>
                    <td><?= h($org->zipcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cidade') ?></th>
                    <td><?= h($org->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefone') ?></th>
                    <td><?= h($org->contactfone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($org->email) ?></td>
                </tr>             
                <tr>
                    <th><?= __('Atualizado Em') ?></th>
                    <td><?= h($org->modifed) ?></td>
                </tr>
            </table>
            <div class="related">                
                <?php if (!empty($org->bussinessunits)) : ?>
                <h4><?= __('Congregações do Campo') ?></h4>    
                <div class="table-responsive">
                    <table>
                        <tr>                                       
                            <th><?= __('Congregação','Description') ?></th>
                            <th><?= __('Telefone','Phone') ?></th>
                            <th><?= __('Bairro','District') ?></th>
                            <th><?= __('Setor','Sector') ?></th>
                            <th><?= __('Cidade','City') ?></th>
                            <?php if ($roleid == 1 ) : ?>
                            <th class="actions"><?= __('Opções') ?></th>
                            <?php endif; ?>
                        </tr>
                        <?php foreach ($org->bussinessunits as $bussinessunits) : ?>
                        <tr>
                                                
                            <td><?= h($bussinessunits->description) ?></td>
                            <td><?= h($bussinessunits->phone) ?></td>
                            <td><?= h($bussinessunits->district) ?></td>
                            <td><?= h($bussinessunits->sector) ?></td>
                            <td><?= h($bussinessunits->city) ?></td>
                            <?php if ($roleid == 1 ) : ?>
                            <td class="actions">
                            
                                <?= $this->Html->link(__('View'), ['controller' => 'Bussinessunits', 'action' => 'view', $bussinessunits->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Bussinessunits', 'action' => 'edit', $bussinessunits->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Bussinessunits', 'action' => 'delete', $bussinessunits->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bussinessunits->id)]) ?>
                            
                            </td>
                            <?php endif; ?>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
