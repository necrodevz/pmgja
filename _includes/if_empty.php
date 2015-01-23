<?php
$create_users_table = "create table if not exists users (
    id tinyint(11) not null auto_increment,
    fname text not null,
    lname text not null,
    trn int(9) not null,
    email text not null,
    `password` text not null,
    `last_login` datetime not null,
    role int(1),
    primary key (`id`)
    );";
    
$create_users_info_table = "create table if not exists users_info (    
    id tinyint(11) not null auto_increment,
    user_id tinyint(11) not null,
    land_num int(10),
    lime_num int(10),
    digi_num int(10),
    add_line_one text not null,
    add_line_two text not null,
    parish text not null,
    employed tinyint(1),
    company text,
    company_add_line_one text,
    company_add_line_two text,
    company_parish text,
    bank text,
    bank_branch text,
    bank_acc int,
    submitted_id text,
    submitted_proof_income text,
    submitted_proof_add text,
    primary key (`id`),
    index `user_info_id` (`user_id`)
    );";
    
$create_loans_table = "create table if not exists loans (
	id tinyint(11) not null auto_increment,
    user_id tinyint(11) not null,
    amount decimal(9,2) not null,
    primary key (`id`),
    index `user_loan_id` (`user_id`)
    );";