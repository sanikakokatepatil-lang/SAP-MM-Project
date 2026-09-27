<html><head><title>SAP MM Dashboard</title>
<style>
body{font-family:Arial;background:#eef3ff;padding:30px}
h1{color:#1a2b5e}
.grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px}
.card{background:white;padding:25px;border-radius:12px;box-shadow:0 4px 10px #00000020;text-align:center}
.card:hover{transform:scale(1.05);background:#dbe6ff;cursor:pointer}
.card a{text-decoration:none;color:#222;font-weight:bold;font-size:18px;display:block}
.card small{color:#555;font-weight:normal}
</style></head><body>
<h1>SAP MM Dashboard</h1>
<p>Welcome to the SAP MM Procurement Management System.</p>
<div class="grid">
<div class="card"><a href="materials.php">📦 Material Master<br><small>Manage material information.</small></a></div>
<div class="card"><a href="vendors.php">👤 Vendor Master<br><small>Manage supplier information.</small></a></div>
<div class="card"><a href="pos.php">🛒 Purchase Order<br><small>Manage purchase orders.</small></a></div>
<div class="card"><a href="stock.php">📊 Inventory Management<br><small>Track available stock.</small></a></div>
<div class="card"><a href="materials.php">📝 Purchase Requisition<br><small>Create requests.</small></a></div>
<div class="card"><a href="stock.php">📦 Goods Receipt<br><small>Record received materials.</small></a></div>
<div class="card"><a href="pos.php">🧾 Invoice Verification<br><small>Verify vendor invoices.</small></a></div>
</div>
</body></html>