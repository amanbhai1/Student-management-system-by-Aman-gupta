<!DOCTYPE html>
<html lang="en">
<head>          
    <title>Home</title>
    <style>
        *{
    margin: 0px;
    padding: 0px;
    text-decoration:none;
    overflow-x: hidden;
    
}


.Topbar{
    background-color: rgba(161, 88, 161, 0.658);
    height: 80px;
    display: flex;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

}

.bannerimg{
    width: 100vw;
}
.Gla{
    position: absolute;
    left: 40px;
    padding: 20px;
    font-size: 35px;
    color: white;
}

.Topbarbuttons{
    width: 500px;
    padding: 20px;
    position: absolute;
    right: 90px;
    display: flex;
    justify-content: space-evenly;
    font-size: 22px;
}
#Home{
    padding: 10px;
    border-radius: 10px;
}
#About{
    padding: 10px;
    border-radius: 10px;
}#Admin{
    padding: 10px;
    border-radius: 10px;
}#Student{
    padding: 10px;
    border-radius: 10px;
}

a{color: white;}

.contentonimg{
    position: absolute;
    bottom: 20px;
    top: 40%;
    left: 100px;
    line-height: 60px;
    font-family: Arial, Helvetica, sans-serif;
    
}

#studentadministration{
    font-size: 40px;
    color: #219ebc;
}

#registered{
    font-size: 15px;
    color: #219ebc;
    font-weight: 100;
}

#studentlogin{
    background-color:#2793fd;
    font-size: 20px;
    padding: 12px;
    border-radius: 70px;
    color: white;
}

.bodyaboutus{
    padding: 30px;
    background-color: rgb(179, 185, 191,0.05);
    height: 500px;
}

#aboutgla{
    font-size: 45px;
    text-align: center;
    margin-bottom: 25px;
    color: #797979;
}

#glainformation{
    font-size: 22px;
    font-weight: 300;
    line-height: 35px;
    color: #7B8898;
}

.bottombanner{
    display: flex;
    justify-content: space-between;
    background-color: #5c5c5c;
    height: 400px;
}

#glaaddress{
    font-size: 30px;
    font-weight: 800;
    color: white;
    line-height: 67px;
}

.address{
    height: 300px;
    margin: 10px;
    display: flex;
    flex-direction: column;
    line-height: 55px;
    font-size: 17px;
    padding: 20px;
    color: #d4d8dcde;
    font-family:'Times New Roman', Times, serif;
}
#glaheading{
    font-size: 30px;
    font-weight: 800;
    color: white;
    line-height: 67px;
}


.GLA{
    height: 300px;
    margin: 10px;
    line-height:40px;
    font-size: 19px;
    padding: 20px;
    color: #d4d8dcde;
    font-family:'Times New Roman', Times, serif;
}

/* #Home:hover{
    background-color: rgba(0, 60, 255, 0.616);
} */
#About:hover{
    background-color: rgba(0, 60, 255, 0.616);
}
#Admin:hover{
    background-color: rgba(0, 60, 255, 0.616);
}
#Student:hover{
    background-color: rgba(0, 60, 255, 0.616);
}

.address:hover{
    background-color: rgba(126, 126, 126, 0.74);
    border-radius: 3%;
}

.GLA:hover{
    background-color: rgba(126, 126, 126, 0.74);
    border-radius: 3%;
}

#studentlogin:hover{
    background-color: rgb(99, 108, 209);
}

.bgimagecontent{
    width: 100%;
}
    </style>
</head>
<body>
    <div class="Topbar">
        <div class="Gla"> <p id="Glamessage"> <img src="logo.png" alt=""> </p> </div>
        <div class="Topbarbuttons"> 
            <a href="homepage.php" id="Home">Home</a>
            <a href="about.php" id="About">About</a>
            <a href="adminlogin.php" id="Admin">Admin</a>
            <a href="stuedntlogin.php" id="Student">Student</a>
         </div>
    </div>
    <div class="bodypart">
        <div class="bgimagecontent">
             <img src="banner.webp" class="bannerimg">
             <div class="contentonimg">
                <p id="studentadministration"> Student Management System</p>
                <p id="registered">Resgisteres Students Can Login Here!</p>
                <a href="stuedntlogin.php" id="studentlogin">Student Login</a>
            </div>
        </div>
        <div class="bodyaboutus">
            <p id="aboutgla">About Us</p>
            <p id="glainformation">Message
                It was the year 1991 Shri Narayan Das Agrawal decided to fulfil the dream of his father, Late Shri Ganeshi Lal Agrawal, of establishing an institute for quality education to the people and the region & beyond. and initiated Sri Jagannath Prasad Ganeshi Lal Bajaj Charitable Trust Samiti in an attempt to make the holy city Mathura a recognized destination for knowledge seekers from different spheres of life. This is what led to the foundation of a milestone at the karmabhoomi of the versatile and sagacious Lord Krishna. GLA has been actively involved with social causes since its very inception and has drawn appreciation from one and all for its works in various facets of societal paradigms.
                
                This is what led to the foundation of a milestone at the karmabhoomi of the versatile and sagacious Lord Krishna. GLA has been actively involved with social causes since its very inception and has drawn appreciation from one and all for its work in various facets of societal paradigms.</p>
        </div>
    </div>
    <div class="bottombanner">
        <div class="address">
            <p id="glaaddress">ADDRESS</p>
            <P id="addressinfo">17km Stone, NH-2,Mathura-Delhi Road, Mathura</P>
            <p id="contactnumber">Phone: +91-5662-250900<br>
            Email: glausoftwaresupport@gla.ac.in</p>
        </div>
        <div class="GLA">
            <p id="glaheading">GLA</p>
            <p id="lastglainfo">We envision ourselves as a <br>
                pace-setting university of Academic<br>
                 Excellence focused on education, research<br>
                  and development in established<br>
                   and emerging professions.
            </p>
        </div>
    </div>
</body>
</html>