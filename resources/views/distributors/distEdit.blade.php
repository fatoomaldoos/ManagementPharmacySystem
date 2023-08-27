<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>One Page Wonder - Start Bootstrap Template</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
     @foreach ($distributors as $row)
       
     
        <!-- Content section 1-->
        <section id="scroll" style="background-color: rgb(29, 27, 27)">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                   
                    <div class="col-lg-6 order-lg-2">
					<p style="color:rgb(161, 159, 159)">Patients with chronic diseases may need medication periodically </p><p style="color:rgb(161, 159, 159)">.Therefore, the process of reminding and reserving these medicines for them is of great benefit </p>
                          </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                          <h2 class="display-4" style="color:rgb(138, 108, 141)">For edit the account...</h2>
                       
                    
                         <form  id="myNewAccount" action="{{ url('/distributors.distEdit/'.$row['id']) }}" method="POST" enctype="multipart/form-data">
                           @csrf
                           {{ csrf_field() }}
                           <div class="row">
                         <div class="col-6">
                        
                          <div>
                            <label for="validationCustomUsername" class="form-label" style="color:rgb(175, 131, 145)">Name</label>
                            <div class="input-group has-validation">
                              <span class="input-group-text" id="inputGroupPrepend">@</span>
                              <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="uname"  value="{{ $row['uname']}}"required>
                            </div>
                          </div>
                         
                        
                          </div>
                          <div class="col-6">
                            <div>
                            <label for="validationCustom04" class="form-label" style="color:rgb(175, 131, 145)">Phone</label>
                            <input type="text" class="form-control" id="validationCustom04" name="number" value="{{ $row['number'] }}" required>
                          </div>
<div class="col-6">
                            <div>
                            <label for="validationCustom04" class="form-label" style="color:rgb(175, 131, 145)">Password</label>
                            <input type="text" class="form-control" id="validationCustom04" name="password" value="{{ $row['password'] }}" required>
                          </div>
                         
                         
                            </div>
                            </div>
                            </div>
                          <div class="row">
                            <div class="col-6">
                            <input class="btn btn-primary" type="submit" name="submit" value="update" style="margin-left:10%;margin-top:5px; ">
                          </div> </div>
                        </form>
                                   </div>
                    </div>
                </div>
            </div>
        </section>
        @endforeach
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
