init();

function init(){

    $.get("php/gallery.php",function(data){

      var jsondata=JSON.parse(data);
     var myitem = document.getElementById("mygallery");
         myitem.innerHTML = "";
        var a ="";
        for(var i =0; i<jsondata.length; i++)
       {
         a += "<div class='item'><div class='status'>"+
              jsondata[i].title+ "</div><span id='tablet'>"+
              jsondata[i].content + "</span><div class='photo'><img src="+
              jsondata[i].img +  "></div><div class='content'>"+
              jsondata[i].content + "</div></div>";
       }
       myitem.innerHTML =a;
    })

}
