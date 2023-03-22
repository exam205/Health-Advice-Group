<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Environmental Advice</title>
    <?php include 'modules/links.php'; ?> 
</head>
<body>
    <?php include 'modules/navbar.php'; ?>
    <main class="d-flex flex-nowrap" style="margin-top:2rem;">
        <div class="b-example-divider b-example-vr d-sm-none d-xs-none"></div>
        <div class="d-flex flex-column align-items-stretch text-bg-dark d-sm-none d-xs-none" style="width: 400px;">
            <a href="" class="d-flex align-items-center p-3 link-light text-decoration-none border-bottom">
                <span class="fw-semibold h1">Advice Index</span>
            </a>
            <div class="list-group list-group-flush border-bottom scrollarea" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action py-3 lh-sm active" id="test1" data-bs-toggle="list" href="#list-1" role="tab" aria-controls="list-1">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                    <h3><strong class="mb-1">List group item heading</strong></h3>
                    </div>
                    <div class="col-10 mb-1">Some placeholder content in a paragraph below the heading and date.</div>
                </a>
                <a class="list-group-item list-group-item-action py-3 lh-sm" id="test2" data-bs-toggle="list" href="#list-2" role="tab" aria-controls="list-2">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                    <h3><strong class="mb-1">List group item heading</strong></h3>
                    </div>
                    <div class="col-10 mb-1">Some placeholder content in a paragraph below the heading and date.</div>
                </a>
                <a class="list-group-item list-group-item-action py-3 lh-sm" id="test3" data-bs-toggle="list" href="#list-3" role="tab" aria-controls="list-3">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                    <h3><strong class="mb-1">List group item heading</strong></h3>
                    </div>
                    <div class="col-10 mb-1">Some placeholder content in a paragraph below the heading and date.</div>
                </a>
                <a class="list-group-item list-group-item-action py-3 lh-sm" id="test4" data-bs-toggle="list" href="#list-4" role="tab" aria-controls="list-4">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                    <h3><strong class="mb-1">List group item heading</strong></h3>
                    </div>
                    <div class="col-10 mb-1">Some placeholder content in a paragraph below the heading and date.</div>
                </a>
                <a class="list-group-item list-group-item-action py-3 lh-sm" id="test5" data-bs-toggle="list" href="#list-5" role="tab" aria-controls="list-5">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                    <h3><strong class="mb-1">List group item heading</strong></h3>
                    </div>
                    <div class="col-10 mb-1">Some placeholder content in a paragraph below the heading and date.</div>
                </a>
                <a class="list-group-item list-group-item-action py-3 lh-sm" id="test6" data-bs-toggle="list" href="#list-6" role="tab" aria-controls="list-6">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                    <h3><strong class="mb-1">List group item heading</strong></h3>
                    </div>
                    <div class="col-10 mb-1">Some placeholder content in a paragraph below the heading and date.</div>
                </a>
            </div>
        </div>
        <div class="b-example-divider b-example-vr d-sm-none d-xs-none" style="margin-right:1rem;"></div>
        <div class="tab-content text-bg-dark rounded-3 py-3" id="nav-tabContent" style="height:fit-content;">
            <div class="tab-pane fade show active" id="list-1" role="tabpanel" aria-labelledby="test1">
                <div class="container">
                    <div class="row">
                        <div class="col-9">
                            <h1>Heading 1</h1>
                            <p class="fs-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac enim vitae elit tincidunt vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed semper, dolor eu tincidunt viverra, nisl orci cursus nunc, at ornare erat sapien et nulla. Nullam auctor, velit in consectetur tristique, ex risus laoreet massa, nec malesuada orci magna nec sapien. Nullam eget semper magna. Donec vel elit sed elit volutpat tincidunt. Proin vel dui a eros aliquam commodo. Phasellus vel nibh sit amet urna feugiat venenatis. Sed hendrerit dolor nec nunc semper, eget ultricies urna tincidunt. Donec auctor, orci vitae aliquam fermentum, lorem tortor ultrices nisl, non pharetra sem orci at velit. Nulla facilisi. Nulla facilisi. Donec id libero non leo dignissim venenatis. Sed eget metus et tortor lacinia mollis. Praesent eget libero id nisl bibendum ornare. Integer vel sapien sit amet turpis placerat varius. Fusce vitae tellus sed nibh molestie mollis.</p>
                        </div>
                        <div class="col-3">
                            <img class="advice-images" src="https://via.placeholder.com/300x300" alt="placeholder">
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="list-2" role="tabpanel" aria-labelledby="test2">
                <div class="container">
                    <div class="row">
                        <div class="col-9">
                            <h1>Heading 2</h1>
                            <p class="fs-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac enim vitae elit tincidunt vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed semper, dolor eu tincidunt viverra, nisl orci cursus nunc, at ornare erat sapien et nulla. Nullam auctor, velit in consectetur tristique, ex risus laoreet massa, nec malesuada orci magna nec sapien. Nullam eget semper magna. Donec vel elit sed elit volutpat tincidunt. Proin vel dui a eros aliquam commodo. Phasellus vel nibh sit amet urna feugiat venenatis. Sed hendrerit dolor nec nunc semper, eget ultricies urna tincidunt. Donec auctor, orci vitae aliquam fermentum, lorem tortor ultrices nisl, non pharetra sem orci at velit. Nulla facilisi. Nulla facilisi. Donec id libero non leo dignissim venenatis. Sed eget metus et tortor lacinia mollis. Praesent eget libero id nisl bibendum ornare. Integer vel sapien sit amet turpis placerat varius. Fusce vitae tellus sed nibh molestie mollis.</p>
                        </div>
                        <div class="col-3">
                            <img src="https://via.placeholder.com/300x300" alt="placeholder">
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="list-3" role="tabpanel" aria-labelledby="test3">
                <div class="container">
                    <div class="row">
                        <div class="col-9">
                            <h1>Heading 3</h1>
                            <p class="fs-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac enim vitae elit tincidunt vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed semper, dolor eu tincidunt viverra, nisl orci cursus nunc, at ornare erat sapien et nulla. Nullam auctor, velit in consectetur tristique, ex risus laoreet massa, nec malesuada orci magna nec sapien. Nullam eget semper magna. Donec vel elit sed elit volutpat tincidunt. Proin vel dui a eros aliquam commodo. Phasellus vel nibh sit amet urna feugiat venenatis. Sed hendrerit dolor nec nunc semper, eget ultricies urna tincidunt. Donec auctor, orci vitae aliquam fermentum, lorem tortor ultrices nisl, non pharetra sem orci at velit. Nulla facilisi. Nulla facilisi. Donec id libero non leo dignissim venenatis. Sed eget metus et tortor lacinia mollis. Praesent eget libero id nisl bibendum ornare. Integer vel sapien sit amet turpis placerat varius. Fusce vitae tellus sed nibh molestie mollis.</p>
                        </div>
                        <div class="col-3">
                            <img src="https://via.placeholder.com/300x300" alt="placeholder">
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="list-4" role="tabpanel" aria-labelledby="test4">
                <div class="container">
                    <div class="row">
                        <div class="col-9">
                            <h1>Heading 4</h1>
                            <p class="fs-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac enim vitae elit tincidunt vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed semper, dolor eu tincidunt viverra, nisl orci cursus nunc, at ornare erat sapien et nulla. Nullam auctor, velit in consectetur tristique, ex risus laoreet massa, nec malesuada orci magna nec sapien. Nullam eget semper magna. Donec vel elit sed elit volutpat tincidunt. Proin vel dui a eros aliquam commodo. Phasellus vel nibh sit amet urna feugiat venenatis. Sed hendrerit dolor nec nunc semper, eget ultricies urna tincidunt. Donec auctor, orci vitae aliquam fermentum, lorem tortor ultrices nisl, non pharetra sem orci at velit. Nulla facilisi. Nulla facilisi. Donec id libero non leo dignissim venenatis. Sed eget metus et tortor lacinia mollis. Praesent eget libero id nisl bibendum ornare. Integer vel sapien sit amet turpis placerat varius. Fusce vitae tellus sed nibh molestie mollis.</p>
                        </div>
                        <div class="col-3">
                            <img src="https://via.placeholder.com/300x300" alt="placeholder">
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="list-5" role="tabpanel" aria-labelledby="test5">
                <div class="container">
                    <div class="row">
                        <div class="col-9">
                            <h1>Heading 5</h1>
                            <p class="fs-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac enim vitae elit tincidunt vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed semper, dolor eu tincidunt viverra, nisl orci cursus nunc, at ornare erat sapien et nulla. Nullam auctor, velit in consectetur tristique, ex risus laoreet massa, nec malesuada orci magna nec sapien. Nullam eget semper magna. Donec vel elit sed elit volutpat tincidunt. Proin vel dui a eros aliquam commodo. Phasellus vel nibh sit amet urna feugiat venenatis. Sed hendrerit dolor nec nunc semper, eget ultricies urna tincidunt. Donec auctor, orci vitae aliquam fermentum, lorem tortor ultrices nisl, non pharetra sem orci at velit. Nulla facilisi. Nulla facilisi. Donec id libero non leo dignissim venenatis. Sed eget metus et tortor lacinia mollis. Praesent eget libero id nisl bibendum ornare. Integer vel sapien sit amet turpis placerat varius. Fusce vitae tellus sed nibh molestie mollis.</p>
                        </div>
                        <div class="col-3">
                            <img src="https://via.placeholder.com/300x300" alt="placeholder">
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="list-6" role="tabpanel" aria-labelledby="test6">
                <div class="container">
                    <div class="row">
                        <div class="col-9">
                            <h1>Heading 6</h1>
                            <p class="fs-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac enim vitae elit tincidunt vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed semper, dolor eu tincidunt viverra, nisl orci cursus nunc, at ornare erat sapien et nulla. Nullam auctor, velit in consectetur tristique, ex risus laoreet massa, nec malesuada orci magna nec sapien. Nullam eget semper magna. Donec vel elit sed elit volutpat tincidunt. Proin vel dui a eros aliquam commodo. Phasellus vel nibh sit amet urna feugiat venenatis. Sed hendrerit dolor nec nunc semper, eget ultricies urna tincidunt. Donec auctor, orci vitae aliquam fermentum, lorem tortor ultrices nisl, non pharetra sem orci at velit. Nulla facilisi. Nulla facilisi. Donec id libero non leo dignissim venenatis. Sed eget metus et tortor lacinia mollis. Praesent eget libero id nisl bibendum ornare. Integer vel sapien sit amet turpis placerat varius. Fusce vitae tellus sed nibh molestie mollis.</p>
                        </div>
                        <div class="col-3">
                            <img src="https://via.placeholder.com/300x300" alt="placeholder">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>