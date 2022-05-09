


const url = "https://docs.google.com/forms/u/0/d/e/1FAIpQLSf18O_YnSXCrXpkpcr1e-2dSW_EpRyJ3ehu6rKPP3U_qKUSdA/formResponse"; //action url

let submitbtn = document.getElementById("submitform"); //form element

submitbtn.addEventListener("click", (e) => {
    e.preventDefault(); //prevent default behaviour
    const email = document.getElementById("email");

    const broker = document.getElementById("broker");
    const contact = document.getElementById("communication");
    const name = document.getElementById("name");
    const emailfinal = document.getElementById("email2");

    const gdpr = document.getElementById("gdpr");
    const newsletter = document.getElementById("newsletter");

    if (email.value && broker.value && contact.value && emailfinal.value) {


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
        alert(" You must fill in the neccessary fields to make the submission");
    }


});



function getInputData() {


    //  //fill name attributes to corresponding values

    const dataToPost = new FormData(); //formdata API
    const email = document.getElementById("email");
    const familytype = document.getElementById("familytype");

    const date_birth = document.getElementById("date_birth");
    const date_birth1 = document.getElementById("date_birth_1");
    const date_birth2 = document.getElementById("date_birth_2");
    const date_birth3 = document.getElementById("date_birth_3");
    const date_birth4 = document.getElementById("date_birth_4");

    const movegreece = document.getElementById("movegreece");
    const socialinsurance = document.getElementById("socialinsurance");
    const greektaxnumber = document.getElementById("greektaxnumber");
    const carbuy = document.getElementById("carbuy");
    const housebuy = document.getElementById("housebuy");
    const boatbuy = document.getElementById("boatbuy");
    const ownbuisness = document.getElementById("ownbuisness");
    const liability = document.getElementById("liability");
    const abouthealthincs = document.getElementById("abouthealthincs");
    const basicprogram = document.getElementById("basicprogram");
    const payless = document.getElementById("payless");
    const costhospital = document.getElementById("costhospital");
    const preferhospital = document.getElementById("preferhospital");
    const preferhospitalinfo = document.getElementById("whichhospital");
    const upperlimithospital = document.getElementById("upperlimithospital");
    const annualhealthbuget = document.getElementById("annualhealthbuget");
    const broker = document.getElementById("broker");
    const contact = document.getElementById("communication");
    const name = document.getElementById("name");
    const emailfinal = document.getElementById("email2");
    const phonefinal = document.getElementById("number");

    const gdpr = document.getElementById("gdpr");
    const newsletter = document.getElementById("newsletter");

    dataToPost.append("emailAddress", email.value);
    dataToPost.append("entry.1467056452", familytype.value);
    dataToPost.append("entry.941613957", date_birth.value +" ,"+ date_birth1.value  +" ,"+ date_birth2.value  +" ,"+ date_birth3.value +" ,"+ date_birth4.value  );

    dataToPost.append("entry.514993907", movegreece.value);
    dataToPost.append("entry.890038263", socialinsurance.value);
    dataToPost.append("entry.1231788444", greektaxnumber.value);
    dataToPost.append("entry.1953207478", carbuy.value);
    dataToPost.append("entry.1409969937", housebuy.value);
    dataToPost.append("entry.636993", boatbuy.value);
    dataToPost.append("entry.136316478", ownbuisness.value);
    dataToPost.append("entry.1124791981", liability.value);
    dataToPost.append("entry.1423294094", abouthealthincs.value);
    dataToPost.append("entry.1247487671", basicprogram.value);
    dataToPost.append("entry.2058164763", payless.value);
    dataToPost.append("entry.344084197", costhospital.value);
    dataToPost.append("entry.1826958183", preferhospital.value);
    dataToPost.append("entry.1234399273", preferhospitalinfo.value);
    dataToPost.append("entry.1682036085", upperlimithospital.value);
    dataToPost.append("entry.880961175", annualhealthbuget.value);
    dataToPost.append("entry.1289780177", broker.value);
    dataToPost.append("entry.1735460693", contact.value);
    dataToPost.append("entry.222193608", name.value);
    dataToPost.append("entry.833470433", emailfinal.value);
    dataToPost.append("entry.1187542328", phonefinal.value);

    if (gdpr.checked){

        dataToPost.append("entry.1570452407",'Yes');
    }

    if (newsletter.checked) {
        dataToPost.append("entry.204699518", "Yes")
    } else {
        dataToPost.append("entry.204699518", "No")
    }

    return dataToPost;
}

