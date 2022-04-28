<?php
$title = "Ασφάλιση Επιχείρησης | G.I.L";
include_once 'serv_header.php';

$todayyear = date('Y');
$todaymonth = date('m');
$todayday = date('d');


$today = $todayyear . '-' . $todaymonth . '-' . $todayday . 'T00:00';
$nextyeartoday = ($todayyear + 1) . '-' . $todaymonth . '-' . $todayday . 'T00:00';
?>





<section>
    <div class="container text-center">


        <!-- <p class="px-5  mx-5">Η INTERAMERICAN μέσω των προγραμμάτων Υγείας BeWell σας δίνει τη δυνατότητα να δημιουργήσετε τη δική σας πρόταση ασφάλισης, προσαρμοσμένη στις δικές σας ανάγκες, αλλά και στις δικές σας οικονομικές δυνατότητες</p> -->

        <img src="../assets/img/logo1.png" class="img-fluid mx-auto text-center" alt="">
    </div>
</section>

<div class="container formcont">
    <div class="row">
        <div class="col-md-12 offset-md-12 ">
            <h3>Προσφορά Προσφορά Ασφάλισης Επιχείρησης</h3>
            <hr style="border: 2px solid blue;">

            <div class="py-2">
                <label >Διεύθυνση ηλεκτρονικού ταχυδρομείου *</label>
                <input type="email" class="form-control" style="background-color: lightgray;" id="email">
            </div>

            <div class="py-2">

                <label >Το ονοματεπώνυμό σας </label>
                <input type="text" class="form-control" style="background-color: lightgray;" id="fullname">
            </div>



            <div class="py-2">

                <label >Ποιό είναι το έτος κατασκευής του επαγγελματικού χώρου σας; *</label>
                <input type="text" class="form-control" style="background-color: lightgray;" id="store_creation">
            </div>

            <div class="py-2">

                <label >Πόσα τετραγωνικά μέτρα είναι ο επαγγελματικός χώρος σας; *</label>
                <input type="text" class="form-control" style="background-color: lightgray;" id="store_long">
            </div>


            
            <div class="py-2">
                <label > Ποιός είναι ο Τ.Κ. (ταχυδρομικός κώδικας) του επαγγελματικού χώρου σας; *</label>
                <input type="text" class="form-control" id="postcode" style="background-color: lightgray;">
            </div>


            <div class="py-2">
                <label > Τι είδος επιχείρησης στεγάζεται στον επαγγελματικό σας χώρο; *</label>
                <input type="text" class="form-control" id="quest1" style="background-color: lightgray;">
            </div>



            <div class="py-2">
                <label >Είστε ο ιδιοκτήτης του επαγγελματικού χώρου; *</label>
                <select style="background-color: lightgray;" class="form-select" name="" id="quest2">
                    <option value="ΝΑΙ">ΝΑΙ </option>
                    <option value="ΟΧΙ">ΟΧΙ</option>
                </select>
            </div>


            


            <div class="py-2">
                <label >Εργάζεστε σε αυτόν; *</label>
                <select style="background-color: lightgray;" class="form-select"  id="quest3">
                    <option value="ΝΑΙ">ΝΑΙ </option>
                    <option value="ΟΧΙ">ΟΧΙ</option>
                </select>
            </div>


            

            <div class="py-2">
                <label >Είναι ισόγειο ή βρίσκεται σε όροφο; *</label>
                <select style="background-color: lightgray;" class="form-select"  id="quest4">
                    <option value="Ισόγειο">Ισόγειο </option>
                    <option value="Σε όροφο">Σε όροφο</option>
                </select>
            </div>

           

            <div class="py-2">
                <label >  Άν έχετε απαντήσει "Σε Όροφο", σε ποιόν όροφο βρίσκεται ο επαγγελματικός σας χώρος;</label>
                <input type="text" class="form-control" id="quest5" style="background-color: lightgray;">
            </div>


            <div class="py-2">
                <label >Επιθυμείτε κάλυψη σεισμού; *</label>
                <select style="background-color: lightgray;" class="form-select"  id="quest6">
                    <option value="ΝΑΙ">ΝΑΙ </option>
                    <option value="ΟΧΙ">ΟΧΙ</option>
                </select>
            </div>


            <div class="py-2">
                <label >Έχει υπάρξει κάποια ζημία τα τελευταία 5 χρόνια στον επαγγελματικό σας χώρο; *</label>
                <select style="background-color: lightgray;" class="form-select"  id="quest7">
                    <option value="ΝΑΙ">ΝΑΙ </option>
                    <option value="ΟΧΙ">ΟΧΙ</option>
                </select>
            </div>

            
            <div class="py-2">
                <label >Επιθυμείτε ασφάλιση περιεχομένου; *</label>
                <select style="background-color: lightgray;" class="form-select"  id="quest8">
                    <option value="ΝΑΙ">ΝΑΙ </option>
                    <option value="ΟΧΙ">ΟΧΙ</option>
                </select>
            </div>




            <div class="py-2">
                <label >Πώς θα επιθυμούσατε να επικοινωνήσουμε μαζί σας; *</label>
                <select style="background-color: lightgray;" class="form-select " id="quest9">
                    <option value="Τηλεφωνικά">Τηλεφωνικά</option>
                    <option value="Μέσω e-mail">Μέσω e-mail</option>

                </select>
            </div>


            <div class="py-2">
                <label>Έχω ενημερωθεί για την επεξεργασία των προσωπικών μου δεδομένων και συναινώ σε αυτήν, όπως ειδικά ορίζεται στο κεφάλαιο "Όροι GDPR" (βλέπε κάτω μέρος σελίδας) *</label>
                <input class=" form-check" type="checkbox" id="gdpr">

            </div>



            <div class="py-2">
                <label>Επιθυμώ να ενημερώνομαι για μελλοντικές προωθητικές ενέργειες που αφορούν σε προϊόντα και υπηρεσίες της Greek Insurance Leaders</label>
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