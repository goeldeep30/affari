drop schema if exists affari;
create schema affari;
  use affari;

  create table users(
    mobile_num bigint primary key,
    pwd varchar(20)
  );

  create table projects(
    pid int primary key,
    p_title varchar(15) not null,
    p_desc varchar(100),
    p_owner bigint not null
  );

  create table tasks(
    tid int primary key,
    pid int not null,
    t_title varchar(15) not null,
    t_desc varchar(100),
    t_status varchar(15) not null,
    t_assigned_to bigint
  );
