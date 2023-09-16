<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscription $subscription
 */
$roleid = $this->Identity->get('role_id');
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?php if ($roleid == 1 ) : ?>
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Subscription'), ['action' => 'edit', $subscription->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Subscription'), ['action' => 'delete', $subscription->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subscription->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Subscriptions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Subscription'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
            <?php endif; ?>       
        </div>
    </aside>
                       
    <div class="column-responsive column-80">
        <div class="subscriptions view content">
        <div class="row">
                            <?php  
                              
                                if ((!empty($subscription->statusflag))) {      
                                    echo '<div class="col-3"> ';
                                    echo $this->Form->create($subscription, ['url'=>['controller' => 'subscriptionsdocs', 'action' => 'addid',$subscription->id],'']);    
                                    echo   $this->Form->control('Imagem',['default'=> $this->Number->format($subscription->id,['places' => 0]),'type' => 'hidden']);                                  
                                    echo $this->Form->button('Anexar Comprovante',['class'=>'btn-dark btn-sm btn-block']);
                                    echo  $this->Form->end() ; 
                                    echo '</div>';
                                } else {

                                    echo '<div class="col-3"> ';
                                    echo $this->Form->create($subscription, ['url'=>['controller' => 'subscriptions', 'action' => 'convertsub',$subscription->id],'']);    
                                    echo $this->Form->control('ConverterPre',['default'=> $this->Number->format($subscription->id,['places' => 0]),'type' => 'hidden']);                                  
                                    echo $this->Form->button('Converter Pré Inscrição',['class'=>'btn-dark btn-sm btn-block']);
                                    echo  $this->Form->end() ; 
                                    echo '</div>';
                                }
                            ?>
                        </div>
            <h3><?= "Pré-Inscrição: #".h($subscription->id) ?></h3>
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
                <blockquote>
                    <h2><?= 'OS ANEXOS DEVERÃO ESTAR EM ARQUIVOS DE IMAGEM - JPG, PNG'; ?></h2>
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
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($subscription->subscriptionsdocs as $subscriptionsdocs) : ?>
                        <tr>
                            <td><?= h($subscriptionsdocs->id) ?></td>                                                                               
                            <td><?= h($subscriptionsdocs->description) ?></td>                            
                            <td><?= h($subscriptionsdocs->created) ?></td>                            
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Subscriptionsdocs', 'action' => 'view', $subscriptionsdocs->id]) ?>
                                <?php if ($roleid == 1 ) : ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Subscriptionsdocs', 'action' => 'edit', $subscriptionsdocs->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Subscriptionsdocs', 'action' => 'delete', $subscriptionsdocs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subscriptionsdocs->id)]) ?>
                                <?php endif; ?>           
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>                           
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
               
                <?php if (!empty($subscription->subscriptionsflows) && ($roleid == 1 )) : ?>
                    <h4><?= __('Related Subscriptionsflows') ?></h4>
                    <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Subscription Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Action') ?></th>
                            <th><?= __('Statusflag') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($subscription->subscriptionsflows as $subscriptionsflows) : ?>
                        <tr>
                            <td><?= h($subscriptionsflows->id) ?></td>
                            <td><?= h($subscriptionsflows->subscription_id) ?></td>
                            <td><?= h($subscriptionsflows->date) ?></td>
                            <td><?= h($subscriptionsflows->action) ?></td>
                            <td><?= h($subscriptionsflows->statusflag) ?></td>
                            <td><?= h($subscriptionsflows->created) ?></td>
                            <td><?= h($subscriptionsflows->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Subscriptionsflows', 'action' => 'view', $subscriptionsflows->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Subscriptionsflows', 'action' => 'edit', $subscriptionsflows->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Subscriptionsflows', 'action' => 'delete', $subscriptionsflows->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subscriptionsflows->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
