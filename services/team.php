<?php
$title = "Ομαδική Ασφάλιση | G.I.L";
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
            <h3>Προσφορά Ασφάλισης Υγείας</h3>
            <hr style="border: 2px solid blue;">

            <div class="py-2">
                <label >Διεύθυνση ηλεκτρονικού ταχυδρομείου *</label>
                <input type="email" class="form-control" style="background-color: lightgray;" id="email">
            </div>

            <div class="py-2">

                <label >Το ονοματεπώνυμό σας </label>
                <input type="text" class="form-control" style="background-color: lightgray;" id="name">
            </div>



            <div class="py-2">

                <label >Ποιά είναι η ημερομηνία γέννησής σας; *</label>
                <input type="text" class="form-control" style="background-color: lightgray;" id="date_birth">
            </div>

            <div class="py-2">

                <label >Ποιά είναι η επαγγελματική δραστηριότητα της επιχείρησής σας; *</label>
                <input type="text" class="form-control" style="background-color: lightgray;" id="quest1">
            </div>

            <div class="py-2">
                <label > Υπάρχουν ειδικοί κίνδυνοι στον τομέα της επαγγελματικής σας δραστηριότητας;</label>
                <input type="text" class="form-control" id="quest2" style="background-color: lightgray;">
            </div>


            <div class="py-2">
                <label >Σε ποιά περιφέρεια της Ελλάδας δραστηριοποιείται η επιχείρησή σας;</label>
                <select style="background-color: lightgray;" class="form-select" id="quest3">
                    <option value="Ανατολική Μακεδονία και Θράκη">Ανατολική Μακεδονία και Θράκη </option>
                    <option value="Δυτική Μακεδονία">Δυτική Μακεδονία</option>
                    <option value="Ήπειρος">Ήπειρος</option>
                    <option value="Θεσσαλία"> Θεσσαλία</option>
                    <option value="Ιόνιοι Νήσοι">Ιόνιοι Νήσοι</option>
                    <option value="Δυτική Ελλάδα">Δυτική Ελλάδα</option>
                    <option value="Στερεά Ελλάδα">Στερεά Ελλάδα</option>
                    <option value="Αττική">Αττική</option>
                    <option value="Πελοπόννησος">Πελοπόννησος</option>
                    <option value="Βόρειο Αιγαίο">Βόρειο Αιγαίο</option>
                    <option value="Νότιο Αιγαίο">Νότιο Αιγαίο</option>
                    <option value="Κρήτη">Κρήτη</option>
                </select>
            </div>




            <div class="py-2">
                <label >Πόσους εργαζόμενους έχετε στην επιχείρησή σας; *</label>
                <select style="background-color: lightgray;" class="form-select " id="quest4">
                    <option value="5-50">5-50</option>
                    <option value="51-100">51-100</option>
                    <option value="101-150">101-150</option>
                    <option value="151-200"> 151-200</option>
                    <option value="200 +"> 200 +</option>
                </select>
            </div>


            <div class="py-2">
                <label > Ποιές είναι οι ειδικότητες των εργαζομένων σας; *</label>
                <input type="text" class="form-control" id="quest5" style="background-color: lightgray;">
            </div>


            <div class="py-2">
                <label >Ποιός είναι ο μέσος όρος ηλικίας των εργαζομένων σας; *</label>
                <input type="text" class="form-control" id="quest6" style="background-color: lightgray;">
            </div>


            <div class="py-2">
                <label>Τι καλύψεις θα θέλατε να παρέχετε στους εργαζομένους σας; (Μπορείτε να επιλέξετε παραπάνω από μια)</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Ασφάλεια Ζωής και Υγείας" id="check1">
                    <label class="form-check-label" >
                    Ασφάλεια Ζωής και Υγείας
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Συνταξιοδοτικό Πρόγραμμα" id="check2" >
                    <label class="form-check-label" >
                    Συνταξιοδοτικό Πρόγραμμα
                    </label>
                </div>


                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Σχολικό Πρόγραμμα" id="check3" >
                    <label class="form-check-label" >
                    Σχολικό Πρόγραμμα
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Αθλητικό Πρόγραμμα" id="check4" >
                    <label class="form-check-label" >
                    Αθλητικό Πρόγραμμα
                    </label>
                </div>

            </div>


            
            <div class="py-2">
                <label >Ποιά είναι η μέγιστη διαθέσιμη δαπάνη ανα εργαζόμενο; *</label>
                <input type="text" class="form-control" id="quest7" style="background-color: lightgray;">
            </div>



            <div class="py-2">
                <label >Θα θέλατε το ύψος των παροχών να επηρεασθεί από την παλαιότητα, τον μισθό, τη θέση ή την ειδικότητα των εργαζομένων σας; * </label>
                <select class="form-select " id="quest8" style="background-color: lightgray;">
                    <option value="NAI">NAI</option>
                    <option value=" OXI">OXI</option>
                </select>
            </div>


            <div class="py-2">
                <label >Υπάρχει εν ισχύ ομαδικό ασφαλιστήριο; *</label>
                <select class="form-select " id="quest9" style="background-color: lightgray;">
                    <option value="NAI">NAI</option>
                    <option value=" OXI">OXI</option>
                </select>
            </div>

            <div class="py-2">
                <label >Πώς θα επιθυμούσατε να επικοινωνήσουμε μαζί σας; *</label>
                <select class="form-select " id="quest10" style="background-color: lightgray;">
                    <option value="Τηλεφωνικά">Τηλεφωνικά</option>
                    <option value=" Μέσω e-mail">Μέσω e-mail</option>
                </select>
            </div>


            <div class="py-2">
                <label>Πότε επιθυμείτε να επικοινωνήσουμε μαζί σας τηλεφωνικά; *</label>
                <input class="form-control" style="background-color: lightgray;" type="datetime-local" id="meeting-time" name="meeting-time" value="<?php echo $today; ?>" min="<?php echo $today; ?>" max="<?php echo $nextyeartoday; ?>">
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