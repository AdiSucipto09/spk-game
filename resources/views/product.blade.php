<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    
    <link rel="stylesheet" href="{{ url('assets/css/main/app.css') }}">
    <link rel="stylesheet" href="assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">
    
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="index.html"><img src="assets/images/logo/logo.svg" alt="Logo" srcset=""></a>
            </div>
            <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path><g transform="translate(-210 -1)"><path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path><circle cx="220.5" cy="11.5" r="4"></circle><path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path></g></g></svg>
                <div class="form-check form-switch fs-6">
                    <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" >
                    <label class="form-check-label" ></label>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path></svg>
            </div>
            <div class="sidebar-toggler  x">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
            
            <li
                class="sidebar-item  ">
                <a href="/admin" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li
                class="sidebar-item  ">
                <a href="/product/create" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Add Game</span>
                </a>
            </li>
            <li
                class="sidebar-item active ">
                <a href="/product" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Product</span>
                </a>
            </li>
            <li
                class="sidebar-item  ">
                <a href="/alternatif" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Add Alternatif</span>
                </a>
            </li>
            <li
                class="sidebar-item  ">
                <a href="/spk" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                     <span>SPK</span>
                </a>
            </li>

            
        </ul>
    </div>
</div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Product Game</h3>
                <p class="text-subtitle text-muted">Multiple form layouts, you can use</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Form Layout</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Striped rows start -->
    <section class="section">
        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Striped rows</h4>
                    </div>
                    <!-- <div class="card-content">
                        <div class="card-body">
                            <p class="card-text">Use <code class="highlighter-rouge">.table-striped</code> to add
                                zebra-striping to any
                                table row within the <code class="highlighter-rouge">&lt;tbody&gt;</code>. This styling
                                doesn't work in IE8
                                and below as <code>:nth-child</code> CSS selector isn't supported.</p>
                        </div> -->
                        <!-- table striped -->
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>NAME</th>
                                        <th>PRICE</th>
                                        <th>CATEGORY</th>
                                        <th>SIZE</th>
                                        <th>AGE RATING</th>
                                        <th>REVIEW</th>
                                        <th>ACION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $game)
                                    <tr>
                                        <td class="text-bold-500">{{ $game->id}}</td>
                                        <td>{{ $game->name}}</td>
                                        <td class="text-bold-500">{{ $game->price}}</td>
                                        <td>{{ $game->category}}</td>
                                        <td>{{ $game->size}}</td>
                                        <td>{{ $game->age_rating}}+</td>
                                        <td>{{ $game->review}}</td>
                                        <td>
                                            <a href="/product/{{$game->id}}/edit">
                                                <button>edit</button></a>

                                            <form action="{{ url('/product/'.$game->id)}}" class="d-inline"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                    name="submit">Delete</button>
                                            </form>
                                    </tr>
                                    @endforeach
                                    <!-- <tr>
                                        <td class="text-bold-500">Morgan Vanblum</td>
                                        <td>$13/hr</td>
                                        <td class="text-bold-500">Graphic concepts</td>
                                        <td>Remote</td>
                                        <td>Shangai,China</td>
                                        <td><a href="#"><i
                                                    class="badge-circle badge-circle-light-secondary font-medium-1"
                                                    data-feather="mail"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">Tiffani Blogz</td>
                                        <td>$15/hr</td>
                                        <td class="text-bold-500">Animation</td>
                                        <td>Remote</td>
                                        <td>Austin,Texas</td>
                                        <td><a href="#"><i
                                                    class="badge-circle badge-circle-light-secondary font-medium-1"
                                                    data-feather="mail"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">Ashley Boul</td>
                                        <td>$15/hr</td>
                                        <td class="text-bold-500">Animation</td>
                                        <td>Remote</td>
                                        <td>Austin,Texas</td>
                                        <td><a href="#"><i
                                                    class="badge-circle badge-circle-light-secondary font-medium-1"
                                                    data-feather="mail"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">Mikkey Mice</td>
                                        <td>$15/hr</td>
                                        <td class="text-bold-500">Animation</td>
                                        <td>Remote</td>
                                        <td>Austin,Texas</td>
                                        <td><a href="#"><i
                                                    class="badge-circle badge-circle-light-secondary font-medium-1"
                                                    data-feather="mail"></i></a></td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Striped rows end -->

</div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="https://saugi.me">Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>
    
</body>

</html>
