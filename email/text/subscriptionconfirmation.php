<h1>PRÉ-INSCRIÇÃO: <?php echo $evento; ?></h1>

<div>
    <p>
        Olá <?php echo $nome; ?>!
    </p>
    <p>
        Este email é um protocolo de confirmação de sua PRÉ-INSCRIÇÃO.
        Apresente o mesmo junto à secretaria durante o acerto financeiro e CONFIRMAÇÃO da INSCRIÇÃO OFICIAL DO EVENTO.
        IMPORTANTE: Este email trata se apenas de um protocolo da PRÉ INSCRIÇÃO para o evento, não garante a participação.
        INSCRIÇÃO OFICIAL será CONFIRMADA após o PAGAMENTO da taxa na secretaria responsável pelo evento.
        será confirmado a participação e entregas de materiais decorrentes do evento.
    </br>
                <?php
                //$link = 'http://localhost/eventos/rolevents/view/'.$eventoid;
                $link = 'http://www.adbelem.sjc.br/eventos/rolevents/view/'.$eventoid;


                
                echo "<p>Evento: #".$eventoid."-".$evento ."</p>";
                echo "<p>Valor de Contribuição: BRL ".$valor."</p>";
                echo "<p>Data Início: ".$datainicio ."</p>";
                echo "<p>Data Fim: ".$datafim."</p>";
                echo "<p>Nro. Inscrição: #".$inscricao."</p>";
                echo "<p>PartCode: #".$useid."</p>";
                echo "<p>Participante: ".$nome."</p>";

                echo $this->Html->link('Link do Evento:', $link);
                ?>
    </p>



    
