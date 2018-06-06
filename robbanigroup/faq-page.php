<?php
/**
 * Template Name: FAQ Page
 *
 * @package ketoki * 
 * @since ketoki 1.0
 */


get_header(); ?>
<div class="ec-minheader"> 
   <div class="ec-minheader-wrap"> <span class="full-pattren"></span> 
      <div class="container"> 
         <div class="row"> 
            <div class="col-md-12">
               <div class="ec-page-title"> 
                  <h1><?php the_title(); ?></h1>                               
               </div> 
            </div>
            <div class="col-md-12">
                <?php ketoki_breadcrumbs(); ?>
            </div> 
            </div>
      </div> 
   </div>
</div>


<div class="ec-main-content">
   <div class="ec-main-section ec-main-space">
      <div class="container">
         <div class="row">
            <div class="col-md-8">
               <div class="ec-detail">
                 
                  <div class="ec-detail-editor">


                   <div class="ec-accordion"> 

                       <div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group"> 
                           <?php 
                           global $ketoki;
                              if(isset($ketoki['f-slide']) && !empty($ketoki['f-slide'])):
                                $i=0;
                              foreach ($ketoki['f-slide'] as $exp) {
                                $i++;
                                 ?>
                       <div class="panel panel-default">
                          <div id="heading<?php echo $i; ?>" role="tab" class="panel-heading"> 
                            <h4 class="panel-title">
                             <a aria-controls="collapseOne" aria-expanded="<?php if($i==1){echo "true"; }else{ echo "false"; }?>" href="#collapse<?php echo $i; ?>" data-parent="#accordion" data-toggle="collapse" class="collapsed"> <i class="fa fa-question"></i> <?php echo $exp['title']; ?></a> 
                             </h4> 

                          </div>
                          <div role="tabpanel" class="panel-collapse collapse" id="collapse<?php echo $i; ?>" aria-expanded="false" style="height: 0px;"> 
                              <div class="panel-body">
                                <?php echo $exp['description']; ?>
                              </div> 
                          </div>

                      </div>
                       <?php
                              }
                              endif;
                              ?>

                      <!--  <div class="panel panel-default">
                          <div id="headingTwo" role="tab" class="panel-heading"> 
                            <h4 class="panel-title"> <a aria-controls="collapseTwo" aria-expanded="false" href="#collapseTwo" data-parent="#accordion" data-toggle="collapse" class="collapsed"> <i class="fa fa-question"></i> Very first Richardson Community Health Screening </a> </h4> 
                          </div>
                           <div aria-labelledby="headingTwo" role="tabpanel" class="panel-collapse collapse" id="collapseTwo" aria-expanded="false" style="height: 0px;"> <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div> </div>

                        </div> -->

                    </div> 

                </div>



                  </div>
               </div>
            </div>
            <?php get_sidebar();?>
         </div>
      </div>
   </div>
</div>


<?php get_footer(); ?>