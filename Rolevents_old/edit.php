<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rolevent $rolevent
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $rolevent->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $rolevent->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Rolevents'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="rolevents form content">
            <?= $this->Form->create($rolevent) ?>
            <fieldset>
                <legend><?= __('Edit Rolevent') ?></legend>
                <?php
                    echo $this->Form->control('description');
                    echo $this->Form->control('details');
                    echo $this->Form->control('activeflag');
                    echo $this->Form->control('startdate', ['empty' => true]);
                    echo $this->Form->control('enddate', ['empty' => true]);
                    echo $this->Form->control('subscexpirationdate', ['empty' => true]);
                    echo $this->Form->control('eventexpirationdate', ['empty' => true]);
                    echo $this->Form->control('price');
                    echo $this->Form->control('subscriptionrequired');

                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
