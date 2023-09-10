<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\People $people
 */
?>


<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Opções') ?></h4>
            <?= $this->Html->link(__('Editar Dados Pessoais'), ['action' => 'edit', $people->id], ['class' => 'side-nav-item']) ?>                      
            <?= $this->Html->link(__('Eventos Programados'), ['controller'=>'Rolevents','action' => 'index'], ['class' => 'side-nav-item']) ?>          
            <?= $this->Html->link(__('Tela Principal'), ['controller'=>'News','action' => 'home'], ['class' => 'side-nav-item']) ?>          
            
            
        </div>
    </aside>
   
    <div class="column-responsive column-80">
        <div class="peoples view content">
            <h3><?= h($people->id)."#".$people->originid." - ".h($people->name) ?></h3>
                         
            <table class="table">
                <tr>
                    <th><?= __('Congregação') ?></th>
                    <td><?= $people->has('bussinessunit') ? $this->Html->link($people->bussinessunit->description, ['controller' => 'Bussinessunits', 'action' => 'view', $people->bussinessunit->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Cargo') ?></th>
                    <td><?= h($people->positiondescription) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($people->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Endereço') ?></th>
                    <td><?= h($people->street) ?></td>
                </tr>
                <tr>
                    <th><?= __('Complemento') ?></th>
                    <td><?= h($people->streetcomplement) ?></td>
                </tr>               
                <tr>
                    <th><?= __('Bairro') ?></th>
                    <td><?= h($people->districtname) ?></td>
                </tr>       
                <tr>
                    <th><?= __('Cidade') ?></th>
                    <td><?= h($people->citiesname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Celular') ?></th>
                    <td><?= h($people->mobile) ?></td>
                </tr>
              
                <tr>
                    <th><?= __('Integração') ?></th>
                    <td><?= h($people->origindescription) ?></td>
                </tr>
                <tr>
                    <th><?= __('CPF') ?></th>
                    <td><?= h($people->idocnumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $people->has('user') ? $this->Html->link($people->user->name, ['controller' => 'Users', 'action' => 'view', $people->user->id]) : '' ?></td>
                </tr>
                    
                <tr>
                    <th><?= __('DtNascimento') ?></th>
                    <td><?= h($people->birthdate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= date('d/m/Y',strtotime(h($people->created))) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= date('d/m/Y',strtotime(h($people->modified))) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>



