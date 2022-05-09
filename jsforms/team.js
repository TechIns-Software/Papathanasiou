const url = "https://docs.google.com/forms/u/0/d/e/1FAIpQLSfPVUd3Tmu_VycUGqHc5Kld-jUtIW2uqubaVktw9bRF2UBpOw/formResponse"; //action url
    
let submitbtn = document.getElementById("submitform"); //form element

submitbtn.addEventListener("click", (e) => {
    e.preventDefault(); //prevent default behaviour

    const email = document.getElementById("email");
    const name = document.getElementById("name");
    const phone = document.getElementById("phone");
    const date_birth = document.getElementById("date_birth");
    const typeofbuisness= document.getElementById("quest1");
    const dangers = document.getElementById("quest2");
    const location = document.getElementById("quest3");

    const sizeofbuisness = document.getElementById("quest4");
    const idikotites = document.getElementById("quest5");
    const averageage = document.getElementById("quest6");

    const check1 = document.getElementById("check1");
    const check2 = document.getElementById("check2");
    const check3 = document.getElementById("check3");
    const check4 = document.getElementById("check4");

    const maxperworker = document.getElementById("quest7");
    const paroxes = document.getElementById("quest8");
    const activeins = document.getElementById("quest9");
    const contact = document.getElementById("quest10");
    const gdpr = document.getElementById("gdpr");
 


    if (email.value && name.value  && date_birth.value && typeofbuisness.value && sizeofbuisness.value && idikotites.value && 
        averageage.value && maxperworker.value && paroxes.value && activeins.value && contact.value )  {

        
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
      const typeofbuisness= document.getElementById("quest1");
      const dangers = document.getElementById("quest2");
      const location = document.getElementById("quest3");
  
      const sizeofbuisness = document.getElementById("quest4");
      const idikotites = document.getElementById("quest5");
      const averageage = document.getElementById("quest6");

      const check1 = document.getElementById("check1");
      const check2 = document.getElementById("check2");
      const check3 = document.getElementById("check3");
      const check4 = document.getElementById("check4");
  
      const maxperworker = document.getElementById("quest7");
      const paroxes = document.getElementById("quest8");
      const activeins = document.getElementById("quest9");
      const contact = document.getElementById("quest10");
      const gdpr = document.getElementById("gdpr");

      const day = date_birth.substr(8, 2);
      const month = date_birth.substr(5, 2);
      const year = date_birth.substr(0, 4);

    
  
      dataToPost.append("emailAddress", email.value);
      dataToPost.append("entry.633567026", name.value);
      dataToPost.append("entry.1258432177", phone.value);
      dataToPost.append("entry.976991370_day", day);
      dataToPost.append("entry.976991370_month", month);
      dataToPost.append("entry.976991370_year", year);
      dataToPost.append("entry.1143246486", typeofbuisness.value);
      dataToPost.append("entry.419579012", dangers.value);
      dataToPost.append("entry.1464358508", location.value);


      if (sizeofbuisness.value !== "200+" ){
        dataToPost.append("entry.187553183", sizeofbuisness.value);
      }else{
        dataToPost.append("entry.187553183.other_option_response", sizeofbuisness.value);
        dataToPost.append("entry.187553183", "__other_option__");
      }

      dataToPost.append("entry.1366856453", idikotites.value);
      dataToPost.append("entry.971282559", averageage.value);
      dataToPost.append("entry.971282559", averageage.value);

      if (check1.checked){
        dataToPost.append("entry.1716053690", check1.value);
      }

      if (check2.checked){
        dataToPost.append("entry.1716053690", check2.value);
      }

      if (check3.checked){
        dataToPost.append("entry.1716053690", check3.value);
      }

      if (check4.checked){
        dataToPost.append("entry.1716053690", check4.value);
      }

     
      dataToPost.append("entry.422256100", maxperworker.value);
      dataToPost.append("entry.1342149247", paroxes.value);
      dataToPost.append("entry.1323030488", activeins.value);
      dataToPost.append("entry.941353677", contact.value);


      if (gdpr.cheched){
        dataToPost.append("entry.90757463",'Έχω ενημερωθεί για την επεξεργασία των προσωπικών μου δεδομένων και συναινώ σε αυτήν, όπως ειδικά ορίζεται στο κεφάλαιο "Όροι GDPR" (βλέπε κάτω μέρος σελίδας)')  
      }
      
      if (newsletter.checked){
          dataToPost.append("entry.1762482218","Ναι")  
      }else{
          dataToPost.append("entry.1762482218","Όχι")  
      }

    return  dataToPost;
}

