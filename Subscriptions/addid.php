<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscription $subscription
 * @var \Cake\Collection\CollectionInterface|string[] $rolevents
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>          
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="subscriptions form content">
            <?= $this->Form->create($subscription) ?>           
            <?php $paramid = $_POST['inscricao']; ?>               
            <?php $this->rolevent_id = (int)$paramid; ?>
            <?php $this->user_id = $this->Identity->get('id'); ?>
            
            <fieldset>
                <legend><?= __('CONFIRMAÇÃO DA PRÉ-INSCRIÇÃO') ?></legend>
                
                <?php
                    echo $this->cell('Roleventimage::getimagename', [$this->rolevent_id,'icon']);  
                    echo "<h2>".$this->cell('Usr::getusernamebyid', [$this->user_id])."</h2>";
                    $hoje =  date("Y-m-d H:i:s");
                    echo $this->Form->control('dateissue', array('label'=>'Data Emissão: ','value'=>$hoje,'disabled'=>'disabled','empty' => true));
                    //echo $this->Form->control('rolevent_id', ['options' => $rolevents, 'empty' => true]);
                    echo  $this->Form->input('rolevent_id', array(
                        'type' => 'select',
                        'options' => $rolevents, 
                        'label' => 'Evento',
                        'value' => $paramid,  // default value
                        'escape' => false,  // prevent HTML being automatically escaped
                        'error' => false,
                        'disabled' => 'disabled',
                        'class' => 'form-control' // custom class you want to enter
                        ));                     
                   
                    echo "<p>Declaro estar ciente de que esta é a confirmação da PRÉ-INSCRIÇÃO do evento. Devendo se confirmar a INSCRIÇÃO no pagamento junto à secretaria do evento.</p>";
                ?>
            </fieldset>
            <?= $this->Form->button(__('CONFIRMAR')) ?>
            <?= $this->Form->end() ?>
        </div>        
    </div>
</div>
