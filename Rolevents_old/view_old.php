<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rolevent $rolevent
 */
$roleid = $this->Identity->get('role_id');
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?php if ($roleid == 1 ) : ?>
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Rolevent'), ['action' => 'edit', $rolevent->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Rolevent'), ['action' => 'delete', $rolevent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rolevent->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Rolevents'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Rolevent'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
            <?php endif; ?>   
            
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="rolevents view content">
            <h3><?= h($rolevent->description)  ?></h3>
            <div class="row">
                            <?php  
                                if ($roleid == 1 ) {                                    
                                    echo '<div class="col-3"> ';
                                    echo $this->Form->create($rolevent, ['url'=>['controller' => 'roleventsimgs', 'action' => 'addid',$rolevent->id],'']);    
                                    echo   $this->Form->control('Imagem',['default'=> $this->Number->format($rolevent->id,['places' => 0]),'type' => 'hidden']);                                  
                                    echo $this->Form->button('Upload Imgs',['class'=>'btn-dark btn-sm btn-block']);
                                    echo  $this->Form->end() ; 
                                    echo '</div>';
                                }                                
                            ?>
                            <?php 
                               if (empty($rolevent->subscriptions) && ($rolevent->subscriptionrequired == TRUE) ) : ?>
                                <div class="col-3"> 
                                    <?= $this->Form->create($rolevent, ['url'=>['controller' => 'subscriptions', 'action' => 'addid',$rolevent->id],'']) ?>   
                                        <?= $this->Form->control('Subscription',['default'=> $this->Number->format($rolevent->id,['places' => 0]),'type' => 'hidden']); ?>                                  
                                        <?= $this->Form->button('INSCREVER-SE',['class'=>'btn-dark btn-sm btn-block']) ?>
                                    <?= $this->Form->end() ?> 
                                </div>
                            <?php endif; ?>
                    
                   
            </div>
            <div class="row">
                    <div class="col-md-4">
                            <table>                        
                            <?php
                                if (empty($rolevent->subscriptions) && ($rolevent->subscriptionrequired == TRUE) ) : ?>                                
                                <tr>
                                    <th><?= __('#EventCode') ?></th>
                                    <td><?= $this->Number->format($rolevent->id) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Valor') ?></th>
                                    <td><?= $this->Number->format($rolevent->price) ?></td>
                                </tr>              
                                <tr>
                                    <th><?= __('Início') ?></th>
                                    <td><?= h($rolevent->startdate) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Encerramento') ?></th>
                                    <td><?= h($rolevent->enddate) ?></td>
                                </tr> 
                                <tr>
                                    <th><?= __('Data Limite Para Inscrição') ?></th>
                                    <td><?= h($rolevent->subscexpirationdate) ?></td>
                                </tr> 
                                <?php endif; ?>                              
                            </table>
                           
                    </div>               
                    <div class="col-md-4">                        
                                <?= $this->cell('Roleventimage::getimagename', [h($rolevent->id),'icon']) ?>                          
                    </div> 
            </div>          
            
     
            
            <div class="text">
                <strong><?= __('Resumo') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($rolevent->details)); ?>
                </blockquote>
            </div>
          

            <div class="related">
                
                <?php if (!empty($rolevent->roleventsimgs) && ($roleid == 1)) : ?>
                    <h4><?= __('Imagens') ?></h4> 
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>                            
                            <th><?= __('Description') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Imagem') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        
                        <?php foreach ($rolevent->roleventsimgs as $imgs) : ?>
                        <tr>
                            <td><?= h($imgs->id) ?></td>
                            <td><?= h($imgs->description) ?></td>                           
                            <td><?= h($imgs->created) ?></td>
                            <td>
                            <?php
                                    $Root_Path = "http://".$_SERVER['SERVER_NAME']."/eventos";
                                    //$pathurl = WWW_ROOT.'img'.DS.'projetosprodutos'.DS.$projetosprodutosimg->projetosproduto->id;
                                
                                    $newpath = $Root_Path.'/img'.'/rolevents/'.$imgs->rolevent_id; 
                                    $pathimage = $newpath.'/'.$imgs->filenameoriginal;  
                                    echo '<img src="'.$pathimage.'" alt="Saes" width="80" height="40">';    
                                                             
                                    ?>
                            </td>                                                       
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Roleventsimgs', 'action' => 'view', $imgs->id]) ?>
                                <?php if ($roleid == 1 ) : ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Roleventsimgs', 'action' => 'edit', $imgs->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Roleventsimgs', 'action' => 'delete', $imgs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imgs->id)]) ?>
                                <?php endif; ?>
                                </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div> <!-- Final do bloco das imagens -->

            
            <div class="related">
                
                <?php if (!empty($rolevent->subscriptions) && ($rolevent->subscriptionrequired =true) ) : ?>
                    <h4><?= __('Pré-Inscrição Registrada') ?></h4>
                    <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('#Nro','Id') ?></th>
                            <th><?= __('Dateissue') ?></th>                           
                            <th><?= __('Status','Statusflag') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($rolevent->subscriptions as $subscriptions) : ?>
                        <tr>
                            <td><?= h($subscriptions->id) ?></td>
                            <td><?= h($subscriptions->dateissue) ?></td>                           
                            <td><?= h($subscriptions->statusflag) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Subscriptions', 'action' => 'view', $subscriptions->id]) ?>
                                <?php if ($roleid == 1 ) : ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Subscriptions', 'action' => 'edit', $subscriptions->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Subscriptions', 'action' => 'delete', $subscriptions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subscriptions->id)]) ?>
                                <?php endif; ?>                                    
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
</div>
