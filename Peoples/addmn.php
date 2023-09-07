<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\People $people
 * @var \Cake\Collection\CollectionInterface|string[] $bussinessunits
 * @var \Cake\Collection\CollectionInterface|string[] $positions
 * @var \Cake\Collection\CollectionInterface|string[] $districts
 * @var \Cake\Collection\CollectionInterface|string[] $cities
 * @var \Cake\Collection\CollectionInterface|string[] $civilstatus
 * @var \Cake\Collection\CollectionInterface|string[] $conditions
 * @var \Cake\Collection\CollectionInterface|string[] $users
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
</div>
    <div class="column-responsive column-80">
        <div class="peoples form content">
            <?= $this->Form->create($people) ?>
            <fieldset>
                <legend><?= __('Novo Participante') ?></legend>
                <?php                    
                    echo $this->Form->control('idocnumber',['label' => 'CPF','class'=> "form-control"]);                    
                    echo $this->Form->control('bussinessunit_id', ['options' => $bussinessunits, 'empty' => true,'label'=>'Congregação (Interno)','class'=>['class'=> 'form-control']]);
                    echo $this->Form->control('bussinessunitname',['label'=>'Igreja Procedente','class'=> "form-control"]);
                    echo $this->Form->control('position_id', ['options' => $positions, 'empty' => true,'label'=>'Posição (Interna)','class'=>['class'=> 'form-control']]);
                    echo $this->Form->control('positiondescription',['label'=>'Posição','class'=> "form-control"]);
                    echo $this->Form->control('name',['label'=>'Nome','class'=> "form-control"]);                    
                    echo $this->Form->control('email',['class'=> "form-control"]);
                    echo $this->Form->control('street',['label'=>'Endereço','class'=> "form-control"]);
                    echo $this->Form->control('streetcomplement',['label'=>'Complemento','class'=> "form-control"]);
                    echo $this->Form->control('district_id', ['options' => $districts, 'empty' => true,'label' => 'Bairro (Interno)','class'=>['class'=> 'form-control']]);
                    echo $this->Form->control('districtname',['label'=>'Bairro','class'=> "form-control"]);                    
                    echo $this->Form->control('citie_id', ['options' => $cities, 'empty' => true,'label' => 'Cidade (Interno)','class'=>['class'=> 'form-control']]);
                    echo $this->Form->control('citiesname',['empty' => true,'label' => 'Cidade','class'=> "form-control"]);
                    echo $this->Form->control('civilstatu_id', ['options' => $civilstatus, 'empty' => true,'label' => 'Estado Civil (Interno)','class'=>['class'=> 'form-control']]);
                    echo $this->Form->control('civilstatusdescrition',['empty' => true,'label' => 'Estado Civil','class'=> "form-control"]);
                    echo $this->Form->control('postalcode',['empty' => true,'label' => 'CEP','class'=> "form-control"]);
                    echo $this->Form->control('mobile',['empty' => true,'label' => 'Celular','class'=> "form-control"]);
                    echo $this->Form->control('phonehome',['empty' => true,'label' => 'Telefone Fixo','class'=> "form-control"]);                    
                    echo $this->Form->control('birthdate', ['empty' => true,'label' => 'Dt. Nascimento','class'=>['class'=> 'form-control']]);                                                                     
                    
               ?>
            </fieldset>
            
            <div class="row">               
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
        </div>      
    </section>