$(document).ready(function(){
  // console.log and "//" - для проверки (потом уберу)
  // vars - size real a images
  var imgReal2D = new Image();
  var widthRealImg2D;
  var heightRealImg2D;
  var imgReal3D = new Image();
  var widthRealImg3D;
  var heightRealImg3D;
  // coord mouse
  var mouse = {x: 0, y: 0};
  // func 2D
  $("#map2d").load(function()
  {
    imgReal2D.onload = function()
    {
      widthRealImg2D = this.width;
      heightRealImg2D = this.height;
      console.log("Map2d - "+"widthRealImg : " + widthRealImg2D + '   ' + "heightRealImg : " +  heightRealImg2D);
      // out w,h 2D
      $(".loaddata2D").text(widthRealImg2D+"x"+heightRealImg2D);
    }
    var srcIMG = $(this).attr('src');
    imgReal2D.src = srcIMG;
  }); 
  // func 3D
  $("#map3d").load(function()
  {
    var imgReal3D = new Image();
    imgReal3D.onload = function()
    {
      widthRealImg3D = this.width;
      heightRealImg3D = this.height;
      console.log("Map3d - "+"widthRealImg : " + widthRealImg3D + '   ' + "heightRealImg : " +  heightRealImg3D);
      // out w,h 3D
      $(".loaddata3D").text(widthRealImg3D+"x"+heightRealImg3D);
    }
    var srcIMG = $(this).attr('src');
    imgReal3D.src = srcIMG;
  });
  //
  function coordPointTheInMap()
  {
    var str2D = $(".loaddata2D").text();
    var str3D = $(".loaddata3D").text();
    console.log(str2D,str3D);
    // Разбивка на эл. массива
    var arr2D = str2D.split('x');
    var arr3D = str3D.split('x');
    console.log(arr2D,arr3D);
    // получаем наш size - w, h
    // 2D
    var imgW2D = $("#map2d").width();
    var imgH2D = $("#map2d").height(); // defolt
    // 3D
    var imgW3D = $("#map3d").width();
    var imgH3D = $("#map3d").height();
    console.log(imgW2D,imgH2D,imgW3D,imgH3D);
    // 
    imgW2D /= 2;
    $(".box").css({
      "display":"block",
      "left":imgW2D+"px",
      "top":"0px"
    });
    console.log(imgW2D);
  }


  $('.maping').on('mousemove',function(){

       coordPointTheInMap();
       mouseMove ();

  });

  function mouseMove ()
  {
    var indent_img = $(".maping");

    // Получаем отступы до края картинки слева и сверху
    var magnify_offset = indent_img.offset();

    // Позиция курсора над изображением
    mouse.x = indent_img.pageX - magnify_offset.left;
    mouse.y = indent_img.pageY - magnify_offset.top;

    m_x = mouse.x;
    m_y = mouse.y;

    console.log(m_x,m_y);
    return;
  }
});