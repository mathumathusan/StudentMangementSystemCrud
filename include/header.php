<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD APPLICATION</title>
 <!-- <link rel="stylesheet" href="style.css">-->
  <style>
      body{
          color:white;
          background-image: url("images/background-image.jpg");
          margin: 25%;  
        
      }
     tr:nth-child(even) {color: gold;}
      tr:nth-child(odd) {color: yellow;}
      tr:hover {color: red}
      th{
        color:gold;
      }
      form{
   
    padding-left: 200px;
    padding-top: 20px;
    width: 30%;
}


table{
    width: 45%;
   border-collapse: collapse;
   
   
}
td{ 
    
    padding: 15px;
}


input[type=submit] {
    width: 150px;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  input[type=text] {
    width: 80%;
    padding: 12px 20px;
    margin: 10px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    cursor: pointer;
  }
  input[type=submit]:hover {
    background-color: #2370e4;
  }
  </style>
</head>
<body>