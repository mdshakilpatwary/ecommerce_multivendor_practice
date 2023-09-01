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
                                        <th rowspan="1" colspan="1">Slug</th>
                                        <th rowspan="1" colspan="1">Image</th>
                                        <th rowspan="1" colspan="1">Status</th>
                                        <th rowspan="1" colspan="1">Action</th>
								</thead>
								<tbody>	
                               
                                @if(count($categories) > 0)
                                    @php $sl = 1; @endphp
                                       
                                    @foreach ($categories as $category)

                                        <tr>
                                            <td>{{$sl}}</td>
                                            <td>{{$category->cat_name}}</td>
                                            <td>{{$category->cat_slug}}</td> 
                                            <td><img width='100' height="100" src="{{asset('uploads/category/'.$category->cat_image)}}" alt=""></td> 
                                            <td>
                                                @if($category->status == 1 )
                                                    Active
                                                
                                                @else
                                                     Inactive
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{route('category.edit',$category->id)}}" class=" btn bg-success">Edit</a>
                                                <a href="{{route('category.delete',$category->id)}}" class="btn bg-danger">Delete</a>
                                            </td>
                                        </tr>
                                        @php $sl++; @endphp
                                    @endforeach

                                  @else 
                                  <tr>
                                    <td colspan="6" class="text-center bg-warning">No data here</td>
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
