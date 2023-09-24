<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Singlesubscription $singlesubscription
 * @var string[]|\Cake\Collection\CollectionInterface $rolevents
 * @var string[]|\Cake\Collection\CollectionInterface $bussinessunits
 * @var string[]|\Cake\Collection\CollectionInterface $subscriptions
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $singlesubscription->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $singlesubscription->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Singlesubscriptions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="singlesubscriptions form content">
            <?= $this->Form->create($singlesubscription) ?>
            <fieldset>
                <legend><?= __('Editar Pré-Inscrição') ?></legend>
                <?php
                    $lgpd = " De acordo com as Leis 12.965/2014 e 13.709/2018, que regulam o uso da internet e o tratamento de dados pessoais no Brasil, 
                    ao me inscrever autorizo a Igreja Evangélica Assembléia de Deus - Ministério do Belém em São José dos Campos a enviar notificações
                    por email e outros meios e concordo com a sua Política de Privacidade.";
                    echo $this->Form->control('rolevent_id', ['options' => $rolevents, 'empty' => true,'label'=>'Evento','class'=>['class'=> 'form-control']]);
                    echo $this->Form->control('fullname',['label'=>'Nome Completo','class'=> "form-control"]);
                    echo $this->Form->control('email', ['label'=>'Endereço de E-mail','class'=> "form-control"]);
                    echo $this->Form->control('bussinessunit_id', ['options' => $bussinessunits, 'empty' => true,'label'=>'Congregação ADBELEM SJC','class'=>['class'=> 'form-control']]);
                    echo $this->Form->control('organizationname',['label'=>'(Se não faz parte da ADBELEM SJC) Qual é igreja procedente?','class'=> "form-control"]);
                    echo $this->Form->control('position',['label'=>'Cargo:','class'=> "form-control"]);
                    echo $this->Form->control('subscription.mobile',['label'=>'Celular','class'=> "form-control"]);
                    echo $this->Form->control('salesperson',['label'=>'Pastor Dirigente','class'=> "form-control"]);
                    echo $this->Form->control('address',['label'=>'Endereço','class'=> "form-control"]);
                    echo $this->Form->control('district',['label'=>'Bairro','class'=> "form-control"]);
                    echo $this->Form->control('city',['label'=>'Cidade','class'=> "form-control"]);                    
                    echo $this->Form->control('documentnumber',['label'=>'CPF','class'=> "form-control"]);         
                    echo $this->Form->control('statusflag',['options' => ['GERADA_COM_SUCESSO'=>'GERADA_COM_SUCESSO'],'label'=>'Status','class'=> "form-control"]);         
                    echo $this->Form->control('lgpd_ok',['label'=>$lgpd]);                    
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
