var webGalImagesNotLoaded = 0;

function webGalImageLoaded() {	
	webGalImagesNotLoaded -= 1;
	//console.log(webGalImagesNotLoaded);
	if (webGalImagesNotLoaded <= 0) {		
		$(".webGalWrapper").resize();
	}	
}

function webGal(isAdmin) {
	
	$(".webGalWrapper").resize( function () {
		var imgs = $(".galImg > img", this);
		var data = $.data( this, "webGal");			
		var i = 0;
		var hasZeroWidth = false;
		
		if (!data) {
			data = {};
			data.lastWidth = 0;
			data.length = imgs.length;
			data.totalImagesWidth = 0;
			data.widths = [];
			i = 0;
			$.each(imgs, function () {
				if (data.widths[i] == 0) {
					hasZeroWidth = true;
				}
				data.widths[i] = $(this).width();
				data.totalImagesWidth += data.widths[i];				
				i++;
			});
		}

		//console.log(data.lastWidth);	
		
		var totalWidth = $(this).width();
		if (totalWidth != data.lastWidth) {
			data.lastWidth = totalWidth;
			var images = [];	
			i = 0;
			hasZeroWidth = false;
			$.each(imgs, function () {
				images[i] = this;
				if (data.widths[i] == 0) {
					data.widths[i] = $(this).width();
					if (data.widths[i] == 0) {
						hasZeroWidth = true;
					}
				}
				i++;
			});

			var rows = Math.round( data.totalImagesWidth / totalWidth );
			if (rows < 1) {
				rows = 1;
			}		
			if (rows > data.length) {
				rows = data.length;
			}

			//console.log(data);		
			//console.log(rows);

			i = 0;
			var rowsLeft = rows;
			var rowWidth, rowStart = 0, rowLen, ratio;

			while (rowsLeft > 0) {
				rowWidth = 0;
				if (rowsLeft == 1) {
					rowLen = data.length - rowStart;
					for (i=rowStart;i<data.length;i++) {
						rowWidth += data.widths[i];	
					}
				} else {				
					rowLen = 0;
					i = rowStart;
					while ( (i < data.length) && ((rowWidth+data.widths[i+1]) < totalWidth) ) {
						rowWidth += data.widths[i];					
						rowLen++;
						i++;
					}
				}

				ratio = (totalWidth - 1) / rowWidth;

				for(var i=rowStart, max=rowStart+rowLen; i<max; i++) {
					if (data.widths[i] > 0) {
						$(images[i]).css({width:(ratio*data.widths[i])+"px"});
					}
				}

				rowStart += rowLen;			
				rowsLeft--;
			}
		}
		
		if (window.galScroller) {
			galScroller.onResize();	
		}
		if (!hasZeroWidth) {
			$.data( this, "webGal", data );
		} else {
			(function(_this) {
				setTimeout(function(){ $(_this).resize(); }, 1000);	
			})(this);
		}
	});
	
	var imgs = $(".galImg");
	webGalImagesNotLoaded = imgs.length;	
	$("img", imgs).one("load", webGalImageLoaded);
	imgs.fancybox();
	
	window.addEventListener('resize', function() {
		$(".webGalWrapper").resize();
	}, false);

}

$(function() { 
	$.each( $(".webGalWrapper"), function () {
		var data = $.data( this, "webGal");			
		if (!data) {
			$(this).resize();
		}
	});
 });