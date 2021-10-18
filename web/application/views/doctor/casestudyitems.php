<div class="menu">
            <!--<a id="showall">All</a>-->
            <a class="single" target="1">Current</a>
            <a class="single" target="2">Old</a>
          
        </div>
        <section class="target_box">
            <div id="div1" class="target">
                <div class="updt">Old</div>
                <div class="updt">Old</div>
                <div class="updt">Old</div>
                <div class="updt">Old</div>
                <div class="updt">Old</div>
            </div>
            <div id="div2" class="target">
                <div class="updt">Current</div>
                <div class="updt">Current</div>
                <div class="updt">Current</div>
                <div class="updt">Current</div>
                <div class="updt">Current</div>
            </div>
         
        </section>
        <script type="text/javascript">
            jQuery('.single').click(function(){
                jQuery('.target').hide();
                jQuery('#div'+$(this).attr('target')).show();
            });
        
        </script>