
<html>
    <head>
        <title>Noritter | Signup</title>
    </head>

    <style>
        #bar{
            height:100px; 
            background-color: rgb(109, 78, 148); 
            color: white; 
            padding: 4px;
            }

        #signup_button {
            background-color: #86818c;
            width: 70px;
            text-align: center;
            padding: 4px;
            border-radius: 4px;
            float: right;
        }

        #bar2 {
            background-color: white;
            width: 800px;
            margin: auto;
            margin-top: 50px;
            padding:10px;
            padding-top: 50px;
            text-align: center;
            font-weight: bold;
        } 

        #text {
            height: 40px;
            width: 300px;
            border-radius: 4px;
            border: solid ipx #ddd;
            padding: 4px;
            font-size: 14px;
        
        }   

        #button {
            width: 300px;
            height: 40px;
            border-radius: 4px;
            font-weight: bold;
            border: none;
            background-color: rgb(109, 78, 148);
            color: white;
        }
    </style>

    <body style="font-family: tahoma; background-color: #e9ebee;">
        <div id="bar">

            <div style="font-size: 40px;">Noritter</div>
            <div id="signup_button">Log in</div> 
            
        </div>

        <div id="bar2">
            Sign up to Noritter <br><br>  

            <form method="post" action="">
            
                <input value="<?php echo $first_name ?>" name="first_name" type="text" id="text" placeholder="First name"><br><br>
                <input value="<?php echo $last_name ?>" name="last_name" type="text" id="text" placeholder="Last name"><br><br>

                <span style="font-weight: normal;">Gender</span><br>
                <select id="text" name="gender">

                    <option><?php echo $gender ?></option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
                <br><br>    

                <input value="<?php echo $email ?>" name="email" type="text" id="text" placeholder="Email"><br><br>

                <input name="password" type="password" id="text" placeholder="Password"><br><br>
                <input name="password2" type="password" id="text" placeholder="Retype Password"><br><br>

                <input type="submit" id="button" value="Sign up">
                <br><br><br>
            </form>
        </div>

    </body>

</html> 