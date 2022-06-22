				<?php $this->load->view('main/v_sidebar') ?>
				<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
				<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
				<div class="col-sm-8 content">

				<div class="panel panel-default welcome">
					<style type="text/css">
						/*.gallery{
						    display: inline-block;
						    margin-top: 20px;
						}*/
					</style>
					<div class="panel-body">
					    <div class="row">
					    <?php foreach($record->result() as $row){ ?>
						  	<div class="col-xs-6 col-md-4">
							    <a href="<?php echo base_url().'upload/gallery/'.$row->gambar ?>" class="fancybox thumbnail" rel="ligthbox">
							      	<img src="<?php echo base_url().'upload/gallery/'.$row->gambar ?>">
							    </a>
						  	</div>
						<?php } ?>
						</div>
					</div>

					<script type="text/javascript">
						$(document).ready(function(){
						    //FANCYBOX
						    //https://github.com/fancyapps/fancyBox
						    $(".fancybox").fancybox({
						        openEffect: "none",
						        closeEffect: "none"
						    });
						});
					</script>
				</div>
				<!-- welcome -->

			</div><!-- content -->