<?php
$title = "Ασφάλιση Σκάφους | G.I.L";
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
            <h3>Προσφορά Ασφάλισης Σκάφους</h3>
            <hr style="border: 2px solid blue;">

            <div class="py-2">
                <label>Διεύθυνση ηλεκτρονικού ταχυδρομείου *</label>
                <input type="email" class="form-control" style="background-color: lightgray;" id="email">
            </div>

            <div class="py-2">

                <label >Το ονοματεπώνυμό σας </label>
                <input type="text" class="form-control" style="background-color: lightgray;" id="name">
            </div>



            <div class="py-2">
                <label>Το τηλέφωνό σας είναι:</label>
                <input class="form-control " type="text" id="phone" style="background-color: lightgray;">
            </div>

            <div class="py-2">
                <label>Ποιό είναι το όνομα του σκάφους σας; *</label>
                <input class="form-control " type="text" id="quest1" style="background-color: lightgray;">
            </div>



            <div class="py-2">
                <label>Ποιό είναι το έτος κατασκευής του σκάφους σας; *</label>
                <input class="form-control " type="text" id="quest2" style="background-color: lightgray;">
            </div>

            <div class="py-2">
                <label>Ποιός είναι ο αριθμός Νηολογίου του σκάφους σας; *</label>
                <input class="form-control " type="text" id="quest3" style="background-color: lightgray;">
            </div>


            <div class="py-2">
                <label>Ποιό είναι το λιμάνι νηολόγησης; *</label>
                <input class="form-control " type="text" id="quest4" style="background-color: lightgray;">
            </div>



            <div class="py-2">
                <label >Ποιό είναι το είδος του σκάφους σας; *</label>
                <select style="background-color: lightgray;" class="form-select" id="quest5">
                    <option value="L/S Μη ταχύπλοο">L/S Μη ταχύπλοο </option>
                    <option value="S/B Ταχύπλοο">S/B Ταχύπλοο</option>
                    <option value="S/Y Ιστιοπλοϊκό">S/Y Ιστιοπλοϊκό</option>
                    <option value="J/S Jet Ski"> J/S Jet Ski</option>
                    <option value="I/B Φουσκωτό"> I/B Φουσκωτό</option>
                </select>
            </div>


            <div class="py-2">
                <label >Ποιά είναι χρήση του σκάφους σας; *</label>
                <select style="background-color: lightgray;" class="form-select " id="quest6">
                    <option value="Επαγγελματικής Αναψυχής με μόνιμο πλήρωμα">Επαγγελματικής Αναψυχής με μόνιμο πλήρωμα</option>
                    <option value="Επαγγελματικής Αναψυχής χωρίς μόνιμο πλήρωμα">Επαγγελματικής Αναψυχής χωρίς μόνιμο πλήρωμα</option>
                    <option value="Ιδιωτικής Αναψυχής">Ιδιωτικής Αναψυχής</option>
                </select>
            </div>



            <div class="py-2">
                <label >Πόση συνολική ιπποδύναμη έχει το σκάφος σας; * </label>
                <input class="form-control " type="text" id="quest7" style="background-color: lightgray;">
            </div>


            <div class="py-2">
                <label >Ποιό είναι το μήκος του σκάφους σας; *</label>
                <input class="form-control " type="text" id="quest8" style="background-color: lightgray;">
            </div>


            <div class="py-2">
                <label >Ποιά είναι η αξία του σκάφους σας; *</label>
                <input class="form-control " type="text" id="quest9" style="background-color: lightgray;">
            </div>


            <div class="py-2">
                <label >Έχει υπάρξει κάποια ζημία τα τελευταία 5 χρόνια στο σκάφος σας; *</label>
                <select class="form-select " id="quest10" style="background-color: lightgray;">
                    <option value="Ναι">Ναι </option>
                    <option value=" Όχι">Όχι</option>

                </select>
            </div>



            <div class="py-2">
                <label >Επιθυμείτε συμπληρωματική κάλυψη αστικής ευθύνης κατά τη διάρκεια ενασχόλησης με θαλάσσια σπόρ (Μόνο για σκάφη ιδιωτικής αναψυχής);</label>
                <select class="form-select " id="quest11" style="background-color: lightgray;">
                    <option value="Ναι">Ναι </option>
                    <option value=" Όχι">Όχι</option>

                </select>
            </div>


            <div class="py-2">
                <label >Επιθυμείτε συμπληρωματική κάλυψη έκρηξης και πυρκαγιάς;</label>
                <select class="form-select " id="quest12" style="background-color: lightgray;">
                    <option value="Ναι">Ναι </option>
                    <option value=" Όχι">Όχι</option>

                </select>
            </div>


            <div class="py-2">
                <label>Επιθυμείτε συμπληρωματική κάλυψη αμέλειας χειριστή, κακόβουλης βλάβης και κινδύνων της θάλασσας;</label>
                <select class="form-select " id="quest13" style="background-color: lightgray;">
                    <option value="Ναι">Ναι </option>
                    <option value=" Όχι">Όχι</option>

                </select>
            </div>



            <div class="py-2">
                <label >Επιθυμείτε συμπληρωματική κάλυψη ιδίων ζημιών κατά τη μεταφορά;</label>
                <select class="form-select " id="quest14" style="background-color: lightgray;">
                    <option value="Ναι">Ναι </option>
                    <option value=" Όχι">Όχι</option>

                </select>
            </div>


            
            <div class="py-2">
                <label >Επιθυμείτε συμπληρωματική κάλυψη προσωπικών αντικειμένων έως 1.500€;</label>
                <select class="form-select " id="quest15" style="background-color: lightgray;">
                    <option value="Ναι">Ναι </option>
                    <option value=" Όχι">Όχι</option>

                </select>
            </div>

            <div class="py-2">
                <label>Πώς θα επιθυμούσατε να επικοινωνήσουμε μαζί σας; *</label>
                <select class="form-select " id="quest16" style="background-color: lightgray;">
                    <option value="Τηλεφωνικά">Τηλεφωνικά</option>
                    <option value=" Μέσω e-mail">Μέσω e-mail</option>

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