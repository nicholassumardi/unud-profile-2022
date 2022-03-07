<div class="social-share">
    <button class="share-btn"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
    <div class="social-links">
        <ul>
            <li><a href="https://www.facebook.com/universitasudayana/" target="_blank"><i class="fa fa-facebook"
                        aria-hidden="true"></i></a></li>
            <li><a href="https://twitter.com/udayanauniv" target="_blank"><i class="fa fa-twitter"
                        aria-hidden="true"></i></a></li>
            <li><a href="https://plus.google.com/112567980535769156191" target="_blank"><i class="fa fa-google-plus"
                        aria-hidden="true"></i></a></li>
            <li><a href="https://www.instagram.com/univ.udayana/?hl=en" target="_blank"><i class="fa fa-instagram"
                        aria-hidden="true"></i></a></li>
            <li><a href="https://www.youtube.com/channel/UCGcZDMJ2hdxtS1wASNAKXDA" target="_blank"><i
                        class="fa fa-youtube" aria-hidden="true"></i></a></li>
        </ul>
    </div>
</div>

@push('js')
<script type="text/javascript">
    clicked = true;
    $(document).ready(function(){
        $(".share-btn").click(function(){
            if(clicked){
                $(".social-links").css('right', '-100px');
                $( ".share-btn" ).addClass( "hide-links" );
                $( ".share-btn" ).removeClass( "show-links" );
                clicked  = false;
            } else {
                $(".social-links").css('right', '0px');
                $( ".share-btn" ).addClass( "show-links" );
                $( ".share-btn" ).removeClass( "hide-links" );
                clicked  = true;
            }   
        });
    });
</script>
@endpush