<!DOCTYPE html>
<html lang="fr">
<!-- Mirrored from html.gridbootstrap.com/vert/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Mar 2020 18:27:02 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="projet Achats de medicaments en ligne avec livraison ">
  <meta name="author" content="ousmane diallo">

    <title>{{config('app.name')}} </title>

    <!-- liens pour l'entete -->
    @include('layouts/partials.links_header')
  </head>
  <body>
    <!-- icnlusion pour l'entete -->
       @include('layouts/partials._header')
      <!-- inclusion pour le contenu -->
        @yield('content')
      <!-- fin -->

      <!-- icnlusion pour le footer -->
      @include('layouts/partials._footer')

      <!-- liens pour le footer -->

    @include('layouts/partials.links_footer')
</body>
</html>
