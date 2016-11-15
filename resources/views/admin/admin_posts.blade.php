 @extends('admin.admin')
 @section('content')
 <h1 class="page-header">Dashboard</h1>
@if(Session::has('message'))
		<div class="alert alert-danger">
			<ul>
				 
					<li>{{Session::get('message')}}</li>
				 
			</ul>
		</div>
	@endif
          <h2 class="sub-header">Blog Posts </h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Posted By</th>
                  <th>Publish Date</th>
                  <th>Hits</th>
                </tr>
              </thead>
              <tbody>
                 
               @foreach($posts as $post ) 
                
                <tr>
				  <td>{{$post->id}}</td>
                  <td>{{$post->title}}</td>
                  <td>{{$post->author}}</td>
                  <td>{{$post->added_on}}</td>
                  <td>{{$post->hits}}</td>
                  <td><a href="/admin/<?php echo $post->id; ?>">EDIT</a></td>
                  <td>
					<form action="/admin/{{$post->id}}" method="post" >
						
						<input type="hidden" name="_method" value="delete" >
						<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
						<input type="submit" name="submit" value="Delete">
						
					</form>
				  </td> 
                   
                </tr>
			  @endforeach		
              </tbody>
            </table>
          </div>
@endsection('content')