<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO DO LIST</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">

</head>
<body>
    <!-- <h1>{{$page}}</h1> -->



<div class="my-5 ">
    
    <div class="card col-md-6 mx-auto ">
    <h1 class="mx-auto text-primary my-3">ToDo LiSt</h1>
    <form @if(isset($note)) action="{{route('update',['id'=>$note->id])}}"     @else action="/save" @endif method="post">
        @csrf
        @if(isset($note))
        @method("PUT")

        @endif

        <div class="row">
            <div class="col-md-10">
            <div class="form-group">
            <!-- <label class="" for="note" >Your Notes</label> -->
            <input type="text" name="note" @if(isset($note)) value="{{$note->note}}"  @endif  placeholder="Enter Your Note Here!" class="form-control my-4 mx-3">
            @error('note')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
            </div>
            <div class="col-md-2">
                <button  class="mt-4 btn btn-success mx-3" type="submit" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save2-fill" viewBox="0 0 16 16">
  <path d="M8.5 1.5A1.5 1.5 0 0 1 10 0h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6c-.314.418-.5.937-.5 1.5v6h-2a.5.5 0 0 0-.354.854l2.5 2.5a.5.5 0 0 0 .708 0l2.5-2.5A.5.5 0 0 0 10.5 7.5h-2v-6z"/>
</svg></button>
            </div>

        </div>
    </form>
    <div class="my-2">

    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
            <th>ID</th>
                <th>Note</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($notes as $item)
            <tr>
            <td>{{$item->id}}</td>
                <td>{{$item->note}}</td>
                <td><a class="btn btn-danger" href="{{route('delete', ['id'=>$item->id])}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg></a> | <a class="btn btn-warning" href="{{route('edit', ['id'=>$item->id])}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></a></td>
            </tr>

            @endforeach
         
        </tbody>
    </table>

    </div>

    </div>

    </div>
    
   
  

</body>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/all.min.js')}}"></script>

</html>


