    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#popup<?php echo $id;?>">
    <img class="person_img" src="<?php echo $person_img;?>" alt="<?php echo $person_img_alt;?>">
</button>

<!-- Modal -->
<div class="modal fade" id="popup<?php echo $id;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="person_card">
                    <div class="card_left">
                        <!-- <image class="lazy card_img" data-src="<?php echo imgfile.$popup_img;?>" alt="<?php echo $popup_img_alt;?>" /> -->
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
                            <div class="person_title">
                                <?php echo $person_title;?>
                            </div>
                            <div class="person_icon_div">
                                <img class="person_icon" src="<?php echo $person_icon;?>" alt="icon">
                            </div>
                        </div>
                        <div class="job_title">
                            <?php echo $title_explain;?>
                        </div>
                        <div class="person_data">
                            <?php echo $content;?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>