<!DOCTYPE html>
            <html>
            <head>
            <title>Datatables implementation in laravel - justlaravel.com</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            
            <script src="//code.jquery.com/jquery-1.12.3.js"></script>
            <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
            <script
                src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
            <link rel="stylesheet"
                href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
            <link rel="stylesheet"
                href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
            <script
                src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
            </head>
            <style>
            </style>
            <body>
                <div class="container ">
                    {{ csrf_field() }}
                    <div class="table-responsive text-center">
                        <table class="table table-borderless" id="table">
                            <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Store Owner</th>
                                    <th class="text-center">Product</th>
                                    <th class="text-center">Quantity Available</th>
                                    <th class="text-center">Sold</th>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Clear Status ($)</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            @foreach($data as $item)
                            <tr class="item{{$item->id}}">
                                <td>{{$item->id}}</td>
                                <td>{{$item->store_owner}}</td>
                                <td>{{$item->product}}</td>
                                <td>{{$item->quantity_available}}</td>
                                <td>{{$item->sold}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->clear_status}}</td>
                                {{-- <td></td> --}}
                                <td><button class="edit-modal btn btn-info"
                                        data-info="{{$item->id}},{{$item->store_owner}},{{$item->product}},{{$item->quantity_available}},{{$item->sold}},{{$item->created_at}},{{$item->clear_status}}">
                                        <span class="glyphicon glyphicon-edit"></span> Edit
                                    </button>
                                    <button class="delete-modal btn btn-danger"
                                        data-info="{{$item->id}},{{$item->store_owner}},{{$item->product}},{{$item->quantity_available}},{{$item->sold}},{{$item->created_at}},{{$item->clear_status}}">
                                        <span class="glyphicon glyphicon-trash"></span> Delete
                                    </button></td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                {{-- <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"></h4>
            
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="id">ID</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="fid" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="store_owner">Store Owner</label>
                                        <div class="col-sm-10">
                                            <input type="name" class="form-control" id="store_owner">
                                        </div>
                                    </div>
                                    <p class="store_owner_error error text-center alert alert-danger hidden"></p>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="product">Product:</label>
                                        <div class="col-sm-10">
                                            <input type="name" class="form-control" id="product">
                                        </div>
                                    </div>
                                    <p class="product_error error text-center alert alert-danger hidden"></p>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="quantity_available">Quantity Available</label>
                                        <div class="col-sm-10">
                                            <input type="quantity_available" class="form-control" id="quantity_available">
                                        </div>
                                    </div>
                                    <p class="quantity_available_error error text-center alert alert-danger hidden"></p>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="sold">sold</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" id="sold" name="sold">
                                                <option value="" disabled selected>Choose your option</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="sold">Sold</label>
                                        <div class="col-sm-10">
                                            <input type="sold" class="form-control" id="sold">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="created_at">created_at:</label>
                                        <div class="col-sm-10">
                                            <input type="name" class="form-control" id="created_at">
                                        </div>
                                    </div>
                                    <p
                                        class="created_at_error error text-center alert alert-danger hidden"></p>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="clear_status">clear_status </label>
                                        <div class="col-sm-10">
                                            <input type="name" class="form-control" id="clear_status">
                                        </div>
                                    </div>
                                    <p
                                        class="clear_status_error error text-center alert alert-danger hidden"></p>
                                </form>
                                <div class="deleteContent">
                                    Are you Sure you want to delete <span class="dname"></span> ? <span
                                        class="hidden did"></span>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn actionBtn" data-dismiss="modal">
                                        <span id="footer_action_button" class='glyphicon'> </span>
                                    </button>
                                    <button type="button" class="btn btn-warning" data-dismiss="modal">
                                        <span class='glyphicon glyphicon-remove'></span> Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <script>
              $(document).ready(function() {
                $('#table').DataTable();
            } );
              </script>
            
                <script>
                
            //     $(document).on('click', '.edit-modal', function() {
            //         $('#footer_action_button').text(" Upcreated_at");
            //         $('#footer_action_button').addClass('glyphicon-check');
            //         $('#footer_action_button').removeClass('glyphicon-trash');
            //         $('.actionBtn').addClass('btn-success');
            //         $('.actionBtn').removeClass('btn-danger');
            //         $('.actionBtn').removeClass('delete');
            //         $('.actionBtn').addClass('edit');
            //         $('.modal-title').text('Edit');
            //         $('.deleteContent').hide();
            //         $('.form-horizontal').show();
            //         var stuff = $(this).data('info').split(',');
            //         fillmodalData(stuff)
            //         $('#myModal').modal('show');
            //     });
            //     $(document).on('click', '.delete-modal', function() {
            //         $('#footer_action_button').text(" Delete");
            //         $('#footer_action_button').removeClass('glyphicon-check');
            //         $('#footer_action_button').addClass('glyphicon-trash');
            //         $('.actionBtn').removeClass('btn-success');
            //         $('.actionBtn').addClass('btn-danger');
            //         $('.actionBtn').removeClass('edit');
            //         $('.actionBtn').addClass('delete');
            //         $('.modal-title').text('Delete');
            //         $('.deleteContent').show();
            //         $('.form-horizontal').hide();
            //         var stuff = $(this).data('info').split(',');
            //         $('.did').text(stuff[0]);
            //         $('.dname').html(stuff[1] +" "+stuff[2]);
            //         $('#myModal').modal('show');
            //     });
            
            // function fillmodalData(details){
            //     $('#fid').val(details[0]);
            //     $('#store_owner').val(details[1]);
            //     $('#product').val(details[2]);
            //     $('#quantity_available').val(details[3]);
            //     $('#sold').val(details[4]);
            //     $('#created_at').val(details[5]);
            //     $('#clear_status').val(details[6]);
            // }
            
            //     $('.modal-footer').on('click', '.edit', function() {
            //         $.ajax({
            //             type: 'post',
            //             url: '/editItem',
            //             data: {
            //                 '_token': $('input[name=_token]').val(),
            //                 'id': $("#fid").val(),
            //                 'store_owner': $('#store_owner').val(),
            //                 'product': $('#product').val(),
            //                 'quantity_available': $('#quantity_available').val(),
            //                 'sold': $('#sold').val(),
            //                 'created_at': $('#created_at').val(),
            //                 'clear_status': $('#clear_status').val()
            //             },
            //             success: function(data) {
            //                 if (data.errors){
            //                     $('#myModal').modal('show');
            //                     if(data.errors.store_owner) {
            //                         $('.store_owner_error').removeClass('hidden');
            //                         $('.store_owner_error').text("First name can't be empty !");
            //                     }
            //                     if(data.errors.product) {
            //                         $('.product_error').removeClass('hidden');
            //                         $('.product_error').text("Product can't be empty !");
            //                     }
            //                     if(data.errors.quantity_available) {
            //                         $('.quantity_available_error').removeClass('hidden');
            //                         $('.quantity_available_error').text("quantity_available must be a valid one !");
            //                     }
            //                     if(data.errors.created_at) {
            //                         $('.created_at_error').removeClass('hidden');
            //                         $('.created_at_error').text("created_at must be a valid one !");
            //                     }
            //                     if(data.errors.clear_status) {
            //                         $('.clear_status_error').removeClass('hidden');
            //                         $('.clear_status_error').text("clear_status must be a valid format ! (ex: #.##)");
            //                     }
            //                 }
            //                  else {
                                 
            //                      $('.error').addClass('hidden');
            //                 $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'><td>" +
            //                         data.id + "</td><td>" + data.store_owner +
            //                         "</td><td>" + data.product + "</td><td>" + data.quantity_available + "</td><td>" +
            //                          data.sold + "</td><td>" + data.created_at + "</td><td>" + data.clear_status +
            //                           "</td><td><button class='edit-modal btn btn-info' data-info='" + data.id+","+data.store_owner+","+data.product+","+data.quantity_available+","+data.sold+","+data.created_at+","+data.clear_status+"'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-info='" + data.id+","+data.store_owner+","+data.product+","+data.quantity_available+","+data.sold+","+data.created_at+","+data.clear_status+"' ><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
            
            //                  }}
            //         });
            //     });
            //     $('.modal-footer').on('click', '.delete', function() {
            //         $.ajax({
            //             type: 'post',
            //             url: '/deleteItem',
            //             data: {
            //                 '_token': $('input[name=_token]').val(),
            //                 'id': $('.did').text()
            //             },
            //             success: function(data) {
            //                 $('.item' + $('.did').text()).remove();
            //             }
            //         });
            //     });
            </script>
            
            </body>
            </html>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </body>
    
</html>