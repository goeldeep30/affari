function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  ev.target.appendChild(document.getElementById(data));
}

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}

function auto_reload(){
  setInterval(function(){ $("#projects").load("http://localhost/affari/model/get_projects.php"); }, 3000);
}

function create_user() {
  alert(hii);
  // $.post("http://localhost/affari/model/create_user.php",
  // {
  //   uid: 74126,
  //   pwd: "password"
  // },
  // function(data, status){
  //   alert("Data: " + data + "\nStatus: " + status);
  // });
  // $("#div_create_task").load("http://localhost/affari/model/create_task.php");
}

function create_project() {
  // $("#div_create_proj").load("http://localhost/affari/model/create_project.php");

  $.post("http://localhost/affari/model/create_project.php",
  {
    title: $('#txt_proj_name').val(),
    desc: $('#txt_proj_desc').val()
  },
  function(data, status){
    alert("Data: " + data + "\nStatus: " + status);
  });

  $("#projects").load("http://localhost/affari/model/get_projects.php");
}

function create_task() {
  $.post("http://localhost/affari/model/create_task.php",
  {
    pid: "1",
    title: $('#txt_task_title').val(),
    desc: $('#txt_task_desc').val(),
    status: "to do"
  },
  function(data, status){
    alert("Data: " + data + "\nStatus: " + status);
  });
  // $("#div_create_task").load("http://localhost/affari/model/create_task.php");
}

$(function(){
  $("#slct_proj_members").load("http://localhost/affari/model/get_proj_members.php");
});

$(function(){
  $("#nav-placeholder").load("navbar.html");
});

$(function(){
  $("#create_task").load("create_task.html");
});

$(function(){
  $("#add_member").load("add_new_member.html");
});

$(function(){
  $("#new_project").load("new_project.html");
});

$(function(){
  $("#members").load("members.html");
});

$(function(){
  $("#projects").load("http://localhost/affari/model/get_projects.php");
});

$(function(){
  $("#div_assign_task").load("http://localhost/affari/model/assign_tasks.php");
});


// $('#frm_create_project').submit(function() {
//   var post_data = $('#frm_create_project').serialize();
//   $.post('model/create_project.php', post_data);
// });
