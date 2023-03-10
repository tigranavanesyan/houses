<?php
    require_once 'config/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Houses</title>
</head>
<body>
    <svg class="hide" xmlns="http://www.w3.org/2000/svg">
        <symbol id="Exclamation" width="20" height="21" viewBox="0 0 20 21" fill="none">
            <path d="M10 0.500484C4.486 0.500484 0 4.9863 0 10.4999C0 16.0137 4.486 20.4995 10 20.4995C15.514 20.4995 20 16.0137 20 10.4999C20 4.9863 15.514 0.500484 10 0.500484ZM10 18.6813C5.48855 18.6813 1.81818 15.0112 1.81818 10.5C1.81818 5.98879 5.48855 2.31867 10 2.31867C14.5115 2.31867 18.1818 5.98879 18.1818 10.4999C18.1818 15.0113 14.5115 18.6813 10 18.6813Z" fill="black"/>
            <path d="M9.99991 8.37927C9.49785 8.37927 9.09082 8.7863 9.09082 9.28836V15.3479C9.09082 15.85 9.49785 16.257 9.99991 16.257C10.502 16.257 10.909 15.85 10.909 15.3479V9.28836C10.909 8.78636 10.502 8.37927 9.99991 8.37927Z" fill="black"/>
            <path d="M9.99991 4.74309C9.76052 4.74309 9.52652 4.84006 9.35688 5.00915C9.18779 5.17824 9.09082 5.41279 9.09082 5.65218C9.09082 5.89158 9.18779 6.12552 9.35688 6.29521C9.52597 6.4643 9.76052 6.56127 9.99991 6.56127C10.2393 6.56127 10.4732 6.4643 10.6429 6.29521C10.812 6.12552 10.909 5.89158 10.909 5.65218C10.909 5.41279 10.812 5.17824 10.6429 5.00915C10.4732 4.84 10.2393 4.74309 9.99991 4.74309Z" fill="black"/>
        </symbol>
        <symbol id="raising" width="18" height="15" viewBox="0 0 18 15" fill="none">
            <path d="M17.9375 1.52964C17.9373 1.51523 17.9364 1.50082 17.9354 1.48646C17.9344 1.47362 17.9335 1.46078 17.9321 1.44816C17.9305 1.43521 17.9283 1.42237 17.9262 1.40954C17.9238 1.39588 17.9217 1.38223 17.9187 1.3688C17.916 1.35688 17.9127 1.34518 17.9096 1.33337C17.9059 1.31966 17.9023 1.3059 17.8979 1.29252C17.8941 1.28071 17.8895 1.26912 17.8852 1.25747C17.8803 1.24469 17.8756 1.23185 17.8701 1.21939C17.8648 1.2072 17.8588 1.19534 17.8528 1.18337C17.8471 1.17194 17.8416 1.1604 17.8354 1.14929C17.8286 1.13721 17.8212 1.12557 17.8138 1.11376C17.8071 1.10314 17.8006 1.09247 17.7935 1.08217C17.7858 1.07112 17.7775 1.06051 17.7692 1.04978C17.7611 1.03916 17.753 1.0286 17.7443 1.01847C17.7362 1.00893 17.7276 0.999778 17.719 0.990569C17.7089 0.979843 17.6988 0.969279 17.6882 0.959041C17.6846 0.955628 17.6815 0.951836 17.6779 0.948477C17.6726 0.943547 17.6668 0.93943 17.6614 0.934717C17.6503 0.924912 17.639 0.915432 17.6274 0.906223C17.6175 0.898422 17.6074 0.890946 17.5972 0.883687C17.586 0.87567 17.5746 0.867923 17.563 0.860502C17.5519 0.853351 17.5407 0.846525 17.5292 0.83997C17.5178 0.833416 17.5063 0.82724 17.4946 0.821227C17.4826 0.815105 17.4706 0.809255 17.4584 0.803838C17.4465 0.798474 17.4344 0.793491 17.4223 0.788724C17.4098 0.783848 17.3973 0.779243 17.3848 0.775018C17.3724 0.770847 17.3597 0.767055 17.3471 0.763425C17.3342 0.759796 17.3213 0.756437 17.3083 0.753457C17.2957 0.750532 17.2829 0.747986 17.2701 0.745657C17.2564 0.743165 17.2426 0.741106 17.2288 0.739319C17.2165 0.737748 17.2042 0.736447 17.1917 0.735418C17.1769 0.734226 17.162 0.733522 17.1472 0.733143C17.1399 0.73298 17.1329 0.732059 17.1257 0.732059H13.8754C13.4266 0.732059 13.0628 1.09588 13.0628 1.54464C13.0628 1.9934 13.4266 2.35722 13.8754 2.35722H15.2659L10.3317 7.68619L8.2202 5.57467C8.06407 5.41849 7.85161 5.33371 7.63021 5.3368C7.4094 5.34102 7.19981 5.4349 7.04964 5.59688L0.27813 12.903C-0.0269131 13.2321 -0.00741115 13.7462 0.321739 14.0513C0.478134 14.1963 0.676241 14.2679 0.873915 14.2679C1.09223 14.2679 1.30995 14.1805 1.47008 14.0078L7.66786 7.32069L9.77965 9.43248C9.93588 9.58871 10.1506 9.67533 10.3699 9.67035C10.5908 9.66613 10.8004 9.57208 10.9505 9.41L16.3131 3.61824V4.79497C16.3131 5.24373 16.677 5.60755 17.1257 5.60755C17.5745 5.60755 17.9383 5.24373 17.9383 4.79497V1.54464C17.9383 1.53955 17.9376 1.53467 17.9375 1.52964Z" fill="black"/>
        </symbol>
        <symbol id="profile" width="50" height="50" viewBox="0 0 50 50" fill="none" >
            <g clip-path="url(#clip0_25_236)">
            <path d="M41.7952 38.9531C44.0385 36.2533 45.5986 33.053 46.3436 29.6227C47.0886 26.1925 46.9965 22.6333 46.0751 19.2462C45.1537 15.8591 43.4302 12.7437 41.0502 10.1635C38.6703 7.58334 35.7039 5.61429 32.4021 4.42291C29.1003 3.23153 25.5601 2.85287 22.081 3.31895C18.6019 3.78503 15.2862 5.08214 12.4143 7.10057C9.5425 9.119 7.19902 11.7994 5.5821 14.915C3.96518 18.0306 3.12239 21.4898 3.12501 25C3.12623 30.1034 4.92471 35.0434 8.20485 38.9531L8.1736 38.9791C8.28297 39.1111 8.40797 39.2239 8.52079 39.3528C8.66141 39.5147 8.81204 39.6653 8.95829 39.8228C9.39579 40.2967 9.84485 40.7528 10.3177 41.1822C10.4606 41.312 10.6089 41.4341 10.7552 41.5598C11.2552 41.9909 11.7683 42.3992 12.302 42.7806C12.3709 42.8294 12.432 42.8889 12.5014 42.9378V42.918C16.161 45.4932 20.5266 46.8753 25.0014 46.8753C29.4762 46.8753 33.8419 45.4932 37.5014 42.918V42.9375C37.5708 42.8886 37.6319 42.8291 37.7008 42.7803C38.2339 42.3989 38.7477 41.9906 39.2477 41.5595C39.3939 41.4345 39.5422 41.3117 39.6852 41.1819C40.1578 40.7523 40.607 40.2962 41.0445 39.8225C41.1903 39.6653 41.3405 39.5144 41.482 39.3525C41.5944 39.2236 41.7198 39.1108 41.8292 38.9787L41.7952 38.9531ZM25 12.5C26.3907 12.5 27.7501 12.9124 28.9064 13.685C30.0626 14.4576 30.9639 15.5557 31.496 16.8405C32.0282 18.1253 32.1675 19.539 31.8962 20.903C31.6249 22.2669 30.9552 23.5198 29.9718 24.5031C28.9885 25.4864 27.7357 26.1561 26.3717 26.4274C25.0078 26.6987 23.5941 26.5595 22.3093 26.0273C21.0245 25.4951 19.9263 24.5939 19.1537 23.4376C18.3811 22.2813 17.9688 20.9219 17.9688 19.5312C17.9688 17.6664 18.7095 15.878 20.0282 14.5594C21.3468 13.2408 23.1352 12.5 25 12.5ZM12.5111 38.9531C12.5381 36.9015 13.3718 34.943 14.8318 33.5014C16.2918 32.0598 18.2607 31.251 20.3125 31.25H29.6875C31.7393 31.251 33.7082 32.0598 35.1682 33.5014C36.6282 34.943 37.4619 36.9015 37.4889 38.9531C34.0621 42.0411 29.6128 43.75 25 43.75C20.3872 43.75 15.9379 42.0411 12.5111 38.9531Z" fill="white"/>
            </g>
            <defs>
            <clipPath id="clip0_25_236">
            <rect width="50" height="50" fill="white"/>
            </clipPath>
            </defs>
        </symbol>
        <symbol id="prev" width="20" height="9" viewBox="0 0 20 9" fill="none">
            <path d="M1.12496 1.375V7.625M1.12496 7.625H7.37496M1.12496 7.625L3.87528 5.15698C5.31382 3.72094 7.18017 2.79125 9.19299 2.50813C11.2059 2.22493 13.2563 2.60354 15.0352 3.58687C16.8142 4.57031 18.2254 6.1051 19.0562 7.96021" stroke="#363853" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </symbol>
        <symbol id="next" width="21" height="9" viewBox="0 0 21 9" fill="none" >
            <path d="M19.375 1.375V7.625M19.375 7.625H13.125M19.375 7.625L16.6247 5.15698C15.1862 3.72094 13.3198 2.79125 11.307 2.50812C9.2941 2.22493 7.24372 2.60354 5.46475 3.58687C3.68577 4.57031 2.27461 6.1051 1.44385 7.96021" stroke="#363853" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </symbol>
        <symbol id="refresh" width="15" height="15" viewBox="0 0 15 15" fill="none">
            <path d="M13.8317 9.51888C13.4865 9.36806 13.0846 9.5256 12.9339 9.87064C11.99 12.0309 9.85714 13.4268 7.50009 13.4268C5.63167 13.4268 3.90434 12.5486 2.79813 11.1085L5.12673 11.5717C5.49608 11.6452 5.85494 11.4053 5.92844 11.0359C6.00189 10.6666 5.76203 10.3077 5.39272 10.2342L1.57443 9.47474C1.20512 9.40147 0.846213 9.64115 0.772714 10.0105L0.0132279 13.8288C-0.0602253 14.1981 0.179634 14.557 0.548945 14.6305C0.593854 14.6394 0.63858 14.6437 0.68267 14.6437C1.0013 14.6437 1.28611 14.4191 1.35066 14.0947L1.76647 12.0042C3.12881 13.7371 5.23013 14.7904 7.50009 14.7904C10.3991 14.7904 13.0225 13.0736 14.1834 10.4166C14.3342 10.0716 14.1767 9.66965 13.8317 9.51888Z" fill="#363853"/>
            <path d="M14.4511 0.369084C14.0818 0.295722 13.7229 0.53549 13.6494 0.904802L13.2336 2.99554C11.8712 1.26284 9.76989 0.209587 7.50016 0.209587C4.60116 0.209587 1.97776 1.92642 0.816732 4.58333C0.665962 4.92836 0.82346 5.33031 1.1685 5.48108C1.25741 5.5199 1.35 5.53831 1.44118 5.53831C1.70394 5.53831 1.95435 5.38549 2.0663 5.12932C3.01028 2.96904 5.1432 1.57315 7.5002 1.57315C9.3683 1.57315 11.0956 2.45114 12.2018 3.89107L9.87329 3.42785C9.50389 3.35444 9.14504 3.59421 9.07154 3.96352C8.99808 4.33283 9.2379 4.69178 9.60721 4.76528L13.4256 5.52485C13.4697 5.53363 13.5143 5.53794 13.5586 5.53794C13.6925 5.53794 13.8245 5.49849 13.9374 5.42304C14.0878 5.32258 14.192 5.1665 14.2273 4.98914L14.9868 1.17075C15.0603 0.801485 14.8204 0.442537 14.4511 0.369084Z" fill="#363853"/>
        </symbol>
    </svg>
    <header class="header">
        <div class="container">
            <div class="logo">
            </div>
            <nav class="nav">
                <div class="center-inline">
                    <div class="menu-items">
                        <div class="menu-item"><a class="active" href="#">New building</a></div>
                        <div class="menu-item"><a href="#">Resale</a></div>
                        <div class="menu-item"><a href="#">Plots</a></div>
                        <div class="menu-item"><a href="#">Abroad</a></div>
                    </div>

                </div>
                <div class="notification">
                    <div class="notification-freame">
                        <div class="notification-icon">
                            <a href="#">
                                <svg class="svg-exclamation">
                                    <use href="#Exclamation"></use>
                                </svg>
                            </a>
                            <div class="notification-new">2</div>                            
                        </div>
                    </div>
                    <div class="notification-freame">
                        <div class="notification-icon">
                            <a href="#">
                                <svg class="svg-raising">
                                    <use href="#raising"></use>
                                </svg>
                            </a>
                            <div class="notification-new">10</div>                            
                        </div>
                    </div>
                </div>
                <div class="search-profil">
                    <div class="search-user">
                        <div class="user">
                            Username
                        </div>
                        <select name="drinks" required>
                            <option value="" disabled selected hidden>Cityyyy</option>
                            <option value="1">11111</option>
                            <option value="2">22222</option>
                            <option value="3">33333</option>
                          </select>
                    </div>
                    <div class="profil">
                        <div class="">
                            <div class="">
                                <a href="#">
                                    <svg>
                                        <use href="#profile"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="container container_main">
            <div class="wraper_form">
                <div class="form_title">
                    <div>
                        <h1>N8  name of House</h1>
                    </div>
                    <div class="action">
                        <div class="action-svg_fream">
                            <svg>
                                <use href="#prev"></use>
                            </svg>
                        </div>
                        <div>
                            <svg>
                                <use href="#next"></use>
                            </svg>
                        </div>
                        <div>
                            <svg>
                                <use href="#refresh"></use>
                            </svg>
                        </div>
                    </div>
                </div>

                <form action="action/create.php" method="post" class="form">
                    <b>Name</b>
                    <input type="text" name="name" >
                    <b>Area</b>
                    <input type="text" name="area" >
                    <b>Date</b>
                    <input type="date" name="date" >
                    <b>Archive</b>
                    <input type="text" name="archive" >
                    <b>Date</b>
                    <input type="text" name="name888" >
                    <button type="submit">avelacnel</button>
                </form>

                <form action="action/delite.php" method="post">
                    <input type="text" name="id">
                    <button type="submit">del</button>
                </form>



            </div>
            <div class="wtaper_db">
                <table>
                    <tr>
                        <th>radiobtn</th>
                        <th>id</th>
                        <th>Name</th>
                        <th>Area</th>
                        <th>Date</th>
                        <th>Archive</th>
                    </tr>
                    <?php
                        $data = mysqli_query($connect, "SELECT * FROM `housesdb`");
                        $data = mysqli_fetch_all($data);
                        foreach($data as $datarow) {
                    ?>
                        
                    <tr>
                        <td><?= $datarow[0] ?></td>
                        <td><?= $datarow[1] ?></td>
                        <td><?= $datarow[2] ?></td>
                        <td><?= $datarow[3] ?></td>
                        <td><?= $datarow[4] ?></td>
                        <td><?= $datarow[5] ?></td>
                    </tr>
                  <?php
                        }
                  ?>
                </table>
                
            </div>
        </div>


    </main>
    
</body>
</html>