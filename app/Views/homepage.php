<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Form and Table</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h3 class="text-center">Form</h3>
    <form action="/insert" method="post">
        <input type="hidden" name="ID" value="<?= isset($user['ID']) ? $user['ID'] : '' ?>">
        <div class="mb-3">
            <label for="FirstName" class="form-label">FirstName</label>
            <input type="text" class="form-control" name="FirstName" id="FirstName" placeholder="FirstName" value="<?= isset($user['First']) ? $user['First'] : '' ?>">
        </div>
        <div class="mb-3">
            <label for="LastName" class="form-label">LastName</label>
            <input type="text" class="form-control" name="LastName" id="LastName" placeholder="LastName" value="<?= isset($user['Last']) ? $user['Last'] : '' ?>">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>

    <h3 class="text-center mt-5">Table</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($activity as $us): ?>
                <tr>
                    <td><?= $us['ID'] ?></td>
                    <td><?= $us['First'] ?></td>
                    <td><?= $us['Last'] ?></td>
                    <td>
                        <a href="/delete/<?= $us['ID']?>" class="btn btn-danger">Delete</a>
                        <a href="/edit/<?= $us['ID']?>" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
