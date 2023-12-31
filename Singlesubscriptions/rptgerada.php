<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Singlesubscription[]|\Cake\Collection\CollectionInterface $singlesubscriptions
 */
?>
<div class="container">
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
                                                                               'placeholder'=>'Nome',
                                                                               'aria-label'=>'Nome',
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
</div> 


<div class="singlesubscriptions index content">
    <?= $this->Html->link(__('Lançar Pré Inscrição'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pré-Inscrições') ?></h3>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('bussinessunit_id','Unidade') ?></th>
                    <th><?= $this->Paginator->sort('bussinessunit_id','Congregação') ?></th>
                    <th><?= $this->Paginator->sort('count','Quantidade') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($singlesubscription as $singlesubscription): ?>
                <tr>
                    <td><?= $this->Number->format($singlesubscription->bussinessunit_id) ?></td>
                    <?php if(!empty($singlesubscription->bussinessunit_id)) : ?>
                    <td><?= $this->cell('BussinessUnit::getname', [h($singlesubscription->bussinessunit_id)]) ?></td>
                    <?php else: ?>
                    <td>NÃO INFORMADO</td>
                    <?php endif; ?> 

                    <td><?= $this->Number->format($singlesubscription->count) ?></td>                    
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $singlesubscription->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $singlesubscription->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $singlesubscription->id], ['confirm' => __('Are you sure you want to delete # {0}?', $singlesubscription->id)]) ?>
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
