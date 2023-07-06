function menu(){
    var x = document.getElementById("sdbar");
    if(x.style.width == "12em"){
        x.style.width = "4em";
        x.style.overflow = "hidden";
        x.style.transition = "all 0.3s";
    }
    else{
        x.style.width = "12em";
        x.style.transition = "all 0.3s";
    }
}
function openAcademics(){
    window.open("academics.php","_self");
}
function openInsert(){
    window.open("insert.php","_self");
}
function openDelete(){
    window.open("delete.php","_self");
}
function openUpdate(){
    window.open("update.php","_self");
}
function openAttendance(){
    window.open("attendance.php","_self");
}