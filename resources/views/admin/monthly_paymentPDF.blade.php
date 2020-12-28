<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }

      #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
      }

      #customers tr:nth-child(even){background-color: #f2f2f2;}

      #customers tr:hover {background-color: #ddd;}

      #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
        background-color: #4CAF50;
        color: white;
      }
      tr{
        text-align: center;
      }
  </style>
  </head>
  <body>
        <div style="background-color: #FF394F; color:white;"><br>
          <center><h1>Monthly Payment Autopool</h1>
            @foreach ($paymentUsers as $date)

            <?php $date=$date['date']; ?>
            @endforeach
            {{date('F', strtotime($date))}} {{date('Y', strtotime($date))}}
          </center><br>
          <p align="right">{{date("d-m-Y", strtotime($date))}}</p>


        </div>

        <table id="customers">
          <tr>
            <th>SL.NO</th>
            <th>User ID</th>
            <th>Name</th>
            <th>Account No</th>
            <th>IFSC Code</th>
            <th>Bank</th>
            <th>Branch Name</th>
            <th>Amount</th>


          </tr>
          @foreach ($paymentUsers  as $index => $pdu)
          <?php

             $start=date('Y-m-d',strtotime($pdu['updat']));
            $days=dateDiffInDays($start, $date)

           ?>

           @if(($pdu['crtat']!=$pdu['updat']) && $days>14)
            <tr>

                <td>{{$index+1}}</td>
                <td>OUI{{sprintf("%08d", $pdu['userID'])}}</td>
                <td>{{$pdu['name']}}</td>
                <td>{{$pdu['accno']}}</td>
                <td>{{$pdu['ifsc']}}</td>
                <td>{{$pdu['bname']}}</td>
                <td>{{$pdu['nbranch']}}</td>
                <td>{{$pdu['amount']}}</td>
            </tr>
          @elseif(($pdu['crtat']==$pdu['updat']) && $days>29)
          <tr>

              <td>{{$index+OXD1}}</td>
              <td>OUI{{sprintf("%08d", $pdu['userID'])}}</td>
              <td>{{$pdu['name']}}</td>
              <td>{{$pdu['accno']}}</td>
              <td>{{$pdu['ifsc']}}</td>
              <td>{{$pdu['bname']}}</td>
              <td>{{$pdu['nbranch']}}</td>
              <td>{{$pdu['amount']}}</td>

          </tr>
          @elseif($days>14)
          <tr>

              <td>{{$index+1}}</td>
              <td>OUI{{sprintf("%08d", $pdu['userID'])}}</td>
              <td>{{$pdu['name']}}</td>
              <td>{{$pdu['accno']}}</td>
              <td>{{$pdu['ifsc']}}</td>
              <td>{{$pdu['bname']}}</td>
              <td>{{$pdu['nbranch']}}</td>
              <td>{{$pdu['amount']}}</td>
            

          </tr>
          @endif


          @endforeach
          <?php function dateDiffInDays($start, $date)
          {
            // Calculating the difference in timestamps
            $diff = strtotime($date) - strtotime($start);

            // 1 day = 24 hours
            // 24 * 60 * 60 = 86400 seconds
            return abs(round($diff / 86400));
          } ?>
        </table>
  </body>
</html>
