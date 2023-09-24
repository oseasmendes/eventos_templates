<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Finentryinvoice $finentryinvoice
 * @var string[]|\Cake\Collection\CollectionInterface $rolevents
 * @var string[]|\Cake\Collection\CollectionInterface $paymentmethods
 * @var string[]|\Cake\Collection\CollectionInterface $bussinessunits
 * @var string[]|\Cake\Collection\CollectionInterface $finoperations
 * @var string[]|\Cake\Collection\CollectionInterface $docstatus
 * @var string[]|\Cake\Collection\CollectionInterface $suppliers
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
   
            
      
    <div class="column-responsive column-80">
    <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $finentryinvoice->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $finentryinvoice->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Finentryinvoices'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        <div class="finentryinvoices form content">
            <?= $this->Form->create($finentryinvoice) ?>
            <fieldset>
                <legend><?= __('Editar Despesa') ?></legend>
                <?php
                    echo $this->Form->control('rolevent_id', ['options' => $rolevents, 'empty' => true,'label'=>'Evento' ,'class'=>['class'=> 'form-control']]);
                    echo $this->Form->control('paymentmethod_id', ['options' => $paymentmethods, 'empty' => true,'label'=>'Metodo' ,'class'=>['class'=> 'form-control']]);
                    echo $this->Form->control('bussinessunit_id', ['options' => $bussinessunits, 'empty' => true,'label'=>'Congregação' ,'class'=>['class'=> 'form-control']]);
                    echo $this->Form->control('finoperation_id', ['options' => $finoperations, 'empty' => true,'label'=>'Operação' ,'class'=>['class'=> 'form-control']]);
                    echo $this->Form->control('docstatu_id', ['options' => $docstatus, 'empty' => true,'label'=>'Status' ,'class'=>['class'=> 'form-control']]);
                    echo $this->Form->control('supplier_id', ['options' => $suppliers, 'empty' => true,'label'=>'Fornecedor' ,'class'=>['class'=> 'form-control']]);
                    echo $this->Form->control('suppliername',['label'=>'Fornecedor Não Cadastrado' ,'class'=> "form-control"]);
                    echo $this->Form->control('shortdescription',['label'=>'Histórico' ,'class'=> "form-control"]);
                    echo $this->Form->control('number',['label'=>'Nr.Documento' ,'class'=> "form-control"]);
                    echo $this->Form->control('entrydate', ['label'=>'Data Entrada' ,'empty' => true,'class'=>['class'=> 'form-control']]);
                    echo $this->Form->control('issuedate', ['label'=>'Data Emissão' ,'empty' => true,'class'=>['class'=> 'form-control']]);
                    echo $this->Form->control('duedate', ['label'=>'Data Vencimento' ,'empty' => true,'class'=>['class'=> 'form-control']]);                    
                    echo $this->Form->control('totalamount',['label'=>'Valor Total' ,'class'=> "form-control"]);       
                    echo $this->Form->control('discount',['label'=>'Desconto' ,'class'=> "form-control"]);                  
                    echo $this->Form->control('amount',['label'=>'Valor Liquido' ,'class'=> "form-control"]);             
                    echo $this->Form->control('observation',['label'=>'Detalhes' ,'class'=> "form-control"]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
