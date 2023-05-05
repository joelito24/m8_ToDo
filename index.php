<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" src="./style.css"/> -->
    <link href="https://alertifyjs.com/build/css/alertify.css" rel="stylesheet" />
    <script src="https://alertifyjs.com/build/alertify.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body onload="cargar()">


    <section class="vh-100" style="background-color: #e2d5de;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
      
              <div class="card" style="border-radius: 15px;">
                <div class="card-body p-5">
      
                  <h6 class="mb-3">Awesome Todo List</h6>
      
                  <form class="d-flex justify-content-center align-items-center mb-4">
                    <div class="form-outline flex-fill">
                      <input type="text" id="form3" class="form-control form-control-lg" placeholder="What do you need to do today?" />
                      <!-- <label class="form-label" for="form3">What do you need to do today?</label> -->
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg ms-2">Add</button>
                  </form>
      
                  <ul class="list-group mb-0">
                    <li
                      class="list-group-item d-flex justify-content-between align-items-center border-start-0 border-top-0 border-end-0 border-bottom rounded-0 mb-2">
                      <div class="d-flex align-items-center">
                        <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." />
                        Cras justo odio
                      </div>
                      <a href="#!" data-mdb-toggle="tooltip" title="Remove item">
                        <i class="bi bi-x text-danger"></i>
                      </a>
                    </li>
                    <li
                      class="list-group-item d-flex d-flex justify-content-between align-items-center border-start-0 border-top-0 border-end-0 border-bottom rounded-0 mb-2">
                      <div class="d-flex align-items-center">
                        <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." checked />
                        <s>Dapibus ac facilisis in</s>
                      </div>
                      <a href="#!" data-mdb-toggle="tooltip" title="Remove item">
                        <i class="bi bi-x text-danger"></i>
                      </a>
                    </li>
                    <li
                      class="list-group-item d-flex d-flex justify-content-between align-items-center border-start-0 border-top-0 border-end-0 border-bottom rounded-0 mb-2">
                      <div class="d-flex align-items-center">
                        <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." />
                        Morbi leo risus
                      </div>
                      <a href="#!" data-mdb-toggle="tooltip" title="Remove item">
                        <i class="bi bi-x text-danger"></i>
                      </a>
                    </li>
                    <li
                      class="list-group-item d-flex d-flex justify-content-between align-items-center border-start-0 border-top-0 border-end-0 border-bottom rounded-0 mb-2">
                      <div class="d-flex align-items-center">
                        <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." />
                        Porta ac consectetur ac
                      </div>
                      <a href="#!" data-mdb-toggle="tooltip" title="Remove item">
                        <i class="bi bi-x text-danger"></i>
                      </a>
                    </li>
                    <li
                      class="list-group-item d-flex d-flex justify-content-between align-items-center border-start-0 border-top-0 border-end-0 border-bottom rounded-0 mb-0">
                      <div class="d-flex align-items-center">
                        <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." checked />
                        Vestibulum at eros
                      </div>
                      <a href="#!" data-mdb-toggle="tooltip" title="Remove item">
                        <i class="bi bi-x text-danger"></i>
                      </a>
                    </li>
                    <li
                      class="list-group-item d-flex justify-content-between align-items-center border-start-0 border-top-0 border-end-0 border-bottom rounded-0 mb-2">
                      <div class="d-flex align-items-center">
                        <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." />
                        Morbi leo risus
                      </div>
                      <a href="#!" data-mdb-toggle="tooltip" title="Remove item">
                        <i class="bi bi-x text-danger"></i>
                      </a>
                    </li>
                  </ul>
      
                </div>
              </div>
      
            </div>
          </div>
        </div>
      </section>

    <script src="anuncios.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>