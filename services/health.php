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

        <img src="../assets/img/logo1.png" class="img-fluid mx-auto text-center" alt="logo">
    </div>
</section>

<div class="container formcont">
    <div class="row">
        <div class="col-md-12 offset-md-12 ">
            <!-- <h3>Προσφορά Ασφάλισης Υγείας</h3>
            <hr style="border: 2px solid blue;"> -->

            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeF8OL86cETw1M3bvk_ufoclxbBUVjetsF_zefJwX6RJ-f7MQ/viewform?embedded=true" width="100%" height="5466" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>

            <!-- <form action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSeF8OL86cETw1M3bvk_ufoclxbBUVjetsF_zefJwX6RJ-f7MQ/formResponse">
                <div class="py-2">
                    <label>Διεύθυνση ηλεκτρονικού ταχυδρομείου <span style="color: red;"> * </span></label>
                    <input type="email" class="form-control" name="emailAddress" style="background-color: lightgray;" id="email">
                </div>

                <div class="py-2">

                    <label>Το ονοματεπώνυμό σας </label>
                    <input type="text" class="form-control" style="background-color: lightgray;" id="name">
                </div>



                <div class="py-2">

                    <label>Ημερομηνία γέννησης (εάν η προσφορά αφορά τον υιό/ την κόρη σας, πληκτρολογήστε τη δικιά του/της ημερομηνία γέννησης) <span style="color: red;"> * </span></label>
                    <input type="text" class="form-control"  style="background-color: lightgray;" id="date_birth">
                </div>

                <div class="py-2">

                    <label>Ζείτε στο Νομό; <span style="color: red;"> * </span></label>
                    <input type="text" class="form-control" style="background-color: lightgray;" id="loc">
                </div>



                <div class="py-2">
                    <label>Η προσφορά Υγείας είναι: <span style="color: red;"> * </span></label>
                    <select style="background-color: lightgray;"  class="form-select" id="offerfor">
                        <option value="Για εσάς μόνο ή για κάποιο άλλο μέλος της οικογένειάς σας ">Για εσάς μόνο ή για κάποιο άλλο μέλος της οικογένειάς σας </option>
                        <option value="Για εσάς και τον/την σύντροφό σας">Για εσάς και τον/την σύντροφό σας</option>
                        <option value="Για εσάς και δύο ακόμα μέλη της οικογένειας σας">Για εσάς και δύο ακόμα μέλη της οικογένειας σας</option>
                        <option value="Για την τετραμελή οικογένειά σας"> Για την τετραμελή οικογένειά σας</option>
                        <option value="Για την πενταμελή οικογένειά σας"> Για την πενταμελή οικογένειά σας</option>
                        <option value="Για την ακόμα μεγαλύτερη οικογένειά σας"> Για την ακόμα μεγαλύτερη οικογένειά σας</option>
                    </select>
                </div>

                <div class="py-2">
                    <label> Το ονοματεπώνυμο και η ημερομηνία γέννησης του/της/των μελών που θέλετε να λάβετε πρόταση ασφάλισης είναι:</label>
                    <input type="text" class="form-control my-1" id="familyinfo" style="background-color: lightgray;" placeholder="Γονέας 1">
                    <input type="text" class="form-control my-1" id="familyinfo_1" style="background-color: lightgray;" placeholder="Γονέας 2">
                    <input type="text" class="form-control my-1" id="familyinfo_2" style="background-color: lightgray;" placeholder="Παιδί 1">
                    <input type="text" class="form-control my-1" id="familyinfo_3" style="background-color: lightgray;" placeholder="Παιδί 2">
                    <input type="text" class="form-control my-1" id="familyinfo_4" style="background-color: lightgray;" placeholder="Παιδί 3">
                </div>



                <div class="py-2">
                    <label>Ποιο είναι το ποσό που θα σας έκανε να αισθανθείτε ασφαλής, εφόσον υπήρχε διαθέσιμο μόνο για επείγουσες περιπτώσεις ΥΓΕΙΑΣ για το κάθε μέλος της οικογένειάς σας ξεχωριστά :</label>
                    <select style="background-color: lightgray;"  class="form-select " id="safeamount">
                        <option value="€ 20.000"> € 20.000 </option>
                        <option value="€ 50.000">€ 50.000</option>
                        <option value="€ 100.000">€ 100.000</option>
                        <option value="€ 300.000"> € 300.000</option>
                        <option value="€ 500.000">€ 500.000</option>
                        <option value="€ 1.000.000"> € 1.000.000</option>
                    </select>
                </div>


                <div class="py-2">
                    <label>Ποια είναι η Ιδιωτική Κλινική που θα επιλέγατε σε περίπτωση νοσηλείας ή επέμβασης ; </label>
                    <select style="background-color: lightgray;" class="form-select" id="safehospital">
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
                    <label>Δικαιούστε κοινωνική ασφάλιση; (ΕΟΠΥΥ/ΕΦΚΑ); </label>
                    <select class="form-select " id="koinasfalia" style="background-color: lightgray;">
                        <option value="Ναι">Ναι</option>
                        <option value="Όχι">Όχι</option>
                    </select>
                </div>


                <div class="py-2">
                    <label>Θα προτιμούσατε να πληρώνετε λιγότερα στην Ασφαλιστική εταιρία, αλλά να συμμετέχετε στην περίπτωση νοσηλείας; </label>
                    <select class="form-select " id="quest1"  style="background-color: lightgray;">
                        <option value="Ναι">Ναι</option>
                        <option value="Όχι">Όχι</option>
                    </select>
                </div>


                <div class="py-2">
                    <label>Θα θέλατε να συμμετέχετε σε περίπτωση νοσηλείας με το ποσό ή το ποσοστό; </label>
                    <select class="form-select " id="quest2"  style="background-color: lightgray;">
                        <option value="0€">0€ </option>
                        <option value="500€">500€</option>
                        <option value="1500€">1500€</option>
                        <option value="2000€">2000€</option>
                        <option value="20%">20%</option>
                    </select>
                </div>


                <div class="py-2">
                    <label>Θα σας ενδιέφερε να μπορείτε να επισκεφτείτε Ιατρούς και Διαγνωστικά Κέντρα πληρώνοντας μόνο μία μικρή συμμετοχή;</label>
                    <select class="form-select " id="quest3" style="background-color: lightgray;">
                        <option value="Ναι">Ναι</option>
                        <option value="Όχι">Όχι</option>
                    </select>
                </div>




                <div class="py-2">
                    <label>Σας ενδιαφέρει η νοσηλεία εκτός Ευρώπης;</label>
                    <select class="form-select " id="quest4"  style="background-color: lightgray;">
                    <option value="Ναι">Ναι</option>
                    <option value="Όχι">Όχι</option>
                    </select>
                </div>


                <div class="py-2">
                    <label>Σας ενδιαφέρει η αποκατάσταση μετά από μεγάλες επεμβάσεις;</label>
                    <select class="form-select " id="quest5"  style="background-color: lightgray;">
                    <option value="Ναι">Ναι</option>
                    <option value="Όχι">Όχι</option>
                    </select>
                </div>



                <div class="py-2">
                    <label>Ποιο είναι το ποσό που είστε διατεθιμένοι να διαθέσετε μηνιαίως για την ασφάλιση Υγείας;</label>
                    <select class="form-select " id="quest6"  style="background-color: lightgray;">
                        <option value="€ 20">€ 20</option>
                        <option value="€ 50">€ 50</option>
                        <option value="€ 100">€ 100</option>
                        <option value="€ 150">€ 150</option>
                        <option value="Περισσότερο">Περισσότερο</option>
                        <option value="Δεν έχω ιδέα!">Δεν έχω ιδέα!</option>
                    </select>
                </div>


                <div class="py-2">
                    <label>Ονοματεπώνυμο <span style="color: red;"> * </span></label>
                    <input class="form-control " type="text" id="fullname" style="background-color: lightgray;">
                </div>

                <div class="py-2">
                    <label>Τηλέφωνο <span style="color: red;"> * </span></label>
                    <input class="form-control " type="text"  id="phone" style="background-color: lightgray;">
                </div>

                <div class="py-2">
                    <label>Πως μας βρήκατε; </label>
                    <input class="form-control " type="text"  id="findhow" style="background-color: lightgray;">
                </div>

                <div class="py-2">
                    <label>Επικοινωνήσατε ήδη με κάποιο Συνεργάτη;</label>
                    <input class="form-control " type="text"  id="synergathepikinonia" style="background-color: lightgray;">
                </div>




                <div class="py-2">
                    <label>Πότε επιθυμείτε να επικοινωνήσουμε μαζί σας τηλεφωνικά; <span style="color: red;"> * </span></label>
                    <input class="form-control" style="background-color: lightgray;" type="datetime-local" id="meeting-time" name="meeting-time" value="<?php echo $today; ?>" min="<?php echo $today; ?>" max="<?php echo $nextyeartoday; ?>">
                </div>



                <div class="py-2">
                    <label>Έχω ενημερωθεί για την επεξεργασία των προσωπικών μου δεδομένων και συναινώ σε αυτήν, όπως ειδικά ορίζεται στο κεφάλαιο "Όροι GDPR" (βλέπε κάτω μέρος σελίδας) <span style="color: red;"> * </span></label>
                    <input class=" form-check" type="checkbox" id="gdpr">

                </div>



                <div class="py-2">
                    <label>Επιθυμώ να ενημερώνομαι για μελλοντικές προωθητικές ενέργειες που αφορούν σε προϊόντα και υπηρεσίες της Greek Insurance Leaders</label>
                    <input class=" form-check" type="checkbox"  id="newsletter">
                </div>

                <p class="text-muted"> Ένα αντίγραφο των απαντήσεών σας θα σταλεί μέσω ηλεκτρονικού ταχυδρομείου στη διεύθυνση που παρείχατε.</p>


                <div class="py-2">
                    <button class="btn btn-danger" id="submitform">Υποβολή Φόρμας</button>

                </div>


            </form> -->

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




<!-- <script src="../jsforms/health.js"></script> -->

<?php
include_once 'serv_footer.php';
?>