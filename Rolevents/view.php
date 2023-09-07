<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rolevent $rolevent
 */
$roleid = $this->Identity->get('role_id');
$userid = $this->Identity->get('id');
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Opções') ?></h4>
            <?php if ($roleid == 1 ) : ?>
            <?= $this->Html->link(__('Editar Evento'), ['action' => 'edit', $rolevent->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Deletar Evento'), ['action' => 'delete', $rolevent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rolevent->id), 'class' => 'side-nav-item']) ?>            
            <?= $this->Html->link(__('Novo Evento'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
            <?php endif; ?>
            <?= $this->Html->link(__('Dados do Usuário'), ['controller' => 'Users', 'action' => 'view', $userid]) ?>
            <?= $this->Html->link(__('Tela Principal'), ['controller'=>'News','action' => 'home'], ['class' => 'side-nav-item']) ?>          
            <?= $this->Html->link(__('Eventos Em Andamento'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="rolevents view content">
            <h3><?= "#".h($rolevent->id)."-".h($rolevent->description) ?></h3>
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
                                    <?= $this->Form->create($rolevent, ['url'=>['controller' => 'Subscriptions', 'action' => 'addid',$rolevent->id],'']) ?>   
                                        <?= $this->Form->control('inscricao',['default'=> $this->Number->format($rolevent->id,['places' => 0]),'type' => 'hidden']); ?>                                  
                                        <?= $this->Form->button('INSCREVER-SE',['class'=>'btn-dark btn-sm btn-block']) ?>
                                     <?= $this->Form->end() ?> 
                                </div>
                            <?php endif; ?>
                    
                   
            </div>
            <div class="col-md-4">                        
                                <?= $this->cell('Roleventimage::getimagename', [h($rolevent->id),'icon']) ?>                          
            </div> 
            <table>     
                <tr>
                    <th><?= __('Início') ?></th>
                    <td><?= h($rolevent->startdate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Encerramento') ?></th>
                    <td><?= h($rolevent->enddate) ?></td>
                </tr>               
                <tr>
                    <th><?= __('Valor da Inscrição') ?></th>
                    <td><?= $this->Number->format($rolevent->price) ?></td>
                </tr>      
            </table>
            <div class="text">
                <strong><?= __('Mais Informações') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($rolevent->details)); ?>
                </blockquote>
            </div>
           
            <div class="related">                
                <?php if (!empty($rolevent->agendas)) : ?>
                <h4><?= __('Agendas do Evento') ?></h4>    
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Originagendaid') ?></th>
                            <th><?= __('Dailyid') ?></th>
                            <th><?= __('Dateevent') ?></th>
                            <th><?= __('Timestart') ?></th>
                            <th><?= __('Timeend') ?></th>
                            <th><?= __('Dayname') ?></th>
                            <th><?= __('Daynumber') ?></th>
                            <th><?= __('Monthnumber') ?></th>
                            <th><?= __('Monthname') ?></th>
                            <th><?= __('Weeknumber') ?></th>
                            <th><?= __('Year') ?></th>
                            <th><?= __('Agendatype') ?></th>
                            <th><?= __('Sectorname') ?></th>
                            <th><?= __('Unityorganization') ?></th>
                            <th><?= __('Eventdescription') ?></th>
                            <th><?= __('Placeofevent') ?></th>
                            <th><?= __('Departmentname') ?></th>
                            <th><?= __('Dayreference') ?></th>
                            <th><?= __('Rolevent Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Obs') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($rolevent->agendas as $agendas) : ?>
                        <tr>
                            <td><?= h($agendas->id) ?></td>
                            <td><?= h($agendas->originagendaid) ?></td>
                            <td><?= h($agendas->dailyid) ?></td>
                            <td><?= h($agendas->dateevent) ?></td>
                            <td><?= h($agendas->timestart) ?></td>
                            <td><?= h($agendas->timeend) ?></td>
                            <td><?= h($agendas->dayname) ?></td>
                            <td><?= h($agendas->daynumber) ?></td>
                            <td><?= h($agendas->monthnumber) ?></td>
                            <td><?= h($agendas->monthname) ?></td>
                            <td><?= h($agendas->weeknumber) ?></td>
                            <td><?= h($agendas->year) ?></td>
                            <td><?= h($agendas->agendatype) ?></td>
                            <td><?= h($agendas->sectorname) ?></td>
                            <td><?= h($agendas->unityorganization) ?></td>
                            <td><?= h($agendas->eventdescription) ?></td>
                            <td><?= h($agendas->placeofevent) ?></td>
                            <td><?= h($agendas->departmentname) ?></td>
                            <td><?= h($agendas->dayreference) ?></td>
                            <td><?= h($agendas->rolevent_id) ?></td>
                            <td><?= h($agendas->created) ?></td>
                            <td><?= h($agendas->modified) ?></td>
                            <td><?= h($agendas->obs) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Agendas', 'action' => 'view', $agendas->id]) ?>
                                <?php if ($roleid == 1 ) : ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Agendas', 'action' => 'edit', $agendas->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Agendas', 'action' => 'delete', $agendas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agendas->id)]) ?>
                                <?php endif; ?>    
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">                
                <?php if (!empty($rolevent->breakingnews)) : ?>
                <h4><?= __('Notícias do Evento') ?></h4>    
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Titulo','Description') ?></th>
                            <th><?= __('Detalhes','Details') ?></th>                            
                            <th class="actions"><?= __('-') ?></th>
                        </tr>
                        <?php foreach ($rolevent->breakingnews as $breakingnews) : ?>
                        <tr>
                            <td><?= h($breakingnews->id) ?></td>
                            <td><?= h($breakingnews->description) ?></td>
                            <td><?= h($breakingnews->details) ?></td>                            
                            <td class="actions">
                                <?php if ($roleid == 1 ) : ?>
                                <?= $this->Html->link(__('View'), ['controller' => 'Breakingnews', 'action' => 'view', $breakingnews->id]) ?>                                
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Breakingnews', 'action' => 'edit', $breakingnews->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Breakingnews', 'action' => 'delete', $breakingnews->id], ['confirm' => __('Are you sure you want to delete # {0}?', $breakingnews->id)]) ?>
                                <?php endif; ?>        
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">                
                <?php if (!empty($rolevent->roleventfiles)  && ($roleid == 1)) : ?>
                <h4><?= __('Anexos') ?></h4>    
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Filename') ?></th>
                            <th><?= __('Rolevent Id') ?></th>
                            <th><?= __('Path') ?></th>
                            <th><?= __('Originalfilename') ?></th>
                            <th><?= __('Midiatype') ?></th>
                            <th><?= __('Activeflag') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($rolevent->roleventfiles as $roleventfiles) : ?>
                        <tr>
                            <td><?= h($roleventfiles->id) ?></td>
                            <td><?= h($roleventfiles->filename) ?></td>
                            <td><?= h($roleventfiles->rolevent_id) ?></td>
                            <td><?= h($roleventfiles->path) ?></td>
                            <td><?= h($roleventfiles->originalfilename) ?></td>
                            <td><?= h($roleventfiles->midiatype) ?></td>
                            <td><?= h($roleventfiles->activeflag) ?></td>
                            <td><?= h($roleventfiles->created) ?></td>
                            <td><?= h($roleventfiles->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Roleventfiles', 'action' => 'view', $roleventfiles->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Roleventfiles', 'action' => 'edit', $roleventfiles->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Roleventfiles', 'action' => 'delete', $roleventfiles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roleventfiles->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">                
                <?php if (!empty($rolevent->roleventschannels)  && ($roleid == 1)) : ?>
                <h4><?= __('Canais') ?></h4>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Rolevent Id') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Details') ?></th>
                            <th><?= __('Activestatus') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($rolevent->roleventschannels as $roleventschannels) : ?>
                        <tr>
                            <td><?= h($roleventschannels->id) ?></td>
                            <td><?= h($roleventschannels->rolevent_id) ?></td>
                            <td><?= h($roleventschannels->description) ?></td>
                            <td><?= h($roleventschannels->details) ?></td>
                            <td><?= h($roleventschannels->activestatus) ?></td>
                            <td><?= h($roleventschannels->created) ?></td>
                            <td><?= h($roleventschannels->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Roleventschannels', 'action' => 'view', $roleventschannels->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Roleventschannels', 'action' => 'edit', $roleventschannels->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Roleventschannels', 'action' => 'delete', $roleventschannels->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roleventschannels->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">                
                <?php if (!empty($rolevent->roleventsimgs)  && ($roleid == 1)) : ?>
                <h4><?= __('Imagens') ?></h4>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Rolevent Id') ?></th>
                            <th><?= __('Filepath') ?></th>
                            <th><?= __('Filename') ?></th>
                            <th><?= __('Filenameoriginal') ?></th>
                            <th><?= __('Activeflag') ?></th>
                            <th><?= __('Fileselection') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Docsystemtype') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($rolevent->roleventsimgs as $roleventsimgs) : ?>
                        <tr>
                            <td><?= h($roleventsimgs->id) ?></td>
                            <td><?= h($roleventsimgs->description) ?></td>
                            <td><?= h($roleventsimgs->rolevent_id) ?></td>
                            <td><?= h($roleventsimgs->filepath) ?></td>
                            <td><?= h($roleventsimgs->filename) ?></td>
                            <td><?= h($roleventsimgs->filenameoriginal) ?></td>
                            <td><?= h($roleventsimgs->activeflag) ?></td>
                            <td><?= h($roleventsimgs->fileselection) ?></td>
                            <td><?= h($roleventsimgs->created) ?></td>
                            <td><?= h($roleventsimgs->modified) ?></td>
                            <td><?= h($roleventsimgs->docsystemtype) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Roleventsimgs', 'action' => 'view', $roleventsimgs->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Roleventsimgs', 'action' => 'edit', $roleventsimgs->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Roleventsimgs', 'action' => 'delete', $roleventsimgs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roleventsimgs->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">                
                <?php if (!empty($rolevent->subscriptions)) : ?>
                <h4><?= __('Incrições Relacionadas') ?></h4>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>                            
                            <th><?= __('Emissão','Dateissue') ?></th>                                                                                    
                            <th><?= __('CodMe','Originid') ?></th>
                            <th><?= __('NrControl','Controlnumber') ?></th>                                                        
                            <th><?= __('Atualização','Modified') ?></th>                            
                            <th class="actions"><?= __('Opções') ?></th>
                        </tr>
                        <?php foreach ($rolevent->subscriptions as $subscriptions) : ?>
                        <tr>
                            <td><?= h($subscriptions->id) ?></td>                            
                            <td><?= h($subscriptions->dateissue) ?></td>                                                                                                                
                            <td><?= h($subscriptions->originid) ?></td>
                            <td><?= h($subscriptions->controlnumber) ?></td>                                                        
                            <td><?= h($subscriptions->modified) ?></td>                            
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
