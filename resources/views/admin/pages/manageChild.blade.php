
@foreach($childs as $child)

	<option value="{{$child->id}}" @if(isset($child->id) && $parent_id==$child->id) selected @endif>
@if($a==1)
	-
@endif
@if($a==2)
	--
@endif

	   {{ $child->category_name }} 
</option>
	@if(count($child->childs))
            @include('admin.pages.manageChild',['childs' => $child->childs,'a'=>2])
        @endif

	

@endforeach