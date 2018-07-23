<option value="">Select Sub Category</option>
@foreach($subcats as $i => $subcat)    
<option value="{{$subcat->id}}">{{$subcat->category_name}}</option> 
@endforeach