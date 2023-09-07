<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\District $district
 * @var \Cake\Collection\CollectionInterface|string[] $cities
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Districts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="districts form content">
            <?= $this->Form->create($district) ?>
            <fieldset>
                <legend><?= __('Add District') ?></legend>
                <?php
                    echo $this->Form->control('description');
                    echo $this->Form->control('originid');
                    echo $this->Form->control('citie_id', ['options' => $cities, 'empty' => true]);
                    echo $this->Form->control('seq');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
