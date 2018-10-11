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
                    <th>Class Name</th>
                    <th>Number Of Students</th>
                    <th>Number Of Exams</th>
                    <th></th>
                    <th>(Temporary)</th>

                  </tr>
                </thead>

                <tbody>
                <?php if (isset($data['documents'])&&!empty($data['documents']) ): ?>
                  <?php foreach ($data['documents'] as $key => $value): ?>
                    <tr>
                      <td><?=$value['fields']['name']['stringValue']; ?></td>
                      <td><?=
                      isset($value['fields']['students']['arrayValue']['values'])?
                      count($value['fields']['students']['arrayValue']['values']):0; ?></td>
                      <td><?=
                      isset($value['fields']['exams']['arrayValue']['values'])?
                      count($value['fields']['exams']['arrayValue']['values']):0;
                       ?></td>
                  
                      <td><?= $this->Html->link('View',['controller'=>'pages','action'=>'loaduser?user=',$value['name']]); ?></td>
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
