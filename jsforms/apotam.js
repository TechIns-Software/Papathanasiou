const check6 = document.getElementById("check6");
check6.addEventListener("click", () => {

    const check6answer = document.getElementById("check6answer");

    if (check6.checked) {
        check6answer.removeAttribute("disabled");
    } else {
        check6answer.setAttribute("disabled", " ");
        check6answer.value = ""
    }
});

const amountother = document.getElementById("radio5");
amountother.addEventListener('click', () => {

    const answer = document.getElementById("amountanswer");
    if (amountother.checked) {
        answer.removeAttribute("disabled");
    } else {
        answer.setAttribute("disabled", " ");
        answer.value = ""
    }
});



const url =
    "https://docs.google.com/forms/u/0/d/e/1FAIpQLSfOmHqdANgrb21fpOW5EXt57OTIq24QbFD6OtZIJ0vdVXE90w/formResponse"; //action url
let submitbtn = document.getElementById("submitform"); //form element

submitbtn.addEventListener("click", (e) => {
    e.preventDefault(); //prevent default behaviour

    const dataToPost = new FormData(); //formdata API
    const email = document.getElementById("email");



    if (email.value) {


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
    const name = document.getElementById("name");
    const phone = document.getElementById("phone");
    const date_birth = document.getElementById("date_birth").value;

    
    const day = date_birth.substr(8, 2);
    const  month = date_birth.substr(5, 2);
    const year = date_birth.substr(0, 4);

    const location = document.getElementById("quest1");
    const safemoney = document.getElementById("quest2");
    const insurance = document.getElementById("quest3");

    const check1 = document.getElementById("check1");
    const check2 = document.getElementById("check2");
    const check3 = document.getElementById("check3");
    const check4 = document.getElementById("check4");
    const check5 = document.getElementById("check5");
    const check6 = document.getElementById("check6");
    const check6answer = document.getElementById("check6answer");

    const monthlymoney = document.getElementById("quest4");

    const radio1 = document.getElementById("radio1");
    const radio2 = document.getElementById("radio2");
    const radio3 = document.getElementById("radio3");
    const radio4 = document.getElementById("radio4");
    const radio5 = document.getElementById("radio5");
    const radioanswer = document.getElementById("amountanswer");

    const safeplan = document.getElementById("quest5");
    const omologa = document.getElementById("quest6");
    const metoxes = document.getElementById("quest7");
    const experience = document.getElementById("quest8");

    const esoda = document.getElementById("quest9");
    const apotamprogram = document.getElementById("quest10");

    const amount1 = document.getElementById("amount1");
    const amount2 = document.getElementById("amount2");
    const amount3 = document.getElementById("amount3");
    const amount4 = document.getElementById("amount4");

    const contact = document.getElementById("quest12");
    const gdpr = document.getElementById("gdpr");
    const newsletter = document.getElementById("newsletter");


    dataToPost.append("emailAddress", email.value);
    dataToPost.append("entry.633567026", name.value);
    dataToPost.append("entry.1258432177", phone.value);
    dataToPost.append("entry.126568043_day", day);
    dataToPost.append("entry.126568043_month", month);
    dataToPost.append("entry.126568043_year", year);
    dataToPost.append("entry.187553183", location.value);
    dataToPost.append("entry.1787649783", safemoney.value);
    dataToPost.append("entry.43198964", insurance.value);
    
    if (check1.checked){
        dataToPost.append("entry.1980341975", check1.value);
    }

    if (check2.checked){
        dataToPost.append("entry.1980341975", check2.value);
    }

    if (check3.checked){
        dataToPost.append("entry.1980341975", check3.value);
    }

    
    if (check4.checked){
        dataToPost.append("entry.1980341975", check4.value);
    }

        
    if (check5.checked){
        dataToPost.append("entry.1980341975", check5.value);
    }


    if (check5.checked){
        dataToPost.append("entry.1980341975", check5.value);
    }

    if (check6.checked){
        dataToPost.append("entry.1980341975", "__other_option__");
        dataToPost.append("entry.1980341975.other_option_response", check5.value);
    }

    dataToPost.append("entry.964770972", monthlymoney.value);


    if (radio1.checked){
        dataToPost.append("entry.1342149247", radio1.value);
    }

    if (radio2.checked){
        dataToPost.append("entry.1342149247", radio2.value);
    }

    if (radio3.checked){
        dataToPost.append("entry.1342149247", radio3.value);
    }

    if (radio4.checked){
        dataToPost.append("entry.1342149247", radio4.value);
    }

    if (radio4.checked){
        dataToPost.append("entry.1342149247", radio4.value);
    }
    

    if (radio5.checked){
        dataToPost.append("entry.1342149247.other_option_response", radioanswer.value);
        dataToPost.append("entry.1342149247", "__other_option__");
    }

    dataToPost.append("entry.1813196754", safeplan.value);
    dataToPost.append("entry.1366856453", omologa.value);
    dataToPost.append("entry.971282559", metoxes.value);
    dataToPost.append("entry.1716053690", experience.value);
    dataToPost.append("entry.1301540685", esoda.value);
    dataToPost.append("entry.1338803813", apotamprogram.value);


    if (amount1.checked){
        dataToPost.append("entry.834863433", amount1.value);
    }

    if (amount2.checked){
        dataToPost.append("entry.834863433", amount2.value);
    }

    if (amount3.checked){
        dataToPost.append("entry.834863433", amount3.value);
    }

    if (amount4.checked){
        dataToPost.append("entry.834863433", amount4.value);
    }

    dataToPost.append("entry.941353677", contact.value);

    if (gdpr.checked){
        
        dataToPost.append("entry.90757463", 'Έχω ενημερωθεί για την επεξεργασία των προσωπικών μου δεδομένων και συναινώ σε αυτήν, όπως ειδικά ορίζεται στο κεφάλαιο "Όροι GDPR" (βλέπε κάτω μέρος σελίδας)');
    }

    if (newsletter.checked) {
        dataToPost.append("entry.1762482218", "Ναι")
    } else {
        dataToPost.append("entry.1762482218", "Όχι")
    }

    return dataToPost;
}

