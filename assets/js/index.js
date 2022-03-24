$(function() {
	// 画面に表示された時アニメーション
	var $target = $('.js-scrollAnimation');
var offset = 100;

$(window).on('scroll', function() {

  var scroll = $(window).scrollTop();
  var h = $(window).height();

  $target.each(function() {
    var pos = $(this).offset().top;
    if (scroll > pos - h + offset) {
      $(this).addClass('is-animated');
    }
  })

}).trigger('scroll');

$('body').addClass('no-scroll-anime');
//ローディング画面の表示
$(window).on('load',function(){
  $(".loading-img").delay(1000).fadeOut('slow');//ローディングテキストを1.2秒（1500ms）待機してからフェードアウト
  $(".loading-bg").delay(1500).fadeOut('slow');//ローディング画面を1.5秒（1200ms）待機してからフェードアウト
  $('.header').removeClass('header-noindex');
  $('#index').delay(15000).css('visibility','visible');
});

  	// person 画面幅でスライダーに切り替え
	var windowWidth = $(window).width();
	var slickWidth = 768;
	if(windowWidth <= slickWidth){
    $('.slick-person').slick({
      centerPadding:'2.5rem',
      slidesToShow: 1,
      slidesToScroll: 1,
      centerMode: true,
      focusOnSelect: true,
      arrows: true,
    prevArrow: '<a class="slide-arrow prev-arrow"><span></span></a>',
    nextArrow: '<a class="slide-arrow next-arrow"><span></span></a>',
    });
  }

  // story スライダー
  $('.slick-story').slick({
    infinite:true,
    centerMode:true,
    centerPadding:'10%',
    slidesToShow:4,
    slidesToScroll: 1,
    arrows: true,
    prevArrow: '<a class="slide-arrow prev-arrow"><span></span></a>',
    nextArrow: '<a class="slide-arrow next-arrow"><span></span></a>',
    responsive:[
      {
        breakpoint: 1800,
        settings: {
          centerMode:true,
          slidesToShow: 4,
          centerPadding:'5%',
        }
      },
      {
        breakpoint: 1600,
        settings: {
          centerMode:true,
          slidesToShow: 3,
          centerPadding:'15%',
        }
      },
      {
        breakpoint: 1500,
        settings: {
          centerMode:true,
          slidesToShow: 3,
          centerPadding:'10%',
        }
      },
      {
        breakpoint: 1300,
        settings: {
          centerMode:true,
          slidesToShow: 3,
          centerPadding:'5%',
        }
      },
      {
        breakpoint: 1280,
        settings: {
          centerMode:true,
          slidesToShow: 3,
          centerPadding:'5%',
        }
      },
      {
        breakpoint: 1200,
        settings: {
          centerMode:true,
          slidesToShow: 2,
          centerPadding:'18%',
        }
      },
      {
        breakpoint: 1150,
        settings: {
          centerMode:true,
          slidesToShow: 2,
          centerPadding:'15%',
        }
      },
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          // centerPadding:'5rem',
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          centerPadding:'1rem',
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          centerMode:true,
          centerPadding:'6rem',
        }
      },
      {
        breakpoint: 400,
        settings: {
          slidesToShow: 1,
          centerMode:true,
          centerPadding:'2rem',
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
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
  canvasList.push(document.getElementById("waveCanvas1"));
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
  {
    function init() {
      // canvas1個めの色指定
      // canvasList.push(document.getElementById("waveCanvas"));
      canvasList.push(document.getElementById("waveCanvas2"));
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
  {
    function init() {
      // canvas1個めの色指定
      // canvasList.push(document.getElementById("waveCanvas"));
      canvasList.push(document.getElementById("waveCanvas3"));
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
  {
    function init() {
      // canvas1個めの色指定
      // canvasList.push(document.getElementById("waveCanvas"));
      canvasList.push(document.getElementById("waveCanvas1w"));
      // canvasList.push(document.getElementById("waveCanvas2"));
      colorList.push(['#fff', '#ff0', 'transparent', '#00f', '#fff']);//重ねる波線の色設定
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
  {
    function init() {
      // canvas1個めの色指定
      // canvasList.push(document.getElementById("waveCanvas"));
      canvasList.push(document.getElementById("waveCanvas2w"));
      // canvasList.push(document.getElementById("waveCanvas2"));
      colorList.push(['#fff', '#ff0', '#fff', '#00f', '#fff']);//重ねる波線の色設定
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
