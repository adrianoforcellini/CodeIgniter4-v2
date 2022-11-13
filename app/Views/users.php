<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Users</title>
    <script>
        function sureToDelete() {
            if (!confirm("Deseja exluir o registro?")) {
                return false
            }
            return true
        }
    </script>
</head>

<body>
    <div class="container mt-5">
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Criar Usuário</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <?php echo form_open('users/store') ?>
                            <div class="form-group">
                                <label for="name" class="col-sm-2 col-form-label">Nome</label>
                                <div class="col-sm-10">
                                    <input type=text class=form-control name=name id=name value="<?php echo isset($user) ? $user['name'] : "" ?>">
                                </div>
                            </div>
                            <div class="form-group  ">
                                <label for="username" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type=text class=form-control name=username id=username value="<?php echo isset($user) ? $user['username'] : "" ?>">
                                </div>
                            </div>
                            <div class="form-group  ">
                                <label for="lastname" class="col-sm-2 col-form-label">Sobrenome</label>
                                <div class="col-sm-10">
                                    <input type=text class=form-control name=lastname id=lastname value="<?php echo isset($user) ? $user['lastname'] : "" ?>">
                                </div>
                            </div>
                            <div class="form-group  ">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type=text class=form-control name=email id=email value="<?php echo isset($user) ? $user['email'] : "" ?>">
                                </div>
                            </div>
                            <input type="submit" value="Salvar" class="btn btn-secondary mt-5">
                            <input type="hidden" name="id" value="<?php echo isset($user) ? $user['id'] : "" ?>">
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="addUser()">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Modal -->
        <?php echo anchor(base_url('users/create'), 'Novo Usuário', ['data-bs-toggle' => 'modal', 'data-bs-target' => "#exampleModal", 'class'  =>  "btn btn-secondary mb-5"]); ?>
        <table class="table  table-responsive">
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Name
                </th>
                <th>
                    Username
                </th>
                <th>
                    Lastname
                </th>
                <th>
                    Email
                </th>
                <th>
                    Ações
                </th>
            </tr>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?php echo $user['id'] ?></td>
                    <td><?php echo $user['name'] ?></td>
                    <td><?php echo $user['username'] ?></td>
                    <td><?php echo $user['lastname'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td> <?php echo anchor('users/edit/' . $user['id'], 'Editar', 'class="btn btn-secondary btn-sm"') ?>
                        <?php echo anchor('users/delete/' . $user['id'], 'Excluir', ['onclick' => 'return sureToDelete()', 'class'  =>  "btn btn-secondary btn-sm"]) ?></td>

                </tr>
            <?php endforeach ?>
        </table>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script>
        function addUser() {
            const name = $('#name').val()
            const username = $('#username').val()
            const lastname = $('#lastname').val()
            const email = $('#email').val()

            

            $.ajax({
                url: "<?php echo base_url(); ?>/users/insert",
                type: 'post',
                data: {
                    name: name,
                    username: username,
                    lastname: lastname,
                    email: email
                },
                success: function(data, status) {
                    console.log(status)
                    console.log(data)
                }
            })
        }
    </script>

</body>

</html>