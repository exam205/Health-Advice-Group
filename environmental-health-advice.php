<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <?php include 'modules/links.php'; ?> 
</head>
<body>
    <?php include 'modules/navbar.php'; ?>
    <div class="d-flex flex-column align-items-stretch flex-shrink-0 text-bg-dark" style="width: 380px;">
        <a href="" class="d-flex align-items-center flex-shrink-0 p-3 link-light text-decoration-none border-bottom">
        <span class="fs-5 fw-semibold">Advice</span>
        </a>
        <div class="list-group list-group-flush border-bottom scrollarea" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action py-3 lh-sm active" id="test1" data-bs-toggle="list" href="#list-1" role="tab" aria-controls="list-1">
                <div class="d-flex w-100 align-items-center justify-content-between">
                <strong class="mb-1">List group item heading</strong>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
            </a>
            <a class="list-group-item list-group-item-action py-3 lh-sm" id="test2" data-bs-toggle="list" href="#list-2" role="tab" aria-controls="list-2">
                <div class="d-flex w-100 align-items-center justify-content-between">
                <strong class="mb-1">List group item heading</strong>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
            </a>
            <a class="list-group-item list-group-item-action py-3 lh-sm" id="test2" data-bs-toggle="list" href="#list-2" role="tab" aria-controls="list-2">
                <div class="d-flex w-100 align-items-center justify-content-between">
                <strong class="mb-1">List group item heading</strong>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
            </a>
        </div>
    </div>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-1" role="tabpanel" aria-labelledby="test1">Hello World</div>
            <div class="tab-pane fade show" id="list-2" role="tabpanel" aria-labelledby="test2">Goodbye World</div>
        </div>

</body>
</html>