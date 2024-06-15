<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link css style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- import google icon link   -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script src='jquery-3.7.1.min.js'></script>
    <script>
        $(document).ready(function(){
            $(".nav_user_info").click(function(){
                showModal();
            });
            $('.showmenu').on('click', function(e){
                e.preventDefault();
                $('body').toggleClass('menu-show');
            })

        })
        function showModal(){
           $('.user_module').toggle();
        }
       
  
    </script>
    <title>Artistry</title>
    <!-- ico import  -->
    <link rel="icon" href="/img/searchimg/group.ico" type="image/x-icon" />
    
</head>
<body>
    
    <div class="head" id="head">
             <nav class="nav_continer">
                <div class="nav_logo"><img src="img/searchimg/Group 4.png" alt="" class="nav_logo_img"></div>
                <div class="nav_btn">
                    <ul>
                        <!-- nav_btn_function -->
                        <li><a href="#">相片</a></li>
                        <li><a href="#">影片</a></li>
                        <li><a href="#">電子書</a></li>

                    </ul>
                </div>
                <div class="nav_space">
                    <a href="#" class="showmenu">menu</a>
                </div>
                
            </nav>
        <div class="head_continer">
            <div class="head_content">
                <div class="helf">
                    <div class="helf_info">
                        <h1>鄭永斌的<br>印模夢工廠</h1>
                        <p>天公疼憨人，全台唯一手工印模</p>
                        <div class="helf_func_content">
                            <a href="" name="helf_func_btn" class="btn1">
                                <span class="material-symbols-outlined">
                                    view_in_ar
                                </span>
                                模具
                            </a>
                            <a href="" name="helf_func_btn" class="btn1">
                                <span class="material-symbols-outlined">
                                    grid_3x3
                                </span>
                                空間
                            </a>
                        </div>
                    </div>
                </div>
                <div class="helf"></div>
            </div>
            <div class="arrow_content">
                <a href="#scroll" class="arrow_function">
                    <span class="material-symbols-outlined" id="arrow">
                        keyboard_arrow_down
                    </span>
                </a>
            </div>
            
            
        </div>
    </div>
    <div class="scroll" id="scroll">
        <div class="scroll_continer">
                <div class="scroll_content">
                    <div class="helf">
                        <div class="helf_info">
                            <h3>Lorem isert</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                        </div>
                    </div>
                    <div class="helf">
                        <p class="scroll_text">Scroll for more &#10230;</p>
                        <div class="card_content">
                            <div class="card"><span class="card_num">1</span></div>
                            <div class="card"><span class="card_num">2</span></div>
                            <div class="card"><span class="card_num">3</span></div>
                        </div>
                        
                      
                    </div>
                </div>
                <div class="arrow_content">
                    <a href="#video" class="arrow_function">
                        <span class="material-symbols-outlined" id="arrow">
                            keyboard_arrow_down
                        </span>
                    </a>
                </div>
                
                
            </div>
    </div>
    <div class="video" id="video">
        <div class="video_continer">
            <div class="video_content">
                <video  poster="img/postimg/_DSC1686 1.png" id="myVideo" >
                    <source src="img/postimg/vid1.mp4" type="video/mp4">
                </video>
            </div>
            <div class="arrow_contorl_content">
                    <button id="myBtn" onclick="myFunction()">Play</button>
                    <a href="#pic" class="arrow_function">
                        <span class="material-symbols-outlined" id="arrow">
                            keyboard_arrow_down
                        </span>
                        
                    </a>
                    <div class="space">

                </div>
                </div>
        </div>
    </div>
    <div class="pic" id="pic">
        <div class="pic_continer">
           <main>
            <img src="https://ideaspot.tv/codepen-assets/pinterest-like-layout/architecture-gb0824a395_1920.jpg">
            <img src="https://ideaspot.tv/codepen-assets/pinterest-like-layout/avenue-g426cd0c6c_1920.jpg">
            <img src="https://ideaspot.tv/codepen-assets/pinterest-like-layout/barley-field-gc1713366b_1920.jpg">
            <img src="https://ideaspot.tv/codepen-assets/pinterest-like-layout/bird-g058521cc3_1920.jpg">
            <img src="https://ideaspot.tv/codepen-assets/pinterest-like-layout/bridge-gb68666057_1920.jpg">
            <img src="https://ideaspot.tv/codepen-assets/pinterest-like-layout/canyon-g6720bdad8_1920.jpg">
            <img src="https://ideaspot.tv/codepen-assets/pinterest-like-layout/christmas-ge79d06ec4_1920.jpg">
            <img src="https://ideaspot.tv/codepen-assets/pinterest-like-layout/church-gb2eed8bb3_1920.jpg">
            <img src="https://ideaspot.tv/codepen-assets/pinterest-like-layout/elephant-g9af232e9c_1920.jpg">
            <img src="https://ideaspot.tv/codepen-assets/pinterest-like-layout/ferns-gb2440141c_1920.jpg">
            <img src="https://ideaspot.tv/codepen-assets/pinterest-like-layout/grey-wolf-g128a7e8a8_1920.jpg">
            <img src="https://ideaspot.tv/codepen-assets/pinterest-like-layout/iceland-g5eaae4d1d_1920.jpg">
            <img src="https://ideaspot.tv/codepen-assets/pinterest-like-layout/ivy-g6ab4d4bda_1920.jpg">
            <img src="https://ideaspot.tv/codepen-assets/pinterest-like-layout/lightbulb-gf14e331df_1920.jpg">
            <img src="https://ideaspot.tv/codepen-assets/pinterest-like-layout/moon-g3d5261cf2_1920.jpg">
            <img src="https://ideaspot.tv/codepen-assets/pinterest-like-layout/mountains-gbc683deac_1280.jpg">
           
           </main>
        </div>
    </div>
    <script>
       
        var video = document.getElementById("myVideo");
        var btn = document.getElementById("myBtn");

        function myFunction() {
        if (video.paused) {
            video.play();
            btn.innerHTML = "Pause";
        } else {
            video.pause();
            btn.innerHTML = "Play";
        }
        }
    </script>
</body>
</html>