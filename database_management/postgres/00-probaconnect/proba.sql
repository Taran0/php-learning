create table projects (
    id bigserial not null primary key,
    project_starttime datetime,
    project_deadline datetime,
    project_expectedtime datetime,
    project_donetime time,
    project_status varchar(32),
    task_note text
);

create table tasks (
    id bigserial not null primary key,
    task_name varchar(128),
    task_goal varchar(256),
    task_pt80 varchar(128),
    task_pt20 varchar(128),
    task_starttime datetime,
    task_deadline datetime,
    task_expectedtime time,
    task_donetime time,
    task_status varchar(32),
    task_note text,
    project_id bigint references project (id)
);

