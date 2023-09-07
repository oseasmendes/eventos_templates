<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Org $org
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $org->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $org->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Orgs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orgs form content">
            <?= $this->Form->create($org) ?>
            <fieldset>
                <legend><?= __('Edit Org') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('address');
                    echo $this->Form->control('district');
                    echo $this->Form->control('zipcode');
                    echo $this->Form->control('city');
                    echo $this->Form->control('contactfone');
                    echo $this->Form->control('email');
                    echo $this->Form->control('modifed', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
