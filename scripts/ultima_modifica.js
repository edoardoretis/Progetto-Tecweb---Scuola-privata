function initArray() {  
    this.length = initArray.arguments.length
    for (var i = 0; i < this.length; i++)
    this[i+1] = initArray.arguments[i]
}

function lastModify() {
    var DOWArray = new initArray("Domenica","Lunedì","Martedì","Mercoledì",
    "Giovedì","Venerdì","Sabato");

    var MOYArray = new initArray("Gennaio","Febbraio","Marzo","Aprile",
    "Maggio","Giugno","Luglio","Agosto","Settembre",
    "Ottobre","Novembre","Dicembre");
    
    var LastModDate = new Date(document.lastModified);
    // var result = (DOWArray[(LastModDate.getDay()+1)], ", ", LastModDate.getDate(), " ", MOYArray[(LastModDate.getMonth()+1)], ".");
    // document.getElementById("lastModify").innerHTML += result;
    document.write(DOWArray[(LastModDate.getDay()+1)],", ");
    document.write(LastModDate.getDate()," ");
    document.write(MOYArray[(LastModDate.getMonth()+1)]);
    document.write(".");
}


/*
var DOWArray = new initArray("Domenica","Lunedì","Martedì","Mercoledì",
                            "Giovedì","Venerdì","Sabato");
var MOYArray = new initArray("Gennaio","Febbraio","Marzo","Aprile",
                            "Maggio","Giugno","Luglio","Agosto","Settembre",
                            "Ottobre","Novembre","Dicembre");
var LastModDate = new Date(document.lastModified);
document.write(DOWArray[(LastModDate.getDay()+1)],", ");
document.write(LastModDate.getDate()," ");
document.write(MOYArray[(LastModDate.getMonth()+1)]);
document.write(".");*/