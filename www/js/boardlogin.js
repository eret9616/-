init();

function init(){

  $.get("php/board.php",function(data){

      var jsondata=JSON.parse(data);
      var mymessage = document.getElementById("message");
          mymessage.innerHTML = "";

         for(var i =0; i<jsondata.length ; i++)
        {
          mymessage.innerHTML +=
           "<div class='article'><span style='float:left'>"
           +jsondata[i].username+
           "</span><span style='float:right'><a onclick='if(!confirm(\"确认删除\")) event.preventDefault()' href='php/delete.php?type=b&id="+jsondata[i].id+"'>删除</a>"+jsondata[i].intime+"</span><br>"+jsondata[i].msg+"</div>";
        }

     var mybtn = document.getElementsByTagName("button")[0];
     mybtn.addEventListener("click", add);

  });

  }



function add(){

var mycontent = document.getElementsByTagName("textarea")[0].value.trim();
var myusername = document.getElementsByTagName("input")[0].value.trim();

if (!mycontent||!myusername){ alert("请输入名字和内容！");return;}
else {

var data = "user="+myusername+"&content="+mycontent;

$.post("php/board.php",data,function(){
  document.getElementsByTagName("textarea")[0].value = "";
  document.getElementsByTagName("input")[0].value = "";
  init(); })

    }

    }
