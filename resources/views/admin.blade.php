@extends("layouts.default")

<div style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 100vw; flex-direction: column;">
    <form action="{{route('admin.login')}}" method="POST" >
      @csrf
        <!-- Grid -->
      
        <!-- Markup example 2: input is after label -->
        <label for="email">Email address</label>
        <input type="email" id="email" name="email" placeholder="Email address" required value="liv.jansen@gmail.com">
       
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Password" required value="1234">
        <!-- Button -->
        <button type="submit">Submit</button>
      
      </form>
</div>