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

      },
      function(){
        /* mouse leave の処理 */
        $(this).css('box-shadow', '0px 0px 0px 0px ');
        $(this).attr({"alt":""});

      }
    )


});
