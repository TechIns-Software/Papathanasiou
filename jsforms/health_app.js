
	
            let url = "https://docs.google.com/forms/u/1/d/e/1FAIpQLSfc593KeuwLJJMhiHkmQ1xaGHc9BtQXXoNbpoaEo-UaWwE4gQ/formResponse"; //action url
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
                 const name =document.getElementById("name");
                 const mildename =document.getElementById("midlename");
                 const surname =document.getElementById("surname");
                 const fathername =document.getElementById("fathername");
                 const gender =document.getElementById("quest1");
                 const birthday =document.getElementById("birthday");
                 const tax_number =document.getElementById("quest2");

                 const passport=document.getElementById("quest3");
                 const passport1=document.getElementById("quest3_1");
                 const passport2=document.getElementById("quest3_2");
                 const passport3=document.getElementById("quest3_3");
                 const passport4=document.getElementById("quest3_4");


                const nationality=document.getElementById("quest4");

                const proffesion=document.getElementById("quest5");
                const proffesion1=document.getElementById("quest5_1");

                const address=document.getElementById("quest6");

                const height=document.getElementById("quest7");
                const height1=document.getElementById("quest7_1");
                const height2=document.getElementById("quest7_2");
                const height3=document.getElementById("quest7_3");
                const height4=document.getElementById("quest7_4");

                const weight= document.getElementById("quest8");
                const weight1= document.getElementById("quest8_1");
                const weight2= document.getElementById("quest8_2");
                const weight3= document.getElementById("quest8_3");
                const weight4= document.getElementById("quest8_4");

                const familyins=document.getElementById("quest9");


                const fam_info=document.getElementById("quest10");
                const fam_info1=document.getElementById("quest10_1");
                const fam_info2=document.getElementById("quest10_2");
                const fam_info3=document.getElementById("quest10_3");
                const fam_info4=document.getElementById("quest10_4");


                const smoke=document.getElementById("quest20");
                const drink=document.getElementById("quest21");
                const drinkinfo=document.getElementById("quest22");
                const drugs=document.getElementById("quest23");
                const medical=document.getElementById("quest24");
                const medicalinfo=document.getElementById("quest25");
                const surgeries=document.getElementById("quest26");
                const below=document.getElementById("quest27");
                const belowinfo=document.getElementById("quest28");
                const eyes=document.getElementById("eyes");
                const eyesinfo=document.getElementById("quest29");
                const parrentspass=document.getElementById("quest30");
                const parrentspassinfo=document.getElementById("quest31");
                const psycho=document.getElementById("quest32");
                const psychoinfo=document.getElementById("quest33");
                const femalappl=document.getElementById("quest34");
                const femalapplinfo=document.getElementById("quest35");

                const namefinal =document.getElementById("quest38");
                const emailfinal =document.getElementById("quest39");
                const phonefinal =document.getElementById("quest40");

                const gdprcheck=document.getElementById("gdpr");

                const newslettercheck=document.getElementById("newsletter");

                //fill name attributes to corresponding values
                dataToPost.append("emailAddress", email.value);
                dataToPost.append("entry.1467056452", name.value);
                dataToPost.append("entry.38558212", mildename.value);
                dataToPost.append("entry.1997424253", surname.value);
                dataToPost.append("entry.1379425539", fathername.value);
                dataToPost.append("entry.469925385", gender.value);
                dataToPost.append("entry.941613957", birthday.value);
                dataToPost.append("entry.839672007", tax_number.value);
                dataToPost.append("entry.1804970012", passport.value+" ,"+passport1.value+" ,"+passport2.value+" ," +passport3.value+" ," +passport4.value);
                dataToPost.append("entry.514993907", nationality.value);
                dataToPost.append("entry.1632240891", proffesion.value +" ,"+proffesion1.value );
                dataToPost.append("entry.1917501036", address.value);
                dataToPost.append("entry.38294273",  height.value+" ,"+ height1.value +" ,"+ height2.value+ +" ,"+ height3.value+" ,"+ height4.value);
                dataToPost.append("entry.1099529066",  weight.value+" ,"+ weight1.value +" ,"+ weight2.value+ +" ,"+ weight3.value+" ,"+ weight4.value);
                dataToPost.append("entry.1225813473", familyins.value);
                dataToPost.append("entry.301566684", fam_info.value+" , "+fam_info1.value+" , "+fam_info2.value+" , "+fam_info3.value+" , "+fam_info4.value );
                dataToPost.append("entry.729037812",smoke.value);
                dataToPost.append("entry.1970580597",drink.value);
                dataToPost.append("entry.963821912",drinkinfo.value);
                dataToPost.append("entry.1272301928",drugs.value);
                dataToPost.append("entry.1671268397",medical.value);
                dataToPost.append("entry.961297438",medicalinfo.value);
                dataToPost.append("entry.882260024",surgeries.value);
                dataToPost.append("entry.1475893707",below.value);
                dataToPost.append("entry.1042595942",belowinfo.value);
                dataToPost.append("entry.996789788",eyes.value);
                dataToPost.append("entry.1267159117",eyesinfo.value);
                dataToPost.append("entry.1616851602",parrentspass.value);
                dataToPost.append("entry.1854827171",parrentspassinfo.value);
                dataToPost.append("entry.539433339",psycho.value);
                dataToPost.append("entry.326607876",psychoinfo.value);
                dataToPost.append("entry.1078823131",femalappl.value);
                dataToPost.append("entry.1289962175",femalapplinfo.value);
                dataToPost.append("entry.222193608",namefinal);
                dataToPost.append("entry.833470433",emailfinal);
                dataToPost.append("entry.1187542328",phonefinal);

                dataToPost.append("entry.1570452407","Yes");


                dataToPost.append("entry.204699518","Yes");
   

      

                return dataToPost;
            }
     
