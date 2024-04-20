      </div>
    </div>
  </main>
  <footer class="footer-main"></footer>
</div>

<script src="assets/js/app.js?v=<?php echo $appVersion ?>"></script>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        $(document).on("click",".js-form-toggle", function(e){
            e.preventDefault();
           if($(this).find("i").hasClass("icon-add")){
             $(this).find("i").addClass("icon-minus").removeClass("icon-add");
           }else{
             $(this).find("i").addClass("icon-add").removeClass("icon-minus");
           }    
           
           $(this).parents(".content-wrap").find(".form-collapse").stop().slideToggle();
        });
    })
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        $('select[multiple]').multiselect({  
            buttonText: function(options, select) {
              if(select.data("selected-text")){
                  return select.data("selected-text");
              }else{
                  return "Please select";
              }
               
            },
            inheritClass: true,
            enableFiltering: true,
            nonSelectedText: 'Please Select',
            enableCaseInsensitiveFiltering: true,
            buttonClass: 'form-control text-start w-100',
            buttonContainer: '<div class="btn-group w-100" />'
        });
      
    });
</script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    // const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    // const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

    $(document).ready(function() {
      $('.submenu').parent().append('<span class="expend"></span>');
    })

    $(document).on('click', '.main-nav ul>li>.expend', function() {
        $(this).parent().toggleClass('active').siblings().removeClass('active').find(".submenu").stop().slideUp(300);
        $(this).parent().find(".submenu").stop().slideToggle(300);

    });

    $(document).ready(function() {
        $(".main-nav ul>li").each(function() {
            if ($('body').hasClass('.menu-active') !== '') {
                $(this).find('.submenu').hide()
            }
        })
    })

  });
</script>
</body>
</html>