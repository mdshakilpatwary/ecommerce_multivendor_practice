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
										<h5 class="mb-0 text-info">Category edit</h5>
									</div>
									<hr>
                                <form action="{{route('subCategory.update', $subcategory->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
									<div class="row mb-3">
										<label for="cat_name" class="col-sm-3 col-form-label">Category name</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="cat_name" name="scat_name" placeholder="Enter Your Category Name" value="{{$subcategory->subcat_name}}">
											@error('cat_name')
											<span class="text-danger">{{$message}}</span>
											@enderror
											
										</div>
									</div>
									<div class="row mb-3">
										<label for="cat_image" class="col-sm-3 col-form-label">subCategory Image</label>
										<div class="col-sm-9">
											<input type="file" class="form-control" id="scat_image"  name="scat_image" value="{{$subcategory->subcat_image}}">
											@error('scat_image')
											<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-sm-9 mt-3">
											<img src="{{asset('uploads/sub_category/'.$subcategory->subcat_image)}}" alt="" >
										</div>
									</div>
                                   
									<div class="row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<button type="submit" name="update_cat" class="btn btn-info px-5">Update</button>
										</div>
									</div>
                                </form>    
							</div>
						</div>
					</div>
        </div>
       </div>



@endsection

