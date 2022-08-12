<!-- Modal -->
<div class="modal fade" id="popup<?php echo $id;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> -->
            <div class="modal-body">
                <div class="person_card">
                    <div class="card_left">
                        <img class="card_img" src="<?php echo $popup_img;?>" alt="<?php echo $popup_img_alt;?>">
                        <div class="person_name">
                            <?php echo $name;?>
                        </div>
                        <div class="job_title">
                            <?php echo $job_title;?>
                        </div>
                    </div>
                    <div class="card_right">
                        <div class="person_tag">
                            <?php echo $person_title;?>
                            <?php echo $person_icon;?>
                        </div>
                        <div class="title_explain">
                            <?php echo $title_explain;?>
                        </div>
                        <div class="person_data">
                            <?php echo $content;?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close_button" data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>