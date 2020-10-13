<!DOCTYPE html>
<html>
    <head>
        <title>Contactez-moi</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
       
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/style.css">
        
           
        
    </head>

    <body>
        <div class="container">
            <div class="divider"></div>
            <div class="heading">
                <h2>Contacter-moi</h2>
            </div>
            <div class="row">
                 <div class="col-lg-10 col-lg offset-1">
                    <form id="contact-form" method="post" action="contact.php" role="form">
                        <div class="row">

                            <div class="col-md-6">
                                <label for="firstname">Prénom<span class="blue"> *</span></label>
                                <input type="text" id="firstname" name="firstname"  class="form-control" placeholder="Votre prénom" required value=""/>
                                
                                <p class="comments"></p>
                            </div>

                            <div class="col-md-6">
                                <label for="name">Nom<span class="blue"> *</span></label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom" required value="">
                                
                                <p class="comments"></p>
                            </div>

                            <div class="col-md-6">
                                <label for="email">Email<span class="blue" > *</span></label>
                                <input type="text" id="email" name="email" class="form-control" placeholder="Votre email" required value="" >
                                
                                <p class="comments"></p>
                            </div>

                            <div class="col-md-6">
                                <label for="phone">Telephone</label>
                                <input type="tel" id="phone" name="phone" class="form-control" placeholder="Votre telephone"  value="">
                                
                                <p class="comments"></p>
                            </div>

                            <div class="col-md-12">
                                <label for="name">Message<span class="blue"> *</span></label>
                                <textarea  id="message" name="message" class="form-control" placeholder="Votre message" rows="4"  required value=""></textarea>
                            
                                <p class="comments"></p>
                            </div>

                            <div class="col-md-12">
                                
                                <p class="blue"><strong>* Ces information sont requises</strong></p>
                            </div>

                            <div class="col-md-12">
                               <input type="submit" class="button1" value="envoyer">
                            </div>

                        </div>
                       
                    </form>
                 </div>
            </div>
        </div>
        <script src="js/script.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    </body>
    <footer>

    </footer>

    