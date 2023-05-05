

var form = document.getElementById("form");

form.addEventListener("submit",(e)=>{
    e.preventDefault(); 

    var event =  $('#event');

    create(event.val());

    event.val("");
    location.reload();
})