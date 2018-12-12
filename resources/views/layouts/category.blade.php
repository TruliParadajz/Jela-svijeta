
<br>&emsp;&emsp;"category":&ensp;{
    @foreach($categories as $category)
        @if($category->id == $meal->category_id)
        <br>&emsp;&emsp;&emsp;&emsp;"id": {{$category->id}}
        <br>&emsp;&emsp;&emsp;&emsp;"title": {{$category->title}}
        <br>&emsp;&emsp;&emsp;&emsp;"slug": {{$category->slug}}
        @endif
    @endforeach
    <br>&emsp;&emsp;},