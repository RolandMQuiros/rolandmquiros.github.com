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
		Shadowbox.init({ handleOversize: "drag" });
	</script>
</head>

<body>
<div id="content">
    <?php include "menu.php"; ?>
	<div id="darwin">
	    <h1>Darwin is Dead</h1>
        <b>Genre:</b> Top-down Shoot'em Up<br>
        <b>Development Time:</b> October 2011-December 2011<br>
        <b>Status:</b> Finished<br>
        <b>Team Members:</b> Myself, <a href="http://www.linkedin.com/pub/esfandiar-manii/3b/aa5/7a">Esfandiar Manii</a>, <a href="http://www.linkedin.com/pub/girum-ibssa/33/736/739">Girum Ibssa</a>, <a href="http://www.linkedin.com/pub/russell-fritch/1b/b64/72b">Russell Fritch</a>, Jason Jung, Paul Heimburg<br>
        <b>Role:</b> Project lead, Architect<br>
        <b>Languages, Frameworks:</b> C#, Microsoft XNA4<br>
        <b>Source:</b> <a href="https://www.dropbox.com/s/6jn8124cp0ek62g/DarwinIsDead-src.zip">Here</a><br>
        
        <p>Written for <a href="http://users.csc.calpoly.edu/~fkurfess/">Franz Kurfess'</a> Artificial Intelligence course, Darwin is Dead is a simple top-down arena shooter that uses a genetic algorithm to generate enemies.  Each "zombie" would possess a certain number of "traits" taken from a larger pool.  Each trait would represent a different ability: weapon types, movement speeds, etc.  Zombies with the greatest survivability would sexually pass their traits onto the following wave, while randomly adding untapped traits from the pool.  The algorithm would "converge" when the player is defeated.</p>
        <div class="work-gallery">
            <a href="images/work/games/darwin/did.png" rel="shadowbox[darwin]" title="Our project for Image Transparency 101.  We got Ds because the professor disliked confrontation.">
                <img src="images/work/games/darwin/thumbs/did.jpg">
            </a>
            <a href="images/work/games/darwin/did2.png" rel="shadowbox[darwin]" title="Try to guess where the hitbox is on the TARDIS.  We don't know where it is, either.">
                <img src="images/work/games/darwin/thumbs/did2.jpg">
            </a>
		</div>
        <p>The graphics are rather programmer, I know.</p>
		<p>I was the de facto project lead for the game, designing the architecture such that other members could easily extend a few classes to create their own traits and weapons.  This kept everyone's work mostly independent, which was helpful considering the little time we had to spare for meetings.</p>
		<p>This led to some…interesting variations in gameplay, for better or worse.</p>
        
    </div>
</div>
<?php include "footer.php"; ?>
</body>

</html>
