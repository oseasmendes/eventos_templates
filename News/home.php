    <div class="container">

    <div class="row">
        <div class="col-4">
            <h3 style="color: #fff;" class="bg-info text-capitalize p-1">Incrições Abertas</h3>
            <ul class="list-group list-group-flush">
              <?php foreach ($roleventlist as $key => $roleventDescription): ?>
                	<li class="list-group-item"><a href = <?= $this->Url->build(['controller'=>'Rolevents','action'=>'view', $key]) ?>><?= $roleventDescription ?></li>
              <?php endforeach; ?>              
            </ul>
            <h3 style="color: #fff;" class="bg-info text-capitalize p-1">Programações</h3>
            <ul class="list-group list-group-flush">            
            <li class="list-group-item"><a href = <?= $this->Url->build(['controller'=>'Agendas','action'=>'index']) ?>>Agenda Anual do Campo</li>
            </ul>
        </div>
        
        <div class="col-8">
            <div class="row">
               <div class="list-group ">
                   <?php foreach ($breakingnews as $key => $breakingnew) : ?>
                  <a href="<?= $this->Url->build(['controller'=>'Rolevents','action'=>'view', $breakingnew->rolevent_id]) ?>" class="list-group-item list-group-item-action flex-column mb-2">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1"><?= $breakingnew->description ?></h5>                      
                      <!-- <small>3 days ago</small> -->                                            
                    </div>                    
                    <p class="mb-1"><?= $breakingnew->details ?></p>
                    <!-- <small>Donec id elit non mi porta.</small> -->
                    <?= $this->cell('Roleventimage::getimagename', [$breakingnew->rolevent_id,'icon']) ?>                    
                  </a>
                  <?php endforeach; ?>                 
                </div>
                   
            </div>
        </div>
    </div>

    </div>
    
    </div>

