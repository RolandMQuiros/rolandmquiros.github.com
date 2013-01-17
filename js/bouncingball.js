function BouncingBall(backgroundURL, cellWidth) {
    this.window = $(window);
    this.container = $("#bouncing-ball-outer");
    this.element = $("#bouncing-ball")
            .css("background-image", "url(" + backgroundURL + ")");
    
    this.top = 0;
    this.bottom = 0;
    this.width = this.element.width();
    this.height = this.element.height();
    
    this.targets = [];
    this.bgcellwidth = cellWidth;
    
    var _self = this;
    
    this.hoverHandler = function(bgoffset, dest) {
        _self.element.stop();
        // Align bouncing ball to the target
        _self.element.animate({
            top: dest,
            backgroundPositionX: (-bgoffset * _self.bgcellwidth)
        }, 500);
    };
}

BouncingBall.prototype.addTarget = function(target, bgoffset) {
    // Verify arguments
    if (target === undefined || bgoffset === undefined) {
        return;
    }
    
    // Add target
    if (!(target in this.targets)) {
        this.targets.push({
            target: target,
            bgoffset: bgoffset
        });
    }
    
    // Create hover handler
    target.hover(this.hoverHandler.bind(this, bgoffset, target.position().top));
};

BouncingBall.prototype.moveIntoWindow = function() {
    var winTop = this.window.scrollTop() - this.top;
    var winBottom = winTop + this.window.height() - this.height;
    var imageTop = this.element.position().top;
    
    var dest;
    
    // Move the ball to one of the window extremeties, to keep it within view
    if (winTop < 0) {
        dest = 0;
    } else if (winTop > imageTop && winTop < this.bottom) {
        dest = winTop;
    } else if (winBottom < imageTop && winTop < this.bottom) {
        dest = winBottom;
    }
    
    if (dest !== undefined) {
        this.element.animate({ backgroundPosition: "(0, 0)" }, 500);
        this.element.stop();
        this.element.animate({top: dest,}, 500);
    }
};
