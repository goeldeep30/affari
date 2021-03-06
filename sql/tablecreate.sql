drop schema if exists affari;
create schema affari;
  use affari;

  delete from users where 1<2;
  delete from projects where 1<2;
  delete from tasks where 1<2;
  delete from project_members where 1<2;

  create table users(
    mobile_num bigint primary key,
    f_name varchar(20) not null,
    l_name varchar(20) not null,
    pwd varchar(20) not null
  );

  create table projects(
    pid int primary key AUTO_INCREMENT,
    p_title varchar(100) not null,
    p_desc varchar(1000),
    p_owner bigint not null
  );

  create table tasks(
    tid int primary key AUTO_INCREMENT,
    pid int not null,
    t_title varchar(100) not null,
    t_desc varchar(1000),
    t_status varchar(15) not null,
    t_assigned_to bigint not null
  );

  create table project_members(
    pid int not null,
    p_member bigint not null,
    UNIQUE KEY the_key (pid,p_member)
  );
