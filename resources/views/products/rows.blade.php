@foreach ($products as $product)


<tr id='record-{{$product->id}}'>
    <td>{{$product->id}}</td>
    <td>{{$product->name}}</td>
    <td>{{$product->description}}</td>
    <td>{{$product->product_url}}</td>
    <td>{{$product->updated_at}}</td>
    <td>{{$product->status}}</td>                  
    <td><a href='#editproduct-modal' class='btn btn-primary m-r-5 m-b-10' data-target='#editproduct-{{$product->id}}' data-toggle='modal'>Edit</a>

      <div class='modal fade custom-modal' id='editproduct-{{$product->id}}' tabindex='-1' role='dialog' aria-labelledby='editproduct' aria-hidden='true'>
              <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                  <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLabel2'>Editing Product #{{$product->id}}</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span>
                    </button>
                  </div>
                  <form class='rubeyond-form' action='#'>
                  <div class='modal-body'>
                   <p>Nunc molestie felis vitae sem malesuada pulvinar. In condimentum, eros id pellentesque eleifend, sem nibh eleifend neque, ac ultrices nisl nisl vel felis. Phasellus et pellentesque enim, quis tincidunt dui. Suspendisse nisi libero, mollis efficitur commodo in, tempor ut odio. Donec consequat nunc lorem, sit amet pellentesque erat volutpat et.</p>
                      <div class='form-section'>
                        <label for='name'>Name:</label>
                        <input type='text' class='form-control' name='name' id='name' required='' value='{{$product->name}}' ata-parsley-group='block-0'>

                        <label for='description'>Description:</label>
                        <textarea class='form-control' name='description' id='description' required='' data-parsley-group='block-0'>{{$product->description}} </textarea>

                        <label for='url'>Url:</label>
                        <input type='text' class='form-control' name='put_product_url' id='put_product_url' required='' data-parsley-group='block-0'>

                        <label for='technologies'>Technology Used:</label>
                        <input type='text' class='form-control' name='technologies' id='technologies' required='' data-parsley-group='block-0'>

                        <label for='status'>Status:</label>
                        <input type='text' class='form-control' name='status' id='status' required='' data-parsley-group='block-0'>
                      </div>
                  </div>
                  <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary btn-close' data-dismiss='modal'>Cancel</button>
                    <button type='button' data-method='put' data-id='{{$product->id}}' data-url='/products/{{$product->id}}' class='btn btn-primary btn-success btn-submit'>Update</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </td>
    <td><a href='#removeproduct-modal' class='btn btn-danger m-r-5 m-b-10' data-target='#removeproduct-{{$product->id}}' data-toggle='modal'>Remove</a>


    <div class='modal fade custom-modal' id='removeproduct-{{$product->id}}' tabindex='-1' role='dialog' aria-labelledby='removeproduct' aria-hidden='true'>
          <div class='modal-dialog' role='document'>
            <div class='modal-content'>
              <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalLabel2'>Removing Product #{{$product->id}}</h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                </button>
              </div>
              <form class='rubeyond-form' action='#'>
              <div class='modal-body'>
               <p>Are you sure to remove ?</p>
                  <div class='form-section'>
                    <label for='name'>Name:</label>
                    <input type='text' disabled='true' class='form-control' required='' value='{{$product->name}}' data-parsley-group='block-0'>

                    <label for='description'>Description:</label>
                    <textarea disabled='true' class='form-control' required='' data-parsley-group='block-0'>{{$product->description}} </textarea>

                    <label for='url'>Url:</label>
                    <input disabled='true' type='text' class='form-control' required='' data-parsley-group='block-0'>

                    <label for='technologies'>Technology Used:</label>
                    <input disabled='true' type='text' class='form-control' required='' data-parsley-group='block-0'>

                    <label for='status'>Status:</label>
                    <input disabled='true' type='text' class='form-control' required='' data-parsley-group='block-0'>
                  </div>
              </div>
              <div class='modal-footer'>
                <button type='button' class='btn btn-secondary btn-close' data-dismiss='modal'>Cancel</button>
                <button type='button' data-id='{{$product->id}}' data-method='delete' data-url='products/{{$product->id}}' class='btn btn-primary btn-danger btn-remove'>Remove</button>
              </div>
              </form>
            </div>
          </div>
        </div>
    </div>


    </td>
</tr>

@endforeach