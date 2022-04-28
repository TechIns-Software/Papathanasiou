<?php
$title = "Ταξιδιωτική Ασφάλιση| G.I.L";
include_once 'serv_header.php';

$todayyear = date('Y');
$todaymonth = date('m');
$todayday = date('d');


$today = $todayyear . '-' . $todaymonth . '-' . $todayday . 'T00:00';
$nextyeartoday = ($todayyear + 1) . '-' . $todaymonth . '-' . $todayday . 'T00:00';
?>





<section >
    <div class="container text-center">


        <!-- <p class="px-5  mx-5">Η INTERAMERICAN μέσω των προγραμμάτων Υγείας BeWell σας δίνει τη δυνατότητα να δημιουργήσετε τη δική σας πρόταση ασφάλισης, προσαρμοσμένη στις δικές σας ανάγκες, αλλά και στις δικές σας οικονομικές δυνατότητες</p> -->

        <img src="../assets/img/logo1.png" class="img-fluid mx-auto text-center" alt="">
    </div>
</section>

<div class="container formcont" >
    <div class="row">
        <div class="col-md-12 offset-md-12 ">
        <h3>Προσφορά Ταξιδιωτικής Ασφάλισης</h3>
        <hr style="border: 2px solid green;">
           
            <div class="py-2">
                <label >Διεύθυνση ηλεκτρονικού ταχυδρομείου *</label>
                <input type="email" class="form-control" style="background-color: lightgray;" id="email">
            </div>

            <div class="py-2">

                <label>Το ονοματεπώνυμό σας </label>
                <input type="text" class="form-control" style="background-color: lightgray;" id="fullname">
            </div>

            <div class="py-2">
                <label >Το τηλέφωνό σας είναι:  *</label>
                <input class="form-control "  type="text" id="phone" style="background-color: lightgray;">
            </div>



            <div class="py-2">

                <label >Πότε είναι η έναρξη του ταξιδίου; *</label>
                <input type="date" class="form-control" style="background-color: lightgray;" id="trip_start">
            </div>

            <div class="py-2">

                <label >Πότε είναι η λήξη του ταξιδίου; * </label>
                <input type="date" class="form-control" style="background-color: lightgray;" id="trip_end">
            </div>


            


            <div class="py-2">
                <label> Ποίος είναι ο προορισμός σας; *</label>
                <input type="text" class="form-control" id="quest1" style="background-color: lightgray;">
            </div>


            
            
            <div class="py-2">
                <label >Υπάρχουν ενδιάμεσες στάσεις σε κάποια/ες χώρα/ες; * </label>
                <select style="background-color: lightgray;" class="form-select " id="quest2">
                        <option value="Ναι">Ναι</option>
                        <option value=" Όχι">Όχι</option>
     
                    </select>
            </div>


            
            <div class="py-2">
                <label > Αν υπάρχουν ενδιάμεσες στάσεις, σε ποιά/ες χώρα/ες είναι ;</label>
                <input type="text" class="form-control" id="quest3" style="background-color: lightgray;">
            </div>


            <div class="py-2">
                <label > Πόσοι είναι οι ταξιδιώτες; *</label>
                <input type="text" class="form-control" id="quest4" style="background-color: lightgray;">
            </div>


            <div class="py-2">
                <label >Επιθυμείτε, πέραν της βασικής κάλυψης, και κάλυψη ακύρωσης ταξιδίου; * </label>
                <select style="background-color: lightgray;" class="form-select " id="quest5">
                        <option value="Ναι">Ναι</option>
                        <option value=" Όχι">Όχι</option>
     
                    </select>
            </div>

            <div class="py-2">
                <label>Επιθυμείτε, πέραν της βασικής κάλυψης, και κάλυψη απώλειας αποσκευών;  * </label>
                <select style="background-color: lightgray;" class="form-select " id="quest6">
                        <option value="Ναι">Ναι</option>
                        <option value=" Όχι">Όχι</option>
     
                    </select>
            </div>

            <div class="py-2">
                <label >Πώς θα επιθυμούσατε να επικοινωνήσουμε μαζί σας;  * </label>
                    <select style="background-color: lightgray;" class="form-select " id="quest7">
                        <option value="Τηλεφωνικά">Τηλεφωνικά</option>
                        <option value=" Μέσω e-mail">Μέσω e-mail</option>
                    </select>
            </div>


                        
            <div class="py-2">
                <label >Έχω ενημερωθεί για την επεξεργασία των προσωπικών μου δεδομένων και συναινώ σε αυτήν, όπως ειδικά ορίζεται στο κεφάλαιο "Όροι GDPR" (βλέπε κάτω μέρος σελίδας) *</label>
                <input class=" form-check" type="checkbox" id="gdpr">
              
            </div>


                        
            <div class="py-2">
                <label >Επιθυμώ να ενημερώνομαι για μελλοντικές προωθητικές ενέργειες που αφορούν σε προϊόντα και υπηρεσίες της Greek Insurance Leaders</label>
                <input class=" form-check" type="checkbox" id="newsletter">
            </div>

            <p class="text-muted"> Ένα αντίγραφο των απαντήσεών σας θα σταλεί μέσω ηλεκτρονικού ταχυδρομείου στη διεύθυνση που παρείχατε.</p>
            <a href="#">Εδώ μπορείτε να δείτε τους όρους GDPR </a> 

            <div class="py-2">
                <button class="btn btn-danger">Υποβολή Φόρμας</button>
                
            </div>

        </div>
    </div>



</div>






<?php
include_once 'serv_footer.php';
?>