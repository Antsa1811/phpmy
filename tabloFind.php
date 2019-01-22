<?php  
require 'find.php';

?>
<table class="table table-condensand table-striped table-bordered">
    <thead>
        <tr>
        <th class="text-center">Titre</th>
        <th class="text-center">Auteur</th>
        <th class="text-center">Description</th>
        </tr>
    </thead>
    <tbody>
    	<tr>
            <?php
            if(isset($tablo))
            {
                ?>



    		<td class="text-center"><?php echo $tablo[1] ?></td>
    		<td class="text-center"><?php echo $tablo[2] ?></td>
    		<td class="text-center"><?php echo $tablo[3] ?></td>
            <?php
            }
            else
            {
                echo "<p class='text-center text-danger alert-danger ' >Resultat introuvable</p>";
            }
            ?>
    	</tr>
    </tbody>

</table>