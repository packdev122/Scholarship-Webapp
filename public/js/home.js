	$(document).ready(function(){
		var jury_width = $(".jury-item").find("img").width();
		$(".jury-item").width(jury_width);
		$("#video_play_btn").on("click",function(){
			$("#main_video").show();
			var video = document.getElementById("main_video");
			video.play();
			video.addEventListener('ended',videoEnded,false);
			$("#video_button").show();
			$("#mini_button").show();
		});
		$("#video_button").on("click",function(){
			var video = document.getElementById("main_video");
			if (video.paused) {
				video.play();
			  } else {
				video.pause();
			  }
		})
		$("#mini_button").on("click",function(){
			var video = document.getElementById("main_video");
			video.pause();
			$("#main_video").hide();
			$("#video_dialog").modal();
			$("#video_button").hide();
			$(this).hide();
		})
		var videoEnded = function(){
			$("#main_video").hide();
			$("#video_dialog").modal();
			$("#video_button").hide();
		}
		$("#view_collective").on("click",function(){
			view_collective();
		})
		$("#homepage_view").on("click",function(){
			view_vision();
		})
		$("#view_scholarship").on("click",function(){
			view_scholarship();
		})
		$("#view_judges").on("click",function(){
			view_judges();
		})
		$("#view_about").on("click",function(){
			view_about();
		})
        var view_vision = function(){
            $(".title-area").animate({ bottom : '100%'} , 1000);
			$(".content-area").animate({ top : '100%'} , 1000);
        }
		var view_collective = function(){
			$(".title-area").css("z-index","1");
			$(".content-area").css("z-index","1");
			$("#mentor-area").css("top","0");
			$("#mentor-area .title-area").css("bottom","100%");
			$("#mentor-area .content-area").css("top","100%");
			$("#mentor-area .title-area").animate({ bottom : '0px'} , 1000);
			$("#mentor-area .content-area").animate({ top : '0px'} , 1000);
			$("#mentor-area .title-pane").css({"opacity":'0.0','left':'-200px'});
			setTimeout(function(){
				$("#mentor-area .title-pane").animate({opacity : '1' , left:'-150px'});
			}, 1000);
		}
		var view_scholarship = function(){
			$(".title-area").css("z-index","1");
			$(".content-area").css("z-index","1");
			$("#scholarship-area").css("top","0");
			$("#scholarship-area .title-area").css("bottom","100%");
			$("#scholarship-area .content-area").css("top","100%");
			$("#scholarship-area .title-area").css("z-index","2");
			$("#scholarship-area .content-area").css("z-index","2");
			$("#scholarship-area .title-area").animate({ bottom : '0px'} , 1000);
			$("#scholarship-area .content-area").animate({ top : '0px'} , 1000);
			$("#scholarship-area .title-pane").css({"opacity":'0.0','left':'-200px'});
			setTimeout(function() {
				$("#scholarship-area .title-pane").animate({opacity : '1' , left:'-100px'});
			}, 1000);
		}
		var view_judges = function(){
			$(".title-area").css("z-index","1");
			$(".content-area").css("z-index","1");
			$("#judges-area").css("top","0");
			$("#judges-area .title-area").css("bottom","100%");
			$("#judges-area .content-area").css("top","100%");
			$("#judges-area .title-area").css("z-index","2");
			$("#judges-area .content-area").css("z-index","2");
			$("#judges-area .title-area").animate({ bottom : '0px'} , 1000);
			$("#judges-area .content-area").animate({ top : '0px'} , 1000);
            $("#judges-area .title-pane").css({"opacity":'0.0','left':'-200px'});
			setTimeout(function() {
				$("#judges-area .title-pane").animate({opacity : '1' , left:'-150px'});
			}, 1000);
			showMainJuryText();
		}
		var view_about = function(){
			$(".title-area").css("z-index","1");
			$(".content-area").css("z-index","1");
			$("#about-area").css("top","0");
			$("#about-area .title-area").css("bottom","100%");
			$("#about-area .content-area").css("top","100%");
			$("#about-area .title-area").css("z-index","2");
			$("#about-area .content-area").css("z-index","2");
			$("#about-area .title-area").animate({ bottom : '0px'} , 1000);
			$("#about-area .content-area").animate({ top : '0px'} , 1000);
			$("#about-area .title-pane").css({"opacity":'0.0','left':'-200px'});
			setTimeout(function() {
				$("#about-area .title-pane").animate({opacity : '1' , left:'-100px'});
			}, 1000);
		}

		var menu_show = false;
		$("#menu-button").on("click",function(){
			if(menu_show){
				$("#menu-area").fadeOut();
				menu_show = false;
				$(this).find("span").addClass("glyphicon-align-left");
				$(this).find("span").removeClass("glyphicon-remove");
                $(".section-area").show();
			}else{
				menu_show = true;
				$("#menu-area").fadeIn();
				$(this).find("span").removeClass("glyphicon-align-left");
				$(this).find("span").addClass("glyphicon-remove");
                $(".section-area").hide();
			}
		})
        $(".jury-item").on("click",function(){
            $("#jury_description").fadeOut('slow');
            $(".jury-item").find(".cover-image").show();
            $(this).find(".cover-image").hide();
            setTimeout(setJuryText($(this)), 500);  
        })
        var setJuryText = function($object){
			var html = $object.find('.description').html();
			$("#jury_description").html(html);
			$("#jury_description").fadeIn("slow");
		}
		var showMainJuryText = function(){
			$(".jury-item").find(".cover-image").hide();
			$("#jury_description").html($("#main_jury_description").html());
		}
        var page_transition = function(){
            if(page_number % 5 == 0){
                view_vision();
            }else if(page_number % 5 == 1){
                view_scholarship();
            }else if(page_number % 5 == 2){
                view_about();
            }else if(page_number % 5 == 3){
                view_judges();
            }else if(page_number % 5 == 4){
                view_collective();
            }
		}
		
		var elem = document.getElementById('body'),
			marker = true,
			delta,
			interval = 50,
			counter1 = 0,
			counter2 , direction;
		var page_number = 0;
		if (elem.addEventListener) {
			if ('onwheel' in document)            elem.addEventListener('wheel',wheel);
			else if ('onmousewheel' in document)  elem.addEventListener('mousewheel',wheel);
			else                                  elem.addEventListener('MozMousePixelScroll',wheel);
		} else{
			elem.attachEvent('onmousewheel',wheel);
		}
		function wheel(e){
			counter1 += 1;
			e = e||window.event;
			delta = e.deltaY||e.detail||e.wheelDelta;
			if (delta>0) {
				direction = 'up';
			} else {
				direction = 'down';
			}
			if (marker) wheelStart();
			return false;
		}
		function wheelStart(){
			marker = false;
			wheelAct();
		}
		function wheelAct(){
			counter2 = counter1;
			setTimeout(function(){
				if (counter2 == counter1) {
					wheelEnd();
				} else {
					wheelAct();
				}
			},interval);
		}
		function wheelEnd(){
			marker = true,
			counter1 = 0,
			counter2 = 0;
			page_number += 1;
			page_transition();
		}
	})