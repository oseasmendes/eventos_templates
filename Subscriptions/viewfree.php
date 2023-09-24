<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscription $subscription
 */

?>
<div class="row">
   
                       
    <div class="column-responsive column-80">
        <div class="subscriptions view content">
      
            <h3><?= "Inscrição: #".h($subscription->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Eventos') ?></th>
                    <td><?= $subscription->has('rolevent') ? $this->Html->link($subscription->rolevent->description, ['controller' => 'Rolevents', 'action' => 'view', $subscription->rolevent->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $subscription->has('user') ? $this->Html->link($subscription->user->name, ['controller' => 'Users', 'action' => 'view', $subscription->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($subscription->statusflag) ?></td>
                </tr>           
                <tr>
                    <th><?= __('Data Emissão') ?></th>
                    <td><?= h($subscription->dateissue) ?></td>
                </tr> 
                <tr>
                    <th><?= __('Pré Inscrição') ?></th>
                    <td><strong><?= h($subscription->singlesubscription_id) ?></strong></td>
                </tr>              
            </table>
                <h4>Resumo</h4>                            
                <blockquote class="blockquote-reverse">
                    <p><?= h($subscription->summary) ?></p>                                
                </blockquote>
                       
            <div class="related">
                <h4><?= __('Comprovantes') ?></h4>
                <?php if (!empty($subscription->subscriptionsdocs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>                                                     
                            <th><?= __('Resumo') ?></th>                           
                            <th><?= __('Lancto:') ?></th>                            
                           
                        </tr>
                        <?php foreach ($subscription->subscriptionsdocs as $subscriptionsdocs) : ?>
                        <tr>
                            <td><?= h($subscriptionsdocs->id) ?></td>                                                                               
                            <td><?= h($subscriptionsdocs->description) ?></td>                            
                            <td><?= h($subscriptionsdocs->created) ?></td>                            
                           
                        </tr>
                        <?php endforeach; ?>
                    </table>                           
                </div>
                <?php endif; ?>
            </div> 
        </div>
    </div>
</div>
