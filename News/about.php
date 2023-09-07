<div class="container">

<div class="row">
    <div class="col-4">
        <h3 style="color: #fff;" class="bg-info text-capitalize p-1">SEDE</h3>
        <ul class="list-group list-group-flush">
          <?php foreach ($orglist as $key => $orgDescription): ?>
              <li class="list-group-item"><a href = <?= $this->Url->build(['controller'=>'Orgs','action'=>'view', $key]) ?>><?= $orgDescription ?></li>
          <?php endforeach; ?>              
        </ul>
    </div>

    <div class="col-8">
        <div class="row">
           <div class="list-group ">
               <?php foreach ($bussinessunits as $key => $bussinessunit) : ?>
              <a href="<?= $this->Url->build(['controller'=>'Bussinessunits','action'=>'view', $bussinessunit->id]) ?>" class="list-group-item list-group-item-action flex-column mb-2">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1"><?= $bussinessunit->description ?></h5>                  
                   <small><?= $bussinessunit->sector ?></small>
                </div>                    
                <p class="mb-1"><?= $bussinessunit->address ?></p>
                <p class="mb-1"><?= $bussinessunit->city ?></p>
                <p class="mb-1"><?= $bussinessunit->created ?></p>               
              </a>
              <?php endforeach; ?>                 
            </div>
               
        </div>
    </div>
</div>

</div>

</div>

