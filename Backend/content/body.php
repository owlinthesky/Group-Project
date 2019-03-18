<?php
    while ($mem = mysqli_fetch_object($result)) {
        $posts[] = $mem;
    }
?>    

<section class="middle">
    <div class="container mt-3">
        <h1>SwanHub</h1>
        
        <?php foreach($posts as $post): ?>
            <div>
                <h3><?php echo $post->P_Title; ?></h3>
                <p><?php echo $post->P_description; ?></p>
                <button class="likeBtn" id="<?php echo $post->P_id; ?>">Like</button>
                <button class="DisBtn" id="<?php echo $post->P_id; ?>">Dislike</button>
            </div>
        <?php endforeach; ?>
        
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