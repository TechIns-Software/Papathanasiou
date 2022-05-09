const url =  "https://docs.google.com/forms/u/0/d/e/1FAIpQLSeEpwV_HivWEMek4K3-jK5A3eoOQOqjSXNV-RMr9-AU6Pp2WA/formResponse"; //action url
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


      //  //fill name attributes to corresponding values
      
      const dataToPost = new FormData(); //formdata API
      const email = document.getElementById("email");
      const name = document.getElementById("name");
      const phone = document.getElementById("phone");
      const house_year = document.getElementById("quest2")
      const sqarehouse= document.getElementById("quest3");
      const postcode= document.getElementById("quest4");
      const owner= document.getElementById("quest5");
      const reside= document.getElementById("quest6");
      const houseorapp= document.getElementById("quest7");
      const houseorappinfo= document.getElementById("quest8");
      const earthquake= document.getElementById("quest9");
      const houseloan= document.getElementById("quest11");
      const damages= document.getElementById("quest12");
      const contentsins= document.getElementById("quest13");
      const contact= document.getElementById("quest14");

  
      const gdpr = document.getElementById("gdpr");
   

      dataToPost.append("emailAddress", email.value);
      dataToPost.append("entry.633567026", name.value);
      dataToPost.append("entry.1258432177", phone.value);
      dataToPost.append("entry.2099127015", house_year.value);
      dataToPost.append("entry.1655443830", sqarehouse.value);
      dataToPost.append("entry.1643879066", postcode.value);
      dataToPost.append("entry.343883878", owner.value);
      dataToPost.append("entry.1850679359", reside.value);
      dataToPost.append("entry.1906900996", houseorapp.value);
      dataToPost.append("entry.2024406784", houseorappinfo.value);
      dataToPost.append("entry.20716221", earthquake.value);
      dataToPost.append("entry.1824982590", houseloan.value);
      dataToPost.append("entry.2035460303", damages.value);
      dataToPost.append("entry.2005289900", contentsins.value);
      dataToPost.append("entry.941353677", contact.value);
   
      if (gdpr.checked ){
        
        dataToPost.append("entry.90757463", "Yes");
      }

      
      if (newsletter.checked){
          dataToPost.append("entry.1762482218","Yes")  
      }else{
          dataToPost.append("entry.1762482218","No")  
      }

    return  dataToPost;
}



