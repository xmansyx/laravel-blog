@extends('mainlayout')
@section('pagename','| contact')

@section('content')
<div class="row">
  <div class="col-md-12">
    <form action="">

      <div class="form-group">
        <label for="subject" name="subject">Subject:</label>
        <input type="text" name="subject" id="" class="form-control">
      </div>

      <div class="form-group">
        <label for="email" name="email">email:</label>
        <input type="email" name="email" id="" class="form-control">
      </div>

      <div class="form-group">
        <label for="body" name="body">Message:</label>
        <textarea name="body" id="" class="form-control"></textarea>
      </div>  
        
      <div class="form-group">
        <input type="submit" value="Send Message" class="btn btn-success">
      </div>  
      
    </form>
  </div>
</div>
@endsection