<form action="/newsletterMail" method="POST" class="nl-form">
  @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Your Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group form-check">
      
    </div>
    <div class="">
        <button type="submit" class="btn site-btn btn-2">Submit</button>
    </div>
</form>