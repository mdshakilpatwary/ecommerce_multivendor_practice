@extends('backend.include.master')
<!-- body pcontent part  -->
@section('mainbody')


       <div class="row">
        <div class="col-md-6 offset-md-3">
        <div class="card border-top border-0 border-4 border-info">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<div><i class="bx bxs-user me-1 font-22 text-info"></i>
										</div>
										<h5 class="mb-0 text-info">Add Product</h5>
									</div>
									<hr>
                                <form action="{{route('product.save')}}" method="POST">
                                    @csrf
									<div class="row mb-3">
										<label for="productCode" class="col-sm-3 col-form-label">Product Code</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="productCode" name="product_code" placeholder="Enter Your Product Code" value="">
											@error('product_code')
											<span class="text-danger">{{$message}}</span>
											@enderror
											
										</div>
									</div>
									<div class="row mb-3">
										<label for="productName" class="col-sm-3 col-form-label">Product Name</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="productName"  name="product_name" placeholder="Enter Your Product Name">
											@error('product_name')
											<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
									</div>
                                    <div class="row mb-3">
										<label for="productDesc" class="col-sm-3 col-form-label">Product Description</label>
										<div class="col-sm-9">
											<textarea class="form-control" id="productDesc" rows="3" name="product_desc" placeholder="Enter Your product desc"></textarea>
										</div>
									</div>
									<div class="row mb-3">
										<label for="costPrice" class="col-sm-3 col-form-label">Cost price</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="costPrice" name="cost_price" placeholder="Enter your cost price">
											@error('cost_price')
											<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
									</div>
									<div class="row mb-3">
										<label for="sale_price" class="col-sm-3 col-form-label">Sale Price</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="sale_price" name="sale_price" placeholder="Enter your sels price">
											@error('sale_price')
											<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
									</div>
								
									
                                    <div class="row mb-3">
										<label for="qnt" class="col-sm-3 col-form-label">Quantity</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="qnt" name="qnt" placeholder="Enter your qnt">
											@error('qnt')
											<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
									</div>
									<div class="row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<button type="submit" name="addProduct" class="btn btn-info px-5">Add</button>
										</div>
									</div>
                                </form>    
							</div>
						</div>
					</div>
        </div>
       </div>


@endsection
