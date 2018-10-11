<ul class="sidebar navbar-nav">
  <li class="nav-item">
    <a class="nav-link" href="<?= $this->Url->build(['controller'=>'pages','action'=>'users']); ?>">
      <i class="fas fa-fw fa-table"></i>
      <span>Teachers</span></a>
  </li>
  <?php if ($this->request->session()->check('SELECTED_USER')): ?>
  <li class="nav-item ">
  <!-- <li class="nav-item active"> -->
    <a class="nav-link" href="<?= $this->Url->build(['controller'=>'pages','action'=>'exams']); ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Exam</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= $this->Url->build(['controller'=>'pages','action'=>'classes']); ?>">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Class</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= $this->Url->build(['controller'=>'pages','action'=>'students']); ?>">
      <i class="fas fa-fw fa-table"></i>
      <span>Student</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= $this->Url->build(['controller'=>'pages','action'=>'papers']); ?>">
      <i class="fas fa-fw fa-table"></i>
      <span>Papers</span></a>
  </li>
<?php endif; ?>
</ul>
