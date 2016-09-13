<script src="js/index.js"></script>
<script src="js/slick.js" type="text/javascript"></script>
<script src="js/jquery.catslider.js"></script>
<script src="js/jquery.popupoverlay.js"></script>
<script src="js/products.js"></script>

  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true
      });
    });
  </script>

<script>
    $(window).scroll()
</script>

<script>
    $(function() {
        $('#mi-slider').catslider();
    });
</script>

<script>
    $("div.pos-cats").scrollLeft(300);
</script>

<script>
    $(document).ready(function() {
        $('#payment').popup({
            focusdelay: 400,
            outline: false,
            vertical: 'top'
        });

        $('#void').popup({
            focusdelay: 400,
            outline: false,
            vertical: 'top'
        });
        $('#save').popup({
            focusdelay: 400,
            outline: false,
            vertical: 'top'
        });
        $('#note').popup({
            focusdelay: 400,
            outline: false,
            vertical: 'top'
        });
        $('#discount').popup({
            focusdelay: 400,
            outline: false,
            vertical: 'top'
        });
        $('#add-prod').popup({
            focusdelay: 400,
            outline: false,
            vertical: 'top'
        });
        $('#edit-prod').popup({
            focusdelay: 400,
            outline: false,
            vertical: 'top'
        });

        $('#add-customer').popup({
            focusdelay: 400,
            outline: false,
            vertical: 'top'
        });
        
        $('#employees').popup({
            focusdelay: 400,
            outline: false,
            vertical: 'top'
        });
        
        $('#the-product').popup({
            focusdelay: 400,
            outline: false,
            vertical: 'top'
        });
    });
</script>

<script>
    $("#cannabis").click(function() {
        if ($("#product-wrapper").is(":hidden")) {
            $("#product-wrapper").show("slow");
            $("#showprod").hide();
        }
    });
</script>

<script>
    $("#non-cannabis").click(function() {
        if ($("#n-product").is(":hidden")) {
            $("#n-product").show("slow");
            $("#showprod").hide();
        }
    });
</script>

<script>
    $("#hideprod").click(function() {
        if ($("#product-wrapper").is(":visible")) {
            $("#product-wrapper").hide("fast");
            $("#showprod").show();
        }
    });
</script>

<script>
    $("#2hideprod").click(function() {
        if ($("#n-product").is(":visible")) {
            $("#n-product").hide("fast");
            $("#showprod").show();
        }
    });
</script>

<script>
    $(function() {
        $("#example").dataTable();
    })
</script>

<script>
    $( function() {
        $( "#accordion" ).accordion({
            heightStyle: "content"
        });
    } );
</script>

<script>
    $( function() {
        $( "#tabs" ).tabs();
        $( "#tabs-1" ).tabs();
        $( "#tabs-2" ).tabs();
    } );
</script>

<script>
    $( function() {
        $( "#tabs2" ).tabs();
    } );
</script>