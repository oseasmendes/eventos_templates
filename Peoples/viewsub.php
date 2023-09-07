<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\People $people
 */

$roleid = $this->Identity->get('role_id');
$userid = $this->Identity->get('id');
?>

<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                       
                        </div>
                            <div class="card-body">
                                    <div class="row" > 
                                    </div>



<div class="row">
    <div class="col-2">
                
            <?= $this->Html->link(__('Edit People'), ['action' => 'edit', $people->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete People'), ['action' => 'delete', $people->id], ['confirm' => __('Are you sure you want to delete # {0}?', $people->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Peoples'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New People'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
      
    </div>
</div>
    <div class="row">
    <div class="column-responsive">
        <div class="peoples view large-9 medium-8 columns content">
            <h3><?= h($people->name) ?></h3>                                 
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($people->id) ?></td>
                </tr>
               <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= h($people->originid) ?></td>
                </tr> 
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($people->name) ?></td>
                </tr>   
                <tr>
                    <th><?= __('Data de Nascimento') ?></th>
                    <td><?= h($people->birthdate) ?></td>
                </tr>
                <tr>
                    <th><?= __('CPF') ?></th>
                    <td><?= h($people->idocnumber) ?></td>
                </tr>
           
                <tr>
                    <th><?= __('Igreja Procedente') ?></th>
                    <td><?= h($people->bussinessunitname) ?></td>
                </tr>
           
                <tr>
                    <th><?= __('Posição') ?></th>
                    <td><?= h($people->positiondescription) ?></td>
                </tr>                             
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($people->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Endereço') ?></th>
                    <td><?= h($people->street) ?></td>
                </tr>
                <tr>
                    <th><?= __('Complemento') ?></th>
                    <td><?= h($people->streetcomplement) ?></td>
                </tr>
           
                <tr>
                    <th><?= __('Bairro') ?></th>
                    <td><?= h($people->districtname) ?></td>
                </tr>              
                <tr>
                    <th><?= __('Cidade/Interno') ?></th>
                    <td><?= $people->has('city') ? $this->Html->link($people->city->description, ['controller' => 'Cities', 'action' => 'view', $people->city->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Cidade') ?></th>
                    <td><?= h($people->citiesname) ?></td>
                </tr>                                
                <tr>
                    <th><?= __('CEP') ?></th>
                    <td><?= h($people->postalcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefone Celular') ?></th>
                    <td><?= h($people->mobile) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefone Fixo') ?></th>
                    <td><?= h($people->phonehome) ?></td>
                </tr>                                
                <tr>
                    <th><?= __('Origem') ?></th>
                    <td><?= h($people->origindescription) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status/Interno') ?></th>
                    <td><?= $people->has('condition') ? $this->Html->link($people->condition->description, ['controller' => 'Conditions', 'action' => 'view', $people->condition->id]) : '' ?></td>
                </tr>                                
                
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $people->has('user') ? $this->Html->link($people->user->name, ['controller' => 'Users', 'action' => 'view', $people->user->id]) : '' ?></td>
                </tr>               
               
                <tr>
                    <th><?= __('OrigemID') ?></th>
                    <td><?= $this->Number->format($people->origin) ?></td>
                </tr>               
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($people->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($people->modified) ?></td>
                </tr>
             
            </table>    
            
</div>
       
        </div>
        
</div>

                        <div class="row">
                                <?php
                                    echo '<div class="col-2"> ';
                                    echo $this->Form->create($people, ['url'=>[ 'controller' => 'Subscriptions','action'=>'addsub',$people->id],'']);    
                                    echo   $this->Form->control('SubsGene',['default'=> $this->Number->format($people->id,['places' => 0]),'type' => 'hidden']);                                  
                                    echo $this->Form->button('GERAR INSCRIÇÃO PARA EVENTOS',['class'=>'btn-success btn-sm btn-block']);
                                    echo  $this->Form->end() ; 
                                    echo '</div>';
                                ?>
                        </div>
                            

                        <div class="related">                
                <?php if (!empty($people->subscriptions)) : ?>
                <h4><?= __('Incrições Relacionadas') ?></h4>
                <div class="table">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>                            
                            <th><?= __('Emissão','Dateissue') ?></th>                                                                                    
                            <th><?= __('CodMe','Rolevent') ?></th>
                            <th><?= __('NrControl','Controlnumber') ?></th>   
                            <th><?= __('Valor','paymentvalue') ?></th>      
                            <th><?= __('Status','statusflag') ?></th>      
                            <th><?= __('Atualização','Modified') ?></th>                            
                            <th class="actions"><?= __('Opções') ?></th>
                        </tr>
                        <?php foreach ($people->subscriptions as $subscriptions) : ?>
                        <tr>
                            <td><?= h($subscriptions->id) ?></td>                            
                            <td><?= h($subscriptions->dateissue) ?></td>                                                                                                                
                            <td><?= h($subscriptions->rolevent_id) ?></td>
                            <td><?= h($subscriptions->controlnumber) ?></td>   
                            <td><?= h($subscriptions->paymentvalue) ?></td>     
                            <td><?= h($subscriptions->statusflag) ?></td>     
                            <td><?= h($subscriptions->modified) ?></td>                            
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
                </div>
            </div>
        </div> 
        </div>      
    </section>
