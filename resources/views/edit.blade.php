<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <form action="{{route('player.update',['pk'=>$playrs->id])}}">
        @csrf
        @method('PUT')
        <label for="">First Name</label>
        <input type="text" name="" id="" value="{{ $player->fname }}"><br/>

        <label for="">Last Name</label>
        <input type="text" name="" id="" value="{{ $player->lname }}"><br/>

        <label for="">First Name</label>
        <input type="text" name="" id="" value="{{ $player->height }}"><br/>

        <label for="">First Name</label>
        <input type="text" name="" id="" value="{{ $player->weight }}"><br/>

        <label for="">First Name</label>
        <input type="text" name="" id="" value="{{ $player->position }}"><br/>

        <label for="">First Name</label>
        <input type="text" name="" id="" value="{{ $player->number }}"><br/>

        <label for="">First Name</label>
        <input type="text" name="" id="" value="{{ $player->birth_year }}"><br/>

        <label for="">First Name</label>
        <input type="text" name="" id="" value="{{ $player->photo }}"><br/>

        <input type="submit" value="Modifier">

        <input type="reset" value="Annuler">

    </form>
</body>
</html>