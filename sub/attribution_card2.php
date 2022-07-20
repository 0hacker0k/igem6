            <div class="card">
                <div class="card_left">
                    <image class="card_img" src="<?php echo imgfile.$photo;?>" />
                </div>
                <div class="card_right">
                    <div class="card_title">
                        <image class="name_icon" src="<?php echo imgfile;?>/drop.png" />
                        <div class="card_name">
                            <?php echo $name;?>
                        </div>
                        <div class="card_icon_list">
                            <?php 
                            if($icon1!="") echo "<image class=\"card_icon\" src=\"".imgfile.$icon1."\" />";
                            if($icon2!="") echo "<image class=\"card_icon\" src=\"".imgfile.$icon2."\" />";
                            if($icon3!="") echo "<image class=\"card_icon\" src=\"".imgfile.$icon3."\" />";
                            ?>
                        </div>
                    </div>
                    <div class="card_content">
                        <?php echo $content;?>
                    </div>
                </div>
                <!-- <h1 class="title-label">Leaders</h1> -->
            </div>