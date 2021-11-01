
$(document).ready(function(){
    $("#Button").mouseover(function(){
      $("#Button").css("background-color", "Blue");
      $("#Button").css("color", "black");
    });
  });
  
  $(document).ready(function(){
    $("#Button").mouseout(function(){
      $("#Button").css("background-color", "black");
      $("#Button").css("color", "#00E9FF");
    });
  });
  

  $(document).ready(function(){
    $(".Cookies").mouseover(function(){
      $(".Cookies").fadeOut();
      $(".Cookies").fadeOut("slow");
      $(".Cookies").fadeOut(10000);
    });
  });

  $(document).ready(function(){
    $("#Button1").mouseover(function(){
      $("#Button1").css("background-color", "Green");
      $("#Button1").css("color", "black");
    });
  });
  
  $(document).ready(function(){
    $("#Button1").mouseout(function(){
      $("#Button1").css("background-color", "black");
      $("#Button1").css("color", "#00E9FF");
    });
  });
  $(document).ready(function(){
    $("#togglepage").mouseout(function(){
    $("#HideSearch").slideToggle("slow");
    }); 
  });
  $(document).ready(function(){
    $("#hide").click(function(){
      $("#hide").hide();
    });
    $("#show").click(function(){
      $("#show").show();
    });
  });

  