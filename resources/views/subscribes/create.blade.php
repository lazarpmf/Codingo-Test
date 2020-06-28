<!DOCTYPE html>
<html>
<head>
    <title>Zadatak 1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous" defer></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous" defer></script>

</head>
<body>

<div style="width:30%; margin-top: 10%;" class="container">
    <h1>Forma za prijavu</h1>
    <form method="POST" action="/subscribes">
        @csrf
        <div class="form-group">
            <label for="first_name">Ime:</label>
            <input type="text" class=" form-control"  name="first_name"  placeholder="Unesite Vaše ime">
            @error('first_name')
            <p>{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label name="last_name">Prezime</label>
            <input type="text" class="form-control" name="last_name" placeholder="Unesite Vaše prezime">
            @error('last_name')
                <p>{{$message}}</p>
            @enderror
        </div>
        <label for="email">Email adresa</label>
        <input type="text" class="form-control" name="email" placeholder="Unesite Vašu email adresu">
            @error('email')
        <p>{{$message}}</p>
            @enderror
        <br>
        <button type="submit"  class="btn btn-primary">Prijavi se</button>
        <br>
        <br>
        <a href="/subscribes" class="btn btn-success">Vidi sve subscribere</a>
    </form>


</div>

</body>
</html>
