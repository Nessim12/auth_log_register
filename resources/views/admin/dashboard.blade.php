<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Projet </title>

        <!-- CSS FILES -->                
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

        <link href="../css/css2/bootstrap.min.css" rel="stylesheet">

        <link href="../css/css2/bootstrap-icons.css" rel="stylesheet">

        <link href="../css/css2/templatemo-tiya-golf-club.css" rel="stylesheet">
        
<!--

TemplateMo 587 Tiya Golf Club

https://templatemo.com/tm-587-tiya-golf-club

-->
    </head>
    
    <body>

        <main>
<!-- //nav bar -->
            <nav class="navbar navbar-expand-lg">                
                <div class="container">
                    <a class="navbar-brand d-flex align-items-center" href="index.html">
                        <img src="images/logo.png" class="navbar-brand-image img-fluid" alt="Tiya Golf Club">
                        <span class="navbar-brand-text">
                            Tiya
                            <small>Golf Club</small>
                        </span>
                    </a>

                    <div class="d-lg-none ms-auto me-3">
                        <a class="btn custom-btn custom-border-btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Member Login</a>
                    </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_1">Home</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_2">About</a>
                            </li>

                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Les Departments</a>

                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                    <li><a class="dropdown-item" href="event-listing.html">Info</a></li>

                                    <li><a class="dropdown-item" href="event-detail.html">gestion</a></li>
                                     <li><a class="dropdown-item" href="event-listing.html">Info</a></li>
                                     <li><a class="dropdown-item" href="event-listing.html">Info</a></li>

                                    <li><a class="dropdown-item" href="event-detail.html">gestion</a></li>
                                    <li><a class="dropdown-item" href="event-detail.html">gestion</a></li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_4">Events</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_5">Contact Us</a>
                            </li>

                            
                        </ul>


                    </div >
             
                        <diV>
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <div class="d-none d-lg-block ms-lg-3">
                        <div class="btn custom-btn custom-border-btn" >
                            <a :href="route('admin.logout')" onclick="this.closest('form').submit();" >Log Out</a>
                        </div>
                    </div>
                     
                    </form>
                </div>
              
                       
                    </div>
                </div>
            </nav>
<!-- //nav bar -->

<!-- Login bar -->
            
            <!-- register bar --> 
            {{-- <div class="modal fade"  tabindex="-1" id="offcanvasExample5" aria-labelledby="offcanvasExampleLabel">                
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Update Master</h5>
                    
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
            <div class="offcanvas-body d-flex flex-column">
                <form class="custom-form member-login-form" action="" method="post" role="form">
                    @csrf
                    <div class="member-login-form-body">
                        <div class="mb-4">
                            <label class="form-label mb-2" for="member-login-number">Nom</label>

                            <input type="text" name="nom" id="nom" class="form-control"  required />
                            
                        </div>

                        <div class="mb-4">
                            <label class="form-label mb-2" for="member-login-password">Description</label>
                            <input type="text" name="description" id="description"  pattern="[0-9a-zA-Z]{4,10}" class="form-control"  required=""/>
                           
                        </div>
                 
                            <div class="col-lg-5 col-md-7 col-8 mx-auto">
                                <button type="submit" class="form-control">Update</button>
                            </div> --}}
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Update master</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="custom-form member-login-form" action="" method="patch" role="form">
                                            @csrf
                                            <input type="hidden" id="ma_id" name="ma_id"/>
                                            <div class="member-login-form-body">
                                                <div class="mb-4">
                                                    <label class="form-label mb-2" for="member-login-number">Nom</label>
                        
                                                    <input type="text" name="nom" id="nom" class="form-control"  required />
                                                    
                                                </div>
                        
                                                <div class="mb-4">
                                                    <label class="form-label mb-2" for="member-login-password">Description</label>
                                                    <input type="text" name="description" id="description"  pattern="[0-9a-zA-Z]{4,10}" class="form-control"  required=""/>
                                                   
                                                </div>
                                         
                                                    <div class="col-lg-5 col-md-7 col-8 mx-auto">
                                                        <button type="submit" class="form-control">Update</button>
                                                    </div>
                                    </div>
                                        </form>
                                  </div>
                                </div>
                              </div>
                        
            

                        
                       

    
                    </div>
                </form>

                
            </div>

            
        </div>
            <!-- register bar -->
<!-- section1 -->
            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">

                <div class="section-overlay"></div>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#3D405B" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>

                <div class="container">
                    <div class="row">             

                 
                                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                                    {{ __('Dashboard') }} {{ Auth::guard('admin')->user()->name }} - ({{ Auth::guard('admin')->user()->email }})
                                </h2>
              
                                
                                            You're logged in!
                                  
                                
                        

                    </div>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
            </section>
<!-- section1 -->
<!-- section1 -->
            <section class="about-section section-padding" id="section_2">
                <div class="container">
                    <h2>Ajouter Master</h2>
                    <form action="{{route('master.store')}}" method="post">
                        @csrf
                        <div class="mb-3 mt-3">
                          <label for="titre" class="form-label">Nom</label>
                          <input type="titre" class="form-control" id="nom"  name="nom">
                        </div>
                        <div class="mb-3">
                          <label for="description" class="form-label">description</label>
                          <input type="text" class="form-control" id="description"  name="description">
                        </div>
                      
                        <button type="submit" class="btn btn-danger">Submit</button>
                      </form>
                    

                </div>
            </section>
<!-- section1 -->

           

<!-- section1 -->
            <section class="membership-section section-padding" id="section_3">
                <div class="container">
                    <table class="table" border="1">
                        <thead>
                            <h2>les Master</h2>
                          <tr>
                            <th>Nom</th>
                            <th>description</th>
                            <th>affiché</th>
                            <th>modifier</th>
                            <th>supprimer</th>

                          </tr>
                    
                        </thead>
                        <tbody>
                    @foreach($mas as $b)
                          <tr>
                            <td>{{$b->nom}}</td>
                            <td>{{$b->description}}</td>
                            <td></td>
                            <td>
                            {{-- <button type="button" value="{{$b->id}}" class="btn btn-success editbtn ">Modifier</button> --}}
                                <a   href="{{route('master.edit',$b['id'])}}"  class="btn btn-success"> Modifier </a>
                                {{-- <a   href="#exampleModal"  class="btn btn-success editbtn"> Modifier </a> --}}
                            </td>
                            <td>
                                <form action="{{route('master.destroy',$b['id'])}}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn  btn-danger"> Supprimer</button> 
                                </form>
                            </td>
                    </tr>
                    @endforeach
                        </tbody>
                      </table>
                   

                </div>
            </section>
<!-- section1 -->

<!-- section1 -->
            <section class="events-section section-bg section-padding" id="section_4">
                <div class="container">
                    
                </div>
            </section>
<!-- section1 -->
<!-- section1 -->
            <section class="contact-section section-padding" id="section_5">
                <div class="container">
                    <table class="table" border="1">
                        <thead>
                          <tr>
                            <th>Cin</th>
                            <th>Email</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Tel</th>
                            <th>Adresse</th>
                          </tr>
                    
                        </thead>
                        <tbody>
                    @foreach($etd as $a)
                          <tr>
                            <td>{{$a->cin}}</td>
                            <td>{{$a->email}}</td>
                            <td>{{$a->Nom}}</td>
                            <td>{{$a->Prenom}}</td>
                            <td>{{$a->Tel}}</td>
                            <td>{{$a->Adresse}}</td>
                    </tr>
                    @endforeach
                        </tbody>
                      </table>
                   
                </div>
            </section>
        </main>
        <!-- section1 -->
        <!-- footer -->

        <footer class="site-footer">
            <div class="container">
                

                </div>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#81B29A" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
        </footer>
 <!-- footer -->

        <!-- JAVASCRIPT FILES -->
        <script src="../js/js2/jquery.min.js"></script>
        <script src="../js/js2//bootstrap.bundle.min.js"></script>
        <script src="../js/js2//jquery.sticky.js"></script>
        <script src="../js/js2//click-scroll.js"></script>
        <script src="../js/js2//animated-headline.js"></script>
        <script src="../js/js2//modernizr.js"></script>
        <script src="../js/js2//custom.js"></script>
    </body>
</html>









