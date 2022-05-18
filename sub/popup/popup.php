    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1" style="background-color:#FFCAE7">
  <img class="person_img" src="<?php echo $person_img;?>" alt="<?php echo $person_img_alt;?>">
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="popups<?php echo $id;?>" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="popup<?php echo $id;?>"><?php echo $name;?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="image">
        <img src="<?php echo $popup_img;?>" alt="<?php echo $popup_img_alt;?>">
        </div>
        <p><?php echo $content;?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
