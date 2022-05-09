const url =    "https://docs.google.com/forms/u/0/d/e/1FAIpQLSe9dIVVrXRfh8XsXPsjkiFN2jJKKiUVeMtqSrUcxptdTK7OPA/formResponse"; //action url
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
      const date_birth = document.getElementById("date_birth").value;
      const location= document.getElementById("quest1");
      const postcode= document.getElementById("postcode");
      const type= document.getElementById("quest2");
      const file= document.getElementById("quest3");
      const contact= document.getElementById("contact");
  
  
      const day = date_birth.substr(8, 2);
      const  month = date_birth.substr(5, 2);
      const year = date_birth.substr(0, 4);
  
      const gdpr = document.getElementById("gdpr");
   

      dataToPost.append("emailAddress", email.value);
      dataToPost.append("entry.633567026", name.value);
      dataToPost.append("entry.1258432177", phone.value);
      dataToPost.append("entry.126568043_day", day);
      dataToPost.append("entry.126568043_month", month);
      dataToPost.append("entry.126568043_year", year);
      dataToPost.append("entry.187553183", location.value);
      dataToPost.append("entry.308663816", postcode.value);
      dataToPost.append("entry.2066095727", type.value);
      dataToPost.append("------", file);
      dataToPost.append("entry.941353677", contact.value);




      
      if (newsletter.checked){
          dataToPost.append("entry.1762482218","Ναι")  
      }else{
          dataToPost.append("entry.1762482218","οχι")  
      }

    return  dataToPost;
}



