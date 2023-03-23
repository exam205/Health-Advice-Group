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
    <button class="btn float-button d-block d-sm-none" id="mobile-button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-mobile" role="button">
    <i class="bi bi-chevron-double-right"></i>
    </button>
    <main class="d-flex flex-nowrap" style="margin-top:2rem;">
        <div class="b-example-divider b-example-vr d-none d-sm-block"></div>
        <div class="d-flex flex-column align-items-stretch text-bg-dark d-none d-sm-block" style="width: 400px;">
            <a href="" class="d-flex align-items-center p-3 link-light text-decoration-none border-bottom">
                <span class="fw-semibold h1">Weather Advice Index</span>
            </a>
            <div class="list-group list-group-flush border-bottom scrollarea" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action py-3 lh-sm active" id="test1" data-bs-toggle="list" href="#list-1" role="tab" aria-controls="list-1">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                    <h3><strong class="mb-1">Welcome</strong></h3>
                    </div>
                    <div class="col-10 mb-1"></div>
                </a>
                <a class="list-group-item list-group-item-action py-3 lh-sm" id="test2" data-bs-toggle="list" href="#list-2" role="tab" aria-controls="list-2">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <h3><strong class="mb-1">Title</strong></h3>
                    </div>
                    <div class="col-10 mb-1">Additional Info</div>
                </a>
                <a class="list-group-item list-group-item-action py-3 lh-sm" id="test3" data-bs-toggle="list" href="#list-3" role="tab" aria-controls="list-3">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <h3><strong class="mb-1">Title</strong></h3>
                    </div>
                    <div class="col-10 mb-1">Additional Info</div>
                </a>
                <a class="list-group-item list-group-item-action py-3 lh-sm" id="test4" data-bs-toggle="list" href="#list-4" role="tab" aria-controls="list-4">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <h3><strong class="mb-1">Title</strong></h3>
                    </div>
                    <div class="col-10 mb-1">Additional Info</div>
                </a>
                <a class="list-group-item list-group-item-action py-3 lh-sm" id="test5" data-bs-toggle="list" href="#list-5" role="tab" aria-controls="list-5">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <h3><strong class="mb-1">Title</strong></h3>
                    </div>
                    <div class="col-10 mb-1">Additional Info</div>
                </a>
                <a class="list-group-item list-group-item-action py-3 lh-sm" id="test6" data-bs-toggle="list" href="#list-6" role="tab" aria-controls="list-6">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <h3><strong class="mb-1">Title</strong></h3>
                    </div>
                    <div class="col-10 mb-1">Additional Info</div>
                </a>
            </div>
        </div>
        <div class="b-example-divider b-example-vr d-none d-sm-block"></div>
        <div class="offcanvas offcanvas-start w-50" tabindex="-1" id="offcanvas-mobile">
            <div class="offcanvas-header">
                <h6 class="offcanvas-title d-none d-sm-block" id="offcanvas-mobile">Menu</h6>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <a href="" class="d-flex align-items-center p-3 text-bg-dark link-light text-decoration-none border-bottom">
                <span class="fw-semibold h2">Weather Advice Index</span>
            </a>
            <div class="offcanvas-body px-0">
                <div class="list-group list-group-flush border-bottom scrollarea" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action py-3 lh-sm active" id="test1" data-bs-toggle="list" href="#list-1" role="tab" aria-controls="list-1">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                        <h3><strong class="mb-1">Welcome</strong></h3>
                        </div>
                        <div class="col-10 mb-1"></div>
                    </a>
                    <a class="list-group-item list-group-item-action py-3 lh-sm" id="test2" data-bs-toggle="list" href="#list-2" role="tab" aria-controls="list-2">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                            <h3><strong class="mb-1">Title</strong></h3>
                        </div>
                        <div class="col-10 mb-1">Additional Info</div>
                    </a>
                    <a class="list-group-item list-group-item-action py-3 lh-sm" id="test3" data-bs-toggle="list" href="#list-3" role="tab" aria-controls="list-3">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                            <h3><strong class="mb-1">Title</strong></h3>
                        </div>
                        <div class="col-10 mb-1">Additional Info</div>
                    </a>
                    <a class="list-group-item list-group-item-action py-3 lh-sm" id="test4" data-bs-toggle="list" href="#list-4" role="tab" aria-controls="list-4">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                            <h3><strong class="mb-1">Title</strong></h3>
                        </div>
                        <div class="col-10 mb-1">Additional Info</div>
                    </a>
                    <a class="list-group-item list-group-item-action py-3 lh-sm" id="test5" data-bs-toggle="list" href="#list-5" role="tab" aria-controls="list-5">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                            <h3><strong class="mb-1">Title</strong></h3>
                        </div>
                        <div class="col-10 mb-1">Additional Info</div>
                    </a>
                    <a class="list-group-item list-group-item-action py-3 lh-sm" id="test6" data-bs-toggle="list" href="#list-6" role="tab" aria-controls="list-6">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                            <h3><strong class="mb-1">Title</strong></h3>
                        </div>
                        <div class="col-10 mb-1">Additional Info</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="tab-content text-wrap text-bg-dark rounded-3 py-3" id="nav-tabContent" style="height:fit-content;">
            <div class="tab-pane fade show active" id="list-1" role="tabpanel" aria-labelledby="test1">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h1>Weather Health Issues Advice</h1>
                            <p class="fs-5">Welcome! Here you can find advice on how to stay healthy during different weather conditions. From avoiding heat-related illnesses in the summer to staying warm in winter, we have you covered. We also provide advice on how to minimize any potential health concerns related to extreme weather events. Use our index as a tool to help you stay safe and healthy!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="list-2" role="tabpanel" aria-labelledby="test2">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h1>Heading 2</h1>
                            <p class="fs-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac enim vitae elit tincidunt vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed semper, dolor eu tincidunt viverra, nisl orci cursus nunc, at ornare erat sapien et nulla. Nullam auctor, velit in consectetur tristique, ex risus laoreet massa, nec malesuada orci magna nec sapien. Nullam eget semper magna. Donec vel elit sed elit volutpat tincidunt. Proin vel dui a eros aliquam commodo. Phasellus vel nibh sit amet urna feugiat venenatis. Sed hendrerit dolor nec nunc semper, eget ultricies urna tincidunt. Donec auctor, orci vitae aliquam fermentum, lorem tortor ultrices nisl, non pharetra sem orci at velit. Nulla facilisi. Nulla facilisi. Donec id libero non leo dignissim venenatis. Sed eget metus et tortor lacinia mollis. Praesent eget libero id nisl bibendum ornare. Integer vel sapien sit amet turpis placerat varius. Fusce vitae tellus sed nibh molestie mollis.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="list-3" role="tabpanel" aria-labelledby="test3">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h1>Heading 3</h1>
                            <p class="fs-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac enim vitae elit tincidunt vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed semper, dolor eu tincidunt viverra, nisl orci cursus nunc, at ornare erat sapien et nulla. Nullam auctor, velit in consectetur tristique, ex risus laoreet massa, nec malesuada orci magna nec sapien. Nullam eget semper magna. Donec vel elit sed elit volutpat tincidunt. Proin vel dui a eros aliquam commodo. Phasellus vel nibh sit amet urna feugiat venenatis. Sed hendrerit dolor nec nunc semper, eget ultricies urna tincidunt. Donec auctor, orci vitae aliquam fermentum, lorem tortor ultrices nisl, non pharetra sem orci at velit. Nulla facilisi. Nulla facilisi. Donec id libero non leo dignissim venenatis. Sed eget metus et tortor lacinia mollis. Praesent eget libero id nisl bibendum ornare. Integer vel sapien sit amet turpis placerat varius. Fusce vitae tellus sed nibh molestie mollis.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="list-4" role="tabpanel" aria-labelledby="test4">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h1>Heading 4</h1>
                            <p class="fs-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac enim vitae elit tincidunt vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed semper, dolor eu tincidunt viverra, nisl orci cursus nunc, at ornare erat sapien et nulla. Nullam auctor, velit in consectetur tristique, ex risus laoreet massa, nec malesuada orci magna nec sapien. Nullam eget semper magna. Donec vel elit sed elit volutpat tincidunt. Proin vel dui a eros aliquam commodo. Phasellus vel nibh sit amet urna feugiat venenatis. Sed hendrerit dolor nec nunc semper, eget ultricies urna tincidunt. Donec auctor, orci vitae aliquam fermentum, lorem tortor ultrices nisl, non pharetra sem orci at velit. Nulla facilisi. Nulla facilisi. Donec id libero non leo dignissim venenatis. Sed eget metus et tortor lacinia mollis. Praesent eget libero id nisl bibendum ornare. Integer vel sapien sit amet turpis placerat varius. Fusce vitae tellus sed nibh molestie mollis.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="list-5" role="tabpanel" aria-labelledby="test5">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h1>Heading 5</h1>
                            <p class="fs-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac enim vitae elit tincidunt vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed semper, dolor eu tincidunt viverra, nisl orci cursus nunc, at ornare erat sapien et nulla. Nullam auctor, velit in consectetur tristique, ex risus laoreet massa, nec malesuada orci magna nec sapien. Nullam eget semper magna. Donec vel elit sed elit volutpat tincidunt. Proin vel dui a eros aliquam commodo. Phasellus vel nibh sit amet urna feugiat venenatis. Sed hendrerit dolor nec nunc semper, eget ultricies urna tincidunt. Donec auctor, orci vitae aliquam fermentum, lorem tortor ultrices nisl, non pharetra sem orci at velit. Nulla facilisi. Nulla facilisi. Donec id libero non leo dignissim venenatis. Sed eget metus et tortor lacinia mollis. Praesent eget libero id nisl bibendum ornare. Integer vel sapien sit amet turpis placerat varius. Fusce vitae tellus sed nibh molestie mollis.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="list-6" role="tabpanel" aria-labelledby="test6">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h1>Heading 6</h1>
                            <p class="fs-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac enim vitae elit tincidunt vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed semper, dolor eu tincidunt viverra, nisl orci cursus nunc, at ornare erat sapien et nulla. Nullam auctor, velit in consectetur tristique, ex risus laoreet massa, nec malesuada orci magna nec sapien. Nullam eget semper magna. Donec vel elit sed elit volutpat tincidunt. Proin vel dui a eros aliquam commodo. Phasellus vel nibh sit amet urna feugiat venenatis. Sed hendrerit dolor nec nunc semper, eget ultricies urna tincidunt. Donec auctor, orci vitae aliquam fermentum, lorem tortor ultrices nisl, non pharetra sem orci at velit. Nulla facilisi. Nulla facilisi. Donec id libero non leo dignissim venenatis. Sed eget metus et tortor lacinia mollis. Praesent eget libero id nisl bibendum ornare. Integer vel sapien sit amet turpis placerat varius. Fusce vitae tellus sed nibh molestie mollis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script type="text/javascript" src="js/offcanvas-show.js" defer></script>
</body>
</body>
</html>