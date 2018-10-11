<div class="container-fluid">

    <div class="card mb-3 col-md-6">
      <div class="card-header">
        <i class="fas fa-table"></i>
        Exam</div>
        <div class="card-body">
            <div class="form-group">
              <label for=""> Custom ID </label>
              <input type="text" name="" value="<?= isset($data['fields']['customID']['stringValue'])?$data['fields']['customID']['stringValue']:'' ?>" disabled>
            </div>
            <div class="form-group">
              <label for=""> Last Name </label>
              <input type="text" name="" value="<?= isset($data['fields']['lastName']['stringValue'])?$data['fields']['lastName']['stringValue']:'' ?>" disabled>
            </div>
            <div class="form-group">
              <label for=""> First Name </label>
              <input type="text" name="" value="<?= isset($data['fields']['firstName']['stringValue'])?$data['fields']['firstName']['stringValue']:'' ?>" disabled>
            </div>
      
            <div class="form-group">
              <label for=""> Classes </label>
              <input type="text" name="" value="<?= isset($data['fields']['classes']['arrayValue']['values'])?count($data['fields']['classes']['arrayValue']['values']):'' ?>" disabled>
            </div>
          
        </div>
    </div>

</div>
<!-- <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Exams</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Exam Name</th>
                    <th>Items</th>
                    <th>Scanned</th>
                    <th></th>
                    <th>(Temporary)</th>

                  </tr>
                </thead>

                <tbody>
                <?php if (isset($data['documents'])&&!empty($data['documents']) ): ?>
                  <?php foreach ($data['documents'] as $key => $value): ?>
                    <tr>
                      <td><?=$value['fields']['name']['stringValue']; ?></td>
                      <td><?=$value['fields']['items']['integerValue']; ?></td>
                      <td><?=$value['fields']['scanned']['integerValue']; ?></td>
                      <td><?= $this->Html->link('View',['controller'=>'pages','action'=>'loadexam?exam=',$value['name']]); ?></td>
                      <td><?=$value['name'] ?></td>
                    </tr>
                  <?php endforeach; ?>
                <?php endif; ?>
                </tbody>
              </table>
            </div>
          </div>
    </div> -->
</div>


  <?= $this->Html->scriptStart(['block' => 'scriptBottom']);?>
  //<script type="text/javascript">
  // Call the dataTables jQuery plugin
  // $(document).ready(function() {
  // $('#dataTable').DataTable();
  // });
  // 

  //</script>
  <?= $this->Html->scriptEnd(); ?>
