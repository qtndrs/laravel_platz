{{--
	resources/views/Categories/index.blade.php
	 --}}

@foreach ($categories as $categorie)
<div id="wrapper-navbar">
	 <div class="navbar object">

						<div id="wrapper-bouton-icon">
									 <div id="bouton-{{ $categorie->btnName }}"><img src="{{ asset('img/' . $categorie->image) }}" alt="{{ $categorie->titre }}" title="{{ $categorie->titre }}" height="28" width="28"></div>
						 </div>
		 </div>
		</div>
@endforeach
