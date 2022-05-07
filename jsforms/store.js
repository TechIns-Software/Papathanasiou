let url =
    "https://docs.google.com/forms/u/0/d/e/1FAIpQLSf5PVJy_rK_Mn9lFeocImW5EvMge-GXddGkOQTxqcGpjeF_Dw/formResponse"; //action url
let submitbtn = document.getElementById("submitform"); //form element

submitbtn.addEventListener("click", (e) => {
    e.preventDefault(); //prevent default behaviour

    const dataToPost = new FormData(); //formdata API
    const email = document.getElementById("email");
    const name = document.getElementById("fullname");
    const phone = document.getElementById("phone");
    const store_creation = document.getElementById("store_creation");
    const store_long = document.getElementById("store_long");
    const postcode = document.getElementById("postcode");

    const typeofstore = document.getElementById("quest1");
    const owner = document.getElementById("quest2");
    const workingthere = document.getElementById("quest3");
    const level = document.getElementById("quest4");
    const levelinfo = document.getElementById("quest5");
    const earthque = document.getElementById("quest6");
    const damage = document.getElementById("quest7");

    const insu = document.getElementById("quest8");

    const contact = document.getElementById("quest9");


    const gdpr = document.getElementById("gdpr");
    const newsletter = document.getElementById("newsletter");





    if (email.value && name.value && store_creation.value   && store_long.value && postcode.value  && typeofstore.value   && owner.value && workingthere.value 
        && workingthere.value  && level.value  && earthque.value  && damage.value   && insu.value   && contact.value   ) {

        //  //fill name attributes to corresponding values


        dataToPost.append("emailAddress", email.value);
        dataToPost.append("entry.633567026", name.value);
        dataToPost.append("entry.1258432177", phone);
        dataToPost.append("entry.2099127015", store_creation.value);
        dataToPost.append("entry.1655443830", store_long.value);
        dataToPost.append("entry.1643879066", postcode.value);
        dataToPost.append("entry.1824238691", typeofstore.value);
        dataToPost.append("entry.343883878", owner.value);
        dataToPost.append("entry.1850679359", workingthere.value);
        dataToPost.append("entry.1906900996", level.value);
        dataToPost.append("entry.2024406784", levelinfo.value);
        dataToPost.append("entry.20716221", earthque.value);
        dataToPost.append("entry.2035460303", damage.value);
        dataToPost.append("entry.2005289900", insu.value);

        dataToPost.append("entry.941353677", contact.value);

        
        if (newsletter.checked){
            dataToPost.append("entry.1762482218","Ναι")  
        }else{
            dataToPost.append("entry.1762482218","Όχι")  
        }

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

