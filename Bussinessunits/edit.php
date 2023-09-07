<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bussinessunit $bussinessunit
 * @var string[]|\Cake\Collection\CollectionInterface $orgs
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bussinessunit->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bussinessunit->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Bussinessunits'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bussinessunits form content">
            <?= $this->Form->create($bussinessunit) ?>
            <fieldset>
                <legend><?= __('Edit Bussinessunit') ?></legend>
                <?php
                    echo $this->Form->control('oringid');
                    echo $this->Form->control('description');
                    echo $this->Form->control('seq');
                    echo $this->Form->control('org_id', ['options' => $orgs, 'empty' => true]);
                    echo $this->Form->control('address');
                    echo $this->Form->control('postalcode');
                    echo $this->Form->control('district');
                    echo $this->Form->control('city');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('responsible');
                    echo $this->Form->control('sector');
                    echo $this->Form->control('email');
                    echo $this->Form->control('active');
                    echo $this->Form->control('general');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
