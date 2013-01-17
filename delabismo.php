<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>err.null: The portfolio of Roland M. Quiros</title>
    <?php include "depends.php"; ?>
    <link href="css/gameproject.css" rel="stylesheet" type="text/css">
    <script src="js/delabismo.js" type="text/javascript"></script>
</head>

<body>
<div id="content">
    <?php include "menu.php"; ?>
    <div id="delabismo">
        <h1>Stories From Del Abismo</h1>
        <b>Genre:</b> Dating Sim/Arena Shooter/RPG<br>
        <b>Development Time:</b> 2011-Present<br>
        <b>Status:</b> In development, indefinitely :\<br>
		<b>Team Members:</b> Myself, Solo Project<br>
        <b>Languages, Frameworks:</b> C++, Lua, SFML<br>
        <b>Source: </b> <a href="http://github.com/RolandMQuiros/StoriesFromDelAbismo">GitHub</a>
        <div class="delabismo-accordion">
            <h2>Background</h2>
            <div>
                <p>Del Abismo is a life simulation/dungeon crawler/Top-down shoot'em-up hybrid, in the vein of Persona 4 and Geometry Wars, with a pinch of Rogue, Metroid, and Zelda.  I've been working on it, on-and-off, since around late 2010, mostly obsessing over game engine design.  I started its current form early 2012, and it's been making very slow and steady progress since.</p>
            </div>
            
            <h2>Synopsis</h2>
            <div>
                <p>You play as Chet Damascus, an introverted twenty-something living in the American southwest city of Del Abismo.  Strange things have been happening lately: TV signals hijacked, pop stations replaced with numbers stations, and a series of killings in places equidistant to your apartment complex.</p>
                <p>Even stranger, you swear someone's stealing your wifi.  No one else is having connection issues and your password is 63 characters long, what gives.  And now your brother, "ace" detective Chase Damascus, is at your doorstep accusing you of murder.  The worst day.</p>
                <p>As it so happens, you find out your router can peer into another world, completely different from our own, but subject to our every whim and fancy.  It's a world borne from our communication systems, as loud and caustic as our radio waves, as colorful as our television signals, and as horrible and beautiful and dangerous as our words.  With your power to explore the mysterious Otherside (and Chase's incessant prodding), you set out to find the truths behind this town named Abyss.</p>
            </div>
            
            <h2>Gameplay Mechanics</h2>
            <div>
                <p><i>Del Abismo</i> is divided between the two worlds: reality and Otherside, each representing a different genre of play: the life simulation and shoot'em-up (shmup), respectively.</p>
                
                <div class="delabismo-accordion">
                    <h3>The Life Simulation</h3>
                    <div>
                        <p>In the Sim, you explores the city of Del Abismo, working, meeting other characters, forging friendships, and more.  With every relationship formed, and bond strengthened, the landscape of the Otherside changes, allowing you to further explore its dungeons.</p>
                        <div class="delabismo-accordion">
                            <h4>Social Links</h4>
                            <div>
                            <p>Borrowing the term from <i>Persona 3 and 4</i>, you can forge bonds with certain NPCs, called Social Links.  Each link is a [mostly] self-contained story with branching outcomes and multiple endings, and corresponds with a dungeon on the Otherside.  The state of your relationship will change the dungeon's enemies, their placement, level layout, and other elements.</p>
                            </div>
                            
                            <h4>Stamina Points and Time</h4>
                            <div>
                            <p>The Sim is divided into days, and each day gives you an allotment of <strong>time and Stamina Points (SP)</strong>.  Everything you do in the Sim costs one or both of these resources: talking to people, moving from place to place, going out at night, etc.</p>
                            <p>Chet, as a severe introvert, has a very limited pool of SP.  At the start of the game, he has barely enough to ride the bus to work, sit motionless in his cubicle, and ride the bus back.  He can recover by doing some activities alone, like reading or browsing the Internet, or sleeping early.  However, if he overexerts himself, he might end up with <b>negative SP</b>, which halves his recovery rates and often confines him to his apartment,  which may have serious consequences for your relationships. </p>
                            <p>It's not hopeless, though. To increase your SP pool, you need to strengthen your social abilities.  Normally, the only way do to this is being social, but you have an advantage: the Otherside.  <b>Defeating rare minibosses on the Otherside can yield significant SP boosts.</b>  Note these gains are not permanent. Rather, your SP does <i>not</i> have an upper limit, so you can collect boosts as much as you want (Your passive recovery, however, only works when your SP is beneath a certain cap). So, by defeating minibosses you might end up with a reserve lasting you a week or more.</p>
                            </div>    
                            <h4>Social Perks</h4>
                            <div>
                            <p>Defeating certain minibosses on the Otherside can also reward you with a <b>Social Perk</b>, a special ability that significantly affects how your SP and time are spent.  For example, the "Joe Metro" perk will eliminate SP costs and decrease the time spent riding public transportation, and "Eyes Up Here" will lower the SP requirement for talking to women.</p>
                            </div>
                            
                            <h4>"Sight beyond sight"</h4>
                            <div>
                            <p>Every location in the real world directly corresponds to a dungeon on the Otherside.  You can, at any time, peer into the Otherside to see the enemy composition and what paths are available.</p>
                            </div>
                        </div>
                    </div>
                
	                <h3>The Shmup</h3>
	                <div>
    		            <p>The Shmup is a mixture of <i>Smash TV/Geometry Wars</i>-style controls with oldschool <i>Zelda</i>-like level layouts.  Here, you explore the Otherside, a digitally-themed dungeon world controlled by your actions in reality.</p>
                    	
                        <div class="delabismo-accordion">
                            <h4>Structure</h4>
                            <div>
                                <p>The Otherside consists of dungeons, checkpoints, guardian chambers, and the procedurally generated tunnels connecting each of them.  <b>Guardian chambers</b> contain the only mandatory bosses in the game: eight powerful enemies that need to be defeated before the path to the final boss is opened.  Technically, if you're a sufficiently insane bullet hell master, you can beat the game on the first in-game day.  <b>The other dungeons exist only to make the guardian chambers easier.</b></p>
                                <p>The dungeons are composed of discrete "rooms," each containing a unique challenge, like certain enemy combinations or puzzles.  Newly discovered dungeons will always have a small number of roaming minibosses.
                                </p>
                            </div>
                            
                            <h4>The Party</h4>
                            <div>
                            	<p>In the Shmup, you control a "ship" consisting of up to five party members.  Each member provides an additional weapon, a passive ability, and a health bonus, but also exponentially increases the size of the ship's hitbox.</p>
                            </div>
                            
                            <h4>Dying</h4>
                            <div>
                            	<p>Every part of the Otherside corresponds to a location in reality.  Running out of health in the Otherside will simply "kick" you back into a real world area, giving you a small window of time to scramble back to a checkpoint and retry the room.  Failing to reach the checkpoint in time will lock you from reentering Otherside until the following in-game day.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h2>Artwork</h2>
            <div></div>
      </div>
  </div>
</div>
<?php include "footer.php"; ?>
</body>

</html>
