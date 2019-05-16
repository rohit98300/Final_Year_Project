<?php


include('session.php');

if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
?>

<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!--
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component1.css" />
-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"> </script>-->

    <!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

    <!--		<b id="profile"><a href="profile.php">View Profile</a></b>-->
</head>



<style type="text/css">
    header,
    main,
    footer {
        padding-left: 300px;
    }

    @media only screen and (max-width : 992px) {

        header,
        main,
        footer {
            padding-left: 0;
        }
    }

    th {
        text-align: center;
    }

    /* Clicking the label does not activate the input without this */
    input[type="text"]+label {
        pointer-events: none;

        * {
            pointer-events: all;
        }
    }

    input[type="email"]+label {
        pointer-events: none;

        * {
            pointer-events: all;
        }
    }


    input[type="tel"]+label {
        pointer-events: none;

        * {
            pointer-events: all;
        }
    }

</style>

<body>


    <?php if($_SESSION['permit']==0 || $_SESSION['permit']==1 || $_SESSION['permit']==2) { ?> 
    <ul id="slide-out" class="sidenav sidenav-fixed">
        <li>
            <div class="user-view">
                <div class="background">
                    <img src="download1.jpg">
                </div>
                <a href="#user"><img class="circle" src="download.jpg"></a>
                <a href="#name"><span class="white-text name"><?php echo $_SESSION['name']; ?></span></a>
                <a href="#email"><span class="white-text email"><?php echo $_SESSION['member']; ?></span></a>
            </div>
        </li>
        <li><a href="profile.php"><i class="material-icons">cloud</i>Dahboard</a></li>
          <li>
            <div class="divider"></div>
        </li>
           <li><a href="logout.php">LOGOUT</a></li>
<!--
        
        <li><a class="subheader">Subheader</a></li>
        <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
-->
    </ul>
   
    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    
     <?php }  ?>

    <!--///////////////////////////////////////       RIGHT MAIN CONTENT            ////////////////////////-->

    <?php
    if(isset($_POST["submit"]))
        include("pdftest1.php")
        ?>

    <div style="margin:26px;">

        <main>
           
           <?php if($_SESSION['permit']==0 || $_SESSION['permit']==1 || $_SESSION['permit']==2) { ?> 
            <div style="">
                <div class="row">

                    <!--                    <form class="col s12">-->
                    <h4 style="text-align:center;color:black;height=2px;padding=0">Phoenix Registration Form(MAIN)</h4>
                    <form method="post" action="regform.php">
                        <div id="fi1" style="-webkit-box-shadow: -1px 6px 24px -14px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 6px 24px -14px rgba(0,0,0,0.75);
box-shadow: -1px 6px 24px -14px rgba(0,0,0,0.75);border-radius:23px">
                            <div class="row">
                                <div class="input-field col s12 m6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="icon_prefix" type="text" name="element_4_1_1">
                                    <label for="icon_prefix">Team Name </label>
                                </div>
                                <div class="input-field col s12 m6">
                                    <i class="material-icons prefix">accessibility</i>
                                    <input id="icon_telephone" type="text" name="caid">
                                    <label for="icon_telephone">CA ID(if any):</label>
                                </div>
                            </div>


                        </div>
                        <br>
                        <div id="fi2" style="-webkit-box-shadow: -1px 6px 24px -14px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 6px 24px -14px rgba(0,0,0,0.75);
box-shadow: -1px 6px 24px -14px rgba(0,0,0,0.75);border-radius:23px">
                            <p style="text-align:center">Member 1 Details:</p>
                            <div class="row">
                                <div class="input-field col s12 m6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="icon_prefix" type="text" name="element_2_1_1">
                                    <label for="icon_prefix">Name1 </label>
                                </div>
                                <div class="input-field col s12 m6">
                                    <i class="material-icons prefix">school</i>
                                    <input id="icon_telephone" type="text" name="element_2_2_1">
                                    <label for="icon_telephone">College1</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12 m6">
                                    <i class="material-icons prefix">email</i>
                                    <input id="icon_prefix" type="email" name="element_2_3_1">
                                    <label for="icon_prefix">Email1 </label>
                                </div>
                                <div class="input-field col s12 m6">
                                    <i class="material-icons prefix">phone</i>
                                    <input id="icon_telephone" type="tel" name="element_2_4_1">
                                    <label for="icon_telephone">Phone1</label>
                                </div>
                            </div>
                        </div>

                        <br>

                        <div id="fi3" style="-webkit-box-shadow: -1px 6px 24px -14px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 6px 24px -14px rgba(0,0,0,0.75);
box-shadow: -1px 6px 24px -14px rgba(0,0,0,0.75);border-radius:23px;">
                           <p style="text-align:center">Member 2 Details:</p>
                            <div class="row">
                                <div class="input-field col s12 m6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="icon_prefix" type="text" name="element_2_1_2">
                                    <label for="icon_prefix">Name2 </label>
                                </div>
                                <div class="input-field col s12 m6">
                                    <i class="material-icons prefix">school</i>
                                    <input id="icon_telephone" type="text" name="element_2_2_2">
                                    <label for="icon_telephone">College2</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12 m6">
                                    <i class="material-icons prefix">email</i>
                                    <input id="icon_prefix" type="email" name="element_2_3_2">
                                    <label for="icon_prefix">Email2 </label>
                                </div>
                                <div class="input-field col s12 m6">
                                    <i class="material-icons prefix">phone</i>
                                    <input id="icon_telephone" type="tel" name="element_2_4_2">
                                    <label for="icon_telephone">Phone2</label>
                                </div>
                            </div>
                        </div>

                        <br>
                        <div id="fi4" style="-webkit-box-shadow: -1px 6px 24px -14px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 6px 24px -14px rgba(0,0,0,0.75);
box-shadow: -1px 6px 24px -14px rgba(0,0,0,0.75);border-radius:23px">
                            <p style="text-align:center">Member 3 Details:</p>
                            <div class="row">
                                <div class="input-field col s12 m6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="icon_prefix" type="text" name="element_2_1_3">
                                    <label for="icon_prefix">Name3 </label>
                                </div>
                                <div class="input-field col s12 m6">
                                    <i class="material-icons prefix">school</i>
                                    <input id="icon_telephone" type="text" name="element_2_2_3">
                                    <label for="icon_telephone">College3</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12 m6">
                                    <i class="material-icons prefix">email</i>
                                    <input id="icon_prefix" type="email" name="mail3">
                                    <label for="icon_prefix">Email3 </label>
                                </div>
                                <div class="input-field col s12 m6">
                                    <i class="material-icons prefix">phone</i>
                                    <input id="icon_telephone" type="tel" name="element_2_4_3">
                                    <label for="icon_telephone">Phone3</label>
                                </div>
                            </div>
                        </div>

                        <br>
                        <div id="fi5" style="-webkit-box-shadow: -1px 6px 24px -14px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 6px 24px -14px rgba(0,0,0,0.75);
box-shadow: -1px 6px 24px -14px rgba(0,0,0,0.75);border-radius:23px">
                            <p style="text-align:center">Member 4 Details:</p>
                            <div class="row">
                                <div class="input-field col s12 m6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="icon_prefix" type="text" name="element_2_1_4">
                                    <label for="icon_prefix">Name4 </label>
                                </div>
                                <div class="input-field col s12 m6">
                                    <i class="material-icons prefix">school</i>
                                    <input id="icon_telephone" type="text" name="element_2_2_4">
                                    <label for="icon_telephone">College4</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12 m6">
                                    <i class="material-icons prefix">email</i>
                                    <input id="icon_prefix" type="email" name="element_2_3_4">
                                    <label for="icon_prefix">Email4 </label>
                                </div>
                                <div class="input-field col s12 m6">
                                    <i class="material-icons prefix">phone</i>
                                    <input id="icon_telephone" type="tel" name="element_2_4_4">
                                    <label for="icon_telephone">Phone4</label>
                                </div>
                            </div>
                        </div>


                        <br>
                        <div id="fi6" style="-webkit-box-shadow: -1px 6px 24px -14px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 6px 24px -14px rgba(0,0,0,0.75);
box-shadow: -1px 6px 24px -14px rgba(0,0,0,0.75);border-radius:23px">
                            <p style="text-align:center">Member 5 Details:</p>
                            <div class="row">
                                <div class="input-field col s12 m6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="icon_prefix" type="text" name="element_2_1_5">
                                    <label for="icon_prefix">Name5 </label>
                                </div>
                                <div class="input-field col s12 m6">
                                    <i class="material-icons prefix">school</i>
                                    <input id="icon_telephone" type="text" name="element_2_2_5">
                                    <label for="icon_telephone">College5</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12 m6">
                                    <i class="material-icons prefix">email</i>
                                    <input id="icon_prefix" type="email" name="element_2_3_5">
                                    <label for="icon_prefix">Email5 </label>
                                </div>
                                <div class="input-field col s12 m6">
                                    <i class="material-icons prefix">phone</i>
                                    <input id="icon_telephone" type="tel" name="element_2_4_5">
                                    <label for="icon_telephone">Phone6</label>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="divider"></div>
                        <br>


                        <div>
                            <fieldset id="eventscheck">
                                <legend>EVENTS</legend>
                                <br>
                                <div class="row">
                                    <div class="col s12 m3" style="padding-bottom:23px">
                                        <div style="-webkit-box-shadow: 0px 8px 49px -14px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 8px 49px -14px rgba(0,0,0,0.75);
box-shadow: 0px 8px 49px -14px rgba(0,0,0,0.75);background-image: linear-gradient(87deg,#11cdef 0,#1171ef 100%)!important;">
                                            <table>
                                                <thead>
                                                    <tr>

                                                        <th style="color:#fff">Techincal</th>
                                                    </tr>


                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><label>
                                                                <input type="checkbox" name="allterrain" value="1" />
                                                                <span style="color:#ffffff">All Terrain</span>
                                                            </label></td>

                                                    </tr>
                                                    <tr>
                                                        <td><label>
                                                                <input type="checkbox" name="robosoccer" value="1" />
                                                                <span style="color:#ffffff">Robo Soccer</span>
                                                            </label></td>

                                                    </tr>
                                                    <tr>
                                                        <td><label>
                                                                <input type="checkbox" name="roborush" value="1" />
                                                                <span style="color:#ffffff">Roborush</span>
                                                            </label></td>

                                                    </tr>
                                                    <tr>
                                                        <td><label>
                                                                <input type="checkbox" name="robowar" value="1" />
                                                                <span style="color:#ffffff">Royal Rumble</span>
                                                            </label></td>

                                                    </tr>
                                                    <tr>
                                                        <td><label>
                                                                <input type="checkbox" name="linemaze" value="1" />
                                                                <span style="color:#ffffff">Line Maze</span>
                                                            </label></td>

                                                    </tr>
                                                    <tr>
                                                        <td><label>
                                                                <input type="checkbox" name="linefollow" value="1" />
                                                                <span style="color:#ffffff">The Following</span>
                                                            </label></td>

                                                    </tr>



                                                    <tr>
                                                        <td><label>
                                                                <input type="checkbox" name="fsoc" value="1" />
                                                                <span style="color:#ffffff">F-Society</span>
                                                            </label></td>

                                                    </tr>

                                                    <tr>
                                                        <td><label>
                                                                <input type="checkbox" name="web" value="1" />
                                                                <span style="color:#ffffff">Webtronix</span>
                                                            </label></td>

                                                    </tr>
                                                </tbody>

                                            </table>
                                        </div>


                                    </div>


                                    <div class="col s12 m3" style="padding-bottom:23px">
                                        <div style="-webkit-box-shadow: 0px 8px 49px -14px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 8px 49px -14px rgba(0,0,0,0.75);
box-shadow: 0px 8px 49px -14px rgba(0,0,0,0.75);background:linear-gradient(87deg,#f5365c 0,#f56036 100%)!important">
                                            <table>
                                                <thead>
                                                    <tr>

                                                        <th style="color:#fff">Non-Techincal</th>
                                                    </tr>


                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><label>
                                                                <input type="checkbox" name="hunt" value="1" />
                                                                <span style="color:#ffffff">Treasure Hunt</span>
                                                            </label></td>

                                                    </tr>
                                                    <tr>
                                                        <td><label>
                                                                <input type="checkbox" name="sherlock" value="1" />
                                                                <span style="color:#ffffff">Sherlockology</span>
                                                            </label></td>

                                                    </tr>
                                                    <tr>
                                                        <td><label>
                                                                <input type="checkbox" name="matchstick" value="1" />
                                                                <span style="color:#ffffff">MatchStick Art</span>
                                                            </label></td>

                                                    </tr>
                                                    <tr>
                                                        <td><label>
                                                                <input type="checkbox" name="poetry" value="1" />
                                                                <span style="color:#ffffff">Poetry slam</span>
                                                            </label></td>

                                                    </tr>
                                                    <tr>
                                                        <td><label>
                                                                <input type="checkbox" name="doodle" value="1" />
                                                                <span style="color:#ffffff">Doodle</span>
                                                            </label></td>

                                                    </tr>

                                                    <tr>
                                                        <td><label>
                                                                <input type="checkbox" name="podium" value="1" />
                                                                <span style="color:#ffffff">The Podium</span>
                                                            </label></td>

                                                    </tr>

                                                    <tr>
                                                        <td><label>
                                                                <input type="checkbox" name="quizzomaniac" value="1" />
                                                                <span style="color:#ffffff">Quizzomaniac</span>
                                                            </label></td>

                                                    </tr>

                                                </tbody>

                                            </table>
                                        </div>

                                    </div>
                                    <div class="col s12 m3" style="padding-bottom:23px">
                                        <div style="-webkit-box-shadow: 0px 8px 49px -14px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 8px 49px -14px rgba(0,0,0,0.75);
box-shadow: 0px 8px 49px -14px rgba(0,0,0,0.75);background:linear-gradient(to right, rgb(69, 104, 220), rgb(176, 106, 179));">
                                            <table>
                                                <thead>
                                                    <tr>

                                                        <th style="color:#fff">Gaming</th>
                                                    </tr>


                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><label>
                                                                <input type="checkbox" name="csgo" value="1" />
                                                                <span  style="color:#fff">CS: GO</span>
                                                            </label></td>

                                                    </tr>
                                                    <tr>
                                                        <td><label>
                                                                <input type="checkbox" name="dota" value="1" />
                                                                <span  style="color:#fff">DOTA-2 </span>
                                                            </label></td>

                                                    </tr>
                                                    <tr>
                                                        <td><label>
                                                                <input type="checkbox" name="fifa19" value="1" />
                                                                <span  style="color:#fff">FIFA 19 </span>
                                                            </label></td>

                                                    </tr>
                                                    <tr>
                                                        <td><label>
                                                                <input type="checkbox" name="pubgmob" value="1" />
                                                                <span  style="color:#fff">PUBG Mobile</span>
                                                            </label></td>

                                                    </tr>

                                                    <tr>
                                                        <td><label>
                                                                <input type="checkbox" name="pubgemu" value="1" />
                                                                <span  style="color:#fff">PUBG PC(Emulator)</span>
                                                            </label></td>

                                                    </tr>


                                                </tbody>

                                            </table>
                                        </div>


                                    </div>


                                    <div class="col s12 m3">
                                        <div style="-webkit-box-shadow: 0px 8px 49px -14px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 8px 49px -14px rgba(0,0,0,0.75);
box-shadow: 0px 8px 49px -14px rgba(0,0,0,0.75);background:linear-gradient(to right, rgb(103, 178, 111), rgb(76, 162, 205));">
                                            <table>
                                                <thead>
                                                    <tr>

                                                        <th style="color:#fff">Management</th>
                                                    </tr>


                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><label>
                                                                <input type="checkbox" name="marketing" value="1" />
                                                                <span style="color:#fff">Marketing</span>
                                                            </label></td>

                                                    </tr>
                                                    <tr>
                                                        <td><label>
                                                                <input type="checkbox" name="pitcher" value="1" />
                                                                <span  style="color:#fff">The Pitcher</span>
                                                            </label></td>

                                                    </tr>

                                                </tbody>

                                            </table>
                                        </div>


                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col s12 offset-m4 m4">
                                        <div style="-webkit-box-shadow: 0px 8px 49px -14px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 8px 49px -14px rgba(0,0,0,0.75);
box-shadow: 0px 8px 49px -14px rgba(0,0,0,0.75);background:linear-gradient(to right, rgb(218, 68, 83), rgb(137, 33, 107));">
                                            <table>
                                                <thead>
                                                    <tr>

                                                        <th style="color:#fff">Photography</th>
                                                    </tr>


                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><label>
                                                                <input type="checkbox" name="insta" value="1"/>
                                                                <span style="color:#ffffff">InstaFrame</span>
                                                            </label></td>

                                                    </tr>

                                                </tbody>

                                            </table>
                                        </div>
                                    </div>


                                </div>
                            </fieldset>

                        </div>


                        <br>

                        <div style="text-align:center">
                            <button class="btn waves-effect waves-light z-depth-5" type="submit" name="submit" value="Submit" style="border-radius:23px; background-color:#7b1fa2">Submit
                                <i class="material-icons right">send</i>
                            </button>&nbsp;&nbsp;<button class="btn waves-effect waves-light z-depth-5" type="reset" name="submit" value="Reset" style="border-radius:23px; background-color:#e53935">Reset
                                <i class="material-icons right">cancel</i>
                            </button>
                        </div>
                    </form>
                </div>
                <br>
            </div>
        <?php }  ?>
        </main>
    </div>
    <!--////////////////////////////////////////        END MAIN CONTENT    //////////////////////////////////////-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="material.js"></script>


</body>

</html>