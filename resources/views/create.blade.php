<!DOCTYPE html>
<html>
<head>
	<title>
		

	</title>
</head>
<body>



	<form method="POST" action="{{ route('adminstore') }}">
		
		@csrf

		<input type="text" name="coockname" placeholder=" coock   name ">
		
		<input type="text" name="category_id" placeholder="category_id">

		<input type="text"  name="img" placeholder="Image  URL">
	

		<textarea name="recipe" placeholder="recipe"></textarea>
		


		
		<button>Save</button>




	</form>








</body>
</html>