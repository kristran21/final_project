@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add products
                        </header>
                        <?php 
                        $message = Session::get('message');
                        if($message){
                        echo '<span class="text-alert">'.$message.'</span>';
                        Session::put('message',null);
                        }
                        ?>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-product')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Name</label>
                                    <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Product Name" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Price</label>
                                    <input type="text" name="product_price" class="form-control" id="exampleInputEmail1" placeholder="Product Price" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Product Description</label>
                                    <textarea style="resize: none " rows="4" class="form-control" name="product_desc" id="exampleInputPassword1" placeholder="Product Description" required></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Product Content</label>
                                    <textarea style="resize: none " rows="4" class="form-control" name="product_content" id="exampleInputPassword1" placeholder="Product Content" required></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Image</label>
                                    <input type="file" name="product_image" class="form-control" id="exampleInputEmail1" required >
                                </div>

                                <div class="form-group">
                                <label for="exampleInputPassword1">Category Product</label>
                                       <select name="product_cate" class="form-control input-sm m-bot15" class="valid" required>
                                           @foreach($cate_product as $key => $cate)
                                            <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                          @endforeach
                                       </select>
                                </div> 

                                <div class="form-group">
                                <label for="exampleInputPassword1">Product Type</label>
                                       <select name="product_brand" class="form-control input-sm m-bot15" class="valid" required>
                                          @foreach($brand_product as $key => $brand)
                                            <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                          @endforeach
                                       </select>
                                </div> 
                                <div class="form-group">
                                <label for="exampleInputPassword1">Display</label>
                                       <select name="product_status" class="form-control input-sm m-bot15" class="valid" >
                                            <option value="0">Hide</option>
                                            <option value="1">Show</option>
                                       </select>
                                </div>                              
                                <button type="submit" name="add_product" class="btn btn-info">Add Product</button>
                            </form>
                            </div>
                        </div>
                    </section>

            </div>
@endsection     
