$(document).ready(function($){
    

 
 /* STARS */


       
$(".star").click(function(){ 
  
  $(this).toggleClass("star_active");

});
    
 /* NEWS FEEDBACK HIDE */


       
$(".news_feedback").click(function(){ 
  
  $(".news_feedback").addClass("hide");

});
    
/* PROFILE WTS DELETE */
    
$(".profile_cross").click(function(){ 
  
  $(this).parent().addClass("hide");

});
    
    
 /* BIG PLAY */
    
var vid1 = document.getElementById("video1");
var vid2 = document.getElementById("video2"); 
var vid3 = document.getElementById("video3");
var vid4 = document.getElementById("video4");

$("#big_play").click(function playVid() { 
        vid1.play();
        vid2.play();
        vid3.play();
        vid4.play();
        $("#big_play").addClass("hide");
        $(".playpause").removeClass("hide");
        $(".controls").removeClass("hide");
        $(".focus").removeClass("hide");
});
    
$(".playpause").click(function playpauseVid() { 
    if (vid1.paused) {
        vid1.play();
        vid2.play();
        vid3.play();
        vid4.play();
    } else {
        vid1.pause();
        vid2.pause();
        vid3.pause();
        vid4.pause();
    }
});
    
$(function() {    

       
$(".playpause").click(function(){ 
  
  $(this).toggleClass("playpauseactive");

});
    
    
}); 
    
/* VOLUME */
    
var vide1 = document.getElementById("video1");
var volume = document.getElementById('volume');
var vUp = document.getElementById('v-up');
var vDn = document.getElementById('v-dn');
// Increase the volume
	vUp.addEventListener('click',volUp,false);
	function volUp() {
		if (vide1.volume < 1) {
			vide1.volume = Math.round((vide1.volume + 0.1)*10)/10;
			volume.firstChild.nodeValue = Math.round(vide1.volume*10);
		}
	}
// Decrease the volume
	vDn.addEventListener('click',volDown,false);
	function volDown() {
		if (vide1.volume > 0) {
			vide1.volume = Math.round((vide1.volume - 0.1)*10)/10;
			volume.firstChild.nodeValue = Math.round(vide1.volume*10);
		}
	}
    
/* SWITCH BETWEEN VIEWS */
    
$(function() {   

$("#to4").click(function(){
  $("#video1").removeClass("video_solo");
    $("#video2").removeClass("video_solo");
    $("#video3").removeClass("video_solo");
    $("#video4").removeClass("video_solo");
    $("#video1").removeClass("hide");
    $("#video2").removeClass("hide");
    $("#video3").removeClass("hide");
    $("#video4").removeClass("hide");
    $(".btn_view").addClass("hide");
    $("#to4").addClass("hide");
    $(".focus").removeClass("hide");
    
  
});
    
$(".focus").click(function(){
  $(".focus").addClass("hide");
   $("#to4").removeClass("hide");
     $(".btn_view").removeClass("hide");
    
});

       
$("#focus1").click(function(){ 
  
  $("#video1").addClass("video_solo");
    $("#video2").addClass("hide");
     $("#video3").addClass("hide");
     $("#video4").addClass("hide");
     $("#btn_general").addClass("hide");
    

});
    
$("#focus2").click(function(){ 
  
  $("#video2").addClass("video_solo");
    $("#video1").addClass("hide");
     $("#video3").addClass("hide");
     $("#video4").addClass("hide");
    $("#btn_guitarist").addClass("hide");

});
    
$("#focus3").click(function(){ 
  
  $("#video3").addClass("video_solo");
    $("#video1").addClass("hide");
     $("#video2").addClass("hide");
     $("#video4").addClass("hide");
    $("#btn_singers").addClass("hide");

});
    
$("#focus4").click(function(){ 
  
  $("#video4").addClass("video_solo");
    $("#video1").addClass("hide");
     $("#video3").addClass("hide");
     $("#video2").addClass("hide");
    $("#btn_front").addClass("hide");

});
    
$("#btn_general").click(function(){ 
  
  $("#video1").addClass("video_solo");
    $("#video1").removeClass("hide");
    $("#video4").addClass("hide");
     $("#video3").addClass("hide");
     $("#video2").addClass("hide");
   $("#btn_general").addClass("hide");
    $("#btn_guitarist").removeClass("hide");
    $("#btn_singers").removeClass("hide");
    $("#btn_front").removeClass("hide");

});
    
$("#btn_guitarist").click(function(){ 
  
  $("#video2").addClass("video_solo");
    $("#video2").removeClass("hide");
    $("#video1").addClass("hide");
     $("#video3").addClass("hide");
     $("#video4").addClass("hide");
    $("#btn_guitarist").addClass("hide");
    $("#btn_general").removeClass("hide");
    $("#btn_singers").removeClass("hide");
    $("#btn_front").removeClass("hide");

});
    
$("#btn_singers").click(function(){ 
  
  $("#video3").addClass("video_solo");
    $("#video3").removeClass("hide");
    $("#video1").addClass("hide");
     $("#video2").addClass("hide");
     $("#video4").addClass("hide");
    $("#btn_singers").addClass("hide");
    $("#btn_guitarist").removeClass("hide");
    $("#btn_general").removeClass("hide");
    $("#btn_front").removeClass("hide");

});
    
$("#btn_front").click(function(){ 
  
  $("#video4").addClass("video_solo");
    $("#video4").removeClass("hide");
    $("#video1").addClass("hide");
     $("#video3").addClass("hide");
     $("#video2").addClass("hide");
    $("#btn_front").addClass("hide");
    $("#btn_guitarist").removeClass("hide");
    $("#btn_general").removeClass("hide");
    $("#btn_singers").removeClass("hide");
        


});
    

    
    
});     
    

    
    
});
