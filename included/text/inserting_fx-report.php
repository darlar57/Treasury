<?php

$report = "<table>
    <tr>
      <td>
      New <strong>FX</strong> record created successfully.<br>
      </td>
    </tr>
    <tr>
      <td>
      SQL instruction was submitted.<br>
      </td>
    </tr>
    <tr>
      <td>
      <strong>Details:</strong><br>
      </td>
    </tr>
    <tr>
      <td>
      Company: <strong>$instrColComp</strong><br>
      Bank: <strong>$instrColBank</strong><br>
      Instrument: <strong>$instrFXInst</strong><br>
      Transaction date: <strong>$instrColTran</strong><br>
      Settlement date: <strong>$instrColSett</strong><br>
      Amount: <strong>$instrColAmou</strong><br>
      Currency bought: <strong>$instrColBuyc</strong><br>
      Currency sold: <strong>$instrColSell</strong><br>
      Exchange rate: <strong>$instrColExch</strong><br>
      Type of transaction: <strong>FX</strong><br>
      <br>Comment: <strong>$instrColComm</strong><br>
      </td>
    </tr>
    </table>";
?>