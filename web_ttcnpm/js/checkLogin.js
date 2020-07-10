let dataBase = [
    {
        username: "Nhung",
        password: "123456"
    },
    {
        username: "Linh",
        password: "123456"
    }
]

function checkLogin() {
    var dataForm = document.getElementById("loginForm");
    //Check// console.log("Username: " + dataForm.elements[0].value + " Password: " + dataForm.elements[1].value);
    for(i = 0; i < dataBase.length; i++){
        if(dataForm.elements[0].value == dataBase[i].username && dataForm.elements[1].value == dataBase[i].password){
            console.log("Welcome "+ dataForm.elements[0].value + " nhaa!");
            window.location.assign("home.html");
            return true;
        }
    }
    console.log("Wrong username or password!!");
    return false;
}
 