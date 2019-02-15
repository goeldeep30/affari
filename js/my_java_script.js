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

function create_project() {
  $("#div_create_proj").load("model/create_project.php");
}

function create_task() {
  $("#div_create_task").load("model/create_task.php");
}

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
  $("#projects").load("model/get_projects.php");
});

$(function(){
  $("#div_assign_task").load("model/assign_tasks.php");
});

// $('#frm_create_project').submit(function() {
//   var post_data = $('#frm_create_project').serialize();
//   $.post('model/create_project.php', post_data, function(data) {
//   });
// });
