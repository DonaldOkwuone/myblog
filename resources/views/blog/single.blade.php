@extends('blog.master')
@section('content')

<!--start-single-->
	<div class="single">
		<div class="container">
				<div class="single-top">
						<a href='{{ url('/') }}'><img class="img-responsive" src='{{URL::asset('images/single-1.jpg')}}' alt=" "></a>
					<div class=" single-grid">
						<h4>{{$blog->title}}</h4>				
							<ul class="blog-ic">
								<li><a href="#"><span> <i  class="glyphicon glyphicon-user"> </i>Admin</span> </a> </li>
		  						 <li><span><i class="glyphicon glyphicon-time"> </i>{{$blog->added_on}}</span></li>		  						 	
		  						 <li><span><i class="glyphicon glyphicon-eye-open"> </i>Hits:{{$blog->hits}}</span></li>
		  					</ul>		  						
						<p> {{$blog->body}}</p>
					</div>
					<!--can enable comment system anytime--]>
					<div class="comments heading">
						<h3>Comments</h3>
						<div class="media">
					      	<div class="media-body">
						        <h4 class="media-heading">	Richard Spark</h4>
						        <p>On the other hand, we denounce with 
									righteous indignation and dislike men who are so 
									beguiled and demoralized by the charms of pleasure of the moment,
									so blinded by desire, that they cannot foresee the pain and trouble 
									that are bound to ensue; and equal blame belongs .  </p>
					      	</div>
					      <div class="media-right">
					        <a href="#">
								<img src="{{URL::asset('images/si.png')}}" alt=""> </a>
					      </div>
					 </div>
					  <div class="media">
					      <div class="media-left">
					        <a href="#">
					        	<img src="{{URL::asset('images/si.png')}}" alt="">
					        </a>
					      </div>
					      <div class="media-body">
					        <h4 class="media-heading">Joseph Goh</h4>
					        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs .  </p>
					      </div>
					    </div>
    				</div>
    				<div class="comment-bottom heading">
    					<h3>Leave a Comment</h3>
    					<form>	
						<input type="text" value="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Name';}">
						<input type="text" value="Email" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Email';}">
						<input type="text" value="Subject" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Subject';}">
						<textarea cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
							<input type="submit" value="Send">
					</form>
    				</div>
					
					<!--can enable comment system anytime-->
				</div>	
			</div>					
	</div>
	<!--end-single-->
@endsection('content')