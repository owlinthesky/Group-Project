<section class="middle">
    <div class="container mt-3">
        <h1>SwanHub</h1>
        
            <?php
                while ($mem = mysqli_fetch_assoc($result)):
                        echo '<h2>'.$mem['P_Title'].'</h2>';
                        echo '<p>'.$mem['P_description'].'</p>';
                        echo '<a class="btn btn-small btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="'.$mem['P_id'].' ">View</a>';
                endwhile;
                $result->close();
            ?>    
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr_only">Close</span></button>
                <h4 class="modal-title" id="memberModalLabel">details</h4>
                </div>
                <div class="dash">
                    
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
    </div>
</section>