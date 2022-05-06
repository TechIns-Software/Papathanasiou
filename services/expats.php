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

        <img src="../assets/img/logo1.png" class="img-fluid mx-auto text-center" alt="logo">
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

            <div class="py-2">
                <button class="btn btn-danger">Submit Form</button>
            </div>

            <div class=" d-flex  fs-4 px-2 justify-content-between  daybutton   " data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <p class=" d-flex py-2 ">* GDPR Terms</p> <i class="  py-3  align-middle fa-solid fa-down-long  fa-xs"></i>
         
            </div>

            <div class="col-12 my-3">
                <div class="row">
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 p-4  ">

                                    <p class="text-center"   > <b> INFORMATION ABOUT THE PROCESSING OF PERSONAL DATA</b> </p>

                                    <p>
                                        from the company "GREEK INSURANCE LEADERS" who have the responsibility and perform the processing & DECLARATION OF CONSENT OF PERSONS who are subject to the data according to the General Data Regulation of the EU. 2016/679
                                    </p>

                                    <br>
                                    <b> I. Why would you edit my Personal Data (IFRS) 1 and my Special Category Personal Data (IFRS) 2?</b>
                                    <ul>

                                        <li> • In order to receive offers regarding the coverage of your insurance needs, it is necessary for us to give you at least the following data: NAME, PHONE, E-MAIL, PC. Residence, Date of Birth, as well as other information related to the investigation of your insurance needs. </li>



                                        <li> • In order to apply for cooperation in our company, it is necessary for you to provide your complete CV, as well as your contact details. </li>


                                        <li>
                                            • Based on this information / data, we will consider if and how we will provide you with the appropriate offers, in order to fully meet your needs as well as those of your dependents. </li>

                                        <li> • For as long as our communication remains valid, we will process both your data and those of any of your dependents, which are necessary, based on the explicit consent you give us, through the consent form that follows.</li>

                                    </ul>
                                    <br>

                                    <b> What kind of processing of my data will you do?</b>

                                    <ul>
                                        <li> • After receiving the necessary for the security of your personal data, we will proceed, for the reasons mentioned above, in any operation or series of operations of processing your data and with the help of automated means such as e.g. collect, register, organize, correct, store, customize, modify, retrieve, retrieve information.</li>

                                        <li> • In some cases (concerning the Health and Accident Insurance Branches) we use automated means at the stage of taking the risk. Through these automated instruments, in which the risk-taking rules we apply (for the above Insurance Branches) have been largely integrated, we are allowed to make decisions more quickly, with greater accuracy, transparency and consistency.</li>

                                        <li> • In the context of the protection of our legal interests, we often carry out audits, through certified automated means, in order to prevent fraud against us.

                                        </li>

                                    </ul>

                                    <p>
                                        <b>
                                            1. Any information relating to an identified or identifiable natural person ("data subject") such as an identifier [name, identity number, physical, physiological, psychological, economic, cultural or social identity of the natural person (Article 4 of EU Regulation 2016/679 )]. 2 These are data relating to health, as well as racial or ethnic origin, etc. (Article 9 of EU Regulation 2016/679).</b>
                                    </p>

                                    <b> How long will you keep my data in a file?</b>

                                    <p> We will keep your data for as long as you maintain a contractual relationship with us in both paper and electronic form. In the event that, for any reason, it is interrupted we will keep them for as long as is still required until the limitation period of any relevant claims has passed.</p>

                                    <b> IV What rights do I have for the processing of my data?</b>

                                    <ul>


                                        <li> • You can exercise, as appropriate, the following rights: the right of access (to find out what data we process for you, why and their recipients7), correction (to correct any deficiencies or inaccuracies in your data8), deletion (right forgetfulness) (delete them from our files, but if their processing is no longer necessary9) limit processing (in case of data accuracy, etc.10.) portability (receive your data in a structured and commonly used format ) 11. </li>


                                        <li> • These rights are exercised free of charge for you, by sending a relevant letter or e-mail to the Data Protection Officer, unless they are repeated frequently and due to volume have administrative costs for us, in which case you will be charged the relevant costs. </li>

                                        <li>• If you exercise any of these rights, we will take all possible measures to satisfy your request within thirty (30) days of receiving the relevant request, after informing you either of its satisfaction or of the objective reasons that prevent it. his satisfaction.</li>

                                    </ul>

                                    <b> V How do you ensure the security of my data?</b>

                                    <p> The security of your data is our absolute commitment. To achieve this, we apply all modern and appropriate for the purposes of processing technical (indicative, encryption, anonymization) and organizational measures, the response of which we check at regular intervals.</p>

                                    <b> Where will you send my data? </b>

                                    <p> Your data may be transmitted and made available by legal entities and / or natural persons with whom, from time to time, we maintain contracts, we or the Company that we work exclusively with. </p>

                                    <ul>


                                        <li> 3 L.3691 / 2008, Decision EPIA 154/2009, Directive 2015/849 EU. </li>
                                        <li>4 Law 4170/2013, Council Directive 20011/16 EU, </li>
                                        <li> 5 Common Reporting Standards-CRS</li>
                                        <li> 6 Law 4493/2017 Memorandum of Cooperation between the Greek Government and the Government of the USA. </li>
                                        <li> 7 Article 15 of EU Regulation 2016/679 </li>
                                        <li> 8 Article 16 of EU Regulation 2016/679</li>
                                        <li> 9 Article 17 of EU Regulation 2016/679 </li>
                                        <li> 10 Article 18 of EU Regulation 2016/679 </li>
                                        <li>11 Article 20 of EU Regulation 2016/679 </li>


                                    </ul>


                                    <b>How do I file a complaint / complaint?</b>

                                    <ul>
                                        <li> For any issue regarding the processing of your data you can contact the email<a href="mailto:gil@gileaders.gr" target="_blank"> gil@gileaders.gr</a> </li>

                                        <li> Also, you always reserve the right to contact the Personal Data Protection Authority, which can accept the submission of relevant complaints either in writing in its protocol (Kifissias 1-3, PC 115 23, Athens) or electronically ( <a href="https://www.dpa.gr" target="_blank"> www.dpa.gr</a>).</li>
                                    </ul>

                                    <b> DECLARATION OF CONSENT FOR THE PROCESSING OF PERSONAL DATA (IFRS) AND SPECIAL CATEGORY OF PERSONAL DATA (ECHR) </b>

                                    <b>
                                        I declare that:
                                    </b>

                                    <ul>

                                        <li> <b> I read </b> the Newsletter for the Processing of Personal Data of the company "Greek Insurance Leaders"</li>
                                        <li> <b> I was informed </b> about the elaboration of the IFRS and IFRS that will take place</li>
                                        <li> <b> I was informed </b> about the rights I have and maintain as a data subject (ie, access, correction, deletion, restriction of purpose, portability and objection).</li>
                                        <li> <b> I give my explicit consent </b> (Article 7 of EU Regulation 2016/679) to the company "Greek Insurance Leaders"</li>

                                        <li> <b> 1. For the elaboration of the IFRS and IFRS, as well as any others that come to their knowledge in the future and are related to the whole function of creating an offer to meet insurance needs. </b></li>

                                        <li> <b> 2. For keeping files with all the above data in electronic or other format. </b> </li>

                                        <li> I acknowledge that the elaboration of the IFRS and IFRS, which concern both me and any dependents, is and remains absolutely necessary.</li>



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






<?php
include_once 'serv_footer.php';
?>