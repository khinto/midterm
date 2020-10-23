<!DOCTYPE html>
<html>
<head>
	<title>
		

	</title>
</head>
<body>



	<form method="POST" action="{{ route('adminstore') }}">
		
		@csrf

		
		<input type="text" name="category_name" placeholder="category_name">
		

		

		
		


		
		<button>Save</button>




	</form>








</body>
</html>