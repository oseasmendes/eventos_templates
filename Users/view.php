<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
$roleid = $this->Identity->get('role_id');
$userid = $this->Identity->get('id');
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Opções') ?></h4>
            <?= $this->Html->link(__('Tela Principal'), ['controller'=>'News','action' => 'home'], ['class' => 'side-nav-item']) ?>          
            <?= $this->Html->link(__('Eventos Programados'), ['controller'=>'Rolevents','action' => 'index'], ['class' => 'side-nav-item']) ?>          
            <?= $this->Html->link(__('Editar Usuário'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>          
            <?= $this->Html->link(__('Altera Senha'), ['action' => 'changepassword', $user->id],['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->name) ?></h3>
            <table>               
                <tr>
                    <th><?= __('CPF') ?></th>
                    <td><?= h($user->docnumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>                                
                <tr>
                    <th><?= __('Celular') ?></th>
                    <td><?= h($user->mobile) ?></td>
                </tr>            
                <tr>
                    <th><?= __('Gerado Em') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Alterado Em') ?></th>
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
                            <th><?= __('CodM','Originid') ?></th>                            
                            <th><?= __('Unidade','Bussinessunitname') ?></th>
                            <th><?= __('Cargo','Positiondescription') ?></th>
                            <th><?= __('Celular','Mobile') ?></th>                                                        
                            <th><?= __('Status','Conditiondescription') ?></th>                                                                                    
                            <th><?= __('Updated','Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->peoples as $peoples) : ?>
                        <tr>                            
                            <td><?= h($peoples->originid) ?></td>                            
                            <td><?= h($peoples->bussinessunitname) ?></td>                            
                            <td><?= h($peoples->positiondescription) ?></td>                                                        
                            <td><?= h($peoples->mobile) ?></td>                                                        
                            <td><?= h($peoples->conditiondescription) ?></td>                                                                                    
                            <td><?= h($peoples->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Peoples', 'action' => 'view', $peoples->id]) ?>                                                                
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Peoples', 'action' => 'editmn', $peoples->id]) ?>
                                <?php if ($roleid == 1 ) : ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Peoples', 'action' => 'delete', $peoples->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peoples->id)]) ?>
                                <?php endif; ?>
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
                            <th><?= __('Data','Date') ?></th>
                            <th><?= __('Evento','Rolevent_Id') ?></th>                                                        
                            <th><?= __('Status','Statusflag') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->subscriptions as $subscriptions) : ?>
                        <tr>
                            <td><?= h($subscriptions->id) ?></td>
                            <td><?= h($subscriptions->date) ?></td>
                            <td><?= h($subscriptions->rolevent_id) ?></td>                                                        
                            <td><?= h($subscriptions->statusflag) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Subscriptions', 'action' => 'view', $subscriptions->id]) ?>
                                <?php if ($roleid == 1 ) : ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Subscriptions', 'action' => 'edit', $subscriptions->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Subscriptions', 'action' => 'delete', $subscriptions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subscriptions->id)]) ?>
                                <?php endif; ?>    
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
