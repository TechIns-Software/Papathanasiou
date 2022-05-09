let url =
  "https://docs.google.com/forms/u/0/d/e/1FAIpQLSe-zq63DLJQq71DZtW__I5NpgvBgQCtpF2F2x6Z0OaHVZFWww/formResponse"; //action url
let submitbtn = document.getElementById("submitform"); //form element

submitbtn.addEventListener("click", (e) => {
  e.preventDefault(); //prevent default behaviour

  const dataToPost = new FormData(); //formdata API
  const email = document.getElementById("email");
  const name = document.getElementById("fullname");
  const phone = document.getElementById("phone");
  const trip_start = document.getElementById("trip_start").value;
  const trip_end = document.getElementById("trip_end").value;
  const destination = document.getElementById("quest1");
  const stops = document.getElementById("quest2");
  const stopsinfo = document.getElementById("quest3");
  const travelers = document.getElementById("quest4");
  const extrainst = document.getElementById("quest5");
  const extrains2 = document.getElementById("quest6");
  const contact = document.getElementById("quest7");

  const gdpr = document.getElementById("gdpr");
  const newsletter = document.getElementById("newsletter");

  if (
    email.value &&
    name.value &&
    trip_start &&
    trip_end &&
    destination.value &&
    stops.value &&
    travelers.value &&
    extrainst.value &&
    extrains2.value &&
    contact.value
  ) {
    if (gdpr.checked) {


      fetch(url, {
        method: "POST",
        mode: "no-cors",
        header: {
          "Content-Type": "application/json",
        },
        body: getInputData(),
      })
        .then((data) => {
          console.log(data);
          alert("Form Submitted");
        })
        .catch((err) => console.error(err)); //promise based
    } else {
      alert("GDPR ALERT");
    }
  } else {
    alert(
      " ΠΡΕΠΕΙ ΝΑ ΣΥΜΠΛΗΡΩΣΕΙΣ ΤΑ ΑΠΑΡΑΙΤΗΤΑ ΠΕΔΙΑ ΓΙΑ ΝΑ ΓΙΝΕΙ ΥΠΟΒΟΛΗ ΤΗΣ ΦΟΡΜΑΣ"
    );
  }
});

function getInputData() {
  const dataToPost = new FormData(); //formdata API
  const email = document.getElementById("email");
  const name = document.getElementById("fullname");
  const phone = document.getElementById("phone");
  const trip_start = document.getElementById("trip_start").value;
  const trip_end = document.getElementById("trip_end").value;
  const destination = document.getElementById("quest1");
  const stops = document.getElementById("quest2");
  const stopsinfo = document.getElementById("quest3");
  const travelers = document.getElementById("quest4");
  const extrainst = document.getElementById("quest5");
  const extrains2 = document.getElementById("quest6");
  const contact = document.getElementById("quest7");

  const gdpr = document.getElementById("gdpr");
  const newsletter = document.getElementById("newsletter");

  //  //fill name attributes to corresponding values

  const start_day = trip_start.substr(8, 2);
  const start_month = trip_start.substr(5, 2);
  const start_year = trip_start.substr(0, 4);

  const end_day = trip_end.substr(8, 2);
  const end_month = trip_end.substr(5, 2);
  const end_year = trip_end.substr(0, 4);

  dataToPost.append("emailAddress", email.value);
  dataToPost.append("entry.633567026", name.value);
  dataToPost.append("entry.1258432177", phone.value);

  dataToPost.append("entry.988145198_year", start_year);
  dataToPost.append("entry.988145198_month", start_month);
  dataToPost.append("entry.988145198_day", start_day);

  dataToPost.append("entry.584964533_year", end_year);
  dataToPost.append("entry.584964533_month", end_month);
  dataToPost.append("entry.584964533_day", end_day);

  dataToPost.append("entry.21556658", destination.value);
  dataToPost.append("entry.984834717", stops.value);

  dataToPost.append("entry.1663265762", stopsinfo.value);
  dataToPost.append("entry.160599168", travelers.value);

  dataToPost.append("entry.864936814", extrainst.value);
  dataToPost.append("entry.1850925090", extrains2.value);

  dataToPost.append("entry.941353677", contact.value);

  if (newsletter.checked) {
    dataToPost.append("entry.1762482218", "Ναι");
  } else {
    dataToPost.append("entry.1762482218", "οχι");
  }

  if (gdpr.checked) {
    dataToPost.append(
      "entry.90757463",
      "Έχω ενημερωθεί για την επεξεργασία των προσωπικών μου δεδομένων και συναινώ σε αυτήν, όπως ειδικά ορίζεται στο κεφάλαιο Όροι GDPR (βλέπε κάτω μέρος σελίδας)"
    );
  }

  return dataToPost;
}
