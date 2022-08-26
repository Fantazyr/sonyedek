<?php 
session_start();

if(!isset($_SESSION['blogin'])){

    header('Location: /User');
    exit();
    
}
$page = "Profil";
include('include/head.php');
include("blog_query.php");

?>


        
        
<div>
    <div>
        
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper"> <!-- genel bir container body gibi -->
           
            <!-- PROFIL YAZISININ SATIRI -->

            <!-- Content Header (Page header) -->
            <section class="content-header"> 
                <!-- container-fluid -->
                <div class="container-fluid"> <!-- padding olmayan container (content header için tanımlı !!) -->
                    <div class="row mb-2">  <!--row = satır, mb = margin-bottom -->
                        <div class="col-sm-2">
                            <h1>Profil</h1>
                        </div>
                        
                    </div>
                    
                </div> <!-- /.container-fluid -->
            </section> <!-- /. Content Header (Page header) -->
            


            <!-- Main content -->
            <section class="content">   <!-- BODYNİN İÇİNDEKİ GENEL CONTAİNER  -->
                
            
         
                
                <div class="container-fluid"> <!-- content containerinin içinde paddingi olan bir container daha -->
                    <div class="row"> <!-- satır oluşturduk (satırın uzunluğu içide bulunduğu container kadar) -->
                        <div class="col-md-3"> <!-- oluşturduğumuz satıra sutun ekledik ve 12/3 lük alan verdik (md = medium responsive site tasarımı için yazılmıştır.) -->


                            <!-- **************** Soldaki Profil Barı ******************** -->
                        
                            <!-- Profile Image -->
                            <div class="card card-primary card-outline"> <!-- card ve card-pri...vb = soldaki profil kısmının containeri gibidir bütün özellikleri, renkleri alaıyor -->

                                <!-- Card Body -->
                                <div class="card-body box-profile"> <!-- sanırım bu iki class' ın bir işlevi yok-->


                                    <div class="text-center">
                                        <img class="profile-card-img profile-user-img img-fluid "
                                        src="admin/dist/img/user4-128x128.jpg"
                                        alt="User profile picture">
                                    </div>


                                    <h3 class="profile-card-text profile-username text-center">Nina Mcintire</h3>
                                    <p class="profile-card-text text-muted text-center">Software Engineer</p>


                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Followers</b> <a class="float-right">1,322</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Following</b> <a class="float-right">543</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Friends</b> <a class="float-right">13,287</a>
                                        </li>
                                    </ul>
                                    
                                    <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <!-- Bio Kısmı -->
                            <div class="card card-primary">                        
                                <div class="card-body" style="margin: 15px; color: #ffffff;">
                                    <strong><i class="fas fa-book mr-1"></i> Bio</strong>
                                    <p class="text-muted" style="color: #ffffff;">
                                    B.S. in Computer Science from the University of Tennessee at Knoxville
                                    </p>
                                </div>
                            </div>

                        </div>
                        <!-- /.col-md-3 -->
                        <!-- **************** ******************** ******************** -->
                    

                        <!-- col-md-9 -->
                        <div class="col-md-9"> <!-- satırı 12 ye bölüp, profil kısmı için 12/3 kullanmıştık, geri kalan kısmınada bloglar ayarlar button menü gelicek 9 alan-->
                            <div class="card">

                                <!-- **************** Button Menü ******************** -->
                                <div class="card-header p-2">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="profile-btn nav-link active" href="#activity"
                                        data-toggle="tab">Bloglarım</a></li>
                                        <li class="nav-item"><a class="profile-btn nav-link " href="#timeline" data-toggle="tab">İçerik Ekle</a>
                                        </li>
                                        <li class="nav-item"><a class="profile-btn nav-link " href="#settings" data-toggle="tab">Ayarlar</a>
                                        </li>
                                        <li class="nav-item"><a class="profile-btn nav-link " href="/blog_logout.php"
                                        role="button"><i>Çıkış Yap</i></a></li>
                                    </ul>
                                </div><!-- /.card-header -->
                                <!-- **************** *********** ******************** -->
                                
                                <!-- NOT: tab content, tab-pane bir yapıdır öğrenmek için = https://getbootstrap.com/docs/4.0/components/navs/#v-pills-messages -->


                                <div class="card-body">
                                    <div class="tab-content">


                                        <!-- **************** BLOGLARIM KISMI ******************** -->
                                        <div class="active tab-pane" id="activity">
                                            <div class="row">


                                                <!-- NOT: Bu class' ların özeliklerini ne kadar alan kapladığını yorum satırı olarak yazmamız lazım -->
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 card-blog">
                                                    <div class="tm-content-box">
                                                        <img src="img/tm-img-310x180-1.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
                                                        <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #1</h4>
                                                        <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                                                        consequat mauris dapibus id. Donecscelerisque porttitor pharetra</p>
                                                        <a href="#" class="tm-btn text-uppercase">READ MORE</a>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 card-blog">
                                                    <div class="tm-content-box">
                                                        <img src="img/tm-img-310x180-2.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
                                                        <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #1</h4>
                                                        <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                                                        consequat mauris dapibus id. Donecscelerisque porttitor pharetra</p>
                                                        <a href="#" class="tm-btn text-uppercase">READ MORE</a>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 card-blog">
                                                    <div class="tm-content-box">
                                                        <img src="img/tm-img-310x180-3.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
                                                        <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #1</h4>
                                                        <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                                                        consequat mauris dapibus id. Donecscelerisque porttitor pharetra</p>
                                                        <a href="#" class="tm-btn text-uppercase">READ MORE</a>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 card-blog">
                                                    <div class="tm-content-box">
                                                        <img src="img/tm-img-310x180-1.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
                                                        <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #1</h4>
                                                        <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                                                        consequat mauris dapibus id. Donecscelerisque porttitor pharetra</p>
                                                        <a href="#" class="tm-btn text-uppercase">READ MORE</a>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 card-blog">
                                                    <div class="tm-content-box">
                                                        <img src="img/tm-img-310x180-4.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
                                                        <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #1</h4>
                                                        <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                                                        consequat mauris dapibus id. Donecscelerisque porttitor pharetra</p>
                                                        <a href="#" class="tm-btn text-uppercase">READ MORE</a>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 card-blog">
                                                    <div class="tm-content-box">
                                                        <img src="img/tm-img-310x180-3.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
                                                        <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #1</h4>
                                                        <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                                                        consequat mauris dapibus id. Donecscelerisque porttitor pharetra</p>
                                                        <a href="#" class="tm-btn text-uppercase">READ MORE</a>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 card-blog">
                                                    <div class="tm-content-box">
                                                        <img src="img/tm-img-310x180-2.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
                                                        <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #1</h4>
                                                        <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                                                        consequat mauris dapibus id. Donecscelerisque porttitor pharetra</p>
                                                        <a href="#" class="tm-btn text-uppercase">READ MORE</a>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 card-blog">
                                                    <div class="tm-content-box">
                                                        <img src="img/tm-img-310x180-1.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
                                                        <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #1</h4>
                                                        <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                                                        consequat mauris dapibus id. Donecscelerisque porttitor pharetra</p>
                                                        <a href="#" class="tm-btn text-uppercase">READ MORE</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.bloglarım -->
                                        </div>
                                        <!-- /.tab-pane id=activity -->
                                        <!-- **************** ******************** ******************** -->


                                        <!-- **************** İÇERİK OLUŞTUR KISMI ******************** -->
                                        <div class="tab-pane" id="timeline">
                                            

                                            <!-- Main content -->
                                            <section class="content">

                                            
                                                <form action="include/functions.php" method="POST">
                                                    <div class="row">
                                                        <div style="margin-top:15px;" class="col-md-12">

                                                            <form action="index.html" method="post" class="tm-contact-form">

                                                                <div class="form-group">
                                                                    <input style="border: white !important;" type="text" id="XNAMEX" name="contact_name"
                                                                    class="form-control" placeholder="Name" required />
                                                                </div>
                                                                <hr> 
                                                                <div class="form-group">
                                                                    <input style="border: white !important;" type="email" id="XMAILX" name="contact_email"
                                                                    class="form-control" placeholder="Email" required />
                                                                </div>
                                                                <hr>
                                                                <div class="form-group">
                                                                    <input style="border: white !important;" type="text" id="XSUBJECTX"
                                                                    name="contact_subject" class="form-control" placeholder="Subject" required />
                                                                </div>
                                                                <hr>
                                                                <div class="form-group">
                                                                    <textarea style="border: white !important;" id="XMESSAGEX" name="contact_message"
                                                                    class="form-control" rows="6" placeholder="Message" required></textarea>
                                                                </div>

                                                                <button type="submit" class="tm-btn">Submit</button>
                                                            </form>

                                                        </div>
                                                    </div>
                                                </form>


                                            </section>
                                        </div>
                                        <!-- /.tab-pane id=timeline -->
                                        <!-- **************** *********************** ******************** -->


                                        <!-- **************** AYARLAR KISMI ******************** -->    
                                      <div class="tab-pane" id="settings">                         
						                <div class="row">

							                <div class="col-md-6">
								                <div class="form-group">
								   	                <label>First Name</label>
								  	                <input type="text" class="form-control">
								                </div>
							                </div>

							                <div class="col-md-6">
								                <div class="form-group">
								  	                <label>Last Name</label>
								  	                <input type="text" class="form-control">
								                </div>
							                </div>

							                <div class="col-md-6">
								                <div class="form-group">
								  	                <label>Email</label>
								  	                <input type="text" class="form-control">
								                </div>
							                </div>

							                <div class="col-md-6">
								                <div class="form-group">
								  	                <label>Phone number</label>
								  	                <input type="text" class="form-control">
								                </div>
							                </div>

							                <div class="col-md-6">
								                <div class="form-group">
								  	                <label>Company</label>
								  	                <input type="text" class="form-control">
								                </div>
							                </div>

							                    <div class="col-md-6">
								                    <div class="form-group">
								  	                    <label>Designation</label>
								  	                    <input type="text" class="form-control">
								                    </div>
							                    </div>

							                <div class="col-md-12">
								                <div class="form-group">
								  	                <label>Bio</label>
									                <textarea class="form-control" rows="4">Lorem ipsum dolor sit amet.</textarea>
								                </div>
							                </div>


                                            
						                </div>
                                        <button class="btn btn-primary">Update</button>
							            <button class="btn btn-light">Cancel</button>
                                      </div>
                                      
						          
							












                                        <!-- **************** *********************** ******************** -->

                                    </div>
                                    <!-- /.tab-content -->
                                </div>
                                <!-- /.card-body-->

                            </div>
                            <!-- /.card-->
                        </div>
                        <!-- /.col-md-9-->

                    </div>
                    <!-- /.row-->
                </div>
                <!-- /.container-fluid-->
            
            </section>
            <!-- /.content-->
        </div>
        <!-- /.contnet wrapper -->

    </div>
</div>












































<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>



<?php
include('include/footer.php');
?>