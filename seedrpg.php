<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>err.null: The portfolio of Roland M. Quiros</title>
    <?php include "depends.php"; ?>
    <link href="css/work.css" rel="stylesheet" type="text/css">
    
    <link href="lib/shadowbox-3.0.3/shadowbox.css" rel="stylesheet" type="text/css">
    <script src="lib/shadowbox-3.0.3/shadowbox.js" type="text/javascript"></script>
    
    <script type="text/javascript">
		Shadowbox.init({
			handleOversize: "drag"
		});
	</script>
</head>

<body>
<div id="content">
    <?php include "menu.php"; ?>
	<div id="seedrpg">
    	<h1>Seed RPG</h1>
        <b>Genre:</b> Action RPG<br>
        <b>Development Time:</b> May-June 2012<br>
        <b>Status:</b> Finished<br>
        <b>Team Members:</b> Myself, solo Project.  Music by <a href="http://townfo.lk/">Sabzi</a><br>
        <b>Languages, Frameworks:</b> C#, XNA</a><br>
        
        <p>Originally an experiment in procedural generation (hence the name), the design was co-opted by a Katamari Damacy-like growth gimmick applied to RPG leveling systems.  There are still elements of procedural generation, but their importance was deemphasized, mostly to meet deadlines.</p>
        <p>You play the most diplomatic hero in the world: every enemy you defeat joins your party.  The larger your party, the higher your level, and the stronger enemies you can fight.  You can also visit towns and take quests from townspeople, who will assign you a variety of fetch quests, and reward you with stronger units.</p>
        <div class="work-gallery">
        	<a href="images/work/games/seedrpg/seed01.jpg" rel="shadowbox[seedrpg1]" title="Fighting some goblins">
            	<img src="images/work/games/seedrpg/thumbs/seed01.jpg">
            </a>
        	<a href="images/work/games/seedrpg/seed02.jpg" rel="shadowbox[seedrpg1]" title="The player walks into a church">
            	<img src="images/work/games/seedrpg/thumbs/seed02.jpg">
            </a>
        </div>
        <p>Once your army was sufficiently, ridiculously huge, you could take on the Four Horsemen.  Defeating them draws out the Dark Lord, whose HP is the maximum value of an unsigned 32-bit integer.</p>
        <div class="work-gallery">
        	<a href="images/work/games/seedrpg/seed03.jpg" rel="shadowbox[seedrpg2]" title="The Player's army challenges the Horseman of Procrastination.  Spoiler: they lose.">
            	<img src="images/work/games/seedrpg/thumbs/seed03.jpg">
            </a>
        	<a href="images/work/games/seedrpg/seed04.jpg" rel="shadowbox[seedrpg2]" title="The Dark Lord takes no jive">
            	<img src="images/work/games/seedrpg/thumbs/seed04.jpg">
            </a>
        </div>
        <p><i>Seed RPG</i> was created as my final project for Fooad Khosmood's experimental Interactive Entertainment Engineering course at Cal Poly.  The requirements for this assignment were rather open-ended, so I simply decided to try my hand at a proper 3D game.<p>
        <p>The final product was admittedly rushed, buggy, and unbalanced, but I would definitely want to revisit the army-building and gestural control mechanics.</p>
        
    </div>
</div>
<?php include "footer.php"; ?>
</body>

</html>
