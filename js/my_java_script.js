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
  $("#new_project").load("get_projects.html");
});

$(function(){
  $("#members").load("members.html");
});

$(function(){
  $("#projects").load("get_projects.html");
});

// $(document).ready(function(){
//    $("#lk_add_new_member").click(function(){
//      $("#add_member").load("add_new_member.html");
//    });
//  });
