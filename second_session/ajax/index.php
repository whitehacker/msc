<!Doctype html>


<html>
<head>
  <style>
  #flash{
    display:none;
  }
  </style>
  <link rel="stylesheet" href="css/bootstrap.css" />
  <script type="text/javascript" src="js/jquery.js"></script>
  <script>
    $(function(){
      $('.comment_button').click(function(){
          var test=$('#content').val();
          var dataString="content="+test;
          if(test==''){
          alert("Please Enter Something...");
          return false;
          }
          else{
            $("#flash").show();
            $("#flash").fadeIn(4000).html("<img src='loader.gif' align='absmiddle'><span>Loading comment...</span>");
            $.ajax({
              type: "POST",
              url: "insert.php",
              data: dataString,
              success: function(html){
                $("#display").after(html);
                document.getElementById("content").value="";
                document.getElementById("content").focus();
                $("#flash").hide();
              }
            });
          }
          return false;
      });
    });
  </script>
  
</head>

<body>
  <div>
    <span id="error"></span>
    <form class="form-horizontal" name="form" method="post">
<fieldset>

<!-- Form Name -->
<legend>Facebook Update</legend>




<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Text Area</label>
  <div class="col-md-6">                     
    <textarea class="form-control" id="content" name="content"></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton">Update Status</label>
  <div class="col-md-4">
    <button id="singlebutton" name="submit" class="btn btn-primary comment_button">Update Status!</button>
  </div>
</div>

</fieldset>
</form>

    
  </div>
  <div id="flash">Loading...</div>
  <div id="display"></div>
</body>


</html>