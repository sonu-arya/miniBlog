<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
 @include('layouts.css')
</head>

<body style="background-color:#eeee;">
 @include('layouts.header')

<br>
<br>
<br>
<br>
<br>
<main id="main">

<!-- ======= Featured Services Section ======= -->
<section id="featured-services" class="featured-services">
  <div class="container">

    <div class="row">
    <div class="col-md-12">
    
    
    <table class="table table-striped">
<thead>
<tr>
  <th scope="col">Id</th>
  <th scope="col">Name</th>
  <th scope="col">Subject</th>
  <th scope="col">Body</th>
  <td >Action</td>
 
  </tr>
  </thead>
  <tbody>
  @foreach($post as $post)
    <tr>
      <th scope="row">{{$post->id}}</th>
      
      <td>
      @foreach($users as $user)
        @if($post->user_Id==$user->id)
            {{$user->name}}
          @endif
      @endforeach
      </td>
     
      <td>{{$post->subject}}</td>
      <td><textarea id="w3review" name="w3review" rows="4" cols="50" disabled>{{$post->body}}</textarea></td>
     
      <td>
          <a  class="btn btn-primary" data-toggle="modal" data-target="#editPost" id="{{$post->id}}" onclick="idupdate(this.id)"> Edit</a>
          <a href="{{url('post/delete/'.$post->id)}}" class="btn btn-danger" >Delete</a>
      </td>  
    </tr>
   
 @endforeach
 </tbody>
</table>
           
             </div>

       </div>

      </div>
    </section><!-- End Featured Services Section -->

  </main>







 


 <!-- The Modal for edit course-->
 <div class="modal fade" id="editPost">
   <div class="modal-dialog modal-dialog-centered">
     <div class="modal-content">
     
       <!-- Modal Header -->
       <div class="modal-header">
         <h4 class="modal-title">Edit Post</h4>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>
       
       <!-- Modal body -->
       <div class="modal-body">
       @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
        
    <form method="post" action="{{ route('post.update')}}"> 
        @csrf
        <input type="text" name="id" id="id" />
            
              <div class="form-group">    
                <label for="editSub"> Subject</label>
                <input type="text" class="form-control" name="editSub" id="editSub" placeholder="title"> 
              </div>

            <div class="form-group">    
                <label for="editBody"> Body</label>
                <textarea type="text" class="form-control" name="editBody" id="editBody"  > </textarea>
                
            </div>

  
         <input type="submit" name="send"  class="btn btn-primary" id=" "  value="Edit"> 
       
    
     </form>
    </div>
       
       
       <!-- Modal footer -->
       
       
     </div>
   </div>
 </div>
 <!---model end of add course-->






 <script >
function idupdate(postId){
 document.getElementById('id').value=postId;
}
</script>
  <!-- Vendor JS Files -->

</body>

</html>




















































