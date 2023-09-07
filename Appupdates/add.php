<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Appupdate $appupdate
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Appupdates'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="appupdates form content">
            <?= $this->Form->create($appupdate) ?>
            <fieldset>
                <legend><?= __('Add Appupdate') ?></legend>
                <?php
                    echo $this->Form->control('doc');
                    echo $this->Form->control('module');
                    echo $this->Form->control('description');
                    echo $this->Form->control('technicaldescription');
                    echo $this->Form->control('prd');
                    echo $this->Form->control('prddate', ['empty' => true]);
                    echo $this->Form->control('tst');
                    echo $this->Form->control('tstdate', ['empty' => true]);
                    echo $this->Form->control('dev');
                    echo $this->Form->control('devdate', ['empty' => true]);
                    echo $this->Form->control('linereference');
                    echo $this->Form->control('linereferenceuntil');
                    echo $this->Form->control('status');
                    echo $this->Form->control('valor');
                    echo $this->Form->control('ordem');
                    echo $this->Form->control('changetype');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
