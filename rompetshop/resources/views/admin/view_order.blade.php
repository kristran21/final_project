@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      User Information
    </div>
    
      
    <div class="table-responsive">
    <?php 
         $message = Session::get('message');
          if($message){
              echo '<span class="text-alert">'.$message.'</span>';
             Session::put('message',null);
              }
    ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Name Account Log</th>
            <th>Phone Number</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        
          <tr>
            <td>{{$order_by_id->customer_name}}</td>
            <td>{{$order_by_id->customer_phone}}</td>
          </tr>
          
        </tbody>
      </table>
    </div>
  </div>
</div>
 <br><br>

 <div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
        Customer Information
      </div>
      
        
      <div class="table-responsive">
      <?php 
           $message = Session::get('message');
            if($message){
                echo '<span class="text-alert">'.$message.'</span>';
               Session::put('message',null);
                }
      ?>
        <table class="table table-striped b-t b-light">
          <thead>
            <tr>
              <th>Name Receiver</th>
              <th>Address</th>
              <th>Phone Number</th>
              <th style="width:30px;"></th>
            </tr>
          </thead>
          <tbody>
          
            <tr>
              <td>{{$order_by_id->shipping_name}}</td>
              <td>{{$order_by_id->shipping_address}}</td>
              <td>{{$order_by_id->shipping_phone}}</td>
            </tr>
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
   <br><br>

  <div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
        Detail Order
      </div>
      <div class="row w3-res-tb">
        {{-- <div class="col-sm-5 m-b-xs">
          <select class="input-sm form-control w-sm inline v-middle">
            <option value="0">Bulk action</option>
            <option value="1">Delete selected</option>
            <option value="2">Bulk edit</option>
            <option value="3">Export</option>
          </select>
          <button class="btn btn-sm btn-default">Apply</button>                
        </div> --}}
        <div class="col-sm-4">
        </div>
        {{-- <div class="col-sm-3">
          <div class="input-group">
            <input type="text" class="input-sm form-control" placeholder="Search">
            <span class="input-group-btn">
              <button class="btn btn-sm btn-default" type="button">Search</button>
            </span>
          </div>
        </div> --}}
      </div>
      <div class="table-responsive">
      <?php 
           $message = Session::get('message');
            if($message){
                echo '<span class="text-alert">'.$message.'</span>';
               Session::put('message',null);
                }
      ?>
        <table class="table table-striped b-t b-light">
          <thead>
            <tr>
              <th style="width:20px;">
                <label class="i-checks m-b-none">
                  
                </label>
              </th>
              <th>Name product</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Total</th>
              <th style="width:30px;"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
              <td>{{$order_by_id->product_name}}</td>
              <td>{{$order_by_id->product_sales_quantity}}</td>
              <td>{{$order_by_id->product_price}}</td>
              <td>{{$order_by_id->order_total}}</td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>
  <br><br>
@endsection