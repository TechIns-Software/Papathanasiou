<?php
$title = "Expats | G.I.L";
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
            <h3>Private Insurance Questionnaire</h3>
            <hr style="border: 2px solid red;">

            <div class="py-2">
                <label >Διεύθυνση ηλεκτρονικού ταχυδρομείου *</label>
                <input type="email" class="form-control" style="background-color: lightgray;" id="email">
            </div>



            <div class="py-2">
                <label >Your Family is: *</label>
                <select style="background-color: lightgray;" class="form-select" name="" id="familytype">
                    <option value="It is just me">It is just me </option>
                    <option value="It is me and my partner">It is me and my partner</option>
                    <option value="More than two people with kids">More than two people with kids</option>
                </select>
            </div>


            <div class="py-2">
                <label >Your birth date is/Your Family's members birth dates are:</label>
                <input type="text" class="form-control" style="background-color: lightgray;" id="date_birth">
            </div>



            <div class="py-2">
                <label >You live/ ready to move in the Greek City/ region: </label>
                <input type="text" class="form-control" style="background-color: lightgray;" id="movegreece">
            </div>

            <div class="py-2">
                <label >Do you have social Insurance in Greece?</label>
                <select style="background-color: lightgray;" class="form-select " id="socialinsurance">
                    <option value="Yes">Yes </option>
                    <option value="No">No </option>
                    <option value="Maybe">Maybe </option>

                </select>
            </div>

            <div class="py-2">
                <label >Do you have a Greek Tax Number?</label>
                <select style="background-color: lightgray;" class="form-select " id="greektaxnumber">
                    <option value="Yes">Yes </option>
                    <option value="No">No </option>
                    <option value="Maybe">Maybe </option>
                </select>
            </div>



            <div class="py-2">
                <label >Do you have/ Will you buy a car from Greece?</label>
                <select style="background-color: lightgray;" class="form-select " id="carbuy">
                    <option value="Yes">Yes </option>
                    <option value="No">No </option>
                    <option value="Maybe">Maybe </option>
                </select>
            </div>


            <div class="py-2">
                <label >Do you have/ Will you buy a Boat from Greece?</label>
                <select style="background-color: lightgray;" class="form-select " id="boatbuy">
                    <option value="Yes">Yes </option>
                    <option value="No">No </option>
                    <option value="Maybe">Maybe </option>
                </select>
            </div>


            <div class="py-2">
                <label >Do you have/ Will you have your own Business in Greece?</label>
                <select style="background-color: lightgray;" class="form-select " id="ownbuisness">
                    <option value="Yes">Yes </option>
                    <option value="No">No </option>
                    <option value="Maybe">Maybe </option>
                </select>
            </div>


            
            <div class="py-2">
                <label >if you do have your own Business in Greece, do you need Liability?</label>
                <select style="background-color: lightgray;" class="form-select " id="liability">
                    <option value="Yes">Yes </option>
                    <option value="No">No </option>
                    <option value="Maybe">Maybe </option>
                </select>
            </div>


            <div class="py-2">
                <label >About Health Insurance, what is the most important for you?</label>
                <select style="background-color: lightgray;" class="form-select " id="abouthealthincs">
                    <option value="Healthcare in Doctors and Examinations">Healthcare in Doctors and Examinations </option>
                    <option value="Coverage of Surgeries and Hospital care">Coverage of Surgeries and Hospital care </option>
                    <option value="Both of them">Both of them </option>
                </select>
            </div>



            <div class="py-2">
                <label >About Health Insurance, do you need a basic program just to be usable for a residence card?</label>
                <select style="background-color: lightgray;" class="form-select " id="basicprogram">
                    <option value="Yes">Yes </option>
                    <option value="No">No </option>
                    <option value="Maybe">Maybe </option>
                </select>
            </div>


            <div class="py-2">
                <label >In which amount would you prefer to participate in the cost of hospital?</label>
                <select style="background-color: lightgray;" class="form-select " id="costhospital">
                    <option value="0€">0€ </option>
                    <option value="1500€">1500€ </option>
                    <option value="2000€">2000€ </option>
                    <option value="20%">20% </option>
                </select>
            </div>


            <div class="py-2">
                <label >Is there a Greek private Hospital that you prefer instead of all the others?</label>
                <select style="background-color: lightgray;" class="form-select " id="preferhospital">
                    <option value="Yes">Yes </option>
                    <option value="No">No </option>
                </select>
            </div>


            <div class="py-2">
                <label >If there is a Greek private Hospital that you prefer instead of all the others, which one is that?</label>
                <input type="text" class="form-control" style="background-color: lightgray;" id="whichhospital">
            </div>


            <div class="py-2">
                <label >What is the upper limit of coverage that you would prefer to have for a hospital for each member of your family per year?</label>
                <select style="background-color: lightgray;" class="form-select " id="upperlimithospital">
                    <option value="20.000">20.000 </option>
                    <option value="50.000">50.000 </option>
                    <option value="100.000">100.000</option>
                    <option value="300.000">300.000</option>
                    <option value="500.000">500.000</option>
                    <option value="1.000.000">1.000.000</option>
                </select>
            </div>



            <div class="py-2">
                <label >What is the annual budget that you can pay for a Health Insurance Program?</label>
                <input type="text" class="form-control" style="background-color: lightgray;" id="annualhealthbuget">
            </div>



            <div class="py-2">
                <label >Would you like an Insurance Broker from Greek Insurance Leaders to contact with you? *</label>
                <select style="background-color: lightgray;" class="form-select " id="broker">
                    <option value="Yes">Yes </option>
                    <option value="No">No </option>
                    <option value="Maybe">Maybe </option>
                </select>
            </div>


            <div class="py-2">
                <label >What is the best way for you to contact? *</label>
                <select style="background-color: lightgray;" class="form-select " id="communication">
                    <option value="By messenger">By messenger </option>
                    <option value="By E-mail">By E-mail </option>
                    <option value="By telephone">By telephone </option>
                </select>
            </div>


            <div class="py-2">
                <label >What is your name?</label>
                <input type="text" class="form-control" style="background-color: lightgray;" id="name">
            </div>


            <div class="py-2">
                <label >Your e-mail address is: *</label>
                <input type="text" class="form-control" style="background-color: lightgray;" id="email2">
            </div>

            <div class="py-2">
                <label >What is your Telephone number?</label>
                <input type="text" class="form-control" style="background-color: lightgray;" id="number">
            </div>


            <div class="py-2">
                <label>I have been informed of the processing of my personal data and consent to it, as specifically defined in the chapter "GDPR Terms" (see bottom of page)  *</label>
                <input class=" form-check" type="checkbox" id="gdpr">

            </div>



            <div class="py-2">
                <label>I would like to be informed about future promotions related to products and services of Greek Insurance Leaders</label>
                <input class=" form-check" type="checkbox" id="newsletter">
            </div>

            <p class="text-muted"> A copy of your answers will be emailed to the address you provide.</p>
            <a href="#">Here you can see the terms GDPR </a>

            <div class="py-2">
                <button class="btn btn-danger">Submit Form</button>

            </div>

        </div>
    </div>



</div>






<?php
include_once 'serv_footer.php';
?>