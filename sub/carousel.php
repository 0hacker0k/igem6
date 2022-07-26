            <div id="carousel_<?php echo $id;?>" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php 
                        for($i=0;$i<$img_count;$i++){
                    ?>
                        <div class="carousel-item<?php if($i==0)echo " active";?>">
                            <img src="<?php echo $img_src[$i];?>" class="center_img d-block w-100" alt="<?php echo $img_alt[$i];?>">
                        </div>
                    <?php
                        }
                    ?>
                </div>
                <?php if($img_count>1){ ?>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel_<?php echo $id;?>" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel_<?php echo $id;?>" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                <?php }?>
            </div>