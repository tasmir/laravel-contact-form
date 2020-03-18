<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
<h1>Contact Form</h1>



<form action="{{route('contact')}}" method="POST">
	@csrf

	 <div class="form-group">
    <label for="exampleInputPassword1">Your Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="name" placeholder="Your Name">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Message</label>
    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" value="sublit" class="btn btn-primary">Submit</button>
</form>


</body>
</html>