<!DOCTYPE html> 
    <html lang="en"> 
        <head> 
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Registration</title>
            <!-- Bootstrap -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <style>
                 body{
                     min-height:100vh;
                     display:flex;
                     align-items:center;
                     justify-content:center;
                     background: linear-gradient(135deg,#7ed957,#3ecf8e); 
                      }
                 .form-card{
                     background:#fff;
                     padding:30px;
                    border-radius:16px;
                    width:100%;
                     max-width:420px;
                     box-shadow:0 15px 35px rgba(0,0,0,0.2);
                      } 
                      legend{ 
                        font-weight:bold
                         text-align:center;
                          margin-bottom:15px;
                           font-size:1.4rem;
                            }
                             a{text-decoration: none;}
                             
            </style>
             </head>
              <body> 
                <div class="form-card"> 
                    <form action="log_action.php" method="POST" autocomplete="off">
                         <fieldset> 
                            <legend>Smart Note </legend>
                             <div class="mb-3">
                             <label for="em" class="form-label">Email</label>
                              <input type="email" class="form-control" name="email" id="em" placeholder="example@gmail.com" maxlength="100" required autocomplete="email">
                             </div>
                              <div class="mb-3"> 
                                <label for="pa" class="form-label"> Password</label> 
                                <input type="password" placeholder="*****" class="form-control" name="password" id="pa" minlength="8" maxlength="50" required autocomplete="new-password">
                             </div>
                              <button type="submit" class="btn btn-primary w-100"> login </button>
                               <p> dont have an account? <a href="reg.php">create account</a></p> 
                            </fieldset>
                         </form>
                         </div>
                         </body>
                          </html>