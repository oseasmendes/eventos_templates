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
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Peoples'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="peoples form content">
            <?= $this->Form->create($people) ?>
            <?php $paramid = $_POST['User']; ?>            
            <fieldset>
                <legend><?= __('Add People') ?></legend>
                <?php                
                    echo "<h2>".$this->cell('Usr::getusernamebyid', [(int)$paramid])."</h2>";
                    echo $this->Form->control('bussinessunit_id', ['options' => $bussinessunits, 'empty' => true]);                    
                    echo $this->Form->control('position_id', ['options' => $positions, 'empty' => true]);                                        
                    echo $this->Form->control('gender');                    
                    echo $this->Form->control('street');
                    echo $this->Form->control('streetcomplement');                    
                    echo $this->Form->control('districtname');
                    echo $this->Form->control('unitfederation');                    
                    echo $this->Form->control('citiesname');
                    echo $this->Form->control('civilstatu_id', ['options' => $civilstatus, 'empty' => true]);                    
                    echo $this->Form->control('postalcode');                    
                    echo $this->Form->control('phonehome');
                    echo $this->Form->control('whatsapp');
                    echo $this->Form->control('birthdate', ['empty' => true]);                                                                                                                                            
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
