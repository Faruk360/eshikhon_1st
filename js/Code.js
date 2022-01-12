function sub(){
    var fullName = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var age = document.getElementById('age').value;
    if(age >= 18){
        alert("Are you sure you are 18+ years old?")
        document.write("Welcome Our Site ");
    }else if(age < 18 && age >= 2){
        alert("Only Visitor 18+ Years ")
        document.write("Danger");
    }else if(age <= -2){
        document.write("It is not Your Age plz Enter your Rigth Age");
    }else{
        alert("Enter Your Age");
    }
}