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
                  <form class="demo-form" action="#">
                  <div class="modal-body">
                   <p>Nunc molestie felis vitae sem malesuada pulvinar. In condimentum, eros id pellentesque eleifend, sem nibh eleifend neque, ac ultrices nisl nisl vel felis. Phasellus et pellentesque enim, quis tincidunt dui. Suspendisse nisi libero, mollis efficitur commodo in, tempor ut odio. Donec consequat nunc lorem, sit amet pellentesque erat volutpat et.</p>
                      <div class="form-section">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="name" id="name" required="" data-parsley-group="block-0">

                        <label for="description">Description:</label>
                        <textarea class="form-control" name="description" id="description" required="" data-parsley-group="block-0"></textarea>

                        <label for="url">Url:</label>
                        <input type="text" class="form-control" name="url" id="url" required="" data-parsley-group="block-0">

                        <label for="technologies">Technology Used:</label>
                        <input type="text" class="form-control" name="technologies" id="technologies" required="" data-parsley-group="block-0">

                        <label for="status">Status:</label>
                        <input type="text" class="form-control" name="status" id="status" required="" data-parsley-group="block-0">
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Register</button>
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
                    <th>Name</th>
                    <th>Description</th>
                    <th>Url</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>                                    
            <tbody>
                <tr>
                    <td>Image Detective</td>
                    <td>Check header images as detail as it can</td>
                    <td>https://imageshow.dev35.com</td>
                    <td>2011/04/25</td>
                    <td>2011/04/25</td>
                    <th>Online</th>
                    <td><a href="#editproduct-modal" class="btn btn-primary m-r-5 m-b-10" data-target="#editproduct" data-toggle="modal">Edit</a>&nbsp;<a href="#removeproduct-modal" class="btn btn-danger m-r-5 m-b-10" data-target="#removeproduct" data-toggle="modal">Remove</a></td>
                </tr>
            </tbody>
            </table>
            </div>
    </div>
    </div>

</div>


<!-- BEGIN Java Script for this page -->
    <script language="JavaScript" type="text/javascript" >

        
        // START CODE Individual column searching (text inputs) DATA TABLE      
        $(document).ready(function() {
            // Setup - add a text input to each footer cell
            $('#products thead th').each( function () {
                var title = $(this).text();
                if(title!= "Actions"){
                $(this).html( '<input type="text" placeholder="'+title+'..." />' );
                }
            } );
         
            // DataTable
            var table = $('#products').DataTable();
         
            // Apply the search
            table.columns().every( function () {
                var that = this;
         
                $( 'input', this.footer() ).on( 'keyup change', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                } );
            } );
        } );
        // END CODE Individual column searching (text inputs) DATA TABLE     

    </script>   

<!-- END Java Script for this page -->

@endsection