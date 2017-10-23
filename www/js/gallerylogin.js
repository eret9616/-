init();

function init(){

  $.get("php/gallery.php",function(data){

    var jsondata=JSON.parse(data);
   var myitem = document.getElementById("mygallery");
       myitem.innerHTML = "";
   var a ="";

      for(var i =0; i<jsondata.length; i++)
     {


     a +="<div class='item'><div class='status'>"
     +jsondata[i].title+
     "</div><a style='margin-left:10px;' onclick='if(!confirm(\"确认删除吗?\")) event.preventDefault()' href='php/delete.php?type=g&name="+jsondata[i].img+"&id="
     +jsondata[i].id+
     "'>删</a><div class='photo'><img src='"
     +jsondata[i].img+
     "'></div><div class='content'>"+jsondata[i].content+"</div></div>";


     }


     myitem.innerHTML = a;

  })
}
