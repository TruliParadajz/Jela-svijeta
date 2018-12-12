<!doctype html>
<html>
    <head>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            @foreach($meals as $meal)
            <p>
                <br>"data":&ensp;[
                <br>&emsp;{
                <br>&emsp;&emsp;"id": {{$meal->id}},
                <br>&emsp;&emsp;"title": {{$meal->title}},
                <br>&emsp;&emsp;"description": {{$meal->description}},
                <br>&emsp;&emsp;"status": {{$meal->status}},
                    <!-- CATEGORY-->
                <br>&emsp;&emsp;"category":&ensp;{
                @foreach($categories as $category)
                    @if($category->id == $meal->category_id)
                    <br>&emsp;&emsp;&emsp;&emsp;"id": {{$category->id}}
                    <br>&emsp;&emsp;&emsp;&emsp;"title": {{$category->title}}
                    <br>&emsp;&emsp;&emsp;&emsp;"slug": {{$category->slug}}
                    @endif
                @endforeach
                <br>&emsp;&emsp;},
                    <!-- TAGS-->
                <br>&emsp;&emsp;"tags":&ensp;[
                    @foreach($tags as $tag)
                        @foreach($mealsTags as $pivot)
                            @if(($meal->id == $pivot->meal_id) && ($tag->id == $pivot->tag_id))
                                <br>&emsp;&emsp;&emsp;&emsp;"id": {{$tag->id}}
                                <br>&emsp;&emsp;&emsp;&emsp;"title": {{$tag->title}}
                                <br>&emsp;&emsp;&emsp;&emsp;"slug": {{$tag->slug}}
                                <br>&emsp;&emsp;},
                            @endif
                        @endforeach   
                    @endforeach
                <br>&emsp;&emsp;],
                    <!-- INGREDIENTS-->
                <br>&emsp;&emsp;"ingredients":&ensp;[
                    @foreach($ingredients as $ingredient)
                        @foreach($ingredientsMeals as $pivot)
                            @if(($meal->id == $pivot->meal_id) && ($ingredient->id == $pivot->ingredient_id))
                                <br>&emsp;&emsp;&emsp;&emsp;"id": {{$ingredient->id}}
                                <br>&emsp;&emsp;&emsp;&emsp;"title": {{$ingredient->title}}
                                <br>&emsp;&emsp;&emsp;&emsp;"slug": {{$ingredient->slug}}
                                <br>&emsp;&emsp;},
                            @endif
                        @endforeach   
                    @endforeach
                <br>&emsp;&emsp;],  
                
                <br>&emsp;}
                <br>&emsp;&emsp;&emsp;&emsp;]
            </p>
            @endforeach
        </div>
    </body>
</html>
