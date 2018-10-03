<div class="container-fluid">
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Teacher</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Email</th>
                    <th></th>
                    <th>(Temporary)</th>

                  </tr>
                </thead>

                <tbody>
                  <?php foreach ($data['documents'] as $key => $value): ?>
                    <tr>
                      <td><?=$value['fields']['email']['stringValue']; ?></td>
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
