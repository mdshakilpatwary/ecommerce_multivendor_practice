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
						<h5 class="mb-0 text-info">Add Sub-Category</h5>
					</div>
					<hr>
				<form action="{{route('subCategory.save')}}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="row mb-3">
						<label for="select_cat" class="col-sm-3 col-form-label">Select Category</label>
						<div class="col-sm-9">
							<select name="select_cat" id="select_cat" class="form-control">
								<option value="0">---Select Category---</option>
								@foreach($categories as $category)
								<option value="{{$category->id}}">{{$category->cat_name}}</option>
								@endforeach
							</select>
							@error('select_cat')
							<span class="text-danger">{{$message}}</span>
							@enderror
							
						</div>
					</div>
					<div class="row mb-3">
						<label for="scat_name" class="col-sm-3 col-form-label">Sub-Category name</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="scat_name" name="scat_name" placeholder="Enter Your Sub-Category Name" value="">
							@error('scat_name')
							<span class="text-danger">{{$message}}</span>
							@enderror
							
						</div>
					</div>
					<div class="row mb-3">
						<label for="scat_image" class="col-sm-3 col-form-label">Sub-Category Image</label>
						<div class="col-sm-9">
							<input type="file" class="form-control" id="cat_image"  name="scat_image" >
							@error('scat_image')
							<span class="text-danger">{{$message}}</span>
							@enderror
						</div>
					</div>
					
					<div class="row">
						<label class="col-sm-3 col-form-label"></label>
						<div class="col-sm-9">
							<button type="submit" name="add_scat" class="btn btn-info px-5">Add</button>
						</div>
					</div>
				</form>    
			</div>
		</div>
	</div>
        </div>
       </div>


@endsection
