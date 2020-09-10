<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="ousmane diallo">
  <meta name="keyword" content="projet pour rendre accessible la vente des medicaments">
  <title>Mon blog - {{config('app.name')}}</title>
    @include('partials_admin/_links_h')
</head>
<body>
  <section id="container">
      @include('partials_admin/_header')
      <!-- pour les sidebar -->
      @include('partials_admin/_side_bar')

      <!--main content start-->

          @yield('blogAdmin')

      @include('partials_admin/_footer')
  </section>

    @include('partials_admin/_links_f')
</body>
</html>
