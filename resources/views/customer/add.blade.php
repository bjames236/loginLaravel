@include('partials.header')
<a class="navbar-brand" href="#"><img src="logo.png" alt=""></a>
<h3>Edit a Customer</h3>
<form action="/saveCustomer" method="POST">
    @csrf
    
    @error('email')
        <p>Invalid Account</p>
    @enderror


    <div class="mb-3">
      <label for="name" class="form-label">Last Name</label>
      <input 
      type="text" 
      class="form-control" 
      aria-describedby="emailHelp"
      name="lastName">
      <div id="emailHelp" class="form-text"></div>
    </div>

    <div class="mb-3">
      <label for="name" class="form-label">First Name</label>
      <input 
      type="text" 
      class="form-control" 
      aria-describedby="emailHelp"
      name="firstName">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
      <label for="name" class="form-label">Email</label>
      <input 
      type="text" 
      class="form-control" 
      aria-describedby="emailHelp"
      name="email">
      <div id="emailHelp" class="form-text"></div>
    </div>

    <div class="mb-3">
      <label for="name" class="form-label">Address</label>
      <input 
      type="text" 
      class="form-control" 
      aria-describedby="emailHelp"
      name="address">
      <div id="emailHelp" class="form-text"></div>
    </div>
   

    <button type="submit" class="btn btn-primary">Update</button>
  </form>
  @include('partials.footer')