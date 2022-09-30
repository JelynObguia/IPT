<h1>IPT Seafood Inventory</h1>

<p>Welcome {{$user->name}}!</p>

<p>You received this email  as a result of your  registration to our website. Please clink on the verification link.</p>

<p>
    <a href="{{url('/verification/' . $user->id . '/' . $user->remember_token)}}">Click here</a>
</p>