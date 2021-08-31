/* Create database */
create database eayurveda

/* Admin Table */
Create table Admin_table(
    emailid varchar(255) primary key not null,
    phoneno varchar(10) not null,
    PASSWORD varchar(100) not null,
    modified datetime default now(),
    Login_status int default 0,
    OTP varchar(6) not null
)

/* Create category table */
CREATE TABLE category(
 Category_ID varchar(10) primary key,
 Category_Name varchar(50) not null UNIQUE,
 Category_Code varchar(10) not null UNIQUE
)
/* Product table */
create table Product(
    Product_ID varchar(10) primary key,
    Product_name varchar(100) UNIQUE not null,
    Product_Description varchar(100) not null,
    Cost varchar(500) not null,
    Validity varchar(100),
    Product_Image varchar(500) not null,
    Manufactured_Date datetime default now(),
    Category_ID varchar(10) REFERENCES category(Category_ID)
)

/* Doctor Table */

create table Doctor(
    Doctor_ID varchar(10) primary key,
    Doctor_name varchar(100) UNIQUE not null,
    Image varchar(500) not null,
    Fee varchar(500) not null,
    Experience varchar(100),
    Specilist varchar(500) not null,
    Perfered_Date varchar(100) not null

)

/*--------------------------------- Appointmeent Table----------------------*/
CREATE TABLE Appointment_Table(
   Appointment_ID varchar(10) primary key,
    Patient_name varchar(100) not null,
    Disease varchar(500) not null,
    Appointment_Time varchar(100) not null,
    fee varchar(100) not null,
    Doctor_Search varchar(100) REFERENCES doctor(Doctor_ID)

)

/* --------------------------------Home-page-settings --------------------------------*/
create table home_page(
    ID varchar(10) primary key not null auto_increment,
    slogan varchar(500) not null,
    heading varchar(100) not null,
    page_description varchar(500) not null,

)

/* -------------------------About us---------------------------- */
create table about_us(
    ID int(10) primary key auto_increment,
    About_us_heading varchar(100) not null,
    About_desc1 varchar(300) not null,
    About_desc2 varchar(500) not null,
    About_desc3 varchar(1000) not null,
    image1 varchar(500) not null,
    image2 varchar(500) not null

)
/* -------------------Contact Query----------------------- */
create table customer_query(cq_id int primary key AUTO_INCREMENT,
                            FIRST_name varchar(50) not null,
                            LAST_name varchar(50) not null,
                            email varchar(50) not null,
                            phone varchar(10),
                            message varchar(500) not null,
                           created_date datetime DEFAULT now()
                           )



/* -------------------Blog Details----------------------------------- */
create TABLE BLOG(
    Blog_ID int(10) primary key AUTO_INCREMENT,
    
    Blog_Heading varchar(100) not null,
    Blog_Title varchar(500) not null,
    Discription varchar(1000) not null,
    Picture varchar(500) not null,
    Created_date datetime DEFAULT NOW()
    )