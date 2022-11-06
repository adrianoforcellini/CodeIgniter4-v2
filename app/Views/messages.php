<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>User Messages</title>
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
        <div class="alert alert-info">
            <h3>
                <?php echo $message; ?>
            </h3>
            <p>
                <?php echo anchor(base_url('/users'), 'Voltar á Tabela.'); ?>
            </p>
        </div>
</body>

</html>