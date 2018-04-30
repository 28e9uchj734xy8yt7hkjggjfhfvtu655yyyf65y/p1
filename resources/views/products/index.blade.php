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
                  <form class="rubeyond-form" action="#">
                  <div class="modal-body">
                   <p>Nunc molestie felis vitae sem malesuada pulvinar. In condimentum, eros id pellentesque eleifend, sem nibh eleifend neque, ac ultrices nisl nisl vel felis. Phasellus et pellentesque enim, quis tincidunt dui. Suspendisse nisi libero, mollis efficitur commodo in, tempor ut odio. Donec consequat nunc lorem, sit amet pellentesque erat volutpat et.</p>
                      <div class="form-section">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="create_name" id="create_name" required="" data-parsley-group="block-0">

                        <label for="description">Description:</label>
                        <textarea class="form-control" name="create_description" id="create_description" required="" data-parsley-group="block-0"></textarea>

                        <label for="url">Url:</label>
                        <input type="text" class="form-control" name="create_product_url" id="create_product_url" required="" data-parsley-group="block-0">

                        <label for="technologies">Technology Used:</label>
                        <input type="text" class="form-control" name="create_technologies" id="create_technologies" required="" data-parsley-group="block-0">

                        <label for="status">Status:</label>
                        <input type="text" class="form-control" name="create_status" id="create_status" required="" data-parsley-group="block-0">
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-close" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-submit" data-url="/products" data-method="post">Register</button>
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
                    <th data-id="id">ID</th>
                    <th data-id="name">Name</th>
                    <th data-id="description">Description</th>
                    <th data-id="url">Url</th>
                    <th data-id="updated">Updated</th>
                    <th data-id="status">Status</th>
                    <th data-id=""></th>
                    <th data-id=""></th>
                </tr>
            </thead>                                    
            <tbody>

                @foreach ($products as $product)


                <tr id="record-{{$product->id}}">
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->product_url}}</td>
                    <td>{{$product->updated_at}}</td>
                    <td>{{$product->status}}</td>                  
                    <td><a href="#editproduct-modal" class="btn btn-primary m-r-5 m-b-10" data-target="#editproduct-{{$product->id}}" data-toggle="modal">Edit</a>

                      <div class="modal fade custom-modal" id="editproduct-{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="editproduct" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel2">Editing Product #{{$product->id}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <form class="rubeyond-form" action="#">
                                  <div class="modal-body">
                                   <p>Nunc molestie felis vitae sem malesuada pulvinar. In condimentum, eros id pellentesque eleifend, sem nibh eleifend neque, ac ultrices nisl nisl vel felis. Phasellus et pellentesque enim, quis tincidunt dui. Suspendisse nisi libero, mollis efficitur commodo in, tempor ut odio. Donec consequat nunc lorem, sit amet pellentesque erat volutpat et.</p>
                                      <div class="form-section">
                                        <label for="name">Name:</label>
                                        <input type="text" class="form-control" name="edit_name" id="name" required="" value="{{$product->name}}" ata-parsley-group="block-0">

                                        <label for="description">Description:</label>
                                        <textarea class="form-control" name="edit_description" id="description" required="" data-parsley-group="block-0">{{$product->description}} </textarea>

                                        <label for="url">Url:</label>
                                        <input type="text" class="form-control" name="edit_product_url" id="product_url" required="" data-parsley-group="block-0">

                                        <label for="technologies">Technology Used:</label>
                                        <input type="text" class="form-control" name="edit_technologies" id="technologies" required="" data-parsley-group="block-0">

                                        <label for="status">Status:</label>
                                        <input type="text" class="form-control" name="edit_status" id="status" required="" data-parsley-group="block-0">
                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-close" data-dismiss="modal">Cancel</button>
                                    <button type="button" data-url="" class="btn btn-primary btn-success">Update</button>
                                  </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                        </div>


                    </td>
                    <td><a href="#removeproduct-modal" class="btn btn-danger m-r-5 m-b-10" data-target="#removeproduct-{{$product->id}}" data-toggle="modal">Remove</a>


                    <div class="modal fade custom-modal" id="removeproduct-{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="removeproduct" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel2">Removing Product #{{$product->id}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <form class="rubeyond-form" action="#">
                              <div class="modal-body">
                               <p>Are you sure to remove ?</p>
                                  <div class="form-section">
                                    <label for="name">Name:</label>
                                    <input type="text" disabled="true" class="form-control" required="" value="{{$product->name}}" data-parsley-group="block-0">

                                    <label for="description">Description:</label>
                                    <textarea disabled="true" class="form-control" required="" data-parsley-group="block-0">{{$product->description}} </textarea>

                                    <label for="url">Url:</label>
                                    <input disabled="true" type="text" class="form-control" required="" data-parsley-group="block-0">

                                    <label for="technologies">Technology Used:</label>
                                    <input disabled="true" type="text" class="form-control" required="" data-parsley-group="block-0">

                                    <label for="status">Status:</label>
                                    <input disabled="true" type="text" class="form-control" required="" data-parsley-group="block-0">
                                  </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-close" data-dismiss="modal">Cancel</button>
                                <button type="button" data-id={{$product->id}} data-method="delete" data-url="products/{{$product->id}}" class="btn btn-primary btn-danger btn-remove">Remove</button>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
                    </div>


                    </td>
                </tr>


                @endforeach
            </tbody>
            </table>
            </div>

    </div>
    </div>

</div>


<!-- BEGIN Java Script for this page -->
    <script language="JavaScript" type="text/javascript" >

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
            table = $('#products').DataTable();
         
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
        // END CODE Individual column searching (text inputs) DATA TABLE     
         $(".btn-submit").click(function(e){

                e.preventDefault();

                var name = $("input[name=create_name]").val();

                var description = $("textarea[name=create_description]").val();

                var url = $("input[name=create_product_url]").val();

                var target_method = $(this).data("method");

                var target_url= $(this).data("url");

                $.ajax({

                   type: target_method,

                   url: target_url,

                   data:{name: name, description: description, product_url: url},

                   success:function(data){
                      if(data.error==null){
                      $('.alert-success').text(data.ok);
                      $('.alert-success').show();
                      $('.alert-danger').hide();
                      $(".btn-close").click();
                      }
                      else{
                      $('.alert-danger').text(data.error);
                      $('.alert-danger').show();
                      $('.alert-success').hide();
                      }

                   }

                })
        })


      $(".btn-remove").click(function(e){

            e.preventDefault();

            var target_method = $(this).data("method");

            var target_url= $(this).data("url");

            var id= $(this).data("id");

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
                  $('#record-'+id + '').hide();
                  }
                  else{
                  $('.alert-danger').text(data.error);
                  $('.alert-danger').show();
                  $('.alert-success').hide();
                  }

               }

            });


        })
        
    </script>   

<!-- END Java Script for this page -->

@endsection