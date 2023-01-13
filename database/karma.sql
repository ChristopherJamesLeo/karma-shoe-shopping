CREATE DATABASE karma ;


CREATE TABLE IF NOT EXISTS products_list (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    p_id VARCHAR (255) NOT NULL DEFAULT "# Enter Product Code" ,
    p_name VARCHAR (100) NOT NULL DEFAULT "# Enter Product Name",
    price VARCHAR(100) NOT NULL DEFAULT "# Enter Price",
    p_img1 BLOB NOT NULL DEFAULT "# Enter Photo",
    p_img2 BLOB NOT NULL DEFAULT "# Enter Photo",
    p_description TEXT NOT NULL DEFAULT "Nice" ,
    width CHAR(100) NOT NULL DEFAULT "# Enter Product Width",
    height CHAR(100) NOT NULL DEFAULT "# Enter Product Height",
    depth CHAR(100) NOT NULL DEFAULT "# Enter Product Depth",
    weight CHAR(100) NOT NULL DEFAULT "# Enter Product Weight",
    qc CHAR(100) NOT NULL DEFAULT "YES",
    freshness_duration CHAR(100) NOT NULL DEFAULT "3",
    packeting CHAR(100) NOT NULL DEFAULT "Without Touch Of Hand",
    boxcontains CHAR(100) NOT NULL DEFAULT "60",
    rating CHAR(100) NOT NULL DEFAULT "1"
);

INSERT INTO products_list (p_id,p_name,price,p_img1,p_img2,p_description,width,height,depth,weight,qc,freshness_duration,packeting,boxcontains,rating) VALUES 
("001","cp-1","120","cp1.jpg","cp1.jpg",
"Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of de Finibus Bonorum et Malorum (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet.., comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Malorum by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.",
"400","500","700","18","YES","3","Without touch of hand","30","1"),

("002","cp-2","140","cp2.jpg","cp2.jpg",
"Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of de Finibus Bonorum et Malorum (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet.., comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Malorum by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.",
"300","600","500","12","NO","5","Without touch of hand","50","4"),

("003","cp-3","150","cp3.jpg","cp3.jpg",
"Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of de Finibus Bonorum et Malorum (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet.., comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Malorum by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.",
"600","800","700","11","YES","2","Without touch of hand","90","4"),

("004","cp-4","120","cp4.jpg","cp4.jpg",
"Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of de Finibus Bonorum et Malorum (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet.., comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Malorum by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.",
"700","200","900","12","YES","4","Without touch of hand","20","3"),


("005","cp-5","180","cp5.jpg","cp5.jpg",
"Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of de Finibus Bonorum et Malorum (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet.., comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Malorum by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.",
"900","300","400","11","YES","8","Without touch of hand","47","4"),

("006","cp-6","120","cp6.jpg","cp6.jpg",
"Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of de Finibus Bonorum et Malorum (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet.., comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Malorum by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.",
"700","300","450","13","NO","8","Without touch of hand","90","2"),

("007","cp-7","120","cp7.jpg","cp7.jpg",
"Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of de Finibus Bonorum et Malorum (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet.., comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Malorum by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.",
"600","400","700","12","NO","2"," touch of hand","54","5"),

("008","cp-8","340","cp8.jpg","cp8.jpg",
"Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of de Finibus Bonorum et Malorum (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet.., comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Malorum by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.",
"900","700","600","12","YES","4","Without touch of hand","60","2"),

("009","p1","120","p1.jpg.webp","p1.jpg.webp",
"Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of de Finibus Bonorum et Malorum (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet.., comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Malorum by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.",
"400","600","350","8","YES","3","touch of hand","80","2"),

("010","p2","120","p2.jpg.webp","p2.jpg.webp",
"Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of de Finibus Bonorum et Malorum (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet.., comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Malorum by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.",
"300","450","650","3","NO","4","Without touch of hand","70","2"),

("011","p3","180","p3.jpg.webp","p3.jpg.webp",
"Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of de Finibus Bonorum et Malorum (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet.., comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Malorum by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.",
"350","700","400","6","NO","7","Without touch of hand","50","4"),

("012","p4","180","p4.jpg.webp","p4.jpg.webp",
"Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of de Finibus Bonorum et Malorum (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet.., comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Malorum by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.",
"500","600","800","5","YES","4","Without touch of hand","60","3"),

("013","p5","150","p5.jpg.webp","p5.jpg.webp",
"Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of de Finibus Bonorum et Malorum (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet.., comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Malorum by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.",
"600","200","900","3","YES","4","Without touch of hand","30","3"),

("014","p6","180","p6.jpg.webp","p6.jpg.webp",
"Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of de Finibus Bonorum et Malorum (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet.., comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Malorum by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.",
"600","100","900","3","NO","1","touch of hand","40","3"),

("015","p7","140","p7.jpg.webp","p7.jpg.webp",
"Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of de Finibus Bonorum et Malorum (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet.., comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Malorum by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.",
"300","700","400","8","NO","7","touch of hand","30","3"),

("016","p8","130","p8.jpg.webp","p8.jpg.webp",
"Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of de Finibus Bonorum et Malorum (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet.., comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from de Finibus Bonorum et Malorum by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.",
"800","600","400","4","YES","5","touch of hand","25","3");


CREATE TABLE IF NOT EXISTS users (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(255) NOT NULL DEFAULT "# Enter First Name",
    lastname VARCHAR(255) NOT NULL DEFAULT "# Enter Last Name",
    phonenumber CHAR(100) NOT NULL DEFAULT "# Enter Phonenumber",
    email VARCHAR(255) NOT NULL DEFAULT "# Enter Email",
    userImg BLOB NOT NULL,
    password VARCHAR(255) NOT NULL,
    role INT NOT NULL DEFAULT "0",
    JOD DATE;
    country CHAR(100) NOT NULL DEFAULT "myn",
    address1 CHAR(255) NOT NULL DEFAULT "# Enter Address",
    address2 CHAR(255) NOT NULL DEFAULT "# Enter Address",
    city CHAR(255) NOT NULL DEFAULT "# Enter Your City",
    district CHAR(100) NOT NULL DEFAULT "# District",
    postcode CHAR(100) NOT NULL DEFAULT "# Enter PostCode",
    remember CHAR(25) NOT NULL DEFAULT "1"
);

INSERT INTO users (firstname,lastname,phonenumber,email,userImg,password,role,JOD,country,address1,address2,city,district,postcode,remember) VALUES 
("james","leo","09957092779","james@gmail.com","author.png.webp","11111","1",NOW(),"mya","oaktharmyothit","gaungsaykyon","Bago","district1","8801","1"),
("aung","aung","09751099740","aung@gmail.com","author.png.webp","22222","0",NOW(),"mya","byintnaung street","alongmintayar street","Yangon","district2","8802","0"),
("hla","hla","0928736528","hla@gmail.com","author.png.webp","33333","0",NOW(),"sgn","uaungzayya street","moekaung street","Yangon","district2","8002","0"),
("mya","mya","0936837252","mya@gmail.com","author.png.webp","44444","1",NOW(),"mya","myothit street","myohaung street","Mawlamying","district3","8004","1");

CREATE TABLE IF NOT EXISTS comments (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    p_id INT NOT NULL ,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL DEFAULT "# Enter Email",
    phonenumber CHAR(100) NOT NULL DEFAULT "# Enter Phonenumber",
    userImg BLOB NOT NULL,
    JOD DATE,
    message TEXT 
)

CREATE TABLE IF NOT EXISTS reviews (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    p_id INT NOT NULL ,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL DEFAULT "# Enter Email",
    phonenumber CHAR(100) NOT NULL DEFAULT "# Enter Phonenumber",
    userImg BLOB NOT NULL,
    JOD DATE,
    message TEXT 
);

CREATE TABLE IF NOT EXISTS wishlist (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    p_id VARCHAR (255) NOT NULL DEFAULT "# Enter Product Code" ,
    p_name VARCHAR (100) NOT NULL DEFAULT "# Enter Product Name",
    price VARCHAR(100) NOT NULL DEFAULT "# Enter Price",
    quantity INT NOT NULL DEFAULT "1",
    p_img1 BLOB NOT NULL DEFAULT "# Enter Photo",
    p_img2 BLOB NOT NULL DEFAULT "# Enter Photo",
    p_description TEXT NOT NULL DEFAULT "Nice" ,
    width CHAR(100) NOT NULL DEFAULT "# Enter Product Width",
    height CHAR(100) NOT NULL DEFAULT "# Enter Product Height",
    depth CHAR(100) NOT NULL DEFAULT "# Enter Product Depth",
    weight CHAR(100) NOT NULL DEFAULT "# Enter Product Weight",
    qc CHAR(100) NOT NULL DEFAULT "YES",
    freshness_duration CHAR(100) NOT NULL DEFAULT "3",
    packeting CHAR(100) NOT NULL DEFAULT "Without Touch Of Hand",
    boxcontains CHAR(100) NOT NULL DEFAULT "60",
    rating CHAR(100) NOT NULL DEFAULT "1"
);

CREATE TABLE IF NOT EXISTS carts (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    p_id VARCHAR (255) NOT NULL DEFAULT "# Enter Product Code" ,
    p_name VARCHAR (100) NOT NULL DEFAULT "# Enter Product Name",
    price VARCHAR(100) NOT NULL DEFAULT "# Enter Price",
    quantity INT NOT NULL DEFAULT 1,
    p_img1 BLOB NOT NULL DEFAULT "# Enter Photo",
    p_img2 BLOB NOT NULL DEFAULT "# Enter Photo",
    p_description TEXT NOT NULL DEFAULT "Nice" ,
    width CHAR(100) NOT NULL DEFAULT "# Enter Product Width",
    height CHAR(100) NOT NULL DEFAULT "# Enter Product Height",
    depth CHAR(100) NOT NULL DEFAULT "# Enter Product Depth",
    weight CHAR(100) NOT NULL DEFAULT "# Enter Product Weight",
    qc CHAR(100) NOT NULL DEFAULT "YES",
    freshness_duration CHAR(100) NOT NULL DEFAULT "3",
    packeting CHAR(100) NOT NULL DEFAULT "Without Touch Of Hand",
    boxcontains CHAR(100) NOT NULL DEFAULT "60",
    rating CHAR(100) NOT NULL DEFAULT "1"
);

CREATE TABLE IF NOT EXISTS orders (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    p_id VARCHAR (255) NOT NULL DEFAULT "# Enter Product Code" ,
    p_name VARCHAR (100) NOT NULL DEFAULT "# Enter Product Name",
    price VARCHAR(100) NOT NULL DEFAULT "# Enter Price",
    quantity INT NOT NULL DEFAULT "1",
    p_img1 BLOB NOT NULL DEFAULT "# Enter Photo",
    p_img2 BLOB NOT NULL DEFAULT "# Enter Photo",
    p_description TEXT NOT NULL DEFAULT "Nice" ,
    width CHAR(100) NOT NULL DEFAULT "# Enter Product Width",
    height CHAR(100) NOT NULL DEFAULT "# Enter Product Height",
    depth CHAR(100) NOT NULL DEFAULT "# Enter Product Depth",
    weight CHAR(100) NOT NULL DEFAULT "# Enter Product Weight",
    qc CHAR(100) NOT NULL DEFAULT "YES",
    freshness_duration CHAR(100) NOT NULL DEFAULT "3",
    packeting CHAR(100) NOT NULL DEFAULT "Without Touch Of Hand",
    boxcontains CHAR(100) NOT NULL DEFAULT "60",
    rating CHAR(100) NOT NULL DEFAULT "1"
);


