
	
            let url = "https://docs.google.com/forms/u/0/d/e/1FAIpQLSentaiL91WEMhNfHpJO8Pg0Hj_tU9WtTBKbaIarV35RIhbtDQ/formResponse"; //action url
            let submitbtn = document.getElementById("submitform"); //form element

            submitbtn.addEventListener("submit", (e) => {
                e.preventDefault(); //prevent default behaviour

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
            });

            //populating input data
            function getInputData() {
                let dataToPost = new FormData(); //formdata API
                 const email =document.getElementById("email");
                 const name =document.getElementById("email");
                 const offerfor =document.getElementById("offerfor");
                 const date_birth =document.getElementById("date_birth");
                 const familynames =document.getElementById("familynames");
                 const safeamount =document.getElementById("safeamount");
                 const safehospital =document.getElementById("safehospital");
                 const koinasfalia =document.getElementById("koinasfalia");
                 const quest1 =document.getElementById("quest1");
                 const quest2 =document.getElementById("quest2");
                 const quest3 =document.getElementById("quest3");
                 const quest4 =document.getElementById("quest4");
                 const quest5 =document.getElementById("quest5");
                 const quest6 =document.getElementById("quest6");
                 const fullname =document.getElementById("fullname");
                 const phone =document.getElementById("phone");
                 const findhow =document.getElementById("findhow");
                 const synergathepikinonia =document.getElementById("synergathepikinonia");

                 const meeting_time =document.getElementById("meeting-time");
            
                 const gdpr =document.getElementById("gdpr");

                 const newsletter =document.getElementById("newsletter");

                 



                //fill name attributes to corresponding values
                dataToPost.append("entry.232618529_day", day);
                dataToPost.append("entry.232618529_month", month);
                dataToPost.append("entry.232618529_year", year);
                dataToPost.append("entry.232618529_hour", hour);
                dataToPost.append("entry.232618529_minute", minute);

      

                return dataToPost;
            }
     
