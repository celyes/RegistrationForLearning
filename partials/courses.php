<?php 
	$filename = basename(__FILE__);
	$requestFilename = basename($_SERVER['REQUEST_URI']);
	if($filename == $requestFilename){
		header('Location: ../index.php');
	}
?>
<div class="row">
	<div class="col text-left">
		<h5>Latest</h5>
		<p class="text-muted text-intro">Most recently added courses.</p>
	</div>
	<div class="col text-right">
		<a class="btn btn-outline-success btn-sm btn-intro">View all</a>
	</div>
</div>
<ul class="row course-list">
	
<?php
$data = [
	[
		'image' => 'assets/img/course1.png',
		'title' => 'Web Development and Design',
		'level' => 'Beginner',
		'price' => '$ 49.00'
	],
	[
		'image' => 'assets/img/course2.jpg',
		'title' => 'AI &amp; Machine Learning',
		'level' => 'Intermediate',
		'price' => '$ 69.00'
	],
	[
		'image' => 'assets/img/course5.jpg',
		'title' => 'JavaScript fundamentals',
		'level' => 'Beginner',
		'price' => '$ 29.00'
	],
	[
		'image' => 'assets/img/course4.png',
		'title' => 'GraphQL for Absolute beginners',
		'level' => 'Beginner',
		'price' => '$ 49.00'
	],
	[
		'image' => 'assets/img/course6.jpg',
		'title' => 'Object Oriented PHP',
		'level' => 'Intermediate',
		'price' => '$ 49.00'
	]

];
foreach($data as $index => $element){
	
?>
<li class="col-6 my-2">
	<div class="card course-card bg-light text-black">
	  <img src="<?php echo $element['image']?>" class="card-img" alt="...">
	  <div class="card-img-overlay">
	  	<button type="button" class="btn btn-primary btn-sm course-btn">See Course...</button>
	  </div>
	</div>
	<div class="caption pt-3">
		<div class="row">
			<div class="col-9 text-left">
				<a href="#"><?php echo $element['title']; ?></a>
				<p class="text-muted"><?php echo $element['level']; ?></p>
			</div>
			<div class="col-3 text-right">
				<p><?php echo $element['price']; ?></p>
			</div>
		</div>	
	</div>
</li>
<?php
	echo $index == 1 ? '<div class="col-12 mt-1 mb-5"><hr></div>' :'' ;
}
?>
</ul>