<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscription $subscription
 * @var string[]|\Cake\Collection\CollectionInterface $rolevents
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $subscription->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $subscription->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Subscriptions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="subscriptions form content">
            <?= $this->Form->create($subscription) ?>
            <fieldset>
                <legend><?= __('Edit Subscription') ?></legend>
                <?php
                    echo $this->Form->control('subscriptionstype_id', ['options' => $subscriptionstypes, 'empty' => true]);
                    echo $this->Form->control('rolevent_id', array('options' => $rolevents,'disabled' => 'disabled','class'=>['class'=> 'form-control']));
                    //echo $this->Form->control('rolevent_id', ['options' => $rolevents, 'empty' => true,'disable' => 'disable']);
                    echo $this->Form->control('dateissue', ['empty' => true]);
                    echo $this->Form->control('description', array('disabled' => 'disabled'));
                    echo $this->Form->control('mobile', array('disabled' => 'disabled'));
                    echo $this->Form->control('singlesubscription_id', array('disabled' => 'disabled'));
                    echo $this->Form->control('paymentvalue');                   
                    echo $this->Form->control('activeflag');                    
                    echo $this->Form->control('statusflag', ['options' => ['APROVADA'=>'APROVADA','EM_REVISAO'=>'EM_REVISAO','REJEITADA'=>'REJEITADA'],'class'=>['class'=> 'form-control'] , 'empty' => true]);
                    echo $this->Form->control('summary');
                    echo $this->Form->control('user_id', array('options' => $users,'disabled' => 'disabled','class'=>['class'=> 'form-control']));
                    //echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
