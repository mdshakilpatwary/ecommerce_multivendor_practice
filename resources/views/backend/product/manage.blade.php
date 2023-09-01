@extends('backend.include.master')
<!-- body pcontent part  -->
@section('mainbody')

<div class="row">
    <div class="col-md-10 offset-md-1">
    <div class="card">
		<div class="card-body">
			<div class="table-responsive">
				<div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap5">
                                
                     <div class="row">
                            <div class="col-sm-12">
                            <table id="mytable" class="table table-striped table-bordered dataTable" role="grid" aria-describedby="example2_info">
                            <thead>
                                        <th rowspan="1" colspan="1">#Sl</th>
                                        <th rowspan="1" colspan="1">Product Code</th>
                                        <th rowspan="1" colspan="1">Product Name</th>
                                        <th rowspan="1" colspan="1">Product Desc</th>
                                        <th rowspan="1" colspan="1">Cost Price</th>
                                        <th rowspan="1" colspan="1">Sale Price</th>
                                        <th rowspan="1" colspan="1">Quantity</th>
                                        <th rowspan="1" colspan="1">Action</th>
								</thead>
								<tbody>	
                                @if(count($products) > 0)
                                @php $sl = 1; @endphp
                                 @foreach($products as $product)	

                                    <tr role="row" >
                                        <td>{{$sl}}</td>
                                        <td>{{$product->product_code}}</td>
                                        <td>{{$product->product_name}}</td>
                                        <td>{{$product->product_desc}}</td>
                                        <td>{{$product->cost_price}}</td>
                                        <td>{{$product->sale_price}}</td>
                                        <td>{{$product->qnt}}</td>
                                        <td>
                                            <a href="{{route('product.edit', $product->id)}}" class=" btn bg-success">Edit</a>
                                            <a href="{{route('product.delete', $product->id)}}" class="btn bg-danger">Delete</a>
                                        </td>
									</tr>
                                    @php $sl++; @endphp
                                    @endforeach
                                    @else 
                                    <tr>
                                        <td colspan="8" class="bg-warning text-center">No data here</td>
                                    </tr>
                                    @endif
                                </tbody>
								<tfoot>
									<tr>
                                        <th rowspan="1" colspan="1">#sl</th>
                                        <th rowspan="1" colspan="1">Product Code</th>
                                        <th rowspan="1" colspan="1">Product Name</th>
                                        <th rowspan="1" colspan="1">Product Desc</th>
                                        <th rowspan="1" colspan="1">Cost Price</th>
                                        <th rowspan="1" colspan="1">Sale Price</th>
                                        <th rowspan="1" colspan="1">Quantity</th>
                                        <th rowspan="1" colspan="1">Action</th>
                                    </tr>
								</tfoot>
							</table>
                        </div>
                    </div>
                 </div>
       
			</div>
		</div>
	</div>
    </div>
</div>


@endsection
