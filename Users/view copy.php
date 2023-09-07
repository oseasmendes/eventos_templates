<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>          
            <?= $this->Html->link(__('Altera Senha'), ['action' => 'changepassword', $user->id],['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($user->username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Docnumber') ?></th>
                    <td><?= h($user->docnumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Password') ?></th>
                    <td><?= h($user->password) ?></td>
                </tr>              
                <tr>
                    <th><?= __('Profile') ?></th>
                    <td><?= $user->has('profile') ? $this->Html->link($user->profile->description, ['controller' => 'Profiles', 'action' => 'view', $user->profile->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= $user->has('role') ? $this->Html->link($user->role->role, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Mobile') ?></th>
                    <td><?= h($user->mobile) ?></td>
                </tr>            
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($user->modified) ?></td>
                </tr>
            </table>
            <?php if (empty($user->peoples)) : ?>
            <div class="row">
                    <div class="col-3"> 
                        <?= $this->Form->create($user, ['url'=>['controller' => 'peoples', 'action' => 'addid',$user->id],'']) ?>   
                            <?= $this->Form->control('User',['default'=> $this->Number->format($user->id,['places' => 0]),'type' => 'hidden']); ?>                                  
                            <?= $this->Form->button('DADOS PESSOAIS INCOMPLETOS - CLIQUE AQUI',['class'=>'btn-dark btn-sm btn-block']) ?>
                        <?= $this->Form->end() ?> 
                    </div>
            </div>
            <?php endif; ?>
            <div class="related">
               
                <?php if (!empty($user->peoples)) : ?>
                <h4><?= __('Dados da Secretaria') ?></h4>    
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
                        <?php foreach ($user->peoples as $peoples) : ?>
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
            <div class="related">
              
                <?php if (!empty($user->subscriptions)) : ?>
                <h4><?= __('Pré Inscrições Relacionadas') ?></h4>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Event Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Activeflag') ?></th>
                            <th><?= __('Statusflag') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->subscriptions as $subscriptions) : ?>
                        <tr>
                            <td><?= h($subscriptions->id) ?></td>
                            <td><?= h($subscriptions->date) ?></td>
                            <td><?= h($subscriptions->event_id) ?></td>
                            <td><?= h($subscriptions->user_id) ?></td>
                            <td><?= h($subscriptions->activeflag) ?></td>
                            <td><?= h($subscriptions->statusflag) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Subscriptions', 'action' => 'view', $subscriptions->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Subscriptions', 'action' => 'edit', $subscriptions->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Subscriptions', 'action' => 'delete', $subscriptions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subscriptions->id)]) ?>
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
