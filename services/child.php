<?php
$title = "Ασφάλεια Παιδιού| G.I.L";
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

        <img src="../assets/img/logo1.png" class="img-fluid mx-auto text-center" alt="logo">
    </div>
</section>

<div class="container formcont">
    <div class="row">
        <div class="col-md-12 offset-md-12 ">
            <h3>Προσφορά Ασφάλειας Παιδιού</h3>
            <hr style="border: 2px solid blue;">

            <div class="py-2">
                <label>Διεύθυνση ηλεκτρονικού ταχυδρομείου *</label>
                <input type="email" class="form-control" style="background-color: lightgray;" id="email">
            </div>

            <div class="py-2">

                <label>Ονοματεπώνυμο* </label>
                <input type="text" class="form-control" style="background-color: lightgray;" id="fullname">
            </div>

            <div class="py-2">
                <label>Το τηλέφωνό σας είναι: </label>
                <input class="form-control " type="text" id="phone" style="background-color: lightgray;">
            </div>



            <div class="py-2">

                <label>Ποιά είναι η ημερομηνία γέννησης του παιδιού/ των παιδιών σας ; *</label>
                <input type="text" class="form-control my-1" style="background-color: lightgray;" id="date_birth" placeholder="Παιδί 1">
                <input type="text" class="form-control my-1" style="background-color: lightgray;" id="date_birth_1" placeholder="Παιδί 2">
                <input type="text" class="form-control my-1" style="background-color: lightgray;" id="date_birth_2" placeholder="Παιδί 3">
                <input type="text" class="form-control my-1" style="background-color: lightgray;" id="date_birth_3" placeholder="Παιδί 4">

            </div>

            <div class="py-2">
                <label>Σε ποιά περιφέρεια της Ελλάδας μένετε;
*;</label>
                <select style="background-color: lightgray;" class="form-select" id="quest1">
                    <option value="Ανατολική Μακεδονία και Θράκη">Ανατολική Μακεδονία και Θράκη </option>
                    <option value="Κεντρική Μακεδονία">Κεντρική Μακεδονία</option>
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
                <label>Ποιο είναι το ποσό που θα σας έκανε να αισθανθείτε ασφαλής, εφόσον υπήρχε διαθέσιμο μόνο για επείγουσες περιπτώσεις ΥΓΕΙΑΣ για το κάθε τέκνο σας ξεχωριστά :</label>
                <select style="background-color: lightgray;" class="form-select " id="quest2">
                    <option value="20.000€">20.000€</option>
                    <option value="50.000€">50.000€</option>
                    <option value="100.000€">100.000€</option>
                    <option value="300.000€">300.000€</option>
                    <option value="500.000€">500.000€</option>
                    <option value="1.000.000€">1.000.000€</option>
                </select>
            </div>


             
            <div class="py-2">
                <label>Ποιο είναι το ποσό που θα σας έκανε να αισθανθείτε ασφαλής, εφόσον υπήρχε διαθέσιμο μόνο για επείγουσες περιπτώσεις ΥΓΕΙΑΣ για το κάθε τέκνο σας ξεχωριστά : *</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="20.000€" name="prices" id="price1">
                    <label class="form-check-label">
                    20.000€
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="50.000€" name="prices" id="price2">
                    <label class="form-check-label">
                    50.000€
                    </label>
                </div>


                <div class="form-check">
                    <input class="form-check-input" type="radio" value="100.000€" name="prices" id="price3">
                    <label class="form-check-label">
                    100.000€
                    </label>
                </div>



                <div class="form-check">
                    <input class="form-check-input" type="radio" value="300.000€" name="prices" id="price4">
                    <label class="form-check-label">
                    300.000€
                    </label>
                </div>


                <div class="form-check">
                    <input class="form-check-input" type="radio" value="500.000€" name="prices" id="price5">
                    <label class="form-check-label">
                    500.000€
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" value="1.000.000€" name="prices" id="price5">
                    <label class="form-check-label">
                    1.000.000€
                    </label>
                </div>





                <div class="form-check">
                    <input class="form-check-input" type="radio" value="Άλλο" name="prices" id="price7">
                    <label class="form-check-label">
                        Άλλο:
                    </label>
                    <input class="form-control " type="text" id="priceanwser" disabled style="background-color: lightgray;">
                </div>
            </div>


       


            

            <div class="py-2">
                <label>Ποια/ποιές είναι η Ιδιωτική/ες Κλινική/ες που θα επιλέγατε σε περίπτωση νοσηλείας ή επέμβασης του παιδιού σας ;*</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Metropolitan General Αθηνών" id="amount1">
                    <label class="form-check-label">
                        Metropolitan General Αθηνών
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Διαβαλκανικό Ιατρικό Κέντρο Θεσσαλονίκης" id="amount2">
                    <label class="form-check-label">
                        Διαβαλκανικό Ιατρικό Κέντρο Θεσσαλονίκης
                    </label>
                </div>


                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Υγεία Αθηνών" id="amount3">
                    <label class="form-check-label">
                        Υγεία Αθηνών
                    </label>
                </div>



                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Ιασώ Αθηνών" id="amount4">
                    <label class="form-check-label">
                        Ιασώ Αθηνών
                    </label>
                </div>


                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Άγιος Λουκάς Θεσσαλονίκης" id="amount5">
                    <label class="form-check-label">
                        Άγιος Λουκάς Θεσσαλονίκης
                    </label>
                </div>


                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Αθηναϊκή Mediclinic" id="amount6">
                    <label class="form-check-label">
                        Αθηναϊκή Mediclinic
                    </label>
                </div>


                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Παιδιατρικό Κέντρο Αθηνών" id="amount7">
                    <label class="form-check-label">
                        Παιδιατρικό Κέντρο Αθηνών
                    </label>
                </div>


                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Γενική Κλινική Θεσσαλονίκης" id="amount8">
                    <label class="form-check-label">
                        Γενική Κλινική Θεσσαλονίκης
                    </label>

                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value=" Ευρωκλινική Παίδων" id="amount9">
                    <label class="form-check-label">
                        Ευρωκλινική Παίδων
                    </label>

                </div>


                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Άλλο" id="amountother">
                    <label class="form-check-label">
                        Άλλο:
                    </label>
                    <input class="form-control " type="text" id="amountanser" disabled style="background-color: lightgray;">
                </div>
            </div>

            <div class="py-2">
                <label>Είναι καλυμένο/α το παιδί/ τα παιδιά σας από κοινωνική ασφάλιση; (ΕΟΠΥΥ/ΕΦΚΑ)</label>
                <select class="form-select " id="quest3" style="background-color: lightgray;">
                    <option value="Ναι">Ναι</option>
                    <option value="Όχι">Όχι</option>
                </select>
            </div>


            <div class="py-2">
                <label>Θα προτιμούσατε να πληρώνετε λιγότερα στην Ασφαλιστική εταιρία, αλλά να συμμετέχετε στην περίπτωση νοσηλείας;</label>
                <select class="form-select " id="quest4" style="background-color: lightgray;">
                <option value="Ναι">Ναι</option>
                    <option value="Όχι">Όχι</option>
                </select>
            </div>

            <div class="py-2">
                <label>Θα θέλατε να συμμετέχετε σε περίπτωση νοσηλείας με το ποσό ή το ποσοστό;</label>
                <select class="form-select " id="quest5" style="background-color: lightgray;">
                    <option value="0€">0€</option>
                    <option value="500€">500€</option>
                    <option value="1500€">1500€</option>
                    <option value="2000€">2000€</option>
                    <option value="20%">20%</option>
                </select>
            </div>

            <div class="py-2">
                <label>Θα σας ενδιέφερε να μπορεί το παιδί σας να επισκέπτεται Ιατρούς και Διαγνωστικά Κέντρα πληρώνοντας μόνο μία μικρή συμμετοχή;</label>
                <select class="form-select " id="quest6" style="background-color: lightgray;">
                <option value="Ναι">Ναι</option>
                    <option value="Όχι">Όχι</option>
                </select>
            </div>


            <div class="py-2">
                <label>Σας ενδιαφέρει η νοσηλεία εκτός Ευρώπης ; *</label>
                <select class="form-select " id="quest7" style="background-color: lightgray;">
                <option value="Ναι">Ναι</option>
                    <option value="Όχι">Όχι</option>
                </select>
            </div>

            <div class="py-2">
                <label>Σας ενδιαφέρει η αποκατάσταση μετά από μεγάλες επεμβάσεις ;*</label>
                <select class="form-select " id="quest8" style="background-color: lightgray;">
                <option value="Ναι">Ναι</option>
                    <option value="Όχι">Όχι</option>
                </select>
            </div>

            <div class="py-2">
                <label>Ποιο είναι το ποσό που είστε διατεθιμένοι να διαθέσετε μηνιαίως για την ασφάλιση Υγείας του παιδιού σας;</label>
                <select class="form-select " id="quest9" style="background-color: lightgray;">
                    <option value="20€">20€</option>
                    <option value="50€">50€</option>
                    <option value="100€">100€</option>
                    <option value="150€">150€</option>
                    <option value="Περισσότερο από 150€">Περισσότερο από 150€</option>
                </select>
            </div>


            <div class="py-2">
                <label> Εώς σήμερα πώς έχετε φροντίσει για την οικονομική υποστήριξη των παιδιών σας στο μέλλον;</label>
                <input type="text" class="form-control" id="quest10" style="background-color: lightgray;">
            </div>

            <div class="py-2">
                <label>Έχετε σκεφτεί με ποιόν τρόπο θα  εξασφαλίσετε τις σπουδές του παιδιού/ των παιδιών σας;</label>
                <select class="form-select " id="quest11" style="background-color: lightgray;">
                <option value="Ναι">Ναι</option>
                    <option value="Όχι">Όχι</option>
                </select>
            </div>

            <div class="py-2">
                <label>Αν όχι, θα θέλατε να σχεδιάσουμε μαζί έναν τρόπο αποταμίευσης για να βοηθήσετε τα παιδιά σας να πετύχουν στο μέλλον τους στόχους και τα όνειρά τους;</label>
                <select class="form-select " id="quest12" style="background-color: lightgray;">
                <option value="Ναι">Ναι</option>
                    <option value="Όχι">Όχι</option>
                </select>
            </div>

            
            <div class="py-2">
                <label>Τι κεφάλαιο επιθυμείτε να βάζετε μηνιαίως για αποταμίευση, για το κάθε τέκνο σας;</label>
                <select class="form-select " id="quest13" style="background-color: lightgray;">
                    <option value="50€">50€</option>
                    <option value="100€">100€</option>
                    <option value="200€">200€</option>
                </select>
            </div>


            <div class="py-2">
                <label>Πώς θα επιθυμούσατε να επικοινωνήσουμε μαζί σας; *</label>
                <select class="form-select " id="quest14" style="background-color: lightgray;">
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


            <div class="py-2">
                <button class="btn btn-danger" id="submitform">Υποβολή Φόρμας</button>

            </div>




            <div class=" d-flex  fs-4 px-2 justify-content-between  daybutton  " data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <p class=" d-flex py-2 ">* Όροι GDPR </p> <i class="  py-3  align-middle fa-solid fa-down-long  fa-xs"></i>
            </div>

            <div class="col-12 my-3">
                <div class="row">
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 p-4  ">

                                    <p class="text-center"> <b> ΕΝΗΜΕΡΩΣΗ ΓΙΑ ΤΗΝ ΕΠΕΞΕΡΓΑΣΙΑ ΠΡΟΣΩΠΙΚΩΝ ΔΕΔΟΜΕΝΩΝ </b> </p>

                                    <p>
                                        από την εταιρία «GREEK INSURANCE LEADERS» που έχουν την ευθύνη και εκτελούν την επεξεργασία & ΔΗΛΩΣΗ ΣΥΝΑΙΝΕΣΗΣ ΑΤΟΜΩΝ που είναι υποκείμενα των δεδομένων σύμφωνα με τον Γενικό Κανονισμό Δεδομένων Ε.Ε. 2016/679
                                    </p>

                                    <br>
                                    <b> I. Γιατί θα επεξεργαστείτε τα Δεδομένα Προσωπικού Χαρακτήρα (ΔΠΧ)1 και τα Ειδικής Κατηγορίας Δεδομένα Προσωπικού Χαρακτήρα (ΕΚΔΠΧ)2 μου;</b>
                                    <ul>

                                        <li> • Για να λάβετε προσφορές που αφορούν την κάλυψη των ασφαλιστικών σας αναγκών, είναι απαραίτητο να μας δοθούν από εσάς, τουλάχιστον τα εξής δεδομένα: ΟΝΟΜΑΤΕΠΩΝΥΜΟ, ΤΗΛΕΦΩΝΟ, E-MAIL, Τ.Κ. Κατοικίας, Ημερομηνία Γέννησης, καθώς και άλλα στοιχεία που αφορούν τη διερεύνηση των ασφαλιστικών σας αναγκών. </li>



                                        <li> • Για να αιτηθείτε συνεργασίας στην εταιρία μας, είναι απαραίτητο να δοθεί από εσάς το πλήρες βιογραφικό σας, καθώς και τα στοιχεία επικοινωνίας σας. </li>


                                        <li>
                                            • Εμείς, βάσει των πληροφοριών/δεδομένων αυτών, θα εξετάσουμε αν και με ποιόν τρόπο θα σας παρέχουμε τις κατάλληλες προσφορές, με στόχο την πληρέστερη κάλυψη των αναγκών σας αυτών καθώς επίσης και των εξαρτημένων σας προσώπων. </li>

                                        <li> • Τα στοιχεία αυτά είναι αντικειμενικά ουσιώδη για την αξιολόγηση του ασφαλιστικού κινδύνου. Η σωστή και ολοκληρωμένη πληροφόρηση για τα στοιχεία που σας ρωτάμε και στα οποία βασιζόμαστε απόλυτα, αποτελεί υποχρέωσή σας από τον ασφαλιστικό νόμο (N. 2496/1997) προκειμένου να μπορέσουμε να σας εντάξουμε στην κατάλληλη ομάδα κινδύνου και να υπολογίσουμε σωστά το ασφάλιστρο που υποχρεούστε εσείς να πληρώνετε τόσο για τη δική σας κάλυψή, όσο και για την κάλυψη τυχόν εξαρτημένων προσώπων.</li>

                                        <li> • Για όσο χρόνο θα παραμένει σε ισχύ η επικοινωνία μας, θα επεξεργαζόμαστε τόσο τα δικά σας δεδομένα, όσο και αυτά των τυχόν εξαρτημένων από εσάς προσώπων, τα οποία είναι απαραίτητα, με βάση τη ρητή συγκατάθεση που εσείς μας χορηγείτε, μέσω του εντύπου συγκατάθεσης που ακολουθεί.</li>

                                    </ul>
                                    <br>

                                    <b> Σε τι είδους επεξεργασία των δεδομένων μου θα προβείτε;</b>

                                    <ul>
                                        <li> • Αφού λάβουμε τα απαραίτητα για την ασφάλιση προσωπικά δεδομένα σας, θα προβούμε, για τους λόγους που προαναφέραμε, σε κάθε πράξη ή σειρά πράξεων επεξεργασίας των δεδομένων σας και με τη βοήθεια αυτοματοποιημένων μέσων όπως π.χ. συλλογή, καταχώρηση, οργάνωση, διόρθωση, αποθήκευση, προσαρμογή, μεταβολή, ανάκτηση, αναζήτηση πληροφοριών.</li>

                                        <li> • Σε ορισμένες περιπτώσεις (που αφορούν τους Κλάδους Ασφάλισης Υγείας και Ατυχημάτων) κάνουμε χρήση και αυτοματοποιημένων μέσων στο στάδιο της ανάληψης του κινδύνου. Μέσω αυτών των αυτοματοποιημένων μέσων, στα οποία έχουν ενσωματωθεί σε μεγάλο βαθμό οι κανόνες ανάληψης κινδύνων που εφαρμόζουμε (για τους παραπάνω Κλάδους ασφάλισης), μας επιτρέπεται να λαμβάνουμε αποφάσεις πιο σύντομα, με μεγαλύτερη ακρίβεια, διαφάνεια και συνέπεια.</li>

                                        <li> • Στα πλαίσια προστασίας των εννόμων συμφερόντων μας, πραγματοποιούμε συχνά ελέγχους, μέσω πιστοποιημένων αυτοματοποιημένων μέσων, για λόγους αποτροπής απάτης σε βάρος μας. </li>

                                    </ul>

                                    <p>
                                        <b>
                                            1. Κάθε πληροφορία που αφορά ταυτοποιημένο ή ταυτοποιήσιμο φυσικό πρόσωπο («υποκείμενο των δεδομένων») όπως αναγνωριστικό στοιχείο ταυτότητας [όνομα, αριθμό ταυτότητας, σωματική, φυσιολογική, ψυχολογική, οικονομική, πολιτιστική ή κοινωνική ταυτότητα του φυσικού προσώπου (Άρθρο 4 Κανονισμού ΕΕ 2016/679)].</b>
                                    </p>



                                    <p>
                                        <b> 2. Πρόκειται για δεδομένα που αφορούν ενδεικτικά την υγεία, καθώς και την φυλετική ή εθνοτική καταγωγή κ.λπ. (Άρθρο 9 Κανονισμού ΕΕ 2016/679). </b>
                                    </p>

                                    <b> Για πόσο χρόνο θα κρατάτε τα δεδομένα μου σε αρχείο;</b>

                                    <p> Θα κρατήσουμε τα δεδομένα σας για όσο χρόνο θα διατηρείτε συμβατική σχέση μαζί μας τόσο σε έγχαρτη, όσο και σε ηλεκτρονική μορφή. Σε περίπτωση που, για οποιονδήποτε λόγο, αυτή διακοπεί θα τα κρατήσουμε για όσο χρόνο ακόμα απαιτείται μέχρι να παρέλθει ο χρόνος παραγραφής τυχόν σχετικών αξιώσεων. </p>

                                    <b> IV Ποια δικαιώματα έχω για την επεξεργασία των δεδομένων μου; </b>

                                    <ul>


                                        <li> • Μπορείτε να ασκήσετε, κατά περίπτωση, τα εξής δικαιώματα: το δικαίωμα πρόσβασης (για να μάθετε ποια δεδομένα σας επεξεργαζόμαστε, για ποιο λόγο και τους αποδέκτες τους7), διόρθωσης (για να διορθωθούν τυχόν ελλείψεις ή ανακρίβειες των δεδομένων σας8), διαγραφής (δικαίωμα στη λήθη) (διαγραφή τους από τα αρχεία μας, εφόσον όμως η επεξεργασία τους δεν είναι πλέον απαραίτητη9) περιορισμού της επεξεργασίας (σε περίπτωση αμφισβήτησης της ακρίβειας των δεδομένων κ.λπ10.) φορητότητας (να λάβετε τα δεδομένα σας σε δομημένο και κοινώς χρησιμοποιούμενο μορφότυπο)11. </li>


                                        <li> • Τα δικαιώματα αυτά ασκούνται χωρίς κόστος για σας, με την αποστολή σχετικής επιστολής ή e-mail στον Υπεύθυνο Προστασίας Δεδομένων, εκτός αν επαναλαμβάνονται συχνά και λόγω όγκου έχουν για εμάς διοικητικό κόστος, οπότε θα επιβαρυνθείτε με το σχετικό κόστος. </li>

                                        <li>• Εφόσον ασκήσετε οποιαδήποτε από τα δικαιώματά σας αυτά, θα λάβουμε κάθε δυνατό μέτρο για την ικανοποίηση του αιτήματός σας εντός τριάντα (30) ημερών από τη λήψη του σχετικού αιτήματος, αφού σας ενημερώσουμε είτε για την ικανοποίησή του, είτε για τους αντικειμενικούς λόγους που εμποδίζουν την ικανοποίησή του.</li>

                                    </ul>

                                    <b> V Πώς διασφαλίζετε την ασφάλεια των δεδομένων μου;</b>

                                    <p> Η ασφάλεια των δεδομένων σας είναι για μας απόλυτη δέσμευση. Για να το πετύχουμε αυτό, εφαρμόζουμε όλα τα σύγχρονα και κατάλληλα για τους σκοπούς της επεξεργασίας τεχνικά (ενδεικτικά, κρυπτογράφηση, ανωνυμοποίηση) και οργανωτικά μέτρα, την ανταπόκριση των οποίων ελέγχουμε ανά τακτά χρονικά διαστήματα.</p>

                                    <b> Πού θα διαβιβάσετε τα δεδομένα μου; </b>

                                    <p> Τα δεδομένα σας, ενδέχεται να διαβιβαστούν και να καταστούν προσιτά και από νομικά πρόσωπα ή/και φυσικά πρόσωπα με τα οποία, κατά καιρούς, διατηρούμε συμβάσεις, εμείς ή η Εταιρία που συνεργαζόμαστε αποκλειστικά. </p>

                                    <ul>


                                        <li> 3 Ν.3691/2008, Αποφ.ΕΠΕΙΑ 154/2009, Οδηγία 2015/849 ΕΕ. </li>
                                        <li> 4 Νόμος 4170/2013, Οδηγία του Συμβουλίου 20011/16 ΕΕ,</li>
                                        <li> 5 Common Reporting Standards-CRS </li>
                                        <li> 6 Νόμος 4493/2017 Μνημόνιο Συνεργασίας μεταξύ της Ελληνικής Κυβέρνησης και της Κυβέρνησης των Η.Π.Α. </li>
                                        <li> 7 Άρθρο 15 Κανονισμού ΕΕ 2016/679 </li>
                                        <li> 8 Άρθρο 16 Κανονισμού ΕΕ 2016/679</li>
                                        <li> 9 Άρθρο 17 Κανονισμού ΕΕ 2016/679 </li>
                                        <li> 10 Άρθρο 18 Κανονισμού ΕΕ 2016/679 </li>
                                        <li> 10 Άρθρο 18 Κανονισμού ΕΕ 2016/679 </li>
                                        <li> 11 Άρθρο 20 Κανονισμού ΕΕ 2016/679 </li>

                                    </ul>


                                    <b> Πώς μπορώ να υποβάλλω καταγγελία/διαμαρτυρία;</b>

                                    <ul>
                                        <li> Για οποιοδήποτε θέμα αφορά την επεξεργασία των δεδομένων σας μπορείτε να απευθύνεστε στο email gil@gileaders.gr</li>

                                        <li> Επίσης, διατηρείτε πάντα το δικαίωμα να απευθυνθείτε στην Αρχή Προστασίας Δεδομένων Προσωπικού Χαρακτήρα, η οποία μπορεί να δεχθεί και την υποβολή σχετικών παραπόνων είτε σε γραπτή μορφή στο πρωτόκολλό της (Κηφισίας 1-3, Τ.Κ. 115 23, Αθήνα) είτε ηλεκτρονικά (www.dpa.gr).</li>
                                    </ul>

                                    <b> ΔΗΛΩΣΗ ΣΥΝΑΙΝΕΣΗΣ ΓΙΑ ΤΗΝ ΕΠΕΞΕΡΓΑΣΙΑ ΤΩΝ ΔΕΔΟΜΕΝΩΝ ΠΡΟΣΩΠΙΚΟY ΧΑΡΑΚΤΗΡΑ (ΔΠΧ) ΚΑΙ ΕΙΔΙΚHΣ ΚΑΤΗΓΟΡIΑΣ ΔΕΔΟΜEΝΩΝ ΠΡΟΣΩΠΙΚOY ΧΑΡΑΚΤΗΡΑ (ΕΚΔΠΧ) </b>

                                    <b>
                                        Δηλώνω ότι:
                                    </b>

                                    <ul>

                                        <li> <b> Διάβασα </b> το Ενημερωτικό για την Επεξεργασία των Προσωπικών Δεδομένων της εταιρίας “Greek Insurance Leaders”</li>
                                        <li> <b> Ενημερώθηκα </b> για την επεξεργασία των ΔΠΧ και ΕΚΠΔΧ που θα πραγματοποιηθούν</li>
                                        <li> <b> Ενημερώθηκα </b> για τα δικαιώματα που έχω και διατηρώ ως υποκείμενο των δεδομένων (δηλ., πρόσβασης, διόρθωσης, διαγραφής, περιορισμού του σκοπού, φορητότητας και εναντίωσης).</li>
                                        <li> <b> Παρέχω τη ρητή συγκατάθεσή μου </b> (Άρθρο 7 του Κανονισμού ΕΕ 2016/679) στην εταιρία “Greek Insurance Leaders”</li>

                                        <li> <b> 1. Για την επεξεργασία των ΔΠΧ και ΕΚΔΠΧ, καθώς και οποιονδήποτε άλλων έρθουν σε γνώση τους στο μέλλον και έχουν σχέση με την όλη λειτουργία της δημιουργίας προσφοράς για την κάλυψη ασφαλιστικών αναγκών. </b></li>

                                        <li> <b> 2. Για την τήρηση αρχείων με όλα τα παραπάνω δεδομένα σε ηλεκτρονική ή άλλη μορφή. </b> </li>

                                        <li> Αναγνωρίζω ότι η επεξεργασία των ΔΠΧ και ΕΚΠΔΧ που αφορούν τόσο εμένα, όσο και τα τυχόν εξαρτημένα πρόσωπα, είναι και παραμένει απολύτως αναγκαία.</li>



                                    </ul>


                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



</div>



<script src="../jsforms/child.js"></script>


<?php
include_once 'serv_footer.php';
?>

