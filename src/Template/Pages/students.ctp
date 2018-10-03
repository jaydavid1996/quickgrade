<div class="container-fluid">
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Students</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Custom ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th></th>
                    <th>(Temporary)</th>

                  </tr>
                </thead>

                <tbody>
                  <?php foreach ($data['documents'] as $key => $value): ?>
                    <tr>
                      <td><?=$value['fields']['customID']['stringValue']; ?></td>
                      <td><?=$value['fields']['firstName']['stringValue']; ?></td>
                      <td><?=$value['fields']['lastName']['stringValue']; ?></td>
                      <td><?= $this->Html->link('View',['controller'=>'pages','action'=>'loaduser?user=',$value['name']]); ?></td>
                      <td><?=$value['name'] ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
    </div>
</div>
  <?= $this->Html->scriptStart(['block' => 'scriptBottom']);?>
  //<script type="text/javascript">
  // Call the dataTables jQuery plugin
  $(document).ready(function() {
  $('#dataTable').DataTable();
  });


  //</script>
  <?= $this->Html->scriptEnd(); ?>
