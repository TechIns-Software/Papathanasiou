
const submitbtn=document.getElementById("submitbtn")

submitbtn.addEventListener('click',(e)=>{
    e.preventDefault(); //prevent default behaviour


    const data = $("#form").serializeArray();
    // const name=document.getElementById("name").value;
    // const email=document.getElementById("email").value;
    // const subject=document.getElementById("subject").value;
    // const msg=document.getElementById("msg").value;

    console.log(data);

    $.ajax({
        type: "POST",
        url: './contact.php',
        data: data,
        success: function(msg) {
            alert("Success");
            document.getElementById("form").reset();
        }
    });



})