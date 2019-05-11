{{--
	resources/views/ressources/index.blade.php
	 --}}
@foreach ($ressources as $ressource)
<figure class="white">
  <a href="#">
    <img src="{{ asset('img/' . $ressources->image) }}" />
    <dl>
      <dt>{{ $ressoure -> titre }}</dt>
      <dd>{{ $ressoure -> texte }}</dd>
    </dl>
  </a>
    <div id="wrapper-part-info">
      <div class="part-info-image"><img src="img/icon-themes.svg" alt="" width="28" height="28"/></div>
      <div id="part-info">{{ $ressoure -> titre }}</div>
  </div>
</figure>
@endforeach
