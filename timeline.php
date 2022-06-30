<!DOCTYPE html>
    <head>
        <title>Profile | Noritter</title>
    </head>

    <style type="text/css">
    
        #blue_bar {
            height: 50px;
            background-color: rgb(109, 78, 148);
            color: white;
           
        }

        #search_box {
            width: 400px;
            height: 20px;
            border-radius: 5px;
            border: none;
            padding: 4px;
            font-size: 14px;
            background-image: url(search.jpg);
            background-repeat: no-repeat;
            background-position: right;

        }

        #profile_pic {
            width: 150px;
            
            border-radius: 50%;
            border: solid 2px white;

        }

        #menu_buttons {
            width: 100px;
            display: inline-block;
            margin: 2px;

        }

        #friends_img{
            width: 75px;
            float: left;
            margin: 8px;
        }

        #friends_bar {
            
            min-height: 400px;
            margin-top: 20px;
            padding: 8px;
            text-align: center;
            font-sizd: 20px;
            color: #6d4e94;
        }

        #friends {
            clear: both;
            font-size: 12px;
            font-weight: bold;
            color: #6d4e94;
        }

        textarea {
            width: 100%;
            border: none;
            font-family: tahoma;
            font-size: 14px;
            height: 60px;
        }

        #post_button {
            float: right;
            background-color: #6d4e94;
            border: none;
            color: white;
            padding: 4px;
            font-size: 14px;
            border-radius: 2px;
            width: 50px;
        }

        #post_bar {
            margin-top: 20px;
            background-color: white;
            padding: 10px;
        }

        #post {
            padding: 4px;
            font-size: 13px;
            display: flex;
            margin-bottom: 20px;
        }
    </style>
    <body style="font-family: tahoma; background-color: #e9ebee; ">
        <br>
        <!-- top bar-->
        <div id="blue_bar">
            <div style="width: 800px; margin: auto; font-size: 30px;">
                Noritter &nbsp &nbsp
                <input type="text" id="search_box" placeholder="Search for dog friends">
                <img src="selfie.jpg" style="width: 75px; float: right; ">
            </div>
        </div>  
        <!-- cover area-->
        <div style="width: 800px; margin: auto; min-height: 400px;">

            <!--below cover area-->
            <div style="display: flex;">

                <!-- friends area-->
                <div style="min-height: 400px; flex:1;">
                    <div id="friends_bar">
                        <img src="selfie.jpg" id="profile_pic"><br>
                        Danny kim
                    </div>
                </div>

                <!--posts area-->
                <div style="min-height: 400px; flex:2.5; padding: 20px; padding-right: 0px;">

                    <div style="border: solid thin #aaa; padding: 10px; background-color: white;">
                        <textarea placeholder="What's on your mind?"></textarea>
                        <input id="post_button" type="submit" value="Post">
                        <br>
                    </div>

                    <!--posts-->
                    <div id="post_bar">

                        <!--post 1-->
                        <div id="post">
                            <div>
                                <img src="6.jpg" style="width: 75px; margin-right: 4px;"> 
                            </div>
                            <div>
                                <div style="font-weight: bold; color: #6d4e94;">First Dog</div>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium, nam nesciunt, eius sit ad sapiente ut dolores, consequatur ea alias ab consectetur itaque at beatae doloribus error laboriosam eum amet!
                                <br><br>

                                <a href="">Like</a> . <a href="">Comment</a> . <span style="color: #999;">March 1 2021</span>
                            </div>
                        
                        </div>

                        <!--post 2-->
                        <div id="post">
                            <div>
                                <img src="7.jpg" style="width: 75px; margin-right: 4px;"> 
                            </div>
                            <div>
                                <div style="font-weight: bold; color: #6d4e94;">Second Dog</div>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium, nam nesciunt, eius sit ad sapiente ut dolores, consequatur ea alias ab consectetur itaque at beatae doloribus error laboriosam eum amet!
                                <br><br>

                                <a href="">Like</a> . <a href="">Comment</a> . <span style="color: #999;">March 1 2021</span>
                            </div>
                        
                        </div>

                        <!--post 3-->
                        <div id="post">
                            <div>
                                <img src="8.jpg" style="width: 75px; margin-right: 4px;"> 
                            </div>
                            <div>
                                <div style="font-weight: bold; color: #6d4e94;">Third Dog</div>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium, nam nesciunt, eius sit ad sapiente ut dolores, consequatur ea alias ab consectetur itaque at beatae doloribus error laboriosam eum amet!
                                <br><br>

                                <a href="">Like</a> . <a href="">Comment</a> . <span style="color: #999;">March 1 2021</span>
                            </div>
                        
                        </div>

                    </div>    
                
                </div>
            </div>

        </div>  
    </body>





</html>