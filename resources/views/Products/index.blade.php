<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table,tr,td,th{
			border:solid 2px black;
			border-collapse: collapse;
			padding: 9px; 

		}
	</style>
</head>
<body>

    <table>
    	
    	<tr>
    		
    		<th>#</th>
    		<th>name</th>
    		<th>recipe</th>
    		<th>category_id</th>
            <th>action</th>

    	</tr>
    	@foreach ($data as $element)

        <tr>
            <td>{{ ++$loop->index}}</td>
            <td>{{ ++$element->coock_name}}</td>
            <td>{{ ++$element->recipt}}</td>
            <td>{{ ++$element->category_id}}</td>


        </tr>
            
        
    				<a href="{{ route('adminshow',["id"=>$element->id])}}">დათვარიელება</a>
    				
    				<form method="POST" action="{{ route('admindelete') }}">
    					@csrf
    					<input type="hidden" name="id" value="{{$element->id}}">
    					<button>წაშლა</button>
    				</form>
    				
    				ჩასწორება
    			</td>
    		</tr>
    	@endforeach
    </table>




</body>
</html>