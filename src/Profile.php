<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Assets/Imgs/profile.css" type="text/css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

    <title>Profile Page</title>
</head>
<body>
    <div class="menu">
        <a href="home">
            <img id="mi" src="Assets/logos/hm.png">
        </a>
        <a style="color: blue;"  href="morecourses"><p>Courses</p></a>
        <a style="color: blue;" href="jobs"><p>Jobs</p></a>
        <a style="color: blue;" href="profile"><p>Profile</p></a>
        <a style="color: blue;" href="logout1"><p>Log out</p></a>
    </div>

    <!--mobile View-->
    <div class="mobileview">
        <img src="Assets/Imgs/icons8-back-24.png" alt="back">
    </div>
@foreach($profile as $key => $value)
    <div class="main">
        <img src="Assets/Imgs/registered.jpg">
        <p id="fName">Full Name</p>
        <input type="text" id="fullName" placeholder="Amy Gamba" value="{{$value->firstname}} {{$value->lastname}}" readonly="true">

        <p id="mail">Email</p>
        <input type="email" id="email" placeholder="amygamba@gmail.com" value="{{$value->email}}" readonly="true" >

        <p id="tel">Phone Number</p>
        <input type="number" id="telephone" placeholder="+254 701 675 314" value="{{$value->mobile}}" readonly="true">

        <p id="birthDate">Date Of Birth</p>
        <input type="date" id="dob" placeholder="09/05/1993" value="{{$value->DOB}}" readonly="true">

    </div>
    @endforeach
    <br>
 
</body>
<style type="text/css">
</style>
</html>
  @include('project.footer')