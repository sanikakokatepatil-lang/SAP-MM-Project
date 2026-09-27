<?php $c=new mysqli("localhost","root","","sap_mm_system"); $r=$c->query("SELECT * FROM purchase_orders"); ?>
<a href="index.php">← Back</a><h2>Purchase Orders (ME23N)</h2>
<table border=1 cellpadding=10><tr><?php foreach($r->fetch_fields() as $f) echo "<th>{$f->name}</th>"; ?></tr>
<?php while($row=$r->fetch_assoc()){ echo "<tr>"; foreach($row as $v) echo "<td>$v</td>"; echo "</tr>"; } ?></table>