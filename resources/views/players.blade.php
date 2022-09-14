<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Players - Laravel UEFA</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>

<body>

<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('player.index')}}" title='Programming Blog'>Player</a>
            <a class="navbar-brand" href="{{route('club.index')}}">Teams</a>
            <a class="navbar-brand" href="{{route('country.index')}}">Countries</a>
            <a class="navbar-brand" href="{{route('agent.index')}}">Agents</a>
            <a class="navbar-brand" href="{{route('parcour.index')}}">Parcours</a>
        </div>

    </div>
</div>
<table>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Height</th>
        <th>Weight</th>
        <th>Position</th>
        <th>Number</th>
        <th>Birth Year</th>
        <th>Photo</th>
        <th colspan="3">Actions</th>
    </tr>
    @foreach($player1 as $player)
    {{-- <a href="{{url('/players/detail/{pk}')}}">{{$player}} <br /></a> --}}
    {{-- <a href="{{route('players.detail', [$pk])}}">{{$player}} <br /></a> --}}
        <tr>
            <td>{{$player->fname}}</td>
            <td>{{$player->lname}}</td>
            <td>{{$player->height}}</td>
            <td>{{$player->weight}}</td>
            <td>{{$player->position}}</td>
            <td>{{$player->number}}</td>
            <td>{{$player->birth_year}}</td>
            <td>{{$player->photo}}</td>
            <td><a href="{{route('player.edit',["player"=>$player->id])}}"></a>Edit</td>
            {{-- <td><a href="{{route('player.edit',["player"=>$player->id])}}"></a>Edit</td> --}}
            <td><a href="{{route('player.detail',["player"=>$player->id])}}"></a>Details</td>
        </tr>
    @endforeach
</table>

