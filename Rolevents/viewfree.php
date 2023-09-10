<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rolevent $rolevent
 */

?>
<div class="row">
   
    <div class="column-responsive column-80">
        <div class="rolevents view content">
          
            <div class="container">
                <div class="row">
                                    <?= $this->cell('Roleventimage::getimagename', [h($rolevent->id),'icon']) ?>                          
                </div>
            </div>
           <p>
            <div class="section">
                    <table class="table">  
                        <tr>
                            <th><?= __('Evento') ?></th>
                            <td><h3><?= h($rolevent->description) ?></h3></td>
                            <th><?= __('Valor da Inscrição') ?></th>
                            <td><strong><?= $this->Number->precision($rolevent->price,2) ?></strong></td>
                        </tr>
                        <tr>
                            <th><?= __('Início') ?></th>
                            <td><?= h($rolevent->startdate) ?></td>
                            <th><?= __('Encerramento') ?></th>
                            <td><?= h($rolevent->enddate) ?></td>
                        </tr>                      
                    </table>
                                        <?= $this->Form->create($rolevent, ['url'=>['controller' => 'Singlesubscriptions', 'action' => 'addid',$rolevent->id],'']) ?>   
                                            <?= $this->Form->control('PreInscricao',['default'=> $this->Number->format($rolevent->id,['places' => 0]),'type' => 'hidden']); ?>                                  
                                            <?= $this->Form->button('PRE-INSCRICAO',['class'=>'btn btn-success']) ?>
                                        <?= $this->Form->end() ?> 
                                   
            </div>        
            <div class="text">
                <strong><?= __('Mais Informações') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($rolevent->details)); ?>
                </blockquote>
            </div>

        </div>
    </div>
</div>
