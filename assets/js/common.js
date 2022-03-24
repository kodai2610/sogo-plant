$(function() {
	// ハンバーガーボタン,モーダルメニュー,スクロール禁止
	$('#js-btn').click(function(){
		$(this).toggleClass('is-active');
		$('#js-mordal').toggleClass('is-active');
		$('body').toggleClass('no-scroll');
		// if($(this).hasClass('is-active')){
		// 	$('body.no-scroll').style('overflow-y','hidden');
		// }else{
		// 	$('body.no-scroll').style('overflow-y','auto');
		// }
	});

	// スライドでヘッダーが現れる
	var header = $(".header-inner");
	var headerNav = $(".header-nav");
	var windowWidth = $(window).width();
	var windowSm = 768;
	/* 初期表示、スクロール時にイベント開始 画面幅768px以上かつトップページのみ発火*/
	$(window).on("load scroll", function () {
		if(windowWidth >= windowSm && $('header').hasClass('header-noindex') == false){
			if ($(this).scrollTop() > 800 && header.hasClass("is-fixed") == false) {
				header.css("position", "fixed");
				header.addClass("is-fixed");
				header.css({ "top": "-10rem" });
				$('.mv').css({ "margin-top": "10rem" });
				header.animate({ "top": 0 }, 600);
				headerNav.css("display", "flex");
			}
			/* スクロール位置の高さが800pxより小さい、かつis-fixedクラスがある場合 */
			else if ($(this).scrollTop() < 800 && header.hasClass("is-fixed") == true) {
				header.removeClass("is-fixed");
				header.css("position", "absolute");
				$('.mv').css({ "margin-top": "10rem" });
				headerNav.css("display", "none");
			}
		}
	});

	// 人物紹介ロゴ色の切り替え
		$('.cmn-box-logo').each(function() {
			if ($(this).text().indexOf("新卒") >= 0) {
				$(this).css({
					"color":"#4579C1",
					"background-color":"#fff",
				});
			}
		});

{
		var unit = 100,
		canvasList, // キャンバスの配列
		info = {}, // 全キャンバス共通の描画情報
		colorList; // 各キャンバスの色情報
	/**
	* Init function.
	*
	* Initialize variables and begin the animation.
	*/

	function init() {
		info.seconds = 0;
		info.t = 0;
		canvasList = [];
		colorList = [];
		// canvas1個めの色指定
		// canvasList.push(document.getElementById("waveCanvas"));
		canvasList.push(document.getElementById("waveCanvas"));
		// canvasList.push(document.getElementById("waveCanvas2"));
		colorList.push(['#B5CFE0', '#ff0', '#FFE200', '#00f', '#B5CFE0']);//重ねる波線の色設定
		// 各キャンバスの初期化
		for(var canvasIndex in canvasList) {
				var canvas = canvasList[canvasIndex];
				canvas.width = document.documentElement.clientWidth; //Canvasのwidthをウィンドウの幅に合わせる
				canvas.height = 200;//波の高さ
				canvas.contextCache = canvas.getContext("2d");
		}
		// 共通の更新処理呼び出し
		update();
	}

	function update() {
		for(var canvasIndex in canvasList) {
				var canvas = canvasList[canvasIndex];
				// 各キャンバスの描画
				draw(canvas, colorList[canvasIndex]);
		}
		// 共通の描画情報の更新
		info.seconds = info.seconds + .014;
		info.t = info.seconds*Math.PI;
				// 自身の再起呼び出し
				setTimeout(update, 55);
	}

	/**
	* Draw animation function.
	*
	* This function draws one frame of the animation, waits 20ms, and then calls
	* itself again.
	*/
	function draw(canvas, color) {
		// 対象のcanvasのコンテキストを取得
		var context = canvas.contextCache;
		// キャンバスの描画をクリア
		context.clearRect(0, 0, canvas.width, canvas.height);

		//波線を描画 drawWave(canvas, color[数字（波の数を0から数えて指定）], 透過, 波の幅のzoom,波の開始位置の遅れ )
		drawWave(canvas, color[0], 0.47, 3, 0);
	// drawWave(canvas, color[1], 0.5, 4, 0);
	drawWave(canvas, color[2], 0.3, 1.6, 0);
	// drawWave(canvas, color[3], 0.2, 3, 100);
	drawWave(canvas, color[4], 1, 1.6, 250);
	}

	/**
	* 波を描画
	* drawWave(色, 不透明度, 波の幅のzoom, 波の開始位置の遅れ)
	*/
	function drawWave(canvas, color, alpha, zoom, delay) {
	var context = canvas.contextCache;
		context.strokeStyle = color;//線の色
	context.lineWidth = 1;//線の幅
		context.globalAlpha = alpha;
		context.beginPath(); //パスの開始
		drawSine(canvas, info.t / 0.5, zoom, delay);
		context.stroke(); //線
	}

	/**
	* Function to draw sine
	* 
	* The sine curve is drawn in 10px segments starting at the origin. 
	* drawSine(時間, 波の幅のzoom, 波の開始位置の遅れ)
	*/
	function drawSine(canvas, t, zoom, delay) {
		var xAxis = Math.floor(canvas.height/2);
		var yAxis = 0;
		var context = canvas.contextCache;
		// Set the initial x and y, starting at 0,0 and translating to the origin on
		// the canvas.
		var x = t; //時間を横の位置とする
		var y = Math.sin(x)/zoom;
		context.moveTo(yAxis, unit*y+xAxis); //スタート位置にパスを置く

		// Loop to draw segments (横幅の分、波を描画)
		for (i = yAxis; i <= canvas.width + 10; i += 10) {
				x = t+(-yAxis+i)/unit/zoom;
				y = Math.sin(x - delay)/2.5;
				context.lineTo(i, unit*y+xAxis);
		}
	}
	init();
	}

});
