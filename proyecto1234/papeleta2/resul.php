<head><title>Resultados</title></head><center>


<?php 
   mysql_connect("127.0.0.1", "root", "") or die(mysql_error());
   mysql_select_db("elecciones") or die(mysql_error());
   $result=mysql_query("select * from  voto_candidato"); 
?>

<TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1> 


<?php 
    

   while($row = mysql_fetch_array($result)) { 
      printf("<tr><td><BR>&nbsp;<font color='black' size='6'><center><b>por el partido '%s' se han obtenido:</b> <font color='darkblue'>'%s'</font> votos</font></center></font></td></TR>",$row["id"],$row["voto_candidato"]);
}    
   mysql_free_result($result); 

?> 


</table>

</center>
