<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rolevent[]|\Cake\Collection\CollectionInterface $rolevents
 */
$roleid = $this->Identity->get('role_id');
?>


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
                                <?= $this->Html->link(__('Novo Evento'), ['action' => 'add'],['class'=>'dropdown-item'])?>
                                <?= $this->Html->link(__('Listar Notícias'), ['controller' => 'Breakingnews', 'action' => 'index'],['class'=>'dropdown-item'])?>
                                
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>  
                </div>
                </div>
                <div class="col-sm-8 col-md-7 py-4"> 
                    <ul class="nav navbar-nav" role="navigation" >                           
                                    <?= $this->Form->create(null,['class'=>'form-inline my-2 my-lg-0','type'=>'get']) ?>                
                                            <?= $this->Form->control('bussinessunit_id', ['options' => $bussinessunits,
                                                                            'empty' => 'Unidades',                                          
                                                                            'class'=>['class'=> 'form-control'],
                                                                            'label' => false                               
                                                                            ]); ?>         
                                                
                                            <div class="input-group">                        
                                                    <?= $this->Form->input('description', ['class'=>'form-control mr-sm-2',
                                                                               'style'=>'width:100%',
                                                                               'type'=>'search', 
                                                                               'label'=>['class'=>'col-xs-2 control-label'],
                                                                               'placeholder'=>'Descricao',
                                                                               'aria-label'=>'Evento',
                                                                               'label' => false,
                                                                               "autocomplete" => "off",
                                                                               'default'=>$this->request->getQuery('description')]); ?>               
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
          </div>
          <nav class="navbar navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">            
            <span class="navbar-toggler-icon"></span>      
            </button>            
          </nav>
    </div> 



<div class="rolevents index content">
    <?php if ($roleid == 1 ) : ?>
    <?= $this->Html->link(__('Novo Evento'), ['action' => 'add'], ['class' => 'button float-right']) ?>    
    <?php endif; ?>
    <h3><?= __('Eventos Programados') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>                    
                    <th><?= $this->Paginator->sort('description','Evento') ?></th>                    
                    <th><?= $this->Paginator->sort('startdate','Início') ?></th>
                    <th><?= $this->Paginator->sort('enddate','Encerramento') ?></th>
                    <th><?= $this->Paginator->sort('price','Valor') ?></th>
                    <th><?= $this->Paginator->sort('subscriptionrequired','Inscrição') ?></th>                    
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rolevents as $rolevent): ?>
                <tr>                    
                    <td><?= h($rolevent->description) ?></td>                    
                    <td><?= h($rolevent->startdate) ?></td>
                    <td><?= h($rolevent->enddate) ?></td>
                    <td><?= number_format(h($rolevent->price), 2, ',','.') ?></td>
                    <td><?= h($rolevent->subscriptionrequired) ? __('Sim') : __('Não'); ?></td>                    
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $rolevent->id]) ?>
                        <?php if ($roleid == 1 ) : ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rolevent->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rolevent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rolevent->id)]) ?>
                        <?php endif; ?>     
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
