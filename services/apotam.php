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
                <label >Διεύθυνση ηλεκτρονικού ταχυδρομείου *</label>
                <input type="email" class="form-control" style="background-color: lightgray;" id="email">
            </div>

            <div class="py-2">

                <label ">Το ονοματεπώνυμό σας </label>
                <input type="text" class="form-control" style="background-color: lightgray;" id="name">
            </div>



            <div class="py-2">
                <label>Το τηλέφωνό σας είναι:</label>
                <input class="form-control " type="text" id="phone" style="background-color: lightgray;">
            </div>

            <div class="py-2">
                <label>Ποιά είναι η ημερομηνία γέννησής σας; *</label>
                <input class="form-control " type="date" id="date_birth" style="background-color: lightgray;">
            </div>



            <div class="py-2">
                <label>Ποιό είναι το είδος του σκάφους σας; *</label>
                <select style="background-color: lightgray;" class="form-select" id="quest1">
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
                <label >Ποιά είναι η οικογενειακή σας κατάσταση; *</label>
                <select style="background-color: lightgray;" class="form-select " id="quest2">
                    <option value="Άγαμος">Άγαμος</option>
                    <option value="Έγγαμος">Έγγαμος</option>
                </select>
            </div>


            <div class="py-2">
                <label >Έχετε εξαρτώμενα μέλη; *</label>
                <select class="form-select " id="quest3" style="background-color: lightgray;">
                    <option value="Ναι">Ναι </option>
                    <option value=" Όχι">Όχι</option>

                </select>
            </div>




            <div class="py-2">
                <label >Αν απαντήσατε "Ναι", πόσα παιδιά έχετε; Ποια η ηλικία τους;</label>
                <input class="form-control " type="text" id="quest4" style="background-color: lightgray;">
            </div>


            <div class="py-2">
                <label >Εργάζεστε; *</label>
                <select class="form-select " id="quest5" style="background-color: lightgray;">
                    <option value="Ναι">Ναι </option>
                    <option value=" Όχι">Όχι</option>

                </select>
            </div>

            <div class="py-2">
                <label >Εάν εργάζεστε, ποιό είναι το επάγγελμά σας;</label>
                <input class="form-control " type="text" id="quest6" style="background-color: lightgray;">
            </div>

            <div class="py-2">
                <label >Ποιά είναι τα μηνιαία ανελαστικά πάγια της οικογένειάς σας; *</label>
                <input class="form-control " type="text" id="quest7" style="background-color: lightgray;">
            </div>

            <div class="py-2">
                <label >Ποιες οι δανειακές σας υποχρεώσεις σε ποσό;</label>
                <input class="form-control " type="text" id="quest8" style="background-color: lightgray;">
            </div>


            <div class="py-2">
                <label>Πώς θα αντιμετώπιζε η οικογένειά σας τα οικονομικά προβλήματα που θα προέκυπταν αν δεν υπήρχε το δικό σας εισόδημα; *</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Διαθέσιμες Αποταμιεύσεις" id="check1">
                    <label class="form-check-label" >
                    Διαθέσιμες Αποταμιεύσεις
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Ρευστοποίηση Επενδύσεων" id="check2" >
                    <label class="form-check-label" >
                    Ρευστοποίηση Επενδύσεων
                    </label>
                </div>


                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Πώληση Ακινήτων" id="check3" >
                    <label class="form-check-label" >
                    Πώληση Ακινήτων
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value=" Δουλειά Συζύγου" id="check4" >
                    <label class="form-check-label" >
                    Δουλειά Συζύγου
                    </label>
                </div>



                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value=" Δεν θα είχαν τρόπο" id="check5" >
                    <label class="form-check-label" >
                    Δεν θα είχαν τρόπο
                    </label>
                </div>


                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Αλλο" id="check6" >
                    <label class="form-check-label" >
                    Αλλο
                    </label>
                    <input class="form-control " type="text" id="check6anser"  disabled style="background-color: lightgray;">
                </div>
            </div>



            <div class="py-2">
                <label >Τι ποσό μπορείτε να διαθέσετε ετησίως; *</label>
                <select class="form-select " id="quest9" style="background-color: lightgray;">
                    <option value="0-50€">0-50€ </option>
                    <option value=" 51-100€">51-100€</option>
                    <option value=" 101-150€">101-150€</option>
                    <option value=" Περισσότερο από 150€">Περισσότερο από 150€</option>

                </select>
            </div>


            <div class="py-2">
                <label>Τι κεφάλαιο θα επιθυμούσατε να λάβουν τα εξαρτώμενα μέλη σε περίπτωση απώλειας ζωής; *</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="50.000€" id="amount1">
                    <label class="form-check-label" >
                    50.000€
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="100.000€" id="amount2" >
                    <label class="form-check-label" >
                    100.000€
                    </label>
                </div>


                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="200.000€" id="amount3" >
                    <label class="form-check-label" >
                    200.000€
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Αλλο" id="amountother" >
                    <label class="form-check-label" >
                    Αλλο
                    </label>
                    <input class="form-control " type="text" id="amountanser"  disabled style="background-color: lightgray;">
                </div>
            </div>



            <div class="py-2">
                <label >Σας ενδιαφέρουν συμπληρωματικές καλύψεις όπως: *</label>
                <select class="form-select " id="quest10" style="background-color: lightgray;">
                    <option value="Μόνιμη Ολική Ανικανότητα">Μόνιμη Ολική Ανικανότητα </option>
                    <option value="Κάλυψη Ασθένειας ή Ατυχήματος μετά την 7η ή 14η ημέρα που δεν μπορώ να εργαστώ">Κάλυψη Ασθένειας ή Ατυχήματος μετά την 7η ή 14η ημέρα που δεν μπορώ να εργαστώ</option>
                    <option value="Κάλυψη Μερικής Ανικάνοτητας">Κάλυψη Μερικής Ανικάνοτητας</option>
                    <option value="Καμία από τις παραπάνω">Καμία από τις παραπάνω</option>

                </select>
            </div>



            <div class="py-2">
                <label>Επιθυμείτε τα χρήματα που δίνετε να αποταμιεύονται; Αν ναι, τι ποσό ανά μήνα μπορείτε να διαθέσετε για Αποταμίευση;</label>
                <input class="form-control " type="text" id="quest11"   style="background-color: lightgray;">
            </div>



            <div class="py-2">
                <label >Πώς θα επιθυμούσατε να επικοινωνήσουμε μαζί σας; *</label>
                <select class="form-select " id="quest12" style="background-color: lightgray;">
                    <option value="Τηλεφωνικά">Τηλεφωνικά </option>
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