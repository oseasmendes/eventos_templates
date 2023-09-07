<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\People[]|\Cake\Collection\CollectionInterface $peoples
 */
?>


<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                        <h3 class="card-title">Participantes</h3>
                       
                        </div>
                            <div class="card-body">
                                    <div class="row" > 
                                    </div>



<div class="peoples index content">

<div class="pos-f-t">
          <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-light p-4">
                <div>
                    <div class="col-sm-8 col-md-7 py-4">                   
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Opções
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <?= $this->Html->link(__('Novo Participante'), ['action' => 'addmn'],['class'=>'dropdown-item'])?>
                                

                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>  
                </div>
                </div>
                <div class="col-sm-8 col-md-7 py-4"> 
                    <ul class="nav navbar-nav" role="navigation" >    
                    <div class="row">                       
                                            <?= $this->Form->create(null,['class'=>'form-inline my-2 my-lg-0','type'=>'get']) ?>                
                                           <div class="input-group"> 
                                                    <?= $this->Form->control('bussinessunit_id', ['options' => $bussinessunits,
                                                                            'empty' => 'Congregações',                                          
                                                                            'class'=>['class'=> 'form-control'],
                                                                            'label' => false                               
                                                                            ]); ?>         
                                                
                                            </div>
                                            <div class="input-group">                       
                                                    <?= $this->Form->input('name', ['class'=>'form-control mr-sm-2',
                                                                               'style'=>'width:50%',
                                                                               'type'=>'search', 
                                                                               'label'=>['class'=>'col-xs-2 control-label'],
                                                                               'placeholder'=>'Nome',
                                                                               'aria-label'=>'Nome',
                                                                               'label' => false,
                                                                               "autocomplete" => "off",
                                                                               'default'=>$this->request->getQuery('name')]); ?>    
                                            </div>           
                                             <div class="input-group">                        
                                                    <?= $this->Form->input('idocnumber', ['class'=>'form-control mr-sm-2',
                                                                               'style'=>'width:100%',
                                                                               'type'=>'search', 
                                                                               'label'=>['class'=>'col-xs-2 control-label'],
                                                                               'placeholder'=>'CPF',
                                                                               'aria-label'=>'CPF',
                                                                               'label' => false,
                                                                               "autocomplete" => "off",
                                                                               'default'=>$this->request->getQuery('idocnumber')]); ?>     
                                              
                                            </div>
                                            <div class="input-group">                        
                                                     <div class="input-group-btn">
                                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar
                                                        </button>
                                                    </div>            
                                            <div>
                                    <?= $this->Form->end() ?>
                                </div>

                        </div>
                        </div>
                    </ul>
                </div>              
            </div>
          </div>
          <nav class="navbar navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">            
            <span class="navbar-toggler-icon"></span>      
            </button>            
          </nav>
    </div> 

    
    <div class="table">
        <table>
            <thead class="thead-light">
                <tr>
                    <th><?= $this->Paginator->sort('id','Seq') ?></th>                    
                    <th><?= $this->Paginator->sort('originid','Codigo') ?></th>                    
                    <th><?= $this->Paginator->sort('positiondescription','Abrev') ?></th>
                    <th><?= $this->Paginator->sort('name','Nome') ?></th>
                    <th><?= $this->Paginator->sort('birthdate','Dt. Nasc.') ?></th>
                    <th><?= $this->Paginator->sort('bussinessunitname','Congregação') ?></th>
                    <th><?= $this->Paginator->sort('idocnumber','CPF') ?></th>                    
                    <th><?= $this->Paginator->sort('user_id','User') ?></th>                    
                    <th><?= $this->Paginator->sort('modified','Alteração') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($peoples as $people): ?>
                <tr>
                    <td><?= h($people->id) ?></td>
                    <td><?= h($people->originid) ?></td>
                    <td><?= h($people->positiondescription) ?></td>
                    <td><?= h($people->name) ?></td>
                    <td><?= h($people->birthdate) ?></td>
                    <td><?= h($people->bussinessunitname) ?></td>
                    <td><?= h($people->idocnumber) ?></td>                   
                    <td><?= $people->has('user') ? $this->Html->link($people->user->name, ['controller' => 'Users', 'action' => 'view', $people->user->id]) : '' ?></td>
                    <td><?= date('d/m/Y',strtotime($people->modified)) ?></td>                
                    
                    <td class="actions">
                        <div class="row">    
                            <?= $this->Html->link(__('View'), ['action' => 'viewsub', $people->id],['class'=>'btn btn-outline-primary']) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $people->id],['class'=>'btn btn-outline-info btn-sm']) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $people->id],['class'=>'btn btn-outline-danger btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $people->id)]) ?>
                        </div>
                    </td>
                </tr>
                
                
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>




</div>                                                                   
                            </div>
                    </div>
                </div>
            </div>
        </div> 
        </div>      
    </section>