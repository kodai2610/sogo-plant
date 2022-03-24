jQuery(function(){

  $('#box2').on('inview', function(event, isInView) {
		if (isInView) {
		//要素が見えたときに実行する処理
		$("#box2 .count-up").each(function(){
		$(this).prop('Counter',0).animate({//0からカウントアップ
						Counter: $(this).text()
				}, {
		// スピードやアニメーションの設定
						duration: 3000,//数字が大きいほど変化のスピードが遅くなる。2000=2秒
						easing: 'swing',//動きの種類。他にもlinearなど設定可能
						step: function (now) {
								$(this).text(Math.ceil(now));
						}
				});
		});
		}
		});
  $('#box3').on('inview', function(event, isInView) {
		if (isInView) {
		//要素が見えたときに実行する処理
		$("#box3 .count-up").each(function(){
		$(this).prop('Counter',0).animate({//0からカウントアップ
						Counter: $(this).text()
				}, {
		// スピードやアニメーションの設定
						duration: 3000,//数字が大きいほど変化のスピードが遅くなる。2000=2秒
						easing: 'swing',//動きの種類。他にもlinearなど設定可能
						step: function (now) {
								$(this).text(Math.ceil(now));
						}
				});
		});
		}
		});
  $('#box4-pc').on('inview', function(event, isInView) {
		if (isInView) {
		//要素が見えたときに実行する処理
		$("#box4-pc .count-up").each(function(){
		$(this).prop('Counter',0).animate({//0からカウントアップ
						Counter: $(this).text()
				}, {
		// スピードやアニメーションの設定
						duration: 3000,//数字が大きいほど変化のスピードが遅くなる。2000=2秒
						easing: 'swing',//動きの種類。他にもlinearなど設定可能
						step: function (now) {
								$(this).text(Math.ceil(now));
						}
				});
		});
		}
		});
  $('#box4-sp').on('inview', function(event, isInView) {
		if (isInView) {
		//要素が見えたときに実行する処理
		$("#box4-sp .count-up").each(function(){
		$(this).prop('Counter',0).animate({//0からカウントアップ
						Counter: $(this).text()
				}, {
		// スピードやアニメーションの設定
						duration: 3000,//数字が大きいほど変化のスピードが遅くなる。2000=2秒
						easing: 'swing',//動きの種類。他にもlinearなど設定可能
						step: function (now) {
								$(this).text(Math.ceil(now));
						}
				});
		});
		}
		});
  $('#box5-pc').on('inview', function(event, isInView) {
		if (isInView) {
		//要素が見えたときに実行する処理
		$("#box5-pc .count-up").each(function(){
		$(this).prop('Counter',0).animate({//0からカウントアップ
						Counter: $(this).text()
				}, {
		// スピードやアニメーションの設定
						duration: 3000,//数字が大きいほど変化のスピードが遅くなる。2000=2秒
						easing: 'swing',//動きの種類。他にもlinearなど設定可能
						step: function (now) {
								$(this).text(Math.round(now* 10) / 10);
						}
				});
		});
		}
		});
  $('#box5-sp').on('inview', function(event, isInView) {
		if (isInView) {
		//要素が見えたときに実行する処理
		$("#box5-sp .count-up").each(function(){
		$(this).prop('Counter',0).animate({//0からカウントアップ
						Counter: $(this).text()
				}, {
		// スピードやアニメーションの設定
						duration: 3000,//数字が大きいほど変化のスピードが遅くなる。2000=2秒
						easing: 'swing',//動きの種類。他にもlinearなど設定可能
						step: function (now) {
								$(this).text(Math.round(now* 10) / 10);
						}
				});
		});
		}
		});
		$('#box6').on('inview', function(event, isInView) {
			if (isInView) {
			//要素が見えたときに実行する処理
			$("#box6 .count-up").each(function(){
			$(this).prop('Counter',0).animate({//0からカウントアップ
							Counter: $(this).text()
					}, {
			// スピードやアニメーションの設定
							duration: 3000,//数字が大きいほど変化のスピードが遅くなる。2000=2秒
							easing: 'swing',//動きの種類。他にもlinearなど設定可能
							step: function (now) {
									$(this).text(Math.ceil(now));
							}
					});
			});
			}
			});
})