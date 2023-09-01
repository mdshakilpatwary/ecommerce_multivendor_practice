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
                                        <th rowspan="1" colspan="1">Category Name</th>
                                        <th rowspan="1" colspan="1">SubCategory Name</th>
                                        <th rowspan="1" colspan="1">Slug</th>
                                        <th rowspan="1" colspan="1">Image</th>
                                        <th rowspan="1" colspan="1">Status</th>
                                        <th rowspan="1" colspan="1">Action</th>
								</thead>
								<tbody>	
                               
                                @if(count($subcategories) > 0)
                                    @php $sl = 1; @endphp
                                       
                                    @foreach ($subcategories as $subcategory)

                                        <tr>
                                            <td>{{$sl}}</td>
                                            <td>{{$subcategory->cat->cat_name}}</td>
                                            <td>{{$subcategory->subcat_name}}</td>
                                            <td>{{$subcategory->subcat_slug}}</td> 
                                            <td><img width='100' height="100" src="{{asset('uploads/sub_category/'.$subcategory->subcat_image)}}" alt=""></td> 
                                            <td>
                                                <a href="{{route('subCategory.edit',$subcategory->id)}}" class=" btn bg-success">Edit</a>
                                                <a href="{{route('subCategory.delete',$subcategory->id)}}" class="btn bg-danger">Delete</a>
                                            </td>
                                        </tr>
                                        @php $sl++; @endphp
                                    @endforeach

                                  @else 
                                  <tr>
                                    <td colspan="7" class="text-center bg-warning">No data here</td>
                                  </tr>
                                  @endif

                            
                                </tbody>
								<tfoot>
									<tr>
                                        <th rowspan="1" colspan="1">#Sl</th>
                                        <th rowspan="1" colspan="1">Category Name</th>
                                        <th rowspan="1" colspan="1">Slug</th>
                                        <th rowspan="1" colspan="1">Image</th>
                                        <th rowspan="1" colspan="1">Status</th>
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
