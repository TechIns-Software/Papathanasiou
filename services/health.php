<?php
$title = "Ασφάλισης Υγείας | G.I.L";
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

                <label >Ημερομηνία γέννησης (εάν η προσφορά αφορά τον υιό/ την κόρη σας, πληκτρολογήστε τη δικιά του/της ημερομηνία γέννησης) *</label>
                <input type="text" class="form-control" style="background-color: lightgray;" id="date_birth">
            </div>

            <div class="py-2">

                <label >Ζείτε στο Νομό; *</label>
                <input type="text" class="form-control" style="background-color: lightgray;" id="loc">
            </div>



            <div class="py-2">
                <label >Η προσφορά Υγείας είναι: *</label>
                <select style="background-color: lightgray;" class="form-select" name="" id="offerfor">
                    <option value="Για εσάς μόνο ή για κάποιο άλλο μέλος της οικογένειάς σας ">Για εσάς μόνο ή για κάποιο άλλο μέλος της οικογένειάς σας </option>
                    <option value="Για εσάς και τον/την σύντροφό σας">Για εσάς και τον/την σύντροφό σας</option>
                    <option value="Για εσάς και δύο ακόμα μέλη της οικογένειας σας">Για εσάς και δύο ακόμα μέλη της οικογένειας σας</option>
                    <option value="Για την τετραμελή οικογένειά σας"> Για την τετραμελή οικογένειά σας</option>
                    <option value="Για την πενταμελή οικογένειά σας"> Για την πενταμελή οικογένειά σας</option>
                    <option value="Για την ακόμα μεγαλύτερη οικογένειά σας"> Για την ακόμα μεγαλύτερη οικογένειά σας</option>
                </select>
            </div>

            <div class="py-2">
                <label > Το ονοματεπώνυμο και η ημερομηνία γέννησης του/της/των μελών που θέλετε να λάβετε πρόταση ασφάλισης είναι:</label>
                <input type="text" class="form-control" id="familynames" style="background-color: lightgray;">
            </div>




            <div class="py-2">
                <label >Ποιο είναι το ποσό που θα σας έκανε να αισθανθείτε ασφαλής, εφόσον υπήρχε διαθέσιμο μόνο για επείγουσες περιπτώσεις ΥΓΕΙΑΣ για το κάθε μέλος της οικογένειάς σας ξεχωριστά :</label>
                <select style="background-color: lightgray;" class="form-select " id="safeamount">
                    <option value="20.000">20.000 €</option>
                    <option value="50.000">50.000</option>
                    <option value="100.000">100.000</option>
                    <option value="300.000"> 300.000</option>
                    <option value="500.000"> 500.000</option>
                    <option value=" 100.000.000"> 100.000.000</option>
                </select>
            </div>


            <div class="py-2">
                <label >Ποια είναι η Ιδιωτική Κλινική που θα επιλέγατε σε περίπτωση νοσηλείας ή επέμβασης ; </label>
                <select style="background-color: lightgray;" class="form-select " id="safehospital">
                    <option value="Metropolitan General Αθηνών">Metropolitan General Αθηνών</option>
                    <option value="Διαβαλκανικό Ιατρικό Κέντρο Θεσσαλονίκης">Διαβαλκανικό Ιατρικό Κέντρο Θεσσαλονίκης</option>
                    <option value="Υγεία Αθηνών">Υγεία Αθηνών</option>
                    <option value="Ιασώ Αθηνών">Ιασώ Αθηνών</option>
                    <option value="Aγιος Λουκάς Θεσσαλονίκης">Aγιος Λουκάς Θεσσαλονίκης</option>
                    <option value="Αθηναϊκή Mediclinic">Αθηναϊκή Mediclinic</option>
                    <option value="Παιδιατρικό Κέντρο Αθηνών">Παιδιατρικό Κέντρο Αθηνών</option>
                    <option value="Γενική Κλινική Θεσσαλονίκης">Γενική Κλινική Θεσσαλονίκης</option>
                    <option value="Ευρωκλινική Παίδων">Ευρωκλινική Παίδων</option>
                    <option value="Κάποια άλλη κλινική">Κάποια άλλη κλινική</option>
                    <option selected value="Όλες παρέχουν την ίδια ποιότητα Υπηρεσιών">Όλες παρέχουν την ίδια ποιότητα Υπηρεσιών</option>
                </select>
            </div>


            <div class="py-2">
                <label >Δικαιούστε κοινωνική ασφάλιση; (ΕΟΠΥΥ/ΕΦΚΑ); </label>
                <select class="form-select " id="koinasfalia" style="background-color: lightgray;">
                    <option value="NAI">NAI</option>
                    <option value=" OXI">OXI</option>
                </select>
            </div>


            <div class="py-2">
                <label >Θα προτιμούσατε να πληρώνετε λιγότερα στην Ασφαλιστική εταιρία, αλλά να συμμετέχετε στην περίπτωση νοσηλείας; </label>
                <select class="form-select " id="quest1" style="background-color: lightgray;">
                    <option value="NAI">NAI</option>
                    <option value=" OXI">OXI</option>
                </select>
            </div>


            <div class="py-2">
                <label >Θα θέλατε να συμμετέχετε σε περίπτωση νοσηλείας με το ποσό ή το ποσοστό; </label>
                <select class="form-select " id="quest2" style="background-color: lightgray;">
                    <option value="0€">0€ </option>
                    <option value=" 500€">500€</option>
                    <option value=" 1500€">1500€</option>
                    <option value=" 2000€">2000€</option>
                    <option value=" 20%">20%</option>
                </select>
            </div>


            <div class="py-2">
                <label >Θα σας ενδιέφερε να μπορείτε να επισκεφτείτε Ιατρούς και Διαγνωστικά Κέντρα πληρώνοντας μόνο μία μικρή συμμετοχή;</label>
                <select class="form-select " id="quest3" style="background-color: lightgray;">
                    <option value="NAI">NAI</option>
                    <option value=" OXI">OXI</option>
                </select>
            </div>




            <div class="py-2">
                <label >Σας ενδιαφέρει η νοσηλεία εκτός Ευρώπης;</label>
                <select class="form-select " id="quest4" style="background-color: lightgray;">
                    <option value="NAI">NAI</option>
                    <option value=" OXI">OXI</option>
                </select>
            </div>


            <div class="py-2">
                <label>Σας ενδιαφέρει η αποκατάσταση μετά από μεγάλες επεμβάσεις;</label>
                <select class="form-select " id="quest5" style="background-color: lightgray;">
                    <option value="NAI">NAI</option>
                    <option value=" OXI">OXI</option>
                </select>
            </div>



            <div class="py-2">
                <label>Ποιο είναι το ποσό που είστε διατεθιμένοι να διαθέσετε μηνιαίως για την ασφάλιση Υγείας;</label>
                <select class="form-select " id="quest6" style="background-color: lightgray;">
                    <option value="€ 20">€ 20</option>
                    <option value=" € 50">€ 50</option>
                    <option value=" € 100">€ 100</option>
                    <option value=" € 150">€ 150</option>
                    <option value=" Περισσότερο">Περισσότερο</option>
                    <option value=" Δεν έχω ιδέα!">Δεν έχω ιδέα!</option>
                </select>
            </div>


            <div class="py-2">
                <label>Ονοματεπώνυμο *</label>
                <input class="form-control " type="text" id="fullname" style="background-color: lightgray;">
            </div>

            <div class="py-2">
                <label>Τηλέφωνο *</label>
                <input class="form-control " type="text" id="phone" style="background-color: lightgray;">
            </div>

            <div class="py-2">
                <label>Πως μας βρήκατε; </label>
                <input class="form-control " type="text" id="findhow" style="background-color: lightgray;">
            </div>

            <div class="py-2">
                <label>Επικοινωνήσατε ήδη με κάποιο Συνεργάτη;</label>
                <input class="form-control " type="text" id="synergathepikinonia" style="background-color: lightgray;">
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