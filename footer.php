<div class="row footer">
  <div class="col-xs-12 col-sm-6 col-sm-offset-3">
    <p>Designed by Langston Taylor. |
      <a href="/styleguide/">Style Guide</a></p>
  </div>
</div>
</div>

<script type="text/javascript">
  $("h2.create").mouseover(function(){
    $(this).find(".glyphicon").fadeOut(150, function(){
      $(this).removeClass("glyphicon-plus").addClass("glyphicon-plus-sign").fadeIn(150)
    })
  }).mouseout(function(){
    $(this).find(".glyphicon").fadeOut(150, function(){
      $(this).removeClass("glyphicon-plus-sign").addClass("glyphicon-plus").fadeIn(150)
    })
  });

  $(".plain .hoverglyph, #optionedit").click(function(){
    $(".plain").removeClass("plain").addClass("editing");
    $(".options").slideToggle();
  });

  $(".plain .hoverglyph").click(function(){
    $(this).children("input,select,textarea").first().focus();
  });

  $(".expand").click(function(){
    $(".options").slideToggle();
  });
</script>

</body>
</html>
