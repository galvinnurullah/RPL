<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="{{asset('assets/img/favicon.jpg')}}" rel="icon">
    <link href="{{asset('assets/img/favicon.jpg')}}" rel="apple-touch-icon">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet')}}">
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <title>Website PsikomenHealth</title>
  </head>
  @include('komponen/menu')
  <body>
    <br/>
    <div class="container py-5">
        <h1 class="text-center">Life Talk</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 py-5">

            <div class="col">
                <div class="card">
                    <img src="./img/dish1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                         <h3>Webinar</h3>
                        <h5 class="card-title">Ngobrol Bareng Psikolog</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                            dignissimos accusantium amet similique velit iste.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <a href="#popup" class="btn btn-primary">Daftar</a>
                    </div>
                </div>
            </div>

            
            <div class="col">
              <div class="card">
                  <img src="./img/dish1.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                       <h3>Webinar</h3>
                      <h5 class="card-title">Ngobrol Bareng Psikolog</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                          dignissimos accusantium amet similique velit iste.</p>
                  </div>
                  <div class="mb-5 d-flex justify-content-around">
                    <a href="#popup" class="btn btn-primary">Daftar</a>
                  </div>
              </div>
          </div>

          
          <div class="col">
            <div class="card">
                <img src="./img/dish1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                     <h3>Webinar</h3>
                    <h5 class="card-title">Ngobrol Bareng Psikolog</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                        dignissimos accusantium amet similique velit iste.</p>
                </div>
                <div class="mb-5 d-flex justify-content-around">
                    <a href="#popup" class="btn btn-primary">Daftar</a>
                </div>
            </div>
        </div>

        
        <div class="col">
          <div class="card">
              <img src="./img/dish1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                   <h3>Webinar</h3>
                  <h5 class="card-title">Ngobrol Bareng Psikolog</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                      dignissimos accusantium amet similique velit iste.</p>
              </div>
              <div class="mb-5 d-flex justify-content-around">
                <a href="#popup" class="btn btn-primary">Daftar</a>
              </div>
          </div>
      </div>

      
      <div class="col">
        <div class="card">
            <img src="./img/dish1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                 <h3>Webinar</h3>
                <h5 class="card-title">Ngobrol Bareng Psikolog</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                    dignissimos accusantium amet similique velit iste.</p>
            </div>
            <div class="mb-5 d-flex justify-content-around">
                <a href="#popup" class="btn btn-primary">Daftar</a>
            </div>
        </div>
    </div>

    
    <div class="col">
      <div class="card">
          <img src="./img/dish1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
               <h3>Webinar</h3>
              <h5 class="card-title">Ngobrol Bareng Psikolog</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                  dignissimos accusantium amet similique velit iste.</p>
          </div>
          <div class="mb-5 d-flex justify-content-around">
            <a href="#popup" class="btn btn-primary">Daftar</a>
          </div>
      </div>
    </div>

    <div class="popup" id="popup">
        <div class="popup-content">
            <a href="#" class="popup-close">&times;</a>
            <div class="popup-header">
                <h1> Registrasi Event </h1>
                <h2> Silakan Lakukan Pembayaran Seikhlasnya ke Rekening Berikut : </h2>
                <h2> BLU BCA/BCA DIGITAL 001713885362 (Aulia Al Husna) </h2>
                <center><img src="assets/img/qris.png" alt="" weight="500px" height="300px"></center>
                <br/>
                <a href="https://chat.whatsapp.com/Gm484jgpnxN63Wy7CuXtkW" target="_blank" class="btn btn-primary">Masuk Grup WhatsApp</a>
            </div>
        </div>
    </div>
            
    </div>
</div>
    
    
  @include('komponen/footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
</html>
