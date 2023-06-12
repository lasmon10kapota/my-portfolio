function onLoadingPage(){ 
    const timeOBJ = new Date();
    var time = timeOBJ.getHours();
    var greeting;   
    if (time>= 18){  
    greeting = "Good Evening!";
    } else if (time >= 12 ){
    greeting = "Good Afternoon!";
    } else if (time >= 0){
    greeting = "Good Morning!";
    }
    alert(greeting);
}
