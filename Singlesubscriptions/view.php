<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Singlesubscription $singlesubscription
 */
?>
<div class="row">
   
    <div class="column-responsive column-80">
        <div class="singlesubscriptions view content">
            <div class="text">
                <strong><?= __('Prezado(a) Irmã(o)') ?></strong>
                <blockquote>                    
                    <?php $boasvindas = "Seja muito benvindo(a) ao nosso evento!  Pré-Inscrição Registrada com sucesso. 
                    Lembrando que apenas o pagamento desta resultará na efetivação de sua participação no evento. O pagamento deverá ser feito na secretaria do evento ou diretamente o dirigente de sua igreja.
                    Para melhor organização e alinhamento guarde o número de sua Pré Inscrição gerada logo abaixo.";?>
                    <?=                         
                        $this->Text->autoParagraph($boasvindas); 
                    ?>
                </blockquote>
            </div>
            <h3><?= "#Número da Pré Inscrição: ".h($singlesubscription->id)."-". h($singlesubscription->fullname)  ?></h3>
            <table class="table">  
                <tr>
                    <th><?= __('Evento') ?></th>
                    <td><?= $singlesubscription->has('rolevent') ? $this->Html->link($singlesubscription->rolevent->description, ['controller' => 'Rolevents', 'action' => 'viewfree', $singlesubscription->rolevent->id]) : '' ?></td>
                    <th><?= __(' Número da Pré Inscrição') ?></th>
                    <td><?= $this->Number->format($singlesubscription->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cargo') ?></th>
                    <td><?= h($singlesubscription->position) ?></td>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($singlesubscription->fullname) ?></td>
                    
                </tr>                
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($singlesubscription->email) ?></td>
                    <th><?= __('Organização') ?></th>
                    <td><?= h($singlesubscription->organizationname) ?></td>
                </tr>
                <tr>
                    
                </tr>
                <tr>
                    <th><?= __('Telefone Celular') ?></th>
                    <td><?= h($singlesubscription->mobil) ?></td>
                    <th><?= __('Endereço') ?></th>
                    <td><?= h($singlesubscription->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bairro') ?></th>
                    <td><?= h($singlesubscription->district) ?></td>
                    <th><?= __('Cidade') ?></th>
                    <td><?= h($singlesubscription->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('Número do RG') ?></th>
                    <td><?= h($singlesubscription->documentnumber) ?></td>
                    <th><?= __('Dirigente/Representante') ?></th>
                    <td><?= h($singlesubscription->salesperson) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cadastro Interno Relacionado') ?></th>
                    <td><?= $this->Number->format($singlesubscription->people_id) ?></td>
                    <th><?= __('Concorda com termos de Lei Geral de Proteção de Dados -LGPD') ?></th>
                    <td><?= $singlesubscription->lgpd_ok ? __('Sim') : __('Não'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Lançado Em') ?></th>
                    <td><?= h($singlesubscription->created) ?></td>
                    <th><?= __('Atualizado Em') ?></th>
                    <td><?= h($singlesubscription->modified) ?></td>
                </tr>
                
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($singlesubscription->statusflag) ?></td>
                    <th><?= __('Inscrição Relacionada') ?></th>
                    <td><?= $singlesubscription->has('subscription') ? $this->Html->link($singlesubscription->subscription->id, ['controller' => 'Subscriptions', 'action' => 'view', $singlesubscription->subscription->id]) : '' ?></td>
                </tr>            
               
            </table>
           
        </div>
    </div>
</div>
