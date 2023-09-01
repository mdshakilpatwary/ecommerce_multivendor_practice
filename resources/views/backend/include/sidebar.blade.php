<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{ asset('backend')}}/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Dev.Shakil</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="javascript:;" class="">
						<div class="parent-icon"><i class='bx bx-home-circle'></i>
						</div>
						<div  class="menu-title" id="dashboard">Dashboard</div>
					</a>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Details</div>
					</a>
					<ul>
						<li> <a href="{{route('about')}}"><i class="bx bx-right-arrow-alt"></i>About</a>
						</li>
						<li> <a href="{{route('service')}}"><i class="bx bx-right-arrow-alt"></i>Service</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="fa fa-box"></i>
						</div>
						<div class="menu-title">Product </div>
					</a>
					<ul>
						<li> <a href="{{route('product.add')}}"><i class="bx bx-right-arrow-alt"></i>Add Product</a>
						</li>
						</li>
						<li> <a href="{{route('product.manage')}}"><i class="bx bx-right-arrow-alt"></i>manage Product</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="fa-solid fa-industry"></i>
						</div>
						<div class="menu-title">Category</div>
					</a>
					<ul>
						<li> <a href="{{route('category.add')}}"><i class="bx bx-right-arrow-alt"></i>Add Category</a>
						</li>
						</li>
						<li> <a href="{{route('category.manage')}}"><i class="bx bx-right-arrow-alt"></i>Manage Category</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="fa-solid fa-industry"></i>
						</div>
						<div class="menu-title">Sub-Category</div>
					</a>
					<ul>
						<li> <a href="{{url('/subcategory/add')}}"><i class="bx bx-right-arrow-alt"></i>Add Sub-Category</a>
						</li>
						</li>
						<li> <a href="{{url('/subcategory/manage')}}"><i class="bx bx-right-arrow-alt"></i>Manage Sub-Category</a>
						</li>
						
					</ul>
				</li>
				
			</ul>
			<!--end navigation-->
		</div>