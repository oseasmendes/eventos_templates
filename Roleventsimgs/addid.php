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
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Roleventsimgs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="roleventsimgs form content">
            <?= $this->Form->create($roleventsimg,['type' => 'file']) ?>
            <?php $paramid = $_POST['Imagem']; ?>
            <?php $this->rolevents_id = (int)$paramid; ?>
            
            <fieldset>
                <legend><?= __('Add Roleventsimg') ?></legend>
                <?php
                     echo $this->Form->control('rolevent_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control']));
                     echo $this->Form->control('image',['type' => 'file']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
