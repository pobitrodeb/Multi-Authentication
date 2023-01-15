<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>admin | login </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
   <section class="py-5">
    <div class="container">
        <div class="card">
            <div class="car-header bg-primary p-2 text-white"> Admin Login </div>
            <div class="card-body">

              <form action="" method="POST">
                @csrf

                <div class="row my-1">
                    <div class="col-md-3">Email</div>
                    <div class="col-md-9">
                        <input type="email" class="form-control" name="email">
                    </div>
                </div>

                <div class="row my-1">
                    <div class="col-md-3">Password </div>
                    <div class="col-md-9">
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>

                <div class="row my-1">
                    <div class="col-md-3"> </div>
                    <div class="col-md-9">
                       <input type="submit" value="Admin Login" class="btn btn-primary">
                    </div>
                </div>

              </form>

            </div>
        </div>
    </div>
   </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
