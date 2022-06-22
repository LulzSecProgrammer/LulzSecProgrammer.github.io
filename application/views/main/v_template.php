<!DOCTYPE html>
<html>
<head>
	<title>SMP NEGERI 2 SUKAMAJU</title>
	<link href="<?php echo base_url().'assets/images/favorite.png' ?>" rel="shortcut icon" type="image/ico" /> 
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/' ?>css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/' ?>css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/' ?>css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/' ?>css/font-awesome.css">

	<!-- DataTables CSS -->
    <link href="<?php echo base_url().'' ?>assets/dashboard/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url().'' ?>assets/dashboard/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">


	<script src="<?php echo base_url().'assets/' ?>js/jquery.min.js"></script>
	<?php $data = $this->db->query('SELECT * FROM gambar WHERE kategori = "background" GROUP BY id DESC LIMIT 1')->row_array(); ?>
	<style type="text/css">
		body{
			background-image: url('<?php echo base_url().'assets/images/'.$data['gambar']; ?>');
			background-attachment: fixed;
		}
		.panel > .panel-heading{
			color:#fff;
			font-weight: bold;
		}
	</style>
</head>
<body>

	<div class="containers">
		<div class="container">
			<div class="col-sm-12" style="padding: 0;margin-right: 0;">
				<?php $data=$this->db->query('SELECT * FROM gambar WHERE kategori = "header" GROUP BY id DESC LIMIT 1')->row_array(); ?>
				<img src="<?php echo base_url().'assets/images/'.$data['gambar'] ?>" class="img-responsive" style="border-radius: 5px 5px 0 0;"> 
			</div> <!-- //header -->

			<div class="col-sm-12" style="border-right: 1px solid #FFFFFF;padding: 0;margin: 0;">
			<hr style="border-bottom: 2px solid #333333;padding: 0;margin: 0;">
			</div>

			<div class="col-sm-12 menu">
				<style type="text/css">
					.navbar-nav > li > a{
						/*color: #FFFFFF;*/
					}
					.navbar-nav > li > a:hover{
						/*color: #3d537e;*/
					}
					.navbar-nav > .dropdown:hover > a{
						background-color: #eee;
						/*color: #3d537e;*/
					}
					.navbar-nav > .dropdown:hover > .dropdown-menu{
					  display: block;
					}
					.navbar-nav > .dropdown > .dropdown-menu > li:hover > #submenu{
						display: block;
					}
					.dropdown-menu>li{
						position:relative;
						-webkit-user-select: none;       
						-moz-user-select: none;
						-ms-user-select: none;
						-o-user-select: none;
						user-select: none;
						cursor:pointer;
					}
					.dropdown-menu .sub-menu {
					    left: 100%;
					    position: absolute;
					    top: 0;
					    display:none;
					    margin-top: -1px;
						border-top-left-radius:0;
						border-bottom-left-radius:0;
						border-left-color:#fff;
						box-shadow:none;
					}
					.right-caret:after,.left-caret:after{
						content:"";
					    border-bottom: 5px solid transparent;
					    border-top: 5px solid transparent;
					    display: inline-block;
					    height: 0;
					    vertical-align: middle;
					    width: 0;
						margin-left:5px;
					}
					.right-caret:after{
						border-left: 5px solid #337ab7;
					}
					.left-caret:after{
						border-right: 5px solid #337ab7;
					}
				</style>
				<ul class="nav navbar-nav">
					<li class="active"><a href="<?php echo base_url() ?>">Home <span class="sr-only">(current)</span></a></li>
					<li class="dropdown">
						<a href="#">Profil <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url().'direktori/halaman/profile' ?>">Profil Lengkap</a></li>
							<li><a href="<?php echo base_url().'direktori/halaman/struktur-organisasi' ?>">Struktur Organisasi</a></li>
				            <li><a href="<?php echo base_url().'direktori/halaman/sejarah' ?>">Sejarah</a></li>
				            <li><a href="<?php echo base_url().'direktori/halaman/visi-misi' ?>">VISI dan MISI</a></li>
				            <li><a href="<?php echo base_url().'direktori/halaman/fasilitas' ?>">Fasilitas</a></li>
				            <!-- <li role="separator" class="divider"></li> -->
						</ul>
					</li>
					<li class="dropdown">
						<a href="#">Direktori <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url().'direktori/guru' ?>">Direktori Guru</a></li>
				            <li><a href="<?php echo base_url().'direktori/siswa' ?>">Direktori Siswa</a></li>
				            <li><a href="<?php echo base_url().'direktori/alumni' ?>">Direktori Alumni</a></li>
				            <li role="separator" class="divider"></li>
							<li>
								<a class="trigger right-caret">Prestasi</a>
								<ul id="submenu" class="dropdown-menu sub-menu">
									<li><a href="<?php echo base_url().'direktori/halaman/prestasi-sekolah' ?>">Prestasi Sekolah</a></li>
									<li><a href="<?php echo base_url().'direktori/halaman/prestasi-guru' ?>">Prestasi Guru</a></li>
									<li><a href="<?php echo base_url().'direktori/halaman/prestasi-siswa' ?>">Prestasi Siswa</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="dropdown">
			          	<a href="#">Kesiswaan <span class="caret"></span></a>
			          	<ul class="dropdown-menu">
				            <li><a href="<?php echo base_url().'direktori/halaman/osis' ?>">OSIS</a></li>
				            <li><a href="<?php echo base_url().'direktori/halaman/extra-kurikuler' ?>">Ekstra Kurikuler</a></li>
			          	</ul>
			        </li>
			        <li><a href="<?php echo base_url().'gallery' ?>">Gallery</a></li>
			        <li><a href="<?php echo base_url().'forum' ?>">Forum Diskusi</a></li>
					<script type="text/javascript">
						$(function(){
							$(".dropdown-menu > li > a.trigger").on("click",function(e){
								var current=$(this).next();
								var grandparent=$(this).parent().parent();
								if($(this).hasClass('left-caret')||$(this).hasClass('right-caret'))
									$(this).toggleClass('right-caret left-caret');
								grandparent.find('.left-caret').not(this).toggleClass('right-caret left-caret');
								grandparent.find(".sub-menu:visible").not(current).hide();
								current.toggle();
								e.stopPropagation();
							});
							$(".dropdown-menu > li > a:not(.trigger)").on("click",function(){
								var root=$(this).closest('.dropdown');
								root.find('.left-caret').toggleClass('right-caret left-caret');
								root.find('.sub-menu:visible').hide();
							});
						});
					</script>
				</ul>
			</div>

			<?php echo $contents ?>
			
			<div class="col-sm-12 footer-top">
				<div class="col-sm-6 footer-left">
					<div class="panel panel-default">
					  	<div class="panel-heading"><i class="glyphicon glyphicon-link"></i> External Link</div>
					  	<div class="panel-body">
					  		<ul>
					  		<?php $data=$this->db->get('external_link');
					  		foreach ($data->result() as $row) {
					  			echo '<li><a href="'.$row->url.'" target="_blank">'.$row->judul.'</a></li>';
					  		}
					  		?>
					  		</ul>
					  	</div>
					</div>
				</div><!-- footer left -->

				<div class="col-sm-6 footer-right">
					<div class="panel panel-default">
					  	<div class="panel-heading"><i class="glyphicon glyphicon-map-marker"></i> Alamat Sekolah</div>
					  	<div class="panel-body">
					  		<div class="col-sm-6">
					  			<img src="<?php echo base_url().'assets/images/peta_lokasi.jpg' ?>" class="img-responsive">
					  		</div>
					  		<div class="col-sm-6">
					  			<p style="font-size:16px;margin-top:70px;">
					  			Jl. G. Latimojong No 13 A Rawamangun, Kec. Sukamaju, Kab. Luwu Utara, Pro. Sulawesi Selatan</p>
					  		</div>
					  	</div>
					</div>
				</div><!-- footer right -->

			</div><!-- footer top -->

			<div class="col-sm-12 footer-button">
				<p>COPYRIGHT @ 2016 SMPN 2 SUKAMAJU</p>
			</div>

		</div><!-- container -->
	</div><!-- containers -->

	<script type="text/javascript" src="<?php echo base_url().'assets/' ?>js/npm.js"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/' ?>js/bootstrap.js"></script>

	 <!-- DataTables JavaScript -->
    <script src="<?php echo base_url().'' ?>assets/dashboard/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url().'' ?>assets/dashboard/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
	
	<!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
	
</body>
</html>