<?php
$title = "Ασφάλισης Υγείας | G.I.L";
include_once 'serv_header.php';

$todayyear=date('Y');
$todaymonth=date('m');
$todayday=date('d');


 $today=$todayyear.'-'.$todaymonth.'-'.$todayday.'T00:00';
 $nextyeartoday=($todayyear+1).'-'.$todaymonth.'-'.$todayday.'T00:00';
?>
<section>
    <div class="container">
        <div class="section-title  ">
            <h2>Ασφάλισης Υγείας</h2>
        </div>
        <p class="px-5  mx-5">Η INTERAMERICAN μέσω των προγραμμάτων Υγείας BeWell σας δίνει τη δυνατότητα να δημιουργήσετε τη δική σας πρόταση ασφάλισης, προσαρμοσμένη στις δικές σας ανάγκες, αλλά και στις δικές σας οικονομικές δυνατότητες</p>
    </div>
</section>


<div class="container-fluid formbg">

    <div class="container-fluid text-center d-flex w-50 justify-content-center  ">
        <div>
            <h2> Προσφορά Ασφάλισης Υγείας </h2>
            <div class="card my-3">
                <div class="card-body">
                    <p class="text-center"><strong>Διεύθυνση ηλεκτρονικού ταχυδρομείου</strong></p>
                    <div class="form-check mb-2 ">
                        <input class="form-control" type="email" name="email" id="email" />
                    </div>
                </div>
            </div>


            <div class="card my-3">
                <div class="card-body">
                    <p class="text-center"><strong>Το ονοματεπώνυμό σας</strong></p>
                    <div class="form-check mb-2 ">
                        <input class="form-control" type="email" name="email" id="email" />
                    </div>
                </div>
            </div>

            <div class="card my-3">
                <div class="card-body">
                    <p class="text-center"><strong>Ημερομηνία Γέννησης (εάν η προσφορά αφορά τον υιό/ την κόρη σας, πληκτρολογήστε τη δικιά του/της ημερομηνία γέννησης) </strong></p>
                    <div class="form-check mb-2 ">
                        <input class="form-control" type="date" name="email" id="email" />
                    </div>
                </div>
            </div>


            <div class="card my-3">
                <div class="card-body">
                    <p class="text-center"><strong>Ζείτε στο Νομό; * </strong></p>
                    <div class="form-check mb-2 ">
                        <input class="form-control" type="text" name="email" id="email" />
                    </div>
                </div>
            </div>


            <div class="card my-3 ">
                <div class="card-body">
                    <p class="text-center"><strong>Η προσφορά Υγείας είναι: :</strong></p>

                    <div class="form-check mb-2 ">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example1" />
                        <label class="form-check-label" for="radio2Example1">
                            Για εσάς μόνο ή για κάποιο άλλο μέλος της οικογένειάς σας
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example2" />
                        <label class="form-check-label" for="radio2Example2">
                            Για εσάς και τον/την σύντροφό σας
                        </label>
                    </div>

                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example4" />
                        <label class="form-check-label" for="radio2Example4">
                            Για εσάς και δύο ακόμα μέλη της οικογένειας σας
                        </label>
                    </div>


                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example4" />
                        <label class="form-check-label" for="radio2Example4">
                            Για την τετραμελή οικογένειά σας
                        </label>
                    </div>

                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example4" />
                        <label class="form-check-label" for="radio2Example4">
                            Για την πενταμελή οικογένειά σας
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example4" />
                        <label class="form-check-label" for="radio2Example4">
                            Για την ακόμα μεγαλύτερη οικογένειά σας
                        </label>
                    </div>
                </div>

            </div>


            <div class="card my-3">
                <div class="card-body">
                    <p class="text-center"><strong>Το ονοματεπώνυμο και η ημερομηνία γέννησης του/της/των μελών που θέλετε να λάβετε πρόταση ασφάλισης είναι:</strong></p>
                    <div class="form-check mb-2 ">
                        <input class="form-control" type="text" name="email" id="email" />
                    </div>
                </div>
            </div>


            <div class="card my-3 ">
                <div class="card-body">
                    <p class="text-center"><strong>Ποιο είναι το ποσό που θα σας έκανε να αισθανθείτε ασφαλής, εφόσον υπήρχε διαθέσιμο μόνο για επείγουσες περιπτώσεις ΥΓΕΙΑΣ για το κάθε μέλος της οικογένειάς σας ξεχωριστά : </strong></p>

                    <div class="form-check mb-2 ">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example1" />
                        <label class="form-check-label" for="radio2Example1">
                            € 20.000
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example2" />
                        <label class="form-check-label" for="radio2Example2">
                            € 50.000
                        </label>
                    </div>

                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example4" />
                        <label class="form-check-label" for="radio2Example4">
                            € 100.000
                        </label>
                    </div>


                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example4" />
                        <label class="form-check-label" for="radio2Example4">
                            € 300.000
                        </label>
                    </div>

                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example4" />
                        <label class="form-check-label" for="radio2Example4">
                            € 500.000
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example4" />
                        <label class="form-check-label" for="radio2Example4">
                            € 100.000.000
                        </label>
                    </div>
                </div>

            </div>


            <div class="card my-3 ">
                <div class="card-body">
                    <p class="text-center"><strong>Ποια είναι η Ιδιωτική Κλινική που θα επιλέγατε σε περίπτωση νοσηλείας ή επέμβασης ; </strong></p>

                    <select class="form-select  mb-2" aria-label="Default select example">
                        <option value="1">Metropolitan General Αθηνών</option>
                        <option value="2">Διαβαλκανικό Ιατρικό Κέντρο Θεσσαλονίκης</option>
                        <option value="3">Υγεία Αθηνών</option>
                        <option value="3">Ιασώ Αθηνών</option>
                        <option value="3">Aγιος Λουκάς Θεσσαλονίκης</option>
                        <option value="3">Αθηναϊκή Mediclinic</option>
                        <option value="3">Παιδιατρικό Κέντρο Αθηνών</option>
                        <option value="3">Γενική Κλινική Θεσσαλονίκης</option>
                        <option value="3">Ευρωκλινική Παίδων</option>
                        <option value="3">Κάποια άλλη κλινική</option>
                        <option selected value="3">Όλες παρέχουν την ίδια ποιότητα Υπηρεσιών</option>
                    </select>

                </div>

            </div>


            <div class="card my-3 ">
                <div class="card-body">
                    <p class="text-center"><strong>Δικαιούστε κοινωνική ασφάλιση; (ΕΟΠΥΥ/ΕΦΚΑ) </strong></p>

                    <div class="form-check mb-2 ">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example1" />
                        <label class="form-check-label" for="radio2Example1">
                            NAI
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example2" />
                        <label class="form-check-label" for="radio2Example2">
                            OXI
                        </label>
                    </div>

                </div>

            </div>


            <div class="card my-3 ">
                <div class="card-body">
                    <p class="text-center"><strong>Θα προτιμούσατε να πληρώνετε λιγότερα στην Ασφαλιστική εταιρία, αλλά να συμμετέχετε στην περίπτωση νοσηλείας; </strong></p>

                    <div class="form-check mb-2 ">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example1" />
                        <label class="form-check-label" for="radio2Example1">
                            NAI
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example2" />
                        <label class="form-check-label" for="radio2Example2">
                            OXI
                        </label>
                    </div>

                </div>

            </div>


            <div class="card my-3 ">
                <div class="card-body">
                    <p class="text-center"><strong>Θα θέλατε να συμμετέχετε σε περίπτωση νοσηλείας με το ποσό ή το ποσοστό; </strong></p>

                    <div class="form-check mb-2 ">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example1" />
                        <label class="form-check-label" for="radio2Example1">
                            0€
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example2" />
                        <label class="form-check-label" for="radio2Example2">
                            500€
                        </label>
                    </div>

                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example2" />
                        <label class="form-check-label" for="radio2Example2">
                            1500€
                        </label>
                    </div>


                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example2" />
                        <label class="form-check-label" for="radio2Example2">
                            2000€
                        </label>
                    </div>

                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example2" />
                        <label class="form-check-label" for="radio2Example2">
                            20%
                        </label>
                    </div>
                </div>
            </div>

            <div class="card my-3 ">
                <div class="card-body">
                    <p class="text-center"><strong>Θα σας ενδιέφερε να μπορείτε να επισκεφτείτε Ιατρούς και Διαγνωστικά Κέντρα πληρώνοντας μόνο μία μικρή συμμετοχή;</strong></p>

                    <div class="form-check mb-2 ">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example1" />
                        <label class="form-check-label" for="radio2Example1">
                            ΟΧΙ
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example2" />
                        <label class="form-check-label" for="radio2Example2">
                            ΝΑΙ
                        </label>
                    </div>

                </div>
            </div>


            <div class="card my-3 ">
                <div class="card-body">
                    <p class="text-center"><strong>Σας ενδιαφέρει η νοσηλεία εκτός Ευρώπης;</strong></p>

                    <div class="form-check mb-2 ">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example1" />
                        <label class="form-check-label" for="radio2Example1">
                            ΟΧΙ
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example2" />
                        <label class="form-check-label" for="radio2Example2">
                            ΝΑΙ
                        </label>
                    </div>

                </div>
            </div>

            
            <div class="card my-3 ">
                <div class="card-body">
                    <p class="text-center"><strong>Σας ενδιαφέρει η αποκατάσταση μετά από μεγάλες επεμβάσεις;</strong></p>

                    <div class="form-check mb-2 ">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example1" />
                        <label class="form-check-label" for="radio2Example1">
                            ΟΧΙ
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example2" />
                        <label class="form-check-label" for="radio2Example2">
                            ΝΑΙ
                        </label>
                    </div>

                </div>
            </div>

            <div class="card my-3 ">
                <div class="card-body">
                    <p class="text-center"><strong>Ποιο είναι το ποσό που είστε διατεθιμένοι να διαθέσετε μηνιαίως για την ασφάλιση Υγείας;</strong></p>

                    <div class="form-check mb-2 ">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example1" />
                        <label class="form-check-label" for="radio2Example1">
                        € 20
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example2" />
                        <label class="form-check-label" for="radio2Example2">
                        € 50
                        </label>
                    </div>

                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example2" />
                        <label class="form-check-label" for="radio2Example2">
                        € 100
                        </label>
                    </div>

                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example2" />
                        <label class="form-check-label" for="radio2Example2">
                        € 150
                        </label>
                    </div>

                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example2" />
                        <label class="form-check-label" for="radio2Example2">
                        Περισσότερο
                        </label>
                    </div>

                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example2" />
                        <label class="form-check-label" for="radio2Example2">
                        Δεν έχω ιδέα!
                        </label>
                    </div>

                </div>
            </div>


            <div class="card my-3">
                <div class="card-body">
                    <p class="text-center"><strong>Ονοματεπώνυμο </strong></p>
                    <div class="form-check mb-2 ">
                        <input class="form-control" type="text" name="email" id="email" />
                    </div>
                </div>
            </div>

            
            <div class="card my-3">
                <div class="card-body">
                    <p class="text-center"><strong>Τηλέφωνο  </strong></p>
                    <div class="form-check mb-2 ">
                        <input class="form-control" type="text" name="email" id="email" />
                    </div>
                </div>
            </div>

            <div class="card my-3">
                <div class="card-body">
                    <p class="text-center"><strong>Πως μας βρήκατε; </strong></p>
                    <div class="form-check mb-2 ">
                        <input class="form-control" type="text" name="email" id="email" />
                    </div>
                </div>
            </div>

            <div class="card my-3">
                <div class="card-body">
                    <p class="text-center"><strong>Πότε επιθυμείτε να επικοινωνήσουμε μαζί σας τηλεφωνικά; *</strong></p>
                    <div class="form-check mb-2 ">
                    <input type="datetime-local" id="meeting-time" name="meeting-time" value="<?php echo $today; ?>" min="<?php echo $today; ?>" max="<?php echo $nextyeartoday; ?>">
                    </div>
                </div>
            </div>



            <div class="card my-3">
                <div class="card-body">
                    <p class="text-center"><strong>Έχω ενημερωθεί για την επεξεργασία των προσωπικών μου δεδομένων και συναινώ σε αυτήν, όπως ειδικά ορίζεται στο κεφάλαιο "Όροι GDPR" (βλέπε κάτω μέρος σελίδας)</strong></p>
                    <div class="form-check mb-2 ">
                        <input type="checkbox" id="horns" name="horns">
                    </div>
                </div>
            </div>


            <div class="card my-3">
                <div class="card-body">
                    <p class="text-center"><strong>Επιθυμώ να ενημερώνομαι για μελλοντικές προωθητικές ενέργειες που αφορούν σε προϊόντα και υπηρεσίες της Greek Insurance Leaders</strong></p>
                    <div class="form-check mb-2 ">
                        <input type="checkbox" id="horns" name="horns">
                    </div>
                </div>
            </div>


            <div class="btn btn-primary  my-5">Υποβολή Φόρμας</div>


        </div>
    </div>

</div>

<?php
include_once 'serv_footer.php';
?>