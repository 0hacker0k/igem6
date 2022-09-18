<header class="mid_size navbar navbar-light" id="navbar">
    <div class="topbar main-bg-color" id="normal_nav">
        <div class="logo d-inline-flex p-2 bd-highlight" id="logo">
            <a href="https://www.google.com/">
                <img src="<?php echo imgfile;?>/brand.png" alt="logo" class="brand">
            </a>
        </div>
        <!-- <input type="checkbox" name="" id="menu_control"> -->
        <div class="nav" id="nav">
            <div onclick="click_bar('myDropdown1')" onmouseout="out_bar('myDropdown1')" onmouseover="in_bar('myDropdown1')" class="dropdown top_nav">
            
                <button class="dropbtn click"><img class="drop click" src="<?php echo imgfile;?>/drop.png" alt="">Team</button>
                <div id="myDropdown1" class="dropdown-content">
                    <a href="#" class="dropdown-content_list click">Home</a>
                    <a href="#" class="dropdown-content_list click">Members</a>
                    <a href="./attribution.html" class="dropdown-content_list click">Attributions</a>
                    <a href="#" class="dropdown-content_list click">Sponsors</a>
                </div>
            </div>
            
            <div onclick="click_bar('myDropdown2')" onmouseout="out_bar('myDropdown2')" onmouseover="in_bar('myDropdown2')" class="dropdown top_nav">
                <button class="dropbtn click"><img class="drop click" src="<?php echo imgfile;?>/drop.png" alt="">Project</button>
                <div id="myDropdown2" class="dropdown-content">
                    <a href="#" class="dropdown-content_list click">Description</a>
                    <a href="#" class="dropdown-content_list click">Design</a>
                    <a href="#" class="dropdown-content_list click">Implementation</a>
                    <a href="#" class="dropdown-content_list click">Entrepreneurship</a>
                    <a href="#" class="dropdown-content_list click">Contribution</a>
                    <a href="#" class="dropdown-content_list click">Improvement</a>
                    <a href="#" class="dropdown-content_list click">Proof of Concept</a>
                </div>

            </div>

            <div onclick="click_bar('myDropdown3')" onmouseout="out_bar('myDropdown3')" onmouseover="in_bar('myDropdown3')" class="dropdown top_nav">
                <button class="dropbtn click"><img class="drop click" src="<?php echo imgfile;?>/drop.png" alt="">Labwork</button>
                <div id="myDropdown3" class="dropdown-content">
                    <a href="#" class="dropdown-content_list click">Protocol</a>
                    <a href="#" class="dropdown-content_list click">Engineering</a>
                    <a href="#" class="dropdown-content_list click">Measurement</a>
                    <a href="#" class="dropdown-content_list click">Model</a>
                    <a href="#" class="dropdown-content_list click">Result</a>
                    <a href="#" class="dropdown-content_list click">Part</a>
                </div>

            </div>

            <div onclick="click_bar('myDropdown4')" onmouseout="out_bar('myDropdown4')" onmouseover="in_bar('myDropdown4')" class="dropdown top_nav">
                <button class="dropbtn click"><img class="drop click" src="<?php echo imgfile;?>/drop.png" alt="">Human Practice</button>
                <div id="myDropdown4" class="dropdown-content">
                    <a href="#" class="dropdown-content_list click">Human Practice</a>
                    <a href="#" class="dropdown-content_list click">Education</a>
                    <a href="#" class="dropdown-content_list click">Webgame</a>
                    <a href="#" class="dropdown-content_list click">Science Communication</a>
                    <a href="#" class="dropdown-content_list click">Collaboration</a>
                    <a href="#" class="dropdown-content_list click">Partnership</a>
                    <a href="#" class="dropdown-content_list click">Inclusivity</a>
                    <a href="#" class="dropdown-content_list click">Integrated Human Practice</a>
                </div>

            </div>

            <div onclick="click_bar(null)" onmouseout="out_bar(null)" onmouseover="in_bar(null)" class="dropdown top_nav">
                <button class="dropbtn click"><img class="drop click" src="<?php echo imgfile;?>/drop.png" alt="">Notebook</button>
            
            </div>

            <div onclick="click_bar(null)" onmouseout="out_bar(null)" onmouseover="in_bar(null)" class="dropdown top_nav">
                <button class="dropbtn click"><img class="drop click" src="<?php echo imgfile;?>/drop.png" alt="">Safety</button>
            
            </div>

            <div onclick="click_bar('myDropdown8')" onmouseout="out_bar('myDropdown8')" onmouseover="in_bar('myDropdown8')" class="dropdown top_nav">
                <button class="dropbtn click"><img class="drop click" src="<?php echo imgfile;?>/drop.png" alt="">Awards</button>
                <div id="myDropdown8" class="dropdown-content">
                    <a href="#" class="dropdown-content_list click">Medals</a>
                    <a href="#" class="dropdown-content_list click">Judging Form</a>
                </div>
            </div>

            <div onclick="click_bar('myDropdown9')" onmouseout="out_bar('myDropdown9')" onmouseover="in_bar('myDropdown9')" class="dropdown dropdown_rwd">
                <button class="dropbtn click"><img class="click" src="<?php echo imgfile;?>/fa-bars.png" alt="" style="width: 40px;"></button>
                
            </div>
            
            <!-- <a class="hamBar" href="#"><img src="<?php echo imgfile;?>/fa-bars.png" alt="" style="width: 40px;"></a> -->
        </div>
    </div>
    
    <div class="down-nav mid_size">
        <div id="myDropdown9" class="a-right">
            <div onclick="change_list(1)" class="dropdown-content_list2 click">Team</div>
            <div onclick="change_list(2)" class="dropdown-content_list2 click">Project</div>
            <div onclick="change_list(3)" class="dropdown-content_list2 click">Labwork</div>
            <div onclick="change_list(4)" class="dropdown-content_list2 click">Human Practice</div>
            <div onclick="change_list(5)" class="dropdown-content_list2 click">Notebook</div>
            <div onclick="change_list(6)" class="dropdown-content_list2 click">Safety</div>
            <div onclick="change_list(8)" class="dropdown-content_list2 click">Awards</div>
        </div>
        <div class="nav_rwd sub_nav_rwd" style="display:table;">
            <div id="mylist1" class="dropdown-content nav_rwd">
                <a href="#" class="dropdown-content_list2 click">Home</a>
                <a href="#" class="dropdown-content_list2 click">Members</a>
                <a href="#" class="dropdown-content_list2 click">Attributions</a>
                <a href="#" class="dropdown-content_list2 click">Sponsors</a>
            </div>
            <div id="mylist2" class="dropdown-content nav_rwd">
                <a href="#" class="dropdown-content_list2 click">Description</a>
                <a href="#" class="dropdown-content_list2 click">Design</a>
                <a href="#" class="dropdown-content_list2 click">Implementation</a>
                <a href="#" class="dropdown-content_list2 click">Entrepreneurship</a>
                <a href="#" class="dropdown-content_list2 click">Contribution</a>
                <a href="#" class="dropdown-content_list2 click">Improvement</a>
                <a href="#" class="dropdown-content_list2 click">Proof of Concept</a>
            </div>
            <div id="mylist3" class="dropdown-content nav_rwd">
                <a href="#" class="dropdown-content_list2 click">Protocol</a>
                <a href="#" class="dropdown-content_list2 click">Engineering</a>
                <a href="#" class="dropdown-content_list2 click">Measurement</a>
                <a href="#" class="dropdown-content_list2 click">Model</a>
                <a href="#" class="dropdown-content_list2 click">Result</a>
                <a href="#" class="dropdown-content_list2 click">Part</a>
            </div>
            <div id="mylist4" class="dropdown-content nav_rwd">
                <a href="#" class="dropdown-content_list2 click">Human Practice</a>
                <a href="#" class="dropdown-content_list2 click">Education</a>
                <a href="#" class="dropdown-content_list2 click">Webgame</a>
                <a href="#" class="dropdown-content_list2 click">Science Communication</a>
                <a href="#" class="dropdown-content_list2 click">Collaboration</a>
                <a href="#" class="dropdown-content_list2 click">Partnership</a>
                <a href="#" class="dropdown-content_list2 click">Inclusivity</a>
                <a href="#" class="dropdown-content_list2 click">Integrated Human Practice</a>
            </div>
            <div id="mylist8" class="dropdown-content nav_rwd">
                <a href="#" class="dropdown-content_list2 click">Medals</a>
                <a href="#" class="dropdown-content_list2 click">Judging Form</a>
            </div>
        </div>
    </div>
    
    
</header>

<div id="blank_top" style="height:115px;"></div>
<style id="nav_style">

</style>

