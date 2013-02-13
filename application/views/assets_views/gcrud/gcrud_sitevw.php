<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>GCRUD INTERFACE</title>
 
<?php 
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
 
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
 
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
 
<style type='text/css'>
body
{
    font-family: Arial;
    font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
    text-decoration: underline;
}
</style>
</head>
<body>
<!-- Beginning header -->
    <div>
        <a href='<?php echo site_url('crud/gcrud_sitectrl/offices')?>'>Offices</a> | 
        <a href='<?php echo site_url('crud/gcrud_sitectrl/employees')?>'>Employees</a> |
        <a href='<?php echo site_url('crud/gcrud_sitectrl/customers')?>'>Customers</a> |
        <a href='<?php echo site_url('crud/gcrud_sitectrl/orders')?>'>Orders</a> |
        <a href='<?php echo site_url('crud/gcrud_sitectrl/products')?>'>Products</a> | 
        <a href='<?php echo site_url('crud/gcrud_sitectrl/films')?>'>Films</a>


 
    </div>
<!-- End of header-->
    <div style='height:20px;'></div>  
    <div>
        <?php echo $output; ?>
 
    </div>
<!-- Beginning footer -->
<div>Footer</div>
<!-- End of Footer -->
</body>
</html>