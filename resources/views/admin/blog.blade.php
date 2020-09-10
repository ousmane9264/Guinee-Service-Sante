@extends('partials_admin/blog_p')
@section('blogAdmin')
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
      <!-- page start-->
      <div class="row mt">
          <div class="col-md-6 col-lg-6">
                <h1 class="text-center">Mon blog</h1>
                <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="get" action="">
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Titre</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" name="name" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-2">Sous Titre</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="cemail" type="text" name="email" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="curl" class="control-label col-lg-2">Date Ajout</label>
                    <div class="col-lg-10">
                        <input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="">
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="ccomment" class="control-label col-lg-2">Description</label>
                    <div class="col-lg-10">
                      <textarea class="form-control " id="ccomment" name="comment" required></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Ajouter</button>
                      <button class="btn btn-theme04" type="button">Cancel</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->



          </div>
      </div>
    </section>
  </section>


@stop
