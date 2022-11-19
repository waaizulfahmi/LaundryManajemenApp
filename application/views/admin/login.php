<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Login Admin</title>
</head>

<body id="page-top" class="bg-info bg-opacity-50" >
<div class='mainPage'>
    <h3 class="mb-5 ms-5 mt-3 text-white">Sistem Manajemen Laundry</h3>
    </div>
    <div class="container shadow mb-5 bg-white rounded">
        <div class="row">
            <div class="col-6 ps-0 pe-0">
                <div class="row align-items-center">
                    <div class='box-1 d-flex'>
                        <img class='ms-0 d-block ps-0 rounded' width="550px" src="<?= base_url('assets/img/datang.png')?>" alt="Logo" />
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="form">
                <form class="user" method="POST" action="<?=base_url('admin/auth/login')?>"> 
                <?=$this->session->flashdata('flash') ?>
                <div class="form-content mt-4">
                    <h3 class="mb-4 text-center">Login Admin/Karyawan</h3>
                    <div class="form-group mt-3 ms-5 me-5">
                        <label>Username</label>
                        <input type="text" class="form-control mt-1" placeholder="Enter username" name="username" value="<?=set_value('username')?>" required />
                        <?=form_error('password',"<small class='text-danger ml-3'>","</small>")?>
                    </div>
                    <div class="form-group mt-3 ms-5 me-5">
                        <label>Password</label>
                        <input type="password" class="form-control mt-1" placeholder="Enter password" name="password" required />
                        <?=form_error('password',"<small class='text-danger ml-3'>","</small>")?>
                    </div>
                    <div class=" gap-2 mt-3 text-center">
                      <button type="submit" class="btn btn-primary" >
                          Login
                      </button>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>      
    </div>
</body>
</html>
