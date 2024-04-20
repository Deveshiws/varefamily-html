


///////////////////////////////// ANIMATE.JS /////////////////////////////////

// adapted from: http://gsgd.co.uk/sandbox/jquery/easing/

// for visual examples, see: https://easings.net/en



var AJS = {

	linear: function ( beginningValue, endValue, durationInFrames, framesElapsed, delayInFrames=0 ) {
		var t = framesElapsed - delayInFrames < 0 ? 0 : framesElapsed;  // time since start (as frames elapsed)
		var b = beginningValue;  // beginning value
		var c = endValue - beginningValue;  //  change in value overall
		var d = durationInFrames;  // duration (in frames) overall
		return t*(c/d) + b;
	},

	easeInQuad: function ( beginningValue, endValue, durationInFrames, framesElapsed, delayInFrames=0 ) {
		var t = framesElapsed - delayInFrames < 0 ? 0 : framesElapsed;  // time since start (as frames elapsed)
		var b = beginningValue;  // beginning value
		var c = endValue - beginningValue;  //  change in value overall
		var d = durationInFrames;  // duration (in frames) overall
		return c*(t/=d)*t + b;
	},

	easeOutQuad: function ( beginningValue, endValue, durationInFrames, framesElapsed, delayInFrames=0 ) {
		var t = framesElapsed - delayInFrames < 0 ? 0 : framesElapsed;  // time since start (as frames elapsed)
		var b = beginningValue;  // beginning value
		var c = endValue - beginningValue;  //  change in value overall
		var d = durationInFrames;  // duration (in frames) overall
		return -c *(t/=d)*(t-2) + b;
	},

	easeInOutQuad: function ( beginningValue, endValue, durationInFrames, framesElapsed, delayInFrames=0 ) {
		var t = framesElapsed - delayInFrames < 0 ? 0 : framesElapsed;  // time since start (as frames elapsed)
		var b = beginningValue;  // beginning value
		var c = endValue - beginningValue;  //  change in value overall
		var d = durationInFrames;  // duration (in frames) overall
		if ((t/=d/2) < 1) return c/2*t*t + b;
		return -c/2 * ((--t)*(t-2) - 1) + b;
	},

	easeInCubic: function ( beginningValue, endValue, durationInFrames, framesElapsed, delayInFrames=0 ) {
		var t = framesElapsed - delayInFrames < 0 ? 0 : framesElapsed;  // time since start (as frames elapsed)
		var b = beginningValue;  // beginning value
		var c = endValue - beginningValue;  //  change in value overall
		var d = durationInFrames;  // duration (in frames) overall
		return c*(t/=d)*t*t + b;
	},

	easeOutCubic: function ( beginningValue, endValue, durationInFrames, framesElapsed, delayInFrames=0 ) {
		var t = framesElapsed - delayInFrames < 0 ? 0 : framesElapsed;  // time since start (as frames elapsed)
		var b = beginningValue;  // beginning value
		var c = endValue - beginningValue;  //  change in value overall
		var d = durationInFrames;  // duration (in frames) overall
		return c*((t=t/d-1)*t*t + 1) + b;
	},

	easeInOutCubic: function ( beginningValue, endValue, durationInFrames, framesElapsed, delayInFrames=0 ) {
		var t = framesElapsed - delayInFrames < 0 ? 0 : framesElapsed;  // time since start (as frames elapsed)
		var b = beginningValue;  // beginning value
		var c = endValue - beginningValue;  //  change in value overall
		var d = durationInFrames;  // duration (in frames) overall
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	},

	easeInQuart: function ( beginningValue, endValue, durationInFrames, framesElapsed, delayInFrames=0 ) {
		var t = framesElapsed - delayInFrames < 0 ? 0 : framesElapsed;  // time since start (as frames elapsed)
		var b = beginningValue;  // beginning value
		var c = endValue - beginningValue;  //  change in value overall
		var d = durationInFrames;  // duration (in frames) overall
		return c*(t/=d)*t*t*t + b;
	},

	easeOutQuart: function ( beginningValue, endValue, durationInFrames, framesElapsed, delayInFrames=0 ) {
		var t = framesElapsed - delayInFrames < 0 ? 0 : framesElapsed;  // time since start (as frames elapsed)
		var b = beginningValue;  // beginning value
		var c = endValue - beginningValue;  //  change in value overall
		var d = durationInFrames;  // duration (in frames) overall
		return -c * ((t=t/d-1)*t*t*t - 1) + b;
	},

	easeInOutQuart: function ( beginningValue, endValue, durationInFrames, framesElapsed, delayInFrames=0 ) {
		var t = framesElapsed - delayInFrames < 0 ? 0 : framesElapsed;  // time since start (as frames elapsed)
		var b = beginningValue;  // beginning value
		var c = endValue - beginningValue;  //  change in value overall
		var d = durationInFrames;  // duration (in frames) overall
		if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
		return -c/2 * ((t-=2)*t*t*t - 2) + b;
	},

	easeInQuint: function ( beginningValue, endValue, durationInFrames, framesElapsed, delayInFrames=0 ) {
		var t = framesElapsed - delayInFrames < 0 ? 0 : framesElapsed;  // time since start (as frames elapsed)
		var b = beginningValue;  // beginning value
		var c = endValue - beginningValue;  //  change in value overall
		var d = durationInFrames;  // duration (in frames) overall
		return c*(t/=d)*t*t*t*t + b;
	},

	easeOutQuint: function ( beginningValue, endValue, durationInFrames, framesElapsed, delayInFrames=0 ) {
		var t = framesElapsed - delayInFrames < 0 ? 0 : framesElapsed;  // time since start (as frames elapsed)
		var b = beginningValue;  // beginning value
		var c = endValue - beginningValue;  //  change in value overall
		var d = durationInFrames;  // duration (in frames) overall
		return c*((t=t/d-1)*t*t*t*t + 1) + b;
	},

	easeInOutQuint: function ( beginningValue, endValue, durationInFrames, framesElapsed, delayInFrames=0 ) {
		var t = framesElapsed - delayInFrames < 0 ? 0 : framesElapsed;  // time since start (as frames elapsed)
		var b = beginningValue;  // beginning value
		var c = endValue - beginningValue;  //  change in value overall
		var d = durationInFrames;  // duration (in frames) overall
		if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
		return c/2*((t-=2)*t*t*t*t + 2) + b;
	},

	easeInSine: function ( beginningValue, endValue, durationInFrames, framesElapsed, delayInFrames=0 ) {
		var t = framesElapsed - delayInFrames < 0 ? 0 : framesElapsed;  // time since start (as frames elapsed)
		var b = beginningValue;  // beginning value
		var c = endValue - beginningValue;  //  change in value overall
		var d = durationInFrames;  // duration (in frames) overall
		return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
	},

	easeOutSine: function ( beginningValue, endValue, durationInFrames, framesElapsed, delayInFrames=0 ) {
		var t = framesElapsed - delayInFrames < 0 ? 0 : framesElapsed;  // time since start (as frames elapsed)
		var b = beginningValue;  // beginning value
		var c = endValue - beginningValue;  //  change in value overall
		var d = durationInFrames;  // duration (in frames) overall
		return c * Math.sin(t/d * (Math.PI/2)) + b;
	},

	easeInOutSine: function ( beginningValue, endValue, durationInFrames, framesElapsed, delayInFrames=0 ) {
		var t = framesElapsed - delayInFrames < 0 ? 0 : framesElapsed;  // time since start (as frames elapsed)
		var b = beginningValue;  // beginning value
		var c = endValue - beginningValue;  //  change in value overall
		var d = durationInFrames;  // duration (in frames) overall
		return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
	},

	easeInExpo: function ( beginningValue, endValue, durationInFrames, framesElapsed, delayInFrames=0 ) {
		var t = framesElapsed - delayInFrames < 0 ? 0 : framesElapsed;  // time since start (as frames elapsed)
		var b = beginningValue;  // beginning value
		var c = endValue - beginningValue;  //  change in value overall
		var d = durationInFrames;  // duration (in frames) overall
		return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
	},

	easeOutExpo: function ( beginningValue, endValue, durationInFrames, framesElapsed, delayInFrames=0 ) {
		var t = framesElapsed - delayInFrames < 0 ? 0 : framesElapsed;  // time since start (as frames elapsed)
		var b = beginningValue;  // beginning value
		var c = endValue - beginningValue;  //  change in value overall
		var d = durationInFrames;  // duration (in frames) overall
		return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
	},

	easeInOutExpo: function ( beginningValue, endValue, durationInFrames, framesElapsed, delayInFrames=0 ) {
		var t = framesElapsed - delayInFrames < 0 ? 0 : framesElapsed;  // time since start (as frames elapsed)
		var b = beginningValue;  // beginning value
		var c = endValue - beginningValue;  //  change in value overall
		var d = durationInFrames;  // duration (in frames) overall
		if (t==0) return b;
		if (t==d) return b+c;
		if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
		return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
	},

	easeInCirc: function ( beginningValue, endValue, durationInFrames, framesElapsed, delayInFrames=0 ) {
		var t = framesElapsed - delayInFrames < 0 ? 0 : framesElapsed;  // time since start (as frames elapsed)
		var b = beginningValue;  // beginning value
		var c = endValue - beginningValue;  //  change in value overall
		var d = durationInFrames;  // duration (in frames) overall
		return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
	},

	easeOutCirc: function ( beginningValue, endValue, durationInFrames, framesElapsed, delayInFrames=0 ) {
		var t = framesElapsed - delayInFrames < 0 ? 0 : framesElapsed;  // time since start (as frames elapsed)
		var b = beginningValue;  // beginning value
		var c = endValue - beginningValue;  //  change in value overall
		var d = durationInFrames;  // duration (in frames) overall
		return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
	},

	easeInOutCirc: function ( beginningValue, endValue, durationInFrames, framesElapsed, delayInFrames=0 ) {
		var t = framesElapsed - delayInFrames < 0 ? 0 : framesElapsed;  // time since start (as frames elapsed)
		var b = beginningValue;  // beginning value
		var c = endValue - beginningValue;  //  change in value overall
		var d = durationInFrames;  // duration (in frames) overall
		if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
		return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
	},

	easeInElastic: function ( beginningValue, endValue, durationInFrames, framesElapsed, delayInFrames=0 ) {
		var t = framesElapsed - delayInFrames < 0 ? 0 : framesElapsed;  // time since start (as frames elapsed)
		var b = beginningValue;  // beginning value
		var c = endValue - beginningValue;  //  change in value overall
		var d = durationInFrames;  // duration (in frames) overall
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
	},

	easeOutElastic: function ( beginningValue, endValue, durationInFrames, framesElapsed, delayInFrames=0 ) {
		var t = framesElapsed - delayInFrames < 0 ? 0 : framesElapsed;  // time since start (as frames elapsed)
		var b = beginningValue;  // beginning value
		var c = endValue - beginningValue;  //  change in value overall
		var d = durationInFrames;  // duration (in frames) overall
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
	},

	easeInOutElastic: function( beginningValue, endValue, durationInFrames, framesElapsed, delayInFrames=0 ) {
		var t = framesElapsed - delayInFrames < 0 ? 0 : framesElapsed;  // time since start (as frames elapsed)
		var b = beginningValue;  // beginning value
		var c = endValue - beginningValue;  //  change in value overall
		var d = durationInFrames;  // duration (in frames) overall
		var s=1.70158, p=0, a=c;
		if (t==0) return b;
		if ((t/=d/2)==2) return b+c;
		if (!p) p=d*(.3*1.5);
		if (a < Math.abs(c)) { a=c; var s=p/4; } else { var s = p/(2*Math.PI) * Math.asin (c/a) }
		if (t < 1) { return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b }
		return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
	},

	easeInBack: function ( beginningValue, endValue, durationInFrames, framesElapsed, delayInFrames=0 ) {
		var t = framesElapsed - delayInFrames < 0 ? 0 : framesElapsed;  // time since start (as frames elapsed)
		var b = beginningValue;  // beginning value
		var c = endValue - beginningValue;  //  change in value overall
		var d = durationInFrames;  // duration (in frames) overall
		var s = 1.70158;
		return c*(t/=d)*t*((s+1)*t - s) + b;
	},

	easeOutBack: function ( beginningValue, endValue, durationInFrames, framesElapsed, delayInFrames=0 ) {
		var t = framesElapsed - delayInFrames < 0 ? 0 : framesElapsed;  // time since start (as frames elapsed)
		var b = beginningValue;  // beginning value
		var c = endValue - beginningValue;  //  change in value overall
		var d = durationInFrames;  // duration (in frames) overall
		var s = 1.70158;
		return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
	},

	easeInOutBack: function ( beginningValue, endValue, durationInFrames, framesElapsed, delayInFrames=0 ) {
		var t = framesElapsed - delayInFrames < 0 ? 0 : framesElapsed;  // time since start (as frames elapsed)
		var b = beginningValue;  // beginning value
		var c = endValue - beginningValue;  //  change in value overall
		var d = durationInFrames;  // duration (in frames) overall
		var s = 1.70158;
		if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
		return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
	},

	easeOutBounce: function ( beginningValue, endValue, durationInFrames, framesElapsed, delayInFrames=0 ) {
		var t = framesElapsed - delayInFrames < 0 ? 0 : framesElapsed;  // time since start (as frames elapsed)
		var b = beginningValue;  // beginning value
		var c = endValue - beginningValue;  //  change in value overall
		var d = durationInFrames;  // duration (in frames) overall
		var p = t/d;  // progress ratio
		if (p < (1/2.75)) {
			return c*(7.5625*p*p) + b;
		} else if (p < (2/2.75)) {
			return c*(7.5625*(p-=(1.5/2.75))*p + .75) + b;
		} else if (p < (2.5/2.75)) {
			return c*(7.5625*(p-=(2.25/2.75))*p + .9375) + b;
		} else {
			return c*(7.5625*(p-=(2.625/2.75))*p + .984375) + b;
		}
	},

}


























function ham(slector, l1,l2,l3) {
///Initiation Variables
var icon_1 = document.getElementById("b1");
var topLine_1 = $(l1);
var middleLine_1 = $(l2);
var bottomLine_1 = $(l3);
var state_1 = "menu";  // can be "menu" or "arrow"
var topLineY_1;
var middleLineY_1;
var bottomLineY_1;
var topLeftY_1;
var topRightY_1;
var bottomLeftY_1;
var bottomRightY_1;
var topLeftX_1;
var topRightX_1;
var bottomLeftX_1;
var bottomRightX_1;

///Animation Variables
var segmentDuration_1 = 15;
var menuDisappearDurationInFrames_1 = segmentDuration_1;
var arrowAppearDurationInFrames_1 = segmentDuration_1;
var arrowDisappearDurationInFrames_1 = segmentDuration_1;
var menuAppearDurationInFrames_1 = segmentDuration_1;
var menuDisappearComplete_1 = false;
var arrowAppearComplete_1 = false;
var arrowDisappearComplete_1 = false;
var menuAppearComplete_1 = false;
var currentFrame_1 = 1;

///Menu Disappear
function menuDisappearAnimation_1() {
	currentFrame_1++;
	if ( currentFrame_1 <= menuDisappearDurationInFrames_1 ) {
		window.requestAnimationFrame( ()=> {
			//top line
			topLineY_1 = AJS.easeInBack( 37, 50, menuDisappearDurationInFrames_1, currentFrame_1 );
			topLine_1.attr( "d", "M30,"+topLineY_1+" L70,"+topLineY_1 );
			//bottom line
			bottomLineY_1 = AJS.easeInBack( 63, 50, menuDisappearDurationInFrames_1, currentFrame_1 );
			bottomLine_1.attr( "d", "M30,"+bottomLineY_1+" L70,"+bottomLineY_1 );
			//recursion
			menuDisappearAnimation_1();
		});
	} else {
		middleLine_1.css("opacity", 0);
		currentFrame_1 = 1;
		menuDisappearComplete_1 = true;
		openMenuAnimation_1();
	}
}

///Cross Appear
function arrowAppearAnimation_1() {
	currentFrame_1++;
	if ( currentFrame_1 <= arrowAppearDurationInFrames_1 ) {
		window.requestAnimationFrame( ()=> {
			//top line
			topLeftX_1 = AJS.easeOutBack( 30, 35, arrowAppearDurationInFrames_1, currentFrame_1 );
			topLeftY_1 = AJS.easeOutBack( 50, 35, arrowAppearDurationInFrames_1, currentFrame_1 );
			bottomRightX_1 = AJS.easeOutBack( 70, 65, arrowAppearDurationInFrames_1, currentFrame_1 );
			bottomRightY_1 = AJS.easeOutBack( 50, 65, arrowAppearDurationInFrames_1, currentFrame_1 );
			topLine_1.attr( "d", "M" + topLeftX_1 + "," + topLeftY_1 + " L" + bottomRightX_1 + "," + bottomRightY_1 );
			//bottom line
			bottomLeftX_1 = AJS.easeOutBack( 30, 35, arrowAppearDurationInFrames_1, currentFrame_1 );
			bottomLeftY_1 = AJS.easeOutBack( 50, 65, arrowAppearDurationInFrames_1, currentFrame_1 );
			topRightX_1 = AJS.easeOutBack( 70, 65, arrowAppearDurationInFrames_1, currentFrame_1 );
			topRightY_1 = AJS.easeOutBack( 50, 35, arrowAppearDurationInFrames_1, currentFrame_1 );
			bottomLine_1.attr( "d", "M" + bottomLeftX_1 + "," + bottomLeftY_1 + " L" + topRightX_1 + "," + topRightY_1 );
			//recursion
			arrowAppearAnimation_1();
		});
	} else {
		currentFrame_1 = 1;
		arrowAppearComplete_1 = true;
		openMenuAnimation_1();
	}
}

///Combined Open Menu Animation
function openMenuAnimation_1() {
	if ( !menuDisappearComplete_1 ) {
		menuDisappearAnimation_1();
	} else if ( !arrowAppearComplete_1) {
		arrowAppearAnimation_1();
	}
}

///Cross Disappear
function arrowDisappearAnimation_1() {
	currentFrame_1++;
	if ( currentFrame_1 <= arrowDisappearDurationInFrames_1 ) {
		window.requestAnimationFrame( ()=> {
			//top line
			topLeftX_1 = AJS.easeInBack( 35, 30, arrowDisappearDurationInFrames_1, currentFrame_1 );
			topLeftY_1 = AJS.easeInBack( 35, 50, arrowDisappearDurationInFrames_1, currentFrame_1 );
			bottomRightX_1 = AJS.easeInBack( 65, 70, arrowDisappearDurationInFrames_1, currentFrame_1 );
			bottomRightY_1 = AJS.easeInBack( 65, 50, arrowDisappearDurationInFrames_1, currentFrame_1 );
			topLine_1.attr( "d", "M" + topLeftX_1 + "," + topLeftY_1 + " L" + bottomRightX_1 + "," + bottomRightY_1 );
			//bottom line
			bottomLeftX_1 = AJS.easeInBack( 35, 30, arrowDisappearDurationInFrames_1, currentFrame_1 );
			bottomLeftY_1 = AJS.easeInBack( 65, 50, arrowDisappearDurationInFrames_1, currentFrame_1 );
			topRightX_1 = AJS.easeInBack( 65, 70, arrowDisappearDurationInFrames_1, currentFrame_1 );
			topRightY_1 = AJS.easeInBack( 35, 50, arrowDisappearDurationInFrames_1, currentFrame_1 );
			bottomLine_1.attr( "d", "M" + bottomLeftX_1 + "," + bottomLeftY_1 + " L" + topRightX_1 + "," + topRightY_1 );
			//recursion
			arrowDisappearAnimation_1();
		});
	} else {
		middleLine_1.css("opacity", 1);
		currentFrame_1 = 1;
		arrowDisappearComplete_1 = true;
		closeMenuAnimation_1();
	}
}

///Menu Appear
function menuAppearAnimation_1() {
	currentFrame_1++;
	if ( currentFrame_1 <= menuAppearDurationInFrames_1 ) {
		window.requestAnimationFrame( ()=> {
			//top line
			topLineY_1 = AJS.easeOutBack( 50, 37, menuDisappearDurationInFrames_1, currentFrame_1 );
			topLine_1.attr( "d", "M30,"+topLineY_1+" L70,"+topLineY_1 );
			//bottom line
			bottomLineY_1 = AJS.easeOutBack( 50, 63, menuDisappearDurationInFrames_1, currentFrame_1 );
			bottomLine_1.attr( "d", "M30,"+bottomLineY_1+" L70,"+bottomLineY_1 );
			//recursion
			menuAppearAnimation_1();
		});
	} else {
		currentFrame_1 = 1;
		menuAppearComplete_1 = true;
		closeMenuAnimation_1();
	}
}

///Close Menu Animation
function closeMenuAnimation_1() {
	if ( !arrowDisappearComplete_1 ) {
		arrowDisappearAnimation_1();
	} else if ( !menuAppearComplete_1 ) {
		menuAppearAnimation_1();
	}
}

///Events
$(document).on( "click", slector, (e)=> {
  e.stopPropagation();
  if ( state_1 === "menu" ) {
  	openMenuAnimation_1();
  	state_1 = "arrow";
  	arrowDisappearComplete_1 = false;
		menuAppearComplete_1 = false;
  } else if ( state_1 === "arrow" ) {
  	closeMenuAnimation_1();
  	state_1 = "menu";
  	menuDisappearComplete_1 = false;
		arrowAppearComplete_1 = false;
  }
});

function hclose(){
	if ( state_1 === "menu" ) {
		openMenuAnimation_1();
		state_1 = "arrow";
		arrowDisappearComplete_1 = false;
		  menuAppearComplete_1 = false;
	} else if ( state_1 === "arrow" ) {
		closeMenuAnimation_1();
		state_1 = "menu";
		menuDisappearComplete_1 = false;
		  arrowAppearComplete_1 = false;
	}
}

return {
	hclose:hclose
}


}

ham(".hm", ".top-line-1",".middle-line-1", ".bottom-line-1");

window.hc = ham(".hmdd", ".mob-top-line-1",".mob-middle-line-1", ".mob-bottom-line-1");