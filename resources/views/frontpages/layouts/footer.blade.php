<div class="inner">


    <section id="vhiecles-opener">
        <div class="container-fluid d-flex justify-content-center">
            <div class="row">
                <div class="col-12">
                    <input class="custombutton-search" placeholder="Apa yang kamu cari ?" id="tags">
                </div>
            </div>
        </div>
    </section>
</div>


@push('js')
<script src="{{asset('js/jquery-ui/jquery-ui.js')}}"></script>
<script>
    $( function() {
 var availableTags = [
    "Bedah Plastik",
  "Kontak",
  "Sejarah",
  "Struktur Organisasi",
  "Universitas Udayana",
  "Visi Misi",
];
// $("#tags").autocomplete({
//   source: availableTags
// });
$( "#tags" ).autocomplete({
		source: availableTags,
		minLength: 0,
		scroll: true,
		select: function(event, ui) {   
			if(ui.item.value == "Sejarah"){
			    location.href="{{route('home.sejarah')}}";
                $("#vhiecles-opener").fadeOut(500);
			} else if (ui.item.value == "Visi Misi"){
			    location.href="/#section2";
                $("#vhiecles-opener").fadeOut(500);
			}else if (ui.item.value == "Bedah Plastik"){
			    location.href="{{route('home.akademik')}}";
                $("#vhiecles-opener").fadeOut(500);
			}else if (ui.item.value == "Struktur Organisasi"){
			    location.href="{{route('home.struktur')}}";
                $("#vhiecles-opener").fadeOut(500);
			}else if (ui.item.value == "Kontak"){
			    location.href="{{route('home.kontak')}}";
                $("#vhiecles-opener").fadeOut(500);
			}else if (ui.item.value == "Universitas Udayana"){
			    location.href="https://www.unud.ac.id/";
                $("#vhiecles-opener").fadeOut(500);
			}
		}
	}).focus(function() {
		$(this).autocomplete("search", "");
	});
   });

 

  
</script>

@endpush