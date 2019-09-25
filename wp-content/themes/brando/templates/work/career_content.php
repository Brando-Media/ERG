<?php 
$title    = get_sub_field('title');
$content  = get_sub_field('content');
?>

<section class="section " style="min-height: 675px;">
        <div class="container container--small main-content serviceshometext">
            <div class="row">
                <div class="col-lg-12 projects-home" style="color:black; padding-left:0px;     margin-top: 0px;">
                    <div  style="/*max-width:90%;*/"-->
                        <div class="worktitlec" style="font-size: 50px;margin-bottom: 30px;padding-left:15px;font-weight: 300;  font-family: Helvetica;
    color: #00498D; font-style: normal;">
                        <div class="fontworksingle d" style="padding-left:15px; margin-bottom:30px; font-family: Helvetica;
    color: #00498D;"><?php echo $title ?></div> 
                        </div>
                        <div style="padding-left:30px; max-width: 700px;  font-family: Helvetica;
    color: #00498D;"> <?php echo $content ?> </div>

                    </div>
                </div>
                <div class="col-lg-6 work-completed">
                </div>
            </div>
        </div>
        </section>