var _$_60ca = ["height", "each", ".foot_box", "css", "width", ".slider .item", ".nav ul", "margin-top", "auto", "fadeIn", ".side_close", "slideDown", "click", ".nav_icon", "fadeOut", ".nav ul,.side_close", "display", "none", ".side_close,.nav_icon", "block", "position", "fixed", ".header", "hide", ".h_100", "top", "0", "offset", "69px", ".slider", "50px", "outerHeight", "body", ".footer", "href", "attr", "a", "#", "remove", "empty", ".side_r .setting", "html", "head", "Maker Cloud", "indexOf", ".contact_mini_text p", ".contact_mini .btn_contact", "toggle", ".has_sub", ".catg_hide", "catg_hide_2", "toggleClass", ".catg_name a.on", ".catg_hide p", "MSIE 8.0", "userAgent", "cover", ".item", ".logo", "/", "slick", "#news_slider", "ready", "resize", "opacity", "1", "load"];

function foot_h() {
	var f = 0;
	$(_$_60ca[2])[_$_60ca[1]](function() {
		if ($(this)[_$_60ca[0]]() > f) {
			f = $(this)[_$_60ca[0]]()
		}
	});
	$(_$_60ca[2])[_$_60ca[3]](_$_60ca[0], f);
}

function slider_h() {
	if ($(window)[_$_60ca[4]]() > 1023) {
		$(_$_60ca[5])[_$_60ca[0]]($(window)[_$_60ca[0]]() * 0.7)
	} else {
		$(_$_60ca[5])[_$_60ca[0]]($(window)[_$_60ca[0]]() * 0.4)
	}
}

function nav_ul_center() {
	if ($(window)[_$_60ca[4]]() < 960) {
		var l = $(_$_60ca[6])[_$_60ca[0]]();
		$(_$_60ca[6])[_$_60ca[3]](_$_60ca[7], -l * 0.6);
	} else {
		$(_$_60ca[6])[_$_60ca[3]](_$_60ca[7], _$_60ca[8])
	}
}

function side() {
	if ($(window)[_$_60ca[4]]() < 960) {
		$(_$_60ca[13])[_$_60ca[12]](function() {
			$(_$_60ca[10])[_$_60ca[9]](500);
			$(_$_60ca[6])[_$_60ca[11]](400);
		});
		$(_$_60ca[10])[_$_60ca[12]](function() {
			$(_$_60ca[15])[_$_60ca[14]](200)
		});
	} else {
		$(_$_60ca[18])[_$_60ca[3]](_$_60ca[16], _$_60ca[17]);
		$(_$_60ca[6])[_$_60ca[3]](_$_60ca[16], _$_60ca[19]);
	};
	if ($(window)[_$_60ca[4]]() < 960) {
		$(_$_60ca[13])[_$_60ca[3]](_$_60ca[16], _$_60ca[19]);
		$(_$_60ca[15])[_$_60ca[3]](_$_60ca[16], _$_60ca[17]);
	};
}

function nav_top() {
	$(_$_60ca[22])[_$_60ca[3]](_$_60ca[20], _$_60ca[21]);
	$(_$_60ca[24])[_$_60ca[23]]();
	$(_$_60ca[22])[_$_60ca[3]](_$_60ca[25], _$_60ca[26]);
	var k = $(_$_60ca[22])[_$_60ca[27]]()[_$_60ca[25]];
	$(_$_60ca[29])[_$_60ca[3]](_$_60ca[7], _$_60ca[28]);
	if ($(window)[_$_60ca[4]]() < 959) {
		$(_$_60ca[29])[_$_60ca[3]](_$_60ca[7], _$_60ca[30])
	};
}

function footer_top() {
	var g = $(_$_60ca[32])[_$_60ca[31]](true);
	var h = $(window)[_$_60ca[0]]();
	var j;
	var i;
	if ($(window)[_$_60ca[4]]() < 959) {
		i = 0
	} else {
		i = 0
	};
	if (g < h) {
		j = h - g - i;
		$(_$_60ca[33])[_$_60ca[3]](_$_60ca[25], j);
	} else {
		$(_$_60ca[33])[_$_60ca[3]](_$_60ca[25], _$_60ca[8])
	};
}
$(document)[_$_60ca[62]](function() {
	slider_h();
	$(_$_60ca[5])[_$_60ca[1]](function() {
		var e = $(_$_60ca[36], this)[_$_60ca[35]](_$_60ca[34]);
		if (e == _$_60ca[37]) {
			$(_$_60ca[36], this)[_$_60ca[38]]()
		};
	});
	$(_$_60ca[40])[_$_60ca[39]]();
	var b = $(_$_60ca[42])[_$_60ca[41]]();
	if (b[_$_60ca[44]](_$_60ca[43]) > 0) {} else {
		$(_$_60ca[22])[_$_60ca[3]](_$_60ca[16], _$_60ca[17])
	};
	var a = $(_$_60ca[45])[_$_60ca[0]]();
	if (a < 150) {
		$(_$_60ca[46])[_$_60ca[23]]()
	};
	$(_$_60ca[49])[_$_60ca[12]](function() {
		$(_$_60ca[48])[_$_60ca[47]]()
	});
	$(_$_60ca[49])[_$_60ca[12]](function() {
		$(this)[_$_60ca[51]](_$_60ca[50])
	});
	var c = $(_$_60ca[52])[_$_60ca[41]]();
	$(_$_60ca[53])[_$_60ca[41]](c);
	if (navigator[_$_60ca[55]][_$_60ca[44]](_$_60ca[54]) > 0) {
		$(_$_60ca[57])[_$_60ca[56]]()
	};
	var d = $(_$_60ca[58])[_$_60ca[41]]();
	if (d[_$_60ca[44]](_$_60ca[59]) >= 0) {
		$(_$_60ca[29])[_$_60ca[60]]({
			dots: true,
			speed: 700,
			pauseOnHover: false,
			slidesToShow: 3,
			fade: false,
			autoplay: true,
			responsive: [{
				breakpoint: 1024,
				settings: {
					slidesToShow: 1
				}
			}]
		});
		$(_$_60ca[61])[_$_60ca[60]]({
			dots: true,
			speed: 800,
			pauseOnHover: false,
			autoplay: false
		});
		side();
		foot_h();
		nav_ul_center();
	};
});
$(window)[_$_60ca[63]](function() {
	slider_h();
	nav_ul_center();
	side();
	foot_h();
	footer_top();
	if ($(window)[_$_60ca[4]]() > 960) {
		$(_$_60ca[48])[_$_60ca[3]](_$_60ca[16], _$_60ca[19])
	};
});
$(window)[_$_60ca[66]](function() {
	$(_$_60ca[33])[_$_60ca[3]](_$_60ca[64], _$_60ca[65]);
	footer_top();
});

if (!Function.prototype.bind) {
	Function.prototype.bind = function(oThis) {
		if (typeof this !== "function") {
			throw new TypeError("Function.prototype.bind - what is trying to be bound is not callable");
		}
		var aArgs = Array.prototype.slice.call(arguments, 1),
			fToBind = this,
			fNOP = function() {},
			fBound = function() {
				return fToBind.apply(this instanceof fNOP && oThis ? this : oThis, aArgs.concat(Array.prototype.slice.call(arguments)));
			};
		fNOP.prototype = this.prototype;
		fBound.prototype = new fNOP();
		return fBound;
	};
}

$(function() {
	window.scrollReveal = new scrollReveal();
})