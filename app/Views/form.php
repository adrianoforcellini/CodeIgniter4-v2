<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adição de Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <?php echo form_open('users/store') ?>
        <form>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Nome</label>
                <div class="col-sm-10">
                    <input 
                    type=text 
                    class=form-control
                    name=name
                    id=name
                    value="<?php echo isset($user) ? $user['name'] : ""?>"
                    >
                </div>
            </div>
            <div class="form-group row mt-5 ">
                <label for="username" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                <input 
                    type=text 
                    class=form-control
                    name=username
                    id=username
                    value="<?php echo isset($user) ? $user['username'] : ""?>"
                    >                
                </div>
            </div>
            <div class="form-group row mt-5 ">
                <label for="lastname" class="col-sm-2 col-form-label">Lastname</label>
                <div class="col-sm-10">
                <input 
                    type=text 
                    class=form-control
                    name=lastname
                    id=lastname
                    value="<?php echo isset($user) ? $user['lastname'] : ""?>"
                    >                
                </div>
            </div>
            <div class="form-group row mt-5 ">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input 
                    type=text 
                    class=form-control
                    name=email
                    id=email
                    value="<?php echo isset($user) ? $user['email'] : ""?>"
                    >
                </div>
            </div>
            <input type="submit" value="Salvar" class="btn btn-secondary mt-5">
            <input type="hidden" name="id" value="<?php echo isset($user) ? $user['id'] : ""?>">

        </form>
        <?php echo form_close(); ?>

    </div>
    </div>

</body>

</html>