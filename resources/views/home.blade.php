@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5" >
            <img src="https://scontent.fkun1-1.fna.fbcdn.net/v/t39.30808-6/250929173_3179576238942422_6492034145953428513_n.png?_nc_cat=108&ccb=1-6&_nc_sid=09cbfe&_nc_ohc=ofIHgC1JHP4AX_U7h3v&_nc_ht=scontent.fkun1-1.fna&oh=00_AT8bjtOb-x7DgWMo8uLRkvJZ0GGShpFf6O4pWwCZIrCY7g&oe=62804259" class="rounded-circle" style="height: 150px;">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{$user->username}}</h1></div>
            <div class="d-flex">
                <div class="pe-5"><strong>153</strong> posts</div>
                <div class="pe-5"><strong>231k</strong> followers</div>
                <div class="pe-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-3 fw-bold">freeCodeCamp.org</div>
            <div>
                We're a global community of millions of people learning to code together.
                LearnToCodeRPG: https://www.freecodecamp.org/news/learn-to-code-rpg/
            </div>
            <div><a href="https://www.freecodecamp.org/">https://www.freecodecamp.org/</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="{{ asset("/images/1.jpg")}}" class="w-100">
        </div>
        <div class="col-4">
            <img src="{{ asset("/images/2.jpg")}}" class="w-100">
        </div>
        <div class="col-4">
            <img src="{{ asset("/images/3.jpg")}}" class="w-100">
        </div>
    </div>
</div>
@endsection
