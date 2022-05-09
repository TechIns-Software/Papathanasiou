
const otheoption = document.getElementById("amountother");


otheoption.addEventListener('click', () => {
    const otherinput = document.getElementById("amountanser")
    if (otheoption.checked) {
        otherinput.removeAttribute("disabled");
    } else {
        otherinput.setAttribute("disabled", "");
        otherinput.value = ""
    }
})




const price7 = document.getElementById("price7");


price7.addEventListener('click', () => {
    const priceanwser = document.getElementById("priceanwser")
    if (price7.checked) {
        priceanwser.removeAttribute("disabled");
    } else {
        priceanwser.setAttribute("disabled", "");
        priceanwser.value = ""
    }
})





const url = "https://docs.google.com/forms/u/0/d/e/1FAIpQLSeXoACTbT9W8xocoVNBF1YgNW61fZRHFwu6PGE87TRbcxhXow/formResponse"; //action url

let submitbtn = document.getElementById("submitform"); //form element

submitbtn.addEventListener("click", (e) => {
    e.preventDefault(); //prevent default behaviour

    const dataToPost = new FormData(); //formdata API
    const email = document.getElementById("email");



    const gdpr = document.getElementById("gdpr");



    if (email.value ) {


        if (gdpr.checked) {
    
            fetch(url, {
                method: "POST",
                mode: "no-cors",
                header: {
                    'Content-Type': 'application/json'
                },
                body: getInputData()
            })
                .then(data => {
                    console.log(data);
                    alert("Form Submitted");
                })
                .catch(err => console.error(err)); //promise based
        } else {
            alert("GDPR ALERT");
        }

    } else {
        alert(" ΠΡΕΠΕΙ ΝΑ ΣΥΜΠΛΗΡΩΣΕΙΣ ΤΑ ΑΠΑΡΑΙΤΗΤΑ ΠΕΔΙΑ ΓΙΑ ΝΑ ΓΙΝΕΙ ΥΠΟΒΟΛΗ ΤΗΣ ΦΟΡΜΑΣ");
    }


});



function getInputData() {


    //  //fill name attributes to corresponding values

    const dataToPost = new FormData(); //formdata API
    const email = document.getElementById("email");
    const name = document.getElementById("fullname");
    const phone = document.getElementById("phone");

    const child1 = document.getElementById("date_birth");
    const child2 = document.getElementById("date_birth_1");
    const child3 = document.getElementById("date_birth_2");
    const child4 = document.getElementById("date_birth_3");

    const location = document.getElementById("quest1");
    const price1 = document.getElementById("price1");
    const price2 = document.getElementById("price2");
    const price3 = document.getElementById("price3");
    const price4 = document.getElementById("price4");
    const price5 = document.getElementById("price5");
    const price6 = document.getElementById("price6");
    const price7 = document.getElementById("price7");
    const priceanwser = document.getElementById("priceanwser");
 
    
    const opt1=document.getElementById("amount1");
    const opt2=document.getElementById("amount2");
    const opt3=document.getElementById("amount3");
    const opt4=document.getElementById("amount4");
    const opt5=document.getElementById("amount5");
    const opt6=document.getElementById("amount6");
    const opt7=document.getElementById("amount7");
    const opt8=document.getElementById("amount8");
    const opt9=document.getElementById("amount9");

    const otheropt=document.getElementById("amountanser");

    const eoppy = document.getElementById("quest3");
    const lessmoney = document.getElementById("quest4");
    const amounthospital = document.getElementById("quest5");
    const doctorsdiagn = document.getElementById("quest6");
    const outeurope = document.getElementById("quest7");
    const bigsurge = document.getElementById("quest8");
    const monthamount = document.getElementById("quest9");
    const moneysupport = document.getElementById("quest10");
    const spoudes = document.getElementById("quest11");
    const planspoudes = document.getElementById("quest12");
    const apotammonth = document.getElementById("quest13");
    const contact = document.getElementById("quest14");

    const gdpr = document.getElementById("gdpr");
    const newsletter = document.getElementById("newsletter");



    dataToPost.append("emailAddress", email.value);
    dataToPost.append("entry.633567026", name.value);
    dataToPost.append("entry.1258432177", phone.value);
    dataToPost.append("entry.126568043", child1.value + " , "+child2.value + " , "+child3.value + " , "+child4.value );
    dataToPost.append("entry.187553183", location.value);


    if (price1.checked){
        dataToPost.append("entry.1366856453", price1.value);
    }

    if (price2.checked){
        dataToPost.append("entry.1366856453", price2.value);
    }
    

    if (price3.checked){
        dataToPost.append("entry.1366856453", price3.value);
    }
    

    if (price4.checked){
        dataToPost.append("entry.1366856453", price4.value);
    }
    
    if (price5.checked){
        dataToPost.append("entry.1366856453", price5.value);
    }

    if (price6.checked){
        dataToPost.append("entry.1366856453", price6.value);
    }
    

    if (price7.checked){
        dataToPost.append("entry.1366856453.other_option_response", priceanwser.value);
        dataToPost.append("entry.1366856453","__other_option__");
    }
    
    
    



    if (opt1.checked){
        dataToPost.append("entry.971282559", opt1.value);
    }

    if (opt2.checked){
        dataToPost.append("entry.971282559", opt2.value);
    }

    if (opt3.checked){
        dataToPost.append("entry.971282559", opt3.value);
    }

    if (opt4.checked){
        dataToPost.append("entry.971282559", opt4.value);
    }

    if (opt5.checked){
        dataToPost.append("entry.971282559", opt5.value);
    }

    if (opt6.checked){
        dataToPost.append("entry.971282559", opt6.value);
    }

    if (opt7.checked){
        dataToPost.append("entry.971282559", opt7.value);
    }

    if (opt8.checked){
        dataToPost.append("entry.971282559", opt8.value);
    }

    if (opt9.checked){
        dataToPost.append("entry.971282559", opt9.value);
    }



    if (otheoption.checked){
        dataToPost.append("entry.971282559.other_option_response", otheropt.value);
    }



    dataToPost.append("entry.1716053690", eoppy.value);
    dataToPost.append("entry.422256100", lessmoney.value);
    dataToPost.append("entry.1342149247", amounthospital.value);
    dataToPost.append("entry.18148955", doctorsdiagn.value);
    dataToPost.append("entry.1301540685", outeurope.value);
    dataToPost.append("entry.138873519", bigsurge.value);
    dataToPost.append("entry.964770972", monthamount.value);
    dataToPost.append("entry.1885862065", moneysupport.value);
    dataToPost.append("entry.1423718015", spoudes.value);
    dataToPost.append("entry.2079322087", planspoudes.value);
    dataToPost.append("entry.427477217", apotammonth.value);
    dataToPost.append("entry.941353677", contact.value);


    if (gdpr.checked){

        dataToPost.append("entry.90757463",'Έχω ενημερωθεί για την επεξεργασία των προσωπικών μου δεδομένων και συναινώ σε αυτήν, όπως ειδικά ορίζεται στο κεφάλαιο "Όροι GDPR" (βλέπε κάτω μέρος σελίδας)');
    }



    if (newsletter.checked) {
        dataToPost.append("entry.1762482218", "Ναι")
    } else {
        dataToPost.append("entry.1762482218", "Όχι")
    }

    return dataToPost;
}

