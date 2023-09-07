<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\People $people
 * @var string[]|\Cake\Collection\CollectionInterface $bussinessunits
 * @var string[]|\Cake\Collection\CollectionInterface $positions
 * @var string[]|\Cake\Collection\CollectionInterface $districts
 * @var string[]|\Cake\Collection\CollectionInterface $cities
 * @var string[]|\Cake\Collection\CollectionInterface $civilstatus
 * @var string[]|\Cake\Collection\CollectionInterface $conditions
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
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
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $people->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $people->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Peoples'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
</div>
    <div class="column-responsive column-80">
        <div class="peoples form content">
            <?= $this->Form->create($people) ?>
            <fieldset>
                <legend><?= __('Edit People') ?></legend>
                <?php                                        
                    echo $this->Form->control('idocnumber',['label' => 'CPF','disabled' => 'disabled','class'=> "form-control"]);                    
                    echo $this->Form->control('bussinessunitname',['label' => 'Congregação','class'=> "form-control"]);                    
                    echo $this->Form->control('positiondescription',['label' => 'Cargo','disabled' => 'disabled','class'=> "form-control"]);
                    echo $this->Form->control('name',['label' => 'Nome','disabled' => 'disabled' ,'class'=> "form-control"]);                    
                    echo $this->Form->control('email',['label' => 'Email','class'=> "form-control"]);
                    echo $this->Form->control('street',['label' => 'Endereço','class'=> "form-control"]);
                    echo $this->Form->control('streetcomplement',['label' => 'Complemento','class'=> "form-control"]);                    
                    echo $this->Form->control('districtname',['label' => 'Bairro','class'=> "form-control"]);                                        
                    echo $this->Form->control('citiesname',['label' => 'Cidade','class'=> "form-control"]);                                        
                    echo $this->Form->control('postalcode',['label' => 'CEP','class'=> "form-control"]);
                    echo $this->Form->control('mobile',['label' => 'Celular','class'=> "form-control"]);                                                            
                    echo $this->Form->control('origindescription',['label' => 'Origem','value' => 'User','disabled' => 'disabled','class'=> "form-control"]);                    
                    
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar'), ['class'=> "btn btn-info"]) ?>
            <?= $this->Form->end() ?>
        </div>
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