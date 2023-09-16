<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Singlesubscription[]|\Cake\Collection\CollectionInterface $singlesubscriptions
 */
?>
<div class="container">
                <div class="col-sm-8 col-md-7 py-4"> 
                    <ul class="nav navbar-nav" role="navigation" >                           
                                            <?= $this->Form->create(null,['class'=>'form-inline my-2 my-lg-0','type'=>'get']) ?>                
                                            <div class="input-group">                        
                                            <?= $this->Form->input('description', ['class'=>'form-control mr-sm-2',
                                                                               'style'=>'width:100%',
                                                                               'type'=>'search', 
                                                                               'label'=>['class'=>'col-xs-2 control-label'],
                                                                               'placeholder'=>'Número da Referência',
                                                                               'aria-label'=>'referencia',
                                                                               'label' => false,
                                                                               "autocomplete" => "off",
                                                                               'default'=>$this->request->getQuery('description')]); ?>     
                                                
  
                                            </div>          
                                             <div class="input-group">         
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar
                                                        </button>
                                                    </div>            
                                                    <?= $this->Form->end() ?>
                                            </div>
                        </div>
                    </ul>
                </div>              
</div>
          

<div class="container">
    <div class="singlesubscriptions index content">
        <?= $this->Html->link(__('Lançar Pré Inscrição'), ['action' => 'add'], ['class' => 'button float-right']) ?>
        <h3><?= __('Pré-Inscrição') ?></h3>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id','PreInsc#') ?></th>
                        <th><?= $this->Paginator->sort('rolevent_id','Evento') ?></th>                   
                        <th><?= $this->Paginator->sort('fullname','Nome') ?></th>                    
                        <th><?= $this->Paginator->sort('bussinessunit_id','Congregação') ?></th>
                        <th><?= $this->Paginator->sort('organizationname','Denominação') ?></th>                                                     
                        <th><?= $this->Paginator->sort('statusflag','Status') ?></th>
                        <th><?= $this->Paginator->sort('subscription_id','Conversão') ?></th>                    
                        <th><?= $this->Paginator->sort('modified','Atualizado') ?></th>
                        <th><?= $this->Paginator->sort('people_id','CodMe') ?></th>                    
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($singlesubscriptions as $singlesubscription): ?>
                    <tr>
                        <td><?= $this->Number->format($singlesubscription->id) ?></td>
                        <td><?= $singlesubscription->has('rolevent') ? $this->Html->link($singlesubscription->rolevent->description, ['controller' => 'Rolevents', 'action' => 'view', $singlesubscription->rolevent->id]) : '' ?></td>                   
                        <td><?= h($singlesubscription->fullname) ?></td>                    
                        <td><?= $singlesubscription->has('bussinessunit') ? $this->Html->link($singlesubscription->bussinessunit->description, ['controller' => 'Bussinessunits', 'action' => 'view', $singlesubscription->bussinessunit->id]) : '' ?></td>
                        <td><?= h($singlesubscription->organizationname) ?></td>                                                            
                        <td><?= h($singlesubscription->statusflag) ?></td>                    
                        <td><?= $singlesubscription->has('subscription') ? $this->Html->link($singlesubscription->subscription->id, ['controller' => 'Subscriptions', 'action' => 'view', $singlesubscription->subscription->id]) : '' ?></td>                    
                        <td><?= h($singlesubscription->modified) ?></td>
                        <td><?= $this->Number->format($singlesubscription->people_id) ?></td>                    
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $singlesubscription->id]) ?>
                            <?php if ($singlesubscription->statusflag == 'GERADA_COM_SUCESSO' ) : ?>                         
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $singlesubscription->id], ['confirm' => __('Are you sure you want to delete # {0}?', $singlesubscription->id)]) ?>
                            <?php endif; ?>       
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
      
    </div>
</div>