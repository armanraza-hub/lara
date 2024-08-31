<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
   
      <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">

                <form action="" method="post">
                    @csrf
                    <h1>edit</h1>
                    <div class="mb-3">
                        <label for="" class="form-label">id</label>
                        <input
                        type="hidden"
                        name="n"
                        id=""
                        class="form-control"
                        />
                     
                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <input
                        type="text"
                        name="name"
                        id=""
                        class="form-control"
                        />
                    </div>
                    <div class="mb-3">
                    <label for="" class="form-label">age</label>
                    <input
                    type="text"
                    name="age"
                    id=""
                    class="form-control"
                    />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">email</label>
                    <input
                    type="text"
                    name="email"
                    id=""
                    class="form-control"
                    />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">designation</label>
                    <input
                    type="text"
                    name="designation"
                    id=""
                    class="form-control"
                    />
                </div>
                <button type="submit" class="btn btn-primary">update</button>
                <br>    
                <br>    
                <br>      

                
                
            </div>
                
            </form>
        </div>
    </div>
    <div class="table-responsive col-md-8 mx-auto">
     
        <table class="table table-striped-columns">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>age</th>
                    <th>email</th>
                    <th>designation</th>
                    <th class="col-2 text-center">action</th>

                </tr>
            </thead>
       
            @foreach ($sa as $s )
            <tr>
                <td>{{$s->id}}</td>
                <td>{{$s->Name}}</td>
                <td>{{$s->age}}</td>
                <td>{{$s->email}}</td>
                <td>{{$s->designation}}</td>
              
        </td>

            </tr>
         @endforeach 
            </tbody>
            <tfoot>
                
            </tfoot>
        </table>
      </div>
    





    
    
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
