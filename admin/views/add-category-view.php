<?php

$obj_adminBack = new adminBack();
if (isset($_POST['ctg_btn'])) {
    $msg = $obj_adminBack->add_category($_POST);
}

?>


<h2 class="mb-5">Add Category</h2>
<?php if (isset($msg)) {
    echo $msg;
} ?>
<form action="#0" name="ctg-form" method="POST" class="ctg-form w-100">
    <div class="form-group">
        <label for="ctg_name" class="form-label">Category Name</label>
        <input name="ctg_name" id="ctg_name" type="text" class="form-control" placeholder="Enter Category Name" required>
    </div>
    <div class="form-group">
        <label for="ctg_icon" class="form-label">Category Icon <span class="text-info">['line Awesome' / 'Font Awesome' icon]</span></label>
        <input name="ctg_icon" id="ctg_icon" type="text" class="form-control" placeholder="Enter Icon" required>
    </div>
    <div class="form-group">
        <label for="ctg_des" class="form-label">Category Description</label>
        <textarea name="ctg_des" id="ctg_des" type="text" class="form-control" placeholder="Enter Category Description" required></textarea>
    </div>
    <div class="form-group">
        <label for="ctg_status" class="form-label">Category Status</label>
        <select name="ctg_status" id="ctg_status" class="form-select form-control">
            <option value="1">Published</option>
            <option value="0">Unpublished</option>
        </select>
    </div>
    <button name="ctg_btn" type="submit" class="btn btn-primary w-100 mb-2">Add Category</button>

</form>