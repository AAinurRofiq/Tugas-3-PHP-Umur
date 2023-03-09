<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <link rel="stylesheet" href="assets/style/style.css">
    <style>
        @import url('https://fonts.googleapiS.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
      </style>
</head>
<body>

    <?php
        $birthdate = '2002-09-27'; //input tanggal lahir
        $age = date_diff(date_create($birthdate), date_create('now'))->y;
    ?>

    <div class="container">
        <div class="card-one">

            <div class="profile">
                <img src="assets/img/pp.png" alt="">
            </div>

            
            <div style="color: white; font-size: 18px;">
               <P><b>ACHMAD AINUR ROFIQ</b></P> 
            </div>

            <div class="ts">
                <p><b>Tentang saya</b></p> 
                </div>
            
            <div style="color: white; text-align: justify;">
                <p>Pantang menyerah, pekerja keras, suka mencoba hal baru. Mudah bergaul dengan orang lain, mudah beradaptasi dengan lingkungan, dan rasa keinginan belajar yang tinggi. Umur <?php echo $age;?></p> 
            </div>

           
            <div class="dt">
                <p><b>Detail Kontak</b></p> 
            </div>


            <div style="width: 284px; color: white; ">
                <table style="border-spacing: 10px;">
                    <tr>
                        <td>Email</td>
                        <td>aarofiq44@gmail.com</td>
                    </tr>
                    <tr>
                        <td>No Telpon</td>
                        <td>082332326854</td>
                    </tr>
                    <tr>
                        <td>Instagram</td>
                        <td>@rofiq__28</td>
                    </tr>
            </table>   
            </div>       
        </div>
                     
        <div class="card-two">
               
            <P class="ra">RIWAYAT AKADEMIK</P>
            <img src="assets/img/akademi.png" alt="akademi">

        </div>
        
        
        <div class="card-three">
            <p class="po">PENGALAMAN ORGANISASI</p>
            <img src="assets/img/po.png" alt="pengalam organisasi" >
        </div>
        

        <div class="card-four">
            <table style="border-spacing: 6px;">
            
                <tr>
                   <td style="font-size: 16px;"> <b>Universitas Pembangunan Nasional “Veteran” Jawa Timur</b> </td>
                </tr>

                <tr>
                   <td> Informatika, Fakultas Ilmu Komputer</td>
                </tr>

                <tr>
                   <td> 2021 - saat ini </td>
                </tr>
                           

                <tr>
                   <td style="font-size: 16px;  padding-top: 12px; "><b>SMA Negeri 13 Surabaya</td>
                </tr>

                <tr>
                    <td>IPA</td>
                </tr>

                <tr>
                    <td>2018-2021 </td>
                </tr>
                    
            </table>
        </div>

        <div class="line">
            <img src="assets/img/Line.png" alt="line">

        </div>

        <div class="card-five">
            <table>

                <tr>
                    <td style="font-size: 16px;"><b>Sekretaris</b></td>
                </tr>
                
                <tr>
                    <td>Remaja Masjid Baitul Hasanah</td>
                </tr>
                
                <tr>
                    <td>2018-saat ini</td>
                </tr>
                
                <tr>
                    <td style="font-size: 16px; padding-top: 12px;"><b>Ketua Pramuka</b></td>
                </tr>

                <tr>
                    <td>Pradana Pramuka Gudep 24.507 SMA Negeri 13 Surabaya</td>
                </tr>

                <tr>
                    <td>2019-2020</td>
                </tr>

                <tr>
                    <td style="font-size: 16px; padding-top: 12px;"><b>Dewan Pengurus HUMAS</b></td>
                </tr>

                <tr>
                    <td>mahapala UPN "Veteran" Jawa Timur</td>
                </tr>

                <tr>
                    <td>2021-saat ini</td>
                </tr>

            </table>
                    
        </div>

    </div>
    
</body>
</html>