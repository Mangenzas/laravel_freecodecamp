@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5" >
            <img src="https://scontent.fkun1-1.fna.fbcdn.net/v/t39.30808-6/250929173_3179576238942422_6492034145953428513_n.png?_nc_cat=108&ccb=1-6&_nc_sid=09cbfe&_nc_ohc=ofIHgC1JHP4AX_U7h3v&_nc_ht=scontent.fkun1-1.fna&oh=00_AT8bjtOb-x7DgWMo8uLRkvJZ0GGShpFf6O4pWwCZIrCY7g&oe=62804259" class="rounded-circle" style="height: 150px;">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="/p/create">Add new post</a>
            </div>
            <div class="d-flex">
                <div class="pe-5"><strong>{{ $user->posts->count()}}</strong> posts</div>
                <div class="pe-5"><strong>231k</strong> followers</div>
                <div class="pe-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-3 fw-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <img src="/storage/{{$post -> image}}" alt="">
            </div>

        @endforeach
    </div>
</div>
@endsection
