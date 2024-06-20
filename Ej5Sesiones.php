<?php
    session_start();
    
    if (!isset($_SESSION['cantidades'])){
        
        $_SESSION['cantidades']=array("producto1" => 0 , "producto2" => 0, "producto3" => 0, "producto4" => 0);
    }

    
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['producto1'])){
            $_SESSION['cantidades']["producto1"]++;
        } else if(isset($_POST['producto2'])){
            $_SESSION['cantidades']["producto2"]++;
        } else if(isset($_POST['producto3'])){
            $_SESSION['cantidades']["producto3"]++;
        } else if(isset($_POST['producto4'])){
            $_SESSION['cantidades']["producto4"]++;
        } else if(isset($_POST['eliminarProducto1'])){
            if($_SESSION['cantidades']["producto1"]>0){
                $_SESSION['cantidades']["producto1"]--;
            }
        } else if(isset($_POST['eliminarProducto2'])){
            if($_SESSION['cantidades']["producto2"]>0){
                $_SESSION['cantidades']["producto2"]--;
            }
        } else if(isset($_POST['eliminarProducto3'])){
            if($_SESSION['cantidades']["producto3"]>0){
                $_SESSION['cantidades']["producto3"]--;
            }
        } else if(isset($_POST['eliminarProducto4'])){
            if($_SESSION['cantidades']["producto4"]>0){
                $_SESSION['cantidades']["producto4"]--;
            }
        }
        
       
    }



    


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" method="post" action="Carrito.php">
                        <button class="btn btn-outline-dark" type="submit" name="carrito">
                            <i class="bi-cart-fill me-1"></i>
                            Carrito
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Shop in style</h1>
                    <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        
            <section class="py-5">
                <div class="container px-4 px-lg-5 mt-5">
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">Patonificador</h5>
                                        <p>Convierte cosas en patos</p>
                                        <!-- Product price-->
                                        $40.00 - $80.00
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <form method = "post">
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center"><button class="btn btn-outline-dark mt-auto" name="producto1" type="submit">Añadir al carrito</button></div>
                                    </div>
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center"><button class="btn btn-outline-dark mt-auto" name="eliminarProducto1" type="submit">Eliminar del carrito</button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Sale badge-->
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                                <!-- Product image-->
                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">Loreos</h5>
                                        <!-- Product reviews-->
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        <p>Oreos con forma de loro</p>
                                        <!-- Product price-->
                                        <span class="text-muted text-decoration-line-through">$10.00</span>
                                        $7.00
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <form method = "post">
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center"><button class="btn btn-outline-dark mt-auto" name="producto2" type="submit">Añadir al carrito</button></div>
                                    </div>
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center"><button class="btn btn-outline-dark mt-auto" name="eliminarProducto2" type="submit">Eliminar del carrito</button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Sale badge-->
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                                <!-- Product image-->
                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">Pinchos de tortilla</h5>
                                        <!-- Product price-->
                                        <p>Tortillas en un pincho</p>
                                        <span class="text-muted text-decoration-line-through">$15.00</span>
                                        $12.50
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <form method="post">
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center"><button class="btn btn-outline-dark mt-auto" name="producto3" type="submit">Añadir al carrito</button></div>
                                    </div>
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center"><button class="btn btn-outline-dark mt-auto" name="eliminarProducto3" type="submit">Eliminar del carrito</button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">PIANO!!!</h5>
                                        <!-- Product reviews-->
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        <p>Un piano muy exclamativo</p>
                                        <!-- Product price-->
                                        $200.00
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <form method="post">
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center"><button class="btn btn-outline-dark mt-auto" name="producto4" type="submit">Añadir al carrito</button></div>
                                    </div>
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center"><button class="btn btn-outline-dark mt-auto" name="eliminarProducto4" type="submit">Eliminar del carrito</button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
        
        
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
