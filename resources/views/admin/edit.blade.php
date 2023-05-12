<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    


        <div class="modal-body">
            <form class="custom-form member-login-form" action="{{route('master.update',$id)}}" method="post" >
                @csrf
                  
                <div >
                    <div class="mb-4">
                        <label class="form-label mb-2" for="member-login-number">Nom</label>

                        <input type="text" name="nom" id="nom" class="form-control" value="{{$mas->nom}}" required />
                        
                    </div>
                    <div class="mb-4">
                      <label class="form-label mb-2" for="member-login-number">description</label>

                      <input type="text" name="description" id="description" class="form-control" value="{{$mas->description}}" required />
                      
                  </div>
             
                  {{method_field('PUT')}}
                            <button type="submit" class="form-control">Update</button>
                          <a href="/admin/dashboard" >retour</a>
                   
        </div>
            </form>
      </div>








</body>
</html>