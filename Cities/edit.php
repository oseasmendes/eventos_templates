<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\City $city
 * @var string[]|\Cake\Collection\CollectionInterface $unitsfederations
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $city->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $city->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Cities'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cities form content">
            <?= $this->Form->create($city) ?>
            <fieldset>
                <legend><?= __('Edit City') ?></legend>
                <?php
                    echo $this->Form->control('originid');
                    echo $this->Form->control('description');
                    echo $this->Form->control('seq');
                    echo $this->Form->control('postalcodestandard');
                    echo $this->Form->control('telephonecode');
                    echo $this->Form->control('unitsfederation_id', ['options' => $unitsfederations, 'empty' => true]);
                    echo $this->Form->control('officialcode');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
