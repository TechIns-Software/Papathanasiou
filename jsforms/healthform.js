let url = "https://docs.google.com/forms/d/e/1FAIpQLSeF8OL86cETw1M3bvk_ufoclxbBUVjetsF_zefJwX6RJ-f7MQ/viewform"; //action url for health
let submitbtn = document.getElementById("submit-form"); //form element

submitbtn.addEventListener("click", (e)=>{
    e.preventDefault();//prevent default behaviour

    fetch(url,{
        method: "POST",
        mode: "no-cors",
        header:{
            'Content-Type': 'application/json'
            },
        body: getInputData()
    })
    .then(data=>{
        console.log(data);
        alert("Form Submitted");
    })
    .catch(err=>console.error(err)); //promise based
});

//populating input data
function getInputData(){
    let dataToPost = new FormData(); //formdata API

    //fill name attributes to corresponding values
    dataToPost.append("entry.294341084", document.querySelector("#inp1").value);

    return dataToPost;
}
