<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('layouts.css')
    <title>MiniBLlog</title>
</head>
<body>
@include('layouts.header')
<br>
<br>
<br>
<br>

<main class="p-5">
<div class="container">
  <div class="row">
   <div class="col-sm-3" >   </div>

    <div class="col-sm-7" > 
    
         <div class="container">
         @if(session()->has('status'))
              {{session('status')}}
         @endif
       <!--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editStd" id=" " onclick=""> Update </button>-->
       <div class="card bg-#eeee" style="width:500px; ">
         <div class="card-header">Post Here!</div>
         <div class="card-body">

        <form method="post" action="{{ route('post.store')}}"> 
        @csrf
            
            
              <div class="form-group">    
                <label for="sub"> Subject</label>
                <input type="text" class="form-control" name="sub" id="sub" placeholder="title"> 
              </div>

            <div class="form-group">    
                <label for="body"> Body</label>
                <textarea type="text" class="form-control" name="body" id="body"  > </textarea>
                
            </div>

  
         <input type="submit" name="send"  class="btn btn-primary" id=" "  value="Submit"> 
       
    
     </form>
     

    </p>
    </div> 
   
  </div>
</div>

    
    </div>
     <div class="col-sm-2" ></div> </div>
     
  </div>
    
    </div>
    </main>
    <script >
function idupdate(postId){
 document.getElementById('userId').value=postId;
}
</script>
</body>
</html>