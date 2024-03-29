<script>
    function in_bar(id){};
    function out_bar(id){};
    function click_bar(id){};
</script>

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
                    <a href="https://2022.igem.wiki/ccu-taiwan/index.html" class="dropdown-content_list click">Home</a>
                    <a href="https://2022.igem.wiki/ccu-taiwan/team" class="dropdown-content_list click">Members</a>
                    <a href="https://2022.igem.wiki/ccu-taiwan/attributions" class="dropdown-content_list click">Attributions</a>
                    <a href="#" class="dropdown-content_list click">Sponsors</a>
                </div>
            </div>
            
            <div onclick="click_bar('myDropdown2')" onmouseout="out_bar('myDropdown2')" onmouseover="in_bar('myDropdown2')" class="dropdown top_nav">
                <button class="dropbtn click"><img class="drop click" src="<?php echo imgfile;?>/drop.png" alt="">Project</button>
                <div id="myDropdown2" class="dropdown-content">
                    <a href="https://2022.igem.wiki/ccu-taiwan/description" class="dropdown-content_list click">Description</a>
                    <a href="#" class="dropdown-content_list click">Design</a>
                    <a href="https://2022.igem.wiki/ccu-taiwan/implementation" class="dropdown-content_list click">Implementation</a>
                    <a href="https://2022.igem.wiki/ccu-taiwan/contribution" class="dropdown-content_list click">Contribution</a>
                    <a href="https://2022.igem.wiki/ccu-taiwan/improve" class="dropdown-content_list click">Improvement</a>
                    <a href="https://2022.igem.wiki/ccu-taiwan/proof-of-concept" class="dropdown-content_list click">Proof of Concept</a>
                    <a href="https://2022.igem.wiki/ccu-taiwan/sustainable" class="dropdown-content_list click">Sustainable</a>
                </div>

            </div>

            <div onclick="click_bar('myDropdown3')" onmouseout="out_bar('myDropdown3')" onmouseover="in_bar('myDropdown3')" class="dropdown top_nav">
                <button class="dropbtn click"><img class="drop click" src="<?php echo imgfile;?>/drop.png" alt="">Labwork</button>
                <div id="myDropdown3" class="dropdown-content">
                    <a href="#" class="dropdown-content_list click">Protocol</a>
                    <a href="https://2022.igem.wiki/ccu-taiwan/hardware" class="dropdown-content_list click">Hardware</a>
                    <a href="https://2022.igem.wiki/ccu-taiwan/engineering" class="dropdown-content_list click">Engineering</a>
                    <a href="https://2022.igem.wiki/ccu-taiwan/results" class="dropdown-content_list click">Results</a>
                    <a href="https://2022.igem.wiki/ccu-taiwan/parts" class="dropdown-content_list click">Parts</a>
                </div>

            </div>

            <div onclick="click_bar('myDropdown4')" onmouseout="out_bar('myDropdown4')" onmouseover="in_bar('myDropdown4')" class="dropdown top_nav">
                <button class="dropbtn click"><img class="drop click" src="<?php echo imgfile;?>/drop.png" alt="">Human Practices</button>
                <div id="myDropdown4" class="dropdown-content">
                    <a href="https://2022.igem.wiki/ccu-taiwan/human-practices" class="dropdown-content_list click">Human Practices</a>
                    <a href="https://2022.igem.wiki/ccu-taiwan/education" class="dropdown-content_list click">Education</a>
                    <a href="#" class="dropdown-content_list click">Web Game</a>
                    <a href="https://2022.igem.wiki/ccu-taiwan/communication" class="dropdown-content_list click">Communication</a>
                    <a href="https://2022.igem.wiki/ccu-taiwan/collaborations" class="dropdown-content_list click">Collaborations</a>
                    <a href="https://2022.igem.wiki/ccu-taiwan/partnership" class="dropdown-content_list click">Partnership</a>
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
            <div onclick="change_list(4)" class="dropdown-content_list2 click">Human Practices</div>
            <div onclick="change_list(5)" class="dropdown-content_list2 click">Notebook</div>
            <div onclick="change_list(6)" class="dropdown-content_list2 click">Safety</div>
            <div onclick="change_list(8)" class="dropdown-content_list2 click">Awards</div>
        </div>
        <div class="nav_rwd sub_nav_rwd" style="display:table;">
            <div id="mylist1" class="dropdown-content nav_rwd">
                    <a href="https://2022.igem.wiki/ccu-taiwan/index.html" class="dropdown-content_list click">Home</a>
                    <a href="https://2022.igem.wiki/ccu-taiwan/team" class="dropdown-content_list click">Members</a>
                    <a href="https://2022.igem.wiki/ccu-taiwan/attributions" class="dropdown-content_list click">Attributions</a>
                    <a href="#" class="dropdown-content_list click">Sponsors</a>
            </div>
            <div id="mylist2" class="dropdown-content nav_rwd">
                <a href="https://2022.igem.wiki/ccu-taiwan/description" class="dropdown-content_list click">Description</a>
                <a href="#" class="dropdown-content_list click">Design</a>
                <a href="https://2022.igem.wiki/ccu-taiwan/implementation" class="dropdown-content_list click">Implementation</a>
                <a href="https://2022.igem.wiki/ccu-taiwan/contribution" class="dropdown-content_list click">Contribution</a>
                <a href="https://2022.igem.wiki/ccu-taiwan/improve" class="dropdown-content_list click">Improvement</a>
                <a href="https://2022.igem.wiki/ccu-taiwan/proof-of-concept" class="dropdown-content_list click">Proof of Concept</a>
                <a href="https://2022.igem.wiki/ccu-taiwan/sustainable" class="dropdown-content_list click">Sustainable</a>
            </div>
            <div id="mylist3" class="dropdown-content nav_rwd">
                <a href="#" class="dropdown-content_list click">Protocol</a>
                <a href="https://2022.igem.wiki/ccu-taiwan/hardware" class="dropdown-content_list click">Hardware</a>
                <a href="https://2022.igem.wiki/ccu-taiwan/engineering" class="dropdown-content_list click">Engineering</a>
                <a href="https://2022.igem.wiki/ccu-taiwan/results" class="dropdown-content_list click">Results</a>
                <a href="https://2022.igem.wiki/ccu-taiwan/parts" class="dropdown-content_list click">Parts</a>
            </div>
            <div id="mylist4" class="dropdown-content nav_rwd">
                <a href="https://2022.igem.wiki/ccu-taiwan/human-practices" class="dropdown-content_list click">Human Practices</a>
                <a href="https://2022.igem.wiki/ccu-taiwan/education" class="dropdown-content_list click">Education</a>
                <a href="#" class="dropdown-content_list click">Web Game</a>
                <a href="https://2022.igem.wiki/ccu-taiwan/communication" class="dropdown-content_list click">Communication</a>
                <a href="https://2022.igem.wiki/ccu-taiwan/collaborations" class="dropdown-content_list click">Collaborations</a>
                <a href="https://2022.igem.wiki/ccu-taiwan/partnership" class="dropdown-content_list click">Partnership</a>
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

