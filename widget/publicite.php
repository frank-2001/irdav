<h5 class="mb-2">Publicite</h5>
        <div class="card card-success">
          <div class="card-body">
            <div class="row">
              
              <?php 
              $limit = (count($pubData)<4) ? count($pubData) : 3 ;
              for ($i=0; $i < $limit; $i++) { 
                echo pub($pubData[$i]);
              }
              ?>
            
            </div>
          </div>
        </div>