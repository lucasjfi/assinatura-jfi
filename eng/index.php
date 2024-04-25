<?php
 header("Content-type: text/html; charset=utf-8");
  $nome = $_GET['asNome'];
  $funcao = $_GET['asFunc'];
  $local = $_GET['asLocal'];
  $contato = $_GET['asContato'];
echo"
<meta charset=\"UTF-8\">
<script src=\"https://code.jquery.com/jquery-3.5.1.min.js\" integrity=\"sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=\" crossorigin=\"anonymous\"></script>
<script>
    $(document).ready(function(){
        document.execCommand('selectAll');
        document.execCommand('copy');    
    })
 
</script>
";
echo "
<body link=\"#ebebeb\" vlink=\"#ebebeb\" alink=\"#ebebeb\">
<table id=\"tabelinha\" style=\"a:link{ color: #ebebeb !important; } a:visited{ color: #ebebeb !important; } display: inline-table;\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"428\">
  <tr>
   <td><img src=\"spacer.gif\" width=\"298\" height=\"1\" alt=\"\"></td>
   <td><img src=\"spacer.gif\" width=\"130\" height=\"1\" alt=\"\"></td>
   <td><img src=\"spacer.gif\" width=\"1\" height=\"1\" alt=\"\"></td>
  </tr>

  <tr>
   <td><img name=\"bgfwsm_r1_c1\" src=\"./Assets/img/logo3.png\" width=\"298\" height=\"74\" alt=\"\"></td>
   <td rowspan=\"6\"><img name=\"bgfwsm_r1_c2\" src=\"./Assets/img/selo3.png\" width=\"130\" height=\"170\" alt=\"\"></td>
   <td><img src=\"spacer.gif\" width=\"1\" height=\"74\" alt=\"\"></td>
  </tr>
  <tr>
   <td valign=\"middle\"><span style=\"font-size: 15.6pt; font-family: Calibri Light; line-height: 2px; font-weight: 700; color: rgb(7, 7, 7);\" id=\"asNome\">". $nome ."</span></td>
   <td><img src=\"spacer.gif\" width=\"1\" height=\"24\" alt=\"\"></td>
  </tr>
  <tr>
   <td><img name=\"bgfwsm_r3_c1\" src=\"./Assets/img/linha3.png\" width=\"298\" height=\"13\" alt=\"\"></td>
   <td><img src=\"spacer.gif\" width=\"1\" height=\"13\" alt=\"\"></td>
  </tr>
  <tr>
   <td ><span style=\"font-size: 10pt; font-family: Calibri; line-height: 2px; color: #6e6e6e;\" id=\"asFunc\">". $funcao." - ". $local ."</span></td>
   <td><img src=\"spacer.gif\" width=\"1\" height=\"20\" alt=\"\"></td>
  </tr>
  <tr>
   <td ><span style=\"font-size: 10pt; font-family: Calibri; line-height: 2px;  color: #6e6e6e;\" id=\"asContato\">Contato: +55 ". $contato ."</span></td>
   <td><img src=\"spacer.gif\" width=\"1\" height=\"17\" alt=\"\"></td>
  </tr>
  <tr>
   <td valign=\"\"><span style=\"font-size: 10pt; font-family: Calibri; line-height: 2px;  color: #6e6e6e;\" id=\"asContato\">www.jfi.com.br</span></td>
   <td><img src=\"spacer.gif\" width=\"1\" height=\"22\" alt=\"\"></td>
  </tr>
</table>
</body>";

?>