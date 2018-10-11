<div class="container-fluid">
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Papers</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Custom ID</th>
                    <th>Name </th>
                    <th>Score</th>
                    <th>Items</th>
                    <th>(Temporary)</th>

                  </tr>
                </thead>

                <tbody>
                  <?php if (isset($data['documents'])&&!empty($data['documents']) ): ?>
                  <?php foreach ($data['documents'] as $key => $value): ?>
                    <tr>
                      <td><?=$value['fields']['studentId']['stringValue']; ?></td>
                      <td><?=$value['fields']['name']['stringValue']; ?></td>
                      <td><?=$value['fields']['score']['integerValue']; ?></td>
                      <td><?=$value['fields']['items']['integerValue']; ?></td>
                      <!-- <td><?= $this->Html->link('View',['controller'=>'pages','action'=>'loaduser?user=',$value['name']]); ?></td> -->
                      <td><?=$value['name'] ?></td>
                    </tr>
                  <?php endforeach; ?>
                <?php endif; ?>
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
