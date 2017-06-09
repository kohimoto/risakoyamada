$(function() {
  var h = $(window).height();

  $('#wrap').css('display','none');
  $('#loader-bg ,#loader').height(h).css('display','block');
});


//10秒たったら強制的にロード画面を非表示
$(function(){
  setTimeout('stopload()',4500);
});

function stopload(){
  $('#wrap').css('display','block');
  $('#loader-bg').delay(0).fadeOut(800);
  $('#loader').delay(0).fadeOut(300);
}
