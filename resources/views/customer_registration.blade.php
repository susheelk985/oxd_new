
@include('inc.header')



<style>

.numcls::-webkit-inner-spin-button,

.numcls::-webkit-outer-spin-button {

 -webkit-appearance: none;

 margin: 0;

}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

                <div class="page-heading" style="background-color: #df3342"><br>
                    <h1 style="color: white;">Registration Details</h1>
                    <br><br>
                </div>
                @include('inc.messages')

   <!-- Main content -->

   <section class="content">

     <div class="row" id="element_overlap">

       <!-- left column -->

       <div class="col-md-12">

         <!-- general form elements -->

         <div class="box box-primary">

            <!-- form start -->

           <form role="form" name="cusreg" id="OrderForm" action="{{url('/customer/register')}}" method="post" enctype="multipart/form-data">
             <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
             <!--<input type="hidden" id="plan_id" name="plan_id">-->
             <input type="hidden" id="category_id" name="category_id">
             <input type="hidden" id="products_id" name="products_id">
             <input type="hidden" id="emi_months" name="emi_months">
             <input type="hidden" id="product_costVal" name="product_cost">


             <div class="box-body">




              <div class="col-md-6" id="element_overlap1">

                 <div class="form-group">

                 <label>Plan<i class="fa fa-asterisk" style="font-size:7px;color:red"></i></label>

                 <select class="form-control" id="plan" name="plan" onChange="selectPlan(this);" required>

                   <option value="">Select</option>

                   <?php

                     foreach($data['plans'] as $p){
                    $price=$p['price'];
                    if($p['name']=='Auto Pool'){
             ?>

                            <option value="<?=$p['id']?>"><?=$p['name']?></option>

          <?php	}else{

         ?>
                <option value="<?=$p['id']?>"><?=$p['name']?></option>
            <?php }
          } ?>
                 </select>

                 <p class="help-block" id="ErrorMessagep"></p>

               </div>

               </div>
               <div class="col-md-6" id="element_overlap1">

                  <div class="form-group">

                  <label id="productsAP_label" style="display: none;">Product Name<i class="fa fa-asterisk" id="productsAP_imp" style="font-size:7px;color:red; display: none;"></i></label>

                  <select class="form-control" id="productsAP" name="products" onChange="selectProductAP(this);" style="display: none;" required>

                    <option value="">Select</option>

                    <?php

                      foreach($data['productsAP'] as $p){
                     $priceAP=$p['products_price'];


              ?>

                             <option value="<?=$p['products_id']?>"><?=$p['products_name']?></option>



             <?php }
            ?>
                  </select>

                  <p class="help-block" id="ErrorMessagep"></p>

                </div>

                </div>
                <div class="col-md-6" id="element_overlap1">

                   <div class="form-group">

                   <label id="productsFP_label" style="display: none;">Product Name<i class="fa fa-asterisk" id="productsFP_imp" style="font-size:7px;color:red; display: none;"></i></label>

                   <select class="form-control" id="productsFP" name="products" onChange="selectProductFP(this);" style="display: none;" required>

                     <option value="">Select</option>

                     <?php

                       foreach($data['productsTT'] as $p){
                      //$price=$p['price'];

               ?>

                              <option value="<?=$p['products_id']?>"><?=$p['products_name']?></option>



              <?php }
             ?>
                   </select>

                   <p class="help-block" id="ErrorMessagep"></p>

                 </div>

                 </div>
                <div class="col-md-6" id="element_overlap1">

                   <div class="form-group">

                   <label id="product_categoryCar_label" style="display: none;">Product Category Name<i class="fa fa-asterisk" id="product_categoryCar_imp" style="font-size:7px;color:red; display: none;"></i></label>

                   <select class="form-control" id="product_categoryCar" name="product_catgory" onChange="selectProductCategory(this);"  style="display: none;" required>

                     <option value="">Select</option>

                     <?php

                       foreach($data['product_categoryCar'] as $p){
                      //$price=$p['price'];

               ?>

                              <option value="<?=$p['category_id']?>"><?=$p['category_name']?></option>



              <?php }
             ?>
                   </select>

                   <p class="help-block" id="ErrorMessagep"></p>

                 </div>

                 </div>
                 <div class="col-md-6" id="element_overlap1">

                    <div class="form-group">

                    <label id="product_categoryBike_label" style="display: none;">Product Category Name<i class="fa fa-asterisk" id="product_categoryBike_imp" style="font-size:7px;color:red; display: none;"></i></label>

                    <select class="form-control" id="product_categoryBike" name="product_catgory" onChange="selectProductCategory(this);" style="display: none;" required>

                      <option value="">Select</option>

                      <?php

                        foreach($data['product_categoryBike'] as $p){
                       //$price=$p['price'];

                ?>

                               <option value="<?=$p['category_id']?>"><?=$p['category_name']?></option>



               <?php }
              ?>
                    </select>

                    <p class="help-block" id="ErrorMessagep"></p>

                  </div>

                  </div>
                  <div class="col-md-6" id="element_overlap1">

                     <div class="form-group">

                     <label id="product_categoryTT_label" style="display: none;">Product Category Name<i class="fa fa-asterisk" id="product_categoryTT_imp" style="font-size:7px;color:red; display: none;"></i></label>

                     <select class="form-control" id="product_categoryTT" name="product_catgory" onChange="selectProductCategory(this);" style="display: none;" required>

                       <option value="">Select</option>

                       <?php

                         foreach($data['product_categoryTT'] as $p){
                        //$price=$p['price'];

                 ?>

                                <option value="<?=$p['category_id']?>"><?=$p['category_name']?></option>



                <?php }
               ?>
                     </select>

                     <p class="help-block" id="ErrorMessagep"></p>

                   </div>

                   </div>

                <div class="col-md-6" >

                 <div class="form-group">

                  <label id="productcost_label" style="display: none;">Product Cost<i class="fa fa-asterisk" id="productcost_imp" style="font-size:7px;color:red; display:none; "></i></label>

                  <input type="number" class="form-control numcls"  id="product_cost" name="product_cost" placeholder="Product Cost" style="display: none;" onchange="Pcost(this);" required>

                  <p class="help-block"></p>

                </div>
              </div>
                <div class="col-md-6" id="element_overlap1">

                   <div class="form-group">

                   <label id="emi_label" style="display: none;">EMI<i class="fa fa-asterisk" id="emi_imp" style="font-size:7px;color:red; display: none;"></i></label>

                   <select class="form-control" id="emi" name="emi"  style="display: none;" onchange="selectEmi(this);" required>

                     <option value="">Select</option>
                              <option value="36">EMI*36</option>
                              <option value="60">EMI*60</option>

                   </select>

                   <p class="help-block" id="ErrorMessagep"></p>

                 </div>

                 </div>

                 <div class="col-md-6">

                   <div class="form-group">

                     <label id="emiamount_label" style="display: none;">Emi Amount<i class="fa fa-asterisk" id="emiamount_imp" style="font-size:7px;color:red; display:none;"></i></label>

                     <input type="number" class="form-control numcls"  id="emi_amount" name="emi_amount" placeholder="Emi Amount" style="display: none;"required>

                     <p class="help-block"></p>

                   </div>
               </div>

               <div class="col-md-6">

                <div class="form-group">

                 <label id="downpayment_label" style="display: none;">Down Payment<i class="fa fa-asterisk" id="downpayment_imp" style="font-size:7px;color:red; display:none;"></i></label>

                 <input type="number" class="form-control numcls"  id="downpayment" name="downpayment" placeholder="Down Payment" style="display: none;" required>

                 <p class="help-block"></p>

               </div>
             </div>

             <div class="col-md-6">

              <div class="form-group">

               <label id="inverstment_label" style="display: none;">Inverstment<i class="fa fa-asterisk" id="inverstment_imp" style="font-size:7px;color:red;display:none;"></i></label>

               <input type="number" class="form-control numcls"  id="inverstment" name="inverstment" placeholder="Inverstments" style="display: none;" required>

               <p class="help-block"></p>

             </div>
           </div>




             </div>


            </div>

             <!-- /.box-body -->



                 <div class="box box-primary">

               <div class="box-header with-border">

                 <h3 class="box-title">Enter Customer Details</h3>

               </div>

               <div class="box-body" id="element_overlap2">

                 <div class="col-md-12">

                       Already member ?  &nbsp;&nbsp; <input type="radio" name="YN" onClick="AlreadyM('Yes');"> Yes  &nbsp;&nbsp;

                       <input name="YN" type="radio" checked onClick="AlreadyM('No');"> No

                   </div>

                   <div class="member" style="display:none;">

                   <div class="col-md-6">

                    <div class="form-group">

                     <label>Registerd Member ID</label>

                     <input type="text" class="form-control" id="MembershipID" name="MembershipID" placeholder="Enter Membership ID">



                   </div>

                  </div>



                   <div class="col-md-6">

                    <div class="form-group">

                     <label>&nbsp; </label>

                       <button style="margin-top: 25px;" type="button" class="btn btn-primary CheckMember">Check Member Details</button>

                     <p class="help-block" id="membererror" style="color:red;"></p>

                   </div>



                 </div>

                   </div>


                   <div class="col-md-6">

                    <div class="form-group">

                     <label>Customer Name<i class="fa fa-asterisk" style="font-size:7px;color:red"></i></label>

                     <input type="text" class="form-control" required id="CustomerName"  name="cname" placeholder="Enter Customer Name" onchange="cusname(this);">

                     <input type="hidden" name="member_ID" id="member_ID" style="display:none;">
                     <input type="hidden" name="Cus_Name" id="Cus_Name" style="display:none;">

                     <p class="help-block"></p>

                   </div>

                  </div>



                  <div class="col-md-6" id="ReferenceMemberIdDiv">









                    <div class="form-group">

                     <label for="inputSuccess">Reference Member Id</label>



                      <div class="mId1">

                       <span class="input-group-addon mId2" style="display:none;">



                       </span>



                        <input type="number" class="form-control numcls" id="ReferenceMemberId" name="reference_member_id" placeholder="Enter Reference Member Id" onchange="referenceMid(this);">

                     </div>

                        <p class="help-block mName" id="mName">



                      </p>

                   </div>

                  </div>



                  <div class="col-md-6">

                    <div class="form-group">

                     <label>Mobile Number<i class="fa fa-asterisk" style="font-size:7px;color:red"></i></label>

                     <input type="tel" class="form-control numcls" minlength="10" maxlength="10"  id="Mobile"  name="mobile" placeholder="Enter Mobile No." pattern="[789][0-9]{9}" required>

                     <p class="help-block"></p>

                   </div>

                  </div>



                 <div class="col-md-6">

                    <div class="form-group">

                     <label for="exampleInputPassword1">Email Address<i class="fa fa-asterisk" style="font-size:7px;color:red"></i></label>

                     <input type="email" class="form-control"  id="Email"  name="email" placeholder="Enter Email ID" pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" required>

                     <p class="help-block"></p>

                   </div>

                 </div>

                 <div class="col-md-12">

                   <div class="form-group">

                    <label >Address<i class="fa fa-asterisk" style="font-size:7px;color:red"></i></label>

                    <textarea class="form-control" required id="Address" name="address"></textarea>

                    <p class="help-block"></p>

                  </div>

                 </div>

                 <div class="col-md-6">

                  <div class="form-group">

                   <label>City<i class="fa fa-asterisk" style="font-size:7px;color:red"></i></label>

                   <input type="text" class="form-control" required id="city"  name="city" placeholder="Enter City">

                   <p class="help-block"></p>

                 </div>

                </div>

                <div class="col-md-6">

                 <div class="form-group">

                  <label>State<i class="fa fa-asterisk" style="font-size:7px;color:red"></i></label>

                  <!--<input type="text" class="form-control" required id="state"  name="state" placeholder="Enter State">-->
                  <select name="state" id="state" class="form-control col-sm-8" required>
    <option value="">--Select State--</option>
    <option value="ANDAMAN &amp; NICOBAR ISLANDS">ANDAMAN &amp; NICOBAR ISLANDS</option>
    <option value="ANDHRA PRADESH">ANDHRA PRADESH</option>
    <option value="TELANGANA">TELANGANA</option>
    <option value="ARUNACHAL PRADESH">ARUNACHAL PRADESH</option>
    <option value="ASSAM">ASSAM</option>
    <option value="BIHAR">BIHAR</option>
    <option value="CHATTISGARH">CHATTISGARH</option>
    <option value="CHANDIGARH">CHANDIGARH</option>
    <option value="CHHATTISGARH">CHHATTISGARH</option>
    <option value="DAMAN &amp; DIU">DAMAN &amp; DIU</option>
    <option value="DELHI">DELHI</option>
    <option value="GOA">GOA</option>
    <option value="GUJARAT">GUJARAT</option>
    <option value="HARYANA">HARYANA</option>
    <option value="HIMACHAL PRADESH">HIMACHAL PRADESH</option>
    <option value="JAMMU &amp; KASHMIR">JAMMU &amp; KASHMIR</option>
    <option value="JHARKHAND">JHARKHAND</option>
    <option value="KARNATAKA">KARNATAKA</option>
    <option value="KERALA">KERALA</option>
    <option value="LAKHSWADEEP">LAKHSWADEEP</option>
    <option value="LAKSHADWEEP">LAKSHADWEEP</option>
    <option value="MADHYA PRADESH">MADHYA PRADESH</option>
    <option value="MAHARASHTRA">MAHARASHTRA</option>
    <option value="MANIPUR">MANIPUR</option>
    <option value="MEGHALAYA">MEGHALAYA</option>
    <option value="MIZORAM">MIZORAM</option>
    <option value="NAGALAND">NAGALAND</option>
    <option value="ODISHA">ODISHA</option>
    <option value="ORISSA">ORISSA</option>
    <option value="PONDICHERRY">PONDICHERRY</option>
    <option value="PUNJAB">PUNJAB</option>
    <option value="RAJASTHAN">RAJASTHAN</option>
    <option value="SIKKIM">SIKKIM</option>
    <option value="TAMIL NADU">TAMIL NADU</option>
    <option value="TRIPURA">TRIPURA</option>
    <option value="UTTAR PRADESH">UTTAR PRADESH</option>
    <option value="UTTARANCHAL">UTTARANCHAL</option>
    <option value="WEST BENGAL">WEST BENGAL</option>
    <option value="UTTARAKHAND">UTTARAKHAND</option>

</select>

                  <p class="help-block"></p>

                </div>

               </div>
                  <div class="col-md-6">

                    <div class="form-group">

                     <label>PinCode<i class="fa fa-asterisk" style="font-size:7px;color:red"></i></label>

                     <input type="zip" class="form-control numcls"  id="Pincode" name="pincode" placeholder="Enter PinCode." pattern="[0-9]{6}" maxlength="6"required>

                     <p class="help-block"></p>

                   </div>

                  </div>

                   <div class="col-md-6 bankDiv">

                    <div class="form-group">

                     <label>Photo</label>

                     <input type="file" name="profile_img" class="form-control"  id="profile_img">

                     <p class="help-block"></p>

                   </div>

                  </div>






               </div>





               <!-- /.box-body -->

             </div>





            <div class="box box-primary">

           <div class="box-header with-border bankDiv">

             <h3 class="box-title">Enter Customer Bank Details</h3>

           </div>

           <div class="box-body">



                <div class="col-md-6 bankDiv">

                <div class="form-group">

                 <label>Account Number<i class="fa fa-asterisk" style="font-size:7px;color:red"></i></label>

                 <input type="text" class="form-control" id="AccountNumber"  name="accno" placeholder="Enter Account Number" required>



                 <p class="help-block"></p>

               </div>

              </div>

              <div class="col-md-6 bankDiv">

              <div class="form-group">

               <label>Confirm Account Number<i class="fa fa-asterisk" style="font-size:7px;color:red"></i></label>

               <input type="text" class="form-control" id="Confirm_AccountNumber" name="confirm_accno" placeholder="Enter Account Number" onchange="confirmAccno(this);">



               <p class="help-block"></p>

             </div>

            </div>



              <div class="col-md-6 bankDiv">



                <div class="form-group">

                 <label>IFSC Code<i class="fa fa-asterisk" style="font-size:7px;color:red"></i></label>

                      <input type="text" class="form-control" id="IFSCCode" name="ifsc_code" placeholder="Enter IFSC Code" required>

                     <p class="help-block"> </p>

               </div>

              </div>
              <div class="col-md-6 bankDiv">



                <div class="form-group">

                 <label>Bank Name<i class="fa fa-asterisk" style="font-size:7px;color:red"></i></label>

                      <input type="text" class="form-control" id="bank_name" name="bank_name" placeholder="Enter Bank Name" required>

                     <p class="help-block"> </p>

               </div>

              </div>
              <div class="col-md-6 bankDiv">



                <div class="form-group">

                 <label>Bank Branch<i class="fa fa-asterisk" style="font-size:7px;color:red"></i></label>

                      <input type="text" class="form-control" id="bank_branch" name="bank_branch" placeholder="Enter Bank Branch" required>

                     <p class="help-block"> </p>

               </div>

              </div>
              <div class="col-md-6" id="element_overlap1">

                 <div class="form-group">

                 <label>Payment Method<i class="fa fa-asterisk" style="font-size:7px;color:red;"></i></label>

                 <select class="form-control" id="payment_method" name="payment_method"  required>

                   <option value="">Select</option>
                            <option value="Cash">Cash</option>
                            <option value="Cheque">Cheque</option>
                            <option value="BHIM / UPI">BHIM / UPI</option>
                            <!--<option value="Others">Others</option>-->

                 </select>

                 <p class="help-block" id="ErrorMessagep"></p>

               </div>

               </div>
              <div class="col-md-6 bankDiv">



                <div class="form-group">

                 <label>PanCard Number<i class="fa fa-asterisk" style="font-size:7px;color:red"></i></label>

                      <input type="text" class="form-control" id="pan_number" name="pan_number" placeholder="Enter PanCard Number" required>

                     <p class="help-block"> </p>

               </div>

              </div>

                <div class="col-md-6">

               <button type="submit" class="btn btn-primary" id="submit">Register</button>

             </div>



           </div>





           <!-- /.box-body -->

         </div>



           </form>

         </div>

         <!-- /.box -->

        </div>







       </div>



   </section>

   <!-- /.content -->









 <div class="modal fade" id="myModal2" role="dialog">

   <div class="modal-dialog modal-sm">



     <!-- Modal content-->

     <div class="modal-content">

       <div class="modal-header">

         <button type="button" class="close" data-dismiss="modal">&times;</button>

         <h4 class="modal-title" id="document_name">Message</h4>

       </div>

       <div class="modal-body">

                <div id="ErrorMessage">



               </div>

        </div>

       <div class="modal-footer">

         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

       </div>

     </div>



   </div>

 </div>





 <!-- /.content-wrapper -->



@include('inc.footer')

<script src="{{ asset('loadingoverlap/loadingoverlay.min.js') }}"></script>

<script src="{{ asset('loadingoverlap/loadingoverlay_progress.min.js') }}"></script>
<script>

$("#ReferenceMemberId").keyup('on',function(){

 var plan_id=document.getElementById("plan").value;


 var ReferenceMemberId = $("#ReferenceMemberId").val();

 if(ReferenceMemberId != ''){

   $('.mId1').addClass('input-group');

   $('.mId2').show();

   $('.mId2').html('<img style="height: 20px;" src="{{asset('storage/images/ajax-loader.gif')}}">');



   $.ajax({

          // headers: {  'Authkey': '<?//=$this->security->get_csrf_hash();?>'},

           url: 'get_member_details',
           method:"GET",
           //dataType : "json",
           data:{mid:ReferenceMemberId,pid:plan_id},
           success:function(data)

             {
               if(data!=0){
                 //alert(data);
                 $('.mName').html('<span style="color:green;">Member Id verified : '+data+'</span>');

                 $('.mId2').html('<img style="height: 20px;" src="{{asset('storage/images/green_checkmark.jpg')}}">');
               }else{
                 //alert('Invalid Reference Member ID!')
                 $('.mName').html('<span style="color:red;">Unknown Member Id</span>');

                 $('.mId2').html('<img style="height: 20px;" src="{{asset('storage/images/cross_mark.jpg')}}">');
               }

          },

           error: function (jqXHR, status, err) {

            // alert("Local error callback.");

           }



         });



 }else{

   $('.mId1').removeClass('input-group');

   $('.mId2').hide();

   $('.mName').html('');

 }









   console.log(ReferenceMemberId);



});



function selectPlan(plan) {
  if(plan.value=='888001'){
    //document.getElementById("totalprice").value='10000';
    //document.getElementById("totalprice").disabled = true;
    document.getElementById("productcost_label").style.display = "block";
    document.getElementById("productcost_imp").style.display = "block";
    document.getElementById("product_cost").style.display = "block";
    //document.getElementById("plan_id").value = plan.value;
    document.getElementById("productsAP_label").style.display = "block";
    document.getElementById("productsAP_imp").style.display = "block";
    document.getElementById("productsAP").style.display = "block";
    document.getElementById("productsAP").value = "";
    document.getElementById("productsFP_label").style.display = "none";
    document.getElementById("productsFP_imp").style.display = "none";
    document.getElementById("productsFP").style.display = "none";
    document.getElementById("productsFP").value = "";
    document.getElementById("product_categoryTT_label").style.display = "block";
    document.getElementById("product_categoryTT_imp").style.display = "block";
    document.getElementById("product_categoryTT").style.display = "block";
    document.getElementById("product_categoryTT").value = "";
    //document.getElementById("product_category_label").style.display = "none";
    //document.getElementById("product_category_imp").style.display = "none";
    //document.getElementById("product_category").style.display = "none";
    document.getElementById("emi_label").style.display = "none";
    document.getElementById("emi_imp").style.display = "none";
    document.getElementById("emi").style.display = "none";
    document.getElementById("emi_months").value =0;

    document.getElementById("emiamount_label").style.display = "none";
    document.getElementById("emiamount_imp").style.display = "none";
    document.getElementById("emi_amount").style.display = "none";
    document.getElementById("emi_amount").value =0;
    document.getElementById("downpayment_label").style.display = "none";
    document.getElementById("downpayment_imp").style.display = "none";
    document.getElementById("downpayment").style.display = "none";
    document.getElementById("downpayment").value =0;
    document.getElementById("inverstment_label").style.display = "none";
    document.getElementById("inverstment_imp").style.display = "none";
    document.getElementById("inverstment").style.display = "none";
    document.getElementById("inverstment").value =0;
    document.getElementById("product_categoryBike_label").style.display = "none";
    document.getElementById("product_categoryBike_imp").style.display = "none";
    document.getElementById("product_categoryBike").style.display = "none";
    document.getElementById("product_categoryCar_label").style.display = "none";
    document.getElementById("product_categoryCar_imp").style.display = "none";
    document.getElementById("product_categoryCar").style.display = "none";
    document.getElementById("product_categoryTT").value = "";
    document.getElementById("product_categoryBike").value = "";
    document.getElementById("product_categoryCar").value = "";
    document.getElementById("productsFP").required = false;
    document.getElementById("emi_amount").required = false;
    document.getElementById("downpayment").required = false;
    document.getElementById("product_categoryBike").required = false;
    document.getElementById("product_categoryCar").required = false;
    document.getElementById("product_categoryTT").required = false;
    document.getElementById("emi").required = false;


  }else if(plan.value=='888002'){
    document.getElementById("emi").value ='';
    document.getElementById("emi_amount").value ='';
    document.getElementById("downpayment").value ='';
    document.getElementById("inverstment").value ='';
    document.getElementById("productsAP").required = false;
    document.getElementById("product_categoryTT").required = false;
    //document.getElementById("totalprice").disabled = false;
    //document.getElementById("totalprice").value = '';
    document.getElementById("productcost_label").style.display = "block";
    document.getElementById("productcost_imp").style.display = "block";
    document.getElementById("product_cost").style.display = "block";
    //document.getElementById("plan_id").value = plan.value;
    document.getElementById("productsAP_label").style.display = "none";
    document.getElementById("productsAP_imp").style.display = "none";
    document.getElementById("productsAP").style.display = "none";
    document.getElementById("productsFP_label").style.display = "block";
    document.getElementById("productsFP_imp").style.display = "block";
    document.getElementById("productsFP").style.display = "block";
    document.getElementById("product_categoryTT_label").style.display = "none";
    document.getElementById("product_categoryTT_imp").style.display = "none";
    document.getElementById("product_categoryTT").style.display = "none";
    document.getElementById("productsAP").value = "";
    document.getElementById("product_categoryTT").value = "";
    //document.getElementById("product_category_label").style.display = "block";
    //document.getElementById("product_category_imp").style.display = "block";
    //document.getElementById("product_category").style.display = "block";
    document.getElementById("emi_label").style.display = "block";
    document.getElementById("emi_imp").style.display = "block";
    document.getElementById("emi").style.display = "block";
    document.getElementById("emiamount_label").style.display = "block";
    document.getElementById("emiamount_imp").style.display = "block";
    document.getElementById("emi_amount").style.display = "block  ";
    document.getElementById("downpayment_label").style.display = "block";
    document.getElementById("downpayment_imp").style.display = "block";
    document.getElementById("downpayment").style.display = "block";
    document.getElementById("inverstment_label").style.display = "block";
    document.getElementById("inverstment_imp").style.display = "block";
    document.getElementById("inverstment").style.display = "block";
    document.getElementById("product_cost").value="";
    document.getElementById("product_cost").disabled = false;


  }else if(plan.value==''){

    document.getElementById("productcost_label").style.display = "none";
    document.getElementById("productcost_imp").style.display = "none";
    document.getElementById("product_cost").style.display = "none";
    document.getElementById("products_label").style.display = "none";
    document.getElementById("products_imp").style.display = "none";
    document.getElementById("products").style.display = "none";
    document.getElementById("products").value = "";
    document.getElementById("emi_label").style.display = "none";
    document.getElementById("emi_imp").style.display = "none";
    document.getElementById("emi").style.display = "none";
    document.getElementById("emiamount_label").style.display = "none";
    document.getElementById("emiamount_imp").style.display = "none";
    document.getElementById("emi_amount").style.display = "none  ";
    document.getElementById("downpayment_label").style.display = "none";
    document.getElementById("downpayment_imp").style.display = "none";
    document.getElementById("downpayment").style.display = "none";
    document.getElementById("inverstment_label").style.display = "none";
    document.getElementById("inverstment_imp").style.display = "none";
    document.getElementById("inverstment").style.display = "none";
    document.getElementById("product_categoryBike_label").style.display = "none";
    document.getElementById("product_categoryBike_imp").style.display = "none";
    document.getElementById("product_categoryBike").style.display = "none";
    document.getElementById("product_categoryCar_label").style.display = "none";
    document.getElementById("product_categoryCar_imp").style.display = "none";
    document.getElementById("product_categoryCar").style.display = "none";

    document.getElementById("productsAP_label").style.display = "none";
    document.getElementById("productsAP_imp").style.display = "none";
    document.getElementById("productsAP").style.display = "none";
    document.getElementById("productsFP_label").style.display = "none";
    document.getElementById("productsFP_imp").style.display = "none";
    document.getElementById("productsFP").style.display = "none";
    document.getElementById("product_categoryTT_label").style.display = "none";
    document.getElementById("product_categoryTT_imp").style.display = "none";
    document.getElementById("product_categoryTT").style.display = "none";
  }
  //
  //document.getElementById("plan_name").value = 'Auto Pool';

        //var planprice="<?php //echo $price;?>";
        //document.getElementById("totalprice").value=planprice;
        //document.getElementById("totalprice").disabled = true;
    }

  function selectProductFP(product){
    if(product.value=='1'){
      document.getElementById("products_id").value = product.value;
      document.getElementById("product_categoryBike_label").style.display = "block";
      document.getElementById("product_categoryBike_imp").style.display = "block";
      document.getElementById("product_categoryBike").style.display = "block";
      document.getElementById("product_categoryCar_label").style.display = "none";
      document.getElementById("product_categoryCar_imp").style.display = "none";
      document.getElementById("product_categoryCar").style.display = "none";
      document.getElementById("product_categoryCar").required = false;

    }else if(product.value=='2'){
      document.getElementById("products_id").value = product.value;
      document.getElementById("product_categoryBike_label").style.display = "none";
      document.getElementById("product_categoryBike_imp").style.display = "none";
      document.getElementById("product_categoryBike").style.display = "none";
      document.getElementById("product_categoryCar_label").style.display = "block";
      document.getElementById("product_categoryCar_imp").style.display = "block";
      document.getElementById("product_categoryCar").style.display = "block";
      document.getElementById("product_categoryBike").required = false;
      document.getElementById("product_categoryCar").required = true;

    }else{
      document.getElementById("product_categoryBike_label").style.display = "none";
      document.getElementById("product_categoryBike_imp").style.display = "none";
      document.getElementById("product_categoryBike").style.display = "none";
      document.getElementById("product_categoryCar_label").style.display = "none";
      document.getElementById("product_categoryCar_imp").style.display = "none";
      document.getElementById("product_categoryCar").style.display = "none";
    }
  }

  function selectProductCategory(productCategory){
    document.getElementById("category_id").value = productCategory.value;
    //alert(productCategory.value);
  }
  function selectProductAP(autopoolProduct){
    var planprice="<?php echo $priceAP;?>";
    document.getElementById("product_cost").value=planprice;
    document.getElementById("product_costVal").value=planprice;
    document.getElementById("product_cost").disabled = true;
    document.getElementById("products_id").value = autopoolProduct.value;
  }
//  function selectProductFP(fifyPerProduct){
    //alert(fifyPerProduct.value);

  //}
  function selectEmi(emi){
    document.getElementById("emi_months").value=emi.value;

  }
  function Pcost(Product_Cost_Data){
    //alert(Product_Cost_Data.value);
    document.getElementById("product_costVal").value=Product_Cost_Data.value;
  }
  function referenceMid(ref){
  var t=document.getElementById("mName").textContent;
  if(t=="Unknown Member Id"){
    document.getElementById("submit").disabled = true;
  }else{
    document.getElementById("submit").disabled = false;
  }
  }

  function AlreadyM(type){

	if(type=='Yes'){$('.member').show(); $('#ReferenceMemberIdDiv').hide();

		$('.mId1').removeClass('input-group');

		$('.mId2').hide();

		$('.mName').html('');

		$('.bankDiv').hide();
    $('#AccountNumber').val('NULL');
    $('#IFSCCode').val('NULL');
    $('#bank_name').val('NULL');
    $('#bank_branch').val('NULL');
    $('#pan_number').val('NULL');
    document.getgetElementById("ReferenceMemberId").value="NULL";


	}

	if(type=='No'){$('.member').hide();

		$('#ReferenceMemberIdDiv').show();



		$("#MembershipID").val('');

		$("#CustomerName").val('');

		$("#Mobile").val('');

		$("#Email").val('');

		$("#Pincode").val('');

		$("#Address").val('');

    $("#city").val('');

    $("#state").val('');

    $("#payment_method").val('');


		$('.bankDiv').show();
    document.getElementById("MembershipID").disabled=false;
    document.getElementById("CustomerName").disabled=false;
    document.getElementById("Mobile").disabled=false;
    document.getElementById("Email").disabled=false;
    $('#AccountNumber').val('');
    $('#IFSCCode').val('');
    $('#bank_name').val('');
    $('#bank_branch').val('');
    $('#pan_number').val('');

	}

}

$(".CheckMember").click('on',function(e){
  var plan_id=document.getElementById("plan").value;
  if(plan_id==888001){
    plan_id=888002;
  }else if(plan_id=888002){
    plan_id=888001;
  }else{
    plan_id=plan_id;
  }

  var MemberId = $("#MembershipID").val();

 	if(MemberId != ''){

			$('#membererror').html('');

 		 	$("#element_overlap2").LoadingOverlay("show");

 			$.ajax({


            url: 'get_member_data',
            method:"GET",
            //dataType : "json",
            data:{mid:MemberId,pid:plan_id},

					  success:function(data)

							{

								$("#element_overlap2").LoadingOverlay("hide", true);



  								if(data.length == 0)

								{

								  $('#membererror').html("Unable get member details !<br> Please check your plan or member id !");
                  document.getElementById("submit").disabled=true;
								}

 								if(data.length == 1)

								{



									   $("#member_ID").val(data[0].id);

									  $("#CustomerName").val(data[0].name);

									  $("#Mobile").val(data[0].mobile);
                    document.getElementById('Cus_Name').value=data[0].name;
									  $("#Email").val(data[0].email);

									  $("#Pincode").val(data[0].pincode);

									  $("#Address").val(data[0].address);
                    $("#city").val(data[0].city);
                    $("#state").val(data[0].state);
                    $("#payment_method").val(data[0].payment_method);
                    document.getElementById("MembershipID").disabled=true;
                    document.getElementById("CustomerName").disabled=true;
                    document.getElementById("Mobile").disabled=true;
                    document.getElementById("Email").disabled=true;
                    document.getElementById("submit").disabled=false;
  								}

 					  },

					  error: function (jqXHR, status, err) {

						  $("#element_overlap2").LoadingOverlay("hide", true);

						  $('#membererror').html("Local error callback.");

 					  }



					});

	}else{

		$('#membererror').html('Please enter membership Id !');

	}

});
function cusname(cname){
  document.getElementById('Cus_Name').value=cname.value;
}

function confirmAccno(accno){

  var AccountNumber=document.getElementById("AccountNumber").value;
  var ConfirmAccountNo=document.getElementById("Confirm_AccountNumber").value;
  if(AccountNumber!=ConfirmAccountNo){
    document.cusreg.accno.focus();
    //document.cusreg.confirm_accno.focus();
    //document.getElementById("Confirm_AccountNumber").focus();
    alert('Account Number do not match! \n Please verify your account number')
  }

}
</script>
