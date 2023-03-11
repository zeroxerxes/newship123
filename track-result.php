<?php

require_once('database.php');
require_once('library.php');

$cons= $_POST['Consignment'];

$sql = "SELECT *
		FROM tbl_courier
		WHERE cons_no = '$cons'";
$result = dbQuery($sql);
$no = dbNumRows($result);
if($no == 1){
while($data = dbFetchAssoc($result)) {
extract($data);
?>
    <?php include("header2.php"); ?>
    <?php include("gug.php"); ?>
<style>
    html{
        font-size: 14px;
    }
    .tracking-detail {
        padding:3rem 0
    }
    #tracking {
        margin-bottom:1rem
    }
    [class*=tracking-status-] p {
        margin:0;
        color:#fff;
        text-transform:uppercase;
        text-align:center
    }
    [class*=tracking-status-] {
        padding:1.6rem 0
    }
    .tracking-status-intransit {
        background-color:#65aee0
    }
    .tracking-status-outfordelivery {
        background-color:#f5a551
    }
    .tracking-status-deliveryoffice {
        background-color:#f7dc6f
    }
    .tracking-status-delivered {
        background-color:#4cbb87
    }
    .tracking-status-attemptfail {
        background-color:#b789c7
    }
    .tracking-status-error,.tracking-status-exception {
        background-color:#d26759
    }
    .tracking-status-expired {
        background-color:#616e7d
    }
    .tracking-status-pending {
        background-color:#ccc
    }
    .tracking-status-inforeceived {
        background-color:#214977
    }
    .tracking-list {
        border:1px solid #e5e5e5
    }
    .tracking-item {
        border-left:1px solid #e5e5e5;
        position:relative;
        padding:2rem 1.5rem .5rem 2.5rem;

        margin-left:3rem;
        min-height:5rem;

        color: black;

    }
    .tracking-item:last-child {
        padding-bottom:4rem
    }
    .tracking-item .tracking-date {
        margin-bottom:.5rem
    }
    .tracking-item .tracking-date span {
        color:#888;
        padding-left:.4rem
    }
    .tracking-item .tracking-content {
        padding:.5rem .8rem;
        background-color:#f4f4f4;
        border-radius:.5rem
    }
    .tracking-item .tracking-content span {
        display:block;
        color:#888;

    }
    .tracking-item .tracking-icon {
        line-height:2.6rem;
        position:absolute;
        left:-1.3rem;
        width:2.6rem;
        height:2.6rem;
        text-align:center;
        border-radius:50%;
        background-color:#fff;
        color:#fff
    }
    .tracking-item .tracking-icon.status-sponsored {
        background-color:#f68
    }
    .tracking-item .tracking-icon.status-delivered {
        background-color:#4cbb87
    }
    .tracking-item .tracking-icon.status-outfordelivery {
        background-color:#f5a551
    }
    .tracking-item .tracking-icon.status-deliveryoffice {
        background-color:#f7dc6f
    }
    .tracking-item .tracking-icon.status-attemptfail {
        background-color:#b789c7
    }
    .tracking-item .tracking-icon.status-exception {
        background-color:#d26759
    }
    .tracking-item .tracking-icon.status-inforeceived {
        background-color:#214977
    }
    .tracking-item .tracking-icon.status-intransit {
        color:#e5e5e5;
        border:1px solid #e5e5e5;
        font-size:.6rem
    }
    @media(min-width:992px) {
        .tracking-item {
            margin-left:10rem
        }
        .tracking-item .tracking-date {
            position:absolute;
            left:-10rem;
            width:7.5rem;
            text-align:right
        }
        .tracking-item .tracking-date span {
            display:block
        }
        .tracking-item .tracking-content {
            padding:0;
            background-color:transparent
        }
    }

</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>



    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button " style="font-size: 14px"type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    TRACK INFO
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="container">
                        <h2>TRACK INFO</h2>
                        <div class="row">

                            <div class="col-md-12 col-lg-12">
                                <div id="tracking-pre"></div>
                                <div id="tracking">
                                    <div class="text-center tracking-status-intransit">
                                        <p class="tracking-status text-tight"><?php echo $status; ?></p>
                                    </div>
                                    <div class="tracking-list">
                                        <div class="tracking-item">
                                            <div class="tracking-icon status-intransit">
                                                <svg class="svg-inline--fa fa-shipping-fast fa-w-20" aria-hidden="true" data-prefix="fas" data-icon="shipping-fast" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M624 352h-16V243.9c0-12.7-5.1-24.9-14.1-33.9L494 110.1c-9-9-21.2-14.1-33.9-14.1H416V48c0-26.5-21.5-48-48-48H112C85.5 0 64 21.5 64 48v48H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h272c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H40c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H64v128c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zM160 464c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm320 0c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-208H416V144h44.1l99.9 99.9V256z"></path>
                                                </svg>
                                                <!-- <i class="fas fa-circle"></i> -->
                                            </div>
                                            <div class="tracking-date"><span><?php echo $Regisstration_D_T; ?> </span></div>
                                            <div class="tracking-content" >SHIPPER REGISTRATION AT <span><?php echo $Registration_Time; ?></span></div>
                                        </div>
                                        <div class="tracking-item">
                                            <div class="tracking-icon status-intransit">
                                                <svg class="svg-inline--fa fa-shipping-fast fa-w-20" aria-hidden="true" data-prefix="fas" data-icon="shipping-fast" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M624 352h-16V243.9c0-12.7-5.1-24.9-14.1-33.9L494 110.1c-9-9-21.2-14.1-33.9-14.1H416V48c0-26.5-21.5-48-48-48H112C85.5 0 64 21.5 64 48v48H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h272c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H40c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H64v128c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zM160 464c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm320 0c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-208H416V144h44.1l99.9 99.9V256z"></path>
                                                </svg>
                                                <!-- <i class="fas fa-circle"></i> -->
                                            </div>
                                            <div class="tracking-date"><span><?php echo $Regisstration_D_T; ?></span></div>
                                            <div class="tracking-content">SHIPMENT BEING PROCESSED AT <span><?php echo $Registration_Time; ?></span></div>
                                        </div>
                                        <div class="tracking-item">
                                            <div class="tracking-icon status-intransit">
                                                <svg class="svg-inline--fa fa-shipping-fast fa-w-20" aria-hidden="true" data-prefix="fas" data-icon="shipping-fast" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M624 352h-16V243.9c0-12.7-5.1-24.9-14.1-33.9L494 110.1c-9-9-21.2-14.1-33.9-14.1H416V48c0-26.5-21.5-48-48-48H112C85.5 0 64 21.5 64 48v48H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h272c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H40c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H64v128c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zM160 464c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm320 0c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-208H416V144h44.1l99.9 99.9V256z"></path>
                                                </svg>
                                                <!-- <i class="fas fa-circle"></i> -->
                                            </div>
                                            <div class="tracking-date"><span><?php echo $Regisstration_D_T; ?></span></div>
                                            <div class="tracking-content">DELIVERY ADVICE Request Instruction from ORIGIN<span><?php echo $Registration_Time; ?></span></div>
                                        </div>
                                        <div class="tracking-item">
                                            <div class="tracking-icon status-intransit">
                                                <svg class="svg-inline--fa fa-shipping-fast fa-w-20" aria-hidden="true" data-prefix="fas" data-icon="shipping-fast" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M624 352h-16V243.9c0-12.7-5.1-24.9-14.1-33.9L494 110.1c-9-9-21.2-14.1-33.9-14.1H416V48c0-26.5-21.5-48-48-48H112C85.5 0 64 21.5 64 48v48H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h272c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H40c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H64v128c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zM160 464c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm320 0c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-208H416V144h44.1l99.9 99.9V256z"></path>
                                                </svg>
                                                <!-- <i class="fas fa-circle"></i> -->
                                            </div>
                                            <div class="tracking-date">____-____<span>____-____</span></div>
                                            <div class="tracking-content">DELIVERY INFOCLOSED-OFFICE/HOUSE CLOSED<span>INFO BEING PROCESSED </span></div>
                                        </div>
                                        <div class="tracking-item">
                                            <div class="tracking-icon status-outfordelivery">
                                                <svg class="svg-inline--fa fa-shipping-fast fa-w-20" aria-hidden="true" data-prefix="fas" data-icon="shipping-fast" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M624 352h-16V243.9c0-12.7-5.1-24.9-14.1-33.9L494 110.1c-9-9-21.2-14.1-33.9-14.1H416V48c0-26.5-21.5-48-48-48H112C85.5 0 64 21.5 64 48v48H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h272c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H40c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H64v128c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zM160 464c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm320 0c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-208H416V144h44.1l99.9 99.9V256z"></path>
                                                </svg>
                                                <!-- <i class="fas fa-shipping-fast"></i> -->
                                            </div>
                                            <div class="tracking-date"><span><?php echo $Regisstration_D_T; ?></span></div>
                                            <div class="tracking-content">SHIPMENT IS OUT FOR DESPATCH <?php echo $cons_no; ?>.<span>AIDEN VAL  (SHIPPING  EXPRESS ),TO <?php echo $Receiver_address; ?></span></div>
                                        </div>
                                        <div class="tracking-item">
                                            <div class="tracking-icon status-outfordelivery">
                                                <svg class="svg-inline--fa fa-shipping-fast fa-w-20" aria-hidden="true" data-prefix="fas" data-icon="shipping-fast" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M624 352h-16V243.9c0-12.7-5.1-24.9-14.1-33.9L494 110.1c-9-9-21.2-14.1-33.9-14.1H416V48c0-26.5-21.5-48-48-48H112C85.5 0 64 21.5 64 48v48H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h272c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H40c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H64v128c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zM160 464c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm320 0c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-208H416V144h44.1l99.9 99.9V256z"></path>
                                                </svg>
                                                <!-- <i class="fas fa-circle"></i> -->
                                            </div>

                                            <div class="tracking-content">COMMENT:<span>  <?php echo $comments; ?></span></div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" style="font-size: 14px" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    INFO
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">

                    <div class="container">
                        <div class="row">
                            <div class="card border-danger golge">
                                <div class="card-header">
                                        <h5 class="text-center m-2" style="font-weight: bold">INFO</h5>
                                    </div>
                                <div class="card-body">
                                    <div class=" vert slide" >
                                        <div class="inner">
                                            <div class="item active">
                                                <ul class="timeline">
                                                    <li>
                                                        <!--"_blank" tıklanan linkin yeni sekmede açılmasını sağlar.-->
                                                        <a target="_blank"style="color: #0c83e7">Reciever Info</a>
                                                        <a href="#" class="float-right"><?php echo $Regisstration_D_T; ?></a>
                                                        <p class="article">><?php echo $Receiver_Name; ?>
                                                            <br>><?php echo $Receiver_address; ?>
                                                            <br>><?php echo $Receiver_Shippers_Contact; ?>

                                                        </p>
                                                    </li>
                                                    <hr>
                                                    <li>
                                                        <a style="color: #0c83e7; ">Sender info</a>
                                                        <a  class="float-right"><?php echo $Regisstration_D_T; ?></a>
                                                        <p class="article">><?php echo $Shipper_Name; ?>
                                                            <br>><?php echo $Shipper_addresss; ?>
                                                            <br>><?php echo $Shippers_Contact; ?>

                                                        </p>
                                                    </li>

                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                     </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed"style="font-size: 14px" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    PACKAGE INFO
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">

                    <div class="container">
                        <div class="row">
                            <div class="card border-danger golge">
                                <div class="card-header">
                                        <h5 class="text-center m-2" style="font-weight: bold">PACKAGE INFO</h5>
                                   </div>
                                <div class="card-body">
                                    <div class=" vert slide" >
                                        <div class="inner">
                                            <div class="item active">
                                                <ul class="timeline">
                                                    <li>

                                                        <a href="#" class="float-right"><?php echo $Regisstration_D_T; ?></a>

                                                    </li>


                                                </ul>
                                                <table class="table">

                                                    <tbody>
                                                    <tr>
                                                        <td> Consignment Number</td>
                                                        <td><?php echo $cons_no; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td> Book Mode</td>
                                                        <td><?php echo $book_mode; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td> Registration Date & Time</td>
                                                        <td><?php echo $Regisstration_D_T; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Expected Arrrival Date & Time</td>
                                                        <td><?php echo $Arrival_Time; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pick-up Time </td>
                                                        <td><?php echo $Departure_Time; ?></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Shipment Type</td>
                                                        <td><?php echo $type; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Weight</td>
                                                        <td><?php echo $weight; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Shipment Mode</td>
                                                        <td><?php echo $mode; ?></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Origin</td>
                                                        <td><?php echo $Registration_Time; ?></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <p>COMMENT
                                                    <strong>
                                                        <?php echo $comments; ?>
                                                    </strong>
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


















    <?php include("footer.php"); ?>



<body style="background-color: rgba(255,255,255,0)">





































</body></html>
<?php }//while
}//if
else {
?>
<!DOCTYPE html >
<html><head>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/62538bad7b967b117989f02c/1g0b5j8g1';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/footer.css" rel="stylesheet" type="text/css">
<style type="text/css">
.style1 {color: #FF0000}
.style3 {font-family: verdana, tohama, arial}
</style>
</head>

<body>

<?php include 'header2.php'; ?>


<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
<td bgcolor="#FFFFFF">
<style type="text/css">
.ds_box {
	background-color: #FFF;
	border: 1px solid #000;
	position: absolute;
	z-index: 32767;
}
.ds_tbl {
	background-color: #FFF;
}
.ds_head {
	background-color: #333;

	color: #FFF;

	font-family: Arial, Helvetica, sans-serif;

	font-size: 13px;

	font-weight: bold;

	text-align: center;

	letter-spacing: 2px;

}
.ds_subhead {
	background-color: #CCC;
	color: #000;
	font-size: 12px;
	font-weight: bold;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	width: 32px;
}
.ds_cell {
	background-color: #EEE;
	color: #000;
	font-size: 13px;

	text-align: center;

	font-family: Arial, Helvetica, sans-serif;

	padding: 5px;

	cursor: pointer;

}
.ds_cell:hover {
	background-color: #F3F3F3;
} /* This hover code won't work for IE */
</style>
<style type="text/css">

<!--

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

-->

</style>





<table class="ds_box" id="ds_conclass" style="display: none;" cellpadding="0" cellspacing="0">

  <tbody><tr>

    <td id="ds_calclass"> </td>

  </tr>

</tbody></table>



  <br>




  <br>

  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%">



    <tbody><tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right"><div align="center">

  <span class="Partext1"><br>


   </span>

  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%">

     <tbody><tr>
<h3 style="font-family:Verdana; font-size:12px;">Consignment Number <font color="#FF0000"><?php echo $cons; ?></font> not found. Please verify the Number.<br/>
<a href="track-status.php">Go Back</a> to Search Again.</h3>
       </tr>

        </tbody></table>


</td>

  </tr>

  <tr>

  <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
  <tbody><tr>
    <td bgcolor="#2284d5" height="40" width="100%">&nbsp;</td>
    <td bgcolor="#2284d5" width="100%"><div align="right"></div></td>
  </tr>
</tbody></table>

  </tr>

</tbody></table>







<?php
}//else
?>
