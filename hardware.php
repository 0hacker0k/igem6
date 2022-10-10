
<head>
    <title>wiki</title>
    <?php include "./sub/config.php";?>
    <?php include "./sub/head.php";?>
    <link rel="stylesheet" media="all" href="<?php echo cssfile;?>/common.css">
    
</head>

<body onload="load_finish();">
    <?php include "./sub/header.php"?>
    <?php include "sub/loading.php"?>
    <img class="full_size_image" src="<?php echo imgfile;?>/hardware/banner-hardware.png" alt="">
    <div class="guide" id="guide">
        <div id="guide_content">
            <div class="guide_label" onclick="move_to_item('1');guide_toggle()">
                Overview
            </div>
            <div class="guide_label" onclick="move_to_item('2');guide_toggle()">
                Agar faucet
            </div>
            <div class="guide_label" onclick="move_to_item('3');guide_toggle()">
                Gel Preparation Machine
            </div>
        </div>

        <div id="expansion" onclick="guide_toggle()">
            <div class="overlap_item trapezoid"></div>
            <!-- <div class="overlap_item triangle_to_left"></div> -->
            <div class="overlap_item triangle_to_right"></div>
        </div>    
    </div> 

    
    <div class="overview justify-content-around">
        <div class="col-7">
            <div id="1" class="title-label-div">
                <h1>Overview</h1>
            </div>
            <p>
                <b>
                    In the Open Lab activity, we realized the urban-rural gap is not just a term in the textbook, but a real situation. To support rural teachers without an assistant, we designed a <b>gel preparation machine</b> to allow teachers to prepare the experimental equipment in advance. Since an electronic autopipette is unaffordable in rural schools, we designed an agar faucet to  assist in and standardize agar plate production.
                </b>
            </p>
        </div>
    </div>

    <div class="article">
        <div class="in_center">
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Agar faucet</h2>
            </div>
            <p>
                &emsp;&emsp;Initially, we tested our ideas and generated a prototype of an agar faucet with a 3D printer. The first prototype had an agar bottle cap, which was abandoned because it was not <b>air-tight</b> or user friendly. Therefore, we rebuilt the design and generated a prototype agar faucet using PLA material and a 3D printer. This PLA-based agar faucet works well, was convenient, and allowed standardization. Next, we turned to improving this agar faucet using <b>aluminum</b>, to allow for sterilization. Finally, according to <b>feedback from the users</b>, we decided to evolve the agar faucet into an <b>agar revolver</b> in the future.
            </p>
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Gel preparation machine</h2>
            </div>
            <p>
                &emsp;&emsp;To save rural teachers from the time-consuming preparation needed to do experimental work in synthetic biology in their classes, and thus encourage them to do such lab work, we designed a gel preparation machine with remote control. The design of the gel preparation machine follows the sequence of gel preparation, from mixing agarose powder with TAE buffer, heating, shaking, solidifying, to demoding. We further designed a remote control so teachers would not have to be in the lab to use it. 
            </p>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>              
            <p>
                &emsp;&emsp;With the agar faucet and gel preparation machine, we hope to contribute resources and ideas to this society to help reduce the urban-rural gap.
            </p>
            <div id="2" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Agar faucet</h1>
            </div> 
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')"><b>Agar bottle cap</b> - intuitive design.</h2>
            </div>
            <p>
                &emsp;&emsp;The tilt-shaped agar cap was composed of a <b>cap with a metric thread</b>, and a <b>tub-shaped container</b> with a bevel to pour agar.
            </p>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>      
            <ul>
                <li>
                    <h2 class="h13">Tilt shape</h2>
                    <p>The tilt shape helps the agar liquid flowing out smoothly for convenience.</p>
                </li>
                <li>
                    <h2 class="h13">Cap with Metric thread:</h2>
                    <p>The metric thread could fit the common serum bottle, which is a general container in a biology lab.</p>
                </li>
                <li>
                    <h2 class="h13">Tub-shape container</h2>
                    <p>This could help us to pour a quantitative amount of agar from bevel.</p>
                </li>
                <li>
                    <h2 class="h13">Pressure-control button</h2>
                    <p>The pressure-control makes it easy to control the amount of liquid agar flowing into the tub.</p>
                </li>
            </ul>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>      
            <div class="full_block">
                <div class="img" style="--width:50%;">
                    <img src="<?php echo imgfile;?>/hardware/hardware01.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>      
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Test result of the agar bottle cap</h2>
            </div>
            <p>
                &emsp;&emsp;The agar bottle cap design had lots of problems in testing. For example, the tilt-shaped body was not ergonomic. The angle of tilt and rigid sharp made it hard to handle and to smoothly pour the agar. What's worse, the pressure-control button did not work, because the metric thread was not air-tight. The thread could not perfectly fit the opening of the serum bottle, even though we adjusted the thread and printed an o-ring. Therefore, we decided to stop developing this idea, and move to a different design.
            </p>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>      
            <div class="full_block">
                <div class="img" style="--width:32%;">
                    <img src="<?php echo imgfile;?>/hardware/hardware02.png"/>
                    <div class="triangle_to_top"></div>Remove the tilt shape
                </div>
                <div class="img" style="--width:32%;">
                    <img src="<?php echo imgfile;?>/hardware/hardware03.png"/>
                    <div class="triangle_to_top"></div>Test o-ring
                </div>
                <div class="img" style="--width:28%;">
                    <img src="<?php echo imgfile;?>/hardware/hardware04.png"/>
                    <div class="triangle_to_top"></div>Adjust thread
                </div>
            </div>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>      
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">From agar bottle cap to agar faucet</h2>
            </div>
            <p>
                &emsp;&emsp;What if we skipped the idea of a container with a fixed volume and let the gel flow steadily? Then the quantification could be achieved by controlling the flowing time. Along with this idea, we decided to focus our design on easy operation. Inspired by a batter dispenser, which can be operated with one hand, we built a second version, Agar faucet.
            </p>
            <p>
                &emsp;&emsp;The agar faucet is composed of a <b>handle</b>, a <b>funnel-shaped channel</b>, and a <b>flow blocker</b> based on leverage.
            </p>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>      
            <ul>
                <li>
                    <h2 class="h13">Handle</h2>
                    <p>
                        This lets the user more easily hold the faucet with a container on it.   
                    </p>
                </li>
                <li>
                    <h2 class="h13">Funnel shaped channel</h2>
                    <p>
                        The funnel shape helps to control the flow rate.
                    </p>
                </li>
                <li>
                    <h2 class="h13">Flow blocker</h2>
                    <p>
                        Helps users to control the gel using leverage.
                    </p>
                </li>
            </ul>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>      
            <div class="full_block">
                <div class="img" style="--width:60%;">
                    <img src="<?php echo imgfile;?>/hardware/hardware05.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>      
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Sterilization requirement for the agar faucet</h2>
            </div>
            <p>
                &emsp;&emsp;In practice, the agar faucet would need to be sterilized in an autoclave, which is impossible with the PLA material. Therefore, we changed the material from PLA to Aluminum.
            </p>
            <p>
                &emsp;&emsp;The original design of the flow blocker had a curved, aesthetically pleasing surface, which is practical for 3D printing, but not processing a metal workpiece. After discussing with Professor Wu, we adjusted the blueprint of the agar faucet, and separated the agar faucet into four pieces to produce.
            </p>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>      
            <div class="full_block">
                <div class="img" style="--width:40%;">
                    <img src="<?php echo imgfile;?>/hardware/hardware06.png"/>
                    <div class="triangle_to_top"></div>Before 
                </div>
                <div class="img" style="--width:40%;">
                    <img src="<?php echo imgfile;?>/hardware/hardware07.png"/>
                    <div class="triangle_to_top"></div>After
                </div>
            </div>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>      
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Components of the aluminum agar faucet</h2>
            </div>
            <ul>
                <li>
                    <h2 class="h13">Flow blocker (blue)</h2>
                    <p>
                        The parts of the flow blocker are processed by sawing and the pillar drilling machine. After production, the components will be welded together.
                    </p>
                </li>
                <li>
                    <h2 class="h13">Thread (yellow)</h2>
                    <p>
                        We first turned the outer diameter to the proper size by lathe, and then drilled and bored the internal diameter to fit the diameter of the funnel. Finally, we used a gearbox to make the inner thread.
                    </p>
                </li>
                <li>
                    <h2 class="h13">Funnel (green)</h2>
                    <p>
                        The largest and smallest outer diameters of the funnel shape, the funnel and the channel, respectively, are turned by lathe. The taper of the funnel is turned by swiveling the turning tool, and the inner diameter of the funnel is bored with a pillar drilling machine. Finally the bevel of the channel is cut by a milling machine.
                    </p>
                </li>
                <li>
                    <h2 class="h13">Handle (purple)</h2>
                    <p>
                        We turned the outer diameter to the proper size using a lathe, and cut the curved surface to fit the outside diameter of the thread with a milling machine.
                    </p>
                </li>
            </ul>   
            <div class="marge" style="--width:calc(2em + 2vh)"></div>      
            <div class="full_block">
                <div class="img" style="--width:60%;">
                    <img src="<?php echo imgfile;?>/hardware/hardware08.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>      
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Future improvements on the agar faucet - agar revolver</h2>
            </div>
            <p>
                &emsp;&emsp;After discussing with Dr. Lee from the precision molding research center, we came up with a new idea – Agar revolver. The agar revolver will be composed of the following three parts:
            </p>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>      
            <ul>
                <li>
                    <h2 class="h13">Thread</h2>
                    <p>
                        This part includes a metric thread to fit the common serum bottle.
                    </p>
                </li>
                <li>
                    <h2 class="h13">Chambers</h2>
                    <p>
                        The chambers will look like the cylinder of a revolver.The agar will be loaded into chambers one by one.
                    </p>
                </li>
                <li>
                    <h2 class="h13">Wheel</h2>
                    <p>
                        The wheel will turn the chambers one by one to the exit barrel.
                    </p>
                </li>
            </ul>
            <div id="3" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Gel Preparation Machine</h1>
            </div>
            <p>
                &emsp;&emsp;Agarose gel electrophoresis is a routine experiment to examine the size of DNA fragments. The electrophoresis experiment is simple, but the agarose gels should be prepared freshly for the best resolution. To save time and manpower when making agarose gel, we designed an automatic machine to make agarose gels remotely. 
            </p>
            <p>
                &emsp;&emsp;The machine is comprised of five parts, following the gel preparation protocol:
            </p>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>
            <h2 class="h13">Preparation of solution</h2>
            <h2 class="h13">Heating</h2>
            <h2 class="h13">Blending</h2>
            <h2 class="h13">Demolding</h2>
            <h2 class="h13">Cutting</h2>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>
            <p>
                &emsp;&emsp;"Preparation of solution" quantifies the amount of TAE and agarose, while "heating" and "blending" heat and mix the TAE and agarose and deliver it to the mold. The "demolding" part demolds the gel after solidification. The "cutting" part slices the gel into ideal sizes and stores the sliced gels in TAE buffer.
            </p>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>      
            <div class="full_block">
                <div class="img" style="--width:60%;">
                    <img src="<?php echo imgfile;?>/hardware/hardware09.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Preparation of solution - Archimedes screw</h2>
            </div>
            <p>
                &emsp;&emsp;An Archimedes screw is used for transferring materials from lower to higher places through turning. By setting the number of turns of the screw, the amount of materials transferred can be determined.
            </p>
            <p>
                &emsp;&emsp;To quantify TAE and agarose, we included Archimedes screws in our design. The design of the Archimedes screw for the TAE buffer is conventional, while the design for the agarose powder is quite different. The screw for the agarose powder has an outer screw with an inverse spiral to increase the flow of powder and avoid jamming.
            </p>
            <p>
                &emsp;&emsp;The Archimedes screws will be powered by gear motors, which are installed on the demolding platform. The adjustable speed of the gear motors enables us to operate the Archimedes screws at a certain speed to measure the amount of TAE buffer and agarose.
            </p>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:40%;">
                    <img src="<?php echo imgfile;?>/hardware/hardware10.png"/>
                    <div class="triangle_to_top"></div>Agarose straw
                </div>
                <div class="img" style="--width:40%;">
                    <img src="<?php echo imgfile;?>/hardware/hardware11.png"/>
                    <div class="triangle_to_top"></div>TAE straw
                </div>
            </div>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Preparation of solution - storage box</h2>
            </div>
            <p>
                &emsp;&emsp;The storage boxes for the solute and the solvent are designed to cooperate with the Archimedes screws. The walls of the storage box are tilted to fit the angle of the screw and to collect the TAE buffer even when the level is low. The U-type trench in the wall is designed to connect the water outlet of the screw and to collect TAE buffer non-directionally, because rapid screw movement could splash the transferred materials.
            </p>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>      
            <div class="full_block">
                <div class="img" style="--width:20%;">
                    <img src="<?php echo imgfile;?>/hardware/hardware12.png"/>
                </div>
                <div class="img" style="--width:20%;">
                    <img src="<?php echo imgfile;?>/hardware/hardware13.png"/>
                </div>
                <div class="img" style="--width:20%;">
                    <img src="<?php echo imgfile;?>/hardware/hardware14.png"/>
                </div>
                <div class="img" style="--width:20%;">
                    <img src="<?php echo imgfile;?>/hardware/hardware15.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Heating - enameled copper wire and heating box</h2>
            </div>
            <p>
                &emsp;&emsp;We applied enameled copper wire as the heat source. The electric current going through the enameled copper wire will be transformed into heat. To provide the heat uniformly, the enameled copper wires are twined around the heating box. The heating box is made of aluminum, due to its light weight and high thermal conductivity. The light weight of the box can reduce the load to the blending device, while high thermal conductivity can not only increase the dissolution rate but also dissipate heat quickly when cooling to solidify the gel.
            </p>
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Blending - shaking pedestal</h2>
            </div>
            <p>
                &emsp;&emsp;Agitation is necessary for the uniform mixing of heated TAE buffer and agarose powder. Therefore, we made a shaking pedestal under the heating box with a servo motor. The servo motor horizontally moves the pedestal through an attached cylinder. The motion trail will be a roughly 60 degrees circular arc, presenting a regular oscillation.
            </p>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>      
            <div class="full_block">
                <div class="img" style="--width:40%;">
                    <img src="<?php echo imgfile;?>/hardware/hardware16.png"/>
                </div>
                <div class="img" style="--width:40%;">
                    <img src="<?php echo imgfile;?>/hardware/hardware17.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Demolding - upper mold</h2>
            </div>
            <p>
                &emsp;&emsp;The upper mold is vertically controlled by a stepper motor linear actuator. The upper mold moves down after the shaking pedestal uniformly mixes the dissolved agarose, and the agarose gel will be solidified on the bottom plate of the upper mold. After the agarose gel is fully solidified, the upper mold can move upward to demold the gel from the lower mold.
            </p>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>      
            <div class="full_block">
                <div class="img" style="--width:60%;">
                    <img src="<?php echo imgfile;?>/hardware/hardware18.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Demolding - lower mold</h2>
            </div>
            <p>
                &emsp;&emsp;The lower mold is actually the same as the heating and blending part, but adding a comb for the wells in the agarose gel. The comb is made of aluminum by a milling machine to limit weight and increase temperature resistance. The intervals between each well are 2 mm, the length of each well is about 1.5 mm, the width is about 4.5 mm and the height is about 8 mm. The upper mold will go through the comb to manufacture of wells on the gel.
            </p>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>      
            <div class="full_block">
                <div class="img" style="--width:60%;">
                    <img src="<?php echo imgfile;?>/hardware/hardware19.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Gel pusher</h2>
            </div>
            <p>
                &emsp;&emsp;After the gel is solidified, the upper mold will move vertically to a fixed height. At that time, the upper mold, the gel pusher, and the cutting tunnel will be horizontal coplanar. The final demolding step is executed by the gel pusher. The pusher uses a motor to drive the gear and the gear rack to implement forward motion to demold the gel from the upper mold.
            </p>
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Cutting - The cutting tunnel</h2>
            </div>
            <p>
                &emsp;&emsp;A tunnel loaded with blades is designed in front of the demolding platform. There are equidistant grooves on the tunnel to load blades, which allows users to choose the size of the gel.  When the gel is demolded by the gel pusher, the blades loaded in the grooves will cut it into ideal pieces. Gel pieces then slide into the gel storage box.
            </p>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:60%;">
                    <img src="<?php echo imgfile;?>/hardware/hardware20.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Cutting - gel storage box</h2>
            </div>
            <p>
                &emsp;&emsp;After manufacture of the gel is complete, the gel has to be stored in TAE buffer. Therefore, a box filled with TAE is made for this purpose. There are three boards in the storing box. One is a dust cover, another is a platform to stack the gel , and a third perpendicular board connects these two as a handle.
            </p>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:60%;">
                    <img src="<?php echo imgfile;?>/hardware/hardware21.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Software for remote control of the gel preparation machine</h2>
            </div>
            <p>
                &emsp;&emsp;To accomplish remote control, we use Raspberry Pi as the embedded system in our machine. Control of all components is coded in C programming language to command each GPIO pin.
            </p>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>
            <ul>
                <li>
                    <h2 class="h13">Micro servo motor</h2>
                    <p>
                        We coded a program which can switch the signal between 0 and 1 and change the ratio of two signals. As a PWM signal, the turning direction of the motor can be controlled. This is coordinated with the mechanism design to attain the desired blending effect.
                    </p>
                </li>
                <li>
                    <h2 class="h13">Passive buzzer</h2>
                    <p>
                        Through controlling the ratio of 1 and 0 signals, we can create a unique sound for warning or finish.
                    </p>
                </li>
                <li>
                    <h2 class="h13">Seven-segment display</h2>
                    <p>
                        To illustrate the information needed by the user, we control the signal from the CLK pin and two DIO pins.
                    </p>
                </li>
                <li>
                    <h2 class="h13">Gear motor and heating coil</h2>
                    <p>
                        We need to apply 24 volts to drive the gear motor and heating coil but the Raspberry Pi can only supply 3 volts. To solve this problem, we use a relay to control another power supply.
                    </p>
                </li>
                <li>
                    <h2 class="h13">Motor for piston</h2>
                    <p>
                        Raspberry Pi cannot achieve concurrent and countercurrent signals of 5 volt, but this is what we need to control the clockwise and counterclockwise rotation of the motor. Thus, we apply a motor controller module to help us to control the direction of rotation of the motor. 
                    </p>
                </li>
                <li>
                    <h2 class="h13">Stepper motor linear actuator</h2>
                    <p>
                        This is a relatively special motor. It cannot be controlled simply by transmitting electric current. Instead, it needs four pins to output the signal sequentially so that the motor can function. Therefore, we also use the motor controller module to change the output and input signal of different pins.
                    </p>
                </li>
            </ul>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>
            <p>
                &emsp;&emsp;For Raspberry Pi, we use C programming language calling the wget command from linux to receive messages from the server every five seconds and return its current state. For multiple threads, we can receive commands while controlling the signal from each pin.
            </p>
            <p>
                &emsp;&emsp;For the server, we use a website to build a user interface available to users. By using php programming language manipulating mysql database, user commands and status messages from Raspberry Pi can be stored and exchanged.
            </p>
            <p>
                &emsp;&emsp;For users, we can operate the data on the server through a specific website, indirectly controlling the operation of the Raspberry Pi. We can also check the current operating state of the Raspberry Pi on the website.
            </p>
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Manufacturing</h2>
            </div>
            <ul>
                <li>
                    <h2 class="h13">3D printer</h2>
                    <p>In order to quickly test the feasibility of our concept and build complex shapes, we utilized 3D printing technology to build our prototype, because it is relatively simple and straightforward compared to traditional machining. Before printing it, we had to first build a model with a Computer-Aided-Design (CAD) diagram. Based on a course in the mechanical engineering department we chose CREO, a convenient software for engineering drawing used worldwide. After that, we needed to turn the file into mechanical code (.gcode ). Then, our 3D printer Ultimaker Cura 4.0 could read our blueprint and start to print.</p>
                </li>
                <li>
                    <h2 class="h13">Machining</h2>
                    <p>In order to allow our product to withstand moist heat sterilization, a widely used method in the laboratory, we made a model, completing most of the process in our factory classroom.</p>
                </li>
            </ul>      
            <ul>
                <li class="biggerliss">
                    <b>Saw:</b> cut metal sheets, metal rods and acrylic boards 
                </li>
                <li class="biggerliss">
                    <b>Lathe:</b> turn and drill the metal rod
                </li>
                <li class="biggerliss">
                    <b>Milling machine:</b> cut metal sheets, conduct face milling and side milling operations
                </li>
                <li class="biggerliss">
                    <b>Vertical band saw:</b> cut the acrylic board
                </li>
                <li class="biggerliss">
                    <b>Pillar drill:</b> drill out metal workpieces and acrylic boards
                </li>
            </ul>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>      
            <p>
                &emsp;&emsp;We could not even imagine how much time or money we would need to spend if we did not have access to those tools. Processing in the factory not only saved us lots of time but also taught us a lot!
            </p>           
            </div>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>      
            <div class="full_block">
                <div class="img" style="--width:40%;">
                    <img src="<?php echo imgfile;?>/hardware/hardware22.png"/>
                </div>
                <div class="img" style="--width:40%;">
                    <img src="<?php echo imgfile;?>/hardware/hardware23.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>    
        </div>
    </div>
    


    <?php include "./sub/footer.php"?>
    <script src="<?php echo jsfile;?>/common.js"></script>  
</body>