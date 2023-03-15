@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Manage Order
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
      <div class="col-sm-3">
        {{-- <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div> --}}
      </div>
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
              {{-- <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label> --}}
            </th>
            <th>Order ID</th>
            <th>Name Customer</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Note</th>
            <th>Bill</th>
            <th>Method</th>
            <th>Day</th>
            <th style="text-align: center">Detail</th>
            <th style="width:30px;"></th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        @foreach($all_order as $key =>$order)
          <tr>
            <td></td>
            <td>{{$order->orderNumber}}</td>
            <td>{{$order->name}}</td>
            <td>{{$order->phone}}</td>
            <td>{{$order->address}}</td>
            <td>{{$order->note}}</td>
            <td>{{$order->bill}}</td> 
            <td>{{$order->method}}</td>
            <td>{{$order->created_at}}</td>
            <td>
              @foreach($all_order_detail as $k => $detail)
                @if ($order->orderNumber == $k)
                  @foreach($detail as $d)
                    <h5 style="text-align: center ; margin-top: 10px">Name:    {{ $d['name'] }} <br/> </h5>
                    <h5 style="text-align: center ; margin-top: 10px">Quantity:  {{ $d['quantity'] }}<br/> <br/></h5>
                    
                  @endforeach
                @endif
              @endforeach  
            </td>  
            <td><a onclick="return confirm('Are you sure you want to delete this order ???')" href="{{URL::to('/delete-order/'.$order->id)}}" class="active styling-edit" ui-toggle-class="">
              <i class="fa fa-times text-danger text"></i>
            </a></td>
            

            {{-- <td>

              <a href="{{URL::to('/view-order/'.$order->order_id)}}" class="active styling-edit" ui-toggle-class="">
                <i style="margin-right: 5px" class="fa fa-pencil-square-o text-success text-active"></i>
              </a>

              <a onclick="return confirm('Do you want to delete it ??')" href="{{URL::to('/delete-order/'.$order->order_id)}}" class="active styling-edit" ui-toggle-class="">
                 <i class="fa fa-times text-danger text"></i>
              </a>

            </td> --}}
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
@endsection