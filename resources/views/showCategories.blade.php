<!doctype html>
<html>
    <head>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            @foreach($categories as $category)
            @if($category->id == $categoryNum)
            <br>"data":&ensp;[
            @foreach($meals as $meal)
                @if($meal->category_id == $category->id)                        
                        <br>&emsp;{
                            <br>&emsp;&emsp;"id": {{$meal->id}},
                            <br>&emsp;&emsp;"title": {{$meal->title}},
                            <br>&emsp;&emsp;"description": {{$meal->description}},
                            <br>&emsp;&emsp;"status": {{$meal->status}},
                            <br>&emsp;&emsp;"category":&ensp;{
                                <br>&emsp;&emsp;&emsp;&emsp;"id": {{$category->id}}
                                <br>&emsp;&emsp;&emsp;&emsp;"title": {{$category->title}}
                                <br>&emsp;&emsp;&emsp;&emsp;"slug": {{$category->slug}}
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
                @endif
                @endforeach
                <br>&emsp;&emsp;&emsp;&emsp;]
                @endif            
            @endforeach
        </div>        
    </body>
</html>