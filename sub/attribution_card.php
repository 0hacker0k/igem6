            <div class="card">
                <div class="card_left">
                    <image class="lazy card_img" data-src="<?php echo imgfile.$photo;?>" />
                </div>
                <div class="card_right">
                    <div class="card_title">
                        <image class="name_icon" src="<?php echo imgfile;?>/drop.png" />
                        <div class="card_name">
                            <?php echo $name;?>
                        </div>
                        <div class="card_icon_list">
                            <?php
                            if($icon1!=""){
                                $icon1=change_attr_icon($icon1);
                                echo "<image title=\"".$icon1."\" class=\"card_icon\" src=\"".imgfile."/attributions/".$icon1.".png\" />";
                            }
                            if($icon2!=""){
                                $icon2=change_attr_icon($icon2);
                                echo "<image title=\"".$icon2."\" class=\"card_icon\" src=\"".imgfile."/attributions/".$icon2.".png\" />";
                            }
                            if($icon3!=""){
                                $icon3=change_attr_icon($icon3);
                                echo "<image title=\"".$icon3."\" class=\"card_icon\" src=\"".imgfile."/attributions/".$icon3.".png\" />";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="card_content">
                        <?php echo $content;?>
                    </div>
                </div>
                <!-- <h1 class="title-label">Leaders</h1> -->
            </div>