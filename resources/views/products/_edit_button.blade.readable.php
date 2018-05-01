    <td><a href='#editproduct-modal' class='btn btn-primary m-r-5 m-b-10' data-target='#editproduct-' data-toggle='modal'>Edit</a>

      <div class='modal fade custom-modal' id='editproduct-' tabindex='-1' role='dialog' aria-labelledby='editproduct' aria-hidden='true'>
              <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                  <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLabel2'>Editing Product</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span>
                    </button>
                  </div>
                  <form class='rubeyond-form' action='#' method='post'>
                  <div class='modal-body'>
                   <p>Nunc molestie felis vitae sem malesuada pulvinar. In condimentum, eros id pellentesque eleifend, sem nibh eleifend neque, ac ultrices nisl nisl vel felis. Phasellus et pellentesque enim, quis tincidunt dui. Suspendisse nisi libero, mollis efficitur commodo in, tempor ut odio. Donec consequat nunc lorem, sit amet pellentesque erat volutpat et.</p>
                      <div class='form-section'>
                        <label for='name'>Name:</label>
                        <input type='text' class='form-control' name='name' id='name' required='' data-parsley-group='block-0'>

                        <label for='description'>Description:</label>
                        <textarea class='form-control' name='description' id='description' required='' data-parsley-group='block-0'></textarea>
                      </div>
                  </div>
                  <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary btn-close' data-dismiss='modal'>Cancel</button>
                    <button type='button' data-method='put' onclick='save(this)' data-id='' data-url='' class='btn btn-primary btn-success btn-submit'>Update</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </td>