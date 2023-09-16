<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscriptionsdoc $subscriptionsdoc
 */
$roleid = $this->Identity->get('role_id');
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
        <?php if ($roleid == 1 ) : ?>
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Subscriptionsdoc'), ['action' => 'edit', $subscriptionsdoc->id], ['class' => 'side-nav-item']) ?>           
            <?= $this->Html->link(__('List Subscriptionsdocs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Subscriptionsdoc'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
            
        <?php endif; ?>  
        <?php if ($subscriptionsdoc->statusflag == "ENVIADO" ) : ?>
                <?= $this->Form->postLink(__('Excluir Comprovante'), ['action' => 'delete', $subscriptionsdoc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subscriptionsdoc->id)], ['class' => 'side-nav-item']) ?>                
            <?php endif; ?>                 
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="subscriptionsdocs view content">


            <h3><?= "COMPROVANTE NrO. #".h($subscriptionsdoc->id) ?></h3>            
            
        
            <table>
                <tr>
                    <th><?= __('Inscrição Nro. #') ?></th>
                    <td><?= $subscriptionsdoc->has('subscription') ? $this->Html->link($subscriptionsdoc->subscription->id, ['controller' => 'Subscriptions', 'action' => 'view', $subscriptionsdoc->subscription->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Resumo') ?></th>
                    <td><?= h($subscriptionsdoc->description) ?></td>
                </tr>                             
                <tr>
                    <th><?= __('TipoDoc') ?></th>
                    <td><?= $this->Number->format($subscriptionsdoc->doctype_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Histórico:') ?></th>
                    <td><?= h($subscriptionsdoc->historic) ?></td>
                </tr>   
                <tr>
                    <th><?= __('Status:') ?></th>
                    <td><?= h($subscriptionsdoc->statusflag) ?></td>
                </tr>        
                <tr>
                    <th><?= __('Lancto.:') ?></th>
                    <td><?= h($subscriptionsdoc->created) ?></td>
                </tr>                
            </table>

            <?php   $Root_Path = "http://".$_SERVER['SERVER_NAME']."/eventos";
            $newpath = $Root_Path."/img/vouchers/".h($subscriptionsdoc->subscription_id)."/".h($subscriptionsdoc->filename); 
         
            $pathimage = $newpath;                         
            
     ?>

            <div class="container">           
                <div class="row marcador align-items-center">
                    <div class="col">
                        <div style="display: flex;width: 100%;justify-content: center;">
                            
                            <?php echo $this->Html->image($pathimage, ['class'=>'rounded float-left','width'=>'100%','alt' => 'AbBelemSJC']); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                            <?php  
                              
                                if ($roleid == 1) {      
                                    echo '<div class="col-3"> ';
                                    echo  $this->Html->link(__('Confirmar Inscrição'), ['controller' => 'subscriptions','action' => 'confirmation', $subscriptionsdoc->subscription_id],['class'=>'dropdown-item']) ;                                    
                                    echo '</div>';
                                } 
                                
                            ?>
                        </div>

    
        </div>
    </div>
</div>
