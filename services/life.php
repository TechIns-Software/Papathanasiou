<?php
$title = "Ασφάλιση Ζωής | G.I.L";
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
        <h3>Προσφορά Ασφάλισης Ζωής</h3>
        <hr style="border: 2px solid orange;">
           
            <div class="py-2">
                <label >Διεύθυνση ηλεκτρονικού ταχυδρομείου *</label>
                <input type="email" class="form-control" style="background-color: lightgray;" id="email">
            </div>

            <div class="py-2">

                <label >Το ονοματεπώνυμό σας </label>
                <input type="text" class="form-control" style="background-color: lightgray;" id="name">
            </div>



            <div class="py-2">

                <label >Ημερομηνία γέννησης  *</label>
                <input type="text" class="form-control" style="background-color: lightgray;" id="date_birth">
            </div>

            <div class="py-2">
                <label >Πόσα παιδία έχετε ; Ποια η ηλικία τους ;</label>
                <input type="text" class="form-control" style="background-color: lightgray;" id="quest1">
            </div>


            <div class="py-2">
                <label >Ποιες οι δανειακές σας υποχρεώσεις σε ποσό;</label>
                <input type="text" class="form-control" style="background-color: lightgray;" id="quest2">
            </div>

            <div class="py-2">
                <label >Υπάρχουν αποθεματικά ή ακίνητη μη χρησιμοποιημένη περιουσία και σε τι ποσά;</label>
                <input type="text" class="form-control" style="background-color: lightgray;" id="quest3">
            </div>


            <div class="py-2">
                <label >Έχετε κάποιο άλλο κίνητρο ασφάλισης; Αν ναι, σε τι ποσό;</label>
                <input type="text" class="form-control" style="background-color: lightgray;" id="quest4">
            </div>


            
            <div class="py-2">
                <label >Ποιο είναι το επάγγελμά σας; *</label>
                <input type="text" class="form-control" style="background-color: lightgray;" id="quest5">
            </div>

            <div class="py-2">
                <label >Σε ποια περιφέρεια της Ελλάδας μένετε; *</label>
                <input type="text" class="form-control" style="background-color: lightgray;" id="quest6">
            </div>


            <div class="py-2">
                <label >Επιθυμείτε τα χρήματα που δίνετε να αποταμιεύονται; Αν ναι, τι ποσό ανά μήνα μπορείτε να διαθέσετε για Αποταμίευση;</label>
                <input type="text" class="form-control" style="background-color: lightgray;" id="quest7">
            </div>


            
            <div class="py-2">
                <label >Σας ενδιαφέρουν καλύψεις όπως: </label>
                <select style="background-color: lightgray;" class="form-select " id="quest8">
                        <option value="Μόνιμη Ολική Ανικανότητα">Μόνιμη Ολική Ανικανότητα</option>
                        <option value="Κάλυψη Ασθένειας ή Ατυχήματος μετά την 7η ή 14η ημέρα που δεν μπορώ να εργαστώ">Κάλυψη Ασθένειας ή Ατυχήματος μετά την 7η ή 14η ημέρα που δεν μπορώ να εργαστώ</option>
                        <option value="Κάλυψη Μερικής Ανικάνοτητας">Κάλυψη Μερικής Ανικάνοτητας</option>
                        <option value="Τίποτα από τα παραπάνω">Τίποτα από τα παραπάνω</option>
                    </select>
            </div>


        
            
            <div class="py-2">
                <label >Τι ποσό μπορείτε να διαθέσετε ετησίως ;</label>
                <select style="background-color: lightgray;" class="form-select " id="quest9">
                        <option value="0-50€">0-50€</option>
                        <option value="51-100€">51-100€</option>
                        <option value="100-150€">100-150€</option>
                        <option value="Περισσότερο"> Περισσότερο</option>
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