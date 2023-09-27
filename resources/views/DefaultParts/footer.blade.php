@section('footer')
<div class="container-fluid fh5co_footer_right_reserved">
    <div class="container">
        <div class="row  ">
            <div class="col-12 col-md-6 py-4 Reserved"> ©By: Adrian Iwański <a href="https://freehtml5.co" title="Free HTML5 Bootstrap templates">Użyty template</a>. </div>
            <div class="col-12 col-md-6 spdp_right py-4">
               
        </div>
    </div>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<!-- Waypoints -->
<script src="/js/jquery.waypoints.min.js"></script>
<!-- Main -->
<script src="/js/main.js"></script>
<!-- my JS -->
<script src="/js/my.js"></script>
<!-- TinyMCE -->
<script src="https://cdn.tiny.cloud/1/igeq5tozkkmse1d16cp6v5dkfwpjt6zce6sdhus13o1ji4qf/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
 <script>
   tinymce.init({
     selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
     language: 'pl',
     min_height: 500,
     plugins: 'code table lists, preview',
     menubar: ' edit insert format table help',
     invalid_elements : 'script',
     toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | preview | table'
   });
 </script>
 <!-- table -->
 <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
 <script>
 $(document).ready( function () {
    $('#datatablesSimple').DataTable();
} );
   </script>
@endsection