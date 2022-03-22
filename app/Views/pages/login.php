<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>login live coding</title>
  </head>
  <body>
      <div class="global-container">
        <div class="card login-form ">
        <div class="card-body">
             <h1 class="card-title text-center">L O G I N</h1>
        </div>
        <div class="card-text">
            <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <a href="<?= base_url('/pinjamlab'); ?>"><button type="submit" class="btn btn-primary">Submit</button></a>
              </form>
        </div>
        </div>
    </div>
    

    <style>html, 
      body{
          height: 100%;
          background-color: #222d32 !important  ;
      }
      
      .global-container{
          height: 100%;
          display: flex;
          align-items: center;
          justify-content: center;
          color: #42C2FF;
      }
      
      .login-form{
          width: 380px;
          height: 450px ;
          padding: 20px;
          background-color: #222d32 !important;
          border-radius: 10px !important;
      }
      
      input[type="email"],
      input[type="password"]{
          background: #1a2226 ;
          color: #fff;
          border: 2px solid #42C2FF;
          border-radius: 10px;
          margin-bottom: 25px;
      }
      
      input[type="email"]:focus,
      input[type="password"]:focus{
          outline: none;
          border: none;
          background: #1a2226;
          color: #fff;
          margin: 0;
        
      }
      
      button[type="submit"]{
         background: #42C2FF;
         color: #000 !important;
         transform: translateY(10px);
         background-origin: 10px !important;
      }
      
      .card-title{
          font-weight: 900;
          padding-top: 20px
      }
      </style>


        



  
  </body>
</html>