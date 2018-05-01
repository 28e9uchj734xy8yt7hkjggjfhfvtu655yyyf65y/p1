@extends('layouts.backend')

@section('content')

<div class="container-fluid">

<div class="row">
    <div class="col-xl-12">
        <div class="breadcrumb-holder">
            <h1 class="main-title float-left">Products</h1>
            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item">Admin</li>
                <li class="breadcrumb-item active">Products</li>
            </ol>
            <div class="clearfix"></div>
        </div>
    </div>
</div>


<div class="alert alert-danger" style="display: none" role="alert">
<div class="alert-heading" >Info!</div>
</div>

<div class="alert alert-success" style="display: none"  role="alert">
<div class="alert-heading">xxxew!</div>
</div>


<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">                       
    <div class="card mb-3">
        <div class="card-header">
            <h3><i class="fa fa-table"></i> Listing products with it details</h3>
            The searching functionality that is provided by DataTables is very useful for quickly search through the information in the table - however the search is global, and you may wish to present controls to search on specific columns only. <a href="#addproduct-modal" class="btn btn-primary m-r-5 m-b-10" data-target="#addproduct" data-toggle="modal">Register New</a>
<!-- Modal -->
            <div class="modal fade custom-modal" id="addproduct" tabindex="-1" role="dialog" aria-labelledby="addproduct" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Register Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form class="rubeyond-form" method="post" action="#">
                  <div class="modal-body">
                   <p>Nunc molestie felis vitae sem malesuada pulvinar. In condimentum, eros id pellentesque eleifend, sem nibh eleifend neque, ac ultrices nisl nisl vel felis. Phasellus et pellentesque enim, quis tincidunt dui. Suspendisse nisi libero, mollis efficitur commodo in, tempor ut odio. Donec consequat nunc lorem, sit amet pellentesque erat volutpat et.</p>
                      <div class="form-section">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="name" id="name" required="" data-parsley-group="block-0">

                        <label for="description">Description:</label>
                        <textarea class="form-control" name="description" id="description" required="" data-parsley-group="block-0"></textarea>

                        <label for="url">Url:</label>
                        <input type="text" class="form-control" name="product_url" id="product_url" required="" data-parsley-group="block-0">

                        <label for="technologies">Technology Used:</label>
                        <input type="text" class="form-control" name="technologies" id="technologies" required="" data-parsley-group="block-0">

                        <label for="status">Status:</label>
                        <input type="text" class="form-control" name="status" id="status" required="" data-parsley-group="block-0">
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-close" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-submit" onclick="save(this)" data-url="/products" data-method="post">Register</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
            
        <div class="card-body">
            
            <div class="table-responsive">
            <table id="products" class="table table-bordered table-hover display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Url</th>
                    <th>Updated</th>
                    <th>Status</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>                                    
            <tbody>
            </tbody>
            </table>
            </div>

    </div>
    </div>

</div>


<!-- BEGIN Java Script for this page -->
    <script language="JavaScript" type="text/javascript" >

        function append_rows(){
        }
        var table;
        // START CODE Individual column searching (text inputs) DATA TABLE      
        $(document).ready(function() {
            // Setup - add a text input to each footer cell
            $('#products thead th').each( function () {
                var title = $(this).text();
                if(title!= ""){
                //$(this).html( '<input type="text" placeholder="'+title+'..." />' );
                }
            } );
         
            // DataTable

            table = $('#products').DataTable({
                      ajax: {
                        url: '/products/rows',
                        dataSrc: 'data'
                      },
                      drawCallback: function(){$('#products > tbody > tr').each(function(){

                        var window_edit= "@include('/products/_edit_button')";
                        if($(this).children("td").length==6){
                          $(this).append( window_edit );
                        }
                        var tds= $(this).children("td");

                        var id= $(tds[0]).text();
                        var name= $(tds[1]).text();
                        var description= $(tds[2]).text();
                        var edit_column= $(tds[6]);
                        var btn_edit= edit_column.find("a");
                        btn_edit.attr("data-target", "#editproduct-"+id);
                        var window_div= edit_column.find("div");
                        window_div.attr("id", "editproduct-"+id);
                        edit_column.find("#name").val(name);
                        edit_column.find("#description").val(description);
                        edit_column.find(".btn-update").attr("data-id", id);
                        edit_column.find(".btn-update").attr("data-url", "/products/" + id);

                        var window_remove= "@include('/products/_remove_button')";
                        if($(this).children("td").length==7){
                          $(this).append(window_remove);
                        }
                        var tds= $(this).children("td");
                        var id= $(tds[0]).text();
                        var name= $(tds[1]).text();
                        var description= $(tds[2]).text();
                        var remove_column= $(tds[7]);
                        var btn_remove= remove_column.find("a");
                        btn_remove.attr("data-target", "#removeproduct-"+id);
                        var window_div= remove_column.find("div");
                        window_div.attr("id", "removeproduct-"+id);
                        remove_column.find("#name").val(name);
                        remove_column.find("#description").val(description);
                        remove_column.find(".btn-remove").attr("data-id", id);
                        remove_column.find(".btn-remove").attr("data-url", "/products/" + id);

                      })},

                      columns: [
                        { data: 'id' },
                        { data: 'name' },
                        { data: 'description' },
                        { data: 'product_url' },
                        { data: 'updated_at' },
                        { data: 'status' }
                      ]}
                      ); 
            /*
            / Apply the search
            table.columns().every( function () {
                var that = this;
                $( 'input', this.footer() ).on( 'keyup change', function () {
                    if ( that.search() !== this.value ) {
                        that
                        .search( this.value )
                        .draw();
                    }
                } );
            } ); */
        } );
      


      function remove(object)
      {

            var target_method = $(object).data("method");
            var target_url= $(object).data("url");
            var id= $(object).data("id");
            $.ajax({
               type: target_method,
               url: target_url,
               id: id,
               success:function(data){
                  if(data.error==null){
                  $('.alert-success').text(data.ok);
                  $('.alert-success').show();
                  $('.alert-danger').hide();
                  $(".btn-close").click();
                  table.ajax.reload();
                  }
                  else{
                  $('.alert-danger').text(data.error);
                  $('.alert-danger').show();
                  $('.alert-success').hide();
                  }
               }

            });


        }

      function save(obj)
      {

            var target_method = $(obj).data("method");
            var target_url= $(obj).data("url");
            var id= $(obj).data("id");
            var form = $(obj).parents('form:first');
            var data = {};
            $(form).find('input, select, textarea').each(function(){
              var key = this.name;
              var value = this.value;
              data[key]= value;
            });
            $.ajax({
               type: target_method,
               url: target_url,
               id: id,
               data: data,
               success:function(data){
                  if(data.error==null){
                  $('.alert-success').text(data.ok);
                  $('.alert-success').show();
                  $('.alert-danger').hide();
                  $(".btn-close").click();
                  table.ajax.reload();
                  }
                  else{
                  $('.alert-danger').text(data.error);
                  $('.alert-danger').show();
                  $('.alert-success').hide();
                  }

               }

            });

        }
        
    </script>   

<!-- END Java Script for this page -->

@endsection