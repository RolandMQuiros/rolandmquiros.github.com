$(window).load(function() {
    var ball = new BouncingBall("images/resumestrip.png", 180);
    
    var footerHeight = $("#footer").height();
	var resumeTop = $("#resume").position().top;
	var resumeBottom = $(document).height() - resumeTop - footerHeight - 180;
    
    ball.top = resumeTop;
    ball.bottom = resumeBottom;
    //$(window).scroll(ball.moveIntoWindow.bind(ball));
	
	var targets = [
		"education",
		"hubsu",
		"cla",
		"compositesw",
		"languages",
		"libraries",
        "platforms",
		"applications",
		"mbari",
		"fileserver",
		"cuda",
		"darwin",
		"delabismo",
		"mazzetti",
		"lockheed"
	];
	
	
	for (var i = 0; i < targets.length; i++) {
		// Check for subsections
		var section = $("#" + targets[i] + ".resume-subsection");
		if (section.length === 0) {
			section = $("#" + targets[i] + ".resume-section");
			if (section.length === 0) {
				continue;	
			}
		}
        
        ball.addTarget(section, i + 1);
	}
});

/*
 * Move image y to correspond to hovered section
 */