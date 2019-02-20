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
  setInterval(function(){ $("#projects").load("model/get_projects.php"); }, 3000);
}

function create_user() {
  if($('#txt_pwd').val()==$('#txt_re_pwd').val()){
  $.post("model/create_user.php",
  {
    f_name: $('#txt_f_name').val(),
    l_name: $('#txt_l_name').val(),
    uid: $('#txt_mobile_num').val(),
    pwd: $('#txt_pwd').val()
  },
  function(data, status){
    window.location.href = "signin.html";
  });
}else{
  alert("Password do not match: Enter again");
}
}

function create_project() {
  $.post("model/create_project.php",
  {
    title: $('#txt_proj_name').val(),
    desc: $('#txt_proj_desc').val()
  },
  function(data, status){
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
    update_dashboard();
  });
}

function any_curr_user() {
  $.post("model/get_curr_user.php",
  {
  },
  function(data, status){
  });
}
function if_no_user(){
  $.post("model/get_curr_user.php",
  {
  },
  function(data, status){
    if(data=='Nil'){
      window.location.href = "index.html";
    }
  });
}

function if_a_user(){
  $.post("model/get_curr_user.php",
  {
  },
  function(data, status){
    if(data!='Nil'){
      window.location.href = "my_projects.html";
    }
  });
}

function assign_task() {
  $.post("model/assign_task.php",
  {
    selected_user: ""+document.getElementById("proj_member_id").value
  },
  function(data, status){
  });

}

function authenticate_user() {
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
  });
}

function select_proj(proj_id) {
  //alert('working');
  $.post("model/select_project.php",
  {
    project_id: proj_id
  },
  function(data, status){
    window.location.href = "projdashboard.html";
  });
}

function add_proj_member() {
  $.post("model/add_project_member.php",
  {
    member_id: $('#txt_new_prj_mbr_m_num').val()
  },
  function(data, status){
  });
}

function signout_user() {
  $.post("model/signout_user.php",
  {
  },
  function(data, status){
      window.location.href = "index.html";
  });
}

function select_task(t_id) {
  $.post("model/select_task.php",
  {
    task_id: t_id
  },
  function(data, status){
    get_proj_members();
  });
}

function change_task_status(tid,status) {
  //alert('working: '+status);
  $.post("model/change_task_status.php",
  {
    task_id: tid,
    task_status: status
  },
  function(data, status){
    update_dashboard();
  });
}

function report_bug(){
  alert("Please Report all your bugs on: deeptanshu.goel@soprasteria.com, with subject Affari and some screenshots.");
}

function update_dashboard(){
  $("#div_todo").load("model/get_todo_tasks.php");
  $("#div_in_progress").load("model/get_inprogress_tasks.php");
  $("#div_done").load("model/get_done_tasks.php");
}

function update_my_projects(){
  $("#projects").load("model/get_projects.php");
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

$(function(){
  $("#div_todo").load("model/get_todo_tasks.php");
});

$(function(){
  $("#div_in_progress").load("model/get_inprogress_tasks.php");
});

$(function(){
  $("#div_done").load("model/get_done_tasks.php");
});

$(function(){
  $("#div_footer").load("footer.html");
});
