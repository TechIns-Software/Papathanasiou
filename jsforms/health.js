let url =
    "https://docs.google.com/forms/u/0/d/e/1FAIpQLSeF8OL86cETw1M3bvk_ufoclxbBUVjetsF_zefJwX6RJ-f7MQ/formResponse"; //action url
let submitbtn = document.getElementById("submitform"); //form element

submitbtn.addEventListener("click", (e) => {
    e.preventDefault(); //prevent default behaviour


    const email = document.getElementById("email");
    const loc = document.getElementById("loc");
    const fullname = document.getElementById("fullname");
    const phone = document.getElementById("phone");
    const meeting = document.getElementById("meeting-time").value;
    const gdpr = document.getElementById("gdpr");

    if (email.value && loc.value && fullname.value && phone.value &&  meeting.value ) {



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
    const date_birth = document.getElementById("date_birth");
    const loc = document.getElementById("loc");
    const offerfor = document.getElementById("offerfor");

    const familyinfo = document.getElementById("familyinfo");
    const familyinfo1 = document.getElementById("familyinfo_1");
    const familyinfo2 = document.getElementById("familyinfo_2");
    const familyinf3 = document.getElementById("familyinfo_3");
    const familyinf4 = document.getElementById("familyinfo_4");

    const safeamount = document.getElementById("safeamount");
    const safehospital = document.getElementById("safehospital");
    const koinasfalia = document.getElementById("koinasfalia");
    const lessmoney = document.getElementById("quest1");
    const nosilia = document.getElementById("quest2");
    const doctors = document.getElementById("quest3");
    const outeurope = document.getElementById("quest4");
    const aftersurgery = document.getElementById("quest5");
    const insuranceamount = document.getElementById("quest6");
    const fullname = document.getElementById("fullname");
    const phone = document.getElementById("phone");
    const findhow = document.getElementById("findhow");
    const synergathepikinonia = document.getElementById("synergathepikinonia");
    const meeting = document.getElementById("meeting-time").value;

    const day = meeting.substr(8, 2);
    const  month = meeting.substr(5, 2);
    const year = meeting.substr(0, 4);
    const hour = meeting.substr(11, 2);
    const minute = meeting.substr(14, 2);

    const gdpr = document.getElementById("gdpr");
    const newsletter = document.getElementById("newsletter")
    

    dataToPost.append("emailAddress", email.value);
    dataToPost.append("entry.122799716", name.value);
    dataToPost.append("entry.606906244", date_birth.value);
    dataToPost.append("entry.907161857", loc.value);
    dataToPost.append("entry.619773039", offerfor.value);
    dataToPost.append("entry.1583976706", familyinfo.value+" , "+  familyinfo1.value +" , "+  familyinfo2.value +" , "+ familyinf3.value+" , "+ familyinf4.value);

    dataToPost.append("entry.82583277", safeamount.value);
    dataToPost.append("entry.1758492893", safehospital.value);
    dataToPost.append("entry.1724228595", koinasfalia.value);
    dataToPost.append("entry.1081812867", lessmoney.value);
    dataToPost.append("entry.457555376", nosilia.value);
    dataToPost.append("entry.799554824", doctors.value);
    dataToPost.append("entry.1538654494", outeurope.value);
    dataToPost.append("entry.1044707729", aftersurgery.value);
    dataToPost.append("entry.1247490115", insuranceamount.value);
    dataToPost.append("entry.351314268", fullname.value);
    dataToPost.append("entry.2142741617", phone.value);
    dataToPost.append("entry.423784677", findhow);
    dataToPost.append("entry.1038893661", synergathepikinonia.value);

    dataToPost.append("entry.232618529_day", day);
    dataToPost.append("entry.232618529_month", month);
    dataToPost.append("entry.232618529_year", year);
    dataToPost.append("entry.232618529_hour", hour);
    dataToPost.append("entry.232618529_minute", minute);
    
    if (newsletter.checked){
        dataToPost.append("entry.306761765","Επιθυμώ να ενημερώνομαι για μελλοντικές προωθητικές ενέργειες που αφορούν σε προϊόντα και υπηρεσίες της Greek Insurance Leaders")  
    }


    return  dataToPost;
}

