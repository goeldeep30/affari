drop schema if exists affari;
create schema affari;
  use affari;

  create table users(
    mobile_num bigint primary key,
    f_name varchar(20) not null,
    l_name varchar(20) not null,
    pwd varchar(20) not null
  );

  create table projects(
    pid int primary key AUTO_INCREMENT,
    p_title varchar(15) not null,
    p_desc varchar(100),
    p_owner bigint not null
  );

  create table tasks(
    tid int primary key AUTO_INCREMENT,
    pid int not null,
    t_title varchar(15) not null,
    t_desc varchar(100),
    t_status varchar(15) not null,
    t_assigned_to bigint
  );

  create table project_members(
    pid not null,
    tid,
    p_member bigint not null
  );
