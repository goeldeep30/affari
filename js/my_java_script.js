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
//http://localhost/affari/
function auto_reload(){
  setInterval(function(){ $("#projects").load("model/get_projects.php"); }, 3000);
}

function create_user() {
  //alert("name "+$('#txt_mobile_num').val()+"  pwd:"+$('#txt_pwd').val());
  if($('#txt_pwd').val()==$('#txt_re_pwd').val()){
  $.post("model/create_user.php",
  {
    f_name: $('#txt_f_name').val(),
    l_name: $('#txt_l_name').val(),
    uid: $('#txt_mobile_num').val(),
    pwd: $('#txt_pwd').val()
  },
  function(data, status){
    //alert("User creation: " + data);
    window.location.href = "signin.html";
  });
}else{
  alert("Password do not match: Enter again");
}
  // $("#div_create_task").load("model/create_task.php");
}

function create_project() {
  // $("#div_create_proj").load("model/create_project.php");

  $.post("model/create_project.php",
  {
    title: $('#txt_proj_name').val(),
    desc: $('#txt_proj_desc').val()
  },
  function(data, status){
    //alert("Data: " + data + "\nStatus: " + status);
  });

  $("#projects").load("model/get_projects.php");
}

function create_task() {
  $.post("model/create_task.php",
  {
    title: $('#txt_task_title').val(),
    desc: $('#txt_task_desc').val(),
    status: "to do"
  },
  function(data, status){
    //alert("Data: " + data + "\nStatus: " + status);
  });
  // $("#div_create_task").load("model/create_task.php");
}

function any_curr_user() {
  $.post("model/get_curr_user.php",
  {
  },
  function(data, status){
    //alert("Data: " + data + "\nStatus: " + status);
  });
  // $("#div_create_task").load("model/create_task.php");
}

function authenticate_user() {
  //alert('working');
  $.post("model/authenticate_user.php",
  {
    uid: $('#txt_uid').val(),
    pwd: $('#txt_pwd').val()
  },
  function(data, status){
    if(data=='success'){
      window.location.href = "my_projects.html";
    }else{
      alert('invalid credentials');
    }
    //alert("Data: " + data + "\nStatus: " + status);
  });
  // $("#div_create_task").load("model/create_task.php");
}

function select_proj(proj_id) {
  //alert('working');
  $.post("model/select_project.php",
  {
    project_id: proj_id
  },
  function(data, status){

    //alert("Data: " + data + "\nStatus: " + status);
    window.location.href = "projdashboard.html";
  });
  // $("#div_create_task").load("model/create_task.php");
}

function add_proj_member() {
  //alert('working');
  $.post("model/add_project_member.php",
  {
    member_id: $('#txt_new_prj_mbr_m_num').val()
  },
  function(data, status){
      //window.location.href = "index.html";
    //alert("Data: " + data + "\nStatus: " + status);
  });
  // $("#div_create_task").load("model/create_task.php");
}

function signout_user() {
  //alert('working');
  $.post("model/signout_user.php",
  {
  },
  function(data, status){
      window.location.href = "index.html";
    //alert("Data: " + data + "\nStatus: " + status);
  });
  // $("#div_create_task").load("model/create_task.php");
}

function assign_task() {
  alert('working');
  // $.post("model/signout_user.php",
  // {
  // },
  // function(data, status){
  //     window.location.href = "index.html";
  //   //alert("Data: " + data + "\nStatus: " + status);
  // });
  // $("#div_create_task").load("model/create_task.php");
}

function get_proj_members(){
  $("#slct_proj_members").load("model/get_proj_members.php");
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
  $("#div_assign_task").load("model/get_assigned_tasks.php");
});


// $('#frm_create_project').submit(function() {
//   var post_data = $('#frm_create_project').serialize();
//   $.post('model/create_project.php', post_data);
// });
