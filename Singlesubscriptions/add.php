<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Singlesubscription $singlesubscription
 * @var \Cake\Collection\CollectionInterface|string[] $rolevents
 * @var \Cake\Collection\CollectionInterface|string[] $bussinessunits
 * @var \Cake\Collection\CollectionInterface|string[] $subscriptions
 */
?>
<div class="row">

    <div class="column-responsive column-80">
        <div class="singlesubscriptions form content">
            <?= $this->Form->create($singlesubscription) ?>
            <fieldset>
                <h1 class="display-4"><strong><?= __('PRE-INSCRICAO') ?></strong></h1>
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
                    echo $this->Form->control('mobil',['label'=>'Celular','class'=> "form-control"]);
                    echo $this->Form->control('salesperson',['label'=>'Pastor Dirigente','class'=> "form-control"]);
                    echo $this->Form->control('address',['label'=>'Endereço','class'=> "form-control"]);
                    echo $this->Form->control('district',['label'=>'Bairro','class'=> "form-control"]);
                    echo $this->Form->control('city',['label'=>'Cidade','class'=> "form-control"]);                    
                    echo $this->Form->control('documentnumber',['label'=>'CPF','class'=> "form-control"]);                                                            
                    echo $this->Form->control('lgpd_ok',['label'=>$lgpd]);                    
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
