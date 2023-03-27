var addBtn=document.getElementById('addBtn');
var studentName=document.getElementById('studentName');
var studentEmail=document.getElementById('studentEmail');
var Subject=document.getElementById('Subject');
var mess=document.getElementById('mess');
var inputs=document.getElementsByClassName('form-control');
var students=[];

if(localStorage.getItem("studentslist")==null){
  students=[];
}
else{
  students=JSON.parse(localStorage.getItem("studentslist"));
  displayStudent();
}
addBtn.onclick=function(){
    addStudents();
    displayStudent();
    resetForm();
  }
  
  
function addStudents(){
    var studentt={
        studentName:studentName.value,
        studentEmail:studentEmail.value,
        Subject:Subject.value,
        mess:mess.value,

    }

    students.push(studentt);
    localStorage.setItem("studentslist",JSON.stringify(students));

} 
  function displayStudent(){
    var holder="";
    for(var i=0;i<students.length;i++){
        holder+="<tr><td>"+students[i].studentName+"</td><td>"+students[i].studentEmail+"</td><td>"+students[i].Subject+"</td><td>"+students[i].mess+"</td><td><button onclick='deletestudent("+i+")'class='btn btn-warning'>Delete</button></td></tr>";
    }
    document.getElementById("tableBody").innerHTML=holder;
}
function resetForm(){
    for(var i=0 ; i<inputs.length ; i++){
        inputs[i].value=""
    }
  }   
function deletestudent(d){
     alert("sure delete");
     students.splice(d,1);
     displayStudent();
  
  }
  
  