<?php require_once("includes/header.php"); ?>


    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Individual pending commodities</h2>
         
        </div>
        <div class="col-sm-8">
            <!--<div class="title-action">
                <a href="" class="btn btn-primary">This is action area</a>
            </div>-->
        </div>
    </div>

    <div class="wrapper wrapper-content">
        <table  class="table">
 <thead>
  <tr>
    <th><b>#</b></th>
    <th><b>Commodity</b></th>
    <th><b>Source</b></th>
    <th><b>Quantity</b></th>
    <th><b>E.T.A</b></th>
  </tr>
 </thead>
 <tbody>
  <?php $count=1; 
  foreach ($PSTOCKS as $pendingstocks):?>
  <tr><td><?php echo($count);?></td>

     <td>
      <?php /*echo $central_level_data->commodity_name;*/
         foreach($COMMODITY as $COMM):

         if ($COMM->commodity_id==$pendingstocks->commodity_id){
            echo $COMM->commodity_name; 
            $commodity=$COMM->commodity_id;
           }
         endforeach;?>
    </td>
   <td><?php    foreach ($FUNDING as $FA) :
                  if ($FA->funding_agency_id==$pendingstocks->funding_agency_id) {
                   echo $FA->funding_agency_name;
                  }
                  
                endforeach;?></td>
                 <td>
      <?php echo $pendingstocks->quantity;?>
    </td>
    <td>
     <?php  echo $pendingstocks->expected_time_of_arrival;?>
    </td>
  </tr>

<?php 
$count++;
endforeach;?>
 </tbody>
</table> 
    </div>

<?php require_once("includes/footer.php"); ?>





         <!--  <tbody>
     <?php foreach ($PSTOCKS as $pendingstocks): ?>
  <tr>
    <td>
      <?php /*echo $central_level_data->commodity_name;*/
         foreach($COMMODITY as $COMM):

         if ($pendingstocks->commodity_id==$COMM->commodity_id){
            echo $COMM->commodity_name; 
           }
         endforeach;?>
    </td>
    <td>
     <?php foreach($FUNDING as $FA):
          if ($pendingstocks->funding_agency_id==$FA->funding_agency_id){
             echo $FA->funding_agency_name; 
            }
          endforeach;?>
    </td>
    <td>
      <?php echo $pendingstocks->PendingTotal;?>
    </td>
    <td>
     <?php  echo $pendingstocks->expected_time_of_arrival;?>
    </td>
  </tr>
      <?php endforeach;?>
      </tbody> -->