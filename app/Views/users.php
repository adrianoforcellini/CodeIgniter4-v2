<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Users</title>
</head>

<body>
    <div class="container mt-5">
        <!-- Add User Modal -->
        <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Criar Usuário</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 col-form-label">Nome</label>
                                <div class="col-sm-10">
                                    <input type=text class=form-control name=name id=name value="" ?>
                                </div>
                            </div>
                            <div class="form-group  ">
                                <label for="username" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type=text class=form-control name=username id=username value="" ?>
                                </div>
                            </div>
                            <div class="form-group  ">
                                <label for="lastname" class="col-sm-2 col-form-label">Sobrenome</label>
                                <div class="col-sm-10">
                                    <input type=text class=form-control name=lastname id=lastname value="" ?>
                                </div>
                            </div>
                            <div class="form-group  ">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type=text class=form-control name=email id=email value="" ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary" onclick="addUser()">Salvar Usuário</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Add User Modal -->
        <!-- Edit User Modal -->
        <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Usuário</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 col-form-label">Nome</label>
                                <div class="col-sm-10">
                                    <input type=text class=form-control id=editName value="" ?>
                                </div>
                            </div>
                            <div class="form-group  ">
                                <label for="username" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type=text class=form-control name=username id=editUsername ?>
                                </div>
                            </div>
                            <div class="form-group  ">
                                <label for="lastname" class="col-sm-2 col-form-label">Sobrenome</label>
                                <div class="col-sm-10">
                                    <input type=text class=form-control name=lastname id=editLastname value="">
                                </div>
                            </div>
                            <div class="form-group  ">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type=text class=form-control name=email id=editEmail value="" ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="editId" value="">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary" onclick="updateUser()">Salvar Usuário</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Edit Modal -->
        <!-- Delete User Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Deletar Usuário</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <p>Tem certeza que deseja excluir o usuário?</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="deleteId" value="">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary" onclick="deleteUser()">Excluir Usuário</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Delete Modal -->
        <?php echo anchor(base_url('users/create'), 'Novo Usuário', ['data-bs-toggle' => 'modal', 'data-bs-target' => "#addUserModal", 'class'  =>  "btn btn-secondary mb-5"]); ?>
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
                    <td> <?php echo anchor('users/edit/' . $user['id'], 'Editar', ['onclick' => 'return populateUpdateUserModal(' . $user['id'] . ',"' . $user['name'] . '","' . $user['username'] . '","' . $user['lastname'] . '","' . $user['email'] . '" )', 'data-bs-toggle' => 'modal', 'data-bs-target' => "#editUserModal", 'class'  =>  "btn btn-secondary btn-sm"]) ?>
                        <?php echo anchor('users/delete/' . $user['id'], 'Excluir', ['onclick' => 'return populateDeleteModal(' . $user['id'] . ')', 'class'  =>  "btn btn-secondary btn-sm",  'data-bs-toggle' => 'modal', 'data-bs-target' => "#deleteModal"]) ?></td>

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
                        name,
                        username,
                        lastname,
                        email
                    }
                })
                .then(document.location.reload())
        }

        function populateUpdateUserModal(id, name, username, lastname, email) {
            $('#editId').val(id)
            $('#editName').val(name)
            $('#editUsername').val(username)
            $('#editLastname').val(lastname)
            $('#editEmail').val(email)
        }

        function updateUser() {
            const id = $('#editId').val()
            const name = $('#editName').val()
            const username = $('#editUsername').val()
            const lastname = $('#editLastname').val()
            const email = $('#editEmail').val()

            $.ajax({
                    url: "<?php echo base_url(); ?>/users/edit",
                    type: 'post',
                    data: {
                        id,
                        editUser: {
                            name,
                            username,
                            lastname,
                            email
                        },
                    }
                })
                .then(document.location.reload());
        }

        function populateDeleteModal(id) {
            $('#deleteId').val(id)

        }

        function deleteUser() {
            const id = $('#deleteId').val();
            console.log(id)
            $.ajax({
                    url: "<?php echo base_url(); ?>/users/delete",
                    type: 'post',
                    data: {
                        id
                    }
                })
                .then(document.location.reload())
        }
    </script>

</body>

</html>