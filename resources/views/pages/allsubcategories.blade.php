<style>
.subcate_class{width:30%;}
</style>
<ul>
@foreach($subcats as $i => $subcat)    
<li class="subcate_class">{{$subcat->category_name}}</li> 
@endforeach
</ul>