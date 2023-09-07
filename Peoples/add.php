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
            <fieldset>
                <legend><?= __('Add People') ?></legend>
                <?php
                    echo $this->Form->control('originid');
                    echo $this->Form->control('bussinessunit_id', ['options' => $bussinessunits, 'empty' => true]);
                    echo $this->Form->control('bussinessunitname');
                    echo $this->Form->control('position_id', ['options' => $positions, 'empty' => true]);
                    echo $this->Form->control('positiondescription');
                    echo $this->Form->control('name');
                    echo $this->Form->control('gender');
                    echo $this->Form->control('email');
                    echo $this->Form->control('street');
                    echo $this->Form->control('streetcomplement');
                    echo $this->Form->control('district_id', ['options' => $districts, 'empty' => true]);
                    echo $this->Form->control('districtname');
                    echo $this->Form->control('unitfederation');
                    echo $this->Form->control('citie_id', ['options' => $cities, 'empty' => true]);
                    echo $this->Form->control('citiesname');
                    echo $this->Form->control('civilstatu_id', ['options' => $civilstatus, 'empty' => true]);
                    echo $this->Form->control('civilstatusdescrition');
                    echo $this->Form->control('postalcode');
                    echo $this->Form->control('mobile');
                    echo $this->Form->control('phonehome');
                    echo $this->Form->control('whatsapp');
                    echo $this->Form->control('birthdate', ['empty' => true]);
                    echo $this->Form->control('photopath');
                    echo $this->Form->control('photoname');
                    echo $this->Form->control('origin');
                    echo $this->Form->control('origindescription');
                    echo $this->Form->control('condition_id', ['options' => $conditions, 'empty' => true]);
                    echo $this->Form->control('conditiondescription');
                    echo $this->Form->control('integrationguid');
                    echo $this->Form->control('preinput');
                    echo $this->Form->control('idocnumber');
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
