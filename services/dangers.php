<?php
$title = " Διερεύνηση Ασφαλιστικών Αναγκών | G.I.L";
include_once 'serv_header.php';

$todayyear = date('Y');
$todaymonth = date('m');
$todayday = date('d');


$today = $todayyear . '-' . $todaymonth . '-' . $todayday . 'T00:00';
$nextyeartoday = ($todayyear + 1) . '-' . $todaymonth . '-' . $todayday . 'T00:00';
?>





<section >
    <div class="container text-center">


        <!-- <p class="px-5  mx-5">Η INTERAMERICAN μέσω των προγραμμάτων Υγείας BeWell σας δίνει τη δυνατότητα να δημιουργήσετε τη δική σας πρόταση ασφάλισης, προσαρμοσμένη στις δικές σας ανάγκες, αλλά και στις δικές σας οικονομικές δυνατότητες</p> -->

        <img src="../assets/img/logo1.png" class="img-fluid mx-auto text-center" alt="">
    </div>
</section>

<div class="container formcont" >
    <div class="row">
        <div class="col-md-12 offset-md-12 ">
        <h3>Διερεύνηση Διαχείρισης Κινδύνων</h3>
        <hr style="border: 2px solid orange;">
           
            <div class="py-2">
                <label >Διεύθυνση ηλεκτρονικού ταχυδρομείου *</label>
                <input type="email" class="form-control" style="background-color: lightgray;" id="email">
            </div>

    
            
            <div class="py-2">
                <label >Το αυτοκίνητό σας είναι :</label>
              <select style="background-color: lightgray;"  class="form-select" name="" id="agecar">
                        <option  value="0-5 ετών">0-5 ετών </option>
                        <option  value="6-10 ετών">6-10 ετών </option>
                        <option  value="10 ετών +">10 ετών +</option>
                        <option  value="Δεν έχω ιδιόκτητο αυτοκίνητο">Δεν έχω ιδιόκτητο αυτοκίνητο</option>
 
              </select>
            </div>


            
            <div class="py-2">
                <label >Η κατοικία σας είναι :</label>
                <select style="background-color: lightgray;" class="form-select " id="home">
                        <option value="Μη ιδιόκτητη κατοικία">Μη ιδιόκτητη κατοικία</option>
                        <option value="Ιδιόκτητη κατοικία με δανειακή υποχρέωση">Ιδιόκτητη κατοικία με δανειακή υποχρέωση</option>
                        <option value="Ιδιόκτητη κατοικία χωρίς δανειακή υποχρέωση">Ιδιόκτητη κατοικία χωρίς δανειακή υποχρέωση</option>
                        <option value="Είμαι φιλοξενούμενος">Είμαι φιλοξενούμενος</option>
     
                    </select>
            </div>

            
            <div class="py-2">
                <label>Η οικογένειά σας αποτελείται :</label>
                <select style="background-color: lightgray;" class="form-select " id="family">
                        <option value="Από εμένα μόνο">Από εμένα μόνο</option>
                        <option value="Από τον/την σύζυγο μου και εμένα">Από τον/την σύζυγο μου και εμένα</option>
                        <option value="Από τον/την σύζυγο μου και 1 παιδί">Από τον/την σύζυγο μου και 1 παιδί</option>
                        <option value="Από τον/την σύζυγο μου και 2 ή περισσότερα παιδιά">Από τον/την σύζυγο μου και 2 ή περισσότερα παιδιά</option>
     
                    </select>
            </div>




            <div class="py-2">
                <label >Αν έχετε παιδιά, τότε σίγουρα γνωρίζετε πως το κάθε παιδί χρειάζεται τουλάχιστον € 5000 το χρόνο για τα έξοδά του, έως και την ηλικία των 18. Πόσα λοιπόν είναι τα έξοδα αυτά, για όλα τα παιδιά της οικογένειάς σας συνολικά; </label>
                <select class="form-select " id="quest2" style="background-color: lightgray;">
                        <option value="Έως 50.000 €">Έως 50.000 € </option>
                        <option value=" Από 50.000 € έως και 100.000 €">Από 50.000 € έως και 100.000 €</option>
                        <option value=" Από 100.000 € έως και 150.000 €">Από 100.000 € έως και 150.000 €</option>
                        <option value=" Περισσότερο από 150.000 €">Περισσότερο από 150.000 €</option>
                    </select>
            </div>


            <div class="py-2">
                <label >Σε περίπτωση που απουσιάσει για οποιοδήποτε λόγο το εισόδημά σας, έχετε εξασφαλίσει με κάποιο τρόπο αυτό το κεφάλαιο;</label>
                <select class="form-select " id="quest3" style="background-color: lightgray;">
                        <option value=" OXI">OXI</option>
                        <option value="NAI">NAI</option>
                        <option value="Ναι έως και 50% του ποσού">Ναι έως και 50% του ποσού</option>
                        <option value="Ναι για περισσότερο από 50% του ποσού">Ναι για περισσότερο από 50% του ποσού</option>

                    </select>
            </div>


            <div class="py-2">
                <label >Εμπιστεύεστε το Εθνικό Σύστημα Υγείας :</label>
                <select class="form-select " id="quest4" style="background-color: lightgray;">
                        <option value=" OXI">OXI</option>
                        <option value="NAI">NAI</option>
                        <option value="Ναι, μόνο για πολύ σοβαρές περιπτώσεις">Ναι, μόνο για πολύ σοβαρές περιπτώσεις</option>
                        <option value="Ναι, μόνο για πολύ απλές περιπτώσεις">Ναι, μόνο για πολύ απλές περιπτώσεις</option>
                    </select>
            </div>


            <div class="py-2">
                <label >Χρησιμοποιείτε Ιδιωτικές Υπηρεσίες Υγείας :</label>
                <select class="form-select " id="quest5" style="background-color: lightgray;">
                        <option value=" OXI">OXI</option>
                        <option value="NAI">NAI</option>
                        <option value="Ναι, μόνο για Γιατρούς και Διαγνωστικές εξετάσεις">Ναι, μόνο για Γιατρούς και Διαγνωστικές εξετάσεις</option>
                        <option value="Ναι, μόνο για Νοσηλεία σε Ιδιωτικές Κλινικές">Ναι, μόνο για Νοσηλεία σε Ιδιωτικές Κλινικές</option>
                    </select>
            </div>


            
            <div class="py-2">
                <label >Ποιο είναι το ποσό που θα σας έκανε να αισθανθείτε ασφαλής, εφόσον υπήρχε διαθέσιμο μόνο για επείγουσες περιπτώσεις ΥΓΕΙΑΣ για το κάθε μέλος της οικογένειάς σας ξεχωριστά :</label>
                <select class="form-select " id="quest6" style="background-color: lightgray;">
                        <option value="20.000 €">20.000 €</option>
                        <option value=" 50.000 €">50.000 €</option>
                        <option value=" 100.000 €">100.000 €</option>
                        <option value=" 300.000 €">300.000 €</option>
                        <option value=" 500.000 €">500.000 €</option>
                        <option value="1.000.000 €">1.000.000 €</option>
                    </select>
            </div>

            

            <div class="py-2">
                <label >Ποια είναι η Ιδιωτική Κλινική που θα επιλέγατε σε περίπτωση νοσηλείας ή επέμβασης ;</label>
                <select class="form-select " id="quest7" style="background-color: lightgray;">
                        <option value="Metropolitan General Αθηνών">Metropolitan General Αθηνών</option>
                        <option value="Διαβαλκανικό Ιατρικό Κέντρο Θεσσαλονίκης">Διαβαλκανικό Ιατρικό Κέντρο Θεσσαλονίκης</option>
                        <option value=" Υγεία Αθηνών">Υγεία Αθηνών</option>
                        <option value="Ιασώ Αθηνών">Ιασώ Αθηνών</option>
                        <option value="Άγιος Λουκάς Θεσσαλονίκης">Άγιος Λουκάς Θεσσαλονίκης</option>
                        <option value="Αθηναϊκή Mediclinic">Αθηναϊκή Mediclinic</option>
                        <option value=" Παιδιατρικό Κέντρο Αθηνών"> Παιδιατρικό Κέντρο Αθηνών</option>
                        <option value=" Γενική Κλινική Θεσσαλονίκης"> Γενική Κλινική Θεσσαλονίκης</option>
                        <option value=" Ευρωκλινική Παίδων"> Ευρωκλινική Παίδων</option>
                        <option value=" Κάποια άλλη κλινική"> Κάποια άλλη κλινική</option>
                        <option value=" Όλες παρέχουν την ίδια ποιότητα υπηρεσιών"> Όλες παρέχουν την ίδια ποιότητα υπηρεσιών</option>
                    </select>
            </div>



            <div class="py-2">
                <label >Δικαιούστε κοινωνική ασφάλιση; (ΕΟΠΥΥ/ΕΦΚΑ) ;</label>
                <select class="form-select " id="quest8" style="background-color: lightgray;">
                        <option value="Ναι">Ναι</option>
                        <option value="Όχι">Όχι</option>
                    </select>
            </div>


            <div class="py-2">
                <label >Εάν σας πρότειναν κάποιο ιατρό, σίγουρα πολύ οικονομικό και εγγυημένα εξαιρετικό Επιστήμονα, θα πηγαίνατε στο ιατρείο του για εξέταση  ;</label>
                <select class="form-select " id="quest9" style="background-color: lightgray;">
                        <option value="Ναι, καλό είναι να έχεις δεύτερη γνώμη ιατρού">Ναι, καλό είναι να έχεις δεύτερη γνώμη ιατρού</option>
                        <option value="Οχι, έχω τον δικό μου ιατρό">Οχι, έχω τον δικό μου ιατρό</option>
                    </select>
            </div>



            <div class="py-2">
                <label >Εργάζεστε ως :</label>
                <select class="form-select " id="quest10" style="background-color: lightgray;">
                        <option value="Μισθωτός">Μισθωτός</option>
                        <option value="Δημόσιος Υπάλληλος">Δημόσιος Υπάλληλος</option>
                        <option value=" Επιχειρηματίας">Επιχειρηματίας </option>
                        <option value=" Ελεύθερος Επαγγελματίας">Ελεύθερος Επαγγελματίας </option>
                        <option value=" Είμαι φοιτητής/άνεργος">Είμαι φοιτητής/άνεργος </option>
                  
                    </select>
            </div>


            <div class="py-2">
                <label >Η επιχείρηση μου είναι ασφαλισμένη :</label>
                <select class="form-select " id="quest10" style="background-color: lightgray;">
                        <option value="Ναι">Ναι</option>
                        <option value="Οχι">Οχι</option>
                        <option value=" Δεν έχω δική μου Επιχείρηση">Δεν έχω δική μου Επιχείρηση </option>
                  
                    </select>
            </div>



            
            <div class="py-2">
                <label >Επιπρόσθετα Σχόλια:</label>
                <textarea style="background-color: lightgray;"  class="form-control "   id="comments" col="2" rows="4" ></textarea>
            </div>


            <div class="py-2">
                <label >Ονοματεπώνυμο *</label>
                <input class="form-control "   type="text" id="fullname" style="background-color: lightgray;">
            </div>

            <div class="py-2">
                <label >Τηλέφωνο *</label>
                <input class="form-control "  type="text" id="phone" style="background-color: lightgray;">
            </div>



            <div class="py-2">
                <label >Ημερομηνία Γέννησης</label>
                <input class="form-control "  type="text" id="datebirth" style="background-color: lightgray;">
            </div> 


            

            
            <div class="py-2">
                <label >Περιοχή Κατοικίας</label>
                <input class="form-control "  type="text" id="locationresidence" style="background-color: lightgray;">
            </div> 

            <div class="py-2">
                <label >Επιθυμείτε να επικοινωνήσει μαζί σας, ένας από τους πιστοποιημένους Ασφαλιστικούς Συμβούλους της Greek Insurance Leaders, για την ανάλυση των αποτελεσμάτων σας ;</label>
                <select class="form-select " id="quest11" style="background-color: lightgray;">
                        <option value="Ναι">Ναι</option>
                        <option value="Οχι">Οχι</option>      
                    </select>
            </div>


            <div class="py-2">
                <label >Προτεινόμενη ημέρα και ώρα επικοινωνίας :</label>
                <input class="form-control"  style="background-color: lightgray;" type="datetime-local" id="meeting-time" name="meeting-time" value="<?php echo $today; ?>" min="<?php echo $today; ?>" max="<?php echo $nextyeartoday; ?>">
            </div>


            <div class="py-2">
                <label >Πως μας βρήκατε; </label>
                <input class="form-control "  type="text" id="findhow" style="background-color: lightgray;">
            </div>

            <div class="py-2">
                <label >Επικοινωνήσατε ήδη με κάποιο Συνεργάτη;</label>
                <input class="form-control "  type="text" id="synergathepikinonia" style="background-color: lightgray;">
            </div>



                        
            <div class="py-2 ">
                <input  type="checkbox" id="gdpr">
                <label >Έχω ενημερωθεί για την επεξεργασία των προσωπικών μου δεδομένων και συναινώ σε αυτήν, όπως ειδικά ορίζεται στο κεφάλαιο "Όροι GDPR" (βλέπε κάτω μέρος σελίδας) *</label>
              
            </div>


                        
            <div class="py-2">
                <input  type="checkbox" id="newsletter">
                <label >Επιθυμώ να ενημερώνομαι για μελλοντικές προωθητικές ενέργειες που αφορούν σε προϊόντα και υπηρεσίες της Greek Insurance Leaders</label>
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