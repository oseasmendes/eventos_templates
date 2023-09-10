<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Roleventsimg $roleventsimg
 * @var \Cake\Collection\CollectionInterface|string[] $rolevents
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">            
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="roleventsimgs form content">
            <?= $this->Form->create($subscriptionsdoc,['type' => 'file']) ?>
            <?php $paramid = $_POST['Imagem']; ?>
            <?php $this->subscription_id = (int)$paramid; ?>          
            <?php $this->user_id = $this->Identity->get('id'); ?>
            
            <fieldset>
                <legend><?= __('Inserir Comprovante') ?></legend>
                <?php
                     echo $this->Form->control('doctype_id', ['options' => $doctypes, 'empty' => true,'label' => 'Tipo de Comprovante']);
                     echo $this->Form->control('subscription_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'label'=>'Nro. InscricaoWeb','class'=>['class'=> 'form-control']));
                     echo $this->Form->control('image',['type' => 'file','label'=>'Anexo']);
                     echo $this->Form->control('description',['label'=>'Descricao']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
