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
        <?php echo anchor(base_url('users/create'), 'Novo Usuário', 'class="btn btn-secondary mb-5"'); ?>
        <table class="table  table-responsive" >
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
                    <td > <?php echo anchor('users/edit/' . $user['id'], 'Editar', 'class="btn btn-secondary btn-sm"') ?>
                        <?php echo anchor('users/delete/' . $user['id'], 'Excluir', ['onclick' => 'return sureToDelete()', 'class'  =>  "btn btn-secondary btn-sm"]) ?></td>

                </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>

</html>