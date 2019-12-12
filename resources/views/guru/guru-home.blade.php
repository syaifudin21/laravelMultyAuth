{{Auth::user()->name}} <br>
{{Auth::user()->username}} 
<br>
<form action="{{route('guru.logout')}}" method="post">@csrf <input type="submit" value="Logout"></form>