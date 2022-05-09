


//for checkbox buttons
const check6 = document.getElementById("check6");
check6.addEventListener('click', () => {
    const otherinput = document.getElementById("check6answer")
    if (check6.checked) {
        otherinput.removeAttribute("disabled");
    } else {
        otherinput.setAttribute("disabled", "");
        otherinput.value = ""
    }
})

//for radio buttons

const radio4 = document.getElementById("radio4");

radio4.addEventListener('click', () => {
    const radioansert = document.getElementById("radioanswer")
    if (radio4.checked) {
       
        radioansert.removeAttribute("disabled");
    } else {
        radioansert.setAttribute("disabled", "");
        radioansert.value = ""
    }
})





const url = "https://docs.google.com/forms/u/0/d/e/1FAIpQLSfdXRYYuqTPuNByJHiGTqvvreyhMMZY6y4CYb1yXrUrEuGm-w/formResponse"; //action url

let submitbtn = document.getElementById("submitform"); //form element

submitbtn.addEventListener("click", (e) => {
    e.preventDefault(); //prevent default behaviour

    const email = document.getElementById("email");
    const gdpr = document.getElementById("gdpr");



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

    const dataToPost = new FormData(); //formdata API

    const email = document.getElementById("email");
    const name = document.getElementById("name");
    const phone = document.getElementById("phone");
    const date_birth = document.getElementById("date_birth");
    const location = document.getElementById("location");
    const maried = document.getElementById("maried");
    const kids = document.getElementById("kids");
    const kidsinfo = document.getElementById("kidsinfo");
    const work = document.getElementById("work");
    const workinfo = document.getElementById("workinfo");
    const pagia = document.getElementById("pagia");
    const danio = document.getElementById("danio");

    const check1 = document.getElementById("check1");
    const check2 = document.getElementById("check2");
    const check3 = document.getElementById("check3");
    const check4 = document.getElementById("check4");
    const check5 = document.getElementById("check5");
    const check6 = document.getElementById("check6");

    const check6answer = document.getElementById("check6answer");
    const annualmoney = document.getElementById("quest9");

    const radio1 = document.getElementById("radio1");
    const radio2 = document.getElementById("radio2");
    const radio3 = document.getElementById("radio3");
    const radio4 = document.getElementById("radio4");
    const radioanswer = document.getElementById("radioanswer");

    const extra1 = document.getElementById("extra1");
    const extra2 = document.getElementById("extra2");
    const extra3 = document.getElementById("extra3");
    const extra4 = document.getElementById("extra4");

    const moneysafe = document.getElementById("moneysafe");
    const contact = document.getElementById("contact");

    const gdpr = document.getElementById("gdpr");
    const newsletter = document.getElementById("newsletter");



    dataToPost.append("emailAddress", email.value);
    dataToPost.append("entry.633567026", name.value);
    dataToPost.append("entry.1258432177", phone.value);
    dataToPost.append("entry.1258432177", phone.value);

    const day = date_birth.substr(8, 2);
    const month = date_birth.substr(5, 2);
    const year = date_birth.substr(0, 4);

    dataToPost.append("entry.126568043_year", year);
    dataToPost.append("entry.126568043_month", month);
    dataToPost.append("entry.126568043_day", day);
    dataToPost.append("entry.187553183", location.value);
    dataToPost.append("entry.1366856453", maried.value);
    dataToPost.append("entry.971282559", kids.value);
    dataToPost.append("entry.1716053690", kidsinfo.value);
    dataToPost.append("entry.422256100", work.value);
    dataToPost.append("entry.1342149247", workinfo.value);
    dataToPost.append("entry.18148955", pagia.value);
    dataToPost.append("entry.1301540685", danio.value);
    dataToPost.append("entry.1301540685", danio.value);

    if (check1.checked) {
        dataToPost.append("entry.138873519", check1.value);
    }

    if (check2.checked) {
        dataToPost.append("entry.138873519", check2.value);
    }

    if (check3.checked) {
        dataToPost.append("entry.138873519", check3.value);
    }

    if (check4.checked) {
        dataToPost.append("entry.138873519", check4.value);
    }

    if (check5.checked) {
        dataToPost.append("entry.138873519", check5.value);
    }

    if (check6.checked) {
        dataToPost.append("entry.138873519", "__other_option__");
        dataToPost.append("entry.138873519.other_option_response", check6answer.value);
    }

    dataToPost.append("entry.964770972", quest9.value);

    if (radio1.checked) {
        dataToPost.append("entry.976947973", radio1.value);
    }

    if (radio2.checked) {
        dataToPost.append("entry.976947973", radio2.value);
    }


    if (radio3.checked) {
        dataToPost.append("entry.976947973", radio3.value);
    }


    if (radio4.checked) {
        dataToPost.append("entry.976947973", "__other_option__");
        dataToPost.append("entry.976947973.other_option_response", radioanswer.value);
    }

    dataToPost.append("entry.834863433", extra1.value);
    dataToPost.append("entry.834863433", extra2.value);
    dataToPost.append("entry.834863433", extra3.value);
    dataToPost.append("entry.834863433", extra4.value);

    dataToPost.append("entry.354403916", moneysafe.value);
    dataToPost.append("entry.941353677", contact.value);



    if (gdpr.cheched) {
        dataToPost.append("entry.90757463", 'Έχω ενημερωθεί για την επεξεργασία των προσωπικών μου δεδομένων και συναινώ σε αυτήν, όπως ειδικά ορίζεται στο κεφάλαιο "Όροι GDPR" (βλέπε κάτω μέρος σελίδας)')
    }


    if (newsletter.checked) {
        dataToPost.append("entry.1762482218", "Ναι")
    } else {
        dataToPost.append("entry.1762482218", "Όχι")
    }

    return dataToPost;
}

