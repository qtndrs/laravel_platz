{{--
  resources/views/templates/homepage.blade.php
   --}}

<!DOCTYPE HTML>
<html>
@include('partials.header')



<!-- NAVBAR -->
@include('partials.nav')


<!-- PORTFOLIO -->
<div id="wrapper-container">
  <div class="container object">
    <div id="main-container-image">
      	<section class="work">
          <!-- /PORTFOLIO -->
          @include('ressources.index')
          <!-- /PORTFOLIO -->
	       </section>
        <!-- PAGINATOR -->
        @include('partials.paginator')
        <!-- /PAGINATOR -->
      </div>
    </div>

      <!-- footer -->
        @include('partials.footer')
      <!-- /footer -->

</div>
  <!-- script -->
  @include('partials.script')
  <!-- /script -->



</body>


</html>
