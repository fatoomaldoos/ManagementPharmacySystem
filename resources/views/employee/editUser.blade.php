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
     
        <!-- Content section 1-->
        <section id="scroll" style="background-color: rgb(29, 27, 27)">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                   
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="/storage/image/{{ $emp->image }}" alt="..." style="height:500px"/></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                          <h2 class="display-4" style="color:rgb(138, 108, 141)">For edit the account...</h2>
                       
                    
                         <form  id="myNewAccount" action="{{url('/employee.editUser/'.$emp->id)}}" method="POST" enctype="multipart/form-data">
                           @csrf
                           {{ csrf_field() }}
                           <div class="row">
                         <div class="col-6">
                        
                          <div>
                            <label for="validationCustomUsername" class="form-label" style="color:rgb(175, 131, 145)">Username</label>
                            <div class="input-group has-validation">
                              <span class="input-group-text" id="inputGroupPrepend">@</span>
                              <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="uname"  value="{{ $emp->uname}}"required>
                            </div>
                          </div>
                        
                          <div>
                            <label for="validationCustom04" class="form-label" style="color:rgb(175, 131, 145)">Phone</label>
                            <input type="phone-number" class="form-control" id="validationCustom04" name="number" value="{{ $emp->number }}" required>
                          </div>
                         <div>
                            <label for="validationCustom05" class="form-label" style="color:rgb(175, 131, 145)">Password</label>
                            <input type="password" class="form-control" id="validationCustom05" name="password" value="{{ $emp->password }}" required>
                          </div>
                          </div>
                          <div class="col-6">
                          <div>
                            <label for="validationCustom03" class="form-label" style="color:rgb(175, 131, 145)">From Time</label>
                            <input type="time" class="form-control" id="validationCustom03" name="ftime"  value="{{ $emp->ftime }}"required>
                          </div>
                          <div>
                            <label for="validationCustom03" class="form-label" style="color:rgb(175, 131, 145)">To Time</label>
                            <input type="time" class="form-control" id="validationCustom03" name="etime" value="{{ $emp->etime}}" required>
                          </div>
                           
                          <div class="ty">
                          <div class="op">
                            <div>
                              <label for="choose" class="form-label" style="color:rgb(175, 131, 145)" >Set if admin or not</label>
                              <select type="text" class="form-control" id="choose" name="type" required>
                                <option value="admin">Admin</option>
                                <option value="notadmin">Not Admin</option>
                              </select>
                            </div>
                            
                           <div>
                              <label for="validationCustom05" class="form-label" style="color:rgb(175, 131, 145)">Select an image:</label>
                              <input type="file" class="form-control" id="validationCustom05" name="image"  >
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
      
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
