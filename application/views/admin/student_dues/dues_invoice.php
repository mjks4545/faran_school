<html>
<head>
    <title>Faran Science School</title>
    <style type="text/css">
      .section
      {
        height: 600px;
        width: 100%;
        float: left;
      }
      .left-side
      {
        height:auto;
        width:40%;
        float: left;
        
      }

       .heading
      {
       margin-left: 20px;
        
      }

      .right-side
      {
        height:auto;
        width:40%;
        float: left;
        margin-left: 60px;
        
      }

       .Text-1
      {
        margin-top: 20px;
        margin-left: 20px;
      }

      .Text-2
      {
        margin-top: 20px;
        margin-left: 20px;
      }
      .logo
      {
        
        float: right;
        margin-top: -100px;


      }
      .logo1
      {
        position: relative;
        float: right;
        margin-top: -100px;
        left: 70px;


      }

      .table
      {
        margin-top: 50px;
        float: left;
        width: 300px;
        margin-left: 20px;
        /*width: 400px;*/
        height: auto;
        border-collapse: collapse;
        width: 100%;
      }

      .table2
      {
        margin-top: 50px;
        float: left;
        width: 300px;
        margin-left: 100px;
        width: 400px;
        height: auto;
        border-collapse: collapse;
        width: 100%;
      }

      .Text-11
      {
        margin-top: 20px;
        margin-left: 100px;
      }

      .Text-22
      {
        margin-top: 20px;
        margin-left: 100px;
      }

      .heading1
      {
        margin-left: 100px;
      }
      .td-data{
          text-align: center;
      }
    </style>
</head>
<body>
  <div class="section">
    <div class="left-side">
      <div class="heading">
        <h4>FARAN SCIENCE SCHOOL</h4>
      </div>
        <div class="Text-1">
          Address:Charsada Road<br>
          peshawar city<br>
          0332-9156844
            
        </div>

          <div class="logo">
              <img src="../../public/img/faran_school_logo.png" height="100px" width="120px">
          </div>
        
          <div class="Text-2">
           <b>Studen Name: </b> <?= $result->name?>
            <br>
            <b>Class: </b><?= $result->class?><br>
            <b>Date: </b><?= $created_date = mdate("%y-%m-%d");?>
          </div>
            <table border="2" class="table">
              
              <tr>
                <th width="100px">
                    <h4>S.No</h4>
                </th>

                        <th width="200px">
                          <h4>HEADS</h4>
                        </th>

                        <th width="200px">
                          <h4>Amount Paid</h4>
                        </th> 
                        <th width="200px">
                          <h4>Amount Due</h4>
                        </th> 
                      </tr>
                         <?php 
                            $received_fee = 0;
                            $fee_to_paid  = 0;
                            foreach ($payment as $array){
                                if( $array->tobepaid_or_paid_fee == 1 ){
                                    $received_fee += $array->amount;
                                }else{
                                    $fee_to_paid += $array->amount;
                                }
                            }
                            $remaining_amount = $fee_to_paid - $received_fee;
                          ?>
                      <tr>
                          <td class="td-data">1</td>
                        <td class="td-data">payment reason</td>
                        <td class="td-data"><?= $received_fee?></td>
                        <td class="td-data"><?= $remaining_amount?></td>
                      </tr>
                                           
                  
            </table>
    </div>

    <div class="right-side">
       <div class="heading1">
        <h4>FARAN SCIENCE SCHOOL</h4>
      </div>
        <div class="Text-11">
          Address:Charsada Road<br>
          peshawar city<br>
          0332-9156844
            
        </div>

          <div class="logo1">
              <img src="../../public/img/faran_school_logo.png" height="100px" width="120px">
          </div>
        
          <div class="Text-22">
            <b>Studen Name:  </b><?= $result->name?>
            <br>
            <b>Class:  </b><?= $result->class?><br>
            <b>Date:  </b><?= $created_date = mdate("%y-%m-%d");?>
          </div>
            <table border="2" class="table2">
              
              <tr>
                <th width="100px">
                    <h4>S.No</h4>
                </th>

                    <th width="200px">
                      <h4>HEADS</h4>
                    </th>

                    <th width="200px">
                      <h4>Amount Paid.</h4>
                    </th> 
                    <th width="200px">
                      <h4>Amount Due.</h4>
                    </th> 
              </tr>
                <?php 
                    $received_fee = 0;
                    $fee_to_paid  = 0;
                    foreach ($payment as $array){
                        if( $array->tobepaid_or_paid_fee == 1 ){
                            $received_fee += $array->amount;
                        }else{
                            $fee_to_paid += $array->amount;
                        }
                    }
                    $remaining_amount = $fee_to_paid - $received_fee;
                  ?>
                      <tr>
                        <td class="td-data">1</td>
                        <td class="td-data">payment reason</td>
                        <td class="td-data"><?= $received_fee?></td>
                        <td class="td-data"><?= $remaining_amount?></td>
                      </tr> 
                  
            </table>
    </div>
  </div>
</body>
</html>