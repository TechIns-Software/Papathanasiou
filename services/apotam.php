<?php
$title = "Ασφάλεια Αποταμίευσης | G.I.L";
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
            <h3> Ασφάλεια Αποταμίευσης</h3>
            <hr style="border: 2px solid blue;">

            <div class="py-2">
                <label>Διεύθυνση ηλεκτρονικού ταχυδρομείου *</label>
                <input type="email" class="form-control" style="background-color: lightgray;" id="email">
            </div>

            <div class="py-2">

                <label>Ονοματεπώνυμο * </label>
                <input type="text" class="form-control" style="background-color: lightgray;" id="name">
            </div>



            <div class="py-2">
                <label>Το τηλέφωνό σας είναι : </label>
                <input class="form-control " type="text" id="phone" style="background-color: lightgray;">
            </div>

            <div class="py-2">
                <label>Ποιά είναι η ημερομηνία γέννησής σας; *</label>
                <input class="form-control " type="date" id="date_birth" style="background-color: lightgray;">
            </div>



            <div class="py-2">
                <label>Σε ποιά περιφέρεια της Ελλάδας μένετε;*</label>
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
                <label>Εώς σήμερα, πως έχετε φροντίσει για την αποταμίευση χρημάτων για το μέλλον σας και για το μέλλον της οικογένειάς σας;</label>
                <input class="form-control " type="text" id="quest2" style="background-color: lightgray;">
            </div>



            <div class="py-2">
                <label>Γνωρίζετε πώς και πόσο θα επηρεάσουν το επίπεδο ζωης σας οι αλλαγές που φέρνουν οι ασφαλιστικές μεταρρυθμίσεις;</label>
                <select style="background-color: lightgray;" class="form-select " id="quest3">
                    <option value="Ναι, γνωρίζω">Ναι, γνωρίζω</option>
                    <option value="Όχι, δεν γνωρίζω">Όχι, δεν γνωρίζω</option>
                    <option value="Δεν είμαι σίγουρος/η">Δεν είμαι σίγουρος/η</option>
                </select>
            </div>


            <div class="py-2">
                <label>Πώς σκοπεύετε να αναπληρώσετε το εισόδημά σας κατά τη συνταξιοδότησή σας;</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Διαθέσιμες Αποταμιεύσεις" id="check1">
                    <label class="form-check-label">
                        Διαθέσιμες Αποταμιεύσεις
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Ρευστοποίηση Επενδύσεων" id="check2">
                    <label class="form-check-label">
                        Ρευστοποίηση Επενδύσεων
                    </label>
                </div>


                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Πώληση Ακινήτων" id="check3">
                    <label class="form-check-label">
                        Πώληση Ακινήτων
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Ιδιωτικό συνταξιοδοτικό πρόγραμμα" id="check4">
                    <label class="form-check-label">
                        Ιδιωτικό συνταξιοδοτικό πρόγραμμα
                    </label>
                </div>



                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Δεν γνωρίζω" id="check5">
                    <label class="form-check-label">
                        Δεν γνωρίζω
                    </label>
                </div>


                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Αλλο" id="check6">
                    <label class="form-check-label">
                        Αλλο
                    </label>
                    <input class="form-control" type="text" id="check6answer" disabled style="background-color: lightgray;">
                </div>
            </div>


            <div class="py-2">
                <label>Τι ποσό μπορείτε να διαθέσετε μηνιαίως; *</label>
                <select class="form-select " id="quest4" style="background-color: lightgray;">
                    <option value="0-50€">0-50€ </option>
                    <option value="51-100€">51-100€</option>
                    <option value="101-150€">101-150€</option>
                    <option value="Περισσότερο από 150€">Περισσότερο από 150€</option>

                </select>
            </div>


            <div class="py-2">
                <label>Πόσα χρόνια σκοπεύετε να αποταμιεύσετε τα χρήματά σας; *</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="5 έτη" name="amounts" id="radio1">
                    <label class="form-check-label">
                        5 έτη
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="10 έτη" name="amounts" id="radio2">
                    <label class="form-check-label">
                        10 έτη
                    </label>
                </div>


                <div class="form-check">
                    <input class="form-check-input" type="radio" value="20 έτη" name="amounts" id="radio3">
                    <label class="form-check-label">
                        20 έτη
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" value="30 έτη" name="amounts" id="radio4">
                    <label class="form-check-label">
                        30 έτη
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" value="Αλλο" name="amounts" id="radio5">
                    <label class="form-check-label">
                        Αλλο
                    </label>
                    <input class="form-control " type="text" id="amountanswer" disabled style="background-color: lightgray;">
                </div>
            </div>



            <div class="py-2">
                <label>Θα θέλατε να σχεδιάσουμε μαζί ένα πρόγραμμα αποταμίευσης με επενδυτικό χαρακτήρα;</label>
                <select class="form-select " id="quest5" style="background-color: lightgray;">
                    <option value="Ναι">Ναι</option>
                    <option value="Όχι">Όχι</option>
                </select>
            </div>


            <div class="py-2">
                <label>Πόσο καλά γνωρίζετε τις ομολογιακές επενδύσεις;</label>
                <select class="form-select " id="quest6" style="background-color: lightgray;">
                    <option value="Πολύ Καλά">Πολύ Καλά</option>
                    <option value="Αρκετά Καλά">Αρκετά Καλά</option>
                    <option value="Λίγο">Λίγο</option>
                    <option value="Καθόλου">Καθόλου</option>
                </select>
            </div>


            <div class="py-2">
                <label>Πόσο καλά γνωρίζετε τις μετοχικές επενδύσεις;</label>
                <select class="form-select " id="quest7" style="background-color: lightgray;">
                    <option value="Πολύ Καλά">Πολύ Καλά</option>
                    <option value="Αρκετά Καλά">Αρκετά Καλά</option>
                    <option value="Λίγο">Λίγο</option>
                    <option value="Καθόλου">Καθόλου</option>
                </select>
            </div>

            <div class="py-2">
                <label>Πώς θα χαρακτηρίζατε την επενδυτική σας εμπειρία συνολικά(ομολογιακές ή και μετοχικές τοποθετήσεις) έως σήμερα;</label>
                <select class="form-select " id="quest8" style="background-color: lightgray;">
                    <option value="Θετική">Θετική</option>
                    <option value="Ουδέτερη">Ουδέτερη</option>
                    <option value="Αρνητική">Αρνητική</option>
                    <option value="Δεν έχω μεγάλη εμπειρία έως σήμερα">Δεν έχω μεγάλη εμπειρία έως σήμερα</option>
                </select>
            </div>

            <div class="py-2">
                <label>Σε ποιο βαθμό τα έσοδα σας καλύπτουν τα έξοδά σας:</label>
                <select class="form-select " id="quest9" style="background-color: lightgray;">
                    <option value="Iκανοποιητικά">Iκανοποιητικά</option>
                    <option value="Οριακά">Οριακά</option>
                    <option value="Δεν Καλύπτουν">Δεν Καλύπτουν</option>
                </select>
            </div>

            <div class="py-2">
                <label>Θα επιθυμούσατε να σχεδιάσουμε ένα απόταμιευτικό πρόγραμμα σε συνδυασμό με ασφάλεια ζωής;</label>
                <select class="form-select " id="quest10" style="background-color: lightgray;">
                    <option value="Ναι">Ναι</option>
                    <option value="Όχι">Όχι</option>
                    <option value="Ίσως">Ίσως</option>
                </select>
            </div>

            <div class="py-2">
                <label>Αν ναι, σας ενδιαφέρουν συμπληρωματικές καλύψεις όπως:</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Μόνιμη Ολική Ανικανότητα" id="amount1">
                    <label class="form-check-label">
                        Μόνιμη Ολική Ανικανότητα
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Κάλυψη Ασθένειας ή Ατυχήματος μετά την 7η ή 14η ημέρα που δεν μπορώ να εργαστώ" id="amount2">
                    <label class="form-check-label">
                        Κάλυψη Ασθένειας ή Ατυχήματος μετά την 7η ή 14η ημέρα που δεν μπορώ να εργαστώ
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Κάλυψη Μερικής Ανικάνοτητας" id="amount3">
                    <label class="form-check-label">
                        Κάλυψη Μερικής Ανικάνοτητας
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Καμία από τις παραπάνω" id="amount4">
                    <label class="form-check-label">
                        Καμία από τις παραπάνω
                    </label>
                </div>

            </div>


            <div class="py-2">
                <label>Πώς θα επιθυμούσατε να επικοινωνήσουμε μαζί σας; *</label>
                <select class="form-select " id="quest12" style="background-color: lightgray;">
                    <option value="Τηλεφωνικά">Τηλεφωνικά </option>
                    <option value="Μέσω e-mail">Μέσω e-mail</option>
                </select>
            </div>



            <div class="py-2">
                <label>* Έχω ενημερωθεί για την επεξεργασία των προσωπικών μου δεδομένων και συναινώ σε αυτήν, όπως ειδικά ορίζεται στο κεφάλαιο "Όροι GDPR" (βλέπε κάτω μέρος σελίδας)</label>
                <input class=" form-check" type="checkbox" id="gdpr">

            </div>

            <div class="py-2">
                <label>Επιθυμώ να ενημερώνομαι για μελλοντικές προωθητικές ενέργειες που αφορούν σε προϊόντα και υπηρεσίες της Greek Insurance Leaders</label>
                <input class=" form-check" type="checkbox" id="newsletter">
            </div>

            <p class="text-muted"> Ένα αντίγραφο των απαντήσεών σας θα σταλεί μέσω ηλεκτρονικού ταχυδρομείου στη διεύθυνση που παρείχατε</p>


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




<script src="../jsforms/apotam.js"></script>

<?php
include_once 'serv_footer.php';
?>