<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\District $district
 * @var string[]|\Cake\Collection\CollectionInterface $cities
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $district->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $district->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Districts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="districts form content">
            <?= $this->Form->create($district) ?>
            <fieldset>
                <legend><?= __('Edit District') ?></legend>
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
