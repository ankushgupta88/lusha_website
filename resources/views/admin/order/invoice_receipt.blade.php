@extends('admin.layouts.master')
 @section('content')

<!-- Main content -->
<section class="content p-2 p-md-4" style="background-color: cornsilk;margin: 88px;">
@foreach($receipt as $invoiceDetail)
<div class="container bootstrap snippets bootdey">
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="row">
        <div class="col-md-6 col-sm-6 text-left">
          <h4><strong>Client</strong> Details</h4>
          <ul class="list-unstyled">
            <li><strong>First Name:</strong> {{$invoiceDetail->order_user_list->name}}</li>
            <li><strong>Last Name:</strong> {{$invoiceDetail->order_user_list->last_name}}</li>
            <li><strong>Email:</strong> {{$invoiceDetail->billing_email}}</li>
            <li><strong>Country:</strong> {{$invoiceDetail->billing_country}}</li>
          </ul>
        </div>

        <div class="col-md-6 col-sm-6 text-right">
          <h4><strong>Payment</strong> Details</h4>
          <ul class="list-unstyled">
            <li><strong>Invoice ID:</strong> {{$invoiceDetail->transactionId}}</li>
            <li><strong>Status:</strong> PAID</li>
            <?php
              $updated_at = $invoiceDetail->updated_at;
              $date = date('F d,Y',strtotime($updated_at));
             ?>
            <li><strong>Date:</strong> {{$date}}</li>
          </ul>

        </div>

      </div>

      <div class="table-responsive">
        <table class="table table-condensed nomargin">
          <thead>
            <tr>
              <th>Plan Name</th>
              <th>Plan Type</th>
              <th>Amount</th>
              <th>Discount</th>
              <th>Total Price</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div><strong>{{$invoiceDetail->order_user_plan_list->plan_name}}</strong></div>
                <small>{{$invoiceDetail->order_user_plan_list->plan_type}}</small>
              </td>
              <td>{{$invoiceDetail->order_user_plan_list->credits}}</td>
              <td><strong>Annual Professional <br> plan:</strong> 
                 <?php echo '$'.$invoiceDetail->order_user_plan_list->actual_price.'/'.$invoiceDetail->order_user_plan_list->billing_style.'<br><strong>Annual Price: </strong>'.$invoiceDetail->order_user_plan_list->actual_price*12;
                 ?>
               </td>
              <td><?php 
                  $Annual_price = $invoiceDetail->order_user_plan_list->actual_price*12;
                  echo $invoiceDetail->order_user_plan_list->discount.'% Annual discount<br><strong>Discount Price</strong>: '.($Annual_price/100*$invoiceDetail->order_user_plan_list->discount);?>
                
              </td>
              <td>${{$invoiceDetail->amount}}</td>
            </tr>
          </tbody>
        </table>
      </div>

      <hr class="nomargin-top">
      <div class="row">
        <div class="col-sm-6 text-left">
          <h4><strong>Contact</strong> Details</h4>
          <p class="nomargin nopadding">
            <strong>Note:</strong> 
           Receipt from lusha.com
          </p><br><!-- no P margin for printing - use <br> instead -->

          <address>
            PO Box 21132 <br>
            Vivas 2355 Australia<br>
            Phone: 1-800-565-2390 <br>
            Fax: 1-800-565-2390 <br>
            Email:support@lusha.com
          </address>
        </div>

        <div class="col-sm-6 text-right">
          <ul class="list-unstyled">
            <li><strong>Sub - Amount:</strong>
              <?php 
               echo '$'.$invoiceDetail->order_user_plan_list->actual_price.' x 12 
               <br><strong>Annual Price: </strong>'.$invoiceDetail->order_user_plan_list->actual_price*12;
              ?>
            </li>
            <li><strong>Discount:</strong> 
              <?php echo $invoiceDetail->order_user_plan_list->discount.' % of '. $Annual_price.' = '.$Annual_price/100*$invoiceDetail->order_user_plan_list->discount; ?>
            </li>
            <li><strong>Total Price:</strong> 
              <?php echo $Annual_price.' - '.$Annual_price/100*$invoiceDetail->order_user_plan_list->discount.' = '.$invoiceDetail->amount; ?>
            </li><br>
             <li>
              <div class="panel-body">
                <a class="btn btn-success" onclick="window.print()"><i class="fa fa-print"></i> PRINT INVOICE</a>
              </div>
            </li>
          </ul>     
        </div>
      </div>
    </div>
  </div>

</div>
@endforeach
    </section>
  <!-- /.content-wrapper -->
 @endsection
