<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Leads</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col"> 
     
    </div>
  </div>
  <div class="row">
    <div class="col">
      <h2>Lista de Leads</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Empresa</th>
            <th>Data</th>
          </tr>
        </thead>
        <tbody>
        <?php if(!empty($leads)): foreach($leads as $lead): ?>
          <tr>
            <td><?=$lead->name?></td>
            <td><?=$lead->tel?></td>
            <td><?=$lead->company?></td>
            <td><?=$lead->created_at?></td>
          </tr>
          <?php endforeach; endif;?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</body>
</html>

