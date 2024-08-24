<body>
<div class="menu-wrap">
        <input type="checkbox" class="toggler">
        <div class="hamburger"><div></div></div>
        <div class="menu">
            <div>
                <div>
                    <ul class="option">
                        <li><a href="/Group4/MainMenu/StudentMenu.php">Home</a></li>
                        <li><a href="#">Appointment Booking</a></li>
                        <li><a href="#">Consultation Record</a></li>
                        <!-- <li><a href="#">Student Information</a></li> -->
                        <li><a href="#">Student Monthly Progress Report</a></li>
                        <li><a href="#">Student Academic Performance</a></li>
                        <li><a href="/Group4/MainMenu/index.html">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

----------------------------------------your code-------------------------------------------

</body>




******************************************************************************************
                                  css
******************************************************************************************

  @import url('https://fonts.googleapis.com/css2?family=Staatliches&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap');
:root{
    --primary-color: rgba(0, 0, 0, 0.5);
    --overlay-color: rgba(0, 0, 0, 0.85);
    --menu-speed: 0.75s;
}

.showcase{
    /* background-color: var(--primary-color); */
    color: #fff;
    height: 100vh;
    position: relative;
}
.showcase:before{
    content: '';
    background: url('https://images.pexels.com/photos/37839/pexels-photo-37839.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260') no-repeat center center/cover;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
}
.showcase .showcase-inner{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    height: 100%;
}
.showcase h1{
    font-size: 4rem;
}
.showcase p{
    font-size: 1.3rem;
    font-family: 'Oswald', sans-serif;
}
.btnn{
    display: inline-block;
    border: none;
    background-color: var(--primary-color);
    color: #fff;
    padding: 0.75rem 1.5rem;
    margin-top: 1rem;
    text-decoration: none;
    transition: opacity 1s ease-in;
    border-radius: 2rem;
}
.btnn:hover{
    opacity: 0.7;
}
.contact-links{
    display: flex;
    justify-content: center;
    width: 200px;
    max-width: 980px;
    flex-wrap: wrap;
    margin-left: 54.5rem; 
    margin-top: -12rem;
}
.contact-details{
    font-size: 1rem;
    margin-bottom: 1rem;
    transition: transform 0.3s ease-out; 
  }
  .contact-details:hover{
    transform: translateY(5px);
  }
  .btn{
      display: inline-block;
        padding-right: 1rem;
        text-decoration: none;
        color: #fff;
  }
.menu-wrap{
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1;
}
.menu-wrap .toggler{
    position: absolute;
    top: 0;
    left: 0;
    z-index: 2;
    cursor: pointer;
    width: 50px;
    height: 50px;
    opacity: 0;
}
.menu-wrap .hamburger{
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    width: 60px;
    height: 60px;
    padding: 1rem;
    /* background: var(--primary-color); */
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: rgba(0, 0, 0, 0.31);
}
/* Hamburger line */
.menu-wrap .hamburger >div {
    position: relative;
    width: 100%;
    height: 2px;
    background-color: rgb(255, 255, 255);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.4s ease;
}
/* Top and bottom lines */
.menu-wrap .hamburger > div:before,
.menu-wrap .hamburger > div:after{
    content: '';
    position: absolute;
    z-index: 1;
    top: -10px;
    width: 100%;
    height: 2px;
    background: inherit;
}
/* Moves line down */
.menu-wrap .hamburger > div:after{
    top: 10px;
}
/* Toggler animate */
.menu-wrap .toggler:checked + .hamburger > div{
    transform: rotate(135deg);
}
/* Turn Lines into X */
.menu-wrap .toggler:checked + .hamburger > div:before,
.menu-wrap .toggler:checked + .hamburger > div:after{
    top: 0;
    transform: rotate(90deg);
}
/* Rotate on hover when checked */
.menu-wrap .toggler:checked:hover + .hamburger > div{
    transform: rotate(225deg);
}
/* Show menu */
.menu-wrap .toggler:checked ~ .menu{
    visibility: visible;
}
.menu-wrap .toggler:checked ~ .menu > div{
    transform: scale(1);
    transition-duration: var(--menu-speed);
}
.menu-wrap .toggler:checked ~ .menu > div > div{
    opacity: 1;
    transition: opacity 0.4s ease;
}
.menu-wrap .menu{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
     visibility: hidden; 
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
}
.menu-wrap .menu > div{
    background-color: var(--overlay-color);
    border-radius: 50%;
    width: 200vw;
    height: 200vw;
    display: flex;
    flex: none;
    align-items: center;
    justify-content: center;
     transform: scale(0); 
    transition: all 0.4s ease;
}
.menu-wrap .menu > div >div{
    text-align: center;
    max-width: 90vw;
    max-height: 100vh;
     opacity: 0; 
    transition: opacity 0.4s ease;
}
.menu-wrap .menu > div > div > ul > li {
    list-style: none;
    color: #fff;
    font-size: 1.5rem;
    padding: 1rem;
}

.menu-wrap .menu >div > div > ul > li > a{
    color: inherit;
    text-decoration: none;
    transition: color 0.4s ease;
}

.option :hover{
  font-size: 2rem;
  font-weight: bold;
}