<?php
$title = "Ασφάλιση Ταξιδίου | G.I.L";
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
            <h2>Ασφάλιση Ταξιδίου</h2>
        </div>
        <p class="px-5  mx-5">Ταξιδέψτε σε όλον τον κόσμο με ασφάλεια, καθώς η ταξιδιωτική ασφάλιση INTERAMERICAN σάς προσφέρει την ταξιδιωτική βοήθεια που χρειάζεστε σε κάθε σας ταξίδι. Σας εξασφαλίζει μια σειρά από ταξιδιωτικές καλύψεις για συνηθισμένα απρόοπτα, όπως η καθυστέρηση πτήσης, η απώλεια αποσκευών και εγγράφων ή η ακύρωση ενός προγραμματισμένου ταξιδιού
                     </p>
    </div>
</section>

<div class="container-fluid formbg">

    <div class="container-fluid text-center d-flex w-50 justify-content-center  ">
        <div>
            <h2> Προσφορά Ταξιδιωτικής Ασφάλισης</h2>
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
                    <p class="text-center"><strong>Ονοματεπώνυμο</strong></p>
                    <div class="form-check mb-2 ">
                        <input class="form-control" type="text" name="email" id="email" />
                    </div>
                </div>
            </div>

            <div class="card my-3">
                <div class="card-body">
                    <p class="text-center"><strong>Το τηλέφωνό σας είναι: </strong></p>
                    <div class="form-check mb-2 ">
                        <input class="form-control" type="text" name="text" id="email" />
                    </div>
                </div>
            </div>


            <div class="card my-3">
                <div class="card-body">
                    <p class="text-center"><strong>Πότε είναι η έναρξη του ταξιδίου;  </strong></p>
                    <div class="form-check mb-2 ">
                    <input type="datetime-local" id="meeting-time" name="meeting-time" value="<?php echo $today; ?>" min="<?php echo $today; ?>" max="<?php echo $nextyeartoday; ?>">
                    </div>
                </div>
            </div>


            <div class="card my-3">
                <div class="card-body">
                    <p class="text-center"><strong>Πότε είναι η λήξη του ταξιδίου; * </strong></p>
                    <div class="form-check mb-2 ">
                    <input type="datetime-local" id="meeting-time" name="meeting-time" value="<?php echo $today; ?>" min="<?php echo $today; ?>" >
                    </div>
                </div>
            </div>


            <div class="card my-3">
                <div class="card-body">
                    <p class="text-center"><strong>Ποίος είναι ο προορισμός σας; *</strong></p>
                    <div class="form-check mb-2 ">
                        <input class="form-control" type="text" name="email" id="email" />
                    </div>
                </div>
            </div>


            <div class="card my-3 ">
                <div class="card-body">
                    <p class="text-center"><strong>Υπάρχουν ενδιάμεσες στάσεις σε κάποια/ες χώρα/ες; * </strong></p>

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



            <div class="card my-3">
                <div class="card-body">
                    <p class="text-center"><strong>Αν υπάρχουν ενδιάμεσες στάσεις, σε ποιά/ες χώρα/ες είναι; * </strong></p>
                    <div class="form-check mb-2 ">
                        <input class="form-control" type="text" name="email" id="email" />
                    </div>
                </div>
            </div>


            
            <div class="card my-3">
                <div class="card-body">
                    <p class="text-center"><strong>Πόσοι είναι οι ταξιδιώτες; * </strong></p>
                    <div class="form-check mb-2 ">
                        <input class="form-control" type="text" name="email" id="email" />
                    </div>
                </div>
            </div>




            <div class="card my-3 ">
                <div class="card-body">
                    <p class="text-center"><strong>Επιθυμείτε, πέραν της βασικής κάλυψης, και κάλυψη ακύρωσης ταξιδίου; * </strong></p>

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
                    <p class="text-center"><strong>Επιθυμείτε, πέραν της βασικής κάλυψης, και κάλυψη απώλειας αποσκευών; *</strong></p>

                    <div class="form-check mb-2 ">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example1" />
                        <label class="form-check-label" for="radio2Example1">
                        ΝΑΙ
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example2" />
                        <label class="form-check-label" for="radio2Example2">
                        ΟΧΙ
                        </label>
                    </div>
                </div>

            </div>



            <div class="card my-3 ">
                <div class="card-body">
                    <p class="text-center"><strong>Πώς θα επιθυμούσατε να επικοινωνήσουμε μαζί σας; *</strong></p>

                    <div class="form-check mb-2 ">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example1" />
                        <label class="form-check-label" for="radio2Example1">
                        Τηλεφωνικά
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example2" />
                        <label class="form-check-label" for="radio2Example2">
                        Μέσω e-mail
                        </label>
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