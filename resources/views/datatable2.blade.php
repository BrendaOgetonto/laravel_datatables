<html lang="en">
<head>
    <title>Laravel DataTables Tutorial Example</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>
      <body>
          {{-- {{$data}} --}}
         <div class="container">
               <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label><strong>Store Owner :</strong></label>
                        <select id='status' class="form-control" style="width: 200px">
                            {{-- @foreach($data ?? '' as $item)
                            <option value={{$item->store_owner}}>{$item->store_owner}}</option>
                            @endforeach --}}
                            <option value="">--Select Store Owner--</option>
                            {{-- <option value="1">Active</option>
                            <option value="0">Deactive</option> --}}
                        </select>
                    </div>
                </div>
            </div>
            <table class="table table-bordered" id="table">
               <thead>
                  <tr>
                     <th>Id</th>
                     <th>Store Owner</th>
                     <th>Product</th>
                     <th>Quantity Available</th>
                     <th>Sold</th>
                     <th>Date</th>
                     <th>Clear Status</th>
                     <th>Action</th>
                  </tr>
               </thead>
            </table>
         </div>
       <script>
         $(function() {
               $('#table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('stock_mobile.index') }}",
               columns: [
                        { data: 'id', name: 'id' },
                        { data: 'store_owner', name: 'store_owner' },
                        { data: 'product', name: 'product' },
                        { data: 'quantity_available', name: 'quantity_available' },
                        { data: 'sold', name: 'sold' },
                        { data: 'created_at', name: 'created_at' },
                        { data: 'clear_status', name: 'clear_status' },
                        {data: 'action', name: 'action', orderable: false, searchable: false},
                     ]
            });
         });
         </script>
   </body>
</html>