$(function(){

  $('.image-grid img').hover(
    function(){
        /* mouse enter の処理 */
        color_class = new Array();
        color_class["1"] = "c_1";
        color_class["2"] = "c_2";
        color_class["3"] = "c_3";
        color_class["4"] = "c_4";
        color_class["5"] = "c_5";
        color_class["6"] = "c_6";

        for(var i = color_class.length - 1; i > 0; i--){
          var r = Math.floor(Math.random() * (i + 1));
          var tmp = color_class[i];
          color_class[i] = color_class[r];
          color_class[r] = tmp;
          num = 1;
          color = color_class[num];
          if(color == undefined){
            color == color_class[i++];
          }

        }
          if(color == "c_1"){
            code = "30,234,119";
          }else if(color == "c_2"){
            code = "245,31,114";
          }else if(color == "c_3"){
            code = "255,79,33";
          }else if(color == "c_4"){
            code = "170,39,231";
          }else if(color == "c_5"){
            code = "255,241,33";
          }else if(color == "c_6"){
            code = "33,203,227";
          }
        $(this).css('box-shadow', '0px 0px 0px 5rem rgba('+ code +',0.4)');
        $(this).css('color', 'rgb('+ code +')');

      },
      function(){
        /* mouse leave の処理 */
//        $(this).css('box-shadow', '0px 0px 0px 0px ');
        $(this).css('box-shadow', '0 0 0 0 rgba('+ code +',0.0)');
        $(this).attr({"alt":""});
        $(this).css('color', 'transparent ');

      }
    )


    e_h = 0;
    $('.art_img').click(function(e){
//      color = $(this).css('box-shadow');
      color = $(this).css('background-color');
    h = $(window).height();
    $('#disp_img').css('min-height',h);
      $('#disp_img').css('display','block');
      $('main').css('display','none');
      $('header').css('display','none');
      $('footer').css('display','none');
      src = $(this).attr('src');
      $('#disp_img img').attr('src', src);
      color = $(this).css('color');
      code = color.split("(");
      code = code[1];
      code = code.split(")");
      code = code[0];
      code = code.split(",");
      code = code[0]+","+ code[1]+","+code[2];
      $('#disp_img').css('background-color','rgba('+ code +',1)');
//      e_h = $('body').scrollTop();
      //y = e.screenY;
      y = window.pageYOffset ;  // Y方向 (縦)

      $('body').scrollTop(0);
      $('html').scrollTop(0);
    });
    $('#close').click(function(){
      $('#disp_img').css('display','none');
      $('main').css('display','block');
      $('header').css('display','block');
      $('footer').css('display','block');
      $('body').scrollTop(y);
      $('html').scrollTop(y);
      $('.image-grid img').css('box-shadow', '0px 0px 0px 0px ');
    });






});
