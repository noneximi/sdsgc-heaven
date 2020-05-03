/*
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

$(function (){
  $("#header").load("https://noneximi.github.io/sdsgc-heaven/header.html");
});

function generalguideshow(id) {
  var arrayOfElements = document.getElementsByClassName('gtipsbox');
  var lengthOfArray = arrayOfElements.length;

  for (var i=0; i<lengthOfArray;i++){
    arrayOfElements[i].style.display='none';
  }
  document.getElementById(id).style.display = 'block';
}
function gbguideshow(id) {
  var arrayOfElements = document.getElementsByClassName('gbbox');
  var lengthOfArray = arrayOfElements.length;

  for (var i=0; i<lengthOfArray;i++){
    arrayOfElements[i].style.display='none';
  }
  document.getElementById(id).style.display = 'block';
}
function crimguideshow(id) {
  var arrayOfElements = document.getElementsByClassName('crimbox');
  var lengthOfArray = arrayOfElements.length;

  for (var i=0; i<lengthOfArray;i++){
    arrayOfElements[i].style.display='none';
  }
  document.getElementById(id).style.display = 'block';
}

(function($) {

	var	$window = $(window),
		$body = $('body'),
		$wrapper = $('#wrapper'),
		$main = $('#main'),

	// Breakpoints.
		breakpoints({
			xlarge:   [ '1281px',  '1680px' ],
			large:    [ '981px',   '1280px' ],
			medium:   [ '737px',   '980px'  ],
			small:    [ '481px',   '736px'  ],
			xsmall:   [ '361px',   '480px'  ],
			xxsmall:  [ null,      '360px'  ]
		});

	// Play initial animations on page load.
		$window.on('load', function() {
			window.setTimeout(function() {
				$body.removeClass('is-preload');
			}, 100);
		});

	// Fix: Flexbox min-height bug on IE.
		if (browser.name == 'ie') {

			var flexboxFixTimeoutId;

			$window.on('resize.flexbox-fix', function() {

				clearTimeout(flexboxFixTimeoutId);

				flexboxFixTimeoutId = setTimeout(function() {

					if ($wrapper.prop('scrollHeight') > $window.height())
						$wrapper.css('height', 'auto');
					else
						$wrapper.css('height', '100vh');

				}, 250);

			}).triggerHandler('resize.flexbox-fix');

		}
			};

})(jQuery);
