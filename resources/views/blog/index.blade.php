@extends('blog.master')
@section('content')
 
	<div class="about">
		<div class="container">
			<div class="about-main">
				<div class="col-md-8 about-left">
					<div class="about-one">
						<p>Latest Article</p>
						<h3>{{$posts[0]->title}}</h3>
					</div>
					<div class="about-two">
						<a href="single.html"><img src="images/c-1.jpg" alt="" /></a>
						<p>Posted by <a href="#">{{$posts[0]->author}}</a> on {{$posts[0]->added_on}} <a href="#">comments(2)</a></p>
						<p> {{$posts[0]->body}}</p>
						<div class="about-btn">
							<a href="/blog/<?php echo $posts[0]->id; ?>">Read More</a>
						</div>
						<ul>
							<li><p>Share : </p></li>
							<li><a href="#"><span class="fb"> </span></a></li>
							<li><a href="#"><span class="twit"> </span></a></li>
							<li><a href="#"><span class="pin"> </span></a></li>
							<li><a href="#"><span class="rss"> </span></a></li>
							<li><a href="#"><span class="drbl"> </span></a></li>
						</ul>
					</div>	
					<div class="about-tre">
						
							<div class="a-1">
							
								@foreach($posts as $post)
									<div class="col-md-6 abt-left">
										<a href="single.html"><img src="images/c-3.jpg" alt="" /></a>
										<h6> Arsenal Break</h6>
										
										<?php $new_title = substr($post->title , 0, 20); ?>
										<?php $new_title = $new_title." ..."; ?>
										
										<h3><a href="/blog/<?php echo $post->id; ?>">{{$new_title}}</a></h3>
										<?php $new_str = substr($post->body , 0, 50); ?>
										<?php $new_str = $new_str." ..."; ?>
										<p>{{$new_str}}</p>
										<label>{{$post->added_on}}</label>
									</div>
								@endforeach
								
								<div class="clearfix"></div>
							</div>
						
						 <!-- Pagination links -->
						 {!! $posts->links() !!}
					</div>	
				</div>
				<div class="col-md-4 about-right heading">
					<div class="abt-1">
						<h3>ABOUT US</h3>
						<div class="abt-one">
							<img src="images/c-2.jpg" alt="" />
							<p> Need to read up some random ramblings about Arsenal FC., look no further!</p>
							<div class="a-btn">
								<a href="{{url('/about-us')}}">Read More</a>
							</div>
						</div>
					</div>
					<div class="abt-2">
						<h3>Most Read</h3>
						@foreach($most_read as $post)
							<div class="might-grid">
								<div class="grid-might">
									<a href=" {{url('/blog/'.$post->id)}} "><img src="images/c-12.jpg" class="img-responsive" alt=""> </a>
								</div>
								<div class="might-top">
									<h4><a href="{{url('/blog/'.$post->id)}}"> {{$post->title}} </a></h4>
									<?php @$new_str = substr($post->body , 0, 50); ?>
									<?php @$new_str = $new_str." ..."; ?>
									<p> {{$new_str}} </p> 
								</div>
								<div class="clearfix"></div>
							</div>
						@endforeach
							 							
					</div>
					<div class="abt-2">
						<h3>ARCHIVES</h3>
						<ul>
							<li><a href="single.html">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a></li>
							<li><a href="single.html">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</a></li>
							<li><a href="single.html">When an unknown printer took a galley of type and scrambled it to make a type specimen book. </a> </li>
							<li><a href="single.html">It has survived not only five centuries, but also the leap into electronic typesetting</a> </li>
							<li><a href="single.html">Remaining essentially unchanged. It was popularised in the 1960s with the release of </a> </li>
							<li><a href="single.html">Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing </a> </li>
							<li><a href="single.html">Software like Aldus PageMaker including versionsof Lorem Ipsum.</a> </li>
						</ul>	
					</div>
					<div class="abt-2">
						<h3>NEWS LETTER</h3>
						<div class="news">
							<form>
								<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" />
								<input type="submit" value="Subscribe">
							</form>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>			
			</div>		
		</div>
	</div>
@endsection('content')