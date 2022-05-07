let url =
    "https://docs.google.com/forms/u/0/d/e/1FAIpQLSfOmHqdANgrb21fpOW5EXt57OTIq24QbFD6OtZIJ0vdVXE90w/formResponse"; //action url
let submitbtn = document.getElementById("submitform"); //form element

submitbtn.addEventListener("click", (e) => {
    e.preventDefault(); //prevent default behaviour

    const dataToPost = new FormData(); //formdata API
    const email = document.getElementById("email");
    const name = document.getElementById("fullname");
    const phone = document.getElementById("phone");
    const boatname = document.getElementById("quest1");
    const creationyear = document.getElementById("quest2");
    const numberofnio = document.getElementById("quest3");

    const port = document.getElementById("quest4");
    const typeofboat = document.getElementById("quest5");
    const useofboat = document.getElementById("quest6");
    const powerofboat = document.getElementById("quest7");
    const lenghtofboat = document.getElementById("quest8");
    const priceofboat = document.getElementById("quest9");
    const damage = document.getElementById("quest10");
    const extrains = document.getElementById("quest11");
    const fireins = document.getElementById("quest12");
    const dangerins = document.getElementById("quest13");
    const transportins = document.getElementById("quest14");
    const cashins = document.getElementById("quest15");
    const contact = document.getElementById("quest16");


    const gdpr = document.getElementById("gdpr");
    const newsletter = document.getElementById("newsletter");





    if (email.value && name.value  && boatname.value  && creationyear.value    && numberofnio.value   && port.value   && typeofboat.value 
        && useofboat.value  && powerofboat.value  && lenghtofboat.value && priceofboat.value && damage.value  && contact.value) {

        //  //fill name attributes to corresponding values


        dataToPost.append("emailAddress", email.value);
        dataToPost.append("entry.633567026", name.value);
        dataToPost.append("entry.1258432177", phone.value);
        dataToPost.append("entry.2099127015", boatname.value);
        dataToPost.append("entry.1850679359", creationyear.value);

        dataToPost.append("entry.1655443830", numberofnio.value);
        dataToPost.append("entry.1643879066", port.value);
        dataToPost.append("entry.343883878", typeofboat.value);
        dataToPost.append("entry.1906900996", useofboat.value);

        dataToPost.append("entry.2024406784", powerofboat.value);
        dataToPost.append("entry.20716221", lenghtofboat.value);
        dataToPost.append("entry.1824982590", priceofboat.value);
        dataToPost.append("entry.2035460303", damage.value);
        dataToPost.append("entry.2005289900", extrains.value);
        dataToPost.append("entry.1975740703", fireins.value);
        dataToPost.append("entry.614545061", dangerins.value);
        dataToPost.append("entry.465347581", transportins.value);
        dataToPost.append("entry.602755722", cashins.value);
        dataToPost.append("entry.941353677", contact.value);


        
        if (newsletter.checked){
            dataToPost.append("entry.1762482218","Ναι")  
        }else{
            dataToPost.append("entry.1762482218","οχι")  
        }

        
        if (gdpr.checked) {
            dataToPost.append("entry.90757463", "Έχω ενημερωθεί για την επεξεργασία των προσωπικών μου δεδομένων και συναινώ σε αυτήν, όπως ειδικά ορίζεται στο κεφάλαιο Όροι GDPR (βλέπε κάτω μέρος σελίδας)");
            
            console.log(dataToPost)
            fetch(url, {
                method: "POST",
                mode: "no-cors",
                header: {
                    'Content-Type': 'application/json'
                },
                body: dataToPost
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

