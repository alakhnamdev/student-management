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
function openInsert(){
    window.open("insert.php","_self");
}
function openDelete(){
    window.open("delete.php","_self");
}
function openUpdate(){
    window.open("update.php","_self");
}
function openAcademics(){
    window.open("acdsection.php","_self");
}
function openAttendance(){
    window.open("atdsection.php","_self");
}
function openStdAcademic(){
    window.open("academicStd.php","_self");
}
function openStdAttendance(){
    window.open("attendanceStd.php","_self");
}
function openMath(){
    window.open("atdupdate.php","_self");
}
function openEng(){
    window.open("atdupdate2.php","_self");
}
function openPhy(){
    window.open("atdupdate3.php","_self");
}
function openChem(){
    window.open("atdupdate4.php","_self");
}
function openCom(){
    window.open("atdupdate5.php","_self");
}
function openSubject(){
    window.open("atdcourse.php","_self");
}
function openStudent(){
    window.open("atdstudent.php","_self");
}
function openSubjectAcd(){
    window.open("acdcourse.php","_self");
}
function openStudentAcd(){
    window.open("acdstudent.php","_self");
}
function openNoticeBoard(){
    window.open("noticeboard.php","_self");
}
function openNoticeSection(){
    window.open("nsection.php","_self");
}
function openNotice(){
    window.open("notice.php","_self");
}
function openNoticeDel(){
    window.open("dnotice.php","_self");
}
function openUserSection(){
    window.open("usersection.php","_self");
}