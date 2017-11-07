init();
var all = [];

// 这里使用了promise
// 主要是能让图片同步跳转出来 效果会好一点

function init() {

  new Promise(function (resolve, reject) {

    $.get("php/gallery.php", function (data) {

      var jsondata = JSON.parse(data);
      var myitem = document.getElementById("mygallery");
      myitem.innerHTML = "";
      var a = "";

      myitem.style.display = "none";

      for (var i = 0; i < jsondata.length; i++) {
        a += "<div class='item'><div class='status'>" + jsondata[i].title + "</div><div class='photo'><img src=" + jsondata[i].img + "></div><div class='content'>" + jsondata[i].content + "</div></div>";
      }

      myitem.innerHTML = a;

      resolve(myitem);
    });
  }).then(function (myitem) {

    var myimg = myitem.getElementsByTagName("img");

    for (i = 0; i < myimg.length; i++) {
      all[i] = new Promise(function (resolve, reject) {
        myimg[i].onload = function () {
          resolve("加载完成");
        };
      });
    }
    Promise.all(all).then(function () {
      myitem.style.display = "block";
    });
  });
}
